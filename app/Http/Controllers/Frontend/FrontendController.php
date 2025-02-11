<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\CareerMail;
use App\Mail\SendMail;
use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\Career;
use App\Models\Component;
use App\Models\Event;
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
use Carbon\Carbon;
use Illuminate\Http\UploadedFile;

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
        // $database_development = Technology::where('category', 'database')->orderBy('sort', 'asc')->get();
        $specifications = Specification::orderBy('sort', 'asc')->get();

        return view('frontend.pages.index', compact('whyus', 'working_process', 'specifications', 'testimonials', 'features', 'technologies', 'mobile_development', 'web_development', 'graphic_design', 'frontend_development', 'backend_development'));
    }
    public function aboutus()
    {
        $working_process = WorkingProcess::orderBy('sort', 'asc')->get();
        $whyus = WhyChooseUs::orderBy('sort', 'asc')->get();
        $testimonials = Testimonial::orderBy('sort', 'asc')->get();
        $specifications = Specification::orderBy('sort', 'asc')->get();

        return view('frontend.pages.about', compact('whyus', 'working_process', 'testimonials', 'specifications'));
    }
    public function events()
    {
        $upcomming_events = Event::orderBy('sort', 'asc')->whereNull('completed_at')->get();
        $past_events = Event::orderBy('sort', 'asc')->whereNotNull('completed_at')->get();

        return view('frontend.pages.event', compact('upcomming_events', 'past_events'));
    }
    public function eventDetail($slug)
    {
        $event = Event::where('slug', $slug)->first();

        return view('frontend.pages.event-detail', compact('event'));
    }
    public function career()
    {
        $careers = Career::orderBy('sort', 'asc')->get();

        return view('frontend.pages.career', compact('careers'));
    }
    public function careerDetail($slug)
    {
        $career = Career::where('slug', $slug)->first();

        return view('frontend.pages.career-detail', compact('career'));
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
        $singleservice = Service::where('slug', $slug)->first();
        return view('frontend.pages.singleservice', compact('singleservice'));
    }

    public function sendMail(Request $request)
    {
        // dd($request->all());
        $email = Component::where('slug', Str::slug('receiving-email-address'))->first();
        if ($email) {
            $email = strip_tags($email->description);
        } else {
            $email = 'info@handymankrish.com.au';
        }
        Mail::to($email)->send(new SendMail($request->except(['_token', 'g-recaptcha-response'])));
        return redirect()->back()->with('flash_success', 'Sent successfully');
    }
    public function sendCareerMail(Request $request)
    {
        $_email = Component::where('slug', Str::slug('Receiving Mail Address'))->first();

        if ($_email) {
            $email = strip_tags($_email->description);
        } else {
            $email = 'acounts@lifestylecareandsupport.com.au';
        }

        $cv = $this->storeFile($request->cv, $request->name);
        // $cover_letter = null;
        // if (!is_null($request->cover_letter)) {
        //     $cover_letter = $this->storeFile($request->cover_letter, $request->name, true);
        // }

        Mail::to($email)->send(new CareerMail($request->except(['_token', 'g-recaptcha-response', 'cv']), $cv));

        if ($request->has('jobmsg')) {
            $msg = $request->jobmsg;
        } else {
            $msg = 'Thank you for applying the job. Our Staff will contact you soon.';
        }
        return redirect()->back()->with('flash_success', $msg);
    }
    public function storeFile(UploadedFile $file, $name, $cover_letter = false)
    {
        $fileName = $name . '-' . ($cover_letter ? 'cover-letter' : 'resume') . '-';
        $fileName = $name . Str::slug(Carbon::now()->format('YmdHisu')) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('career-file'), $fileName);
        return $fileName;
    }
}
