@extends('orders.base')

@section('head')
  {{-- <link rel="stylesheet" href="/css/_debug.css"> --}}
@endsection

@section('main')

  {{-- Content --}}
  <h1>Create</h1>
  @livewire('v13-order-create-form')


@endsection
