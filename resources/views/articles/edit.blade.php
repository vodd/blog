@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                {!! $article->title !!} <small>edition</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            {!! Form::model($article,['method'=>'put','url'=>route('articles.update',$article),'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('title','Titre :') !!}
                {!! Form::text('title',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('content','Description :') !!}
                {!! Form::textarea('content',null,['class'=>'form-control','id'=>"editor1" ]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('active','Afficher :') !!}
                {!! Form::select('active',['Online','Offline'],null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('category_id','Evenement :') !!}
                {!! Form::select('category_id',$categories,null,['class'=>'form-control']) !!}
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