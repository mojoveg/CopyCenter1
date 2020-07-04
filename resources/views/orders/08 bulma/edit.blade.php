@extends('orders.base')

@section('head')
{{-- <link rel="stylesheet" href="/css/_debug.css"> --}}
@endsection

@section('main')

<form method="post" action="{{ route('orders.update', $order->id) }}">
  @method('PATCH')
  @csrf

  <!-- .hero -->
  <section class="hero">
    <div class="hero-body">
      <div class="container">
        <h1 class="title">
          Update an Order
        </h1>
      </div>
    </div>
  </section>
  <!-- /.hero -->

  <!-- .section -->
  <section class="section has-background-light">
    <div class="container">
      <div class="columns">
        <div class="column is-6">
          <div class="content">
            <h1 class="title is-size-4">Customer Info</h1>
            <p class="is-size-5">
              <div class="board-item">
                <x-text-field
                class="input"
                label="customer_name"
                name="customer_name"
                value="{{$order->customer_name }}"
                required
                ></x-text-field>
              </div>
              <div class="board-item">
                <x-text-field
                class="input"
                label="number_of_copies"
                name="number_of_copies"
                value="{{$order->number_of_copies }}"
                required
                ></x-text-field>
              </div>
              <div class="board-item">
                <x-text-field
                class="input"
                label="payment"
                name="payment"
                value="{{$order->payment }}"
                required
                ></x-text-field>
              </div>
            </p>
          </div>
        </div>
      </div>
    </div>
  {{-- </section> --}}
  <!-- /.section -->
<hr>
  <!-- .section -->
  {{-- <section class="section has-background-light"> --}}
    <div class="container">
      <div class="columns">
        @foreach($types as $type)
        <div class="column is-2">
          <article class="message is-info">
            <div class="message-header">
              <p>{{ $type->name }}</p>
            </div>
            <div class="message-body">
              <label class="radio">
                @foreach($type->options as $option)
                <div class="board-item">
                  <div class="form-check">
                    <input
                    type="radio"
                    name="options[{{ $type->name }}][option_id]"
                    id="{{ $option->name }}"
                    value="{{ $option->id }}"
                    @if(count($order->orderOptions->where("option_id","{{ $option->id }}"))>0)
                    checked
                    @endif
                    > {{ $option->name }}
                  </div>
                </div>
                @endforeach
              </label>
            </div>
          </article>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- /.section -->


</form>

@endsection

