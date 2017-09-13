@extends('base')
@section('css')
    {{--<link rel='stylesheet' href="/css/all.css" type='text/css' media='all'/>--}}
@stop
@section('content')
    <div class="col-sm-9">
        <h1>编辑文章</h1>
        <section class="content">
        {!! Form::open(['url'=>'/articles']) !!}
            <div class="form-group">
                {!! Form::label('title') !!}
                {!! Form::text('title',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('inroduct') !!}
                {!! Form::text('intro',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('content') !!}
                {!! Form::text('content',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('published_at') !!}
                {!! Form::input('date','published_at',date('Y-m-d'),['class'=>'form-control']) !!}
            </div>
            {!! Form::submit('发表文章',['class'=>'btn btn-primary form-control']) !!}
        {!! Form::close() !!}
        </section>
        @if($errors->any())
            <ul class="list-group">
                @foreach($errors->all() as $error)
                    <li class="list-group-item list-group-item-danger">{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>
@stop