<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'history'       => 'Vintari Global Abadi berdiri sejak lama',
            'history_en'    => 'Vintari Global Abadi has been around for a long time',
            'visi'          => 'Memajukan putra putri indonesia',
            'visi_en'       => 'Advancing the sons and daughters of Indonesia',
            'misi'          => 'Sukses',
            'misi_en'       => 'Complete',
            'image_path'    => 'ABOUT'.Carbon::now()->format('Y/m/d').'/',
            'url_alibaba'   => 'url_alibaba.com',
            'telp'          => '087777777',
            'email'         => 'vintariglobal@vintariglobal.com',
            'product_sold'  => 100,
            'countries_sold' => 4,
            'client'        => 5,
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
    }
}
