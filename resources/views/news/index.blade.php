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
            <div class="col-md-4">
                <!-- general form elements -->
                <div class="card card-secondary card-fixed-height">
                    <div class="card-header">
                    <h3 class="card-title">{{ $new->title }}</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                        <label> {{ Str::limit($new->content, 100) }}  </label>
                        </div>
                    </div>

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
