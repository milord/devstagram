@extends('layouts.app')

@section('titulo')
    Página Home
@endsection

@section('contenido')
    <x-listar-post :posts="$posts" /> 
@endsection