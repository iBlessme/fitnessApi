<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserClubResourse;
use App\Models\UserClub;
use Illuminate\Http\Request;

class UserClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $data = UserClub::all();
        return response() -> json($data);
    }
    public function create(Request $request){
        $data = $request -> all();
        $dataModel = [
            'name_user' => $data['name_user'],
            'surname' => $data['surname'],
            'thirdname' => $data['thirdname'],
            'passport_number' => $data['passport_number'],
            'passport_serial' => $data['passport_serial'],
            'snils' => $data['snils'],
            'phone_number' => $data['phone_number'],
            'login' => $data['login'],
            'password' => $data['password'],
            'birth_day' => $data['birth_day'],

        ];
        UserClub::create($dataModel);
        return response() -> json(['data' => 'Пользователь успешно добавлен']);
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
        //
    }
}
