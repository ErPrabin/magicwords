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
        return view('frontend.pages.index', compact('whyus', 'working_process', 'testimonials'));
    }
    public function aboutus()
    {
        $working_process = WorkingProcess::orderBy('sort', 'asc')->get();
        $whyus = WhyChooseUs::orderBy('sort', 'asc')->get();
        $testimonials = Testimonial::orderBy('sort', 'asc')->get();

        return view('frontend.pages.about', compact('whyus', 'working_process', 'testimonials'));
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
