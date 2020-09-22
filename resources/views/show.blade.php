@extends('main')
@section('content')

<h1 class="mb-1 mt-1">Area:</h1>

<div>
    Area Id: {{$area_id}}
</div>

<div>
    Area: {{$area_name}}
</div>

<h1 class="mb-1 mt-1">League:</h1>

<div>
    League: {{$comp_name}}
</div>

<div>
    Gender: {{$comp_gender}}
</div>

<div>
    Type: {{$comp_type}}
</div>

<div>
    Format: {{$comp_format}}
</div>

<div>
    Key: {{$comp_key}}
</div>

<h1 class="mb-1 mt-1">Season:</h1>

<div>
    Season id: {{$season_id}}
</div>

<div>
    Season year: {{$season_year}}
</div>

<div>
    Start date: {{$start_date}}
</div>

<div>
    End date: {{$end_date}}
</div>

<div>
    @if(!empty($current_season) && $current_season != 0)
        Current season: {{$current_season}}
    @endif
</div>

<h1 class="mb-1 mt-1">Round:</h1>

<div>
    Round id: {{$round_id}}
</div>

<div>
    Round Name date: {{$round_name}}
</div>

<div>
    Round type: {{$round_type}}
</div>


<div>
    Round Name date: {{$round_start_date}}
</div>

<div>
    Round type: {{$round_end_date}}
</div>

<div>
    Current week: {{$round_current_week}}
</div>

<div>
    Current round: {{$round_current_round}}
</div>

<h1 class="mb-1 mt-1">League Details:</h1>

{{-- <div>
    League id: {{$round_end_date}}
</div>

<div>
    Current week: {{$round_current_week}}
</div>

<div>
    Current round: {{$round_current_round}} --}}
</div>

<form action="{{ route('teams') }}" method="get">
    <input type="hidden" name="comp_id" value="{{ $comp_id }}">
    <button type="submit">Teams</button>
</form>

@endsection