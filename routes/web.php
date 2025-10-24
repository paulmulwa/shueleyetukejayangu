<?php

use App\Exports\PermissionExport;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Agent\AgentPropertyController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\ChatController;
use App\Http\Controllers\Backend\CouraselController;
//use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\PropertyController;
///use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\Backend\PropertyTypeController;
use App\Http\Controllers\Backend\RoleController;

use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\StateController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\CompareController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\UserContactController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Imports\PermissionImport;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;



//use Illuminate\Pagination\Paginator;
//use Illuminate\Support\ServiceProvider;

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

// Route::get('/', function () {
//     return view('welcome');
// });

 //Route::get('/', [UserController::class, 'Index']);
 //Route::resource('posts','PostController');
/////////////////////////////////USER//////////////////////////////////////////////////
Route::get('/', [UserController::class, 'Index']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
///dashboard light
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('light.dashboard');
///////////////////////////USER////////////////////////////////////////////////////////

///////////////////////////USER////////////////////////////////////////////////////////

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/user/profile', [UserController::class, 'UserProfile'])->name('user.profile');
    Route::post('/user/profile/store', [UserController::class, 'UserProfileStore'])->name('user.profile.store');
    Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user.logout');
    Route::get('/user/change/password', [UserController::class, 'UserChangePassword'])->name('user.change.password');
    Route::post('/user/password/update', [UserController::class, 'UserPasswordUpdate'])->name('user.password.update');
    Route::get('/user/schedule/request', [UserController::class, 'UserScheduleRequest'])->name('user.schedule.request');
    Route::get('/live/chat', [UserController::class, 'LiveChat'])->name('live.chat');





    /////////////////////////////user wishlist route///////////////////////
    Route::controller(WishlistController::class)->group(function (){
         Route::get('/user/wishlist', 'UserWishlist')->name('user.wishlist');
         Route::get('/get-wishlist-property', 'GetWishlistProperty');
         Route::get('/wishlist-remove', 'WishlistRemove');

        //  ->name('user.wishlist');


    });
    ////////////////////////////////////compare units/////////////////////////////////////////////////
    Route::controller(CompareController::class)->group(function (){
    Route::get('/user/compare', 'UserCompare')->name('user.compare');
    Route::get('/get-compare-property', 'GetCompareProperty');
    Route::get('/compare-remove/{id}', 'CompareRemove');

});
});

require __DIR__.'/auth.php';
///////////////////////////////////ADMIN///////////////////////////////////////////////////////
Route::middleware(['auth','roles:admin'])->group(function(){
 Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name
    ('admin.dashboard');
    Route::get('/admin/dashboard/light', [AdminController::class, 'AdminDashboardLight'])->name
    ('admin.dashboard.light');
    Route::get('/admin/index/light', [AdminController::class, 'AdminDashboardLight'])->name
    (' admin.index.light');


   //');
//}





Route::get('/admin/logout',[AdminController::class,'AdminLogout'])
    ->name('admin.logout');
Route::get('/admin/profile',[AdminController::class,'AdminProfile'])
    ->name('admin.profile');

    Route::post('/admin/profile/store',[AdminController::class,'AdminProfileStore'])
    ->name('admin.profile.store');
//});
Route::get('/admin/change/password',[AdminController::class,'AdminChangePassword'])
->name('admin.change.password');
Route::post('/admin/update/password',[AdminController::class,'AdminUpdatePassword'])
->name('admin.update.password');
});
//});

 //////////////////////////////Agent group//////////////////////////////////////////////////////////

Route::middleware(['auth','roles:agent'])->group(function(){
    Route::get('/agent/dashboard', [AgentController::class, 'AgentDashboard'])->name
    ('agent.dashboard');
    Route::get('/agent/logout',[AgentController::class,'AgentLogout'])
    ->name('agent.logout');
    Route::get('/agent/profile',[AgentController::class,'AgentProfile'])
    ->name('agent.profile');
    Route::post('/agent/profile/store',[AgentController::class,'AgentProfileStore'])
    ->name('agent.profile.store');
    Route::get('/agent/change/password',[AgentController::class,'AgentChangePassword'])
->name('agent.change.password');
Route::post('/agent/update/password',[AgentController::class,'AgentUpdatePassword'])
->name('agent.update.password');
///agemt

});

/////////////////////////newadminweb///////////////////////
Route::get('/admin/login',[AdminController::class,'AdminLogin'])
->name('admin.login')->middleware(RedirectIfAuthenticated::class)->name('agent.login');
///*---------****************************************************************///
// Route::post('/agent/login',[AgentController::class,'AgentLogin'])
// ->name('agent.login')->middleware(RedirectIfAuthenticated::class);

Route::post('/agent/register',[AgentController::class,'AgentRegister'])
->name('agent.register');
// Route::get('/agent/register',[AgentController::class,'AgentRegister'])
// ->name('agent.register');


 //End group Agent
////////////////////////ALL PROPERTIES////////////////////////////////////
Route::controller(AgentController::class)->group(function(){
    Route::get('/agents/front_agents', 'FrontAllAgents')->name('agents/front_agents');
});


/////////////////////endmonday//////////////////////////////////////

Route::controller(PropertyController::class)->group(function(){

    Route::get('/all/property', 'AllProperty')->name('all.property');
    Route::get('/add/property', 'AddProperty')->name('add.property');
    Route::post('/store/property', 'StoreProperty')->name('store.property');
    Route::get('/edit/property/{id}', 'EditProperty')->name('edit.property');
    // Route::get('/delete/property/{id}','DeleteProperty')->name('delete.property');
    Route::post('/update/property','UpdateProperty')->name('update.property');
    Route::post('/update/property/thumbmail','UpdatePropertyThumbmail')->name('update.property.thumbmail');
    Route::post('/update/property/multiimage','UpdatePropertyMultiimage')->name('update.property.multiimage');
    Route::get('/property/multiimage/delete/{id}','PropertyMultiimageDelete')->name('property.multiimage.delete');
    Route::post('/store/new/multiimage','StoreNewMultiimage')->name('store.new.multiimage');
    Route::post('/update/property/facilities','UpdatePropertyFacilities')->name('update.property.facilities');
    Route::post('/delete/property','DeleteProperty')->name('delete.property');
    Route::get('/details/property/{id}','DetailsProperty')->name('details.property');
    Route::post('/inactive/property/','InactiveProperty')->name('inactive.property');
    Route::post('/active/property/','ActiveProperty')->name('active.property');
    Route::get('/admin/package/history', 'AdminPackageHistory')->name('admin.package.history');
    Route::get('package/invoice/{id}', 'PackageInvoice')->name('package.invoice');
    Route::get('/admin/package/history', 'AdminPackageHistory')->name('admin.package.history');
    Route::get('/admin/package/invoice/{id}', 'AdminPackageInvoice')->name('admin.package.invoice');
    Route::post('/admin/property/message','AdminPropertyMessage')->name('admin.property.message');


});


///////////////TESTIMONIAL ROUTE///////////////////////////

Route::controller(TestimonialController::class)->group(function(){

    Route::get('/all/testimonials', 'AllTestimonials')->name('all.testimonials');
    Route::get('/add/testimonials', 'AddTestimonials')->name('add.testimonials');
    Route::post('/store/testimonials', 'StoreTestimonials')->name('store.testimonials');
    Route::get('/edit/testimonials/{id}', 'EditTestimonials')->name('edit.testimonials');
    Route::post('/update/testimonials/', 'UpdateTestimonials')->name('update.testimonials');
    Route::get('/delete/testimonials/{id}', 'DeleteTestimonials')->name('delete.testimonials');
});

//////////////////////ALL CATEGORIES/////////////////
Route::controller(BlogController::class)->group(function(){

    Route::get('/all/blog/category', 'AllBlogCategory')->name('all.blog.category');
    Route::post('/store/blog/category', 'StoreBlogCategory')->name('store.blog.category');
    Route::get('/blog/category/{id}', 'EditBlogCategory');
    Route::post('/update/blog/category/', 'UpdateBlogCategory')->name('update.blog.category');
    Route::get('/delete/blog/category/{id}', 'DeleteBlogCategory')->name('delete.blog.category');
});
Route::controller(BlogController::class)->group(function(){

    Route::get('/all/post', 'AllPost')->name('all.post');
    Route::get('/add/post', 'AddPost')->name('add.post');
    Route::post('/store/post', 'StorePost')->name('store.post');
    Route::get('/edit/post/{id}', 'EditPost')->name('edit.post');
    Route::post('/update/post/', 'UpdatePost')->name('update.post');
    Route::get('/delete/post/{id}', 'DeletePost')->name('delete.post');
 });

//////setting

Route::controller(SettingController::class)->group(function(){
    Route::get('/smtp/setting', 'SmtpSetting')->name('smtp.setting');
    Route::post('/update/smtp/setting', 'UpdateSmtpSetting')->name('update.smtp.setting');


 });

///////////////////////////////////
Route::controller(SettingController::class)->group(function(){
    Route::get('/site/setting', 'SiteSetting')->name('site.setting');
    Route::post('update/site/setting', 'UpdateSiteSetting')->name('update.site.setting');

 });

/////User Contact us in contact us page..
Route::controller(UserContactController::class)->group(function(){
    Route::post('contactus/contactus', 'UserContact')->name('user.contact');
    Route::get('admin/user/message', 'AdminUsermessage')->name('admin.user.message');
    // Route::get('/details/user/{id}','DetailsUser')->name('details.contacts');
    // Route::get('/details/user/contacts/{id}','DetailsUser')->name('details.user.contacts');

    Route::get('/delete/user/contacts/{id}','DeleteUser')->name('delete.user.contacts');

    ///coming here
    // Route::get('contactus/contactus', 'UserContact')->name('contactus.contactus');




//}
 });




 Route::controller(ContactUsController::class)->group(function(){
    Route::get('/contacts/admincontactus', 'AdminContactUs')->name('contacts.admincontacts');
    Route::post('update/contacts/admincontacts', 'UpdateAdminContactUs')->name('update.admincontacts');
    // Route::post('update/site/setting', 'UpdateSiteSetting')->name('update.site.setting');
    // Route::get('/contacts/admincontactus', 'AdminContactUs')->name('contacts.admincontacts');
    // Route::get('/updatecontacts/update/admincontactus', 'UpdateAdminContactUs')->name('update.admincontacts');

    // Route::post('update/site/setting', 'UpdateSiteSetting')->name('update.site.setting');

 });

 Route::controller(AdminController::class)->group(function(){
    Route::get('/all/admin/', 'AllAdmin')->name('all.admin');
    Route::get('/add/admin/', 'AddAdmin')->name('add.admin');
    Route::post('/store/admin/', 'StoreAdmin')->name('store.admin');
    Route::get('/edit/admin/{id}', 'EditAdmin')->name('edit.admin');
    Route::post('/update/admin/{id}/', 'UpdateAdmin')->name('update.admin');
    Route::get('/delete/admin/{id}/', 'DeleteAdmin')->name('delete.admin');



});

Route::controller(ContactUsController::class)->group (function(){
    Route::get('/contactus/contactus/', 'FrontContactUs')->name('contactus.contactus');
     //Route::get('/contactus/contactus', 'AllContactUs')->name('contactus.all_contactus');
});
///////////////////////// Property Type Route//////////////////////////////////////
Route::get('/admin/login',[AdminController::class, 'AdminLogin'])
->name('admin.login');
Route::controller(PropertyTypeController::class)->group(function(){
// Alltype is the method
//URL//FUNCTION//VIEW
Route::get('/all/type', 'AllType')->name('all.type');
// ->middleware('permission:all.type');
Route::get('/add/type', 'AddType')->name('add.type');
// ->middleware('permission:add.type');
Route::post('/store/type', 'StoreType')->name('store.type');
Route::get('/edit/type{id}', 'EditType')->name('edit.type');
Route::get('/category/type', 'CategoryType')->name('category.type');
Route::post('/update/type', 'UpdateType')->name('update.type');
Route::get('/delete/type{id}', 'DeleteType')->name('delete.type');
});

// Route::controller(CouraselController::class)->group(function(){
//    Route::get('courasel.allcourasel', 'Courasel')->name('backend.courasel.allcourasel');
//     Route::post('/update/courasel/', 'CouraselUpdate')->name('update.courasel');

    //  aboutus.all_aboutus
    //  Route::get('all/admin/aboutus/', 'AllAdminAboutUs')->name('aboutus.all_aboutus');
    //  Route::post('all/admin/aboutus/', 'AdminUpdateAboutUs')->name('update.admin.aboutus');
// });

Route::controller(BannerController::class)->group(function(){
Route::get('banner.all.banner', 'AllBanner')->name('banner.all.banner');
Route::get('banner.add.banner', 'AddBanner')->name('add.banner' );
Route::post('store.banner', 'StoreBanner')->name('store.banner' );
Route::get('banner.edit/{id}', 'EditBanner')->name('edit.banner');
Route::post('update.banner', 'UpdateBanner')->name('update.banner' );
Route::get('delete/banner{id}', 'DeleteBanner')->name('delete.banner');





});


///////////////////AMENITIES ALL ROUTE///////////////////////////////////////////////
Route::controller(PropertyTypeController::class)->group(function(){

Route::get('/all/amenities', 'AllAmenities')->name('all.amenities');
Route::get('/add/amenities', 'AddAmenities')->name('add.amenities');
Route::post('/store/amenities', 'StoreAmenities')->name('store.amenities');
Route::get('/edit/amenities{id}', 'EditAmenities')->name('edit.amenities');
Route::post('/update/amenities', 'UpdateAmenities')->name('update.amenities');
Route::get('/delete/amenities{id}', 'DeleteAmenities')->name('delete.amenities');
});
Route::controller(ContactUsController::class)->group(function(){

    Route::get('contacts/allcontacts', 'AllContacts')->name('contacts.all_contacts');
    Route::get('/add/contacts', 'AddContacts')->name('add.contacts');
    Route::post('/store/contacts', 'StoreContacts')->name('store.contacts');
    Route::get('/edit/contacts/', 'EditContacts')->name('edit.contacts');
    Route::post('/update/contacts/', 'UpdateContacts')->name('update.contacts');
    Route::get('/delete/contacts/', 'DeleteContacts')->name('delete.contacts');


    });
    ////
//////////////////////////////PERMISSION ALL ROUTE MIDDLEWARE//////////////////////////////////

Route::controller(RoleController::class)->group(function(){
Route::get('/all/permission', 'AllPermission')->name('all.permission');
Route::get('/add/permission', 'AddPermission')->name('add.permission');
Route::post('/store/permission', 'StorePermission')->name('store.permission');
Route::get('/edit/permission{id}', 'EditPermission')->name('edit.permission');
Route::post('/update/permission', 'UpdatePermission')->name('update.permission');
Route::get('/delete/permission{id}', 'DeletePermission')->name('delete.permission');
Route::get('/import/permission', 'ImportPermission')->name('import.permission');
Route::get('/export', 'Export')->name('export');
//Route::get('/export', 'Export')->name('export');
Route::post('/import', 'Import')->name('import');

});
////////////////////////////////////ALL ROLES/////////////////////////////
Route::controller(RoleController::class)->group(function(){
    Route::get('/all/roles', 'AllRoles')->name('all.roles');
    Route::get('/add/roles', 'AddRoles')->name('add.roles');
    Route::post('/store/roles', 'StoreRoles')->name('store.roles');
    Route::get('/edit/roles{id}', 'EditRoles')->name('edit.roles');
    Route::post('/update/roles', 'UpdateRoles')->name('update.roles');
    Route::get('/delete/roles{id}', 'DeleteRoles')->name('delete.roles');
    Route::get('/import/roles', 'ImportRoles')->name('import.roles');
    Route::get('/export', 'Export')->name('export');
    //Route::get('/export', 'Export')->name('export');
    Route::post('/import', 'Import')->name('import');
    ////////////////////////////Role PERMISSION////////////////////////////

 Route::get('/add/roles/permission', 'AddRolesPermission')->name('add.roles.permission');

 Route::post('/role/permission/store', 'RolePermissionStore')->name('role.permission.store');
 Route::get('/all/roles/permission', 'AllRolesPermission')->name('all.roles.permission');
 Route::get('/admin/edit/roles/{id}', 'AdminEditRoles')->name('admin.edit.roles');
 Route::post('/admin/roles/update/{id}', 'AdminRolesUpdate')->name('admin.roles.update');
 Route::get('/admin/delete/roles/{id}', 'AdminDeleteRoles')->name('admin.delete.roles');



});

///////////////////////Managing Agents by admin///////////////////
Route::controller(AdminController::class)->group(function(){
    Route::get('/all/agent', 'AllAgent')->name
       ('all.agent');
       Route::get('/add/agent', 'AddAgent')->name
       ('add.agent');
       Route::post('/store/agent', 'StoreAgent')->name
       ('store.agent');
       Route::get('/edit/agent/{id}', 'EditAgent')->name
       ('edit.agent');
       Route::post('/update/agent', 'UpdateAgent')->name
       ('update.agent');
       Route::get('/delete/agent/{id}', 'DeleteAgent')->name
       ('delete.agent');
       Route::get('/changeStatus', 'changeStatus');

    //    ('delete.agent');


});

////////STATE AL ROUTE/////////////////////////






Route::controller(StateController::class)->group(function(){
    Route::get('/all/state', 'AllState')->name
       ('all.state');
  Route::get('/add/state', 'AddState')->name
       ('add.state');
    Route::post('/store/state', 'StoreState')->name
       ('store.state');
       Route::get('/edit/state/{id}', 'EditState')->name
       ('edit.state');
       Route::post('/update/state', 'UpdateState')->name
       ('update.state');

       Route::get('/delete/state/{id}', 'DeleteState')->name
       ('delete.state');




});









///////////////////////Managing Agents by agent///////////////////
    Route::middleware(['auth','roles:agent'])->group(function(){
    Route::controller(AgentPropertyController::class)->group(function(){
    Route::get('/agent/all/agent', 'AgentAllProperty')->name('agent.all.property');
    Route::get('/agent/add/property', 'AgentAddProperty')->name('agent.add.property');
    Route::post('/agent/store/property', 'AgentStoreProperty')->name('agent.store.property');
    Route::get('/agent/edit/property/{id}', 'AgentEditProperty')->name('agent.edit.property');
    Route::get('/agent/delete/property/{id}','AgentDeleteProperty')->name('agent.delete.property');
    Route::post('/agent/update/property','AgentUpdateProperty')->name('agent.update.property');
    Route::post('/agent/update/property/thumbmail','AgentUpdatePropertyThumbmail')->name('agent.update.property.thumbmail');
    Route::post('/agent/update/property/multiimage','AgentUpdatePropertyMultiimage')->name('agent.update.property.multiimage');
    Route::get('/agent/property/multiimage/delete/{id}','AgentPropertyMultiimageDelete')->name('agent.property.multiimage.delete');
    Route::post('/agent/store/new/multiimage','AgentStoreNewMultiimage')->name('agent.store.new.multiimage');
    Route::post('/agent/update/property/facilities','AgentUpdatePropertyFacilities')->name('agent.update.property.facilities');
    // Route::get('/agent/delete/property','AgentDeleteProperty')->name('agent.delete.property');
    Route::get('/agent/details/property/{id}','AgentDetailsProperty')->name('agent.details.property');
    Route::post('/agent/inactive/property/','AgentInactiveProperty')->name('agent.inactive.property');
    Route::post('/agent/active/property/','AgentActiveProperty')->name('agent.active.property');
    Route::get('/agent/schedule/request','AgentScheduleRequest')->name('agent.schedule.request');
    //Route::get('/agent/details/schedule/{id}','AgentDetailsSchedule')->name('agent.details.schedule');

// ->name('agent.schedule.request');
});


 //////////////////////////////Buy Pacgroup//////////////////////////////////////////////////////////

 Route::middleware(['auth','roles:agent'])->group(function(){
    Route::get('/agent/dashboard', [AgentController::class, 'AgentDashboard'])->name
    ('agent.dashboard');


});
// Route::controller(AgentController::class)->group(function(){
//     Route::get('all/agents', 'AllAgents')->name('agent.allagents');
// });

















//////////////////newbyy package/////////////////////
Route::controller(AgentPropertyController::class)->group(function(){
    Route::get('/buy/package', 'BuyPackage')->name
       ('buy.package');
       Route::get('/buy/business/plan', 'BuyBusinessPlan')->name
       ('buy.business.plan');
       Route::post('/store/business/plan', 'StoreBusinessPlan')->name
       ('store.business.plan');
       Route::get('/buy/professional/plan', 'BuyProfessionalPlan')->name
       ('buy.professional.plan');
       Route::post('/store/professional/plan', 'StoreProfessionalPlan')->name
       ('store.professional.plan');
       Route::get('/agent/package/history', 'AgentPackageHistory')->name
       ('agent.package.history');
       Route::get('/agent/package/invoice/{id}', 'AgentPackageInvoice')->name
       ('agent.package.invoice');
/////////////////////////////////////
        Route::post('/agent/details/message', 'AgentDetailsMessage')->name
        ('agent.details.message');
        Route::get('/agent/schedule/request/', 'AgentScheduleRequest')->name('agent.schedule.request');

        Route::get('/agent/details/{id}/', 'AgentDetails')->name('agent.details.schedule');
        Route::get('/agent/details/', 'AgentDetails')->name('agent.details');


        //Route::get('/agent/details/schedule/{id}', 'AgentDetailsSchedule')->name('agent.details.schedule');

        Route::post('/agent/update/schedule/', 'AgentUpdateSchedule')->name('agent.update.schedule');
});
///////////////////frontend property details all route////////

});

/////////////////////////////ABOUTUS///////////////////////////////

Route::controller(AboutUsController::class)->group(function(){
 Route::get('aboutus/aboutus/','AboutUs')->name('aboutus.aboutus');
//  aboutus.all_aboutus
 Route::get('all/admin/aboutus/', 'AllAdminAboutUs')->name('aboutus.all_aboutus');
 Route::post('all/admin/aboutus/', 'AdminUpdateAboutUs')->name('update.admin.aboutus');
}
);
/////////////////SERVICES//////////////////////
Route::controller(ServicesController::class)->group(function(){
Route::get('admin/all/services/', 'AllAdminServices')->name('aboutus.all_services');
Route::get('admin/add/services/', 'AddServices')->name('aboutus.add_services');
Route::post('admin/store/services/', 'StoreServices')->name('store.services');
Route::get('/edit/services{id}', 'EditServices')->name('edit.services');
Route::post('/update/services', 'UpdateServices')->name('update.services');
Route::get('/delete/services{id}', 'DeleteServices')->name('delete.services');


}
);



///////////////////////////////////////////
Route::post('/subscribe', [IndexController::class, 'Subscribers'])->name('subscribe');

Route::get('/featuredproperty/details/{id}/{slug}', [IndexController::class, 'FeaturedPropertyDetails']);
////////////////wishlist route////////////////////////
Route::post('/add-to-wishList/{property_id}', [WishlistController::class, 'AddToWishList']);
Route::post('/add-to-compare/{property_id}', [CompareController::class, 'AddToCompare']);


Route::post('/property/message', [IndexController::class,
 'PropertyMessage'])->name('property.message');
/// agent details in frontpage
//  Route::get('/agent/details/{id}', [IndexController::class,
//  'AgentDetails'])->name('agent.details');
 ////////////////////////////////////AgGENT DETAILS MESSAGE@@@@@@@@@@@@@@@@@@@@@@checkit
//  Route::post('/agent/details/message', [IndexController::class,
//  'AgentDetailsMessage'])->name('agent.details.message');

//////////////////////////Get All rent properties///////////

Route::get('/rent/property', [IndexController::class,
 'RentProperty'])->name('rent.property');



 Route::get('/buy/property', [IndexController::class,
 'BuyProperty'])->name('buy.property');

//////////////// GET ALL PROPERTY TYPE DATA/////////////

Route::get('/property/type{id}', [IndexController::class,
'PropertyType'])->name('property.type');
//////////////////////////////get state details///////////

Route::get('/state/details/{id}', [IndexController::class,
 'StateDetails'])->name('state.details');

///////////////////////please buy option////////
Route::post('buy/property/search', [IndexController::class,
 'BuyPropertySearch'])->name('buy.property.search');
 Route::post('rent/property/search', [IndexController::class,
 'RentPropertySearch'])->name('rent.property.search');
 Route::post('all/property/search', [IndexController::class,
 'AllPropertySearch'])->name('all.property.search');

/////////////////BLOG DETAILS////////////////////////////
Route::get('/blog/details/{slug}',[BlogController::class, 'BlogDetails']);
Route::get('/blog/cat/list/{id}',[BlogController::class, 'BlogCatList']);
Route::get('/blog', [BlogController::class, 'BlogList'])->name('blog.list');

Route::post('/store/comment', [BlogController::class, 'StoreComment'])->name('store.comment');

Route::get('/admin/blog/comment', [BlogController::class, 'AdminBlogComment'])->name('admin.blog.comment');
Route::get('/admin/comment/reply/{id}', [BlogController::class,
 'AdminCommentReply'])->name('admin.comment.reply');
 Route::post('/reply/message', [BlogController::class,
  'ReplyMessage'])->name('reply.message');
////////////////////////Store schedule
  Route::post('/store/schedule', [IndexController::class,
  'StoreSchedule'])->name('store.schedule');
  Route::post('/send-message', [ChatController::class,'SendMsg'])->name('send.msg');
  Route::get('/user-all', [ChatController::class,'GetAllUsers']);
//   ->name('user.all');;
//   ->name('send.msg');
Route::get('/user-message/{id}', [ChatController::class,'UserMsgById']);
// ->name('user.all');;

Route::get('/agent/live/chat/', [ChatController::class,'AgentLiveChat'])->name('agent.live.chat');
Route::get('/agent/all', [AgentController::class, 'AgentsFront'])->name('frontend.agent.allagent');
