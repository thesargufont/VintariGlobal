<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            'name'          => 'INDONESIA',
            'name_EN'          => 'english',
            'image_path'    => 'COUNTRY'.Carbon::now()->format('Y/m/d').'/',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
        DB::table('countries')->insert([
            'name'          => 'BELANDA',
            'name_EN'          => 'english',
            'image_path'    => 'COUNTRY'.Carbon::now()->format('Y/m/d').'/',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
        DB::table('countries')->insert([
            'name'          => 'JEPANG',
            'name_EN'          => 'english',
            'image_path'    => 'COUNTRY'.Carbon::now()->format('Y/m/d').'/',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
        DB::table('countries')->insert([
            'name'          => 'KOREA',
            'name_EN'          => 'english',
            'image_path'    => 'COUNTRY'.Carbon::now()->format('Y/m/d').'/',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
        DB::table('countries')->insert([
            'name'          => 'MALAYSIA',
            'name_EN'          => 'english',
            'image_path'    => 'COUNTRY'.Carbon::now()->format('Y/m/d').'/',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
        DB::table('countries')->insert([
            'name'          => 'POLANDIA',
            'name_EN'          => 'english',
            'image_path'    => 'COUNTRY'.Carbon::now()->format('Y/m/d').'/',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
        DB::table('countries')->insert([
            'name'          => 'SPANYOL',
            'name_EN'          => 'english',
            'image_path'    => 'COUNTRY'.Carbon::now()->format('Y/m/d').'/',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
    }
}
