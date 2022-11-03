@extends('layouts.layout')

@section('titlePage')
    Train
@endsection

@section('maincontent')
    <section class="main">
        <h1 class="title">Treni in partenza oggi</h1>
        <div class="box">
            <h2>Treno:</h2>
            <h3>Partenza</h3>
            <h3>Arrivo</h3>
            <h3>Orario</h3>
            <h3>Stato treno</h3>
        </div>
        @foreach ($trains as $train)
            <div class="card-train">

                <p>{{ $train['codice_treno'] }}</p>

                <p>{{ $train['stazione_partenza'] }}</p>

                <p>{{ $train['stazione_arrivo'] }}</p>

                <p>{{ $train['orario_partenza'] }}</p>

                @if ($train['treno_cancellato'] == 1)
                    {
                    <p> TRENO CANCELLATO</p>
                    }
                @else
                    @if ($train['treno_in_orario'] == 0)
                        <p>TRENO IN RITARDO</p>
                    @else
                        <p>TRENO IN ORARIO</p>
                    @endif
                @endif
            </div>
        @endforeach
    </section>
@endsection
