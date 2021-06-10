@extends('layout.main')

@section('content')
    <div class="container">
        <h1>Le proposte Last-Minute</h1>

        @foreach ($trips as $trip)
            <article>
                <h2>{{ $trip->titolo }}</h2>
                <h4>{{ $trip->citta}}</h4>
                <div>Descrizione: {{ $trip->descrizione }}</div>
                <div>Prezzo: {{ number_format($trip->prezzo, 0, ',', '.') }}€</div>
                @if (!$loop->last)
                    <hr>
                @endif
            </article>
        @endforeach

        <section class="mt-5">
            {{ $trip->links() }}
        </section>

    </div>
@endsection
