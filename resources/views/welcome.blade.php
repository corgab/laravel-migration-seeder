@extends('layouts.app')

@section('title','Laravel')

@section('content')

<div>
    <div class="container">
        <div class="d-flex justify-content-between">
            @foreach ($trains as $train)
            <div class="text-center">
                <div>
                    <h1> {{ $train->azienda}} </h1>
                    <h1> {{ $train->codice_treno}} </h1>
                    <h1> {{ $train->numero_carrozze}} </h1>
                </div>
                <div>
                    <h1> {{ $train->stazione_partenza}} </h1> 
                    <h1> {{ $train->orario_partenza}} </h1>
                </div>
                <div>
                    <h1> {{ $train->stazione_arrivo}} </h1>
                    <h1> {{ $train->orario_arrivo}} </h1>
                </div>
                <div>
                    {{-- <h1> {{ $train->in_orario}} </h1>
                    <h1> {{ $train->cancellato}} </h1> --}}

                    @if ($train->in_orario === 1 && $train->cancellato === 0 )
                        <h1>il treno è in orario</h1>
                    @elseif ($train->cancellato === 1)
                        <h1>il treno è stato cancellato</h1>
                    @else
                    <h1>Il treno non è in orario</h1>
                    @endif
                </div>
            </div>
            @endforeach
        </div>

    </div>

</div>
@endsection