<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\User;
use Auth;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Mahasiswa = Mahasiswa::join('users','mahasiswas.users_id','users.id')->where('users_id',auth()->id())->get();
        $response =[
            'message' => 'List Mahasiswa',
            'data'=> $Mahasiswa
        ];

        return response()->json($response, Response::HTTP_OK);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function getMahasiswa()
    {
        $Mahasiswa = User::with('mahasiswa','TA')->where('role','user')->get();
        $response =[
            'message' => 'List Mahasiswa',
            'data'=> $Mahasiswa
        ];

        return response()->json($response, Response::HTTP_OK);
    }

    public function detailMahasiswa($id)
    {
        $Mahasiswa = Mahasiswa::with('mahasiswa')->where('ta_id',$id)->first();
        $response =[
            'message' => 'List Mahasiswa',
            'data'=> $Mahasiswa
        ];

        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $number=Auth::user()->number;
        $validator = Validator::make($request->all(), [
            // 'nim'=>['required'],
            'foto'=>['required'],
            'status'=>['required'],
            // 'waktu'=>['required'],
            // 'judul'=>['required'],
            // 'abstrak'=>['required'],
            // 'keyword'=>['required'],

        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $Mahasiswa = Mahasiswa::create($request->all()+[
                'users_id'=>auth()->id()
            ]);
            $response=[
                'message' => 'Data Mahasiswa telah dibuat',
                'data'=> $Mahasiswa
            ];

            return response()->json($response, Response::HTTP_CREATED);

        } catch (QueryException $e) {
            return response()->json([
                'message' => "Gagal" . $e->errorInfo
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Mahasiswa = Mahasiswa::findOrFail($id);
        $response=[
            'message' => 'Daftar Mahasiswa',
            'data'=> $Mahasiswa
        ];

        return response()->json($response, Response::HTTP_OK);
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
        $Mahasiswa = Mahasiswa::findOrFail($id);

        $validator = Validator::make($request->all(), [
            // 'nim'=>['required'],
            'status'=>['required'],
            'waktu'=>['required'],
            // 'judul'=>['required'],
            // 'abstrak'=>['required'],
            // 'keyword'=>['required'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $Mahasiswa -> update($request->all());
            $response=[
                'message' => 'Data Mahasiswa telah diubah',
                'data'=> $Mahasiswa
            ];

            return response()->json($response, Response::HTTP_OK);

        } catch (QueryException $e) {
            return response()->json([
                'message' => "Gagal" . $e->errorInfo
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Mahasiswa = Mahasiswa::findOrFail($id);

        try {
            $Mahasiswa -> delete();
            $response=[
                'message' => 'Data Mahasiswa telah dihapus',
                'data'=> $Mahasiswa
            ];

            return response()->json($response, Response::HTTP_OK);

        } catch (QueryException $e) {
            return response()->json([
                'message' => "Gagal" . $e->errorInfo
            ]);
        }
    }
}
