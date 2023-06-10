<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Author;
use App\Models\Category;

class ArticleTableSeeder extends Seeder
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
                'ma_bviet' => 1,
                'tieude' => '60 năm cuộc đời',
                'ten_bhat'=>'60 năm cuộc đời',
                'ma_tloai'=>1,
                'tomtat'=>'Em ơi có bao nhiêu? Sáu mươi năm cuộc đời. Hai mươi năm đầu, sung sướng không bao lâu Hai mươi năm sau, sầu vương cao vời vợi Hai mươi năm cuối là bao',
                'noidung'=>'Ơ là thế. đời sống không được bao, Ơ là bao. đời không lâu là thế. Ơ được bao năm hãy sống mà yêu nhau',
                'ma_tgia'=>1,
                'ngayviet'=>'1992-11-28',
                'hinhanh' => 'public/images/songs/60-nam.jpg',
            ],
            [
                'ma_bviet' => 2,
                'tieude' => 'Lòng mẹ',
                'ten_bhat'=>'Lòng mẹ',
                'ma_tloai'=>1,
                'tomtat'=>'Và mẹ ơi đừng khóc nhé! Cả đời này mẹ đã khóc nhiều lắm rồi, hãy cười lên vì con đã trưởng thành! Con sẽ lại về dậy sớm nấu cơm cho mẹ, nấu nước cho mẹ tắm như ngày xưa. “Dù cho vai nắng nhưng lòng thương chẳng nhạt màu, vẫn mơ quay về vui vầy dưới bóng mẹ yêu”',
                'noidung'=>'',
                'ma_tgia'=>1,
                'ngayviet'=>'2012-07-23',
                'hinhanh' => 'public/images/songs/longme2.jpg',
            ],
            [
                'ma_bviet' => 3,
                'tieude' => 'Hard Rock Hallelujah',
                'ten_bhat'=>'Hard Rock Hallelujah',
                'ma_tloai'=>2,
                'tomtat'=>'Những linh hồn đang lạc lối, mù quáng mất phương hướng trong cõi trần gian đầy nghiệt ngã hãy nên lắng nghe \"Hard Rock Hallelujah\" để có thể quên tất cả mọi thứ để tìm về đúng bản chất sâu thẳm nhất trong tâm hồn chính mình!',
                'noidung'=>'',
                'ma_tgia'=>3,
                'ngayviet'=>'2013-09-12',
                'hinhanh' => 'public/images/songs/hardrock.jpg',
            ],
            [
                'ma_bviet' => 4,
                'tieude' => 'Nơi tình yêu bắt đầu',
                'ten_bhat'=>'Nơi tình yêu bắt đầu',
                'ma_tloai'=>1,
                'tomtat'=>'Nhiều người sẽ nghĩ làm gì có yêu nhất và làm gì có yêu mãi. Ừ! Chẳng có gì là mãi mãi cả, vì chúng ta không trường tồn vĩnh cửu',
                'noidung'=>'',
                'ma_tgia'=>1,
                'ngayviet'=>'2014-02-03',
                'hinhanh' => 'public/images/songs/th.jpg',
            ],
            // Thêm các dòng dữ liệu khác tương tự
        ];
    
        foreach ($data as $item) {
            DB::table('baiviet')->insert($item);
        }
        //DB::table('baiviet')->delete();
    }
    
}
