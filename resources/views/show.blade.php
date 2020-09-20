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
    @if(!empty($_GET['current_season']) && $_GET['current_season'] != 0)
        Current season: {{$current_season}}
    @endif
</div>

<h1 class="mb-1 mt-1">League Details:</h1>
@endsection