<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            //iphone
            [
                "category_id" => "iphone",
                "description" => "very beautiful",
                "id" => "ip11",
                "image" => "https://cdn.tgdd.vn/Products/Images/42/153856/iphone-11-trang-200x200.jpg",
                "name" => "iPhone 11",
                "price" => "1000",
                "stock" => "100",

            ],
            [
                "category_id" => "iphone",
                "description" => "very beautiful",

                "id" => "ip12",
                "image" => "https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-xanh-la-new-2-600x600.jpg",
                "name" => "iPhone 12",
                "price" => "1000",
                "stock" => "100",

            ],
            [
                "category_id" => "iphone",
                "description" => "very beautiful",

                "id" => "ip13",
                "image" => "https://www.techone.vn/wp-content/uploads/2021/09/den-1-500x500.jpg",
                "name" => "iPhone 13",
                "price" => "1000",
                "stock" => "100",

            ],
            [
                "category_id" => "iphone",
                "description" => "very beautiful",

                "id" => "ip14",
                "image" => "https://cdn.tgdd.vn/Products/Images/42/240259/iPhone-14-thumb-tim-1-600x600.jpg",
                "name" => "iPhone 14",
                "price" => "1000",
                "stock" => "100",

            ],
            [
                "category_id" => "iphone",
                "description" => "very beautiful",

                "id" => "ip16",
                "image" => "https://cdn.xtmobile.vn/vnt_upload/product/09_2024/thumbs/600_16do_6.jpg",
                "name" => "iPhone 16",
                "price" => "1000",
                "stock" => "100",

            ],
            [
                "category_id" => "iphone",
                "description" => "very beautiful",
                "id" => "ip15",
                "image" => "https://cdn.tgdd.vn/Products/Images/42/281570/iphone-15-hong-thumb-1-600x600.jpg",
                "name" => "iPhone 15",
                "price" => "1000",

                "stock" => "100",

            ],
            [
                "category_id" => "iphone",
                "description" => "very beautiful",
                "id" => "ip14prm",
                "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLZEn1YsoP_Jjf9l9Xer3iLXRyJFVH3VJ1QQ&s",
                "name" => "iPhone 14 ProMax ",
                "price" => "1000",

                "stock" => "100",

            ],
            //ipad
            [
                "category_id" => "ipad",
                "description" => "very beautiful",
                "id" => "ipadpro",
                "image" => "https://thegioialo.vn/wp-content/uploads/2023/02/iPad-Pro-M2-11-inch-02.jpg",
                "name" => "iPad Pro",
                "price" => "1000",

                "stock" => "100",

            ],
            [
                "category_id" => "ipad",
                "description" => "very beautiful",
                "id" => "ipadair",
                "image" => "https://cdn2.cellphones.com.vn/insecure/rs:fill:0:358/q:90/plain/https://cellphones.com.vn/media/catalog/product/i/p/ipad-air-6-m2-11-inch_9_.jpg",
                "name" => "iPad Air",
                "price" => "1000",

                "stock" => "100",

            ],
            [
                "category_id" => "ipad",
                "description" => "very beautiful",
                "id" => "ipadplus",
                "image" => "https://www.adorama.com/images/Large/ACMU0Y2LLA.jpg",
                "name" => "iPad Plus",
                "price" => "1000",

                "stock" => "100",

            ],
            [
                "category_id" => "ipad",
                "description" => "very beautiful",
                "id" => "ipad",
                "image" => "https://cdn2.cellphones.com.vn/insecure/rs:fill:0:358/q:90/plain/https://cellphones.com.vn/media/catalog/product/i/p/ipad-10-9-inch-2022.png",
                "name" => "iPad",
                "price" => "1000",

                "stock" => "100",

            ],
            //airpod
            [
                "category_id" => "airpods",
                "description" => "very beautiful",
                "id" => "airpods4",
                "image" => "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/airpods-4-hero-select-202409_FMT_WHH?wid=752&hei=636&fmt=jpeg&qlt=90&.v=1725502960389",
                "name" => "AirPods 4",
                "price" => "1000",

                "stock" => "100",

            ],
            [
                "category_id" => "airpods",
                "description" => "very beautiful",
                "id" => "airpods2",
                "image" => "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MV7N2?wid=1144&hei=1144&fmt=jpeg&qlt=95&.v=1551489688005",
                "name" => "AirPods 2",
                "price" => "1000",

                "stock" => "100",

            ],
            [
                "category_id" => "airpods",
                "description" => "very beautiful",
                "id" => "airpodspro",
                "image" => "https://cdn.tgdd.vn/Files/2022/09/07/1465768/h2-airpod_1280x720-800-resize.jpg",
                "name" => "AirPods Pro",
                "price" => "1000",

                "stock" => "100",

            ],
            [
                "category_id" => "airpods",
                "description" => "very beautiful",
                "id" => "airpodsmax",
                "image" => "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/airpods-max-select-spacegray-202011_FV1_FMT_WHH?wid=940&hei=800&fmt=jpeg&qlt=90&.v=1604776025000",
                "name" => "AirPods Max",
                "price" => "1000",

                "stock" => "100",

            ],

            //watch
            [
                "category_id" => "watch",
                "description" => "very beautiful",
                "id" => "applews10",
                "image" => "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/s10-case-unselect-gallery-1-202409_FMT_WHH?wid=752&hei=720&fmt=p-jpg&qlt=80&.v=1724620929305",
                "name" => "Apple Watch Series 10",
                "price" => "1000",

                "stock" => "100",

            ],
            [

                "category_id" => "watch",
                "description" => "very beautiful",
                "id" => "applewu2",
                "image" => "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/ultra-band-unselect-gallery-1-202309_GEO_VN_FMT_WHH?wid=752&hei=720&fmt=p-jpg&qlt=80&.v=1693544672916",
                "name" => "Apple Watch Ultra 2",

                "price" => "1000",

                "stock" => "100",

            ],
            [
                "category_id" => "watch",
                "description" => "very beautiful",
                "id" => "applewse",
                "image" => "https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/MT3D3ref_VW_34FR+watch-case-44-aluminum-midnight-nc-se_VW_34FR+watch-face-44-aluminum-midnight-se_VW_34FR?wid=752&hei=720&bgc=fafafa&trim=1&fmt=p-jpg&qlt=80&.v=ajJYOEQxYjNlejNwbWNnSU16d0NYaWhSbVIzRFJTYlp1MEk4OWNDaTcvNTlEbzMrd1Z5SUpEd0hiT0ZLRlZGNGRCU0luK254NGZZeFNSZCtCaXAxdG5LTGp0WU11cGJPRVJHSFVxWTAxK1diaytyMkV2UXJqeE9wOUlGWnU0cExJQ3VXcFZIUHhBMlU5OU5QT1pyZjQ3WlBtR0ZPUkFPYlc1NC9nRzhiVTZUYlg5SUJPR0VaZnV5YVlTck5WQzFJWitOTEs5T0laM0FBYmtOdWx0aUJtTm5YU0ZMdUpkZktWZmlmcG5VMHJzOD0=",
                "name" => "Apple Watch SE",

                "price" => "1000",

                "stock" => "100",

            ],
            [
                "category_id" => "watch",
                "description" => "very beautiful",
                "id" => "applewnike",
                "image" => "https://static.nike.com/a/images/f_auto,cs_srgb/w_1536,c_limit/bd001ee3-39a4-45d4-939c-125ad1e926ba/apple-watch-nike.jpg",
                "name" => "Apple Watch Watch Nike",

                "price" => "1000",

                "stock" => "100",

            ],
            //macbook
            [
                "category_id" => "macbook",
                "description" => "very beautiful",
                "id" => "macbookairm2",
                "image" => "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/mba13-midnight-select-202402?wid=904&hei=840&fmt=jpeg&qlt=90&.v=1708367688034",
                "name" => "Macbook Air M2",

                "price" => "1000",

                "stock" => "100",

            ],
            [
                "category_id" => "macbook",
                "description" => "very beautiful",
                "id" => "macbookairm3",
                "image" => "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/mba13-silver-select-202402?wid=1200&hei=630&fmt=jpeg&qlt=95&.v=1708367688030",
                "name" => "Macbook Air M3",

                "price" => "1000",

                "stock" => "100",

            ],
            [
                "category_id" => "macbook",
                "description" => "very beautiful",
                "id" => "macbookprom2",
                "image" => "https://nguyencongpc.vn/media/product/22899-macboook.png",
                "name" => "Macbook Pro M2",

                "price" => "1000",

                "stock" => "100",

            ],
            [
                "category_id" => "macbook",
                "description" => "very beautiful",
                "id" => "macbookprom3",
                "image" => "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/mbp14-m3-max-pro-spaceblack-select-202310?wid=904&hei=840&fmt=jpeg&qlt=90&.v=1697230830118",
                "name" => "Macbook Pro M3",

                "price" => "1000",

                "stock" => "100",

            ],
        ]);
    }
}