<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class RegFormsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *            $table->string('form_id')->primary();
     * @return void
     */
    public function run()
    {
        DB::table('reg_forms')->insert([
            [
                'form_id' => '00000001',
                'room_id' => '1001',
                'user_id' => '201701054',
                'users_involved' => 'Amiel Roseller II Saballo, Janzon Jon Victorio', 
                'stime_res' => '2019-05-03 11:00:00',
                'etime_res' => '2019-05-03 18:00:00',
                'purpose' => 'SOFTEN Sprint',
                'isApproved' => '2', //0=pending, 1=approved, 2=rejected
                'isCancelled' => false,
                'created_at' => '2019/05/03 11:00:23',
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'form_id' => '00000002',
                'room_id' => '1001',
                'user_id' => '201701054',
                'users_involved' => 'Amiel Roseller II Saballo, Janzon Jon Victorio', 
                'stime_res' => '2019-05-09 12:00:00',
                'etime_res' => '2019-05-19 15:00:00',
                'purpose' => 'SOFTEN Sprint',
                'isApproved' => '0', //0=pending, 1=approved, 2=rejected
                'isCancelled' => false,
                'created_at' => '2019/05/09 12:00:00',
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'form_id' => '00000003',
                'room_id' => '902',
                'user_id' => '201701054',
                'users_involved' => 'Amiel Roseller II Saballo, Janzon Jon Victorio', 
                'stime_res' => '2019-05-04 11:00:00',
                'etime_res' => '2019-05-04 12:00:00',
                'purpose' => 'SOFTEN Sprint',
                'isApproved' => '1', //0=pending, 1=approved, 2=rejected
                'isCancelled' => false,
                'created_at' => '2019-05-04 11:00:00',
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
