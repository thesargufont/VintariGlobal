<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(ActivitySeeder::class);
        $this->call(FaqSeeder::class);
        $this->call(ProductSeeder::class);
        // $this->call([
        //     UserSeeder::class,
        //     CountrySeeder::class,
        //     CategorySeeder::class,
        //     ContactSeeder::class,
        //     BannerSeeder::class,
        //     BrandSeeder::class,
        //     AboutSeeder::class,
        //     ActivitySeeder::class,
        //     FaqSeeder::class,
        // ]);
        // $this->call(UsersTableSeeder::class);
    }
}
