<?php
//ini adalah file controller yang digunakan pada projek
//kamu bisa nambahin lagi file controller yang lain menyesuaikan dengan seberapa besar lingkup projek kamu
/**
 * Home Controller
 * 
 * Controller ini nge-handle request untuk halaman home dan about.
 * 
 * Methods:
 * - index(): Nampilim halaman home dengan data users dari database
 * - about(): Nampilim halaman about
 * 
 * @package Controllers
 */
require_once 'core/Controller.php';

class HomeController extends Controller {
    public function index() {
        $stmt = $this->db->query("SELECT * FROM users LIMIT 5");
        $users = $stmt->fetchAll();
        
        $this->view('home', ['name' => 'Hadi', 'users' => $users]);
    }

    public function about() {
        $this->view('about');
    }
}
