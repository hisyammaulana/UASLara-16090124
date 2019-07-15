<?php

namespace App\Http\Controllers\UserController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Aduan;
use App\User;
use App\Tanggapan;


class HomeController extends Controller
{
    public function index()
    {
        $data = DB::table('users')
        ->join('aduans', 'users.id', '=', 'aduans.user_id')
        ->select('aduans.*', 'users.name', 'users.image as foto')->where('aduans.deleted', 0)
        ->get();

        return view('pageUser.pages.home', compact('data'));
    }

    public function web()
    {
        $data = DB::table('users')
        ->join('aduans', 'users.id', '=', 'aduans.user_id')
        ->select('aduans.*', 'users.name', 'users.image as foto')->where('aduans.deleted', 0)
        ->get();

        return view('welcome', compact('data'));
    }
}
