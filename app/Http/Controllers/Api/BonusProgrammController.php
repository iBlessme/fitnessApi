<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BonusProgramResourse;
use App\Models\BonusProgramm;
use http\Env\Response;
use Illuminate\Http\Request;

class BonusProgrammController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return BonusProgramResourse::collection(BonusProgramm::all());
        $data = BonusProgramm::all();
        return response() -> json($data);
    }
    public function create(Request $request){
        $data = $request -> all();
        $dataModel = [
            'name_programm' => $data['name_programm'],
            'cost' => $data['cost'],
        ];
        BonusProgramm::create($dataModel);
        return response() -> json(['data' => 'Бонусная система успешно добавлен']);
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
        $bonusProgramm = BonusProgramm::whereId($id)->update([
            'name_programm' => $request->get('name_programm'),
            'cost' => $request->get('cost')
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
        $bonusProgramm = BonusProgramm::destroy($id);
    }
}
