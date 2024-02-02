@extends('trains')

@section('main-content')

            <ul>
                @foreach ($trains as $train)
                    <li>
                        {{ $train->azienda }}
                    </li>
                @endforeach
            </ul>

@endsection