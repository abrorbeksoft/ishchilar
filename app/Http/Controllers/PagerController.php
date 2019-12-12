<?php

namespace App\Http\Controllers;

use App\Bolim;
use App\User;
use Illuminate\Http\Request;

class PagerController extends Controller
{
    public function index()
    {
        $data = Bolim::all();

        return view('welcome', compact('data'));
    }

    public function xodimlar($id)
    {

        if ($id >= 1 && $id <= 12) {
            $data = Bolim::find($id);
            $xodimData = $data->xodimlar;
            return view('xodim', compact('xodimData'));

        }
    }

}
