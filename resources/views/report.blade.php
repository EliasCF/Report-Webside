@extends('layouts.app')

@section('content')
    <div class="h-75 row align-items-center text-center">
        <div class="col">
            <h1 id="over">Hej <strong>{{ Auth::user()->name }}</strong>, Velkommen til report siden</h1>
            <article>Du kan download din report ved at trykke på download knappen</article>
            <hr>
            <a href="/excel" target="_blank" class="mt-5" id="download-button">Download report</a>
        </div>
    </div>
@endsection

<style>
    #download-button {
        background: #2fa360;
        display:inline-block;
        cursor:pointer;
        color:#ffffff;
        font-size:18px;
        padding:10px 44px;

        border: none;
    }

    #download-button:hover {
        background: #1d643b;
    }

    #over {
        font-size: 45px;
    }

    article {
        color: #adb5bd;
        font-size: 17px;
        font-weight: bold;
    }
</style>