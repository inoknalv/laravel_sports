<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $goals = \App\Player::select('players.*','teams.name','teams.trigram', 'teams.crest')
      ->join('teams','teams.id', '=', 'players.team_id')
      ->orderBy('goals', 'desc')
      ->take(3)
      ->get();
      $assists = \App\Player::select('players.*','teams.*')
      ->join('teams','teams.id', '=', 'players.team_id')
      ->orderBy('assists', 'desc')
      ->take(3)
      ->get();

       return view('players.players', compact('goals'), compact('assists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = \App\Team::all();

        return view('players.create', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate(request(),[

        'lastname' => 'required',
        'firstname' => 'required',
        'age' => 'required',
        'country' => 'required',
        'position' => 'required',
        'team_id' => 'required',
        'number' => 'required',
        'description' => 'required',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $player = new \App\Player;

        $player->lastname = request('lastname');
        $player->firstname = request('firstname');
        $player->age = request('age');
        $player->country = request('country');
        $player->position = request('position');
        $player->team_id = request('team_id');
        $player->number = request('number');
        $player->description = request('description');
        $imageName = time().'.'.request('photo')->getClientOriginalExtension();
        request('photo')->move(public_path('img/players'), $player->number.$imageName);
        $player->photo = request('number').$imageName;

        $player->save();

        return redirect('/players/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $info = Player::select('players.*','teams.name', 'teams.crest','teams.trigram')
      ->join('teams','teams.id', '=', 'players.team_id')
      ->where('players.id', $id)
      ->get();

      return view('players/show', compact('info'));
    }

    public function list() {
      $players = \App\Player::select('players.*','teams.name','teams.trigram', 'teams.crest')
      ->join('teams','teams.id', '=', 'players.team_id')
      ->orderBy('lastname', 'desc')
      ->get();

      return view('players.list')->with('players', $players);
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
        //
    }
}
