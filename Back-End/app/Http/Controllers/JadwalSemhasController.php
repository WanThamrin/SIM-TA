<?php

namespace App\Http\Controllers;

use App\Models\JadwalSemhas;
use App\Models\semhas;
use App\Models\RegisTA;


use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class JadwalSemhasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $JadwalSemhas = JadwalSemhas::join('users','jadwal_semhas.users_id','users.id')->where('users_id',auth()->id())->get();;
        $response =[
            'message' => 'List Jadwal Semhas',
            'data'=> $JadwalSemhas
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $semhas = semhas::find($request->sidangId);
        $ta = RegisTA::where('users_id',$semhas->users_id);
        $validator = Validator::make($request->all(), [
            // 'nama_mhs'=>['required'],
            // 'nim'=>['required'],
            // 'niph'=>['required'],
            'hari'=>['required'],
            'jam_mulai'=>['required'],
            'jam_akhir'=>['required'],
            // 'dospeng1'=>['required'],
            // 'dospeng2'=>['required'],
            'type'=>['required'],
            'ruangan'=>['required']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $JadwalSemhas = JadwalSemhas::create($request->all()+['users_id'=>$semhas->users_id]);
            $response=[
                'message' => 'Jadwal Semhas telah dibuat',
                'data'=> $JadwalSemhas
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
        $JadwalSemhas = $JadwalSemhas::findOrFail($id);
        $response=[
            'message' => 'Daftar Jadwal Semhas',
            'data'=> $JadwalSemhas
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
        $JadwalSemhas = JadwalSemhas::findOrFail($id);

        $validator = Validator::make($request->all(), [
            // 'nama_mhs'=>['required'],
            // 'nim'=>['required'],
            // 'niph'=>['required'],
            'hari'=>['required'],
            'jam_mulai'=>['required'],
            'jam_akhir'=>['required'],
            // 'dospeng1'=>['required'],
            // 'dospeng2'=>['required'],
            'type'=>['required'],
            'ruangan'=>['required']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $JadwalSemhas -> update($request->all());
            $response=[
                'message' => 'List Jadwal Semhas telah diubah',
                'data'=> $JadwalSemhas
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
        $JadwalSemhas = JadwalSemhas::findOrFail($id);

        try {
            $JadwalSemhas -> delete();
            $response=[
                'message' => 'Jadwal Semhas telah dihapus',
                'data'=> $JadwalSemhas
            ];

            return response()->json($response, Response::HTTP_OK);

        } catch (QueryException $e) {
            return response()->json([
                'message' => "Gagal" . $e->errorInfo
            ]);
        }
    }
}
