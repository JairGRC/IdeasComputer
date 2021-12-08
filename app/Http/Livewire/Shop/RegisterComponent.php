<?php

namespace App\Http\Livewire\Shop;

use App\Mail\ShopActivated;
use App\Mail\ShopActivationRequest;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class RegisterComponent extends Component
{
    public $name,$description;
    public function render()
    {
        return view('livewire.shop.register-component')->extends('layouts.app')
        ->section('content');
    }

    public function RegisterShop(){
        $this->validate([
            'name'=>'required'
        ]);
        $shop=auth()->user()->shop()->create([
            'name'=>$this->name,
            'description'=>$this->description,
        ]);
        $admin=User::whereHas('role',function($q){
            $q->where('name','admin');
        })->get();


        Mail::to($admin)->send(new ShopActivationRequest($shop));
        // cambiar rrol

        //enviar mensaje
        return redirect()->route('shop.index');
    }
}
