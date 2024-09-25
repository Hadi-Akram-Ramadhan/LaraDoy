<?php
/**
 * Home View
 * 
 * Ini adalah view untuk halaman home.
 * View ini nampilim welcome message dan list users dari database.
 * 
 * Data yang dibutuhin:
 * - $name: string
 * - $users: array of user objects
 */
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di LaraDoy</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="storage\image\fern.jpg">
</head>
<body class="bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-2xl max-w-3xl w-full">
        <h1 class="text-5xl font-bold mb-6 text-center text-gray-800">Selamat Datang di <span class="text-purple-600">LaraDoy</span></h1>
        <p class="text-2xl text-gray-600 mb-8 text-center">Framework PHP sederhana dan powerful untuk pengembangan web modern</p>
        
        <div class="bg-gradient-to-r from-purple-200 to-pink-200 p-6 rounded-lg mb-8">
            <p class="text-xl text-gray-800 font-semibold text-center">
                🚀 Selamat! Kamu baru saja mengambil langkah pertama ke dunia LaraDoy.
                <br>
                Bersiaplah untuk membangun sesuatu yang luar biasa!
            </p>
        </div>
        
        <div class="grid grid-cols-2 gap-6 mb-8">
            <div class="bg-purple-100 p-4 rounded-lg transform hover:scale-105 transition duration-300">
                <h3 class="text-lg font-semibold mb-2 text-purple-700">Mulai Cepat</h3>
                <p class="text-gray-700">Mulai dan jalankan dalam hitungan menit dengan dokumentasi yang mudah diikuti.</p>
            </div>
            <div class="bg-pink-100 p-4 rounded-lg transform hover:scale-105 transition duration-300">
                <h3 class="text-lg font-semibold mb-2 text-pink-700">Fitur Powerful</h3>
                <p class="text-gray-700">Dilengkapi tools untuk routing, manajemen database, dan banyak lagi.</p>
            </div>
        </div>
        
        <div class="text-center">
            <a href="https://github.com/Hadi-Akram-Ramadhan/LaraDoy/blob/main/README.md" class="bg-purple-600 text-white px-6 py-3 rounded-full inline-block hover:bg-purple-700 transition duration-300 transform hover:scale-105">Baca Dokumentasi</a>
            
        </div>
    </div>

    <script>
        // Tambahkan elemen dinamis di sini jika diperlukan
        console.log("Selamat datang di LaraDoy!");
        
        // Animasikan pesan selamat datang
        setTimeout(() => {
            const pesanSelamatDatang = document.querySelector('.bg-gradient-to-r.from-purple-200');
            pesanSelamatDatang.classList.add('animate-pulse');
        }, 1000);
    </script>
</body>
</html>