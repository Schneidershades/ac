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
use App\Models\Event;
use App\Models\Faq;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Advert;
use App\Models\Category;
use App\Models\Package;
use App\Models\User;
use App\Models\EventTransaction;

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
            ->with('categories', Category::latest('created_at')->take(12)->get())
            // ->with('stats', Count::latest('created_at')->take(4)->get())
            // ->with('faqs', Faq::all())
    		// ->with('attribute', Attribute::all())
    		// ->with('processes', Process::all())
    		;
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function about()
    {
        return view('pages.about')
            ->with('packages', Package::all())
            ->with('users', User::all())
            ->with('adverts', Advert::all())
            ->with('partners', Partner::all())
            ->with('event', 1);
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

    public function conference()
    {
        $event = Event::first();
        $categories = Category::all();
        return view('pages.conference')
            ->with('event', $event)
            ->with('categories', $categories);
    } 


    public function saveConference(Request $request)
    {
        $find_user = User::where('email', $request->email)->first();

        if($find_user === null){
            $user = new User;
            $user->email  = $request->email;
            $user->name  = $request->full_name;
            $user->slug  = str_slug($request->full_name);
            $user->organization  = $request->organization;
            $user->phone1  = $request->phone;
            $user->category_id  = $request->category_id;
            $user->how_did_you_hear_about_ac  = $request->how_did_you_hear_about_ac;
            if($request->password && $request->member == 'yes'){
                $user->password  = $request->password;
            }

            $user->save();
            $eventUser = $user->id;
        }else{
            $find_user->organization  = $request->organization;
            $find_user->phone1  = $request->phone;
            $find_user->category_id  = $request->category_id;
            $find_user->how_did_you_hear_about_ac  = $request->how_did_you_hear_about_ac;
            $find_user->save();
            $eventUser = $find_user->id;
        }
        

        $transaction =  new EventTransaction;
        $transaction->event_package_id = $request->event_package_id;
        $transaction->user_id = $eventUser;
        $transaction->save();

        return redirect()->route('conference.register.receipt', $transaction->identifier);
    }

    public function conferenceReciept($id)
    {

        $event = Event::first();
        $categories = Category::all();
        $transaction = EventTransaction::where('identifier',$id)->first();
        return view('pages.conference_receipt')
            ->with('categories', $categories)
            ->with('event', $event)
            ->with('transaction', $transaction);
    }

    public function roundTable()
    {
        return view('pages.round-table');
    }

}
