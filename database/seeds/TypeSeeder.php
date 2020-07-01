<?php

use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i =1;
        // DB::table('types')->insert([
        $items = [
            [
                'name' => 'Paper Type',
                'sort_order' => $i++
            ],
            [
                'name' => 'Paper Size',
                'sort_order' => $i++
            ],
            [
                'name' => 'Duplex', // Sded
                'sort_order' => $i++
            ],
            [
                'name' => 'Color',
                'sort_order' => $i++
            ],
            [
                'name' => 'Folding',
                'sort_order' => $i++
            ],
            [
                'name' => 'Cutting',
                'sort_order' => $i++
            ],
        // ]);
        ];
        foreach ($items as $item) {
            App\Type::updateOrCreate(
                [
                    'sort_order' => $item['sort_order'],
                    'name' => $item['name']
                ],
                $item);
        }
    }
}
