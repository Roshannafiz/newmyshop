<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sectionsRecords = [
            ['id' => 1, 'name' => 'Men', 'status' => 1],
            ['id' => 2, 'name' => 'Woman', 'status' => 1],
            ['id' => 3, 'name' => 'Kids', 'status' => 1]
        ];
        Section::insert($sectionsRecords);
    }
}
