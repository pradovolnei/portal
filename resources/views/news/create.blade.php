@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Cadastrar Notícia</h1>
        <form action="{{ route('news.store') }}" method="POST">
            @csrf
            <div>
                <label for="title">Título</label>
                <input class="form-control" type="text" name="title" id="title" required>
            </div>
            <div>
                <label for="content">Conteúdo</label>
                <textarea class="form-control" name="content" id="content" required></textarea>
            </div>
            <div class="form-group">
                <label for="categories">Categorias</label>
                <!-- Selecionar mais de uma categoria -->
                <select class="select2" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;" name="categories[]" id="categories">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-block btn-primary btn-flat" >Cadastrar</button>
        </form>
    </div>
@endsection
