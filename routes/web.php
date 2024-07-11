<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SabourController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MaterialController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::get('/school', [SabourController::class, 'school']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


// Route::get('/year/{id}', [SabourController::class, 'showYear'])->name('year.show');
// Route::get('/course/{id}', [SabourController::class, 'showCourse'])->name('course.show');
Route::get('/add-courses', [SabourController::class, 'show_dash'])->name('show_dash');


Route::post('/store-name', [SabourController::class, 'store'])->name('store-name');

Route::get('materials/{course_id}', [MaterialController::class, 'index'])->name('materials.index');
Route::post('materials/{course_id}', [MaterialController::class, 'store'])->name('materials.store');
Route::put('materials/{material}', [MaterialController::class, 'update'])->name('materials.update');
Route::delete('materials/{material}', [MaterialController::class, 'destroy'])->name('materials.destroy');

// Route::get('/courses/{year_id}', [MaterialController::class, 'index'])->name('courses.show');

Route::get('/courses/{year_id}', [MaterialController::class, 'show'])->name('courses.show');
Route::post('/courses', [MaterialController::class, 'store1'])->name('courses.store');
// Route for displaying the update form
Route::get('/courses/{id}/edit', [MaterialController::class, 'update1'])->name('courses.edit');
Route::put('/courses/{id}', [MaterialController::class, 'update2'])->name('courses.update');

Route::get('/année/{id}', [SabourController::class, 'data_for_each_year'])->name('year.show');

