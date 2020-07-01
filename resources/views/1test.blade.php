            <h1 class="title is-size-4">{{ $type->name }}</h1>
            <p class="is-size-5">



              <label class="radio">
                {{-- @if((is_array($type->options) || is_object($type->options))) --}}
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
                {{-- @endif --}}
              </label>

            </p>
