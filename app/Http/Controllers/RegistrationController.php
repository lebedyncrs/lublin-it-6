<?php

namespace App\Http\Controllers;

use App\Jobs\CreateAsanaTasks;
use App\Jobs\SendConfirmationEmail;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function register(Request $request)
    {
        $this->dispatch(new CreateAsanaTasks($request->input('company_name')));
        $this->dispatch(new SendConfirmationEmail($request->input('company_email')));

        return view('welcome', ['success' => true]);
    }
}
