<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AvaliableBookcontroller;
use App\Http\Controllers\RevieBookController;
use App\Http\Controllers\issucontroller;
use App\Http\Controllers\overduecontroller;
use App\Http\Controllers\reportcontroller;
use App\Http\Controllers\writtereviewcontroller;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

   Route::get('/avaBook', [DashboardController::class, 'index'])->name('avaBook.index');


 Route::get('/review-books', [RevieBookController::class, 'index'])->name('revBook.index');

Route::post('/rbooks', [RevieBookController::class, 'store'])->name('review.store');



   



 Route::resource('revBook', writtereviewcontroller::class);




   Route::get('/issue', [issucontroller::class, 'index'])->name('issue.index');
    
   Route::get('/over', [overduecontroller::class, 'index'])->name('over.index');
    
   Route::get('/report', [reportcontroller::class, 'index'])->name('report.index');

   Route::get('/review', [writtereviewcontroller::class, 'index'])->name('writereview.index');
    
    
});

  

require __DIR__.'/auth.php';
