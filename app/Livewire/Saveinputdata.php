<?php

namespace App\Livewire;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\CompanyInfo; // Import model

use Illuminate\Support\Facades\Auth; // To get the authenticated user

class Saveinputdata extends Component
{
    use WithFileUploads;

    public $name;
    public $company_followers;
    public $company_phone;
    public $company_email;
    public $company_headline;
    public $company_short_description;
    public $company_fb_link;
    public $company_insta_link;
    public $company_linkedin_link;
    public $company_long_desc_name;
    public $company_long_desc;
    public $company_requisites_name;
    public $company_requisites_desc;
    public $company_code;
    public $company_address;
    public $company_iv_desc;
    // public $company_photos = [];
    // public $company_main_photo;
    
    
    public function mount() 
    {
        // Check if the authenticated user already created a row in CompanyInfo table
        $companyInfo = CompanyInfo::where('user_id', Auth::id())->first();
        
        // If company info exists, prepopulate all fields
        if ($companyInfo) {
            $this->name = $companyInfo->company_name;
            $this->company_followers = $companyInfo->company_followers;
            $this->company_phone = $companyInfo->company_phone;
            $this->company_email = $companyInfo->company_email;
            $this->company_headline = $companyInfo->company_headline;
            $this->company_short_description = $companyInfo->company_short_description;
            $this->company_fb_link = $companyInfo->company_fb_link;
            $this->company_insta_link = $companyInfo->company_insta_link;
            $this->company_linkedin_link = $companyInfo->company_linkedin_link;
            $this->company_long_desc_name = $companyInfo->company_long_desc_name;
            $this->company_long_desc = $companyInfo->company_long_desc;
            $this->company_requisites_name = $companyInfo->company_requisites_name;
            $this->company_requisites_desc = $companyInfo->company_requisites_desc;
            $this->company_code = $companyInfo->company_code;
            $this->company_address = $companyInfo->company_address;
            $this->company_iv_desc = $companyInfo->company_iv_desc;
        }
    }

    public function save()
    {
        // Validate the input
        $this->validate([
            'name' => 'required|min:3',
            'company_followers' => 'string|nullable',
            'company_phone' => 'string|min:3|max:25|nullable',
            'company_email' => 'email|max:50|nullable',
            'company_headline' => 'max:300|nullable',
            'company_short_description' => 'max:2000|nullable',
            'company_fb_link' => 'max:300|nullable',
            'company_insta_link' => 'max:300|nullable',
            'company_linkedin_link' => 'max:300|nullable',
            'company_long_desc_name' => 'max:50|nullable',
            'company_long_desc' => 'max:5000|nullable',
            'company_requisites_name' => 'max:50|nullable',
            'company_requisites_desc' => 'max:200|nullable',
            'company_code' => 'max:15|nullable',
            'company_address' => 'max:50|nullable',
            'company_iv_desc' => 'max:50|nullable',
            // 'company_photos.*' => 'image|max:2048|nullable',
            // 'company_main_photo' => 'image|max:2048|nullable'
        ]);

        // Check if the authenticated user already created a row in CompanyInfo table
        $companyInfo = CompanyInfo::where('user_id', Auth::id())->first();

        // FOR GALLERY PHOTOS

        // if($this->company_photos){
        //     $uploadedPhotos = [];
        //     foreach ($this->company_photos as $photo) {
        //         $uploadedPhotos[] = $photo->store('company_photos', 'public'); // Store photos in 'public/company_photos' folder
        //     }
        //     $companyInfo->company_photos = $uploadedPhotos; // Save photo paths to the database
        //     $this->company_photos = json_encode($uploadedPhotos);
        // } else {
        //     // Handle the case where the photo is not uploaded
        //     session()->flash('error', 'Error.');
        // }

        // // FOR MAIN PHOTO

        // if ($this->company_main_photo) {
        //     // Store the main photo and get its path
        //     $mainPhotoPath = $this->company_main_photo->store('company_main_photo', 'public'); 
        //     // Save the path to the database
        //     $companyInfo->company_main_photo = $mainPhotoPath; 
        // } else {
        //     // Handle the case where the photo is not uploaded
        //     session()->flash('error', 'Error.');
        // }



            // $this->company_main_photo->store('company_main_photo', 'public'); // Store main photo in 'public/company_main_photo' folder
            // $companyInfo->company_main_photo = $mainPhotoPath; // Save photo path to the database


        // Get ID of entered company name
        $companyUserId = CompanyInfo::where('company_name', $this->name)->value('user_id');

        // Check if company_name exists

        $companyNameExsist = CompanyInfo::where('company_name', $this->name)->first();

        if($companyNameExsist && $companyUserId !== Auth::id()) 
        {   
            session()->flash('error', 'Tokia įmonė/veikla jau egzistuoja. Pasrinkite kita pavadinimą.');
        } 
        else if ($companyInfo)
        {
            // If the user already has a company name, update it
            $companyInfo->update([
                'company_name' => $this->name,
                'company_followers' => $this->company_followers,
                'company_phone' => $this->company_phone,
                'company_email' => $this->company_email,
                'company_headline' => $this->company_headline,
                'company_short_description' => $this->company_short_description,
                'company_fb_link' => $this->company_fb_link,
                'company_insta_link' => $this->company_insta_link,
                'company_linkedin_link' => $this->company_linkedin_link,
                'company_long_desc_name' => $this->company_long_desc_name,
                'company_long_desc' => $this->company_long_desc,
                'company_requisites_name' => $this->company_requisites_name,
                'company_requisites_desc' => $this->company_requisites_desc,
                'company_code' => $this->company_code,
                'company_address' => $this->company_address,
                'company_iv_desc' => $this->company_iv_desc,
                // 'company_photos' => $this->company_photos,
                // 'company_main_photo' => $companyInfo->company_main_photo,
            ]);

            // Flash success message
            session()->flash('message', 'Duomenys atnaujinti sėkmingai!');
        }
        else
        {
            // If no company exists, create a new entry
            CompanyInfo::create([
                'user_id' => Auth::id(),
                'company_name' => $this->name,
                'company_followers' => $this->company_followers,
                'company_phone' => $this->company_phone,
                'company_email' => $this->company_email,
                'company_headline' => $this->company_headline,               
                'company_short_description' => $this->company_short_description,
                'company_fb_link' => $this->company_fb_link,
                'company_insta_link' => $this->company_insta_link,
                'company_linkedin_link' => $this->company_linkedin_link,
                'company_long_desc_name' => $this->company_long_desc_name,
                'company_long_desc' => $this->company_long_desc,
                'company_requisites_name' => $this->company_requisites_name,
                'company_requisites_desc' => $this->company_requisites_desc,
                'company_code' => $this->company_code,
                'company_address' => $this->company_address,
                'company_iv_desc' => $this->company_iv_desc,
                // 'company_photos' => $this->company_photos,
                // 'company_main_photo' => $mainPhotoPath,
            ]);

            // Flash success message
            session()->flash('message', 'Jūsų svetainė jau veikia!');
        }

        // Reset the form field after submission
        // $this->reset('name');

        // Flash message
        // session()->flash('message', 'Company name saved successfully!');
    }

    public function render()
    {
        return view('livewire.saveinputdata');
    }
}
