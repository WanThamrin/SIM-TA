<?php

namespace App\Http\Controllers;

use App\Models\Doc_Sempro;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class DocSemproController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $DocSempro = Doc_Sempro::orderBy('time', 'DESC')->get();
        $response =[
            'message' => 'List DocSempro',
            'data'=> $DocSempro
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
        // $validator = Validator::make($request->all(), [
        //     'judul'=>['required'],
        //     'keyword'=>['required'],
        //     'file'=>['required'],
        //     'status'=>['required'],
        //     'hari'=>['required'],
        //     'jam'=>['required'],
        // ]);

        // if ($validator->fails()) {
        //     return response()->json($validator->errors(),
        //     Response::HTTP_UNPROCESSABLE_ENTITY);
        // }

        // try {
        //     $DocSempro = Doc_Sempro::create($request->all());
        //     $response=[
        //         'message' => 'DocSempro telah dibuat',
        //         'data'=> $DocSempro
        //     ];

        //     return response()->json($response, Response::HTTP_CREATED);

        $file = $request->file('file')->getClientOriginalName();
        $request->file('file')->move('public/Doc',$file);


         // dd($request->all()) ;
     try {
         $DocSempro = Doc_Sempro::create([
             'judul' => $request->judul,
             'keyword' => $request->keyword,
            //  'status' => $request->status,
             // 'hari' => $request->hari,
             // 'jam' => $request->jam,
             'file' => $file

         ]);
         $response=[
             'message' => ' Form DocSempro telah dibuat',
             'data'=> $DocSempro
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
        $DocSempro = Doc_Sempro::findOrFail($id);
        $response=[
            'message' => 'Daftar DocSempro',
            'data'=> $DocSempro
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
        $DocSempro = Doc_Sempro::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'judul'=>['required'],
            'keyword'=>['required'],
            'file'=>['required'],
            // 'status'=>['required'],
            // 'hari'=>['required'],
            // 'jam'=>['required'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $DocSempro -> update($request->all());
            $response=[
                'message' => 'DocSempro telah diubah',
                'data'=> $DocSempro
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
        $DocSempro = Doc_Sempro::findOrFail($id);

        try {
            $DocSempro -> delete();
            $response=[
                'message' => 'DocSempro telah dihapus',
                'data'=> $DocSempro
            ];

            return response()->json($response, Response::HTTP_OK);

        } catch (QueryException $e) {
            return response()->json([
                'message' => "Gagal" . $e->errorInfo
            ]);
        }
    }
}
