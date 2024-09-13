<?php

use App\Http\controllers\UriController;

Route::get('uri', [UriController::class, 'index']);

use App\Http\controllers\ContactController;

Route::get('contact', [ContactController::class, 'index']);
Route::post('contact', [ContactController::class, 'hasil']);

use App\Http\controllers\JsonInputController;

Route::get('/json-form', [JsonInputController::class, 'showForm']);
Route::post('/json-submit', [JsonInputController::class, 'handleForm']);

use App\Http\controllers\DeterminingController;

Route::get('/check-input', [DeterminingController::class, 'showForm']);
Route::post('/check-input', [DeterminingController::class, 'checkInput']);

use App\Http\controllers\DataController;

Route::get('/retrieve-input', [DataController::class, 'showForm']);
Route::post('/retrieve-input', [DataController::class, 'retrieveInput']);

use App\Http\controllers\PartialDataController;

Route::get('/retrieve-partial-input', [PartialDataController::class, 'showForm']);
Route::post('/retrieve-partial-input', [PartialDataController::class, 'retrievePartialInput']);

use App\Http\controllers\FileController;

Route::get('/upload-file', [FileController::class, 'showForm']);
Route::post('/upload-file', [FileController::class, 'uploadFile']);


use App\Http\Controllers\UploadController;

Route::get('/upload', [UploadController::class, 'showForm']);
Route::post('/upload', [UploadController::class, 'handleUpload']);

use App\Http\controllers\FileUploadController;

Route::get('/upload-files', [FileUploadController::class, 'showForm']);
Route::post('/upload-files', [FileUploadController::class, 'uploadFile']);

use App\Http\controllers\JsonController;

Route::get('/json-response', [JsonController::class, 'getJsonResponse']);
Route::post('/json-response', [JsonController::class, 'postJsonResponse']);

use App\Http\controllers\FileDownloadController;

Route::get('download', [FileDownloadController::class, 'download'])->name('file.download');

use App\Http\controllers\FilesController;

Route::get('/download-File', [FilesController::class, 'downloadFile']);
Route::get('/view-file', [FilesController::class, 'viewFile']);

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile/{id}/{name}/{address}', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/redirect-example', [HomeController::class, 'redirectExample'])->name('redirect.example');

use App\Http\Controllers\PageController;

Route::get('/page', [PageController::class, 'showForm']);
Route::post('/submit-form', [PageController::class, 'SubmitForm']);
Route::get('/success', [PageController::class, 'success']);

//flased session data 
Route::get('/halaman-awal', function() {
    return redirect('/halaman-tujuan')->with('pesan', 'ini adalah pesan dari halaman awal');
});

Route::get('/flasedview', function() {
    $pesan = session('pesan');
    return view('submissions',['pesan' => $pesan]);
});

//product-Passing Data To Views
use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index']);

//article
use App\Http\Controllers\ArticleController;

Route::get('/articles', [ArticleController::class, 'index']);

//events
use App\Http\Controllers\EventController;

Route::get('/events', [EventController::class, 'index']);

//rumah-home
use App\Http\Controllers\rumahController;

Route::get('/rumah', [rumahController::class, 'index']);

//book
use App\Http\Controllers\BookController;

Route::get('/books', [BookController::class, 'index']);

//users
use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index']);

//review
use App\Http\Controllers\ReviewController;

Route::get('/review', [ReviewController::class, 'show']);

//tasks
use App\Http\Controllers\TaskController;

// Route untuk daftar tugas
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');

// Route untuk menampilkan form tambah tugas
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');

// Route untuk menyimpan tugas baru
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');

// Route untuk menampilkan detail tugas
Route::get('/tasks/{id}', [TaskController::class, 'show'])->name('tasks.show');

//comments
use App\Http\Controllers\CommentController;

Route::get('/comments', [CommentController::class, 'index']);

//music
// routes/web.php
use App\Http\Controllers\MusicController;

Route::get('/music', [MusicController::class, 'index']);

use App\Http\Controllers\BasicController;

Route::get('/basic', [BasicController::class, 'index']);

//Basic Usage Hashing
use App\Http\Controllers\HashingController;

Route::get('/hash', [HashingController::class, 'index']);
Route::post('/hash', [HashingController::class, 'hashPassword']);

//auth
use App\Http\Controllers\AuthController;

Route::get('/verify-password', function () {
    return view('verify');
});

Route::post('/verify-password', [AuthController::class, 'verifyPassword'])->name('password.verify');

//url
use App\Http\Controllers\OrderController;

Route::get('/order/{id}', [OrderController::class, 'show'])->name('order.show');

// str_limit
use App\Http\Controllers\PosstController;

Route::get('/posts', [PosstController::class, 'index']);

//random
use App\Http\Controllers\RandomStringController;

Route::get('/random', [RandomStringController::class, 'generate']);

//url
// routes/web.php
use App\Http\Controllers\MovieController;

Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');

//url
use App\Http\Controllers\UserrController;

Route::get('/user/{id}', [UserrController::class, 'show'])->name('userr.show');  // Corrected here
Route::get('/profile', [UserrController::class, 'profile'])->name('profile');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/url-helpers', [UserrController::class, 'urlHelpers']);

//songs
use App\Http\Controllers\SongController;

Route::get('/songs/search', [SongController::class, 'search'])->name('songs.search');

//filmn
use App\Http\Controllers\FilmController;

Route::get('films', [FilmController::class, 'index'])->name('films.index');
Route::get('films/{id}', [FilmController::class, 'show'])->name('films.show');

//form
use App\Http\Controllers\FormController;

// Route untuk menampilkan form
Route::get('/submit-form', [FormController::class, 'showForm'])->name('form.show');

// Route untuk menangani form submission
Route::post('/submit-form', [FormController::class, 'handleForm'])->name('form.handle');

//example
use App\Http\Controllers\ExampleController;

Route::get('/example', [ExampleController::class, 'index'])->name('example.index');
Route::post('/example', [ExampleController::class, 'store'])->name('example.store');

//mail
use App\Http\Controllers\SendingMailController;
Route::get('/sendingmail',[SendingMailController::class, 'index']);

//customes
use App\Http\Controllers\CustomerController;
Route::get('/customers',[CustomerController::class, 'index']);

//items
use App\Http\Controllers\ItemController;

Route::get('/items', [ItemController::class, 'index']);

//beverage
use App\Http\Controllers\BeverageController;

Route::get('/beverages', [BeverageController::class, 'index']);

//school
use App\Http\Controllers\SchoolController;

Route::get('/school-structure', [SchoolController::class, 'index']);

//session data
use App\Http\Controllers\SessionController;

Route::get('/session/set', [SessionController::class, 'storeSessionData'])->name('session.set');
Route::get('/session/get', [SessionController::class, 'getSessionData'])->name('session.view'); 
Route::get('/session/delete', [SessionController::class, 'deleteSessionData'])->name('session.delete');

//chace cek
use App\Http\Controllers\CacheController;

Route::get('/check-cache', [CacheController::class, 'checkCache']);
Route::post('/set-cache', [CacheController::class, 'setCache']);

//session3
use App\Http\Controllers\Session3Controller;

Route::get('/form-session', [Session3Controller::class, 'showForm'])->name('form.show');
Route::post('/form-session', [Session3Controller::class, 'storeForm'])->name('form.store');

//cart
use App\Http\Controllers\CartController;

Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');

//immployees
use App\Http\Controllers\EmployeeController;

Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::delete('/employees/{id}', [EmployeeController::class, 'destroy'])->name('employees.destroy');

//memory
use App\Http\Controllers\MemoryController;

Route::get('/memory/set', [MemoryController::class, 'setMemory'])->name('memory.set');
Route::get('/memory/delete', [MemoryController::class, 'deleteMemory'])->name('memory.delete');

//child
use App\Http\Controllers\ChildController;

Route::get('/child/create', [ChildController::class, 'create']);
Route::post('/child/store', [ChildController::class, 'store']);

//register
// routes/web.php
use App\Http\Controllers\RegisterController;

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

//categories
use App\Http\Controllers\CategoryController;
Route::get('/categories', [CategoryController::class, 'index']);

//brand
use App\Http\Controllers\BrandController;

Route::get('/brand/{id}', [BrandController::class, 'show']);
Route::get('/brand/name/{id}', [BrandController::class, 'showColumn']);

//atlet
use App\Http\Controllers\AtletController;

Route::get('/atlets', [AtletController::class, 'index']);

//pembeli
use App\Http\Controllers\PembeliController;

Route::get('/pembeli', [PembeliController::class, 'index']);

//Specifying A Select Clause student
use App\Http\Controllers\StudentController;

Route::get('/students', [StudentController::class, 'index']);

//Raw Expressions -projects
use App\Http\Controllers\ProjectController;

Route::get('/projects', [ProjectController::class, 'index']);

//sales
use App\Http\Controllers\SaleController;

Route::get('/sales', [SaleController::class, 'index']);

//post
use App\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index']);

//doctor
use App\Http\Controllers\DoctorController;

Route::get('/doctors', [DoctorController::class, 'index']);

//teacher
use App\Http\Controllers\TeacherController;

Route::get('/teachers', [TeacherController::class, 'index']);


//handphonne
use App\Http\Controllers\HandphoneController;

Route::get('/handphones', [HandphoneController::class, 'index']);

//snak
use App\Http\Controllers\SnackController;

Route::get('/snacks', [SnackController::class, 'index']);

//whereNotBetween
use App\Http\Controllers\RentalController;

Route::get('/rentals', [RentalController::class, 'index'])->name('rentals.index');

//whereIn
use App\Http\Controllers\ReservationController;

Route::get('/reservations', [ReservationController::class, 'index']);

//where notin
use App\Http\Controllers\FurnitureController;

Route::get('/furnitures', [FurnitureController::class, 'index']);

//where  null
use App\Http\Controllers\DisneyController;

Route::get('/disneys', [DisneyController::class, 'index']);

//where not null
use App\Http\Controllers\AssignmentController;

Route::get('/assignments', [AssignmentController::class, 'index']);

//Advanced Where Clauses
use App\Http\Controllers\ServiceController;

Route::get('/services', [ServiceController::class, 'index'])->name('services.index');

//orderby
use App\Http\Controllers\FruitController;

Route::get('/fruits', [FruitController::class, 'index']);

//groupBy
use App\Http\Controllers\TransaksiController;

Route::get('/transaksi', [TransaksiController::class, 'index']);

//having
use App\Http\Controllers\PaymentController;

Route::get('/payments', [PaymentController::class, 'index']);

//skip
use App\Http\Controllers\SeriesController;

Route::get('/series', [SeriesController::class, 'index'])->name('series.index');

//havingRaw
use App\Http\Controllers\PurchasesController;

Route::get('/purchases', [PurchasesController::class, 'index']);

//take
use App\Http\Controllers\ElectronicsController;

Route::get('/electronics', [ElectronicsController::class, 'index']);

//update
use App\Http\Controllers\AlbumController;

Route::get('albums', [AlbumController::class, 'index'])->name('albums.index'); // Menampilkan daftar album
Route::get('albums/create', [AlbumController::class, 'create'])->name('albums.create'); // Menampilkan form untuk menambah album
Route::post('albums', [AlbumController::class, 'store'])->name('albums.store'); // Menyimpan album baru

Route::get('albums/{album}/edit', [AlbumController::class, 'edit'])->name('albums.edit'); // Menampilkan form untuk mengedit album
Route::post('albums/{album}', [AlbumController::class, 'update'])->name('albums.update'); // Memperbarui data album

Route::post('albums/{album}/delete', [AlbumController::class, 'destroy'])->name('albums.destroy'); // Menghapus album
