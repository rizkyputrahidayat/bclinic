<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SlidersController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\SlimmingController;
use App\Http\Controllers\BupdateController;
use App\Http\Controllers\CareersController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('about');
});
// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/Slimming', [HomeController::class, 'Slimming']);
Route::get('/facebody', [HomeController::class, 'facebody']);
Route::get('/Facial', [HomeController::class, 'Facial']);
Route::get('/careers', [HomeController::class, 'careers']);
Route::get('/Story', [HomeController::class, 'Story']);
Route::get('/Location', [HomeController::class, 'Location']);
Route::get('/SpecialOffer', [HomeController::class, 'SpecialOffer']);
Route::get('/Faq', [HomeController::class, 'Faq']);
Route::get('/Blog', [HomeController::class, 'Blog']);
Route::get('/Bupdate', [HomeController::class, 'Bupdate']);
Route::get('/Video', [HomeController::class, 'Video']);
Route::get('/Servicesproducts', [HomeController::class, 'Servicesproducts']);
Route::get('/Skincare', [HomeController::class, 'Skincare']);
Route::get('/ALLtestimoni', [HomeController::class, 'ALLtestimoni']);
Route::get('/OurExpert', [HomeController::class, 'OurExpert']);

// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/testimonials', [TestimonialsController::class, 'index'])->name('testimonials.store');
Route::get('/bupdate', [BupdateController::class, 'index'])->name('bupdate.store');
Route::get('/Careers', [CareersController::class, 'index'])->name('Careers.store');

Route::resource('story', StoryController::class);
Route::resource('carousel', CarouselController::class);
Route::resource('slimming', SlimmingController::class);

// Route::get('gambar-slider/{nama_file}', function ($nama_file) {
//     $path = storage_path('app/public/images/slider/' . $nama_file);
//     if (!File::exists($path)) {
//         abort(404);
//     }
//     $file = File::get($path);
//     $type = File::mimeType($path);
//     $response = Response::make($file, 200);
//     $response->header("Content-Type", $type);
//     return $response;
// })->name('gambar-slider');
