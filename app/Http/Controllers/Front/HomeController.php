<?php

namespace App\Http\Controllers\Front;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use App\Models\CMS;
use App\Models\General;
use App\Models\Slider;
use App\Models\Services;
use App\Models\Choose;
use App\Models\Client;
use App\Models\Working;
use App\Models\Testimonials;
use App\Models\Pest;
use App\Models\Faq;
use App\Models\About_us;
use App\Models\Question_descriptions;
use App\Models\Streaming;
use App\Models\Footer;
use App\Models\Submitted;
use App\Models\Contact;
use App\Models\Vision;
use App\Models\Iot;
use App\Models\Project;
use App\Models\Servicesmenu;
//use App\Models\Services;
use Illuminate\Support\Facades\Session;
//use App\Models\AboutUs;
use DB;
class HomeController extends Controller
{
    public function index(){
 
      $locale = Session::get('locale');

         $Slider = Slider::all();
         $Vision = Vision::all();
        
     //    $Choose = Choose::all();
         $choose=CMS::where('slug','=','whyChooseUs')->first();
         $FAQ_title=CMS::where('slug','=','FAQ_Static')->first();
         $OurVisionhomepage=CMS::where('slug','=','OurVision')->first();
         $OurCustomers=CMS::where('slug','=','Our Customers')->first();
        
         $Services=Services::where('checkbox','=','1')->get();
         $FAQ=Faq::all();

         $Clients=Client::all();
        // return $FAQ;
      // return  $chooseus_title ;
         return view('front.home',compact('Slider','locale','Vision','choose','FAQ_title','OurVisionhomepage','FAQ','Services','OurCustomers','Clients'));
    	//return view('front.home');
    }
   
    public function About(){
      $locale = Session::get('locale');
      $Vision = Vision::all();
      $choose=CMS::where('slug','=','whyChooseUs')->first();
      $OurVisionhomepage=CMS::where('slug','=','OurVision')->first();
      $FAQ=Faq::all();
      $FAQ_title=CMS::where('slug','=','FAQ_Static')->first();
      $OurCustomers=CMS::where('slug','=','Our Customers')->first();
      $Clients=Client::all();
      $About_us=About_us::all();
    //  // return  $locale ;
    //     $Submitted=Submitted::first();
    //   //  $aboutus= DB::table('cms')->first();
    //     $aboutus=CMS::where('slug','=','aboutUs')->first();
         return view('front.about',compact('Vision', 'choose','locale','OurVisionhomepage','FAQ','Clients','OurCustomers','FAQ_title','About_us'));
    	//return view('front.about');
    }
    public function  distribution(){
  //  return 'df';
       $locale = Session::get('locale');
       $Distribution=CMS::where('slug','=','Distribution')->first();
       //return $Distribution;
         return view('front.distribution',compact('locale','Distribution'));
    	//return view('front.about');
    }
    public function  food_services(){
      //  return 'df';
           $locale = Session::get('locale');
           $FoodServices=CMS::where('slug','=','Food Services')->first();
          /// return $FoodServices;
             return view('front.foodservices',compact('locale','FoodServices'));
          //return view('front.about');
        }
        public function wholesale(){
          //  return 'df';
               $locale = Session::get('locale');
               $Wholesale=CMS::where('slug','=','Wholesale')->first();
               //return $Distribution;
                 return view('front.Wholesale',compact('locale','Wholesale'));
              //return view('front.about');
            }
            public function Catering(){
              //  return 'df';
                   $locale = Session::get('locale');
                   $Catering=CMS::where('slug','=','Catering')->first();
                   //return $Distribution;
                     return view('front.Catering',compact('locale','Catering'));
                  //return view('front.about');
                }
                public function uniform_safety(){
                  //  return 'df';
                       $locale = Session::get('locale');
                       $UnifomAndSafety=CMS::where('slug','=','Unifom And Safety')->first();
                       //return $Distribution;
                         return view('front.uniform-safety',compact('locale','UnifomAndSafety'));
                      //return view('front.about');
                    }
                    public function Iot(){
                      //  return 'df';
                           $locale = Session::get('locale');
                           $IOT=CMS::where('slug','=','IOT')->first();
                           $iotModule=Iot::all();

                          // return $iotModule;
                           $UnifomAndSafety=CMS::where('slug','=','Unifom And Safety')->first();
                           //return $Distribution;
                             return view('front.iot',compact('locale','IOT','iotModule','UnifomAndSafety'));
                          //return view('front.about');
                        }
                        public function Project(){
                          //  return 'df';
                               $locale = Session::get('locale');
                               $CMSProject=CMS::where('slug','=','Project Management')->first();
                               $Project=Project::all();
                             
                                 return view('front.Project',compact('locale','Project','CMSProject'));
                              //return view('front.about');
                            }
                            public function  business_consultancy(){
                              //  return 'df';
                                   $locale = Session::get('locale');
                                   $Services=Services::all();
                                   $BusinessConsultancy=CMS::where('slug','=','Business Consultancy')->first();
                                  
                                 
                                     return view('front.BusinessConsultancy',compact('Services'));
                                  //return view('front.about');
                                }
                                public function  construction(){
                                  //  return 'df';
                                       $locale = Session::get('locale');
                                       $construction=CMS::where('slug','=','construction')->first();
                                      
                                     
                                         return view('front.construction',compact('locale','construction'));
                                      //return view('front.about');
                                    }
                                    public function  barcode(){
                                      //  return 'df';
                                           $locale = Session::get('locale');
                                           $barcode=CMS::where('slug','=','barcode')->first();
                                          
                                         
                                             return view('front.barcode',compact('locale','barcode'));
                                          //return view('front.about');
                                        }
                                    
                           
                                        public function show($slug)
                                        {
                                            // Fetch the page content based on the slug
                                            //Services
                                           /// return $slug;
                                            {
                                                // Fetch the page content based on the slug
                                                //$page = Servicesmenu::where('slug', $slug)->where('status', 'enabled')->firstOrFail();
                                                $service = Services::where('slug', $slug)->firstOrFail();
                                                $serviceslug = Services::where('slug', $slug)->get();
                                                $locale = Session::get('locale');
                                        //$service = $page->service;
                                            //$service = $page->service;
                                                // Pass the content to the view
                                           // return  $service;
                                                return view('front.show', compact('service','serviceslug','locale'));
                                            } 
                                            //return view('front.show', compact('service'));
                                        }

                                        public function upload(Request $request): JsonResponse
                                        {
                                            if ($request->hasFile('upload')) {
                                                $originName = $request->file('upload')->getClientOriginalName();
                                                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                                                $extension = $request->file('upload')->getClientOriginalExtension();
                                                $fileName = $fileName . '_' . time() . '.' . $extension;
                                          
                                                $request->file('upload')->move(public_path('Backend/images/'), $fileName);


                                          
                                                $url = asset('Backend/images/' . $fileName);
                                      
                                                return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
                                            }
                                        }
  
    public function Services(){
      $locale = Session::get('locale');
      $Pest=Pest::all();
      $pest_title=CMS::where('slug','=','pest')->first();
     // return $pest_title;
      $Services=Services::all();
      $Submitted=Submitted::first();
    	return view('front.services',compact('Services','Pest','Submitted','locale','pest_title'));
    }
    public function Partners(){
   // return $slug;
   $locale = Session::get('locale');
      $generalclients=Client::all();
     // $page = $pageRepo->find($slug);
     // return $page;
     $Submitted=Submitted::first();
     
    //  $articles =CMS::where('slug','=','Our Partners')->first();
     // return $articles;
      $pest=CMS::where('slug','=','Our Partners')->first();
      $Streaming= CMS::where('slug','=','Steaming')->first();
      //return $Streaming;
      //return $general;
    	return view('front.partners',compact('Streaming','generalclients','Submitted','pest','locale'));
    }
    public function Testimonials(){
      $locale = Session::get('locale');
      $Submitted=Submitted::first();
      $testinomial=Testimonials::all();
    	return view('front.testimonials',compact('testinomial','Submitted','locale'));
    }
    public function Faqs(){
      $locale = Session::get('locale');
      $Submitted=Submitted::first();
      $faqs= CMS::where('slug','=','FAQ')->first();
      
      $Question_descriptions=Faq::all();
    	return view('front.faqs',compact('faqs','Question_descriptions','Submitted','locale'));
    }
    public function Contact(Request $request){
      $Contactus= CMS::where('slug','=','Contact us')->first();
      
$Submitted=Submitted::first();
$locale = Session::get('locale');
//return;
    	return view('front.contact',compact('Submitted','locale','Contactus'));
    }


    public function change_lang(Request $request, $locale)
    {
        // Set the locale in the session
        Session::put('locale', $locale);
        App::setLocale($locale);
        $locale = App::getLocale( );
        
        // Redirect back to the previous page or any specific page
        return redirect()->back();
    }
    public function Contactpost(Request $request){
      return 'dfd';
        //    return $request->name;
      // Contact::insert([
      // 		'name'=>$request->name,
      // 		'address'=>$request->address,
      // 		'services'=>$request->services,
      // 	'phone'=>$request->phone,
      //     'email'=>$request->email,
      // 	'message'=>$request->message,
      //    // 'location'=>$request->location,
      // 	]);
      //return 'fvs';
            return view('front.contact');
          }
    
    public function Footer(){

      $locale = Session::get('locale');
      $footer= DB::table('footers')->first();
      //return $footer;
    	return view('Admin.include.footer',compact('footer'));
    }


}
