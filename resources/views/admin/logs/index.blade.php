@extends('layouts.admin')

@section('navbar')
  @parent
@stop

@section('content')
  
  <div class="container +spacer">
    
    <div class="panel">

      @foreach ($logs as $log)

        <div class="panel__container">
          <div class="row">
            <div class="grid-3">
              <div class="log__date">{{ $log->getDiffHumans() }}</div>
            </div>
            <div class="grid-9">
              <div class="log__description">{!! $log->getDescription() !!}</div>
            </div>
          </div>
          <div class="clear"></div>
        </div>

        <div class="panel__divider"></div>

      @endforeach

      <div class="+center +spacer-medium">
       {!! $logs->render() !!}
      </div>
    </div>

  </div>

@stop
