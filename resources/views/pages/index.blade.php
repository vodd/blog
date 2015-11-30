@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Toute les pages <small></small>
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
                    @foreach($page as $p)
                        <tr>
                            <td><img src="{{ url('images/page/'.$p->images) }}" alt="" width="150px"></td>
                            <td>{{ $p->title }}</td>
                            <td>{{ $p->created_at }}</td>
                            <td>
                                <a href="{{url('pages/'.$p->id.'/edit')}}" class="btn btn-success">Editer</a>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                     </table>
            </div>
        </div>
    </div>
@endsection
