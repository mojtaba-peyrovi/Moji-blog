<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\User;
use App\Mail\Welcome;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('register');
    }
    public function store(Request $request)
    {
        $this->validate(request(),['name' => 'required' , 'email' => 'required' , 'password' =>'required']);
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

        auth()->login($user);

        \Mail::to($user)->send(new Welcome($user));

        /* image snding to S3 */
        if($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $fileName = $request['name'] . '-' . $user->id . '.jpg';

            Storage::disk('s3')->put($fileName,File::get($file));
            $url = Storage::url($fileName);
        }


        return redirect()->route('index');
    }
}
