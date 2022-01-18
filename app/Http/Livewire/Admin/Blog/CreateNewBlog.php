<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithFileUploads;
use Brian2694\Toastr\Facades\Toastr;
class CreateNewBlog extends Component
{
    use WithFileUploads;
    public $title;
    public $picture;
    public $description;

    protected $rules = [
        'title'=>'required|string|min:10',
        'picture'=>'required|image| mimes:png,jpeg, jpg|max:10080',
        'description'=>'required|string|'
    ];
    
    public function render()
    {
     
        return view('livewire.admin.blog.create-new-blog');
    }

    public function uploadblog(){
        $this->validate();
        $blog = new Blog;
        $blog->author = auth()->user()->id;
        $blog->title = $this->title;
        $blog->description = $this->description;
        $fileNameWithExt = $this->picture->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $this->picture->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $this->picture->storeAs('blogs', $filenameToStore, 'public');
        $blog->picture = $filenameToStore;
        $blog->save();
        Toastr::success('News blog Details Added Successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/blog/all-blogs');
    }
  
}
