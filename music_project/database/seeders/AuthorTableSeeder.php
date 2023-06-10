<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'ma_tgia' => 1,
                'ten_tgia' => 'Y Vân',
                'hinh_tgia' => 'public/images/Yvan.jpg',
            ],
            [
                'ma_tgia' => 2,
                'ten_tgia' => 'Hoàng Thi Thơ ',
                'hinh_tgia' => 'public/images/HoangThiTho.jpg',
            ],
            [
                'ma_tgia' => 3,
                'ten_tgia' => 'nhacvietplus ',
                'hinh_tgia' => '',
            ],
            // Thêm các dòng dữ liệu khác tương tự
        ];
    
        foreach ($data as $item) {
            DB::table('tacgia')->insert($item);
        }
        //DB::table('tacgia')->delete();
    }
    
}
