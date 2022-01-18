<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//重要
use Illuminate\Foundation\Auth\User as Authenticatable;
// use App\Models\Status;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;

class StatusesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:140'
        ]);


        Auth::user()->statuses()->create([
            'content' => $request['content']
        ])
        ;

        session()->flash('success', '发布成功！');
        return redirect()->back();
    }
}
