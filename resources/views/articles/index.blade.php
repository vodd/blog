@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Tous les articles <small></small>
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
                        <th>Cree le</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td><img src="{{ url('images/articles/'.$article->images) }}" alt="" width="150px"></td>
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->created_at }}</td>
                            <td>
                                <a href="{{url('articles/'.$article->id.'/edit')}}" class="btn btn-success">Editer</a>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                     </table>
            </div>
        </div>
    </div>
@endsection
