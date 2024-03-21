<?php

namespace App\Http\Livewire\Admins;

use App\Models\communities;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Community extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $name;
    public $tag_line;
    public $tag_desc;
    public $phone;
    public $gender;
    public $address;
    public $qualification;
    public $photo;
    
    public $registered;

    public $edit_photo;
    public $edit_community_id;
    public $button_text = "Add New Community";



    public function add_community()
    {
        if ($this->edit_photo) {

            $this->update($this->edit_community_id);

        }else{
            $this->validate([
                'name' => 'required|min:6|max:50',
                'tag_line' => 'required',
                'tag_desc' => 'required',
                /*'registered' => 'required',
                'address' => 'required',
                'phone' => 'required|numeric',
                'gender' => 'required',
                'qualification' => 'required',*/
                'photo' => 'required|image|max:3072',
                ]);


            communities::create([
                'name'=>$this->name,
                'tag_line'=>$this->tag_line,
                'tag_desc'=>$this->tag_desc,
                'image'=>$this->storeImage(),
                /*'phone'         => $this->phone,
                'gender'        => $this->gender,
                'address'       => $this->address,
                'qualification' => $this->qualification,
                
                
                'registered'    =>$this->registered,*/
            ]);
            //unset variables
            $this->name="";
            $this->tag_line="";
            $this->tag_desc="";
            $this->photo="";
            /*$this->password="";
            $this->address="";
            $this->phone="";
            $this->qualification="";
            $this->address="";
            
            
            $this->registered="";*/
            session()->flash('message', 'Community Created successfully.');
        }

    }

    public function storeImage()
    {

        if (!$this->photo) {
            return null;
        }
        $imag   = ImageManagerStatic::make($this->photo)->encode('webp');
        $name  = Str::random() . '.webp';
        Storage::disk('public')->put($name, $imag);
        return $name;
    }

    public function edit($id)
    {
        $communities = communities::findOrFail($id);
        $this->edit_community_id = $id;

        $this->name = $communities->name;
        $this->tag_line = $communities->tag_line;
        $this->tag_desc = $communities->tag_desc;
        
        /*$this->address = $communities->address;
        $this->phone = $communities->phone;
        $this->qualification = $communities->qualification;*/
        $this->edit_photo = $communities->photo_path;
        

        $this->button_text="Update Community";
    }


    public function update($id)
    {
        $this->validate([
                'name' => 'required||min:6|max:50',
                'email' => 'required|email',
                'address' => 'required',
                'phone' => 'required',
                'position' => 'required',
                'registered' => 'required',
            ]);

        $communities = communities::findOrFail($id);
        $communities->name = $this->name;
        $communities->email = $this->email;
        $communities->address = $this->address;
        $communities->phone = $this->phone;
        $communities->position = $this->position;
        $communities->registered = $this->registered;

        if ($this->photo) {
            $this->validate([
                'photo' => 'required|image|max:3072',
            ]);
            Storage::disk('public')->delete($communities->photo_path);
            $communities->photo_path = $this->storeImage();

        }

        $communities->save();

        $this->name="";
        $this->email="";
        $this->address="";
        $this->phone="";
        $this->qualification="";
        $this->address="";
        $this->photo="";
        $this->edit_photo="";
        $this->registered="";
        $this->position="";

        session()->flash('message', 'Community Updated Successfully.');

        $this->button_text = "Add New Community";

    }

    public function delete($id)
    {
        $communities = communities::find($id);
        Storage::disk('public')->delete($communities->photo_path);
        $communities->delete();
        session()->flash('message', 'Community Deleted Successfully.');
    }


    public function render()
    {
        return view('livewire.admins.communities',[
            'communities' =>communities::latest()->paginate(10),
        ])->layout('admins.layouts.app');
    }
}
