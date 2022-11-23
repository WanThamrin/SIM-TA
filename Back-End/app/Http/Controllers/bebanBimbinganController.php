<?php

namespace App\Http\Controllers;

use App\Models\BebanBimbingan;
use Auth;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class bebanBimbinganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Bimbingan = BebanBimbingan::where('users_id',auth()->id())->orderBy('time', 'DESC')->get();
        $response =[
            'message' => 'List Beban Bimbingan',
            'data'=> $Bimbingan
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
            'mata_kuliah'=>['required'],
            'catatan'=>['required']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $Bimbingan = BebanBimbingan::create($request->all()+[
                'users_id'=>auth()->id(),
            ]);

            $response=[
                'message' => 'Beban Bimbingan telah dibuat',
                'data'=> $Bimbingan
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
        $Bimbingan = BebanBimbingan::findOrFail($id);
        $response=[
            'message' => 'Daftar Beban Bimbingan',
            'data'=> $Bimbingan
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
        $Bimbingan = BebanBimbingan::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'mata_kuliah'=>['required'],
            'catatan'=>['required']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $Bimbingan -> update($request->all());
            $response=[
                'message' => 'Beban Bimbingan telah diubah',
                'data'=> $Bimbingan
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
        $Bimbingan = BebanBimbingan::findOrFail($id);

        try {
            $Bimbingan -> delete();
            $response=[
                'message' => 'Beban Bimbingan telah dihapus',
                'data'=> $Bimbingan
            ];

            return response()->json($response, Response::HTTP_OK);

        } catch (QueryException $e) {
            return response()->json([
                'message' => "Gagal" . $e->errorInfo
            ]);
        }
    }
}
