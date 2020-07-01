<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

            $table->string('customer_name');
            $table->string('number_of_copies');
            $table->string('payment');

        // DB::table('options')->insert([
        $items = [
            [
                'customer_name' => 'White Paper Black Ink',
                'number_of_copies' => 'White Paper Black Ink',
                'payment' => 'White Paper Black Ink'
            ],
        ];
        // ]);
        foreach ($items as $item) {
            App\Option::updateOrCreate(
                [
                    'type_id' => $item['type_id'],
                    'name' => $item['name']
                ],
                $item);
        }

    }



}
