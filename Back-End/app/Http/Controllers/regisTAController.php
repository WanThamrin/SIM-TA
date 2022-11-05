<?php

namespace App\Http\Controllers;

use App\Models\RegisTA;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;


class regisTAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $RegisTA = RegisTA::orderBy('time', 'DESC')->get();
        $response =[
            'message' => 'List Form TA',
            'data'=> $RegisTA
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
            'nama_mhs'=>['required'],
            'nim'=>['required'],
            'niph'=>['required'],
            'judul'=>['required'],
            'abstrak'=>['required'],
            'keyword'=>['required'],
            // 'dospem1'=>['required'],
            // 'dospem2'=>['required']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $RegisTA = RegisTA::create($request->all());
            $response=[
                'message' => 'Form telah dibuat',
                'data'=> $RegisTA
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
        $RegisTA = RegisTA::findOrFail($id);
        $response=[
            'message' => 'Daftar RegisTA',
            'data'=> $RegisTA
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
        $RegisTA = RegisTA::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'nama_mhs'=>['required'],
            'nim'=>['required'],
            'niph'=>['required'],
            'judul'=>['required'],
            'abstrak'=>['required'],
            'keyword'=>['required'],
            // 'dospem1'=>['required'],
            // 'dospem2'=>['required']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $RegisTA -> update($request->all());
            $response=[
                'message' => 'RegisTA telah diubah',
                'data'=> $RegisTA
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
        $RegisTA = RegisTA::findOrFail($id);

        try {
            $RegisTA -> delete();
            $response=[
                'message' => 'Form TA telah dihapus',
                'data'=> $RegisTA
            ];

            return response()->json($response, Response::HTTP_OK);

        } catch (QueryException $e) {
            return response()->json([
                'message' => "Gagal" . $e->errorInfo
            ]);
        }
    }
}
