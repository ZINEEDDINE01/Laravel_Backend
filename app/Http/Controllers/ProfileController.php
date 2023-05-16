<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Mail\profileMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProfileController extends Controller
{
    public  function index()
    {
        return view('profile');
    }
    
}