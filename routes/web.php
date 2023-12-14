<?php

use App\Models\Post;
use App\Models\Subscribers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubscribersController;
use App\Http\Controllers\EthnicController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EthnicProfileController;
use App\Http\Controllers\UploadFileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Models\Admin_users;
use App\Http\Controllers\Admin\DashbordController;
use App\Jobs\SendEmailJob;









Route::get('blog', [PostController::class, 'index']);
Route::get('blogAmh', [PostController::class, 'indexAmh']);

Route::get('thank', [UploadFileController::class, 'index2']);
Route::get('ethnic', [EthnicController::class, 'index']);
Route::get('ethnicAmh', [EthnicController::class, 'indexAmh']);
Route::get('profile/{id}', [EthnicProfileController::class, 'index']);
Route::get('profileAmh/{id}', [EthnicProfileController::class, 'indexAmh']);
Route::get('about', [AboutController::class, 'index']);
Route::get('aboutAmh', [AboutController::class, 'indexAmh']);
Route::get('donation', [AboutController::class, 'index2']);
Route::get('donationAmh', [AboutController::class, 'index2Amh']);
Route::get('gallery', [AboutController::class, 'index3']);
Route::get('galleryAmh', [AboutController::class, 'index3Amh']);
Route::post('save', [SubscribersController::class, 'store']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::post('/upload', [UploadFileController::class, 'store']);
Route::PUT('/role-update/{id}', [DashbordController::class, 'roleUpdate']);
Route::PUT('/post-update/{id}', [DashbordController::class, 'postUpdate']);
Route::DELETE('/role-delete/{id}', [DashbordController::class, 'roleDelete']);
Route::DELETE('/post-delete/{id}', [DashbordController::class, 'postDelete']);
Route::DELETE('/r-delete/{id}', [DashbordController::class, 'rDelete']);
Route::DELETE('/subscribers-delete/{id}', [DashbordController::class, 'subscribersDelete']);
Route::get('ethnicEdit/{id}', [DashbordController::class, 'ethnicEdit']);
Route::get('postEdit/{id}', [DashbordController::class, 'postEdit']);
Route::get('admin/ethnic', [DashbordController::class, 'index'])->name('ethnic');
Route::get('admin/subscribers', [DashbordController::class, 'subscribers'])->name('subscribers');
Route::get('admin/post', [DashbordController::class, 'post'])->name('post');
Route::post('/saveEthnic', [DashbordController::class, 'saveEthnic'])->name('saveEthnic');
Route::post('/savePost', [DashbordController::class, 'savePost'])->name('savePost');
Route::get('/insertEmail', [DashbordController::class, 'insertEmail'])->name('insertEmail');
Route::get('/testEmail', [DashbordController::class, 'testEmail'])->name('testEmail');
Route::post('/updateEmail', [DashbordController::class, 'updateEmail'])->name('updateEmail');
Route::get('/generate-html', [DashbordController::class, 'generateHtml']);
Route::get('admin/uploads', [DashbordController::class, 'uploads'])->name('uploads');
Route::get('/download/{id}', [DashbordController::class, 'download'])->name('download');
Route::get('admin/resources', [DashbordController::class, 'resources'])->name('resources');
Route::post('/saveResources', [DashbordController::class, 'saveResources'])->name('saveResources');
Route::get('/resources', [UploadFileController::class, 'resources']);
Route::get('/resourcesAmh', [UploadFileController::class, 'resourcesAmh']);
Route::get('/download2/{id}', [DashbordController::class, 'download2'])->name('download2');



Route::get('/send-mail',function(){
    $userMail = Subscribers::pluck('email');
    $admins = Admin_users::all();
    dispatch(new App\Jobs\SendEmailJob($userMail));
    return view('email.success',compact('admins'));

});

Route::any('search',function(){
    $q = Input::get ( 'q' );
    $posts = Post::where('title','LIKE','%'.$q.'%')->get();
    if(count($posts) > 0)
        return view('home')->withDetails($posts)->withQuery ( $q );
    else return view ('home')->withMessage('No Details found. Try to search again !');
});


// Admin Panale route





Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/admin', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
    Route::get('/logout', [AdminAuthController::class, 'adminLogout'])->name('adminLogout');


    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/', function () {
            return view('dashbord');
        })->name('adminDashboard');

    });

});




