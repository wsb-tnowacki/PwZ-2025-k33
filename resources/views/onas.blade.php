@extends('layout.template')
@section('tytul', 'Strona o nas')
@section('podstrona', 'Strona O nas')
@section('tresc')
    <div>
        Treść strony o nas <br>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates molestiae quidem ut unde adipisci quos nihil officia, vero accusantium itaque odit, temporibus quas tempora veritatis vel dolor praesentium, rerum molestias.
        
        @isset($zadania)
            {{-- @dd($zadania) --}}
            {{-- @dump($zadania) --}}
            <ol>
                {{-- <?php foreach ($zadania as $zadanie) {
                    echo '<li>'.$zadanie.'</li>';
                }?> --}}
                @foreach ($zadania as $zadanie)
                    <li>{{ $zadanie }}</li>
                @endforeach
            </ol>

        @endisset
    </div>
@endsection
