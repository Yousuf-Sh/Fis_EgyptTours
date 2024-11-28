<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;

//use App\Http\Controllers\Backend\CMSpagesController;
use App\Http\Controllers\Backend\PagesController;
use App\Http\Controllers\Backend\ClientController;
use App\Http\Controllers\Backend\FaqController;
use App\Http\Controllers\Backend\visionController;
use App\Http\Controllers\Backend\AuditController;
use App\Http\Controllers\Backend\ProjectController ;
//use App\Http\Controllers\Backend\ServicesController;
use App\Http\Controllers\Backend\AboutusController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\CMSController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\ServicesController;
use App\Http\Controllers\Backend\GeneralController;
use App\Http\Controllers\Backend\MembersCategoryController;
use App\Http\Controllers\Backend\IotController;
//use App\Http\Controllers\Backend\FaqController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;

use App\Http\Controllers\Backend\RegisteredMembersController;
use App\Http\Controllers\Backend\PestController;
use App\Http\Controllers\Backend\DepartmentListController;
use App\Http\Controllers\Backend\SubmittedContactController;
use App\Http\Controllers\Backend\TestimonialsController;
use App\Http\Controllers\Backend\FooterController;
use App\Http\Controllers\Backend\SubmissionController;
use App\Http\Controllers\Backend\CommitteeListController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Backend\ServicesDetailsController;
use App\Http\Controllers\Backend\ServicesMenuController ;
use App\Http\Controllers\newsletterController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ExploreController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Routes without locale prefix
// routes/web.php
Route::post('/upload-image', [HomeController::class,'image'])->name('upload.image');
 Route::get('/page/{slug}',[HomeController::class,'show'])->name('page.show');
 Route::post('ckeditor/upload', [HomeController::class, 'upload'])->name('ckeditor.upload');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/distribution', [HomeController::class, 'distribution'])->name('distribution');
Route::get('/food-services', [HomeController::class, 'food_services'])->name('food-services');
Route::get('/wholesale', [HomeController::class, 'wholesale'])->name('wholesale');
Route::get('/Catering', [HomeController::class, 'Catering'])->name('Catering');
Route::get('/uniform-safety', [HomeController::class, 'uniform_safety'])->name('uniform-safety');
Route::get('/Iot', [HomeController::class, 'Iot'])->name('Iot');
Route::get('/Project', [HomeController::class, 'Project'])->name('Project');
Route::get('/business-consultancy', [HomeController::class, 'business_consultancy'])->name('business-consultancy');
Route::get('/barcode', [HomeController::class, 'barcode'])->name('barcode');
Route::get('/construction', [HomeController::class, 'construction'])->name('construction');
Route::get('/services', [HomeController::class, 'services'])->name('services');
// Route::get('/services', [HomeController::class, 'services'])->name('services');

Route::get('/partners', [HomeController::class, 'partners'])->name('partners');
Route::get('/testimonials', [HomeController::class, 'testimonials'])->name('testimonials');
Route::get('/faqs', [HomeController::class, 'faqs'])->name('faqs');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');



// Route::get('['prefix' => '{locale}']', [HomeController::class, 'change_lang'])->name('change-lang');
Route::get('/{locale}', [HomeController::class, 'change_lang'])->name('change-lang');


    Route::post('/admin/submitted-contact/store',[SubmittedContactController::class,'store'])->name('submitted.contactstore');
    Route::post('/admin/newsletter/store',[newsletterController::class,'store'])->name('newsletter.store');

Route::get('/admin/login', [AdminController::class,'login'])->name('admin.login');
Route::post('/admin/signin', [AdminController::class,'SingIn'])->name('admin.siginin');


Route::group(['middleware' => ['admin']],function () {

    Route::get('/admin/dashboard', [AdminController::class,'index'])->name('admin.dashboard');
    
    Route::get('/admin/users-profile', [AdminController::class,'admin_usersprofile']);
    Route::post('admin/users-profile/profile',[AdminController::class,'profile_update'])->name('admin.update');
    Route::get('admin/users-profile/delete-profilepic/{id}',[AdminController::class,'delete_admin_img'])->name('admin.delete_img');
    Route::post('admin/users-profile/password',[AdminController::class,'password_update'])->name('admin.change.password');
    Route::get('/admin/logout',[AdminController::class,'Logout'])->name('admin.logout');
    Route::get('/admin/category', [CategoryController::class,'index']); 
    Route::get('/admin/category/create', [CategoryController::class,'create'])->name('category.add');
    Route::post('/admin/category/store', [CategoryController::class,'store'])->name('category.store');
    Route::get('/admin/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::post('/admin/category/update', [CategoryController::class,'update'])->name('category.update');
    Route::get('/admin/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');

    /*project  Routes*/
    Route::get('/admin/projectmangement',[ProjectController::class,'index']);
    Route::get('/admin/projectmangement/create',[ProjectController::class,'create'])->name('project.add');
    Route::get('/admin/projectmangement/delete/{id}',[ProjectController::class,'delete'])->name('project.delete');
    Route::post('/admin/projectmangement/store',[ProjectController::class,'store'])->name('project.store');
    Route::get('/admin/projectmangement/edit/{id}',[ProjectController::class,'edit'])->name('project.edit');
    Route::post('/admin/projectmangement/update', [ProjectController::class,'update'])->name('project.update');

    /*vision  Routes*/
    Route::get('/admin/vision',[visionController::class,'index']);
    Route::get('admin/vision/create',[visionController::class,'create'])->name('vision.add');
    Route::get('admin/vision/delete/{id}',[visionController::class,'delete'])->name('vision.delete');
    Route::post('admin/vision/store',[visionController::class,'store'])->name('vision.store');
    Route::get('admin/vision/edit/{id}',[visionController::class,'edit'])->name('vision.edit');
    Route::post('admin/vision/update', [visionController::class,'update'])->name('vision.update');

    /*vision  Routes*/
    Route::get('/admin/Iot',[IotController::class,'index']);
    Route::get('admin/Iot/create',[IotController::class,'create'])->name('iot.add');
    Route::get('admin/Iot/delete/{id}',[IotController::class,'delete'])->name('iot.delete');
    Route::post('admin/Iot/store',[IotController::class,'store'])->name('iot.store');
    Route::get('admin/Iot/edit/{id}',[IotController::class,'edit'])->name('iot.edit');
    Route::post('admin/Iot/update', [IotController::class,'update'])->name('iot.update');

    /*Our Clients*/
    Route::get('/admin/clients',[ClientController::class,'index']);
    Route::get('/admin/clients/create',[ClientController::class,'create'])->name('clients.add');
    Route::post('/admin/clients/store',[ClientController::class,'store'])->name('clients.store');
    Route::get('/admin/clients/edit/{id}',[ClientController::class,'edit'])->name('clients.edit');
    Route::post('/admin/clients/update', [ClientController::class,'update'])->name('clients.update');
    Route::get('/admin/clients/delete/{id}', [ClientController::class,'delete'])->name('clients.delete');
    /*Slider Routes*/
    Route::get('/admin/slider',[SliderController::class,'index']);
    Route::get('/admin/slider/create',[SliderController::class,'create'])->name('slider.add');
    Route::post('/admin/slider/store', [SliderController::class,'store'])->name('slider.store');
    Route::get('/admin/slider/edit/{id}',[SliderController::class,'edit'])->name('slider.edit');
    Route::post('/admin/slider/update', [SliderController::class,'update'])->name('slider.update');
    Route::post('/admin/slider/updateArabic', [SliderController::class,'updateArabic'])->name('slider.updateArabic');
   
    Route::get('/admin/slider/delete/{id}',[SliderController::class,'delete'])->name('slider.delete');

    /*aboutus Routes*/
    Route::get('/admin/about_us',[AboutusController::class,'index']);
    Route::get('/admin/about_us/create',[AboutusController::class,'create'])->name('aboutus.add');
    Route::post('/admin/about_us/store', [AboutusController::class,'store'])->name('aboutus.store');
    Route::get('/admin/about_us/edit/{id}',[AboutusController::class,'edit'])->name('aboutus.edit');
    Route::post('/admin/about_us/update', [AboutusController::class,'update'])->name('aboutus.update');
    Route::get('/admin/about_us/delete/{id}',[AboutusController::class,'delete'])->name('aboutus.delete');
   
    /*Members Category Routes*/
    Route::get('/admin/members-category', [MembersCategoryController::class,'index']);
    Route::get('/admin/members-category/create', [MembersCategoryController::class,'create'])->name('members.add');
    Route::post('/admin/members-category/store', [MembersCategoryController::class,'store'])->name('members.store');
    Route::get('/admin/members-category/edit/{id}',[MembersCategoryController::class,'edit'])->name('members.edit');
    Route::post('/admin/members-category/update', [MembersCategoryController::class,'update'])->name('members.update');
    Route::get('/admin/members-category/delete/{id}',[MembersCategoryController::class,'delete'])->name('members.delete');

    /*Submitted Contact Routes*/
    Route::get('/admin/submitted-contact',[SubmittedContactController::class,'index']);
    Route::get('/admin/submitted-contact/details/{id}',[SubmittedContactController::class,'view'])->name('submitted.view');
    Route::get('/admin/submitted-contact/deleted/{id}',[SubmittedContactController::class,'delete'])->name('submitted.deleted');
    Route::post('/admin/submitted-contact',[SubmittedContactController::class,'update'])->name('submittedcontacts.update');

    Route::get('/admin/Newsletter',[newsletterController::class,'index']);
    Route::get('/admin/Newsletter/{id}',[newsletterController::class,'view'])->name('Newsletter.view');
    Route::get('/admin/Newsletter/deleted/{id}',[newsletterController::class,'delete'])->name('Newsletter.deleted');
    Route::post('/admin/Newsletter',[newsletterController::class,'update'])->name('Newsletter.update');

    /*Pest Routes*/
    Route::get('/admin/pest', [PestController::class,'index']);
    Route::get('/admin/pest/create', [PestController::class,'create'])->name('pest.add');
    Route::post('/admin/pest/store', [PestController::class,'store'])->name('pest.store');
    Route::get('/admin/pest/edit/{id}',[PestController::class,'edit'])->name('pest.edit');
    Route::post('/admin/pest/update', [PestController::class,'update'])->name('pest.update');
    Route::get('/admin/pest/delete/{id}',[PestController::class,'delete'])->name('pest.delete');

    /*Testimonials Routes*/
    Route::get('/admin/testimonials', [TestimonialsController::class,'index']);
    Route::get('/admin/testimonials/create', [TestimonialsController::class,'create'])->name('testimonials.add');
    Route::post('/admin/testimonials/store', [TestimonialsController::class,'store'])->name('testimonials.store');
    Route::get('/admin/testimonials/edit/{id}',[TestimonialsController::class,'edit'])->name('testimonials.edit');
    Route::post('/admin/testimonials/update', [TestimonialsController::class,'update'])->name('testimonials.update');
    Route::get('/admin/testimonials/delete/{id}',[TestimonialsController::class,'delete'])->name('testimonials.delete');
    
    //Offers
    Route::get('/admin/services',[OfferController::class,'index'])->name('offers.index');
    Route::get('/admin/services/create',[OfferController::class,'create'])->name('offers.make');
    Route::post('/admin/services/save',[OfferController::class,'store'])->name('offers.store');
    Route::get('/admin/services/edit/{id}',[OfferController::class,'edit'])->name('offers.edit');
    Route::post('/admin/services/update/{id}',[OfferController::class,'update'])->name('offers.update');
    Route::delete('/admin/services/delete/{id}',[OfferController::class,'destroy'])->name('offers.destroy');
    
    
    /*Admin Routes*/
    Route::get('/admin/registered', [AdminController::class,'adminregistered'])->name('admin.registered');
    Route::post('/admin/registered-admin', [AdminController::class,'registeredadmin'])->name('registered-admin.store');
    Route::get('Allregisteredadmin', [AdminController::class,'adminindex']);

    /*Members Profile Routes*/
    // Route::get('/admin/registered-members', [RegisteredMembersController::class,'index']);
    // Route::get('/admin/registered-members/create', [RegisteredMembersController::class,'create'])->name('registered-members.add');
    // Route::post('/admin/registered-members/store', [RegisteredMembersController::class,'store'])->name('registered-members.store');
    // Route::get('/admin/registered-members/{id}',[RegisteredMembersController::class,'view'])->name('registered-members.view');
    // Route::get('/admin/registered-members/edit/{id}',[RegisteredMembersController::class,'edit'])->name('registered-members.edit');
    // Route::post('/admin/registered-members/update', [RegisteredMembersController::class,'update'])->name('registered-members.update');
    // Route::get('/admin/registered-members/delete/{id}',[RegisteredMembersController::class,'delete'])->name('registered-members.delete');
    /*About Us Routes*/
    Route::get('/admin/aboutus', [CMSController::class,'index']); 
    Route::get('/admin/aboutus/create', [CMSController::class,'create'])->name('cms.add');
    Route::post('/admin/aboutus/store', [CMSController::class,'store'])->name('cms.store');
    Route::get('/admin/aboutus{slug}',[CMSController::class,'edit'])->name('cms.edit');
    Route::post('/admin/update/{slug}', [CMSController::class,'update'])->name('cms.update');
    Route::get('/admin/aboutus/delete/{id}',[CMSController::class,'delete'])->name('cms.delete');

     /*About Us CMS Pages Routes*/
     Route::get('/admin/cms', [PagesController::class,'index'])->name('cms_index');
     Route::get('/admin/cms/create', [PagesController::class,'create'])->name('cmspages.add');
     Route::post('/admin/cms/store', [PagesController::class,'store'])->name('cmspages.store');
     Route::get('/admin/cms/{id}',[PagesController::class,'edit'])->name('cmspages.edit');
     Route::post('/admin/cms/{id}', [PagesController::class,'update'])->name('cmspages.update');
    //  Route::post('/admin/cms/update', [PagesController::class,'arabic_update'])->name('cmspages_arabic.update');
     
     Route::get('/admin/cms/delete/{id}',[PagesController::class,'delete'])->name('cmspages.delete');

     Route::get('/admin/committee-list', [CommitteeListController::class,'index']);
Route::get('/admin/committee-list/create', [CommitteeListController::class,'create'])->name('committee-list.add');
Route::post('/admin/committee-list/store', [CommitteeListController::class,'store'])->name('committee-list.store');
Route::get('/admin/committee-list/edit/{id}',[CommitteeListController::class,'edit'])->name('committee-list.edit');
Route::post('/admin/committee-list/update', [CommitteeListController::class,'update'])->name('committee-list.update');
Route::get('/admin/committee-list/delete/{id}',[CommitteeListController::class,'delete'])->name('committee-list.delete');
Route::get('/catagory/subcategory/ajax/{category_id}',[CommitteeListController::class,'AjaxgeteCategory']);
Route::get('admin/committee-list/remove/{id}',[CommitteeListController::class,'member_remove'])->name('member.remove');

    /*Contact Details Routes*/
    Route::get('/admin/contact', [ContactController::class,'index']);
    Route::get('/admin/contact/create', [ContactController::class,'create'])->name('contact.add');
   // Route::post('/admin/contact/store', [ContactController::class,'create'])->name('contact.store');
    Route::get('/admin/contact/edit/{id}',[ContactController::class,'edit'])->name('contact.edit');
    Route::post('/admin/contact/update', [ContactController::class,'update'])->name('contact.update');
    Route::get('/admin/contact/delete/{id}',[ContactController::class,'delete'])->name('contact.delete');
 /* genearal Setting Routes*/
//  Route::get('/admin/setting', [GeneralController::class,'index']);
//     Route::get('/admin/setting/create', [GeneralController::class,'create'])->name('setting.add');
//     Route::post('/admin/setting/store', [GeneralController::class,'store'])->name('setting.store');
//     Route::get('/admin/partner',[GeneralController::class,'edit'])->name('setting.edit');
//     Route::post('/admin/partner/update', [GeneralController::class,'update'])->name('setting.update');
//     Route::get('/admin/setting/delete/{id}',[GeneralController::class,'delete'])->name('setting.delete');
 
    /*Audit Routes*/
    Route::get('/admin/audit', [AuditController::class,'index']);
    Route::get('/admin/audit/create', [AuditController::class,'create'])->name('audit.add');
    Route::post('/admin/audit/store', [AuditController::class,'store'])->name('audit.store');
    Route::get('/admin/audit/edit/',[AuditController::class,'edit'])->name('audit.edit');
    Route::post('/admin/audit/update', [AuditController::class,'update'])->name('audit.update');
    Route::get('/admin/audit/delete/{id}',[AuditController::class,'delete'])->name('audit.delete');

    /*Services */
    // Route::get('admin/services',[ServicesController::class,'index']);
    // Route::get('admin/services/create/add', [ServicesController::class,'create'])->name('services.add');
    // Route::post('admin/services/store', [ServicesController::class,'store'])->name('services.store');
    // // Route::post('admin/services/arabicstore', [ServicesController::class,'arabicstore'])->name('arabic_services.store');
    // Route::get('admin/services/edit/{id}/{language}',[ServicesController::class,'edit'])->name('services.edit');
    // Route::post('admin/services/update', [ServicesController::class,'update'])->name('services.update');
    // Route::get('admin/services/delete/{id}',[ServicesController::class,'delete'])->name('services.delete');
    // Route::get('admin/airservicesdetails',[ServicesController::class,'airportservicesindex']);
    
     /*Services */
     Route::get('admin/servicesdetails',[ServicesDetailsController::class,'index']);
     Route::get('admin/servicesdetails/create', [ServicesDetailsController::class,'create'])->name('admin/servicesdetails.add');
     Route::post('admin/servicesdetails/store', [ServicesDetailsController::class,'store'])->name('admin/servicesdetails.store');
     // Route::post('admin/services/arabicstore', [ServicesController::class,'arabicstore'])->name('arabic_services.store');
     Route::get('admin/servicesdetails/edit/{id}',[ServicesDetailsController::class,'edit'])->name('admin/servicesdetails.edit');
     Route::post('admin/servicesdetails/update', [ServicesDetailsController::class,'update'])->name('admin/servicesdetails.update');
     Route::get('admin/servicesdetails/delete/{id}',[ServicesDetailsController::class,'delete'])->name('admin/servicesdetails.delete');
    

     /*Services Menu*/
     Route::get('admin/servicesmenu',[ServicesMenuController ::class,'index']);
     Route::get('admin/servicesmenu/create', [ServicesMenuController ::class,'create'])->name('adminservicesmenu.add');
     Route::post('admin/servicesmenu/store', [ServicesMenuController ::class,'store'])->name('adminservicesmenu.store');
     Route::get('admin/servicesmenu/edit/{id}',[ServicesMenuController ::class,'edit'])->name('adminservicesmenu.edit');
     Route::post('admin/servicesmenu/update', [ServicesMenuController ::class,'update'])->name('adminservicesmenu.update');
     Route::get('admin/servicesmenu/{id}',[ServicesMenuController ::class,'delete'])->name('adminservicesmenu.delete');

     /*FAQ*/
     Route::get('admin/faq',[FaqController::class,'index']);
     Route::get('admin/faq/create', [FaqController::class,'create'])->name('faq.add');
     Route::post('admin/faq/store', [FaqController::class,'store'])->name('faq.store');
     Route::get('admin/faq/edit/{id}',[FaqController::class,'edit'])->name('faq.edit');
     Route::post('admin/faq/update', [FaqController::class,'update'])->name('faq.update');
     Route::get('admin/faq/delete/{id}',[FaqController::class,'delete'])->name('faq.delete');

     /*Footer*/
     Route::get('admin/footer',[FooterController::class,'index']);
     Route::get('admin/footer/create', [FooterController::class,'create'])->name('footer.add');
     Route::post('admin/footer/store', [FooterController::class,'store'])->name('footer.store');
     Route::get('admin/footer/edit/{id}',[FooterController::class,'edit'])->name('footer.edit');
     Route::post('admin/footer/update', [FooterController::class,'update'])->name('footer.update');
     Route::get('admin/footer/delete/{id}',[FooterController::class,'delete'])->name('footer.delete');

     /*Submitted*/
     Route::get('admin/submitted',[SubmissionController::class,'index']);
     Route::get('admin/submitted/create', [SubmissionController::class,'create'])->name('submitted.add');
     Route::post('admin/submitted/store', [SubmissionController::class,'store'])->name('submitted.store');
     Route::get('admin/submitted/edit/',[SubmissionController::class,'edit'])->name('submitted.edit');
     Route::post('admin/submitted/update', [SubmissionController::class,'update'])->name('submitted.update');
     Route::get('admin/submitted/delete/{id}',[SubmissionController::class,'delete'])->name('submitted.delete');

});