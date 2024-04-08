<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Notifications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function Dashboard()
    {


        return view('dashboard.dashboard');
    }
    public function TrasnsactionsPage()
    {
        return view('dashboard.transactions');
    }
    public function AccountPage()
    {
        return view('dashboard.account');
    }
    public function NotificationPage()

    {
        $user_id = Auth::user()->id;
        $notifications = Notifications::where('user_id', '=', $user_id)->get();
        return view('dashboard.notification', ['notifications' => $notifications]);
    }
    public function ProfilePage()
    {
        return view('dashboard.profile');
    }
    public function AboutPage()
    {
        return view('dashboard.about');
    }
    public function delNotification($id)
    {
        /* return view('dashboard.about'); */
        $notification = Notifications::find($id);
        $notification->delete();
    }
}
