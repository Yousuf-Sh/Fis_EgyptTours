<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\Faq;
use App\Models\CMS;
use App\Models\Testimonials;
use App\Models\Blog;
use App\Models\Partner;
use Illuminate\Support\Facades\App; // Ensure App facade is imported
use Illuminate\Support\Facades\DB;
// use App\Models\Faq;

use Illuminate\Http\Request;

class HomeController extends Controller
{
        /* Set $locale globally within the controller class so that we dont have to get
        locale again and again in each method*/
        
        public $locale;
        public function __construct()
        {
            $this->locale = App::getLocale(); 
        }
        //


        public function index()
        {
            $slider = Slider::where('language', $this->locale)->first();
            $testimonials = Testimonials::where('language',$this->locale)->get();
            $blogs = Blog::where('language',$this->locale)->get();
            $faqs = FAQ::where('language',$this->locale)->get();
            //increasing the number of testimonials to fill the div for now
            // remove when final
            $testimonials = $testimonials->concat($testimonials);
            $testimonials = $testimonials->concat($testimonials);
            // dd($testimonials);

            $baseSlugs = ['explore-more', 'memories', 'tour-video', 'faq'];
            $cmsData = [];
            foreach ($baseSlugs as $baseSlug) {
                $slug = ($this->locale == 'en') ? $baseSlug : $baseSlug . '-' . $this->locale;
    
                // Fetch CMS data for the constructed slug
                $cmsData[$baseSlug] = CMS::where('slug', $slug)->first();
            }
    
            // Return the view and pass the slider, locale, and cmsData to it
            return view('Frontend.index', compact(
                'slider','cmsData',
                'testimonials','blogs','faqs'));
        }
    
    

    public function about(){
        $baseSlugs = ['explore-more'];
        $cmsData = [];
        foreach ($baseSlugs as $baseSlug) {
            $slug = ($this->locale == 'en') ? $baseSlug : $baseSlug . '-' . $this->locale;

            // Fetch CMS data for the constructed slug
            $cmsData[$baseSlug] = CMS::where('slug', $slug)->first();
        }

        return view('Frontend.about',[
            'cmsData'=>$cmsData
        ]);
    }

    public function contact(){
        return view('Frontend.contact');
    }

    public function service(){
        return view('Frontend.services');
    }

    public function blog(){
        // $locale = App::getLocale();
        $blogs = Blog::where('language',$this->locale)->get();
        $blogs = $blogs->concat($blogs);
        $blogs = $blogs->shuffle();

        return view('Frontend.blog',['blogs'=>$blogs]);
    }

    public function blog_details(){
        return view('Frontend.blog-detail');
    }

    public function airport_transfer(Request $request)
    {
        if ($request->ajax()) {
            // Handle AJAX request
            $source = $request->input('source');
            $destination = $request->input('destination');
            $passengers = $request->input('passengers');
            $locale = app()->getLocale(); // Assuming locale is set in the application
    
            // Query with the join
            $results = DB::table('rate')
                ->join('airport_transfer', 'rate.services_id', '=', 'airport_transfer.id')
                ->where('rate.source', $source)
                ->where('rate.destination', $destination)
                ->where('airport_transfer.passengers','>=', $passengers)
                ->where('airport_transfer.language', $locale)
                ->select('rate.*', 'airport_transfer.*')
                ->get();
    // dd($results);
            // Return results as JSON
            return response()->json(['success' => true, 'data' => $results]);
        }
    
        // Initial page load (non-AJAX)
        $sources = DB::table('source')->get();
        $destinations = DB::table('destination')->get();
        $partners = Partner::all();
    
        return view('Frontend.airport-transfer', compact('partners', 'sources', 'destinations'));
    }
    
    public function airport_transfer_fares(){
        return view('Frontend.airport-transfer-fares');
    }
    public function airport_transfer_payments(){
        return view('Frontend.airport-transfer-payments');
        
    }

    public function booking_payments(){
        return view('Frontend.booking_payments');
        
    }

    public function detail_page_old_design(){
        return view('Frontend.detail-page-old-design');
        
    }

    public function detail_page(){
        return view('Frontend.detail-page');
    }
    
    public function faq(){
        return view('Frontend.faqs');
    }
    
    public function excursions(){
        return view('Frontend.excursions');
    }    

    public function nile_cruise(){
        return view('Frontend.nile-cruise');
    }
    
    public function nile_cruise_old_design(){
        return view('Frontend.nile-cruise-old-design');
    }    

    public function payment_and_cancellation(){
        return view('Frontend.payment-and-cancellation');
    }

    public function privacy_and_policy(){
        return view('Frontend.privacy-and-policy');
    }

    public function travel_packages(){
        return view('Frontend.travel-package');
    }

    public function travel_packages_old_design(){
        return view('Frontend.travel-package-old-design');
    }

}
