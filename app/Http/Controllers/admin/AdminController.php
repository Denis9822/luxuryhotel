<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Keyword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function admin_admin()
    {
        $users = User::orderBy('id','desc')->get();
        return view('admin.admin.index',compact('users'));
    }
    public function admin_add(Request $rq)
    {
        if ($rq->post())
        {

            $key = new User();
            $key->email = $rq->email;
            $key->name = "admin";
            $key->password = bcrypt($rq->pass);

            $key->save();
            return redirect()->back()->with(['edit'=>'Данные добавленны']);
        }

        return view('admin.admin.add');
    }
    public function admin_edit(Request $rq,$id)
    {
        $key = User::findOrFail($id);
        if ($rq->post())
        {
            $key->email = $rq->email;
            if($rq->pass)
            {
                $key->password = bcrypt($rq->pass);
            }
            $key->save();

            return redirect()->back()->with(['edit'=>'Данные измененны']);
        }
        return view('admin.admin.edit',compact('key'));
    }

    public function admin_remove(Request $rq,$id)
    {
        $key = User::findOrFail($id);
        $key->delete();
        return redirect()->route('orders');
    }

    public function adminexit()
    {
        auth()->logout();
        return redirect()->route('main.index');
    }

}
