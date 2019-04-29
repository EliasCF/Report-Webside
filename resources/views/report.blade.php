@extends('layouts.app')

@section('content')
    <div class="h-75 row align-items-center text-center">
        <div class="col">
            <h1>Hej <strong>{{ Auth::user()->name }}</strong>, Velkommen til report siden</h1>
            <article>Du kan downloade din report ved at trykke på download knappen nedenunder</article>
            <hr>
            <button class="mt-5" id="report-button">Download report</button>
        </div>
    </div>
@endsection

<style>
    #report-button {
        background: #2fa360;
        display:inline-block;
        cursor:pointer;
        color:#ffffff;
        font-family:Georgia;
        font-size:18px;
        padding:10px 44px;

        border: none;
    }
    #report-button:hover {
        background: #1d643b;
    }

    article {
        color: #c6c8ca;
        font-size: 16px;
        font-weight: bold;
    }
</style>