# LaraDoy

Yo, welcome ke LaraDoy! Framework PHP simpel tapi powerful, terinspirasi dari Laravel. Perfect buat lo yang pengen bikin web app cepet tanpa ribet.

## Fitur Utama

- Routing simpel
- MVC Architecture
- Database abstraction pake PDO
- View rendering
- Singleton pattern buat koneksi database

## Cara Install

1. Clone repo ini:
   ```
   git clone https://github.com/Hadi-Akram-Ramadhan/LaraDoy.git
   ```

2. Masuk ke direktori project:
   ```
   cd LaraDoy
   ```

3. Setup database lo di `config/database.php`:
   ```php:config/database.php
   startLine: 12
   endLine: 17
   ```

4. Bikin database baru dengan nama 'framework' (atau sesuai yang lo set di config).

5. Import struktur database (asumsi lo udah punya file SQL):
   ```
   mysql -u root -p framework < database.sql
   ```

## Cara Pake

1. Bikin controller baru di folder `controllers`. Contoh `UserController.php`:

   ```php
   <?php
   require_once 'core/Controller.php';

   class UserController extends Controller {
       public function index() {
           $users = $this->db->query("SELECT * FROM users")->fetchAll();
           $this->view('users/index', ['users' => $users]);
       }
   }
   ```

2. Bikin view baru di folder `views`. Contoh `views/users/index.php`:

   ```php
   <!DOCTYPE html>
   <html>
   <head>
       <title>Users</title>
   </head>
   <body>
       <h1>Users List</h1>
       <ul>
           <?php foreach ($users as $user): ?>
               <li><?= $user['name']; ?></li>
           <?php endforeach; ?>
       </ul>
   </body>
   </html>
   ```

3. Tambahin route baru di `index.php`:

   ```php:index.php
   startLine: 28
   endLine: 30
   ```

   Tambahin line ini:
   ```php
   $router->add('/users', 'UserController@index');
   ```

4. Jalanin server PHP:
   ```
   php -S localhost:8000
   ```

5. Setup .htaccess
   (untuk yang bagian "RewriteBase /nama-direktori-projek-kamu/", itu diubah sesuai dengan nama folder/direktori projek lo agar sesuai dengan setup projek lo)
   ```
   RewriteEngine On
   RewriteBase /nama-direktori-projek-lo/ 
   RewriteCond %{REQUEST_FILENAME} !-f
   RewriteCond %{REQUEST_FILENAME} !-d
   RewriteRule ^(.*)$ index.php?url=$1 [QSA,L]
   ```

7. Buka browser, ketik `http://localhost:8000/users`

## Struktur Project

- `config/`: Isinya file konfigurasi
- `controllers/`: Tempat controller-controller lo
- `core/`: Komponen inti framework
- `helpers/`: Fungsi-fungsi helper
- `views/`: File-file view
- `index.php`: Entry point aplikasi

## Tips & Saran

1. **Routing**: Selalu definisiin route baru di `index.php` tiap bikin controller atau method baru.

2. **Database**: Pake prepared statements buat hindarin SQL injection:
   ```php
   $stmt = $this->db->prepare("SELECT * FROM users WHERE id = ?");
   $stmt->execute([$id]);
   $user = $stmt->fetch();
   ```

3. **Views**: Bisa pake helper function `view()` di controller:
   ```php
   view('users/show', ['user' => $user]);
   ```

4. **Nambahin Middleware**: Lo bisa extend `Router` class buat support middleware:
   ```php
   class Router {
       // ... kode yang udah ada ...
       
       public function addMiddleware($route, $middleware) {
           // Implementasi middleware di sini
       }
   }
   ```

5. **Error Handling**: Tambahin try-catch di `Router::dispatch()` buat handle error global.

6. **Autoloading**: Implementasiin autoloading pake Composer buat load class otomatis.

7. **Environment Variables**: Pake file `.env` buat simpen konfigurasi sensitif.

8. **Testing**: Mulai implementasiin unit testing pake PHPUnit.

## Kontribusi

Mau kontribusi? Jangan ragu buat bikin pull request atau buka issue!

atau kalian bisa email ke: hadooyy90@gmail.com kalau punya pertanyaan atau sekedar pengen ngobrol soal framework ini!

## License

LaraDoy di-license di bawah Apache2.0 License. Bebas dipake, dimodif, didistribusiin. Tapi inget, no warranty ya!

---

Semoga README ini membantu, Hadi! Kalo ada yang kurang jelas atau perlu ditambahin, langsung bilang aja ya. Goodluck sama framework lo!
