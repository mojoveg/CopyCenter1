@extends('orders.base')
@section('main')


<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a order</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('orders.store') }}">
          @csrf
          <div class="form-group">
              <label for="customer_name">customer_name:</label>
              <input
                type="text"
                class="form-control"
                name="customer_name"
                value="{{ old('customer_name') }}" required
              />
              @error('customer_name')
                <div class="invalid-feedback">{{ $errors->first('customer_name') }}</div>
              @enderror
          </div>
          <div class="form-group">
              <label for="number_of_copies">number_of_copies:</label>
              <input type="text" class="form-control" name="number_of_copies"/>
          </div>
          <div class="form-group">
              <label for="payment">payment:</label>
              <input type="text" class="form-control" name="payment"/>
          </div>


{{--           @foreach($types as $type)
            <div class="form-group">
              <label for="c">{{ $type->name }}</label>
              <select multiple class="form-control" id="{{ $type->name }}">
              @if((is_array($type->options) || is_object($type->options)))
                @foreach($type->options as $option)
                  <option>{{ $option->name }}</option>
                @endforeach
              @endif()
              </select>
            </div>

          @endforeach --}}


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
                      {{-- checked --}}
                    >
                    <label class="form-check-label" for="{{ $option->name }}">
                      {{ $option->name }}
                    </label>
                  </div>
                  @endforeach
                @endif()
          </div>
          @endforeach



          <button type="submit" class="btn btn-primary">Add order</button>

      </form>
  </div>
</div>
</div>
@endsection
