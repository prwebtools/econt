<?php

namespace Todstoychev\Econt\Normalizer;

class ArrayNormalizer
{
    /**
     * @param array $options
     * @return array
     */
    public function toSnakeCase(array $options)
    {
        $keys = array_keys($options);
        $array = [];

        foreach ($keys as $key) {
            preg_match_all('/[A-Z]/', $key, $matches);
            $matches = array_shift($matches);
            $formattedKey = $key;

            if (!empty($matches)) {
                foreach ($matches as $match) {
                    $formattedKey = str_replace($match, '_'.strtolower($match), $key);
                }
            }

            if (is_array($options[$key])) {
                $array[$formattedKey] = $this->toSnakeCase($options[$key]);
            } else {
                $array[$formattedKey] = $options[$key];
            }
        }

        return $array;
    }

    /**
     * @param array $options
     * @return array
     */
    public function toCamelCase(array $options)
    {
        $keys = array_keys($options);
        $array = [];

        foreach ($keys as $key) {
            preg_match_all('/_[a-z]/', $key, $matches);
            $matches = array_shift($matches);
            $formattedKey = $key;

            if (!empty($matches)) {
                foreach ($matches as $match) {
                    $replace = str_replace('_', '', $match);
                    $formattedKey = str_replace($match, ucfirst($replace), $key);
                }
            }

            if (is_array($options[$key])) {
                $array[$formattedKey] = $this->toCamelCase($options[$key]);
            } else {
                $array[$formattedKey] = $options[$key];
            }
        }

        return $array;
    }
}