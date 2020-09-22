<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AreasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $areas = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>'f7b0c7419d204f299f59e646b45ca563'])->get('https://api.sportsdata.io/v3/soccer/scores/json/Areas')->json();
        // dd($areasArray);

        foreach($areas as $area){
            if(!empty($area['Competitions'])){
                // dd($area['Competitions']);
                foreach($area['Competitions'] as $competition){
                    // dump($competition['Seasons']['Rounds']);
                    // dump($competition['Seasons']);
                    foreach($competition['Seasons'] as $seasons){               
                        // dd($seasons);
                        foreach($seasons['Rounds'] as $round){
                            // dump($round);
                        }              
                    }
                }
            }         
        }

        // dd($areas);
        
        return  view('area', 
            [
                'areas' => $areas,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $areasArray = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>'f7b0c7419d204f299f59e646b45ca563'])->get('https://api.sportsdata.io/v3/soccer/scores/json/Areas')->json();

        include 'inc/areas/http.php'; 
        // include 'inc/areas/dump.php';

        // League Details   
        $competition = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>'f7b0c7419d204f299f59e646b45ca563'])->get('https://api.sportsdata.io/v3/soccer/scores/json/CompetitionDetails/' . $comp_id)->json();

        // dump($competition);

            $comp_item_name = $competition['Name'];
            $comp_item_gender = $competition['Gender'];
            $comp_item_type = $competition['Type'];
            $comp_item_format = $competition['Format'];
            $comp_item_key = $competition['Key'];
            // foreach($competition['CurrentSeason'] as $comp_season){
            //     dump($competition['CurrentSeason']);
            // }

            foreach($competition['Teams'] as $comp_teams){
                dump($competition['Teams']);
            }

            // foreach($competition['Games'] as $comp_games){
            //     dump($comp_games);
            // }

            // foreach($competition['Seasons'] as $comp_item_season){
            //     dump($comp_item_season);
            // }
        
        // $competitionMemberByTeam = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>'f7b0c7419d204f299f59e646b45ca563'])->get('https://api.sportsdata.io/v3/soccer/scores/json/MembershipsByTeam/858')->json();

        // $playersByTeam = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>'f7b0c7419d204f299f59e646b45ca563'])->get('https://api.sportsdata.io/v3/soccer/scores/json/PlayersByTeam/858')->json();

        // $seasonTeam = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>'f7b0c7419d204f299f59e646b45ca563'])->get('https://api.sportsdata.io/v3/soccer/scores/json/SeasonTeams/110')->json();

        // $standings = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>'f7b0c7419d204f299f59e646b45ca563'])->get('https://api.sportsdata.io/v3/soccer/scores/json/Standings/{roundid}')->json();

        // $venues = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>'f7b0c7419d204f299f59e646b45ca563'])->get('https://api.sportsdata.io/v3/soccer/scores/json/Venues')->json();

        // $gamesByDate = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>'f7b0c7419d204f299f59e646b45ca563'])->get('https://api.sportsdata.io/v3/soccer/scores/json/GamesByDate/2020-09-20')->json();

        // $shedule = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>'f7b0c7419d204f299f59e646b45ca563'])->get('https://api.sportsdata.io/v3/soccer/scores/json/Schedule/2')->json();

        // $teamGameStatsByDate = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>'f7b0c7419d204f299f59e646b45ca563'])->get('https://api.sportsdata.io/v3/soccer/scores/json/TeamGameStatsByDate/2020-09-19')->json();

        // $teamSeasonStats = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>'f7b0c7419d204f299f59e646b45ca563'])->get('https://api.sportsdata.io/v3/soccer/odds/json/LiveGameOddsByDate/2020-09-7')->json();

        // dump($teamSeasonStats);

        return view('show', 
            [
                'areasArray' => $areasArray,
                'area_id' => $area_id,
                'area_name' => $area_name,
                'comp_name' => $comp_name,
                'comp_gender' => $comp_gender,
                'comp_type' => $comp_type,
                'comp_format' => $comp_format,
                'comp_key' => $comp_key,
                // Season
                'season_id' => $season_id,
                'season_year' => $season_year,
                'start_date' => $start_date,
                'end_date' => $end_date,
                // 'current_season' => $current_season,
                // Round
                'round_id' => $round_id,
                'round_name' => $round_name,
                'round_type' => $round_type,
                'round_start_date' => $round_start_date,
                'round_end_date' => $round_end_date,
                'round_current_week' => $round_current_week,
                'round_current_round' => $round_current_round,
     
            ]);
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