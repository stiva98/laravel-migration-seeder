@extends('layouts.main')

@section('page-title', 'Homepage')


@section('main-content')
<h1>
    Tabella Treni
</h1>
<div class="container">
    <ul>
        @foreach ($trains as $train)
            <li>
                Agenzia: {{ $train->agency}}
            </li>
            <li>
                Stazione di partenza: {{ $train->departure_station}}
            </li>
            <li>
                Stazione d'arrivo: {{ $train->arrival_station}}
            </li>
            <li>
                Orario di partenza: {{ $train->departure_time}}
            </li>
            <li>
                Orario d'arrivo: {{ $train->arrival_time}}
            </li>
            <li>
                Nr. Carrozza: {{ $train->carriage_number}}
            </li>
            <li>
                In orario: 
                @if ($train->in_time == 1)
                    Si
                @else
                    No
                @endif
            </li>
            <li>
                Cancellato:
                @if ($train->delete == 1)
                    Si
                @else
                    No
                @endif
            </li>
            <br>
        @endforeach
    </ul>
</div>

@endsection