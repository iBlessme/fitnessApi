<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EducationResourse;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $data = Education::with('worker')->get();
        return response() -> json($data);
    }
    public function create(Request $request){
        $data = $request -> all();
        $dataModel = [
            'quailifaction' => $data['quailifaction'],
            'stage' => $data['stage'],
            'registration_number' => $data['registration_number'],
            'serial_number' => $data['serial_number'],
            'institution' => $data['institution'],
            'date_ofissue' => $data['date_ofissue'],
            'workers_id' => $data['workers_id'],
        ];
        Education::create($dataModel);
        return response() -> json(['data' => 'Образование успешно добавлено']);
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
        $education = Education::whereId($id)->update([
            'quailifaction' => $request->get('quailifaction'),
            'stage' => $request->get('stage'),
            'registration_number' => $request->get('registration_number'),
            'serial_number' => $request->get('serial_number'),
            'institution' => $request->get('institution'),
            'date_ofissue' => $request->get('date_ofissue'),
            'workers_id' => $request->get('workers_id'),
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
        $education = Education::destroy($id);
    }
}
