<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create();
        // foreach(range(1,20) as $index) {
        //    DB::table('theloai')->insert([
        //         'ma_tloai' => $index,
        //         'ten_tloai' => $faker->sentence(5)
        //     ]);
        // }
        $data = [
            [
                'ma_tloai' => 1,
                'ten_tloai' => 'nhac tru tinh',
                
            ],
            [
                'ma_tloai' => 2,
                'ten_tloai' => 'nhac pop',
                
            ],
            [
                'ma_tloai' => 3,
                'ten_tloai' => 'nhac blues',
                
            ],
            // Thêm các dòng dữ liệu khác tương tự
        ];
    
        foreach ($data as $item) {
            DB::table('theloai')->insert($item);
        }
        //DB::table('theloai')->delete();
    }
}
