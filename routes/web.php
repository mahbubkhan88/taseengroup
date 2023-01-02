<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogTagController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientFeedbackController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ManagementMessageController;
use App\Http\Controllers\MissionVisionValueController;
use App\Http\Controllers\ProjectCategoryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StrengthController;
use App\Http\Controllers\WhyChooseController;

//Frontend user page load controller
Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'HomePage')->name('HomePage');
    Route::get('/company-profile', 'CompanyProfilePage')->name('CompanyProfilePage');
    Route::get('/mission-vision-value', 'MissionVisionValuePage')->name('MissionVisionValuePage');
    Route::get('/chairman-message', 'ChairmanMessagePage')->name('ChairmanMessagePage');
    Route::get('/projects', 'ProjectsPage')->name('ProjectsPage');
    Route::get('/project/details/{slug}', 'ProjectDetailsPage')->name('ProjectDetailsPage');
    Route::get('/news-events', 'NewsEventsPage')->name('NewsEventsPage');
    Route::get('/news-events/details/{slug}', 'NewsEventsDetailsPage')->name('NewsEventsDetailsPage');
    Route::get('/news-events/categories/{slug}', 'NewsEventsCategoryPage')->name('NewsEventsCategoryPage');
    Route::get('/news-events/tags/{slug}', 'NewsEventsTagPage')->name('NewsEventsTagPage');
    Route::get('/contact', 'ContactPage')->name('ContactPage');
    Route::post('/contact', 'EmailSend')->name('EmailSend');
});






//Admin dashboard page load controller
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');



//Admin Controller
Route::middleware(['auth'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/logout', 'destroy')->name('admin.logout');
        Route::get('/admin/profile', 'profile')->name('admin.profile');
        Route::get('/edit/profile', 'editProfile')->name('edit.profile');
        Route::post('/update/profile', 'updateProfile')->name('update.profile');
        Route::get('/change/password', 'changePassword')->name('change.password');
        Route::post('/update/password', 'updatePassword')->name('update.password');
    });
});




//Admin Slider Controller
Route::controller(SliderController::class)->group(function () {
    Route::get('/dashboard/slider/list', 'SliderList')->name('slider.list');
    Route::get('/dashboard/slider/create', 'SliderCreate')->name('slider.create');
    Route::post('/dashboard/slider/store', 'SliderStore')->name('slider.store');
    Route::get('/dashboard/slider/view/{id}', 'SliderView')->name('slider.view');
    Route::get('/dashboard/slider/edit/{id}', 'SliderEdit')->name('slider.edit');
    Route::post('/dashboard/slider/update/{id}', 'SliderUpdate')->name('slider.update');
    Route::get('/dashboard/slider/delete/{id}', 'SliderDelete')->name('slider.delete');
});




//Admin Website Setting Controller
Route::controller(SettingController::class)->group(function () {
    Route::get('/dashboard/setting/view', 'SettingView')->name('setting.view');
    Route::get('/dashboard/setting/edit', 'SettingEdit')->name('setting.edit');
    Route::post('/dashboard/setting/update', 'SettingUpdate')->name('setting.update');
});


//Admin About Controller
Route::controller(AboutController::class)->group(function () {
    Route::get('/dashboard/about/view', 'AboutView')->name('about.view');
    Route::get('/dashboard/about/edit', 'AboutEdit')->name('about.edit');
    Route::post('/dashboard/about/update', 'AboutUpdate')->name('about.update');
});


//Admin Company Profile Controller
Route::controller(CompanyProfileController::class)->group(function () {
    Route::get('/dashboard/company-profile/view', 'CompanyProfileView')->name('company_profile.view');
    Route::get('/dashboard/company-profile/edit', 'CompanyProfileEdit')->name('company_profile.edit');
    Route::post('/dashboard/company-profile/update', 'CompanyProfileUpdate')->name('company_profile.update');
});



//Admin Client Feedback Controller
Route::controller(ClientFeedbackController::class)->group(function () {
    Route::get('/dashboard/client-feedback/list', 'ClientFeedbackList')->name('client_feedback.list');
    Route::get('/dashboard/client-feedback/create', 'ClientFeedbackCreate')->name('client_feedback.create');
    Route::post('/dashboard/client-feedback/store', 'ClientFeedbackStore')->name('client_feedback.store');
    Route::get('/dashboard/client-feedback/view/{id}', 'ClientFeedbackView')->name('client_feedback.view');
    Route::get('/dashboard/client-feedback/edit/{id}', 'ClientFeedbackEdit')->name('client_feedback.edit');
    Route::post('/dashboard/client-feedback/update/{id}', 'ClientFeedbackUpdate')->name('client_feedback.update');
    Route::get('/dashboard/client-feedback/delete/{id}', 'ClientFeedbackDelete')->name('client_feedback.delete');
});



//Admin Client Controller
Route::controller(ClientController::class)->group(function () {
    Route::get('/dashboard/client/list', 'ClientList')->name('client.list');
    Route::get('/dashboard/client/create', 'ClientCreate')->name('client.create');
    Route::post('/dashboard/client/store', 'ClientStore')->name('client.store');
    Route::get('/dashboard/client/edit/{id}', 'ClientEdit')->name('client.edit');
    Route::post('/dashboard/client/update/{id}', 'ClientUpdate')->name('client.update');
    Route::get('/dashboard/client/delete/{id}', 'ClientDelete')->name('client.delete');
});



//Admin Client Feedback Controller
Route::controller(MissionVisionValueController::class)->group(function () {
    Route::get('/dashboard/mission-vision-value/list', 'MissionVisionValueList')->name('mission_vision_value.list');
    Route::get('/dashboard/mission-vision-value/create', 'MissionVisionValueCreate')->name('mission_vision_value.create');
    Route::post('/dashboard/mission-vision-value/store', 'MissionVisionValueStore')->name('mission_vision_value.store');
    Route::get('/dashboard/mission-vision-value/view/{id}', 'MissionVisionValueView')->name('mission_vision_value.view');
    Route::get('/dashboard/mission-vision-value/edit/{id}', 'MissionVisionValueEdit')->name('mission_vision_value.edit');
    Route::post('/dashboard/mission-vision-value/update/{id}', 'MissionVisionValueUpdate')->name('mission_vision_value.update');
    Route::get('/dashboard/mission-vision-value/delete/{id}', 'MissionVisionValueDelete')->name('mission_vision_value.delete');
});



//Admin Streangth Controller
Route::controller(StrengthController::class)->group(function () {
    Route::get('/dashboard/our-strength/view', 'StrengthView')->name('strength.view');
    Route::get('/dashboard/our-strength/edit', 'StrengthEdit')->name('strength.edit');
    Route::post('/dashboard/our-strength/update', 'StrengthUpdate')->name('strength.update');
});



//Admin Why Choose Us Controller
Route::controller(WhyChooseController::class)->group(function () {
    Route::get('/dashboard/why-choose-us/view', 'WhyChooseView')->name('why_choose_us.view');
    Route::get('/dashboard/why-choose-us/edit', 'WhyChooseEdit')->name('why_choose_us.edit');
    Route::post('/dashboard/why-choose-us/update', 'WhyChooseUpdate')->name('why_choose_us.update');
});



//Admin Counter Controller
Route::controller(CounterController::class)->group(function () {
    Route::get('/dashboard/counter/list', 'CounterList')->name('counter.list');
    Route::get('/dashboard/counter/create', 'CounterCreate')->name('counter.create');
    Route::post('/dashboard/counter/store', 'CounterStore')->name('counter.store');
    Route::get('/dashboard/counter/edit/{id}', 'CounterEdit')->name('counter.edit');
    Route::post('/dashboard/counter/update/{id}', 'CounterUpdate')->name('counter.update');
    Route::get('/dashboard/counter/delete/{id}', 'CounterDelete')->name('counter.delete');
});


//Admin Management Message Controller
Route::controller(ManagementMessageController::class)->group(function () {
    Route::get('/dashboard/management-message/list', 'ManagementMessageList')->name('management_message.list');
    Route::get('/dashboard/management-message/create', 'ManagementMessageCreate')->name('management_message.create');
    Route::post('/dashboard/management-message/store', 'ManagementMessageStore')->name('management_message.store');
    Route::get('/dashboard/management-message/view/{id}', 'ManagementMessageView')->name('management_message.view');
    Route::get('/dashboard/management-message/edit/{id}', 'ManagementMessageEdit')->name('management_message.edit');
    Route::post('/dashboard/management-message/update/{id}', 'ManagementMessageUpdate')->name('management_message.update');
    Route::get('/dashboard/management-message/delete/{id}', 'ManagementMessageDelete')->name('management_message.delete');
});



//Admin Project Category Controller
Route::controller(ProjectCategoryController::class)->group(function () {
    Route::get('/dashboard/project-category/list', 'ProjectCategoryList')->name('project_category.list');
    Route::get('/dashboard/project-category/create', 'ProjectCategoryCreate')->name('project_category.create');
    Route::post('/dashboard/project-category/store', 'ProjectCategoryStore')->name('project_category.store');
    Route::get('/dashboard/project-category/edit/{id}', 'ProjectCategoryEdit')->name('project_category.edit');
    Route::post('/dashboard/project-category/update/{id}', 'ProjectCategoryUpdate')->name('project_category.update');
    Route::get('/dashboard/project-category/delete/{id}', 'ProjectCategoryDelete')->name('project_category.delete');
});



//Admin Project Controller
Route::controller(ProjectController::class)->group(function () {
    Route::get('/dashboard/project/list', 'ProjectList')->name('project.list');
    Route::get('/dashboard/project/create', 'ProjectCreate')->name('project.create');
    Route::post('/dashboard/project/store', 'ProjectStore')->name('project.store');
    Route::get('/dashboard/project/view/{slug}', 'ProjectView')->name('project.view');
    Route::get('/dashboard/project/edit/{id}', 'ProjectEdit')->name('project.edit');
    Route::post('/dashboard/project/update/{id}', 'ProjectUpdate')->name('project.update');
    Route::get('/dashboard/project/delete/{id}', 'ProjectDelete')->name('project.delete');
});




//Admin Blog Category Controller
Route::controller(BlogCategoryController::class)->group(function () {
    Route::get('/dashboard/blog-category/list', 'BlogCategoryList')->name('blog_category.list');
    Route::get('/dashboard/blog-category/create', 'BlogCategoryCreate')->name('blog_category.create');
    Route::post('/dashboard/blog-category/store', 'BlogCategoryStore')->name('blog_category.store');
    Route::get('/dashboard/blog-category/edit/{id}', 'BlogCategoryEdit')->name('blog_category.edit');
    Route::post('/dashboard/blog-category/update/{id}', 'BlogCategoryUpdate')->name('blog_category.update');
    Route::get('/dashboard/blog-category/delete/{id}', 'BlogCategoryDelete')->name('blog_category.delete');
});



//Admin Blog Tag Controller
Route::controller(BlogTagController::class)->group(function () {
    Route::get('/dashboard/blog-tag/list', 'BlogTagList')->name('blog_tag.list');
    Route::get('/dashboard/blog-tag/create', 'BlogTagCreate')->name('blog_tag.create');
    Route::post('/dashboard/blog-tag/store', 'BlogTagStore')->name('blog_tag.store');
    Route::get('/dashboard/blog-tag/edit/{id}', 'BlogTagEdit')->name('blog_tag.edit');
    Route::post('/dashboard/blog-tag/update/{id}', 'BlogTagUpdate')->name('blog_tag.update');
    Route::get('/dashboard/blog-tag/delete/{id}', 'BlogTagDelete')->name('blog_tag.delete');
});



//Admin Blog Controller
Route::controller(BlogController::class)->group(function () {
    Route::get('/dashboard/blog/list', 'BlogList')->name('blog.list');
    Route::get('/dashboard/blog/create', 'BlogCreate')->name('blog.create');
    Route::post('/dashboard/blog/store', 'BlogStore')->name('blog.store');
    Route::get('/dashboard/blog/view/{slug}', 'BlogView')->name('blog.view');
    Route::get('/dashboard/blog/edit/{id}', 'BlogEdit')->name('blog.edit');
    Route::post('/dashboard/blog/update/{id}', 'BlogUpdate')->name('blog.update');
    Route::get('/dashboard/blog/delete/{id}', 'BlogDelete')->name('blog.delete');
});











Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';