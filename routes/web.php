<?php

use App\Http\Controllers\{
    AuditorController,
    HomeController,
    ProfileController,
    BallotController,
    BusinessManagerController,
    CandidateController,
    PeaceOfficerController,
    PIOController,
    PresidentController,
    SecretaryController,
    TreasurerController,
    VicePresidentController,
    UserController
};

use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/ballot', [BallotController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/results', [BallotController::class, 'results'])->name('ballots.results');
    Route::post('ballots/preview', [BallotController::class, 'preview'])->name('ballot.preview');
    Route::post('ballots/cast', [BallotController::class, 'cast'])->name('ballot.cast');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/ballots', BallotController::class);
    Route::resource('/candidates', CandidateController::class)->only(['index']);
    Route::resource('/presidents', PresidentController::class);
    Route::resource('/vice_presidents', VicePresidentController::class);
    Route::resource('/secretaries', SecretaryController::class);
    Route::resource('/treasurers', TreasurerController::class);
    Route::resource('/pios', PIOController::class);
    Route::resource('/auditors', AuditorController::class);
    Route::resource('/peace_officers', PeaceOfficerController::class);
    Route::resource('/business_managers', BusinessManagerController::class);
    Route::resource('/users', UserController::class);
    Route::get('/users/approve/{id}', [UserController::class, 'approve'])->name('user.approve');
});

require __DIR__.'/auth.php';
