<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\RequestorUser;


class MultiStepForm extends Component
{

    public $first_name;
    public $last_name;
    public $email;
    public $email_confirmation;
    public $phone_number;
    public $terms;
    public $phone_type;


    public $totalSteps = 5;
    public $currentStep = 1;

    public function mount(){
        $this-> currentStep = 1;
    }

    public function render()
    {
        return view('livewire.multi-step-form');
    }

    public function increaseStep(){
        $this-> resetErrorBag();
        $this-> validateData();
        $this->currentStep++;
        if($this->currentStep > $this-> totalSteps){
            $this->currentStep = $this-> totalSteps;
        }
        
    }
    
    public function decreaseStep(){
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }
    
    public function register(){
        $this-> resetErrorBag();
        $values = array(
            "first_name"=> $this->first_name,
            "last_name"=> $this->last_name,
            "email"=> $this->email,
            "email_confirmation"=> $this->email_confirmation,
            "phone_type"=>$this->phone_type,
            "phone_number"=>$this->phone_number,
        );
        RequestorUser::insert($values);
        $data = ['name'=> $this->first_name. ' ' . $this->last_name, 'email' => $this-> email];
        return redirect()->route('registration-success');
    }

    public function validateData(){
        if($this->currentStep == 3){
            $this-> validate([
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'email' => 'required|email',
                'email_confirmation' => 'required|email|same:email',
                'phone_number' => 'required|string',
            ]);
        }
        elseif($this->currentStep == 2){
            $this -> validate([
                'terms'=>'accepted',
            ]);
        }
    }
}
