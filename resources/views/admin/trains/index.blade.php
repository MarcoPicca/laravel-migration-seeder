@extends('trains')

@section('main-content')

            <ul>
                @foreach ($trains as $train)
                    <li>
                        {{ $train->azienda }} - {{ $train->orario_di_partenza }}
                    </li>
                @endforeach
            </ul>

@endsection