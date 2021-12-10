<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TypesOfTraningResourse;
use App\Models\TypesOfTraning;
use Illuminate\Http\Request;
use Nette\Utils\Type;

class TypesOfTraningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $data = TypesOfTraning::all();
        return response() -> json($data);
    }
    public function create(Request $request){
        $data = $request -> all();
        $dataModel = [
            'name_traning' => $data['name_traning'],

        ];
        TypesOfTraning::create($dataModel);
        return response() -> json(['data' => 'Тип тренировки успешно добавлен']);
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
        $typesOfTranong = TypesOfTraning::whereId($id)->update([
            'name_traning' => $request -> get('name_traning')
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
        $typesOfTranong = TypesOfTraning::destroy($id);
    }
}
