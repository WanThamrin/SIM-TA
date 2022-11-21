<?php

namespace App\Http\Controllers;

use App\Models\NilaiSempro;
use Auth;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;


class NilaiSemproController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $NilaiSempro = NilaiSempro::join('users','nilai_sempros.users_id','users.id')->where('users_id',auth()->id())->get();
        $response =[
            'message' => 'List NilaiSempro Mahasiswa',
            'data'=> $NilaiSempro
        ];

        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function updateStatus1($id,Request $request)
    // {
    //     $updateStatus=NilaiSempro::where('id',$id)->update(['status1'=>$request->status]);
    //     $response=[
    //         'message' => 'Status telah di update',
    //         'data'=> $updateStatus
    //     ];
    //     return response()->json($response, Response::HTTP_CREATED);
    // }

    // public function updateStatus2($id,Request $request)
    // {
    //     $updateStatus=NilaiSempro::where('id',$id)->update(['status2'=>$request->status]);
    //     $response=[
    //         'message' => 'Status telah di update',
    //         'data'=> $updateStatus
    //     ];
    //     return response()->json($response, Response::HTTP_CREATED);
    // }


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
            // 'nama_mhs'=>['required'],
            // 'nim'=>['required'],
            // 'niph'=>['required'],
            // 'laporan'=>['required'],
            'nilai1'=>['required'],
            'nilai2'=>['required'],
            'nilai3'=>['required'],
            'nilai4'=>['required'],
            'nilai5'=>['required'],
            'note'=>['required']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        // dd($request->all()+['users_id'=>auth()->id()]);
        try {
            $NilaiSempro = NilaiSempro::create($request->all()+[
                'users_id'=>auth()->id(),
            ]);

            $response=[
                'message' => 'Form NilaiSempro telah dibuat',
                'data'=> $NilaiSempro
            ];

            return response()->json($response, Response::HTTP_CREATED);

        } catch (QueryException $e) {
        //   dd($e);
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
        $NilaiSempro = NilaiSempro::findOrFail($id);
        $response=[
            'message' => 'Daftar NilaiSempro',
            'data'=> $NilaiSempro
        ];

        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $NilaiSempro = NilaiSempro::findOrFail($id);

        $validator = Validator::make($request->all(), [
            // 'nama_mhs'=>['required'],
            // 'nim'=>['required'],
            // 'niph'=>['required'],
            'laporan'=>['required'],
            'nilai1'=>['required'],
            'nilai2'=>['required'],
            'nilai3'=>['required'],
            'nilai4'=>['required'],
            'nilai5'=>['required'],
            'note'=>['required']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $NilaiSempro -> update($request->all());
            $response=[
                'message' => 'NilaiSempro telah diubah',
                'data'=> $NilaiSempro
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
        $NilaiSempro = NilaiSempro::findOrFail($id);

        try {
            $NilaiSempro -> delete();
            $response=[
                'message' => 'Form TA telah dihapus',
                'data'=> $NilaiSempro
            ];

            return response()->json($response, Response::HTTP_OK);

        } catch (QueryException $e) {
            return response()->json([
                'message' => "Gagal" . $e->errorInfo
            ]);
        }
    }
}
