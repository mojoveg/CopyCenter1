<?php

namespace App\Http\Livewire;

use App\Order;
use App\Type;
use App\OrderOption;
use Kdion4891\LaravelLivewireForms\ArrayField;
use Kdion4891\LaravelLivewireForms\Field;
use Kdion4891\LaravelLivewireForms\FormComponent;

class OrderCreateForm extends FormComponent
{
    public function fields()
    {
        $fields = [
        Field::make('customer_name')->input(),
        Field::make('number_of_copies')->input(),
        Field::make('payment')->input(),
        ];

        $types = Type::orderBy('sort_order', 'asc')->get();
        foreach($types as $type){
            $a = array();
            foreach($type->options as $option){
                $a[] = $option->name;
            }
            $fields[] =
            Field::make($type->name)->radio($a);
        }
        return $fields;
    }

    public function success()
    {
        // Order::create($this->form_data);
        // dd($this);
        $order = new Order([
            'customer_name' => $this->form_data['customer_name'],
            'number_of_copies' => $this->form_data['number_of_copies'],
            'payment' => $this->form_data['payment'],
        ]);
        $order->save();

        // $options = $$this->form_data->get('options');
        // foreach ($options as $v) {
        //     foreach ($v as $option) {
        //         // validation?
        //         $orderOption = new OrderOption([
        //             'order_id' => $order->id,
        //             'option_id' => $option,
        //         ]);
        //         $orderOption->save();
        //     }
        // }
    }

    public function saveAndStayResponse()
    {
        return redirect()->route('orders.create');
    }

    public function saveAndGoBackResponse()
    {
        return redirect()->route('orders.index');
    }
}
