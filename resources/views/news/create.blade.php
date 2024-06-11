@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Cadastrar Notícia</h1>
        <form action="{{ route('news.store') }}" method="POST">
            @csrf
            <div>
                <label for="title">Título</label>
                <input type="text" name="title" id="title" required>
            </div>
            <div>
                <label for="content">Conteúdo</label>
                <textarea name="content" id="content" required></textarea>
            </div>
            <div>
                <label for="categories">Categorias</label>
                <select class="form-control" name="categories[]" id="categories">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit">Cadastrar</button>
        </form>
    </div>
@endsection
