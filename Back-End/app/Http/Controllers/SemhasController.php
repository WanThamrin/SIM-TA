<?php

namespace App\Http\Controllers;

use App\Models\semhas;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class SemhasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semhas = Semhas::join('users','semhas.users_id','users.id')->where('users_id',auth()->id())->get();
        $response =[
            'message' => 'List Semhas',
            'data'=> $semhas
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
//         $validator = Validator::make($request->all(), [
//             // 'nama_mhs'=>['required'],
//             // 'nim'=>['required'],
//             // 'niph'=>['required'],
//             'proposal'=>['required'],
//             'slide'=>['required'],
//             'validasi_dospem1'=>['required'],
//             'validasi_dospem2'=>['required']
//         ]);

//         if ($validator->fails()) {
//             return response()->json($validator->errors(),
//             Response::HTTP_UNPROCESSABLE_ENTITY);
//         }

//         try {
//             $semhas = Semhas::create($request->all()+['users_id'=>auth()->id()]);;
//             $response=[
//                 'message' => ' Form Semhas telah dibuat',
//                 'data'=> $semhas
//             ];
// +
//         $Mahasiswa = Mahasiswa::where('users_id',auth()->id())->update(['status'=>'seminar hasil']);

//             return response()->json($response, Response::HTTP_CREATED);


//         } catch (QueryException $e) {
//             return response()->json([
//                 'message' => "Gagal" . $e->errorInfo
//             ]);
//         }
        $laporan = $request->file('laporan')->getClientOriginalName();
        $laporan = $request->file('laporan')->store('public/Semhas/laporan');

        $bimbingan = $request->file('bimbingan')->getClientOriginalName();
        $bimbingan = $request->file('bimbingan')->store('public/Semhas/bimbingan');

        $validasi_sidang1 = $request->file('validasi_sidang1')->getClientOriginalName();
        $validasi_sidang1 = $request->file('validasi_sidang1')->store('public/Semhas/validasi_sidang1');

        $validasi_sidang2 = $request->file('validasi_sidang2')->getClientOriginalName();
        $validasi_sidang2 = $request->file('validasi_sidang2')->store('public/Semhas/validasi_sidang2');

        $validasi_sempro = $request->file('validasi_sempro')->getClientOriginalName();
        $validasi_sempro = $request->file('validasi_sempro')->store('public/Semhas/validasi_sempro');

        $bukti = $request->file('bukti')->getClientOriginalName();
        $bukti = $request->file('bukti')->store('public/Semhas/bukti');
            // dd($request->all()) ;
        try {
            $semhas = Semhas::create([
                'laporan'=>$laporan,
                'bimbingan'=>$bimbingan,
                'validasi_sidang1$validasi_sidang1'=>$validasi_sidang1,
                'validasi_sidang2' => $validasi_sidang2,
                'validasi_sempro' => $validasi_sempro,
                'bukti' => $bukti



                ]+['users_id'=>auth()->id()
        //         'ta_id'=>$TA->id
            ]);
            $response=[
                'message' => ' Form Semhas telah dibuat',
                'data'=> $semhas
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
        $semhas = Semhas::findOrFail($id);
        $response=[
            'message' => 'Daftar Semhas',
            'data'=> $semhas
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
        $semhas = Semhas::findOrFail($id);

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
            $semhas -> update($request->all());
            $response=[
                'message' => 'List Semhas telah diubah',
                'data'=> $semhas
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
        $semhas = Semhas::findOrFail($id);

        try {
            $semhas -> delete();
            $response=[
                'message' => 'Semhas telah dihapus',
                'data'=> $semhas
            ];

            return response()->json($response, Response::HTTP_OK);
        } catch (QueryException $e) {
            return response()->json([
                'message' => "Gagal" . $e->errorInfo

            ]);
        }
    }
}
