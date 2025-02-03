<?php

use App\Events\Example;
use Illuminate\Support\Facades\Route;

// Use ProfileController
use App\Http\Controllers\ProfileController;
// Add Broadcast
use Illuminate\Support\Facades\Broadcast;

//Add the User Model
use app\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/broadcast', function () {
    broadcast(new Example(User::find(1)));
});

// Route::post('/broadcast', function () {
//     // Broadcast::on('global')
//     //     ->as('Message')
//     //     ->with([
//     //         'body' => str()->random(10)
//     //     ])
//     //     ->sendNow();

//     broadcast(new Example());
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
