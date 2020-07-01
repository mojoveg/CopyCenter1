<?php

use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('options')->insert([
        $items = [
            [
                'type_id' => DB::table('types')->where('name', 'Paper Type')->value('id'),
                'name' => 'White Paper Black Ink'
            ],
            [
                'type_id' => DB::table('types')->where('name', 'Paper Type')->value('id'),
                'name' => 'White Paper Color Ink'
            ],
            [
                'type_id' => DB::table('types')->where('name', 'Paper Type')->value('id'),
                'name' => 'Color Paper'
            ],
            [
                'type_id' => DB::table('types')->where('name', 'Paper Type')->value('id'),
                'name' => 'Transparencie'
            ],
            [
                'type_id' => DB::table('types')->where('name', 'Paper Type')->value('id'),
                'name' => 'Labels'
            ],
            [
                'type_id' => DB::table('types')->where('name', 'Paper Size')->value('id'),
                'name' => '8 1/2 x 11'
            ],
            [
                'type_id' => DB::table('types')->where('name', 'Paper Size')->value('id'),
                'name' => '8 1/2 x 14'
            ],
            [
                'type_id' => DB::table('types')->where('name', 'Paper Size')->value('id'),
                'name' => '11 x 17'
            ],
            [
                'type_id' => DB::table('types')->where('name', 'Duplex')->value('id'),
                'name' => 'One-Sided'
            ],
            [
                'type_id' => DB::table('types')->where('name', 'Duplex')->value('id'),
                'name' => 'Two-Sided'
            ],
            [
                'type_id' => DB::table('types')->where('name', 'Color')->value('id'),
                'name' => 'Blue'
            ],
            [
                'type_id' => DB::table('types')->where('name', 'Color')->value('id'),
                'name' => 'Red'
            ],
            [
                'type_id' => DB::table('types')->where('name', 'Color')->value('id'),
                'name' => 'Green'
            ],
            [
                'type_id' => DB::table('types')->where('name', 'Folding')->value('id'),
                'name' => 'Half'
            ],
            [
                'type_id' => DB::table('types')->where('name', 'Folding')->value('id'),
                'name' => 'Letter Thirds'
            ],
            [
                'type_id' => DB::table('types')->where('name', 'Folding')->value('id'),
                'name' => 'Z Thirds'
            ],
            [
                'type_id' => DB::table('types')->where('name', 'Folding')->value('id'),
                'name' => 'Other'
            ],
            [
                'type_id' => DB::table('types')->where('name', 'Cutting')->value('id'),
                'name' => 'Half'
            ],
            [
                'type_id' => DB::table('types')->where('name', 'Cutting')->value('id'),
                'name' => 'Thirds'
            ],
            [
                'type_id' => DB::table('types')->where('name', 'Cutting')->value('id'),
                'name' => 'Quarters'
            ],
            [
                'type_id' => DB::table('types')->where('name', 'Cutting')->value('id'),
                'name' => 'Other'
            ]
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
