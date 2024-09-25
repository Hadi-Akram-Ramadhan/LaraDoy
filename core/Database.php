<?php

/**
 * Database Connection Class
 * 
 * Kelas ini nge-handle koneksi ke database pake PDO.
 * Ini pake pattern Singleton buat mastiin cuma ada satu instance koneksi database.
 * 
 * Cara pake:
 * $db = Database::getInstance($config)->getConnection();
 * 
 * @package Core
 */

class Database {
    private $connection;
    private static $instance = null;

    private function __construct($config) {
        $dsn = "mysql:host={$config['host']};dbname={$config['database']};charset=utf8mb4";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        $this->connection = new PDO($dsn, $config['username'], $config['password'], $options);
    }

    public static function getInstance($config) {
        if (self::$instance === null) {
            self::$instance = new self($config);
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }
}