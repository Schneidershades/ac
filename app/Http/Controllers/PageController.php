<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\RegistrationItem;
use App\Models\Attribute;
use App\Models\Process;
use App\Models\Why;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Models\Partner;
use App\Models\Count;
use App\Models\Faq;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Advert;
use App\Models\Category;

class PageController extends Controller
{
    public function index()
    {
    	return view('pages.welcome')
    		->with('sliders', Slider::all())
            ->with('adverts', Advert::all())
            // ->with('testimonials', Testimonial::all())
            ->with('partners', Partner::all())
            ->with('home_posts', Post::all())
            ->with('categories', Category::all())
            // ->with('stats', Count::latest('created_at')->take(4)->get())
            // ->with('faqs', Faq::all())
    		// ->with('attribute', Attribute::all())
    		// ->with('processes', Process::all())
    		;
    }

    public function about()
    {
        return view('pages.about');
    }

    public function page()
    {	
    	$page = Page::where('slug', $slug)->first();

    	return view('web.pages.page')
    		->with('services', RegistrationItem::all())
    		->with('attribute', Attribute::all())
    		->with('processes', Process::all())
    		->with('whys', Why::all())
    		->with('page', $page);
    }

    public function storeContact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:255',
            'comment' => 'required'
        ]);

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->comment = $request->comment;

        $contact->save();

        Session::flash('success', 'Your request was sent');

        return redirect()->back();
    }

}
