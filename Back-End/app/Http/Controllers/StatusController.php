<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\StatusPendaftaran;


class StatusController extends Controller
{
    public function index()
    {
        return response()->json(['data'=>StatusPendaftaran::all()], 200);
    }

    public function update(Request $request )
    {
        return response()->json(['data'=>StatusPendaftaran::where('type',$request->type)
        ->update(['status'=>$request->status])], 200);
    }


}
