<?php

/**
 * @author Roman Hzhyvinskyi <hzhyvinskyi@gmail.com>
 */
interface TagParserInterface
{
    /**
     * @param string $url
     * @param string $tag
     * @return array
     */
    public function process(string $url, string $tag): array;
}
