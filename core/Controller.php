<?php

/**
 * Core Controller Class
 * 
 * Ini adalah kelas dasar untuk semua controller di framework lo.
 * Kelas ini nge-handle koneksi database dan method view yang dipake di semua controller.
 * 
 * Cara pake:
 * 1. Extend kelas ini di setiap controller baru yang lo bikin
 * 2. Pake method view() buat ngerender view dengan data
 * 
 * @package Core
 */

require_once 'core/Database.php';

class Controller {
    protected $db;

    public function __construct() {
        $config = require_once 'config/database.php';
        $this->db = Database::getInstance($config)->getConnection();
    }

    public function view($view, $data = []) {
        extract($data); // Convert array keys to variables
        require_once "views/{$view}.php";
    }
}
