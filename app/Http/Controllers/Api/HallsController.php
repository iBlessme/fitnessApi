<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HallResourse;
use App\Models\Hall;
use Illuminate\Http\Request;

class HallsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $data = Hall::with('typesOfTraning')->get();
        return response() -> json($data);
    }
    public function create(Request $request){
        $data = $request -> all();
        $dataModel = [
            'name_hall' => $data['name_hall'],
            'capacity' => $data['capacity'],
            'types_of_tranings_id' => $data['types_of_tranings_id']
        ];
        Hall::create($dataModel);
        return response() -> json(['data' => 'Ресепшн успешно добавлено']);
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
        $hall = Hall::whereId($id)->update([
            'name_hall' => $request->get('name_hall'),
            'capacity' => $request->get('capacity'),
            'types_of_tranings_id' => $request->get('types_of_tranings_id')

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
        $hall = Hall::destroy($id);
    }
}
