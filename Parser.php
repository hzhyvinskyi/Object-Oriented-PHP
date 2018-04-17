<?php

require_once 'ParserInterface.php';

/**
 * @author Roman Hzhyvinskyi <hzhyvinskyi@gmail.com>
 */
class Parser implements ParserInterface {
    public function process(string $url, string $tag):array
    {
        $str = file_get_contents($url);
        preg_match_all("#<{$tag}[^>]*?>(.+?)</{$tag}>#sui", $str, $matches);
        return $matches[1];
    }
}
