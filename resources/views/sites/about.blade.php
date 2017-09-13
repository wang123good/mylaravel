@extends('base')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="top-right">
        about me
    </div>
    <div class="content">
        <div class="title m-b-md">
            <span> 你好！ {{ $ChineseName }} </span>
            <br>
            <span> Hellow {{ $EnglishName }} </span>
        </div>
    </div>
</div>
@stop
