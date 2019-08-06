Client: {{$name}}<br>
Id: {{$id}}<br>
{{isset($gender)?$gender:"Não há genero"}}<br>
{{$gender??"Não há genero"}}<br>
{{$gender or "Não há genero"}}<br>
<br><br><br><br><br>
{{ "<h1>Title</h1>" }}
<br><br><br><br><br>
{!! "<h1>Title</h1>" !!}

{{$value}}
<?php
///**
// * Created by PhpStorm.
// * User: jmmen
// * Date: 31/07/2019
// * Time: 22:28
// */
//echo 'new client:'.$name;
//echo 'id:'.$id;