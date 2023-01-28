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
            'image_path'    => 'COUNTRY'.Carbon::now()->format('Y/m/d').'/',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
        DB::table('countries')->insert([
            'name'          => 'BELANDA',
            'image_path'    => 'COUNTRY'.Carbon::now()->format('Y/m/d').'/',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
        DB::table('countries')->insert([
            'name'          => 'JEPANG',
            'image_path'    => 'COUNTRY'.Carbon::now()->format('Y/m/d').'/',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
        DB::table('countries')->insert([
            'name'          => 'KOREA',
            'image_path'    => 'COUNTRY'.Carbon::now()->format('Y/m/d').'/',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
        DB::table('countries')->insert([
            'name'          => 'MALAYSIA',
            'image_path'    => 'COUNTRY'.Carbon::now()->format('Y/m/d').'/',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
        DB::table('countries')->insert([
            'name'          => 'POLANDIA',
            'image_path'    => 'COUNTRY'.Carbon::now()->format('Y/m/d').'/',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
        DB::table('countries')->insert([
            'name'          => 'SPANYOL',
            'image_path'    => 'COUNTRY'.Carbon::now()->format('Y/m/d').'/',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
    }
}
