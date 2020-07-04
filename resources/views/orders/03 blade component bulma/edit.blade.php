<x-layout>

  <x-section>
    <div class="col-sm-8 offset-sm-2">
      <h1 class="display-3">Edit a order</h1>
    </div>
  </x-section>

  <x-section>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
  </x-section>



    <x-section>
        <x-form
            method="PATCH"
            {{-- action="{{ route('orders.update', $order->id) }}" --}}
            action="/orders/{{ $order->id }}"
        >

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

            <div class="mb-6">

              <button type="submit" class="btn btn-primary">Submit</button>
            </div>


        </x-form>
        <x-form-button method="DELETE" action="/orders/{{ $order->id }}">
            Delete
        </x-form-button>

    </x-section>
</x-layout>
