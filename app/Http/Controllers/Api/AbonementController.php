<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AbonementResourse;
use App\Models\Abonement;
use Illuminate\Http\Request;

class AbonementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $data = Abonement::with('bonus')->get();
        return response() -> json($data);
//        return AbonementResourse::collection(Abonement::all());
    }

    public function create(Request $request){
        $data = $request -> all();
        $dataModel = [
          'name_abonement' => $data['name_abonement'],
            'cost_abonement' => $data['cost_abonement'],
            'date_start' => $data['date_start'],
            'date_finish' => $data['date_finish'],
            'bonus_programms_id' => $data['bonus_programms_id']
        ];
        Abonement::create($dataModel);
        return response() -> json(['data' => 'Абонемент успешно добавлен', $data['Abonement install']]);
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
        $abonement = Abonement::whereId($id)->update([
            'name_abonement' => $request->get('name_abonement'),
            'cost_abonement' => $request->get('cost_abonement'),
            'date_start' => $request->get('date_start'),
            'date_finish' => $request->get('date_finish'),
            'bonus_programms_id' => $request->get('bonus_programms_id'),
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
        $abonement = Abonement::destroy($id);
    }
}
