<?php

namespace App\Http\Controllers;

use App\Models\RegisTA;
use App\Models\Mahasiswa;
use Auth;
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
#nampilinn sesuai user login
        $RegisTA = RegisTA::where('users_id',auth()->id())
        ->first();
        $response =[
            'message' => 'List Form TA',
            'data'=> $RegisTA
        ];

        return response()->json($response, Response::HTTP_OK);
    }

    public function getData()
    {
#with seelum join
        $RegisTA = RegisTA::join('users','regis_t_a_s.users_id','users.id')->orderBy('name', 'ASC')
        ->select(['regis_t_a_s.*','users.name','users.number','users.email'])->get();
        foreach($RegisTA as $ta){
            $ta['ta_id'] = $ta->id;
            // unset($ta->id);
        }

        $response =[
            'message' => 'List Form TA',
            'data'=> $RegisTA
        ];

        return response()->json($response, Response::HTTP_OK);
    }

    public function getDetail($id)
    {
#nampilinn sesuai user login
        $RegisTA = RegisTA::where('regis_t_a_s.id',$id)
        ->join('users','users.id','regis_t_a_s.users_id')
        ->select(['regis_t_a_s.*','users.name','users.number','users.email'])
        ->orderBy('name', 'ASC')->first();
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
    public function updateStatus1($id,Request $request)
    {
        $updateStatus=RegisTA::where('id',$id)->update(['status1'=>$request->status]);
        $response=[
            'message' => 'Status telah di update',
            'data'=> $updateStatus
        ];
        return response()->json($response, Response::HTTP_CREATED);
    }

    public function updateStatus2($id,Request $request)
    {
        $updateStatus=RegisTA::where('id',$id)->update(['status2'=>$request->status]);
        $response=[
            'message' => 'Status telah di update',
            'data'=> $updateStatus
        ];
        return response()->json($response, Response::HTTP_CREATED);
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
            // 'nama_mhs'=>['required'],
            // 'nim'=>['required'],
            // 'niph'=>['required'],
            'judul'=>['required'],
            'abstrak'=>['required'],
            // 'status1'=>['required'],
            // 'status2'=>['required'],
            'keyword'=>['required'],
            'dospem1'=>['required'],
            'dospem2'=>['required']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        // dd($request->all()+['users_id'=>auth()->id()]);
        try {
            $RegisTA = RegisTA::create($request->all()+[
                'users_id'=>auth()->id(),
            ]);

            $response=[
                'message' => 'Form telah dibuat',
                'data'=> $RegisTA
            ];
            $Mahasiswa = Mahasiswa::where('users_id',auth()->id())->update(['status'=>'Daftar Tugas Akhir']);


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
        // dd($RegisTA);

        $RegisTA = RegisTA::where('regis_t_a_s.id',$id)->join('users','users.id','regis_t_a_s.users_id')->first();
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
    public function getDospem()
    {
        // dd(Auth::id());
        $regis1['dospem1'] = RegisTA::where('status1',0)
        ->join('users','users.id','regis_t_a_s.users_id')
        ->where('dospem1',Auth::id())
        ->select(['regis_t_a_s.*','users.name','users.number','users.email'])->get();

        $regis1['dospem2'] = RegisTA::where('status2',0)
        ->join('users','users.id','regis_t_a_s.users_id')
        ->where('dospem2',Auth::id())
        ->select(['regis_t_a_s.*','users.name','users.number','users.email'])->get();

        $response=[
            'message' => 'Daftar RegisTA',
            'data'=> $regis1
        ];

        return response()->json($response, Response::HTTP_OK);
    }

    public function getBimbingan()
    {
        // dd(Auth::id());

        $regis1['dospem1'] = RegisTA::where('status1',1)
        ->with('user.JadwalSempro','user.JadwalSemhas')
        ->join('users','users.id','regis_t_a_s.users_id')
        ->where('dospem1',Auth::id())
        ->select(['regis_t_a_s.*','users.name','users.number','users.email'])->get();

        $regis1['dospem2'] = RegisTA::where('status2',1)
        ->with('user.JadwalSempro','user.JadwalSemhas')
        ->join('users','users.id','regis_t_a_s.users_id')
        ->where('dospem2',Auth::id())
        ->select(['regis_t_a_s.*','users.name','users.number','users.email'])->get();

        $response=[
            'message' => 'Daftar RegisTA',
            'data'=> $regis1
        ];

        return response()->json($response, Response::HTTP_OK);
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
        $number=Auth::user()->number;
        $validator = Validator::make($request->all(), [
            // 'nama_mhs'=>['required'],
            // 'nim'=>['required'],
            // 'niph'=>['required'],
            'judul'=>['required'],
            'abstrak'=>['required'],
            // 'status1'=>['required'],
            // 'status2'=>['required'],
            'keyword'=>['required']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        // dd($request->all()+['users_id'=>auth()->id()]);
        try {
            $RegisTA = RegisTA::update($request->all()+[
                'users_id'=>auth()->id(),
            ]);

        $response=[
            'message' => 'Form telah dibuat',
            'data'=> $RegisTA
        ];
            // $Mahasiswa = Mahasiswa::where('users_id',auth()->id())->update(['status'=>'Daftar Tugas Akhir']);


            return response()->json($response, Response::HTTP_OK);

        } catch (QueryException $e) {
        //   dd($e);
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
