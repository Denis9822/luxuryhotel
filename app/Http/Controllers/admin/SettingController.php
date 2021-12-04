<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    public function setting(Request $rq)
    {
        $settings = Setting::get();
        if ($rq->post())
        {

            \App\Helpers\Setting::setSettingByName('order',$rq->order);
            \App\Helpers\Setting::setSettingByName('referral',$rq->referral);

            if($rq->hasFile('logo')) {
                $file = $rq->file('logo');
                $name = $file->getClientOriginalName();
                \App\Helpers\Setting::setSettingByName('logo',$name);
                $file->move(public_path() . '/images/other/',$name);
            }

            return redirect()->refresh();
        }
        return view('admin.setting.edit',compact('settings'));
    }



}
