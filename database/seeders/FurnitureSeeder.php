<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class FurnitureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('furnitures')->truncate();
        DB::table('furnitures')->insert([
            [
                'id' => 1,
                'code' => 'NT1',
                'name' => 'Sofa',
                'price' => 300000,
                'avatar' => 'https://www.google.com.vn/url?sa=i&url=https%3A%2F%2Fsofachinhhang.com%2Fhuong-dan-cach-nhan-biet-sofa-cao-cap-dat-tien-tt7398.html&psig=AOvVaw1-V07uhV__fgmqtwAGiXx4&ust=1629996490426000&source=images&cd=vfe&ved=0CAoQjRxqFwoTCJiTnKDQzPICFQAAAAAdAAAAABAn',
                'created_at' => Carbon::now()
            ], [
                'id' => 2,
                'code' => 'NT2',
                'name' => 'Tea table',
                'price' => 10000,
                'avatar' => 'https://www.google.com.vn/url?sa=i&url=https%3A%2F%2Fvilahome.com.vn%2Ftop-3-ban-tra-tron-dep-va-hien-dai%2F&psig=AOvVaw3D8xn25qwVjhYKE0DFTQNM&ust=1629996694915000&source=images&cd=vfe&ved=0CAoQjRxqFwoTCMCG1oXRzPICFQAAAAAdAAAAABAE',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 1,
                'code' => 'NT3',
                'name' => 'TV shelf',
                'price' => 150000,
                'avatar' => 'https://www.google.com.vn/url?sa=i&url=https%3A%2F%2Fsofaphongkhachdep.com.vn%2Fdanh-muc%2Fnoi-that-khac%2Fke-tivi%2F&psig=AOvVaw2hoNVmgPrAiUtuDH4daz4t&ust=1629996861850000&source=images&cd=vfe&ved=0CAoQjRxqFwoTCODKuPfSzPICFQAAAAAdAAAAABAK',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 1,
                'code' => 'NT4',
                'name' => 'Kitchen Cabinets',
                'price' => 20000,
                'avatar' => 'https://www.google.com.vn/url?sa=i&url=https%3A%2F%2Facado.vn%2Fnoi-that-tu-bep-uy-tin-gia-re%2F&psig=AOvVaw3PfgwjNJ_MkzRgLIhRb8Lg&ust=1629997169064000&source=images&cd=vfe&ved=0CAoQjRxqFwoTCJj2l-TSzPICFQAAAAAdAAAAABAt',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 1,
                'code' => 'NT5',
                'name' => 'Dining table',
                'price' => 60000,
                'avatar' => 'https://www.google.com.vn/url?sa=i&url=https%3A%2F%2Ffurnibuy.com%2Fbo-ban-an-10-ghe-dep-ban-chay%2F&psig=AOvVaw3uQDwjyg9_s-9ylJxQCIYB&ust=1629997289465000&source=images&cd=vfe&ved=0CAoQjRxqFwoTCOi_qp3TzPICFQAAAAAdAAAAABAV',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 1,
                'code' => 'NT6',
                'name' => 'Bed  ',
                'price' => 150000,
                'avatar' => 'https://www.google.com.vn/url?sa=i&url=http%3A%2F%2Fsofabella.vn%2F5-thiet-ke-giuong-ngu-dat-nhat-the-gioi%2F&psig=AOvVaw1O8BYWWueI6ZRdtX1c73g7&ust=1629997343240000&source=images&cd=vfe&ved=0CAoQjRxqFwoTCKj_rLjTzPICFQAAAAAdAAAAABAp',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 1,
                'code' => 'NT7',
                'name' => 'Wardrobe',
                'price' => 25000,
                'avatar' => 'https://www.google.com.vn/url?sa=i&url=https%3A%2F%2Fcafebiz.vn%2Fchon-tu-quan-ao-dung-phong-thuy-cho-nha-thinh-vuong-hanh-phuc-ben-lau-20180806173155071.chn&psig=AOvVaw20w2zXEylqWjv5KiNXpHYn&ust=1629997431383000&source=images&cd=vfe&ved=0CAoQjRxqFwoTCLCYiuHTzPICFQAAAAAdAAAAABA6',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 1,
                'code' => 'NT8',
                'name' => 'Bedside Tab',
                'price' => 2000,
                'avatar' => 'https://www.google.com.vn/imgres?imgurl=https%3A%2F%2Fdecoxdesign.com%2Fupload%2Fimages%2Ftu-dau-giuong-pn-15-decox-design.jpg&imgrefurl=https%3A%2F%2Fdecoxdesign.com%2Ftu-dau-giuong.html&tbnid=4a_ggKpZTeTnkM&vet=12ahUKEwiv_OCJ1MzyAhV42nMBHduCCWUQMygHegUIARC2AQ..i&docid=xupog6TLMl85_M&w=900&h=900&q=%E1%BA%A3nh%20Tab%20%C4%91%E1%BA%A7u%20gi%C6%B0%E1%BB%9Dng%20%C4%91%E1%BA%AFt%20ti%E1%BB%81n&ved=2ahUKEwiv_OCJ1MzyAhV42nMBHduCCWUQMygHegUIARC2AQ',
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
