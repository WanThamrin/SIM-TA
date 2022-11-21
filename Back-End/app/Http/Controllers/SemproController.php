<?php

namespace App\Http\Controllers;

use App\Models\sempro;
use App\Models\RegisTA;
use Auth;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class SemproController extends Controller
{
    /**
     * Display a listing of the resource.
     *``
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sempro = Sempro::join('users','sempros.users_id','users.id')->where('users_id',auth()->id())->get();
        $response =[
            'message' => 'List Sempro',
            'data'=> $sempro
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
        //     // 'nama_mhs'=>['required'],
        //     // 'nim'=>['required'],
        //     // 'niph'=>['required'],
        //     'proposal'=>['required'],
        //     'slide'=>['required'],
        //     'validasi_dospem1'=>['required'],
        //     'validasi_dospem2'=>['required']
        // ]);

        // if ($validator->fails()) {
        //     return response()->json($validator->errors(),
        //     Response::HTTP_UNPROCESSABLE_ENTITY);
        // }

        // try {
        //     $TA = RegisTA::where('users_id',auth()->id())->first();
        //     $sempro = Sempro::create($request->all()+[
        //         'users_id'=>auth()->id(),
        //         'ta_id'=>$TA->id
        //     ]);
        //     $response=[
        //         'message' => ' Form Sempro telah dibuat',
        //         'data'=> $sempro
        //     ];

        //     $Mahasiswa = Mahasiswa::where('users_id',auth()->id())->update(['status'=>'seminar proposal']);

        //     return response()->json($response, Response::HTTP_CREATED);
        $proposal = $request->file('proposal')->getClientOriginalName();
        $proposal = $request->file('proposal')->store('public/Sempro/proposal');

        $slide = $request->file('slide')->getClientOriginalName();
        $slide = $request->file('slide')->store('public/Sempro/slide');

        $validasi_dospem1 = $request->file('validasi_dospem1')->getClientOriginalName();
        $validasi_dospem1 = $request->file('validasi_dospem1')->store('public/Sempro/validasi_dospem1');

        $validasi_dospem2 = $request->file('validasi_dospem2')->getClientOriginalName();
        $validasi_dospem2 = $request->file('validasi_dospem2')->store('public/Sempro/validasi_dospem2');


            // dd($request->all()) ;
        try {
            // $TA = RegisTA::where('users_id',auth()->id())->first();
            $sempro = Sempro::create([
                'proposal'=>$proposal,
                'slide'=>$slide,
                'validasi_dospem1'=>$validasi_dospem1,
                'validasi_dospem2' => $validasi_dospem2
                ]+[
                'users_id'=>auth()->id(),
                'ta_id'=>0
                // 'ta_id'=>$TA
            ]);
            $response=[
                'message' => ' Form sempro telah dibuat',
                'data'=> $sempro
            ];

            // $Mahasiswa = Mahasiswa::where('users_id',auth()->id())->update(['status'=>'seminar proposal']);

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
        $sempro = Sempro::findOrFail($id);
        $response=[
            'message' => 'Daftar Sempro',
            'data'=> $sempro
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
        $sempro = Sempro::findOrFail($id);

        $validator = Validator::make($request->all(), [
            // 'nama_mhs'=>['required'],
            // 'nim'=>['required'],
            // 'niph'=>['required'],
            'proposal'=>['required'],
            'slide'=>['required'],
            'validasi_dospem1'=>['required'],
            'validasi_dospem2'=>['required']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $sempro -> update($request->all());
            $response=[
                'message' => 'List sempro telah diubah',
                'data'=> $sempro
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
        $sempro = Sempro::findOrFail($id);

        try {
            $sempro -> delete();
            $response=[
                'message' => 'Sempro telah dihapus',
                'data'=> $sempro
            ];

            return response()->json($response, Response::HTTP_OK);

        } catch (QueryException $e) {
            return response()->json([
                'message' => "Gagal" . $e->errorInfo
            ]);
        }
    }
}
