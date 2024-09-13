<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;
        if ($role == '1') {
            return view('backend.master');
        } else {
            return view('dashboard');
        }
    }
    public function product()
    {
        return view('product.product');
    }
    public function home()
    {
        return view('home.home');
    }
    public function pricing()
    {
        return view('pricing.pricing');
    }
    public function update_profile()
    {
        return view('update.profile');
    }
    public function communication()
    {
        return view('update.communication');
    }
    public function important()
    {
        return view('update.important');
    }
    public function trade_alert()
    {
        return view('update.trade-alert');
    }
    public function support_center()
    {
        return view('update.support-center');
    }
    public function sent_mail()
    {
        return view('update.sent-mail');
    }
    public function buy_offer()
    {
        return view('update.buy-offer');
    }
    public function brochure()
    {
        return view('update.brochure');
    }
    public function certificate()
    {
        return view('update.certificate');
    }
    public function video()
    {
        return view('update.video');
    }
    public function alert()
    {
        return view('update.alert');
    }
    public function setting()
    {
        return view('update.setting');
    }
}
