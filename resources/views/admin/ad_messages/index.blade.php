@extends('layouts.admin')

@section('content')
    
    <div class="container +spacer">
        <div class="grid-8 centered">
            <div class="panel">
                @foreach ($adMessages as $message)
                    <div class="panel__container">
                        <strong>De: </strong> {{ $message->email }}<br/>
                        <strong>Pour: </strong> {{ $message->ad()->first()->getFullName() }}
                        <div class="+spacer-small"></div>
                        {{ $message->content }}
                    </div>
                    <div class="panel__divider"></div>
                @endforeach
            </div>
        </div>
    </div>

@stop