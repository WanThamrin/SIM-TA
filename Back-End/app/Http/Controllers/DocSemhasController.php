<?php

namespace App\Http\Controllers;

use App\Models\Doc_Semhas;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class DocSemhasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $DocSemhas = Doc_Semhas::orderBy('time', 'DESC')->get();
        $response =[
            'message' => 'List DocSemhas',
            'data'=> $DocSemhas
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
            $DocSemhas = Doc_Semhas::create($request->all());
            $response=[
                'message' => 'DocSemhas telah dibuat',
                'data'=> $DocSemhas
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
        $DocSemhas = Doc_Semhas::findOrFail($id);
        $response=[
            'message' => 'Daftar DocSemhas',
            'data'=> $DocSemhas
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
        $DocSemhas = Doc_Semhas::findOrFail($id);

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
            $DocSemhas -> update($request->all());
            $response=[
                'message' => 'DocSemhas telah diubah',
                'data'=> $DocSemhas
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
        $DocSemhas = Doc_Semhas::findOrFail($id);

        try {
            $DocSemhas -> delete();
            $response=[
                'message' => 'DocSemhas telah dihapus',
                'data'=> $DocSemhas
            ];

            return response()->json($response, Response::HTTP_OK);

        } catch (QueryException $e) {
            return response()->json([
                'message' => "Gagal" . $e->errorInfo
            ]);
        }
    }
}