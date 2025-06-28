<?php

namespace App\Livewire\Frontend\Components;

use App\Models\Subscriber;
use Livewire\Component;
use Mary\Traits\Toast;

class SubscribeForm extends Component
{
    use Toast;

    public $email = "";

    protected $rules = [
        'email'=>'required|email|max:255'
    ];

    public function render()
    {
        return view('livewire.frontend.components.subscribe-form');
    }

    public function subscribe():void
    {
        $this->validate($this->rules);

        $check = Subscriber::where('email',$this->email)->count();

        if ($check)
        {
            $this->info(config('settings.site_name'),'Your email already subscribed');
        }
        else
        {
            Subscriber::create([
                'email'=>$this->email,
                'is_subscribed'=>1,
            ]);
            $this->success(config('settings.site_name'),'Subscribed Successfully');
        }
    }
}
