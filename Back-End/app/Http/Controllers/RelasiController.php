<?php

namespace App\Http\Controllers;

use App\Models\Relasi;
use App\Models\RegisTA;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class RelasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Relasi = Relasi::orderBy('time', 'DESC')->get();
        $response =[
            'message' => 'List Relasi',
            'data'=> $Relasi
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
            'nim'=>['required'],
            'niph'=>['required'],
            'posisi'=>['required']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $Relasi = Relasi::create($request->all());
            $response=[
                'message' => 'Data Relasi telah dibuat',
                'data'=> $Relasi
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
        $data['dospem1'] = RegisTA::join('users','users.id','regis_t_a_s.users_id')
        ->select(['regis_t_a_s.*','users.name','users.number','users.email'])
        ->where('dospem1',$id)->get();

        $data['dospem2'] = RegisTA::join('users','users.id','regis_t_a_s.users_id')
        ->select(['regis_t_a_s.*','users.name','users.number','users.email'])
        ->where('dospem2',$id)->get();

        $data['dospeng1'] = RegisTA::join('users','users.id','regis_t_a_s.users_id')
        ->select(['regis_t_a_s.*','users.name','users.number','users.email'])
        ->where('dospeng1',$id)->get();

        $data['dospeng2'] = RegisTA::join('users','users.id','regis_t_a_s.users_id')
        ->select(['regis_t_a_s.*','users.name','users.number','users.email'])
        ->where('dospeng2',$id)->get();

        $response=[
            'message' => 'Daftar Relasi',
            'data'=> $data
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
        $Relasi = Relasi::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'nim'=>['required'],
            'niph'=>['required'],
            'posisi'=>['required']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $Relasi -> update($request->all());
            $response=[
                'message' => 'Data Relasi telah diubah',
                'data'=> $Relasi
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
    public function destroy($id, Request $request)
    {
        $Relasi = RegisTA::findOrFail($id);
        $Type = $request->type;
        $Relasi->update([
            $Type=>null,
        ]);
        if ($Type=='dospem1') {
            $Relasi->update([
                'status1'=>0,
            ]);
        }
        if ($Type=='dospem2') {
            $Relasi->update([
                'status2'=>0,
            ]);
        }
// dd($Relasi);
        return $request->all();
    }
}
