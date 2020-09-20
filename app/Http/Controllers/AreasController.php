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

        if(!empty($_GET['area_id'])){
            $area_id = $_GET['area_id'];         
        }

        if(!empty($_GET['area_name'])){
            $area_name = $_GET['area_name'];         
        }

        if(!empty($_GET['comp_id'])){
            $comp_id = $_GET['comp_id'];      
        }

        if(!empty($_GET['comp_id'])){  
            $comp_id = $_GET['comp_id'];      
        }

        if(!empty($_GET['comp_name'])){
            $comp_name = $_GET['comp_name'];      
        }

        if(!empty($_GET['comp_name'])){  
            $comp_name = $_GET['comp_name'];      
        }
        
        if(!empty($_GET['comp_gender'])){
            $comp_gender = $_GET['comp_gender'];      
        }

        if(!empty($_GET['comp_type'])){
            $comp_type = $_GET['comp_type'];      
        }

        if(!empty($_GET['comp_format'])){  
            $comp_format = $_GET['comp_format'];      
        }

        if(!empty($_GET['comp_key'])){  
            $comp_key = $_GET['comp_key'];      
        }

        if(!empty($_GET['season_Id'])){  
            $season_id = $_GET['season_Id'];      
        }

        if(!empty($_GET['season_year'])){  
            $season_year = $_GET['season_year'];      
        }

        if(!empty($_GET['start_date'])){  
            $start_date = $_GET['start_date'];      
        } 

        if(!empty($_GET['end_date'])){  
            $end_date = $_GET['end_date'];      
        }
       
        if(!empty($_GET['current_season']) && $_GET['current_season'] != 0){  
            $current_season = $_GET['current_season'];      
        } 
        
        //competitions "League"
        // dump('competition id:' . $comp_id);
        // dump('competition name:' . $comp_name);
        // dump('competition gender:' . $comp_gender);
        // dump('competition type:' . $comp_type);
        // dump('competition format:' . $comp_format);
        // dump('competition key:' . $comp_key);
        // //season
        // dump('season id:' . $season_id);
        // dump('season:' . $season_year);
        // dump('start date:' . $start_date);
        // dump('end date:' . $end_date);
        // if(!empty($_GET['current_season']) && $_GET['current_season'] != 0){
        //     dump('current season:' . $current_season);
        // }
        
        // $competition = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>'f7b0c7419d204f299f59e646b45ca563'])->get('https://api.sportsdata.io/v3/soccer/scores/json/CompetitionDetails/' . $comp_id)->json();
    
        // CompetitionId
        // AreaId
        // AreaName
        // Name
        // Gender
        // Type
        // Format
        // Key
        // CurrentSeason
        // Teams array
        // Games array
        // Seasons array

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