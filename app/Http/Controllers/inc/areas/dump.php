<?php

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
        // Round
        dump('round_id:' . $round_id);
        dump('round_name:' . $round_name);
        dump('round_type:' . $round_type);
        dump('round_start_date:' . $round_start_date);
        dump('round_end_date:' . $round_end_date);
        if(!empty($_GET['round_current_week']) || $_GET['round_current_week'] != 0){
            // dump('round_current_week:' . $round_current_week);
        }
        if(!empty($_GET['round_current_round']) && $_GET['round_current_round'] != false){
            // dump('round_current_round:' . $round_current_round);
        }