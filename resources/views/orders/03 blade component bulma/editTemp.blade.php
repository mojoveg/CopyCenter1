<x-layout>

{{-- @extends('orders.base')
@section('main') --}}
<div class="row">
    <div class="col-sm-8 offset-sm-2">

<x-form-button :action="route('orders.update', $order->id)">
   Do something
   <x-text-field label="Name" name="name" required />
   <x-text-field label="age" name="age" required />
   <x-text-field label="yike" name="yike" required />
</x-form-button>

{{-- <x-form-button :action="route('doSomething')">
   Do something
</x-form-button>

// perform an action with another HTTP verb
<x-form-button :action="route('model.delete', $model)" method="delete">
   Delete model
</x-form-button> --}}


        <h1 class="display-3">Update a order</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif






        <form method="post" action="{{ route('orders.update', $order->id) }}">
            @method('PATCH')
            @csrf

            <div class="field">
              <label class="label">customer_name:</label>
              <div class="control">
                <input
                  class="input @error('customer_name') is-danger @enderror"
                  type="text"
                  name="customer_name"
                  value={{ $order->customer_name }}
                >
              </div>
              @error('customer_name')
                <p class="help is-danger">{{ $errors->first('customer_name') }}</p>
              @enderror
              {{-- <p class="help">This is a help text</p> --}}
            </div>

            <div class="form-group">
                <label for="customer_name">customer_name:</label>
                <input type="text" class="form-control" name="customer_name" value={{ $order->customer_name }} />
            </div>
            <div class="form-group">
                <label for="number_of_copies">number_of_copies:</label>
                <input type="text" class="form-control" name="number_of_copies" value={{ $order->number_of_copies }} />
            </div>
            <div class="form-group">
                <label for="payment">payment:</label>
                <input type="text" class="form-control" name="payment" value={{ $order->payment }} />
            </div>

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
@{{-- endsection --}}

</x-layout>

