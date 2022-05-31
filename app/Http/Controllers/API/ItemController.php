<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Api\Formatter;
use Exception;
use App\Helpers\ApiFormatter;
use App\Models\Koli;
use App\Models\User;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
                'nama' => 'required',
                'qty' => 'required',
                'user_id' => 'required',
                'koli_id' => 'required',
            ]);

            $item = Item::create([
                'nama' => $request->nama,
                'qty' => $request->qty,
                'user_id' => $request->user_id,
                'koli_id' => $request->koli_id,
            ]);

            $data = Item::where('id','=', $item->id)->get();

            if($data){
                return ApiFormatter::createApi(204, 'No Content');
            }else{
                return ApiFormatter::createApi(404, 'failed');
            }
        }catch(Exception $error){
            return ApiFormatter::createApi(404, 'failed');
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
        $data = User::with(['kolis', 'items'])->whereIn('id',['1','2'])->get();

        if($data){
            return ApiFormatter::createApi(200,'', $data);
        }else{
            return ApiFormatter::createApi(404, 'error');
        }
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
        try{
            $request->validate([
                'nama' => 'required',
                'qty' => 'required',
                'user_id' => 'required',
                'koli_id' => 'required',
            ]);

            $item = Item::findOrFail($id);

            $item->update([
                'nama' => $request->nama,
                'qty' => $request->qty,
                'user_id' => $request->user_id,
                'koli_id' => $request->koli_id
            ]);

            $data = Item::where('id','=', $item->id)->get();

            if($data){
                return ApiFormatter::createApi(204, 'No Content');
            }else{
                return ApiFormatter::createApi(404, 'error');
            }
        }catch(Exception $error){
            return ApiFormatter::createApi(404, 'error');
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
        //
    }
}
