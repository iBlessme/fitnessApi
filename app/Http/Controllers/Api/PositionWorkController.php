<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PositionWorkResourse;
use App\Models\PositionWork;
use Illuminate\Http\Request;

class PositionWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $data = PositionWork::all();
        return response() -> json($data);
    }
    public function create(Request $request){
        $data = $request -> all();
        $dataModel = [
            'name_position' => $data['name_position'],

        ];
        PositionWork::create($dataModel);
        return response() -> json(['data' => 'Должность успешно добавлено']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $positionWork = PositionWork::whereId($id)->update([
            'name_position' => $request -> get('name_position')
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $PositionWork = PositionWork::destroy($id);
    }
}
