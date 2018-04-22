<?php

require_once 'TagParserInterface.php';

/**
 * Light html tag parser
 *
 * @author Roman Hzhyvinskyi <hzhyvinskyi@gmail.com>
 */
class TagParser implements TagParserInterface
{
    /**
     * Finds matches via regex
     * @param string $url
     * @param string $tag
     * @return array
     */
    public function process(string $url, string $tag): array
    {
        $str = file_get_contents($url);

        if ($str == false) {
            return ['Invalid URL'];
        }

        preg_match_all("#<{$tag}.*?>(.*?)<\/{$tag}>#sui", $str, $matches);

        if (empty($matches[1])) {
            return ['There are no such tags on the page'];
        } else {
            return $matches[1];
        }
    }
}
