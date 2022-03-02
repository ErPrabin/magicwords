<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\Component;
use App\Models\Faq;
use App\Models\Feature;
use App\Models\Pricing;
use App\Models\Process;
use App\Models\Service;
use App\Models\Specification;
use App\Models\Technology;
use App\Models\Testimonial;
use App\Models\WhyChooseUs;
use App\Models\WorkingProcess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class FrontendController extends Controller
{
    public function index()
    {
        $whyus = WhyChooseUs::orderBy('sort', 'asc')->get();
        $working_process = WorkingProcess::orderBy('sort', 'asc')->get();
        $testimonials = Testimonial::orderBy('sort', 'asc')->get();
        $technologies = Technology::orderBy('sort', 'asc')->get();
        $features = Feature::orderBy('sort', 'asc')->get();
        $mobile_development = Technology::where('category', 'mobile-development')->orderBy('sort', 'asc')->get();
        $web_development = Technology::where('category', 'web-development')->orderBy('sort', 'asc')->get();
        $graphic_design = Technology::where('category', 'design')->orderBy('sort', 'asc')->get();
        $frontend_development = Technology::where('category', 'frontend')->orderBy('sort', 'asc')->get();
        $backend_development = Technology::where('category', 'backend')->orderBy('sort', 'asc')->get();
        $database_development = Technology::where('category', 'database')->orderBy('sort', 'asc')->get();

        return view('frontend.pages.index', compact('whyus', 'working_process', 'testimonials','features', 'technologies', 'mobile_development', 'web_development', 'graphic_design', 'frontend_development', 'backend_development', 'database_development'));
    }
    public function aboutus()
    {
        $working_process = WorkingProcess::orderBy('sort', 'asc')->get();
        $whyus = WhyChooseUs::orderBy('sort', 'asc')->get();
        $testimonials = Testimonial::orderBy('sort', 'asc')->get();
        $specifications = Specification::orderBy('sort', 'asc')->get();

        return view('frontend.pages.about', compact('whyus', 'working_process', 'testimonials','specifications'));
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function service()
    {
        return view('frontend.pages.service');
    }
    public function singleservice($slug)
    {
        $service = Service::where('slug', $slug)->first();
        return view('frontend.pages.singleservice', compact('service'));
    }

    public function sendMail(Request $request)
    {
        $email = Component::where('key', Str::slug('receiving-email-address'))->first();
        if ($email) {
            $email = strip_tags($email->description);
        } else {
            $email = 'info@handymankrish.com.au';
        }
        Mail::to($email)->send(new SendMail($request->except(['_token', 'g-recaptcha-response'])));
        return redirect()->back()->with('flash_success', 'Sent successfully');
    }
}
