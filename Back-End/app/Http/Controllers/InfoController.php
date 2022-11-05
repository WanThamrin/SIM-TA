<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Info = Info::orderBy('time', 'DESC')->get();
        $response =[
            'message' => 'List Info',
            'data'=> $Info
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
        //     'note'=>['required'],
        //     'status'=>['required'],
        //     'hari'=>['required'],
        //     'jam'=>['required'],
        // ]);

        // if ($validator->fails()) {
        //     return response()->json($validator->errors(), 
        //     Response::HTTP_UNPROCESSABLE_ENTITY);
        // }
        // return $request->all();

        // $validatedData = $request->validate([
        //     'file' => 'required|csv,txt,xlx,xls,pdf|max:2048',
    
        //    ]);
        // return  $request->all();
    
           $name = $request->file('file')->getClientOriginalName();
    
           $path = $request->file('file')->store('public/Info');

            // dd($request->all()) ;
        try {
            $Info = Info::create([
                'judul' => $request->judul,
                'keyword' => $request->keyword,
                'status' => $request->status,
                // 'hari' => $request->hari,
                // 'jam' => $request->jam,
                'note' => $request->note,
                'file' => $path

            ]);
            $response=[
                'message' => ' Form Info telah dibuat',
                'data'=> $Info
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
        $Info = Info::findOrFail($id);
        $response=[
            'message' => 'Daftar Info',
            'data'=> $Info
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
        $Info = Info::findOrFail($id);

        // $validator = Validator::make($request->all(), [
        //     'judul'=>['required'],
        //     'keyword'=>['required'],
        //     'file'=>['required'],
        //     'note'=>['required'],
        //     'status'=>['required'],
        //     'hari'=>['required'],
        //     'jam'=>['required'],
        // ]);

        // if ($validator->fails()) {
        //     return response()->json($validator->errors(), 
        //     Response::HTTP_UNPROCESSABLE_ENTITY);
        // }

        // try {
        //     $Info -> update($request->all());
        //     $response=[
        //         'message' => 'List Info telah diubah',
        //         'data'=> $Info
        //     ];

        //     return response()->json($response, Response::HTTP_OK);
            $name = $request->file('file')->getClientOriginalName();
    
           $path = $request->file('file')->store('public/Info');

            // dd($request->all()) ;
        try {
            $Info = Info::create([
                'judul' => $request->judul,
                'keyword' => $request->keyword,
                'status' => $request->status,
                // 'hari' => $request->hari,
                // 'jam' => $request->jam,
                'note' => $request->note,
                'file' => $path

            ]);
            $response=[
                'message' => ' Form Info telah dibuat',
                'data'=> $Info
            ];

            return response()->json($response, Response::HTTP_CREATED);

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
        $Info = Info::findOrFail($id);

        try {
            $Info -> delete();
            $response=[
                'message' => 'Info telah dihapus',
                'data'=> $Info
            ];

            return response()->json($response, Response::HTTP_OK);

        } catch (QueryException $e) {
            return response()->json([
                'message' => "Gagal" . $e->errorInfo
            ]);
        }
    }
}