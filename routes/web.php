<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/project/{id}', [HomeController::class, 'show'])->name('project.show');

// Auth routes...

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('login.post');
    Route::get('/auth/google', [AuthController::class, 'googleLogin'])->name('login.google');
    Route::get('/auth/google/callback', [AuthController::class, 'googleCallback'])->name('login.google.callback');
});

// Admin routes...
Route::middleware(['auth'])->prefix('/admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Profile
    Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::post('/profile/update', [AdminController::class, 'updateProfile'])->name('admin.profile.update');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    // Change Password
    Route::get('/change-password', [AdminController::class, 'changePassword'])->name('admin.change.password');
    Route::post('/change-password', [AdminController::class, 'updatePassword'])->name('admin.change.password.update');

    // About Section
    Route::get('/about', [AboutController::class, 'about'])->name('admin.about');
    Route::get('/about/edit', [AboutController::class, 'editAbout'])->name('admin.about.edit');
    Route::post('/about/update', [AboutController::class, 'updateAbout'])->name('admin.about.update');

    // Skill Section
    Route::get('/skills', [SkillController::class, 'skills'])->name('admin.skills');
    Route::get('/skills/create', [SkillController::class, 'createSkill'])->name('admin.skills.create');
    Route::post('/skills/store', [SkillController::class, 'storeSkill'])->name('admin.skills.store');
    Route::get('/skills/edit/{id}', [SkillController::class, 'editSkill'])->name('admin.skills.edit');
    Route::put('/skills/update/{id}', [SkillController::class, 'updateSkill'])->name('admin.skills.update');
    Route::get('/skills/delete/{id}', [SkillController::class, 'deleteSkill'])->name('admin.skills.delete');
    
    // Project Section
    Route::get('/projects', [ProjectController::class, 'projects'])->name('admin.projects');
    Route::get('/projects/create', [ProjectController::class, 'createProject'])->name('admin.projects.create');
    Route::post('/projects/store', [ProjectController::class, 'storeProject'])->name('admin.projects.store');
    Route::get('/projects/edit/{id}', [ProjectController::class, 'editProject'])->name('admin.projects.edit');
    Route::put('/projects/update/{id}', [ProjectController::class, 'updateProject'])->name('admin.projects.update');
    Route::get('/projects/delete/{id}', [ProjectController::class, 'deleteProject'])->name('admin.projects.delete');
});
