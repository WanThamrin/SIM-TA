<?php

namespace App\Http\Controllers;

use App\Models\Sempro;
use App\Models\NilaiSempro;
use App\Models\RevProposal;
use App\Models\RegisTA;
use Auth;
use Illuminate\Database\QueryException;

use App\Exports\SemproExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;
use Excel;


class NilaiSemproController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $NilaiSempro = NilaiSempro::join('users','nilai_sempros.users_id','users.id')->where('users_id',auth()->id())->get();
        // $NilaiSempro = Sempro::with('user.JadwalSempro','TA.dosen1','TA.dosen2','TA.dosen3','TA.dosen4')->get();


        $data['dospem1'] = RegisTA::select('regis_t_a_s.*','sempros.id as sempros_id','users.*')
        ->join('users','users.id','regis_t_a_s.users_id')
        ->join('sempros','sempros.users_id','regis_t_a_s.users_id')
        ->where('regis_t_a_s.dospem1',auth()->id())->get();

        $data['dospem2'] = RegisTA::select('regis_t_a_s.*','sempros.id as sempros_id','users.*')
        ->join('users','users.id','regis_t_a_s.users_id')
        ->join('sempros','sempros.users_id','regis_t_a_s.users_id')
        ->where('regis_t_a_s.dospem2',auth()->id())->get();

        $data['dospeng1'] = RegisTA::select('regis_t_a_s.*','sempros.id as sempros_id','users.*')
        ->join('users','users.id','regis_t_a_s.users_id')
        ->join('sempros','sempros.users_id','regis_t_a_s.users_id')
        ->where('regis_t_a_s.dospeng1',auth()->id())->get();

        $data['dospeng2'] = RegisTA::select('regis_t_a_s.*','sempros.id as sempros_id','users.*')
        ->join('users','users.id','regis_t_a_s.users_id')
        ->join('sempros','sempros.users_id','regis_t_a_s.users_id')
        ->where('regis_t_a_s.dospeng2',auth()->id())->get();

        $response=[
            'message' => 'Daftar Nilai Sempro',
            'data'=> $data
        ];

        return response()->json($response, Response::HTTP_OK);
    }


    public function NilaiSempro()
    {
        $data["Sempro"] = Sempro::with('user.JadwalSempro','TA.dosen1','TA.dosen2','TA.dosen3','TA.dosen4')
        ->whereHas('user', function($q){
            $q->where('id', auth()->id());
        } )
        ->first();
        // dd($data["Sempro"] );

        $data['dospem1'] = NilaiSempro::where('sempros_id',$data['Sempro']->id)
        ->where('dosen_id',$data["Sempro"]->TA->dospem1)->first();

        $data['dospem2'] = NilaiSempro::where('sempros_id',$data['Sempro']->id)
        ->where('dosen_id',$data["Sempro"]->TA->dospem2)->first();

        $data['dospeng1'] = NilaiSempro::where('sempros_id',$data['Sempro']->id)
        ->where('dosen_id',$data["Sempro"]->TA->dospeng1)->first();

        $data['dospeng2'] = NilaiSempro::where('sempros_id',$data['Sempro']->id)
        ->where('dosen_id',$data["Sempro"]->TA->dospeng2)->first();

        $response =[
            'message' => 'List Sempro',
            'data'=> $data
        ];
        // dd($data["Sempro"]->TA);

        return response()->json($response, Response::HTTP_OK);
    }

    public function DetailAll($id)
    {
        $data["Sempro"] = Sempro::with('user.JadwalSempro','TA.dosen1','TA.dosen2','TA.dosen3','TA.dosen4')
        ->whereHas('user', function($q) use($id){
            $q->where('id', $id);
        } )
        ->first();
        // dd($data["Sempro"] );

        $data['dospem1'] = NilaiSempro::where('sempros_id',$data['Sempro']->id)
        ->where('dosen_id',$data["Sempro"]->TA->dospem1)->first();

        $data['dospem2'] = NilaiSempro::where('sempros_id',$data['Sempro']->id)
        ->where('dosen_id',$data["Sempro"]->TA->dospem2)->first();

        $data['dospeng1'] = NilaiSempro::where('sempros_id',$data['Sempro']->id)
        ->where('dosen_id',$data["Sempro"]->TA->dospeng1)->first();

        $data['dospeng2'] = NilaiSempro::where('sempros_id',$data['Sempro']->id)
        ->where('dosen_id',$data["Sempro"]->TA->dospeng2)->first();

        $response =[
            'message' => 'List Sempro',
            'data'=> $data
        ];
        // dd($data["Sempro"]->TA);

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
    public function update(Request $request, $id)
    {
        $number=Auth::user()->number;




        // $sempro= Sempro::with('user','TA.dosen1','TA.dosen2','TA.dosen3','TA.dosen4','user.JadwalSempro')
        // ->where("id", $id)
        // ->update ([
        //     'nilai' => $request->NilaiSempro
        // ]);
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
        // dd($request->all());
        // try {
            // $NilaiSempro = NilaiSempro::create($request->all()+[
            //     'sempros_id'=>$sempro->sempros_id
            // ]);
            $sempro = Sempro::find($id);
            $NilaiSempro = NilaiSempro::updateOrCreate(
                [
                    "sempros_id" => $sempro->id,
                ],
                [
                    "nilai1" => $request->nilai1,
                    "nilai2" => $request->nilai2,
                    "nilai3" => $request->nilai3,
                    "nilai4" => $request->nilai4,
                    "nilai5" => $request->nilai5,
                    "nilai_presentasi" => $request->nilai_presentasi,
                    "nilai_laporan" => $request->nilai_laporan,
                    "note" => $request->note,
                    'dosen_id' => Auth::user()->id,
                ]
            );
            $response=[
                'message' => 'Form NilaiSempro telah dibuat',
                'data'=> $NilaiSempro
            ];

            return response()->json($response, Response::HTTP_CREATED);

        // } catch (QueryException $e) {
        // //   dd($e);
        //     return response()->json([
        //         'message' => "Gagal" . $e->errorInfo
        //     ]);
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $data['user'] = RegisTA::join('users','users.id','regis_t_a_s.users_id')->where("regis_t_a_s.id", $id)->get();
        $data['user'] = Sempro::with('user','TA.dosen1','TA.dosen2','TA.dosen3','TA.dosen4','user.JadwalSempro')
        ->where("id", $id)->first();
        $data['nilai'] = NilaiSempro::whereSempros_id($data["user"]->id)->first();
        // $NilaiSempro = NilaiSempro::findOrFail($id);

        $response=[
            'message' => 'Daftar NilaiSempro',
            'data'=> $data
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
    // public function update(Request $request, $id)
    // {
    //     $NilaiSempro = NilaiSempro::findOrFail($id);

    //     $validator = Validator::make($request->all(), [
    //         // 'nama_mhs'=>['required'],
    //         // 'nim'=>['required'],
    //         // 'niph'=>['required'],
    //         'laporan'=>['required'],
    //         'nilai1'=>['required'],
    //         'nilai2'=>['required'],
    //         'nilai3'=>['required'],
    //         'nilai4'=>['required'],
    //         'nilai5'=>['required'],
    //         'note'=>['required']
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json($validator->errors(),
    //         Response::HTTP_UNPROCESSABLE_ENTITY);
    //     }

    //     try {
    //         $NilaiSempro -> update($request->all());
    //         $response=[
    //             'message' => 'NilaiSempro telah diubah',
    //             'data'=> $NilaiSempro
    //         ];

    //         return response()->json($response, Response::HTTP_OK);

    //     } catch (QueryException $e) {
    //         return response()->json([
    //             'message' => "Gagal" . $e->errorInfo
    //         ]);
    //     }
    // }

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

    public function export()
    {
        $data["sempros"] = Sempro::with('user.JadwalSempro','TA.dosen1','TA.dosen2','TA.dosen3','TA.dosen4','nilais.dosen')
        ->get();
        // dd($data["Sempro"] );
        return Excel::download(new SemproExport($data), 'Nilai Sempro.xlsx');
    }

    public function AllNilai(){
        $sempros = Sempro::with('user.JadwalSempro','TA','nilais.dosen')
        ->get();
        $response=[
            'message' => 'Daftar Nilai Sempro',
            'data'=> $sempros
        ];
        return response()->json($response, Response::HTTP_OK);

    }
}
