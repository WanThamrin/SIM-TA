<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Dokumen = Dokumen::orderBy('time', 'DESC')->get();
        $response =[
            'message' => 'List Dokumen',
            'data'=> $Dokumen
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
            $Dokumen = Dokumen::create($request->all());
            $response=[
                'message' => 'Dokumen telah dibuat',
                'data'=> $Dokumen
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
        $Dokumen = Dokumen::findOrFail($id);
        $response=[
            'message' => 'Daftar Dokumen',
            'data'=> $Dokumen
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
        $Dokumen = Dokumen::findOrFail($id);

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
            $Dokumen -> update($request->all());
            $response=[
                'message' => 'Dokumen telah diubah',
                'data'=> $Dokumen
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
        $Dokumen = Dokumen::findOrFail($id);

        try {
            $Dokumen -> delete();
            $response=[
                'message' => 'Dokumen telah dihapus',
                'data'=> $Dokumen
            ];

            return response()->json($response, Response::HTTP_OK);

        } catch (QueryException $e) {
            return response()->json([
                'message' => "Gagal" . $e->errorInfo
            ]);
        }
    }
}
