<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\EventPackage;
use App\Models\Functions\Helper;
use Storage;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('backend.admin.events.index')
            ->with('events', $events);
    }

    public function create()
    {
        return view('backend.admin.events.create');
    }

    public function store(Request $request)
    {
        $event = new Event;
        $event->title = $request->title;
        $event->excerpt = $request->excerpt;
        $event->from = $request->from;
        $event->to = $request->to;
        $event->venue = $request->venue;
        $event->description = $request->description;
        $event->meta_keyword = $request->excerpt;
        $event->meta_description = $request->excerpt;

        if ($request->image1){
            $path = Helper::uploadAnything(
                $request->image1, 
                $event->name, 
                'assets/files/events/'.$event->name.'/', 
                $request->image1
            );
        }

        if ($request->image2){
            $path = Helper::uploadAnything(
                $request->image2, 
                $event->name, 
                'assets/files/events/'.$event->name.'/', 
                $request->image2
            );
        }

        if ($request->image3){
            $path = Helper::uploadAnything(
                $request->image3, 
                $event->name, 
                'assets/files/events/'.$event->name.'/', 
                $request->image3
            );
        }

        if ($request->image4){
            $path = Helper::uploadAnything(
                $request->image4, 
                $event->name, 
                'assets/files/events/'.$event->name.'/', 
                $request->image4
            );
        }

        if ($request->image5){
            $path = Helper::uploadAnything(
                $request->image5, 
                $event->name, 
                'assets/files/events/'.$event->name.'/', 
                $request->image5
            );
        }

        if ($request->image6){
            $path = Helper::uploadAnything(
                $request->image6, 
                $event->name, 
                'assets/files/events/'.$event->name.'/', 
                $request->image6
            );
        }

        if ($request->image7){
            $path = Helper::uploadAnything(
                $request->image7, 
                $event->name, 
                'assets/files/events/'.$event->name.'/', 
                $request->image7
            );
        }

        if ($request->image8){
            $path = Helper::uploadAnything(
                $request->image8, 
                $event->name, 
                'assets/files/events/'.$event->name.'/', 
                $request->image8
            );
        }

        if ($request->image9){
            $path = Helper::uploadAnything(
                $request->image9, 
                $event->name, 
                'assets/files/events/'.$event->name.'/', 
                $request->image9
            );
        }

        if ($request->image10){
            $path = Helper::uploadAnything(
                $request->image10, 
                $event->name, 
                'assets/files/events/'.$event->name.'/', 
                $request->image10
            );
        }

        $event->save();


        foreach($request->event_package_details as $event_detail){ 
            $eventPackage = new EventPackage;
            $eventPackage->event_package_description = $event_detail['event_package_description'];
            $eventPackage->amount = $event_detail['amount'];
            $event->eventPackages()->save($eventPackage); 
        }

        
        return redirect()->route('admin-events.show', $event->id);
    }

    public function show($id)
    {
        $event = Event::find($id);
        return view('backend.admin.events.show')
            ->with('event', $event);
    }

    public function edit($id)
    {
        $event = Event::find($id);
        return view('backend.admin.events.edit')
            ->with('event', $event);
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $event = Event::find($id);

        foreach ($event->eventPackages as $package){
            $package->forceDelete();
        }

        $event->title = $request->title;
        $event->excerpt = $request->excerpt;
        $event->from = $request->from;
        $event->to = $request->to;
        $event->venue = $request->venue;
        $event->description = $request->details;
        $event->meta_keyword = $request->excerpt;
        $event->meta_description = $request->excerpt;

        if ($request->image1){
            $path = Helper::uploadAnything(
                $request->image1, 
                $event->name, 
                'assets/files/events/'.$event->name.'/', 
                $request->image1
            );
            $oldFilename = $event->image1;
            // add the new photo
            $event->image1 = $path;
            // delete the old photo
            Storage::delete($oldFilename);
        }

        if ($request->image2){
            $path = Helper::uploadAnything(
                $request->image2, 
                $event->name, 
                'assets/files/events/'.$event->name.'/', 
                $request->image2
            );
            $oldFilename = $event->image2;
            // add the new photo
            $event->image2 = $path;
            // delete the old photo
            Storage::delete($oldFilename);
        }

        if ($request->image3){
            $path = Helper::uploadAnything(
                $request->image3, 
                $event->name, 
                'assets/files/events/'.$event->name.'/', 
                $request->image3
            );
            $oldFilename = $event->image3;
            // add the new photo
            $event->image3 = $path;
            // delete the old photo
            Storage::delete($oldFilename);
        }

        if ($request->image4){
            $path = Helper::uploadAnything(
                $request->image4, 
                $event->name, 
                'assets/files/events/'.$event->name.'/', 
                $request->image4
            );
            $oldFilename = $event->image4;
            // add the new photo
            $event->image4 = $path;
            // delete the old photo
            Storage::delete($oldFilename);
        }

        if ($request->image5){
            $path = Helper::uploadAnything(
                $request->image5, 
                $event->name, 
                'assets/files/events/'.$event->name.'/', 
                $request->image5
            );
            $oldFilename = $event->image5;
            // add the new photo
            $event->image5 = $path;
            // delete the old photo
            Storage::delete($oldFilename);
        }

        if ($request->image6){
            $path = Helper::uploadAnything(
                $request->image6, 
                $event->name, 
                'assets/files/events/'.$event->name.'/', 
                $request->image6
            );
            $oldFilename = $event->image6;
            // add the new photo
            $event->image6 = $path;
            // delete the old photo
            Storage::delete($oldFilename);
        }

        if ($request->image7){
            $path = Helper::uploadAnything(
                $request->image7, 
                $event->name, 
                'assets/files/events/'.$event->name.'/', 
                $request->image7
            );
            $oldFilename = $event->image7;
            // add the new photo
            $event->image7 = $path;
            // delete the old photo
            Storage::delete($oldFilename);
        }

        if ($request->image8){
            $path = Helper::uploadAnything(
                $request->image8, 
                $event->name, 
                'assets/files/events/'.$event->name.'/', 
                $request->image8
            );
            $oldFilename = $event->image8;
            // add the new photo
            $event->image8 = $path;
            // delete the old photo
            Storage::delete($oldFilename);
        }

        if ($request->image9){
            $path = Helper::uploadAnything(
                $request->image9, 
                $event->name, 
                'assets/files/events/'.$event->name.'/', 
                $request->image9
            );
            $oldFilename = $event->image9;
            // add the new photo
            $event->image9 = $path;
            // delete the old photo
            Storage::delete($oldFilename);
        }

        if ($request->image10){
            $path = Helper::uploadAnything(
                $request->image10, 
                $event->name, 
                'assets/files/events/'.$event->name.'/', 
                $request->image10
            );
            $oldFilename = $event->image10;
            // add the new photo
            $event->image10 = $path;
            // delete the old photo
            Storage::delete($oldFilename);
        }

        $event->save();
        return redirect()->route('admin-events.show', $event->id);
    }

    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect()->route('admin-events.index');
    }
}
