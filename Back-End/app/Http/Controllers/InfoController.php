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
        $Info = Info::orderBy('id', 'ASC')->get();
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
        $file = $request->file('file')->getClientOriginalName();
        $request->file('file')->move(public_path('info'),$file);

        try {
            $Info = Info::create([
                'judul' => $request->judul,
                'keyword' => $request->keyword,
                'note' => $request->note,
                'file' => $file

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
        if (!$Info){
            return $this->errorResponse('Data tidak ditemukan',422);
        }

        $Info->judul = $request->judul;
        $Info->keyword = $request->keyword;
        $Info->note = $request->note;

        // $Info->judul = $request->judul;

        if ($request->file != null && $request->file != 'null') {
            $file = $request->file('file')->getClientOriginalName();
            $request->file('file')->move(public_path('info'),$file);
        $Info->file = $file;

        }
        $Info->save();


            // $Info = Info::create([
            //     'judul' => $request->judul,
            //     'keyword' => $request->keyword,
            //     // 'status' => $request->status,
            //     // 'hari' => $request->hari,
            //     // 'jam' => $request->jam,
            //     'note' => $request->note,
            //     'file' => $file

            // ]);
            $response=[
                'message' => ' Form Info telah dibuat',
                'data'=> $Info
            ];

            // if ($request->file != null && $request->file != 'null') {
            //     $file_ext = $request->file->extension();
            //     $file_name = 'file_' . $Info->users_id . '_' . time() . '.' . $file_ext;
            //     $file = 'storage/documents/' . $Info->users_id . '/' . $file_name;
            //     $request->file('file')->move("storage/documents/$Info->users_id", $file);
            //     $Info->file = $file;
            // }

            return response()->json($response, Response::HTTP_CREATED);
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
