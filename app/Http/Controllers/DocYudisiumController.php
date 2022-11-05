<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class DocYudisiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dokumens = Dokumen::orderBy('time', 'DESC')->get();
        $response =[
            'message' => 'List Dokumen',
            'data'=> $dokumens
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
            'judul'=>['required'],
            'keyword'=>['required'],
            'file'=>['required'],
            'status'=>['required'],
            'hari'=>['required'],
            'jam'=>['required'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $dokumens = Dokumen::create($request->all());
            $response=[
                'message' => ' Form Dokumen telah dibuat',
                'data'=> $dokumens
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
        $dokumens = Dokumen::findOrFail($id);
        $response=[
            'message' => 'Daftar Dokumen',
            'data'=> $dokumens
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
        $dokumens = Dokumen::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'judul'=>['required'],
            'keyword'=>['required'],
            'file'=>['required'],
            'status'=>['required'],
            'hari'=>['required'],
            'jam'=>['required'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $dokumens -> update($request->all());
            $response=[
                'message' => 'List Dokumen telah diubah',
                'data'=> $dokumens
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
        $dokumens = Dokumen::findOrFail($id);

        try {
            $dokumens -> delete();
            $response=[
                'message' => 'Dokumen telah dihapus',
                'data'=> $dokumens
            ];

            return response()->json($response, Response::HTTP_OK);

        } catch (QueryException $e) {
            return response()->json([
                'message' => "Gagal" . $e->errorInfo
            ]);
        }
    }
}
