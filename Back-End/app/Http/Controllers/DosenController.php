<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\User;
use Auth;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Dosen = Dosen::join('users','dosens.users_id','users.id')->where('users_id',auth()->id())->get();
        $response =[
            'message' => 'List Dosen',
            'data'=> $Dosen
        ];

        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getDosen()
    {
        $Dosen = User::where('role','dosen')->get();
        $response =[
            'message' => 'List Dosen',
            'data'=> $Dosen
        ];

        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $number=Auth::user()->number;
        $validator = Validator::make($request->all(), [
            // 'niph'=>['required'],
            'note'=>['required'],
            'sertif'=>['required']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $Dosen = Dosen::create($request->all()+[
                'users_id'=>auth()->id()]);
            $response=[
                'message' => 'Data Dosen telah dibuat',
                'data'=> $Dosen
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
        $Dosen = User::where('role','dosen')->get();
        $Dosen = Dosen::findOrFail($id);
        $response=[
            'message' => 'Daftar Dosen',
            'data'=> $Dosen
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
        $Dosen = Dosen::findOrFail($id);

        $validator = Validator::make($request->all(), [
            // 'niph'=>['required'],
            'note'=>['required'],
            'sertif'=>['required']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $Dosen -> update($request->all());
            $response=[
                'message' => 'Data Dosen telah diubah',
                'data'=> $Dosen
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
        $Dosen = Dosen::findOrFail($id);

        try {
            $Dosen -> delete();
            $response=[
                'message' => 'Data Dosen telah dihapus',
                'data'=> $Dosen
            ];

            return response()->json($response, Response::HTTP_OK);

        } catch (QueryException $e) {
            return response()->json([
                'message' => "Gagal" . $e->errorInfo
            ]);
        }
    }
}
