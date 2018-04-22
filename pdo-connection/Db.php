<?php

/**
 * DB connection class via PDO
 *
 * @author Roman Hzhyvinskyi <hzhyvinskyi@gmail.com>
 */
class Db
{
    /**
     * @param $host
     * @param $dbname
     * @param $user
     * @param $password
     * @return PDO
     */
    public static function getConnection($host, $dbname, $user, $password)
    {
        try {
            $db = new PDO("mysql:host={$host};dbname={$dbname}", $user, $password);
            $db->exec("set names utf-8");

            return $db;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
