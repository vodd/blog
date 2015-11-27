@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Evénement <small>Ajouter un événement</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            {!! Form::model($cat,['method'=>'put','url'=>route('categories.update',$cat),'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('title','Titre :') !!}
                {!! Form::text('title',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('content','Description :') !!}
                {!! Form::textarea('content',null,['class'=>'form-control','id'=>"editor1"]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('active','Date de debut :') !!}
                {!! Form::date('dated') !!}
            </div>
            <div class="form-group">
                {!! Form::label('category_id','Date de Fin :') !!}
                {!! Form::date('datef') !!}
            </div>
            <div class="form-group">
                {!! Form::label('images','Images :') !!}
                {!! Form::file('images',null,['class'=>'form-control']) !!}
            </div>

            <button class="btn btn-primary">Modifier </button>
            {!! Form::close() !!}
        </div>
    </div>

@endsection
