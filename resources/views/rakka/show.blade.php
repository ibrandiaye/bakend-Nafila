{{-- \resources\views\permissions\create.blade.php --}}
@extends('welcome')

@section('title', '| Un Activité')

@section('content')
    <div class="content-wrapper">

        <div class="container">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-info">Détail d'une rakka</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" role="button" class="btn btn-primary">ACCUEIL</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('rakka.index') }}" role="button" class="btn btn-primary">Détail d'une activité</a></li>

                        </ol>
                    </div><!-- /.col -->
                    </div><!-- /.row -->
                    <div class="col-md-6">
                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">
                              <i class="fas fa-text-width"></i>
                              Détail Activité
                            </h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-4">Jour</dt>
                              <dd class="col-sm-8">
                                {{ $rakka->nombre }}
                              </dd>
                              <dt class="col-sm-4">rakka</dt>
                              <dd class="col-sm-8"> {{ $rakka->sarr }}</dd>
                              <dt class="col-sm-4">rakka</dt>
                              <dd class="col-sm-8"> {{ $rakka->nafila_id }}</dd>
                            </dl>
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                </div><!-- /.container-fluid -->
            </div>

            </div>
        </div>



@endsection

<script src=" {{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
