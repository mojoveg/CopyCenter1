@extends('orders.base')
@section('main')

{{-- START HEADER --}}
<section class="hero is-info">
  <div class="hero-body">
    <div class="container">


      <div class="content">
        <h1 class="title">
          Update an Order
        </h1>
        <a href={{ route('orders.create') }}>create</a>
        <a href={{ route('orders.index') }}>index</a>

      </div>
    </div>
  </div>
</section>
{{-- END HEADER --}}

<section class="container">
  <div class="level-item">
    <div class="columns is-multiline is-centered cards-container" id="sectioncontainer">
      <div class="column is-narrow">
        <article class="message is-link">
          <div class="message-header">
            <p>Customer Info</p>
            <div class="message-body">


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
            </div>
          </div>
        </div>




      </div>
      <div class="message-body">

      </div>
    </article>
  </div>





</div>
</div>
</section>

<div class="columns">
  <div class="column is-9">
    <section class="hero is-info welcome is-small">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">
            Update an Order
          </h1>
        </div>
      </div>
    </section>

    <form method="post" action="{{ route('orders.update', $order->id) }}">
      @method('PATCH')
      @csrf


      <div class="column is-6">
        <div class="card">
          <header class="card-header">
            <p class="card-header-title">
              Customer Info
            </p>
          </header>
          <div class="card-content">
            <div class="content">

              <x-text-field
              class="input"
              label="customer_name"
              name="customer_name"
              value="{{$order->customer_name }}"
              required
              ></x-text-field>

              <x-text-field
              class="input"
              label="number_of_copies"
              name="number_of_copies"
              value="{{$order->number_of_copies }}"
              required
              ></x-text-field>

              <x-text-field
              class="input"
              label="payment"
              name="payment"
              value="{{$order->payment }}"
              required
              ></x-text-field>

            </div>
          </div>
        </div>
      </div>

      <div class="column is-3">

        @foreach($types as $type)

        <div class="card">
          <header class="card-header">
            <p class="card-header-title">
              {{ $type->name }}
            </p>
          </header>
          <div class="card-content">
            <div class="content">

              <div class="control">
                <label class="radio">
                  {{-- @if((is_array($type->options) || is_object($type->options))) --}}
                  @foreach($type->options as $option)
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
                  @endforeach
                  {{-- @endif --}}
                </label>
              </div>

            </div>
          </div>
        </div>

        @endforeach






      </div>


    </form>


  </div>
</div>
@endsection

