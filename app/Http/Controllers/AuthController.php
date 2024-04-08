<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signUp()
    {
        return view('Auth.signup');
    }
    public function signIn()
    {
        return view('Auth.signin');
    }

    public function storeUsers(Request $request)
    {
        $account_no = rand(1000000000, 9999999999);;

        $validatedData = $request->validate([
            "fname" => "required|string",
            "email" => "required|string|unique:users,email",
            "password" => "required|string",
            "dob" => "required|string",
            "fone" => "required|regex:/^([0-9\s\-\+\(\)]*)$/",
            "home_addr" => "required|string",
            "office_addr" => "required|string",
            "country" => "required|string",
            "state" => "required|string",
            "postal_code" => "required|string",
            "occupation" => "required|string",
            "gender" => "required|string",
            "acct_type" => "required|string",
            "area_code" => "required|string",
            "sos" => "required|string",
            "myInput" => "required|image|mimes:png,jpg|max:2048",
            "doc" => "required|image|mimes:png,jpg|max:2048",
        ]);


        if ($request->hasFile('myInput') && $request->hasFile('doc')) {
            $imgName = time() . '-' . $request->file('myInput')->getClientOriginalName();
            $request->file('myInput')->store('uploads');

            $imgName2 = time() . '-' . $request->file('doc')->getClientOriginalName();
            $request->file('doc')->store('uploads');
            User::create([
                'name' => $validatedData['fname'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
                'fone' => $validatedData['fone'],
                'home_addr' => $validatedData['home_addr'],
                'office_addr' => $validatedData['office_addr'],
                'dob' => $validatedData['dob'],
                'country' => $validatedData['country'],
                'state' => $validatedData['state'],
                'area_code' => $validatedData['area_code'],
                'postal_code' => $validatedData['postal_code'],
                'occupation' => $validatedData['occupation'],
                'sos' => $validatedData['sos'],
                'gender' => $validatedData['gender'],
                'acct_type' => $validatedData['acct_type'],
                'img' => $imgName,
                'doc' => $imgName2,
                'acct_num' => $account_no,
            ]);
            return redirect('/sign-in');
        }


        return back()->withErrors(['msg' => 'File upload failed']);
    }

    public function loginUsers(Request $request)
    {
        $validatedData = $request->validate([
            "acct_num" => "required|string",
            "password" => "required|string",

        ]);

        $user = User::where('acct_num', "=", $validatedData['acct_num'])->first();
        if (!$user) {
            return back()->withErrors(['err' => 'Invalid Credentials']);
        }
        if (Hash::check($validatedData['password'], $user->password)) {
            Auth::login($user);
            return redirect('/');
        }

        return back()->withErrors(['err' => 'Invalid Credentials']);
    }
    public function logoutUsers(Request $request)
    {
        Auth::logout();

        return redirect('/sign-in');
    }
}
