@extends('orders.base')
@section('main')

<section class="section">
  <div class="container">
    <h1 class="title">Update a order</h1>
      <form method="post" action="{{ route('orders.update', $order->id) }}">
        @method('PATCH')
        @csrf

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

        <div class="control">
          <label class="radio">
            <input type="radio" name="answer">
            Yes
          </label>
          <label class="radio">
            <input type="radio" name="answer">
            No
          </label>
        </div>

        @foreach($types as $type)
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
        @endforeach


  <section class="section">
    <div class="container">
      {{-- <h1 class="title">Section</h1> --}}
      <h2 class="subtitle">
        <strong>Order options</strong>
      </h2>
<div class="flex-container">
<div class="tile is-ancestor">
  <div class="tile">
    <div class="tile is-child box">
      <p class="title">One</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
    </div>
  </div>
  <div class="tile">
    <div class="tile is-child box">
      <p class="title">One</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
    </div>
  </div>
  <div class="tile">
    <div class="tile is-child box">
      <p class="title">One</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
    </div>
  </div>
  <div class="tile">
    <div class="tile is-child box">
      <p class="title">One</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
    </div>
  </div>
  <div class="tile">
    <div class="tile is-child box">
      <p class="title">One</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
    </div>
  </div>
  <div class="tile">
    <div class="tile is-child box">
      <p class="title">One</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
    </div>
  </div>
  <div class="tile">
    <div class="tile is-child box">
      <p class="title">One</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
    </div>
  </div>

</div>
</div>




    </div>
  </section>


<article class="message">
  <div class="message-header">
    <p>Hello World</p>
    <button class="delete" aria-label="delete"></button>
  </div>
  <div class="message-body">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
  </div>
</article>

          <!-- Radio Buttons -->
          @foreach($types as $type)
          <div class="form-group">
            <label for="formGroupExampleInput">{{ $type->name }}</label>
              @if((is_array($type->options) || is_object($type->options)))
                @foreach($type->options as $option)
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="options[{{ $type->name }}][option_id]"
                      id="{{ $option->name }}"
                      value="{{ $option->id }}"
                      @if(count($order->orderOptions->where("option_id","{{ $option->id }}"))>0)
                        checked
                      @endif
                    >
                    <label class="form-check-label" for="{{ $option->name }}">
                      {{ $option->name }}
                    </label>
                  </div>
                  @endforeach
                @endif()
          </div>
          @endforeach


      </form>
  </div>
</section>


<div class="row">
    <div class="col-sm-8 offset-sm-2">
{{--         <h1 class="display-3">Update a order</h1> --}}
    <div class="container">
      <h1 class="title">
        Update a order
      </h1>
    </div>
    <div class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="post" action="{{ route('orders.update', $order->id) }}">
            @method('PATCH')
            @csrf
{{--             <div class="form-group">
                <label for="customer_name">customer_name:</label>
                <input
                  type="text"
                  class="form-control"
                  name="customer_name"
                  value={{$order->customer_name }}
                />
            </div> --}}

{{--             <x-text-field
              label="customer_name"
              name="customer_name"
              value="{{$order->customer_name }}"
              required
            ></x-text-field> --}}





{{--             <div class="form-group">
                <label for="number_of_copies">number_of_copies:</label>
                <input type="text" class="form-control" name="number_of_copies" value={{ $order->number_of_copies }} />
            </div>
            <div class="form-group">
                <label for="payment">payment:</label>
                <input type="text" class="form-control" name="payment" value={{ $order->payment }} />
            </div> --}}

          <!-- Radio Buttons -->
          @foreach($types as $type)
          <div class="form-group">
            <label for="formGroupExampleInput">{{ $type->name }}</label>
              @if((is_array($type->options) || is_object($type->options)))
                @foreach($type->options as $option)
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="options[{{ $type->name }}][option_id]"
                      id="{{ $option->name }}"
                      value="{{ $option->id }}"
                      @if(count($order->orderOptions->where("option_id","{{ $option->id }}"))>0)
                        checked
                      @endif
                    >
                    <label class="form-check-label" for="{{ $option->name }}">
                      {{ $option->name }}
                    </label>
                  </div>
                  @endforeach
                @endif()
          </div>
          @endforeach

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
</div>
