@extends('welcome')
@section('title', '| rakka')


@section('content')

<div class="content-wrapper">
        <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-info">Liste des rakkas</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}" role="button" class="btn btn-primary">ACCUEIL</a></li>
                                <li class="breadcrumb-item active"><a href="{{ route('rakka.create') }}" role="button" class="btn btn-primary">Liste des rakka</a></li>
                                </ol>
                            </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
            </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if ($message = Session::get('error'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif
<div class="col-12">
    <div class="card border-danger border-0">
        <div class="card-header bg-info text-center">LISTE D'ENREGISTREMENT du canevas de reporting</div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-responsive-md table-striped text-center">
                    <thead>
                        <tr>
                            <th>Sarr</th>
                            <th>nombre</th>
                            <th>jour</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($rakkas as $rakka)
                        <tr>
                            <td>{{ $rakka->sarr }}</td>
                            <td>{{$rakka->nombre }}</td>
                            <td>{{$rakka->nafila_id }}</td>
                            <td>
                                <a href="{{ route('rakka.edit', $rakka->id) }}" role="button" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                <a href="{{ route('rakka.show', $rakka->id) }}" role="button" class="btn btn-success"><i class="fas fa-eye"></i></a>
                                {!! Form::open(['method' => 'DELETE', 'route'=>['rakka.destroy', $rakka->id], 'style'=> 'display:inline', 'onclick'=>"if(!confirm('Êtes-vous sûr de vouloir supprimer cet enregistrement ?')) { return false; }"]) !!}
                                <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                {!! Form::close() !!}



                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>



            </div>

        </div>
    </div>


</div>

@endsection
