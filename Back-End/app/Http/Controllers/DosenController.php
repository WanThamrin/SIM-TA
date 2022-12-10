<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\User;
use App\Models\RegisTA;
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
        $Dosen = Dosen::join('users','dosens.users_id','users.id')->where('users_id',auth()->id())->first();
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
        $Dosen = User::with('bimbingan','riset')->where('role','dosen')->orderBy('name', 'ASC')->get();

        foreach ($Dosen as $key => $data) {
            $data['dospem1'] = RegisTA::with('user')->where('dospem1',$data->id)->count();
            $data['dospem2'] = RegisTA::with('user')->where('dospem2',$data->id)->count();
            $data['dospeng1'] = RegisTA::with('user')->where('dospeng1',$data->id)->count();
            $data['dospeng2'] = RegisTA::with('user')->where('dospeng2',$data->id)->count();
        }
        $response =[
            'message' => 'List Dosen',
            'data'=> $Dosen
        ];

        return response()->json($response, Response::HTTP_OK);
    }

    public function ManageDosen()
    {
        $Dosen['admin'] = User::with('bimbingan','riset')->where('role','dosen')->where('is_admin',1)->get();

        foreach ($Dosen['admin'] as $key => $data) {
            $data['dospem1'] = RegisTA::with('user')->where('dospem1',$data->id)->count();
            $data['dospem2'] = RegisTA::with('user')->where('dospem2',$data->id)->count();
            $data['dospeng1'] = RegisTA::with('user')->where('dospeng1',$data->id)->count();
            $data['dospeng2'] = RegisTA::with('user')->where('dospeng2',$data->id)->count();
        }

        $Dosen['dosen'] = User::with('bimbingan','riset')->where('role','dosen')->where('is_admin',0)->get();

        foreach ($Dosen['dosen'] as $key => $data) {
            $data['dospem1'] = RegisTA::with('user')->where('dospem1',$data->id)->count();
            $data['dospem2'] = RegisTA::with('user')->where('dospem2',$data->id)->count();
            $data['dospeng1'] = RegisTA::with('user')->where('dospeng1',$data->id)->count();
            $data['dospeng2'] = RegisTA::with('user')->where('dospeng2',$data->id)->count();
        }
        $response =[
            'message' => 'List Dosen',
            'data'=> $Dosen
        ];

        return response()->json($response, Response::HTTP_OK);
    }

    public function ManageSuperAdmin()
    {
        $Dosen['superadmin'] = User::with('bimbingan','riset')->where('role','dosen')->where('is_superadmin',1)->get();

        foreach ($Dosen['superadmin'] as $key => $data) {
            $data['dospem1'] = RegisTA::with('user')->where('dospem1',$data->id)->count();
            $data['dospem2'] = RegisTA::with('user')->where('dospem2',$data->id)->count();
            $data['dospeng1'] = RegisTA::with('user')->where('dospeng1',$data->id)->count();
            $data['dospeng2'] = RegisTA::with('user')->where('dospeng2',$data->id)->count();
        }

        $Dosen['dosen'] = User::with('bimbingan','riset')->where('role','dosen')->where('is_superadmin',0)->get();

        foreach ($Dosen['dosen'] as $key => $data) {
            $data['dospem1'] = RegisTA::with('user')->where('dospem1',$data->id)->count();
            $data['dospem2'] = RegisTA::with('user')->where('dospem2',$data->id)->count();
            $data['dospeng1'] = RegisTA::with('user')->where('dospeng1',$data->id)->count();
            $data['dospeng2'] = RegisTA::with('user')->where('dospeng2',$data->id)->count();
        }
        $response =[
            'message' => 'List Dosen',
            'data'=> $Dosen
        ];

        return response()->json($response, Response::HTTP_OK);
    }


    public function detailDosen($id)
    {
        $Dosen = User::with('bimbingan','riset')->where('id',$id)->first();
        // dd($Dosen);
        $dosen = Dosen::where('users_id', $Dosen->id)->first();
        $response =[
            'message' => 'List Dosen',
            'data'=>[ 'data' => $Dosen, 'detail' => $dosen]
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
            'foto'=>['required'],
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

    public function updateStatus($id,Request $request)
    {
        $updateStatus=User::where('id',$id)->update(['is_admin'=>1]);
        $response=[
            'message' => 'Status telah di update',
            'data'=> $updateStatus
        ];
        return response()->json($response, Response::HTTP_CREATED);
    }

    public function hapusStatus($id,Request $request)
    {
        $updateStatus=User::where('id',$id)->update(['is_admin'=>0]);
        $response=[
            'message' => 'Status telah di update',
            'data'=> $updateStatus
        ];
        return response()->json($response, Response::HTTP_CREATED);
    }

    public function updateStatusSup($id,Request $request)
    {
        $updateStatusSup=User::where('id',$id)->update(['is_superadmin'=>1]);
        $response=[
            'message' => 'Status telah di update',
            'data'=> $updateStatusSup
        ];
        return response()->json($response, Response::HTTP_CREATED);
    }

    public function hapusStatusSup($id,Request $request)
    {
        $updateStatusSup=User::where('id',$id)->update(['is_superadmin'=>0]);
        $response=[
            'message' => 'Status telah di update',
            'data'=> $updateStatusSup
        ];
        return response()->json($response, Response::HTTP_CREATED);
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
            'foto'=>['required'],
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

    public function updateProfile(Request $request)
    {
        return Dosen::where('users_id',Auth::user()->id)->update(['note' => $request->note]);
    }
}
