<?php

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2013 Jonathan Vollebregt (jnvsor@gmail.com), Rokas Šleinius (raveren@gmail.com)
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of
 * this software and associated documentation files (the "Software"), to deal in
 * the Software without restriction, including without limitation the rights to
 * use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
 * the Software, and to permit persons to whom the Software is furnished to do so,
 * subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 * FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 * IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace Kint;

use InvalidArgumentException;
use Kint\Zval\BlobValue;
use ReflectionNamedType;
use ReflectionType;

/**
 * A collection of utility methods. Should all be static methods with no dependencies.
 */
final class Utils
{
    /**
     * @codeCoverageIgnore
     */
    private function __construct()
    {
    }

    /**
     * Turns a byte value into a human-readable representation.
     *
     * @param int $value Amount of bytes
     *
     * @return array Human readable value and unit
     */
    public static function getHumanReadableBytes($value)
    {
        static $unit = ['B', 'KB', 'MB', 'GB', 'TB'];

        $negative = $value < 0;
        $value = \abs($value);

        if ($value < 1024) {
            $i = 0;
            $value = \floor($value);
        } elseif ($value < 0xfffcccccccccccc >> 40) {
            $i = 1;
        } elseif ($value < 0xfffcccccccccccc >> 30) {
            $i = 2;
        } elseif ($value < 0xfffcccccccccccc >> 20) {
            $i = 3;
        } else {
            $i = 4;
        }

        if ($i) {
            $value = $value / \pow(1024, $i);
        }

        if ($negative) {
            $value *= -1;
        }

        return [
            'value' => \round($value, 1),
            'unit' => $unit[$i],
        ];
    }

    public static function isSequential(array $array)
    {
        return \array_keys($array) === \range(0, \count($array) - 1);
    }

    public static function isAssoc(array $array)
    {
        return (bool) \count(\array_filter(\array_keys($array), 'is_string'));
    }

    public static function composerGetExtras($key = 'kint')
    {
        $extras = [];

        if (0 === \strpos(KINT_DIR, 'phar://')) {
            // Only run inside phar file, so skip for code coverage
            return $extras; // @codeCoverageIgnore
        }

        $folder = KINT_DIR.'/vendor';

        for ($i = 0; $i < 4; ++$i) {
            $installed = $folder.'/composer/installed.json';

            if (\file_exists($installed) && \is_readable($installed)) {
                $packages = \json_decode(\file_get_contents($installed), true);

                foreach ($packages as $package) {
                    if (isset($package['extra'][$key]) && \is_array($package['extra'][$key])) {
                        $extras = \array_replace($extras, $package['extra'][$key]);
                    }
                }

                $folder = \dirname($folder);

                if (\file_exists($folder.'/composer.json') && \is_readable($folder.'/composer.json')) {
                    $composer = \json_decode(\file_get_contents($folder.'/composer.json'), true);

                    if (isset($composer['extra'][$key]) && \is_array($composer['extra'][$key])) {
                        $extras = \array_replace($extras, $composer['extra'][$key]);
                    }
                }

                break;
            }

            $folder = \dirname($folder);
        }

        return $extras;
    }

    /**
     * @codeCoverageIgnore
     */
    public static function composerSkipFlags()
    {
        $extras = self::composerGetExtras();

        if (!empty($extras['disable-facade']) && !\defined('KINT_SKIP_FACADE')) {
            \define('KINT_SKIP_FACADE', true);
        }

        if (!empty($extras['disable-helpers']) && !\defined('KINT_SKIP_HELPERS')) {
            \define('KINT_SKIP_HELPERS', true);
        }
    }

    public static function isTrace(array $trace)
    {
        if (!self::isSequential($trace)) {
            return false;
        }

        static $bt_structure = [
            'function' => 'string',
            'line' => 'integer',
            'file' => 'string',
            'class' => 'string',
            'object' => 'object',
            'type' => 'string',
            'args' => 'array',
        ];

        $file_found = false;

        foreach ($trace as $frame) {
            if (!\is_array($frame) || !isset($frame['function'])) {
                return false;
            }

            foreach ($frame as $key => $val) {
                if (!isset($bt_structure[$key])) {
                    return false;
                }

                if (\gettype($val) !== $bt_structure[$key]) {
                    return false;
                }

                if ('file' === $key) {
                    $file_found = true;
                }
            }
        }

        return $file_found;
    }

    public static function traceFrameIsListed(array $frame, array $matches)
    {
        if (isset($frame['class'])) {
            $called = [\strtolower($frame['class']), \strtolower($frame['function'])];
        } else {
            $called = \strtolower($frame['function']);
        }

        return \in_array($called, $matches, true);
    }

    public static function normalizeAliases(array &$aliases)
    {
        static $name_regex = '[a-zA-Z_\\x7f-\\xff][a-zA-Z0-9_\\x7f-\\xff]*';

        foreach ($aliases as $index => &$alias) {
            if (\is_array($alias) && 2 === \count($alias)) {
                $alias = \array_values(\array_filter($alias, 'is_string'));

                if (2 === \count($alias) &&
                    \preg_match('/^'.$name_regex.'$/', $alias[1]) &&
                    \preg_match('/^\\\\?('.$name_regex.'\\\\)*'.$name_regex.'$/', $alias[0])
                ) {
                    $alias = [
                        \strtolower(\ltrim($alias[0], '\\')),
                        \strtolower($alias[1]),
                    ];
                } else {
                    unset($aliases[$index]);
                    continue;
                }
            } elseif (\is_string($alias)) {
                if (\preg_match('/^\\\\?('.$name_regex.'\\\\)*'.$name_regex.'$/', $alias)) {
                    $alias = \explode('\\', \strtolower($alias));
                    $alias = \end($alias);
                } else {
                    unset($aliases[$index]);
                    continue;
                }
            } else {
                unset($aliases[$index]);
            }
        }

        $aliases = \array_values($aliases);
    }

    public static function truncateString($input, $length = PHP_INT_MAX, $end = '...', $encoding = false)
    {
        $length = (int) $length;
        $endlength = BlobValue::strlen($end);

        if ($endlength >= $length) {
            throw new InvalidArgumentException('Can\'t truncate a string to '.$length.' characters if ending with string '.$endlength.' characters long');
        }

        if (BlobValue::strlen($input, $encoding) > $length) {
            return BlobValue::substr($input, 0, $length - $endlength, $encoding).$end;
        }

        return $input;
    }

    public static function getTypeString(ReflectionType $type)
    {
        if ($type instanceof ReflectionNamedType) {
            return $type->getName();
        }

        return (string) $type; // @codeCoverageIgnore
    }
}
