@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                {{$cat->title}} <small><a href="{{url('categories/'.$cat->id.'/edit')}}" class="btn btn-warning">Modifier l'evenement</a> <a href="{{url('articles/create')}}" class="btn btn-primary">Ajouter un article</a></small>
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>Images</th>
                        <th>Titre</th>
                        <th>Creé le </th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($article as $art)
                    <tr>
                        <td><img src="{{url('images/'.$art->images)}}" alt="" width="150px"></td>
                        <td><a href="">{{$art->title}}</a></td>
                        <td>{{$art->created_at}}</td>
                        <td>
                            <a href="{{url('articles/'.$art->id.'/edit')}}" class="btn btn-success">Editer</a>

                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection