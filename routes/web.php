<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\SlimmingController;
use App\Http\Controllers\FaceController;
use App\Http\Controllers\FacialController;
use App\Http\Controllers\BupdateController;
use App\Http\Controllers\CareersController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\SpecialOfferController;
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

Route::get('/', [HomeController::class, 'About'])->name('ABOUT');
Route::get('/p-facebody', [HomeController::class, 'facebody'])->name('p-facebody');
Route::get('/p-slimming', [HomeController::class, 'Slimming'])->name('p-slimming');
Route::get('/p-facial', [HomeController::class, 'Facial'])->name('p-facial');
Route::get('/p-story', [HomeController::class, 'Story'])->name('p-Story'); 
Route::get('/p-career', [HomeController::class, 'Career'])->name('p-career'); 
Route::get('/p-location', [HomeController::class, 'Location'])->name('p-location');
Route::get('/p-special-offer', [HomeController::class, 'SpecialOffer'])->name('p-special-offer');
Route::get('/p-faq', [HomeController::class, 'Faq'])->name('p-faq');
Route::get('/p-blog', [HomeController::class, 'Blog'])->name('p-blog');
Route::get('/p-bupdate', [HomeController::class, 'Bupdate'])->name('p-bupdate');
Route::get('/p-video', [HomeController::class, 'Video'])->name('p-video');
Route::get('/p-services-products', [HomeController::class, 'Servicesproducts'])->name('p-services-products');
Route::get('/p-skincare', [HomeController::class, 'Skincare'])->name('p-skincare');
Route::get('/p-alltestimonial', [HomeController::class, 'ALLtestimoni']); // belum ada fitur
Route::get('/p-our-expert', [HomeController::class, 'OurExpert']); // belum ada fitur

// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/testimonials', [TestimonialsController::class, 'index'])->name('testimonials.store');
Route::get('/bupdate', [BupdateController::class, 'index'])->name('bupdate.store');
Route::get('/Careers', [CareersController::class, 'index'])->name('Careers.store');

Route::resource('carousel', CarouselController::class);
Route::resource('slimming', SlimmingController::class);
Route::resource('face', FaceController::class);
Route::resource('facial', FacialController::class);
Route::resource('dokter', DokterController::class);
Route::resource('special_offer', SpecialOfferController::class);
Route::resource('skincare', SkincareController::class);

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