<?php

use Illuminate\Database\Seeder;

class V13OptionSeeder extends Seeder
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
                'v13_type_id' => DB::table('v13_types')->where('name', 'Paper Type')->value('id'),
                'name' => 'White Paper Black Ink'
            ],
            [
                'v13_type_id' => DB::table('v13_types')->where('name', 'Paper Type')->value('id'),
                'name' => 'White Paper Color Ink'
            ],
            [
                'v13_type_id' => DB::table('v13_types')->where('name', 'Paper Type')->value('id'),
                'name' => 'Color Paper'
            ],
            [
                'v13_type_id' => DB::table('v13_types')->where('name', 'Paper Type')->value('id'),
                'name' => 'Transparencie'
            ],
            [
                'v13_type_id' => DB::table('v13_types')->where('name', 'Paper Type')->value('id'),
                'name' => 'Labels'
            ],
            [
                'v13_type_id' => DB::table('v13_types')->where('name', 'Paper Size')->value('id'),
                'name' => '8 1/2 x 11'
            ],
            [
                'v13_type_id' => DB::table('v13_types')->where('name', 'Paper Size')->value('id'),
                'name' => '8 1/2 x 14'
            ],
            [
                'v13_type_id' => DB::table('v13_types')->where('name', 'Paper Size')->value('id'),
                'name' => '11 x 17'
            ],
            [
                'v13_type_id' => DB::table('v13_types')->where('name', 'Duplex')->value('id'),
                'name' => 'One-Sided'
            ],
            [
                'v13_type_id' => DB::table('v13_types')->where('name', 'Duplex')->value('id'),
                'name' => 'Two-Sided'
            ],
            [
                'v13_type_id' => DB::table('v13_types')->where('name', 'Color')->value('id'),
                'name' => 'Blue'
            ],
            [
                'v13_type_id' => DB::table('v13_types')->where('name', 'Color')->value('id'),
                'name' => 'Red'
            ],
            [
                'v13_type_id' => DB::table('v13_types')->where('name', 'Color')->value('id'),
                'name' => 'Green'
            ],
            [
                'v13_type_id' => DB::table('v13_types')->where('name', 'Folding')->value('id'),
                'name' => 'Half'
            ],
            [
                'v13_type_id' => DB::table('v13_types')->where('name', 'Folding')->value('id'),
                'name' => 'Letter Thirds'
            ],
            [
                'v13_type_id' => DB::table('v13_types')->where('name', 'Folding')->value('id'),
                'name' => 'Z Thirds'
            ],
            [
                'v13_type_id' => DB::table('v13_types')->where('name', 'Folding')->value('id'),
                'name' => 'Other'
            ],
            [
                'v13_type_id' => DB::table('v13_types')->where('name', 'Cutting')->value('id'),
                'name' => 'Half'
            ],
            [
                'v13_type_id' => DB::table('v13_types')->where('name', 'Cutting')->value('id'),
                'name' => 'Thirds'
            ],
            [
                'v13_type_id' => DB::table('v13_types')->where('name', 'Cutting')->value('id'),
                'name' => 'Quarters'
            ],
            [
                'v13_type_id' => DB::table('v13_types')->where('name', 'Cutting')->value('id'),
                'name' => 'Other'
            ]
        ];
        // ]);


        foreach ($items as $item) {
            App\V13Option::updateOrCreate(
                [
                    'v13_type_id' => $item['v13_type_id'],
                    'name' => $item['name']
                ],
                $item);
        }

    }
}

