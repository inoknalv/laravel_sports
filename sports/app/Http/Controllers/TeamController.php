<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $teams = Team::orderBy('name', 'asc')->get();
      return view('teams.teams')->with('teams', $teams);  //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'crest' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $team = new \App\Team;
        $team->name = request('name');
        $team->trigram = request('trigram');
        $imageName = time().'.'.request('crest')->getClientOriginalExtension();
        request('crest')->move(public_path('img/teams'), $team->trigram.$imageName);
        $team->crest = request('trigram').$imageName;

        $team->save();

        return redirect('/teams');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $team = Team::with('players')->find($id);
      return view('teams.show',compact('team'));
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

    public function ranking()
    {
      $teams = DB::select('select id, name, crest, sum(h_wins+h_draws+h_loss+a_wins+a_draws+a_loss) as GP, sum(h_wins+a_wins) as W, sum(h_draws+a_draws) as D, sum(h_loss+a_loss) as L, sum((h_wins+a_wins)*3+(a_draws+h_draws)) as points from teams group by teams.id, teams.name, teams.crest order by points desc, W desc');

      return view('teams.ranking')->with('teams', $teams);
    }

}
