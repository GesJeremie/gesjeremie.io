@extends('layouts.master')

@section('content')
    
    <div class="container">
        <div class="grid-10 centered +spacer">

            <h1 class="title --heading">Merci à vous</h1>

            <p>
                Nous vous remercions d'avoir été les premiers membres de notre plateforme !
            </p>

            @foreach ($earlyAds as $index => $ad)
                
                <div class="grid-6">
                    <div class="card">
                        <div class="card__thumbnail" style="background-image: url('{{ $ad->getThumbnail('medium') }}') "></div>
                        <div class="card__title">{{ $ad->getFullName() }}</div>
                        <div class="card__number">#{{ $index + 1 }}</div>
                    </div>
                </div>
              
            
            @endforeach

        </div>
    </div>
@stop