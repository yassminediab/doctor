<?php

use Illuminate\Database\Seeder;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Link::create([
            'link' => '#',
            'title' => 'فوائد واضرار الكريسترول'
        ]);
    }
}
