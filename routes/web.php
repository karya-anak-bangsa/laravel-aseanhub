<?php

# halaman auth
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterParticipantsController;
use App\Http\Controllers\Auth\RegisterVotersController;
use App\Http\Controllers\Auth\VerifyParticipantsEmailController;

# halaman frontend
use App\Http\Controllers\Pages\LandingPageController;

# halaman Backend Landing Pages
use App\Http\Controllers\Admin\AboutAseanHubController as Adm_AboutAseanHubController;
use App\Http\Controllers\Admin\OpeningSpeechesController as Adm_OpeningSpeechesController;
use App\Http\Controllers\Admin\AboutCompetitionController as Adm_AboutCompetitionController;
use App\Http\Controllers\Admin\TimelineController as Adm_TimelineController;
use App\Http\Controllers\Admin\SiteAreaController as Adm_SiteAreaController;
use App\Http\Controllers\Admin\PhotoGalleryController as Adm_PhotoGalleryController;

# halaman Backend Admin
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\JudgesController as Adm_JudgesController;
use App\Http\Controllers\Admin\ParticipantsController as Adm_ParticipantsController;
use App\Http\Controllers\Admin\VotersController as Adm_VotersController;

# halaman backend - Judges

# halaman backend - Participants
use App\Http\Controllers\Participants\UpdateProfileController as Prp_UpdateProfileController;
use App\Http\Controllers\Participants\UrbanDesignController as Prp_UrbanDesignController;
use App\Http\Controllers\Participants\AssessmentController as Prp_AssessmentController;

# halaman backend - Voters

# Other
use Illuminate\Support\Facades\Route;

# ------------------------------------------------------------------------------------------------- #
# Route Auth -------------------------------------------------------------------------------------- #
# ------------------------------------------------------------------------------------------------- #
Route::middleware('guest.role')->group(function () {

    # proses login
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.process');

    # register participants
    Route::get('/register/participants', [RegisterParticipantsController::class, 'create'])->name('participants.register.create');
    Route::post('/register/participants', [RegisterParticipantsController::class, 'store'])->name('participants.register.store');

    # register voters
    Route::get('/register/voters', [RegisterVotersController::class, 'create'])->name('voters.register.create');
    Route::post('/register/voters', [RegisterVotersController::class, 'store'])->name('voters.register.store');

    # Verify Participants Email
    Route::get('/verify-email/participants/{id_participants}', [VerifyParticipantsEmailController::class, 'create'])->name('participants.verify-email.create');
    Route::post('/verify-email/participants/{id_participants}', [VerifyParticipantsEmailController::class, 'store'])->name('participants.verify-email.store');

    // # Verify Voters Email
    // Route::get('/verify-email/voters/{id_voters}', [VerifyVotersEmailController::class, 'create'])
    //     ->name('voters.verify-email.create');

    // Route::post('/verify-email/voters/{id_voters}', [VerifyVotersEmailController::class, 'store'])
    //     ->name('voters.verify-email.store');
});
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

# ------------------------------------------------------------------------------------------------- #
# Route Halaman Frontend -------------------------------------------------------------------------- #
# ------------------------------------------------------------------------------------------------- #
Route::get('/', [LandingPageController::class, 'index'])->name('aseanhub');

# ------------------------------------------------------------------------------------------------- #
# Route Halaman Backend - Admin ------------------------------------------------------------------- #
# ------------------------------------------------------------------------------------------------- #
Route::middleware(['auth:admin', 'role:admin'])->prefix('admin')->name('admin.')
    ->group(function () {

        # Bagian 1 - Dashboard
        Route::get('/dashboard', [DashboardController::class, 'showAdmin'])->name('dashboard');

        # Bagian 2 - Backend Admin
        Route::resource('judges', Adm_JudgesController::class);
        Route::resource('participants', Adm_ParticipantsController::class);
        Route::resource('voters', Adm_VotersController::class);

        # Bagian 3 - Backend Landing Page
        Route::resource('about-aseanhub', Adm_AboutAseanHubController::class);
        Route::resource('opening-speeches', Adm_OpeningSpeechesController::class);
        Route::resource('about-competition', Adm_AboutCompetitionController::class);
        Route::resource('timeline', Adm_TimelineController::class);
        Route::resource('site-area', Adm_SiteAreaController::class);
        Route::resource('photo-gallery', Adm_PhotoGalleryController::class);
    });

# ------------------------------------------------------------------------------------------------- #
# Route Halaman Backend - Judges ------------------------------------------------------------------ #
# ------------------------------------------------------------------------------------------------- #
Route::middleware(['auth:judges', 'role:judges'])->prefix('judges')->name('judges.')
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'showJudges'])->name('dashboard');
    });

# ------------------------------------------------------------------------------------------------- #
# Route Halaman Backend - Participants ------------------------------------------------------------ #
# ------------------------------------------------------------------------------------------------- #
Route::middleware(['auth:participants', 'role:participants'])->prefix('participants')->name('participants.')
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'showParticipants'])->name('dashboard');
        Route::resource('update-profile', Prp_UpdateProfileController::class);
        Route::resource('urban-design', Prp_UrbanDesignController::class);
        Route::resource('assessment', Prp_AssessmentController::class);
    });

# ------------------------------------------------------------------------------------------------- #
# Route Halaman Backend - Voters ------------------------------------------------------------------ #
# ------------------------------------------------------------------------------------------------- #
Route::middleware(['auth:voters', 'role:voters'])->prefix('voters')->name('voters.')
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'showVoters'])->name('dashboard');
    });
