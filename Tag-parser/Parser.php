<?php

require_once 'ParserInterface.php';

/**
 * Light html tag parser
 *
 * @author Roman Hzhyvinskyi <hzhyvinskyi@gmail.com>
 */
class Parser implements ParserInterface
{
    /**
     * @param string $url
     * @param string $tag
     * @return array
     */
    public function process(string $url, string $tag):array
    {
        $str = file_get_contents($url);
        preg_match_all("#<{$tag}[^>]*?>(.+?)</{$tag}>#sui", $str, $matches);
        return $matches[1];
    }
}
