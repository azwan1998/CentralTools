<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Koli;
use Illuminate\Http\Request;
use Exception;
use App\Helpers\ApiFormatter;

class KoliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        try{
            $request->validate([
                'koli' => 'required',
                'user_id' => 'required',
            ]);

            $koli = Koli::create([
                'koli' => $request->koli,
                'user_id' => $request->user_id,
            ]);

            $data = Koli::where('id','=', $koli->id)->get();

            if($data){
                return ApiFormatter::createApi(204, 'No content');
            }else{
                return ApiFormatter::createApi(404, 'eror');
            }
        }catch(Exception $error){
            return ApiFormatter::createApi(404, 'eror');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $koli = Koli::findOrfail($id);

        $data = $koli->delete();
        
        if($data){
            return ApiFormatter::createApi(200,'No Content', );
        }else{
            return ApiFormatter::createApi(404, 'error');
        }
    }
}
