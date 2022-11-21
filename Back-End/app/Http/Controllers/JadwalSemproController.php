<?php

namespace App\Http\Controllers;

use App\Models\JadwalSempro;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class JadwalSemproController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $JadwalSempro = JadwalSempro::join('users','jadwal_sempros.users_id','users.id')->where('users_id',auth()->id())->get();
        $response =[
            'message' => 'List Jadwal Sempro',
            'data'=> $JadwalSempro
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
        $validator = Validator::make($request->all(), [
            // 'nama_mhs'=>['required'],
            // 'nim'=>['required'],
            // 'niph'=>['required'],
            'hari'=>['required'],
            'jam_mulai'=>['required'],
            'jam_akhir'=>['required'],
            'dospeng1'=>['required'],
            'dospeng2'=>['required'],
            'type'=>['required'],
            'ruangan'=>['required']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $JadwalSempro = JadwalSempro::create($request->all()+['users_id'=>auth()->id()]);
            $response=[
                'message' => 'Jadwal Sempro telah dibuat',
                'data'=> $JadwalSempro
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
        $JadwalSempro = $JadwalSempro::findOrFail($id);
        $response=[
            'message' => 'Daftar Jadwal Sempro',
            'data'=> $JadwalSempro
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
        $JadwalSempro = JadwalSempro::findOrFail($id);

        $validator = Validator::make($request->all(), [
            // 'nama_mhs'=>['required'],
            // 'nim'=>['required'],
            // 'niph'=>['required'],
            'hari'=>['required'],
            'jam_mulai'=>['required'],
            'jam_akhir'=>['required'],
            'dospeng1'=>['required'],
            'dospeng2'=>['required'],
            'type'=>['required'],
            'ruangan'=>['required']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $JadwalSempro -> update($request->all());
            $response=[
                'message' => 'List Jadwal Sempro telah diubah',
                'data'=> $JadwalSempro
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
        $JadwalSempro = JadwalSempro::findOrFail($id);

        try {
            $JadwalSempro -> delete();
            $response=[
                'message' => 'Jadwal Sempro telah dihapus',
                'data'=> $JadwalSempro
            ];

            return response()->json($response, Response::HTTP_OK);

        } catch (QueryException $e) {
            return response()->json([
                'message' => "Gagal" . $e->errorInfo
            ]);
        }
    }
}
