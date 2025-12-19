<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\ConditionsTreatController;
use App\Http\Controllers\HowItWorksController;
use App\Http\Controllers\FAQSController;
use App\Http\Controllers\RecoveryController;
use App\Http\Controllers\WhatWeTreatController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\BlogsDetailsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\AboutController;

use App\Http\Controllers\AccountLoginController;
use App\Http\Controllers\PatientMedicalHistoryController;
use App\Http\Controllers\PatientConsentController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\BackendBlogController;
use App\Http\Controllers\PatientMedicalHistoryBackendController;
use App\Http\Controllers\PatientConsentBackendController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ConditionsSubcategoryBackendController;
use App\Http\Controllers\ConditionsCategoriesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AccountSettingsController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ServiceAdminController;
use App\Http\Controllers\InnerBannerController;
use App\Http\Controllers\ContactSettingController;
use App\Http\Controllers\ConditionsBackendController;
use App\Http\Controllers\NeedHelpController;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

Route::get("/", [WelcomeController::class, "index"])->name("Home.welcome");
Route::post("/", [WelcomeController::class, "store"])->name("Home.welcome.store");

Route::get("/contact", [ContactController::class, "index"])->name("Home.contact");
Route::post("/contact", [ContactController::class, "store"])->name("Home.contact.store");

Route::get("/privacy-policy", [PrivacyPolicyController::class, "index"])->name("Home.privacy-policy");

Route::get("/conditions-we-treat", [ConditionsTreatController::class, "index"])->name("Home.conditions-we-treat");
Route::get("/conditions-we-treat/{subcategorySlug}", [ConditionsTreatController::class, "show"])
    ->name("Home.conditions.we.treat");

Route::get("/how-it-works", [HowItWorksController::class, "index"])->name("Home.how-it-works");
Route::get("/faqs", [FAQSController::class, "index"])->name("Home.faqs");
Route::get("/recovery-bundles", [RecoveryController::class, "index"])->name("Home.recovery-bundles");
Route::get("/what-we-treat", [WhatWeTreatController::class, "index"])->name("Home.what-we-treat");
Route::get("/terms", [TermsController::class, "index"])->name("Home.terms");

Route::get("/blogs", [BlogsController::class, "index"])->name("Home.blogs");
Route::get("/blogs_details/{slug}", [BlogsDetailsController::class, "show"])->name("Home.blogs_details");
Route::get("/frontend-blog-search", [BlogsController::class, "search"])->name("frontend.blog.search");

Route::get("/services", [ServicesController::class, "index"])->name("Home.services");
Route::get("/services/{service:slug}", [ServicesController::class, "show"])->name("Home.services.show");

Route::get("/about", [AboutController::class, "index"])->name("Home.about");

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

Route::get('/accountlogin', [AccountLoginController::class, 'index'])->name('auth.accountlogin');
Route::post('/accountlogin', [AccountLoginController::class, 'store'])->name('auth.accountlogin.store');

Route::get('/register', [AccountLoginController::class, 'showRegisterForm'])->name('auth.register');
Route::post('/register', [AccountLoginController::class, 'register'])->name('auth.register.store');

Route::post('/logout', [AccountLoginController::class, 'logout'])->name('auth.logout');

Route::get('/forget-password', [AccountLoginController::class, 'showForgetForm'])->name('auth.forget-password');
Route::post('/forget-password', [AccountLoginController::class, 'submitForgetForm'])->name('auth.forget-password');

Route::get('/reset-password/{token}', [AccountLoginController::class, 'showResetForm'])->name('auth.reset-password');
Route::post('/reset-password', [AccountLoginController::class, 'submitResetForm'])->name('auth.reset-password');

/*
|--------------------------------------------------------------------------
| Patient Protected Routes
|--------------------------------------------------------------------------
| Patient ka middleware yahi chalega, aur Admin ko yahan aane ki zarurat nahi
*/

Route::middleware(['auth', 'accountlogin'])->group(function () {

    Route::get('/submit-medical-history', [PatientMedicalHistoryController::class, 'index'])
        ->name('Home.submit-medical-history');

    Route::post('/patient-medical-history', [PatientMedicalHistoryController::class, 'store'])
        ->name('Home.patient-medical-history.store');

    Route::post('/patient-consent/store', [PatientConsentController::class, 'store'])
        ->name('Home.patient-consent.store');
});

/*
|--------------------------------------------------------------------------
| Admin Dashboard Routes
|--------------------------------------------------------------------------
| Saari admin routes dashboard prefix me
*/

Route::middleware(['auth', 'accountlogin'])
    ->prefix('dashboard')
    ->group(function () {

        Route::get('/', [DashboardController::class, 'index'])->name('Dashboard.admin.dashboard');

        // Users
        Route::get('/users', [UsersController::class, 'index'])->name('Dashboard.admin.users.index');
        Route::get('/users/add', [UsersController::class, 'add'])->name('Dashboard.admin.users.add');
        Route::post('/users/store', [UsersController::class, 'store'])->name('Dashboard.admin.users.store');
        Route::get('/users/edit/{id}', [UsersController::class, 'edit'])->name('Dashboard.admin.users.edit');
        Route::put('/users/update/{id}', [UsersController::class, 'update'])->name('Dashboard.admin.users.update');
        Route::delete('/users/delete/{id}', [UsersController::class, 'delete'])->name('Dashboard.admin.users.delete');
        Route::get('/users/view/{id}', [UsersController::class, 'view'])->name('Dashboard.admin.users.view');

        // Roles
        Route::get('/roles', [RolesController::class, 'index'])->name('Dashboard.admin.roles.index');
        Route::get('/roles/add', [RolesController::class, 'add'])->name('Dashboard.admin.roles.add');
        Route::post('/roles/store', [RolesController::class, 'store'])->name('Dashboard.admin.roles.store');
        Route::get('/roles/edit/{id}', [RolesController::class, 'edit'])->name('Dashboard.admin.roles.edit');
        Route::put('/roles/update/{id}', [RolesController::class, 'update'])->name('Dashboard.admin.roles.update');
        Route::delete('/roles/delete/{id}', [RolesController::class, 'delete'])->name('Dashboard.admin.roles.delete');
        Route::get('/roles/view/{id}', [RolesController::class, 'view'])->name('Dashboard.admin.roles.view');

        // Blogs
        Route::get('/blog', [BackendBlogController::class, 'index'])->name('Dashboard.admin.blog.index');
        Route::get('/blog/add', [BackendBlogController::class, 'add'])->name('Dashboard.admin.blog.add');
        Route::post('/blog/store', [BackendBlogController::class, 'store'])->name('Dashboard.admin.blog.store');
        Route::get('/blog/edit/{id}', [BackendBlogController::class, 'edit'])->name('Dashboard.admin.blog.edit');
        Route::put('/blog/update/{id}', [BackendBlogController::class, 'update'])->name('Dashboard.admin.blog.update');
        Route::delete('/blog/delete/{id}', [BackendBlogController::class, 'delete'])->name('Dashboard.admin.blog.delete');
        Route::get('/blog-search', [BackendBlogController::class, 'search'])->name('blog.search');
        Route::get('/blog/view/{id}', [BackendBlogController::class, 'view'])->name('Dashboard.admin.blog.view');

        // Patient History
        Route::get('/patient_history', [PatientMedicalHistoryBackendController::class, 'index'])->name('Dashboard.admin.patient_history.index');
        Route::get('/patient_history/view/{id}', [PatientMedicalHistoryBackendController::class, 'view'])->name('Dashboard.admin.patient_history.view');
        Route::get('/patient_history/{id}/export/pdf', [PatientMedicalHistoryBackendController::class, 'exportPdf'])->name('Dashboard.admin.patient_history.export.pdf');
        Route::get('/patient_history/{id}/export/csv', [PatientMedicalHistoryBackendController::class, 'exportCsv'])->name('Dashboard.admin.patient_history.export.csv');
        Route::get('/patient_history/{id}/export/word', [PatientMedicalHistoryBackendController::class, 'exportWord'])->name('Dashboard.admin.patient_history.export.word');

        // Patient Consent
        Route::get('/patient_consent', [PatientConsentBackendController::class, 'index'])->name('Dashboard.admin.patient_consent.index');
        Route::get('/patient_consent/view/{id}', [PatientConsentBackendController::class, 'view'])->name('Dashboard.admin.patient_consent.view');
        Route::get('/admin/patient-consent/{id}/pdf', [PatientConsentBackendController::class, 'pdf'])->name('Dashboard.admin.patient_consent.pdf');
        Route::get('/admin/patient-consent/{id}/csv', [PatientConsentBackendController::class, 'csv'])->name('Dashboard.admin.patient_consent.csv');
        Route::get('/admin/patient-consent/{id}/word', [PatientConsentBackendController::class, 'word'])->name('Dashboard.admin.patient_consent.word');

        // Contact Us
        Route::get('/contactus', [ContactUsController::class, 'index'])->name('Dashboard.admin.contactus.index');
        Route::get('/contactus/add', [ContactUsController::class, 'add'])->name('Dashboard.admin.contactus.add');
        Route::post('/contactus/store', [ContactUsController::class, 'store'])->name('Dashboard.admin.contactus.store');
        Route::get('/contactus/edit/{id}', [ContactUsController::class, 'edit'])->name('Dashboard.admin.contactus.edit');
        Route::put('/contactus/update/{id}', [ContactUsController::class, 'update'])->name('Dashboard.admin.contactus.update');
        Route::delete('/contactus/delete/{id}', [ContactUsController::class, 'destroy'])->name('Dashboard.admin.contactus.delete');
        Route::get('/contactus/view/{id}', [ContactUsController::class, 'view'])->name('Dashboard.admin.contactus.view');

        // Category
        Route::get('/category', [CategoryController::class, 'index'])->name('Dashboard.admin.category.index');
        Route::get('/category/add', [CategoryController::class, 'add'])->name('Dashboard.admin.category.add');
        Route::post('/category/store', [CategoryController::class, 'store'])->name('Dashboard.admin.category.store');
        Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('Dashboard.admin.category.edit');
        Route::put('/category/update/{id}', [CategoryController::class, 'update'])->name('Dashboard.admin.category.update');
        Route::delete('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('Dashboard.admin.category.delete');
        Route::get('/category/view/{id}', [CategoryController::class, 'view'])->name('Dashboard.admin.category.view');

        // Conditions Categories
        Route::get('/conditions-categories', [ConditionsCategoriesController::class, 'index'])->name('Dashboard.admin.conditions-categories.index');
        Route::get('/conditions-categories/add', [ConditionsCategoriesController::class, 'add'])->name('Dashboard.admin.conditions-categories.add');
        Route::post('/conditions-categories/store', [ConditionsCategoriesController::class, 'store'])->name('Dashboard.admin.conditions-categories.store');
        Route::get('/conditions-categories/edit/{id}', [ConditionsCategoriesController::class, 'edit'])->name('Dashboard.admin.conditions-categories.edit');
        Route::put('/conditions-categories/update/{id}', [ConditionsCategoriesController::class, 'update'])->name('Dashboard.admin.conditions-categories.update');
        Route::delete('/conditions-categories/delete/{id}', [ConditionsCategoriesController::class, 'destroy'])->name('Dashboard.admin.conditions-categories.delete');
        Route::get('/conditions-categories/view/{id}', [ConditionsCategoriesController::class, 'view'])->name('Dashboard.admin.conditions-categories.view');

        // Subcategories
        Route::get('/subcategories', [ConditionsSubcategoryBackendController::class, 'index'])->name('Dashboard.admin.subcategories.index');
        Route::get('/subcategories/add', [ConditionsSubcategoryBackendController::class, 'add'])->name('Dashboard.admin.subcategories.add');
        Route::post('/subcategories/store', [ConditionsSubcategoryBackendController::class, 'store'])->name('Dashboard.admin.subcategories.store');
        Route::get('/subcategories/edit/{id}', [ConditionsSubcategoryBackendController::class, 'edit'])->name('Dashboard.admin.subcategories.edit');
        Route::put('/subcategories/update/{id}', [ConditionsSubcategoryBackendController::class, 'update'])->name('Dashboard.admin.subcategories.update');
Route::delete('/subcategories/delete/{id}', [ConditionsSubcategoryBackendController::class, 'destroy'])
    ->name('Dashboard.admin.subcategories.delete');

        // Conditions
        Route::get('/conditions', [ConditionsBackendController::class, 'index'])->name('Dashboard.admin.conditions.index');
        Route::get('/conditions/add', [ConditionsBackendController::class, 'add'])->name('Dashboard.admin.conditions.add');
        Route::post('/conditions/store', [ConditionsBackendController::class, 'store'])->name('Dashboard.admin.conditions.store');
        Route::get('/conditions/edit/{id}', [ConditionsBackendController::class, 'edit'])->name('Dashboard.admin.conditions.edit');
        Route::put('/conditions/update/{id}', [ConditionsBackendController::class, 'update'])->name('Dashboard.admin.conditions.update');
        Route::delete('/conditions/delete/{id}', [ConditionsBackendController::class, 'delete'])->name('Dashboard.admin.conditions.delete');
        Route::get('/conditions/view/{id}', [ConditionsBackendController::class, 'view'])->name('Dashboard.admin.conditions.view');

        // Profile and settings
        Route::get('/profile', [ProfileController::class, 'index'])->name('Dashboard.admin.profile.index');
        Route::get('/account_settings', [AccountSettingsController::class, 'index'])->name('Dashboard.admin.account_settings.index');
        Route::put('/account_settings/{id?}', [AccountSettingsController::class, 'update'])->name('Dashboard.admin.account_settings.update');

        // Banner and inner banner
        Route::get('/banner', [BannerController::class, 'index'])->name('Dashboard.admin.banner.index');
        Route::get('/banner/add', [BannerController::class, 'add'])->name('Dashboard.admin.banner.add');
        Route::post('/banner/store', [BannerController::class, 'store'])->name('Dashboard.admin.banner.store');
        Route::get('/banner/edit/{banner}', [BannerController::class, 'edit'])->name('Dashboard.admin.banner.edit');
        Route::put('/banner/update/{banner}', [BannerController::class, 'update'])->name('Dashboard.admin.banner.update');
        Route::delete('/banner/delete/{banner}', [BannerController::class, 'destroy'])->name('Dashboard.admin.banner.destroy');

        Route::get('/inner_banner', [InnerBannerController::class, 'index'])->name('Dashboard.admin.inner_banner.index');
        Route::get('/inner_banner/add', [InnerBannerController::class, 'add'])->name('Dashboard.admin.inner_banner.add');
        Route::post('/inner_banner/store', [InnerBannerController::class, 'store'])->name('Dashboard.admin.inner_banner.store');
        Route::get('/inner_banner/edit/{inner}', [InnerBannerController::class, 'edit'])->name('Dashboard.admin.inner_banner.edit');
        Route::put('/inner_banner/update/{inner}', [InnerBannerController::class, 'update'])->name('Dashboard.admin.inner_banner.update');
        Route::delete('/inner_banner/destroy/{inner}', [InnerBannerController::class, 'destroy'])->name('Dashboard.admin.inner_banner.destroy');

        // Services mgmt
        Route::get('/services-mgmt', [ServiceAdminController::class, 'index'])->name('Dashboard.admin.services-mgmt.index');
        Route::get('/services-mgmt/add', [ServiceAdminController::class, 'add'])->name('Dashboard.admin.services-mgmt.add');
        Route::post('/services-mgmt/store', [ServiceAdminController::class, 'store'])->name('Dashboard.admin.services-mgmt.store');
        Route::get('/services-mgmt/edit/{service}', [ServiceAdminController::class, 'edit'])->name('Dashboard.admin.services-mgmt.edit');
        Route::put('/services-mgmt/update/{service}', [ServiceAdminController::class, 'update'])->name('Dashboard.admin.services-mgmt.update');
        Route::delete('/services-mgmt/delete/{service}', [ServiceAdminController::class, 'destroy'])->name('Dashboard.admin.services-mgmt.delete');

        // Contact settings
        Route::get('/contact-settings', [ContactSettingController::class, 'index'])->name('Dashboard.admin.contact-settings.index');
        Route::get('/contact-settings/add', [ContactSettingController::class, 'add'])->name('Dashboard.admin.contact-settings.add');
        Route::post('/contact-settings/store', [ContactSettingController::class, 'store'])->name('Dashboard.admin.contact-settings.store');
        Route::get('/contact-settings/edit/{contact_setting}', [ContactSettingController::class, 'edit'])->name('Dashboard.admin.contact-settings.edit');
        Route::put('/contact-settings/update/{contact_setting}', [ContactSettingController::class, 'update'])->name('Dashboard.admin.contact-settings.update');
        Route::delete('/contact-settings/destroy/{contact_setting}', [ContactSettingController::class, 'destroy'])->name('Dashboard.admin.contact-settings.destroy');

        // Need Help
        Route::get('/need_help', [NeedHelpController::class, 'index'])->name('Dashboard.admin.need_help.index');
    });
