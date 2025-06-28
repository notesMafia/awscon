<?php

namespace App\Livewire\Frontend\Pages;

use App\Helpers\Traits\ToastNotification;
use App\Models\ContactMail;
use Livewire\Component;

class ContactUsPage extends Component
{
    use ToastNotification;

    public $request = [];

    protected $validationAttributes = [
        'request.first_name'=>'first name',
        'request.last_name'=>'last name',
        'request.email'=>'email',
        'request.phone'=>'phone',
        'request.subject'=>'subject',
        'request.message'=>'message',
    ];

    protected $rules = [
        'request.first_name'=>'required|max:255',
        'request.last_name'=>'max:255',
        'request.email'=>'required|email|max:255',
        'request.phone'=>'required',
        'request.subject'=>'max:500',
        'request.message'=>'required|max:5000',
    ];

    public function mount(): void
    {
        $this->NewRequest();
    }

    public function render()
    {
        return view('livewire.frontend.pages.contact-us-page');
    }

    public function contactSubmit(): void
    {
        $this->validate($this->rules);

        ContactMail::create($this->request);

        $this->NewRequest();

        $this->successToast(
            message:'Your message send successfully'
        );
    }

    public function NewRequest(): void
    {
        $this->request = [
            'first_name'=>null,
            'last_name'=>null,
            'email'=>null,
            'phone'=>null,
            'image'=>null,
            'subject'=>null,
            'message'=>null,
        ];
    }

}
