<?php

namespace App\Http\Controllers;

use App\Models\RevProposal;
use App\Models\RegisTA;
use App\Models\sempro;
use Auth;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class RevProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *``
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $RevProposal = RevProposal::where('users_id',auth()->id())->first();
        $response =[
            'message' => 'List Revisi Proposal',
            'data'=> $RevProposal
        ];

        return response()->json($response, Response::HTTP_OK);
    }

    public function DetailRevisi($id)
    {
        $RevProposal = RevProposal::where('users_id',$id)->first();
        $response =[
            'message' => 'List Revisi Proposal',
            'data'=> $RevProposal
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
            'file'=>['required'],
            'note'=>['required'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $file = $request->file('file')->getClientOriginalName();
        $request->file('file')->move(public_path('RevProposal'),$file);


        try {

            $RevProposal = RevProposal::create([
                'users_id'=>auth()->id(),
                'note' => $request->note,
                'file' => $file
            ]);
            $response=[
                'message' => ' Form RevProposal telah dibuat',
                'data'=> $RevProposal
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
        // $RevProposal = RegisTA::where('id',$id)->with('user.JadwalRevProposal','TA.dosen1','TA.dosen2','TA.dosen3','TA.dosen4')->first();
        // $response=[
        //     'message' => 'Daftar RevProposal',
        //     'data'=> $RevProposal
        // ];

        // return response()->json($response, Response::HTTP_OK);
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

        $validator = Validator::make($request->all(), [
            'file'=>['required'],
            'note'=>['required'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $file = $request->file('file')->getClientOriginalName();
        $request->file('file')->move(public_path('RevProposal'),$file);


        try {

            $RevProposal = RevProposal::update([
                'users_id'=>auth()->id(),
                'note' => $request->note,
                'file' => $file
            ]);
            $response=[
                'message' => ' Form RevProposal telah dibuat',
                'data'=> $RevProposal
            ];

            return response()->json($response, Response::HTTP_CREATED);

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
        $RevProposal = RevProposal::findOrFail($id);

        try {
            $RevProposal -> delete();
            $response=[
                'message' => 'RevProposal telah dihapus',
                'data'=> $RevProposal
            ];

            return response()->json($response, Response::HTTP_OK);

        } catch (QueryException $e) {
            return response()->json([
                'message' => "Gagal" . $e->errorInfo
            ]);
        }
    }
}
