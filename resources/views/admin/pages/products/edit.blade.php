@extends('admin.layouts.app')

@section('title', 'Editar Produtos')

@section('content')
    <h1>Editar produto {{$id}} </h1>
    <form action=" {{ route('products.update', $id ) }} " method="post">
        @csrf
        @method('PUT')
        <input type="hidden" name=_method value="PUT">
        <input type="text" name="name" placeholder="Nome:">
        <input type="text" name="description" placeholder="Descrição:">
        <button type="submit">Enviar</button>
    </form>

@endsection