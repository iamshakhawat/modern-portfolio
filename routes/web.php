<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CvController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\CertificationController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/projects', [HomeController::class, 'allprojects'])->name('project.all');
Route::get('/project/{slug}', [HomeController::class, 'showProject'])->name('project.show');
Route::get('/projects/load-more', [HomeController::class, 'loadmore'])->name('loadmore');
Route::post('/contact-store', [HomeController::class, 'storeContact'])->name('contact.store');

// Download Cv  
Route::get('/download-cv', [HomeController::class, 'downloadCV'])->name('cv.download');

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});


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

    // Hero Routes...
    Route::get('/hero', [HeroController::class, 'hero'])->name('admin.hero');
    Route::get('/hero/edit', [HeroController::class, 'edithero'])->name('admin.hero.edit');
    Route::post('/hero/update', [HeroController::class, 'updatehero'])->name('admin.hero.update');


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


    // Category Section
    Route::get('/category', [CategoryController::class, 'category'])->name('admin.category');
    Route::get('/category/create', [CategoryController::class, 'createCategory'])->name('admin.category.create');
    Route::post('/category/store', [CategoryController::class, 'storeCategory'])->name('admin.category.store');
    Route::get('/category/edit/{id}', [CategoryController::class, 'editCategory'])->name('admin.category.edit');
    Route::put('/category/update/{id}', [CategoryController::class, 'updateCategory'])->name('admin.category.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'deleteCategory'])->name('admin.category.delete');


    // Project Section
    Route::get('/projects', [ProjectController::class, 'projects'])->name('admin.projects');
    Route::get('/projects/create', [ProjectController::class, 'createProject'])->name('admin.projects.create');
    Route::post('/projects/store', [ProjectController::class, 'storeProject'])->name('admin.projects.store');
    Route::get('/projects/edit/{id}', [ProjectController::class, 'editProject'])->name('admin.projects.edit');
    Route::put('/projects/update/{id}', [ProjectController::class, 'updateProject'])->name('admin.projects.update');
    Route::get('/projects/delete/{id}', [ProjectController::class, 'deleteProject'])->name('admin.projects.delete');
    Route::get('/projects/image/delete/{id}', [ProjectController::class, 'projectImageDelete'])->name('admin.projects.image.delete');


    // Education Section
    Route::get('/educations', [EducationController::class, 'educations'])->name('admin.educations');
    Route::get('/educations/create', [EducationController::class, 'createEducation'])->name('admin.educations.create');
    Route::post('/educations/store', [EducationController::class, 'storeEducation'])->name('admin.educations.store');
    Route::get('/educations/edit/{id}', [EducationController::class, 'editEducation'])->name('admin.educations.edit');
    Route::put('/educations/update/{id}', [EducationController::class, 'updateEducation'])->name('admin.educations.update');
    Route::get('/educations/delete/{id}', [EducationController::class, 'deleteEducation'])->name('admin.educations.delete');

    // Experience Routes...
    Route::get('/experiences', [ExperienceController::class, 'experiences'])->name('admin.experiences');
    Route::get('/experiences/create', [ExperienceController::class, 'createExperience'])->name('admin.experiences.create');
    Route::post('/experiences/store', [ExperienceController::class, 'storeExperience'])->name('admin.experiences.store');
    Route::get('/experiences/edit/{id}', [ExperienceController::class, 'editExperience'])->name('admin.experiences.edit');
    Route::put('/experiences/update/{id}', [ExperienceController::class, 'updateExperience'])->name('admin.experiences.update');
    Route::get('/experiences/delete/{id}', [ExperienceController::class, 'deleteExperience'])->name('admin.experiences.delete');

    // Service Routes...
    Route::get('/services', [ServiceController::class, 'services'])->name('admin.services');
    Route::get('/services/create', [ServiceController::class, 'createService'])->name('admin.services.create');
    Route::post('/services/store', [ServiceController::class, 'storeService'])->name('admin.services.store');
    Route::get('/services/edit/{id}',   [ServiceController::class, 'editService'])->name('admin.services.edit');
    Route::put('/services/update/{id}', [ServiceController::class, 'updateService'])->name('admin.services.update');
    Route::get('/services/delete/{id}', [ServiceController::class, 'deleteService'])->name('admin.services.delete');

    // Testimonial Routes...
    Route::get('/testimonials', [TestimonialController::class, 'testimonials'])->name('admin.testimonials');
    Route::get('/testimonials/create', [TestimonialController::class, 'createTestimonial'])->name('admin.testimonials.create');
    Route::post('/testimonials/store', [TestimonialController::class, 'storeTestimonial'])->name('admin.testimonials.store');
    Route::get('/testimonials/edit/{id}', [TestimonialController::class, 'editTestimonial'])->name('admin.testimonials.edit');
    Route::put('/testimonials/update/{id}', [TestimonialController::class, 'updateTestimonial'])->name('admin.testimonials.update');
    Route::get('/testimonials/delete/{id}', [TestimonialController::class, 'deleteTestimonial'])->name('admin.testimonials.delete');

    // Achievement Routes...
    Route::get('/achievements', [AchievementController::class, 'achievements'])->name('admin.achievements');
    Route::get('/achievements/create', [AchievementController::class, 'createAchievement'])->name('admin.achievements.create');
    Route::post('/achievements/store', [AchievementController::class, 'storeAchievement'])->name('admin.achievements.store');
    Route::get('/achievements/edit/{id}', [AchievementController::class, 'editAchievement'])->name('admin.achievements.edit');
    Route::put('/achievements/update/{id}', [AchievementController::class, 'updateAchievement'])->name('admin.achievements.update');
    Route::get('/achievements/delete/{id}', [AchievementController::class, 'deleteAchievement'])->name('admin.achievements.delete');

    // Brand Routes...
    Route::get('/brands', [BrandController::class, 'brands'])->name('admin.brands');
    Route::get('/brands/create', [BrandController::class, 'createBrand'])->name('admin.brands.create');
    Route::post('/brands/store', [BrandController::class, 'storeBrand'])->name('admin.brands.store');
    Route::get('/brands/edit/{id}', [BrandController::class, 'editBrand'])->name('admin.brands.edit');
    Route::put('/brands/update/{id}', [BrandController::class, 'updateBrand'])->name('admin.brands.update');
    Route::get('/brands/delete/{id}', [BrandController::class, 'deleteBrand'])->name('admin.brands.delete');

    // Contact Messages
    Route::get('/contacts', [ContactController::class, 'contacts'])->name('admin.contacts');
    Route::get('/contacts/delete/{id}', [ContactController::class, 'deleteContact'])->name('admin.contacts.delete');

    // Social Routes...
    Route::get('/socials', [SocialController::class, 'socials'])->name('admin.socials');
    Route::get('/socials/create', [SocialController::class, 'createSocial'])->name('admin.socials.create');
    Route::post('/socials/store', [SocialController::class, 'storeSocial'])->name('admin.socials.store');
    Route::get('/socials/edit/{id}', [SocialController::class, 'editSocial'])->name('admin.socials.edit');
    Route::put('/socials/update/{id}', [SocialController::class, 'updateSocial'])->name('admin.socials.update');
    Route::get('/socials/delete/{id}', [SocialController::class, 'deleteSocial'])->name('admin.socials.delete');

    // CV Routes...
    Route::get('/cv', [CvController::class, 'cv'])->name('admin.cv');
    Route::get('/cv/add', [CvController::class, 'addCV'])->name('admin.cv.add');
    Route::post('/cv/store', [CvController::class, 'storeCV'])->name('admin.cv.store');
    Route::get('/cv/delete/{id}', [CvController::class, 'deleteCV'])->name('admin.cv.delete');
    Route::get('/admin/cv/stream/{id}', [CvController::class, 'stream'])->name('admin.cv.stream');

    // Certification Routes...
    Route::get('/certifications', [CertificationController::class, 'certifications'])->name('admin.certifications');
    Route::get('/certifications/create', [CertificationController::class, 'createCertification'])->name('admin.certifications.create');
    Route::post('/certifications/store', [CertificationController::class, 'storeCertification'])->name('admin.certifications.store');
    Route::get('/certifications/edit/{id}', [CertificationController::class, 'editCertification'])->name('admin.certifications.edit');
    Route::put('/certifications/update/{id}', [CertificationController::class, 'updateCertification'])->name('admin.certifications.update');
    Route::get('/certifications/delete/{id}', [CertificationController::class, 'deleteCertification'])->name('admin.certifications.delete');
});
