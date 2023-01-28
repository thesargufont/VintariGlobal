<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
            'question'      => 'ini gimana ya?',
            'question_en'   => 'how is this?',
            'answer'        => 'ini gini cara nya',
            'answer_en'     => 'this is the way',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
        DB::table('faqs')->insert([
            'question'      => 'ini gimana ya? 1',
            'question_en'   => 'how is this? 1',
            'answer'        => 'ini gini cara nya 1',
            'answer_en'     => 'this is the way 1',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
        DB::table('faqs')->insert([
            'question'      => 'ini gimana ya? 2',
            'question_en'   => 'how is this? 2',
            'answer'        => 'ini gini cara nya 2',
            'answer_en'     => 'this is the way 2',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
        DB::table('faqs')->insert([
            'question'      => 'ini gimana ya? 3',
            'question_en'   => 'how is this? 3',
            'answer'        => 'ini gini cara nya 3',
            'answer_en'     => 'this is the way 3',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
        DB::table('faqs')->insert([
            'question'      => 'ini gimana ya? 4',
            'question_en'   => 'how is this? 4',
            'answer'        => 'ini gini cara nya 4',
            'answer_en'     => 'this is the way 4',
            'created_by'    => 1,
            'created_at'    => Carbon::now(),
            'updated_by'    => 1,
            'updated_at'    => Carbon::now()
        ]);
    }
}
