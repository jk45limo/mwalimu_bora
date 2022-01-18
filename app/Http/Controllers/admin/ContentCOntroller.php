<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\CalendarEvent;
use App\Models\Pupil;
use App\Models\Teacher;
use App\Models\Tutor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Storage;

class ContentCOntroller extends Controller
{
    public function index()
    {
        $events = CalendarEvent::where('start', '>=', Carbon::now())->limit(10)->get();
        $totaltutors = Tutor::all();
        $totalstudents = Pupil::all();
        $totalteachers = Teacher::all();
        $totalevents = CalendarEvent::all();

        return view('admin.dashboard', compact(['events', 'totaltutors', 'totalstudents', 'totalteachers', 'totalevents']));
    }
    public function allblogs()
    {
        $blogs = Blog::all();
        return view('admin.blogs.all-blogs', compact('blogs'));
    }
    public function editblog($blogid)
    {
        $blog = Blog::findOrFail($blogid);
        return view('admin.blogs.edit', compact('blog'));
    }
    public function updateblog(Request $request, $blogid)
    {
        // $blog = Blog::findOrFail($blogid);
        // return view('admin.blogs.edit', compact('blog'));
        $this->validate($request, [
            'title' => 'required|string|min:10',
            'picture' => 'image| mimes:png,jpeg, jpg|max:10080',
            'description' => 'required|string|'
        ]);
        $blog = Blog::findOrFail($blogid);
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');
        if ($request->hasFile('picture')) {
            Storage::delete('/public/blogs/' . $blog->picture);
            $fileNameWithExt = $request->picture->getClientOriginalName();
            $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $Extension = $request->picture->getClientOriginalExtension();
            $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
            $path = $request->picture->storeAs('blogs', $filenameToStore, 'public');
            $blog->picture = $filenameToStore;
        }

        $blog->save();
        Toastr::warning('News blog Details Updated Successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/blog/all-blogs');
    }
    public function viewblog($blogid)
    {
        $blog = Blog::findOrFail($blogid);
        return view('admin.blogs.show', compact('blog'));
    }
    public function deleteblog($blogid)
    {
        $blog = Blog::findOrFail($blogid);
        Storage::delete('/public/blogs/' . $blog->picture);
        $blog->delete();
        Toastr::error('blog Deleted Successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/blog/all-blogs');
    }
}
