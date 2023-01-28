<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            'header'        => 'Ini Trial 1',
            'header_en'     => 'This is Trial 1',
            'desc1'         => 'Coba data 1',
            'desc1_en'      => 'Try data 1',
            'desc2'         => 'Coba data 1-2',
            'desc2_en'      => 'Try data 1-2',
            'image_path'    => 'BANNER'.Carbon::now()->format('Y/m/d').'/',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
        DB::table('banners')->insert([
            'header'        => 'Ini Trial 2',
            'header_en'     => 'This is Trial 2',
            'desc1'         => 'Coba data 2',
            'desc1_en'      => 'Try data 2',
            'desc2'         => 'Coba data 2-2',
            'desc2_en'      => 'Try data 2-2',
            'image_path'    => 'BANNER'.Carbon::now()->format('Y/m/d').'/',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
        DB::table('banners')->insert([
            'header'        => 'Ini Trial 3',
            'header_en'     => 'This is Trial 3',
            'desc1'         => 'Coba data 3',
            'desc1_en'      => 'Try data 3',
            'desc2'         => 'Coba data 3-2',
            'desc2'         => 'Try data 3-2',
            'image_path'    => 'BANNER'.Carbon::now()->format('Y/m/d').'/',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
        DB::table('banners')->insert([
            'header'        => 'Ini Trial 4',
            'header_en'     => 'This is Trial 4',
            'desc1'         => 'Coba data 4',
            'desc1_en'      => 'Try data 4',
            'desc2'         => 'Coba data 4-2',
            'desc2'         => 'Try data 4-2',
            'image_path'    => 'BANNER'.Carbon::now()->format('Y/m/d').'/',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
        DB::table('banners')->insert([
            'header'        => 'Ini Trial 5',
            'header_en'     => 'This is Trial 5',
            'desc1'         => 'Coba data 5',
            'desc1_en'      => 'Try data 5',
            'desc2'         => 'Coba data 5-2',
            'desc2'         => 'Try data 5-2',
            'image_path'    => 'BANNER'.Carbon::now()->format('Y/m/d').'/',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
    }
}
