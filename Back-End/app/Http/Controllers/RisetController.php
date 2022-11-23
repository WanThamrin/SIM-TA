<?php

namespace App\Http\Controllers;

use App\Models\Riset;
use Auth;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class RisetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Riset = Riset::where('users_id',auth()->id())->orderBy('time', 'DESC')->get();
        $response =[
            'message' => 'List Riset',
            'data'=> $Riset
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
            'nama_riset'=>['required'],
            'bidang_riset'=>['required'],
            'note'=>['required'],
            'keyword'=>['required']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $Riset = Riset::create($request->all()+[
                'users_id'=>auth()->id(),
            ]);
            $response=[
                'message' => 'Riset telah dibuat',
                'data'=> $Riset
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
        $Riset = Riset::findOrFail($id);
        $response=[
            'message' => 'Daftar Riset',
            'data'=> $Riset
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
        $Riset = Riset::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'nama_riset'=>['required'],
            'bidang_riset'=>['required'],
            'note'=>['required'],
            'keyword'=>['required']

        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $Riset -> update($request->all());
            $response=[
                'message' => 'Riset telah diubah',
                'data'=> $Riset
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
        $Riset = Riset::findOrFail($id);

        try {
            $Riset -> delete();
            $response=[
                'message' => 'Riset telah dihapus',
                'data'=> $Riset
            ];

            return response()->json($response, Response::HTTP_OK);

        } catch (QueryException $e) {
            return response()->json([
                'message' => "Gagal" . $e->errorInfo
            ]);
        }
    }
}
