<h1>Test For and If</h1>

@if($value>100)
    <p>{{$value}}</p>
    @else
    <h1>valor baixo</h1>
@endif



@for($i = 0; $i < $value; $i++)
{{$i}}<br>
@endfor


@php
    $i=4;
@endphp

@while($i>0)
    Variavel: {!! "<h$i> $i </h$i>" !!}

    {{$i--}}
@endwhile

<br><br>

@foreach($arrayTest as $key=>$v)
    <p>{{$loop->index}} {{$key.' '.$v}}</p>
@endforeach

<br><br>

<!-- FORELSE -->
@forelse([] as $key=>$v)
    <p>{{$loop->index}} {{$key.' '.$v}}</p>
@empty
    <p>nenhum registro encontrado</p>
@endforelse