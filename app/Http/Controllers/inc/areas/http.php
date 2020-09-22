<?php  

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

// Round

if(!empty($_GET['round_id'])){  
    $round_id = $_GET['round_id'];      
}

if(!empty($_GET['round_name'])){  
    $round_name = $_GET['round_name'];      
}

if(!empty($_GET['round_type'])){  
    $round_type = $_GET['round_type'];      
} 

if(!empty($_GET['round_start_date'])){  
    $round_start_date = $_GET['round_start_date'];      
}

if(!empty($_GET['round_end_date'])){  
    $round_end_date = $_GET['round_end_date'];      
}

if(!empty($_GET['round_current_week']) || $_GET['round_current_week'] != 0){  
    $round_current_week = $_GET['round_current_week'];      
}else{
    $round_current_week = '';
}

if(!empty($_GET['round_current_round']) || $_GET['round_current_week'] != 0){  
    $round_current_round = $_GET['round_current_round'];      
}else{
    $round_current_round = '';
}