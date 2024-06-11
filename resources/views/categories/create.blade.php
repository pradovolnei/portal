@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Criar Categoria</h1>
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div>
                <label for="name">Nome da Categoria</label>
                <input type="text" name="name" id="name" required>
            </div>
            <button type="submit">Salvar</button>
        </form>
    </div>
@endsection
