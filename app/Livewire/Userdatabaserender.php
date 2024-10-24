<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CompanyInfo;

class Userdatabaserender extends Component
{   
    public $companyname; // This will hold the company name from the URL

    // Mount function runs when the component is initialized
    public function mount($cname)
    {
        $this->companyname = $cname; // Store the company name from the URL
    }

    public function render()
    {
        // Fetch the company information directly within the render method
        $companyInfo = CompanyInfo::where('company_name', $this->companyname)->first();

        return view('livewire.userdatabaserender', [
            'companyInfo' => $companyInfo, // Pass the fetched company info to the view
        ]);
    }
}
