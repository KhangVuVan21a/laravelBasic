@extends('layouts.master')
@section('title','| Create New Post')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>
            {{-- {!! Form::open(array('route'=> 'posts.store'))!!}
            {{Form::lable('title','Title:')}}
            {{Form::text('title',null,array('class'=>'form-control'))}}
            {!!Form::close()!!} --}}
        </div>
    </div>
@endsection