<?php

namespace App\Livewire\Frontend\Components;

use Livewire\Attributes\On;
use Livewire\Component;
use Mary\Traits\Toast;

class NotificationMessageToast extends Component
{
    use Toast;

    public function mount():void
    {
        if (session()->has('error'))
        {
            $this->error('Error!',session()->get('error'));
        }

        if (session()->has('success'))
        {
            $this->error(config('settings.site_name'),session()->get('error'));
        }
    }

    public function render()
    {
        return view('livewire.frontend.components.notification-message-toast');
    }

    #[On('SetMessage')]
    public function displayToastMessage($type = "error",$message = ""):void
    {
        if($type == "success"){
            $this->success(config('settings.site_name'),$message);
        }
        elseif($type == "info"){
            $this->info(config('settings.site_name'),$message);
        }
        else{
            $this->error(config('settings.site_name'),$message);
        }
    }
}
