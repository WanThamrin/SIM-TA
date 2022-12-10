<?php

namespace App\Http\Controllers;

use App\Models\JadwalSempro;
use App\Models\Sempro;
use App\Models\RegisTA;
use App\Models\Mahasiswa;
use Auth;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
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
        $sempro = Sempro::with('user.JadwalSempro','revisi','TA.dosen1','TA.dosen2','TA.dosen3','TA.dosen4')->get();
        $response =[
            'message' => 'List Sempro',
            'data'=> $sempro
        ];

        return response()->json($response, Response::HTTP_OK);
    }

    // public function NilaiSempro()
    // {
    //     // dd(auth());
    //     $data["Sempro"] = Sempro::with('user.JadwalSempro','TA.dosen1','TA.dosen2','TA.dosen3','TA.dosen4', 'nilais', 'nilais.dosen',)
    //     ->whereHas('user', function($q){
    //         $q->where('id', auth()->id());
    //     } )
    //     ->get();

    //     $response =[
    //         'message' => 'List Sempro',
    //         'data'=> $data
    //     ];

    //     return response()->json($response, Response::HTTP_OK);
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getData()
    {
        $sempro = Sempro::with('user.JadwalSempro','revisi','TA.dosen1','TA.dosen2','TA.dosen3','TA.dosen4')
        ->where('users_id',auth()->id())
        ->get();

        foreach ($sempro as $key => $data) {
            $data['sempro'] = Sempro::with('user')->where('sempro',$data->id)->count();
        }

        $response =[
            'message' => 'List Sempro',
            'data'=> $sempro
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
        // $this->validate($request, [
        //     'proposal' => 'required|mimes:pdf|max:50000',
        //     'slide' => 'required|mimes:pdf|max:50000',
        //     'validasi_dospem1' => 'required|mimes:pdf|max:50000',
        //     'validasi_dospem2' => 'required|mimes:pdf|max:50000',
        // ]);

        $proposal = $request->file('proposal')->getClientOriginalName();
        $request->file('proposal')->move(public_path('Sempro/proposal'),$proposal);

        $slide = $request->file('slide')->getClientOriginalName();
        $request->file('slide')->move(public_path('Sempro/slide'),$slide);

        $validasi_dospem1 = $request->file('validasi_dospem1')->getClientOriginalName();
        $request->file('validasi_dospem1')->move(public_path('Sempro/validasi_dospem1'),$validasi_dospem1);

        $validasi_dospem2 = $request->file('validasi_dospem2')->getClientOriginalName();
        $request->file('validasi_dospem2')->move(public_path('Sempro/validasi_dospem2'),$validasi_dospem2);


            // dd($request->all()) ;
        try {
            $TA = RegisTA::where('users_id',Auth::user()->id)->first();
            // dd($TA->id);
            $sempro = Sempro::create([
                'proposal'=>$proposal ,
                'slide'=>$slide,
                'validasi_dospem1'=>$validasi_dospem1,
                'validasi_dospem2' => $validasi_dospem2,
                'users_id'=>Auth::user()->id,
                'ta_id'=>$TA->id
                // 'ta_id'=>$TA
            ]);
            $response=[
                'message' => ' Form sempro telah dibuat',
                'data'=> $sempro

            ];
            $Mahasiswa = Mahasiswa::where('users_id',auth()->id())->update(['status'=>'seminar proposal']);


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
        $sempro = Sempro::where('id',$id)->with('user.JadwalSempro','TA.dosen1','TA.dosen2','TA.dosen3','TA.dosen4')->first();
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
        // $TA = RegisTA::where('users_id')->first();
        if (!$sempro){
            return $this->errorResponse('Data tidak ditemukan',422);
        }

        if ($request->proposal != null && $request->proposal != 'null') {

            $proposal = $request->file('proposal')->getClientOriginalName();
            $request->file('proposal')->move(public_path('Sempro/proposal'),$proposal);

        $sempro->proposal = $proposal;
        }
        // dd($request->$proposal) ;

        if ($request->slide != null && $request->slide != 'null') {

            $slide = $request->file('slide')->getClientOriginalName();
            $request->file('slide')->move(public_path('Sempro/slide'),$slide);

        $sempro->slide = $slide;
        }
        if ($request->validasi_dospem1 != null && $request->validasi_dospem1 != 'null') {

            $validasi_dospem1 = $request->file('validasi_dospem1')->getClientOriginalName();
            $request->file('validasi_dospem1')->move(public_path('Sempro/validasi_dospem1'),$validasi_dospem1);

        $sempro->validasi_dospem1 = $validasi_dospem1;
        }
        if ($request->validasi_dospem2 != null && $request->validasi_dospem2 != 'null') {

            $validasi_dospem2 = $request->file('validasi_dospem2')->getClientOriginalName();
            $request->file('validasi_dospem2')->move(public_path('Sempro/validasi_dospem2'),$validasi_dospem2);

        $sempro->validasi_dospem2 = $validasi_dospem2;
        }


        $sempro->save();
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
        //     $sempro -> update($request->all());
            $response=[
                'message' => 'List sempro telah diubah',
                'data'=> $sempro
            ];

            return response()->json($response, Response::HTTP_OK);

        // } catch (QueryException $e) {
        //     return response()->json([
        //         'message' => "Gagal" . $e->errorInfo
        //     ]);
        // }
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

    public function updateJadwalSempro(Request $request)
    {

        $jadwalSempro = JadwalSempro::findOrFail($request->id);
        $TA = RegisTA::where('users_id',$jadwalSempro->users_id)->update([
            'dospeng1'=> $request->dospeng1,
            'dospeng2'=> $request->dospeng2
        ]);

        return $jadwalSempro->update($request->all());
    }
}
