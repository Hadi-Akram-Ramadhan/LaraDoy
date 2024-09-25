<?php
/**
 * View Helper Function
 * 
 * Fungsi ini ngebantu buat ngerender view dengan data yang dikasih.
 * 
 * Cara pake:
 * view('nama_view', ['key' => 'value']);
 * 
 * @package Helpers
 */
function view($viewName, $data = []) {
    extract($data); // Convert array keys to variables
    include "views/{$viewName}.php";
}
