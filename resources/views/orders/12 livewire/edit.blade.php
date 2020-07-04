@extends('orders.base')

@section('head')
  {{-- <link rel="stylesheet" href="/css/_debug.css"> --}}
@endsection

@section('main')

  {{-- Content --}}
  {{-- <h1>hello</h1> --}}
  @livewire('order-create-form')


@endsection

