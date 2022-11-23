<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use Auth;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $user = User::where('email',$request->email)->first();
        if (!$user) {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'number' => $request->number,
                'phone' => $request->phone,
                'role' => $request->role,
                'password' => "psswrd"
            ]);
            if ($request->role=="user") {
                $mahasiswa = Mahasiswa::create([
                    'users_id' => $user->id
                ]);
            } else {
                $dosen = Dosen::create([
                    'users_id' => $user->id
                ]);
            }


            return response()->json([
                "token" => $user->createToken("API TOKEN")->plainTextToken
            ], 200);
        } else {
            return response()->json([
                "token" => $user->createToken("API TOKEN")->plainTextToken
            ], 200);
        }

        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function me()
    {
        return response()->json([
            "data" => Auth::user()
        ], 200);
    }

    public function admin(Request $request)
    {

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'number' => '0000',

            'role' => 'admin',
            'password' => $request->password,
        ]);

        return response()->json([
            "token" => $user->createToken("API TOKEN")->plainTextToken
        ], 200);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
