<div class="wrap_countries">

    @foreach($areas as $area)
        <form action="{{route('show', $area['Name'])}}" method="get">
            @csrf
            <input type="hidden" name="area_id" value="{{$area['AreaId']}}">
            <input type="hidden" name="area_name" value="{{$area['Name']}}">
            
            @foreach($area['Competitions'] as $competition)
            
                @php
                // $competition is array
                    $comp_id = $competition['CompetitionId'];
                    $area_id = $competition['AreaId'];
                    $area_name = $competition['AreaName'];
                    $comp_name = $competition['Name'];
                    $comp_gender = $competition['Gender'];
                    $comp_type = $competition['Type'];
                    $comp_format = $competition['Format'];
                    $comp_key = $competition['Key'];
                    // Competition's season is array
                    foreach($competition['Seasons'] as $seasons){
                        // echo '<pre>';
                        //     var_dump($season);
                        // echo '</pre>';
                        // SeasonId
                        // CompetitionId
                        // Season
                        // Name
                        // CompetitionName
                        // StartDate
                        // EndDate
                        // CurrentSeason
                        // Rounds is Array
   
                        foreach($seasons['Rounds'] as $rounds){
                            // echo '<pre>';
                            //     var_dump($rounds);
                            // echo '</pre>';
                            // RoundId
                            // SeasonId
                            // Season
                            // SeasonType
                            // Name
                            // Type
                            // StartDate
                            // EndDate
                            // CurrentWeek
                            // CurrentRound
                        }
                    }               
                @endphp
                
            @endforeach

            <input type="hidden" name="comp_id" value="{{ $comp_id }}">
            <input type="hidden" name="comp_name" value="{{ $comp_name }}">
            <input type="hidden" name="comp_gender" value="{{ $comp_gender }}">
            <input type="hidden" name="comp_type" value="{{ $comp_type }}">
            <input type="hidden" name="comp_format" value="{{ $comp_format }}">
            <input type="hidden" name="comp_key" value="{{ $comp_key }}">
            {{-- <input type="hidden" name="seasons" value="{{ $seasons }}"> --}}


            <button type="submit">{{ $area['Name'] }}</button>
        </form>
    @endforeach
