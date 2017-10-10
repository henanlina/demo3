<html>
{{--引入子视图--}}
@include('public.footer');
<head>aa</head>
<title>tittle</title>
<body>
<h1>121212</h1>
<h4>{{$name}}</h4>
<h4>time {{time()}}</h4>
<h4>html: {!!$html!!}</h4>
<h4>原生变量: @{{html}}</h4>

{{--if语句--}}
@if(count($record)==1)
    I  have one record!
    @elseif(count($record)>1)
    I  have multiple records!
@else
    I don't have records!
@endif
</body>
</html>

@section('content')
    <example></example>
@endsection