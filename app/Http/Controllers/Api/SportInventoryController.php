<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SportInventoryResourse;
use App\Models\SportInventory;
use Illuminate\Http\Request;

class SportInventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $data = SportInventory::with(['typesOfInventorie', 'hall', 'fabricator'])->get();
        return response() -> json($data);
    }
    public function create(Request $request){
        $data = $request -> all();
        $dataModel = [
            'types_of_inventories_id' => $data['types_of_inventories_id'],
            'halls_id' => $data['halls_id'],
            'fabricators_id' => $data['fabricators_id']
        ];
        SportInventory::create($dataModel);
        return response() -> json(['data' => 'Спортивный инвентарь успешно добавлен']);
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
        $sportInvetory = SportInventory::whereId($id) -> update([
            'types_of_inventories_id' => $request -> get('types_of_inventories_id'),
            'halls_id' => $request -> get('halls_id'),
            'fabricators_id' => $request -> get('fabricators_id'),
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
        $sportInvetory = SportInventory::destroy($id);
    }
}
