<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name'          => 'MAKANAN (CEMILAN)',
            'name_en'       => 'FOOD (SNACK)',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
        DB::table('categories')->insert([
            'name'          => 'MINUMAN',
            'name_en'       => 'DRINK',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
        DB::table('categories')->insert([
            'name'          => 'PERLENGKAPAN MANDI',
            'name_en'       => 'TOILETRIES',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
    }
}
