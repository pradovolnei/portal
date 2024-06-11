@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Notícias</h1>

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="row">
        @foreach ($news as $new)
            <div>
                <h2><a href="{{ route('news.show', $new->id) }}">{{ $new->title }}</a></h2>
                <p>{{ $new->content }}</p>
                <p>Categorias:
                    @foreach ($new->categories as $category)
                        {{ $category->name }}
                    @endforeach
                </p>
                <a href="{{ route('news.show', $new->id) }}">Ver mais</a>
            </div>



        <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-secondary">
                    <div class="card-header">
                    <h3 class="card-title">{{ $new->title }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <div class="card-body">
                        <div class="form-group">
                        <label> {{ $new->content }} </label>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('news.show', $new->id) }}" class="btn btn-secondary">Acessar</a>
                    </div>

                </div>
            </div>

        <!-- /.card -->
    @endforeach
    </div>
    </div>
@endsection
