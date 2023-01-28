<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activites')->insert([
            'title'         => 'Penjualan',
            'title_en'      => 'Sale',
            'articles'      => 'ini dijual',
            'articles_en'   => "it's for sale",
            'image_path1'   => 'ACTIVITY'.Carbon::now()->format('Y/m/d').'/',
            'image_path2'   => 'ACTIVITY'.Carbon::now()->format('Y/m/d').'/',
            'image_path3'   => 'ACTIVITY'.Carbon::now()->format('Y/m/d').'/',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);

        DB::table('activites')->insert([
            'title'         => 'Penjualan 1',
            'title_en'      => 'Sale 1',
            'articles'      => 'ini dijual 1',
            'articles_en'   => "it's for sale 1",
            'image_path1'   => 'ACTIVITY'.Carbon::now()->format('Y/m/d').'/',
            'image_path2'   => 'ACTIVITY'.Carbon::now()->format('Y/m/d').'/',
            'image_path3'   => 'ACTIVITY'.Carbon::now()->format('Y/m/d').'/',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
        DB::table('activites')->insert([
            'title'         => 'Penjualan 2',
            'title_en'      => 'Sale 2',
            'articles'      => 'ini dijual 2',
            'articles_en'   => "it's for sale 2",
            'image_path1'   => 'ACTIVITY'.Carbon::now()->format('Y/m/d').'/',
            'image_path2'   => 'ACTIVITY'.Carbon::now()->format('Y/m/d').'/',
            'image_path3'   => 'ACTIVITY'.Carbon::now()->format('Y/m/d').'/',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
    }
}
