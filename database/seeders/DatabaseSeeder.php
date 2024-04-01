<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Seed admin_info table
        $data = [
            [
                'admin_id' => 1,
                'admin_name' => 'admin',
                'admin_email' => 'admin@gmail.com',
                'admin_password' => '25f9e794323b453885f5181f1b624d0b',
            ]
        ];
        DB::table('admin_info')->insert($data);

        // Seed brands table
        DB::table('brands')->insert([
            ['brand_id' => 1, 'brand_title' => 'HP'],
            ['brand_id' => 2, 'brand_title' => 'Samsung'],
            ['brand_id' => 3, 'brand_title' => 'Apple'],
            ['brand_id' => 4, 'brand_title' => 'motorolla'],
            ['brand_id' => 5, 'brand_title' => 'LG'],
            ['brand_id' => 6, 'brand_title' => 'Cloth Brand'],
        ]);

        // Seed cart table
        $data = [
            ['id' => 6, 'p_id' => 26, 'ip_add' => '::1', 'user_id' => 4, 'qty' => 1],
            ['id' => 9, 'p_id' => 10, 'ip_add' => '::1', 'user_id' => 7, 'qty' => 1],
            ['id' => 10, 'p_id' => 11, 'ip_add' => '::1', 'user_id' => 7, 'qty' => 1],
            ['id' => 11, 'p_id' => 45, 'ip_add' => '::1', 'user_id' => 7, 'qty' => 1],
            ['id' => 44, 'p_id' => 5, 'ip_add' => '::1', 'user_id' => 3, 'qty' => 0],
            ['id' => 46, 'p_id' => 2, 'ip_add' => '::1', 'user_id' => 3, 'qty' => 0],
            ['id' => 48, 'p_id' => 72, 'ip_add' => '::1', 'user_id' => 3, 'qty' => 0],
            ['id' => 49, 'p_id' => 60, 'ip_add' => '::1', 'user_id' => 8, 'qty' => 1],
            ['id' => 50, 'p_id' => 61, 'ip_add' => '::1', 'user_id' => 8, 'qty' => 1],
            ['id' => 51, 'p_id' => 1, 'ip_add' => '::1', 'user_id' => 8, 'qty' => 1],
            ['id' => 52, 'p_id' => 5, 'ip_add' => '::1', 'user_id' => 9, 'qty' => 1],
            ['id' => 53, 'p_id' => 2, 'ip_add' => '::1', 'user_id' => 14, 'qty' => 1],
            ['id' => 54, 'p_id' => 3, 'ip_add' => '::1', 'user_id' => 14, 'qty' => 1],
            ['id' => 55, 'p_id' => 5, 'ip_add' => '::1', 'user_id' => 14, 'qty' => 1],
            ['id' => 56, 'p_id' => 1, 'ip_add' => '::1', 'user_id' => 9, 'qty' => 1],
            ['id' => 57, 'p_id' => 2, 'ip_add' => '::1', 'user_id' => 9, 'qty' => 1],
            ['id' => 71, 'p_id' => 61, 'ip_add' => '127.0.0.1', 'user_id' => -1, 'qty' => 1],
        ];
        DB::table('carts')->insert($data);

        // Seed categories table
        $data = [
            ['cat_id' => 1, 'cat_title' => 'Electronics'],
            ['cat_id' => 2, 'cat_title' => 'Ladies Wears'],
            ['cat_id' => 3, 'cat_title' => 'Mens Wear'],
            ['cat_id' => 4, 'cat_title' => 'Kids Wear'],
            ['cat_id' => 5, 'cat_title' => 'Furnitures'],
            ['cat_id' => 6, 'cat_title' => 'Home Appliances'],
            ['cat_id' => 7, 'cat_title' => 'Electronics Gadgets'],
        ];
        DB::table('categories')->insert($data);

        // Seed email_info table
        $data = [
            ['email_id' => 3, 'email' => 'admin@gmail.com'],
            ['email_id' => 4, 'email' => 'puneethreddy951@gmail.com'],
            ['email_id' => 5, 'email' => 'puneethreddy@gmail.com'],
        ];
        DB::table('email_info')->insert($data);

        // Seed orders table
        $data = [
            ['order_id' => 1, 'user_id' => 12, 'product_id' => 7, 'qty' => 1, 'trx_id' => '07M47684BS5725041', 'p_status' => 'Completed'],
            ['order_id' => 2, 'user_id' => 14, 'product_id' => 2, 'qty' => 1, 'trx_id' => '07M47684BS5725041', 'p_status' => 'Completed'],
        ];
        DB::table('orders')->insert($data);

        // Seed orders_info table
        $data = [
            [
                'order_id' => 1,
                'user_id' => 12,
                'f_name' => 'Puneeth',
                'email' => 'puneethreddy951@gmail.com',
                'address' => 'Bangalore, Kumbalagodu, Karnataka',
                'city' => 'Bangalore',
                'state' => 'Karnataka',
                'zip' => 560074,
                'cardname' => 'pokjhgfcxc',
                'cardnumber' => '4321 2345 6788 7654',
                'expdate' => '12/90',
                'prod_count' => 3,
                'total_amt' => 77000,
                'cvv' => 1234,
            ],
        ];
        DB::table('orders_info')->insert($data);

        // Seed order_products table
        $data = [
            ['order_pro_id' => 73, 'order_id' => 1, 'product_id' => 1, 'qty' => 1, 'amt' => 5000],
            ['order_pro_id' => 74, 'order_id' => 1, 'product_id' => 4, 'qty' => 2, 'amt' => 64000],
            ['order_pro_id' => 75, 'order_id' => 1, 'product_id' => 8, 'qty' => 1, 'amt' => 40000],
        ];
        DB::table('order_products')->insert($data);

        // Seed products table
        $data = [
            [
                "product_id"=> "1",
                "product_cat"=> "1",
                "product_brand"=> "2",
                "product_title"=> "Samsung galaxy s7 edge",
                "product_price"=> "5000",
                "product_desc"=> "Samsung galaxy s7 edge",
                "product_image"=> "product07.png",
                "product_keywords"=> "samsung mobile electronics"
            ],
            [
                "product_id"=> "2",
                "product_cat"=> "1",
                "product_brand"=> "3",
                "product_title"=> "iPhone 5s",
                "product_price"=> "25000",
                "product_desc"=> "iphone 5s",
                "product_image"=> "http___pluspng.com_img-png_iphone-hd-png-iphone-apple-png-file-550.png",
                "product_keywords"=> "mobile iphone apple"
            ],
            [
                "product_id"=> "3",
                "product_cat"=> "1",
                "product_brand"=> "3",
                "product_title"=> "iPad air 2",
                "product_price"=> "30000",
                "product_desc"=> "ipad apple brand",
                "product_image"=> "da4371ffa192a115f922b1c0dff88193.png",
                "product_keywords"=> "apple ipad tablet"
            ],
            [
                "product_id"=> "4",
                "product_cat"=> "1",
                "product_brand"=> "3",
                "product_title"=> "iPhone 6s",
                "product_price"=> "32000",
                "product_desc"=> "Apple iPhone ",
                "product_image"=> "http___pluspng.com_img-png_iphone-6s-png-iphone-6s-gold-64gb-1000.png",
                "product_keywords"=> "iphone apple mobile"
            ],
            [
                "product_id"=> "5",
                "product_cat"=> "1",
                "product_brand"=> "2",
                "product_title"=> "iPad 2",
                "product_price"=> "10000",
                "product_desc"=> "samsung ipad",
                "product_image"=> "iPad-air.png",
                "product_keywords"=> "ipad tablet samsung"
            ],
            [
                "product_id"=> "6",
                "product_cat"=> "1",
                "product_brand"=> "1",
                "product_title"=> "samsung Laptop r series",
                "product_price"=> "35000",
                "product_desc"=> "samsung Black combination Laptop",
                "product_image"=> "laptop_PNG5939.png",
                "product_keywords"=> "samsung laptop"
            ],
            [
                "product_id"=> "7",
                "product_cat"=> "1",
                "product_brand"=> "1",
                "product_title"=> "Laptop Pavillion",
                "product_price"=> "50000",
                "product_desc"=> "Laptop Hp Pavillion",
                "product_image"=> "laptop_PNG5930.png",
                "product_keywords"=> "Laptop Hp Pavillion"
            ],
            [
                "product_id"=> "8",
                "product_cat"=> "1",
                "product_brand"=> "4",
                "product_title"=> "Sony",
                "product_price"=> "40000",
                "product_desc"=> "Sony Mobile",
                "product_image"=> "530201353846AM_635_sony_xperia_z.png",
                "product_keywords"=> "sony mobile"
            ],
            [
                "product_id"=> "9",
                "product_cat"=> "1",
                "product_brand"=> "3",
                "product_title"=> "iPhone New",
                "product_price"=> "12000",
                "product_desc"=> "iphone",
                "product_image"=> "iphone-hd-png-iphone-apple-png-file-550.png",
                "product_keywords"=> "iphone apple mobile"
            ],
            [
                "product_id"=> "10",
                "product_cat"=> "2",
                "product_brand"=> "6",
                "product_title"=> "Red Ladies dress",
                "product_price"=> "1000",
                "product_desc"=> "red dress for girls",
                "product_image"=> "red dress.jpg",
                "product_keywords"=> "red dress"
            ],
            [
                "product_id"=> "11",
                "product_cat"=> "2",
                "product_brand"=> "6",
                "product_title"=> "Blue Heave dress",
                "product_price"=> "1200",
                "product_desc"=> "Blue dress",
                "product_image"=> "images.jpg",
                "product_keywords"=> "blue dress cloths"
            ],
            [
                "product_id"=> "12",
                "product_cat"=> "2",
                "product_brand"=> "6",
                "product_title"=> "Ladies Casual Cloths",
                "product_price"=> "1500",
                "product_desc"=> "ladies casual summer two colors pleted",
                "product_image"=> "7475-ladies-casual-dresses-summer-two-colors-pleated.jpg",
                "product_keywords"=> "girl dress cloths casual"
            ],
            [
                "product_id"=> "13",
                "product_cat"=> "2",
                "product_brand"=> "6",
                "product_title"=> "SpringAutumnDress",
                "product_price"=> "1200",
                "product_desc"=> "girls dress",
                "product_image"=> "Spring-Autumn-Winter-Young-Ladies-Casual-Wool-Dress-Women-s-One-Piece-Dresse-Dating-Clothes-Medium.jpg_640x640.jpg",
                "product_keywords"=> "girl dress"
            ],
            [
                "product_id"=> "14",
                "product_cat"=> "2",
                "product_brand"=> "6",
                "product_title"=> "Casual Dress",
                "product_price"=> "1400",
                "product_desc"=> "girl dress",
                "product_image"=> "download.jpg",
                "product_keywords"=> "ladies cloths girl"
            ],
            [
                "product_id"=> "15",
                "product_cat"=> "2",
                "product_brand"=> "6",
                "product_title"=> "Formal Look",
                "product_price"=> "1500",
                "product_desc"=> "girl dress",
                "product_image"=> "shutterstock_203611819.jpg",
                "product_keywords"=> "ladies wears dress girl"
            ],
            [
                "product_id"=> "16",
                "product_cat"=> "3",
                "product_brand"=> "6",
                "product_title"=> "Sweter for men",
                "product_price"=> "600",
                "product_desc"=> "2012-Winter-Sweater-for-Men-for-better-outlook",
                "product_image"=> "2012-Winter-Sweater-for-Men-for-better-outlook.jpg",
                "product_keywords"=> "black sweter cloth winter"
            ],
            [
                "product_id"=> "17",
                "product_cat"=> "3",
                "product_brand"=> "6",
                "product_title"=> "Gents formal",
                "product_price"=> "1000",
                "product_desc"=> "gents formal look",
                "product_image"=> "gents-formal-250x250.jpg",
                "product_keywords"=> "gents wear cloths"
            ],
            [
                "product_id"=> "19",
                "product_cat"=> "3",
                "product_brand"=> "6",
                "product_title"=> "Formal Coat",
                "product_price"=> "3000",
                "product_desc"=> "ad",
                "product_image"=> "images (1).jpg",
                "product_keywords"=> "coat blazer gents"
            ],
            [
                "product_id"=> "20",
                "product_cat"=> "3",
                "product_brand"=> "6",
                "product_title"=> "Mens Sweeter",
                "product_price"=> "1600",
                "product_desc"=> "jg",
                "product_image"=> "Winter-fashion-men-burst-sweater.png",
                "product_keywords"=> "sweeter gents"
            ],
            [
                "product_id"=> "21",
                "product_cat"=> "3",
                "product_brand"=> "6",
                "product_title"=> "T shirt",
                "product_price"=> "800",
                "product_desc"=> "ssds",
                "product_image"=> "IN-Mens-Apparel-Voodoo-Tiles-09._V333872612_.jpg",
                "product_keywords"=> "formal t shirt black"
            ],
            [
                "product_id"=> "22",
                "product_cat"=> "4",
                "product_brand"=> "6",
                "product_title"=> "Yellow T shirt ",
                "product_price"=> "1300",
                "product_desc"=> "yello t shirt with pant",
                "product_image"=> "1.0x0.jpg",
                "product_keywords"=> "kids yellow t shirt"
            ],
            [
                "product_id"=> "23",
                "product_cat"=> "4",
                "product_brand"=> "6",
                "product_title"=> "Girls cloths",
                "product_price"=> "1900",
                "product_desc"=> "sadsf",
                "product_image"=> "GirlsClothing_Widgets.jpg",
                "product_keywords"=> "formal kids wear dress"
            ],
            [
                "product_id"=> "24",
                "product_cat"=> "4",
                "product_brand"=> "6",
                "product_title"=> "Blue T shirt",
                "product_price"=> "700",
                "product_desc"=> "g",
                "product_image"=> "images.jpg",
                "product_keywords"=> "kids dress"
            ],
            [
                "product_id"=> "25",
                "product_cat"=> "4",
                "product_brand"=> "6",
                "product_title"=> "Yellow girls dress",
                "product_price"=> "750",
                "product_desc"=> "as",
                "product_image"=> "images (3).jpg",
                "product_keywords"=> "yellow kids dress"
            ],
            [
                "product_id"=> "27",
                "product_cat"=> "4",
                "product_brand"=> "6",
                "product_title"=> "Formal look",
                "product_price"=> "690",
                "product_desc"=> "sd",
                "product_image"=> "image28.jpg",
                "product_keywords"=> "formal kids dress"
            ],
            [
                "product_id"=> "32",
                "product_cat"=> "5",
                "product_brand"=> "0",
                "product_title"=> "Book Shelf",
                "product_price"=> "2500",
                "product_desc"=> "book shelf",
                "product_image"=> "furniture-book-shelf-250x250.jpg",
                "product_keywords"=> "book shelf furniture"
            ],
            [
                "product_id"=> "33",
                "product_cat"=> "6",
                "product_brand"=> "2",
                "product_title"=> "Refrigerator",
                "product_price"=> "35000",
                "product_desc"=> "Refrigerator",
                "product_image"=> "CT_WM_BTS-BTC-AppliancesHome_20150723.jpg",
                "product_keywords"=> "refrigerator samsung"
            ],
            [
                "product_id"=> "34",
                "product_cat"=> "6",
                "product_brand"=> "4",
                "product_title"=> "Emergency Light",
                "product_price"=> "1000",
                "product_desc"=> "Emergency Light",
                "product_image"=> "emergency light.JPG",
                "product_keywords"=> "emergency light"
            ],
            [
                "product_id"=> "35",
                "product_cat"=> "6",
                "product_brand"=> "0",
                "product_title"=> "Vaccum Cleaner",
                "product_price"=> "6000",
                "product_desc"=> "Vaccum Cleaner",
                "product_image"=> "images (2).jpg",
                "product_keywords"=> "Vaccum Cleaner"
            ],
            [
                "product_id"=> "36",
                "product_cat"=> "6",
                "product_brand"=> "5",
                "product_title"=> "Iron",
                "product_price"=> "1500",
                "product_desc"=> "gj",
                "product_image"=> "iron.JPG",
                "product_keywords"=> "iron"
            ],
            [
                "product_id"=> "37",
                "product_cat"=> "6",
                "product_brand"=> "5",
                "product_title"=> "LED TV",
                "product_price"=> "20000",
                "product_desc"=> "LED TV",
                "product_image"=> "images (4).jpg",
                "product_keywords"=> "led tv lg"
            ],
            [
                "product_id"=> "38",
                "product_cat"=> "6",
                "product_brand"=> "4",
                "product_title"=> "Microwave Oven",
                "product_price"=> "3500",
                "product_desc"=> "Microwave Oven",
                "product_image"=> "images.jpg",
                "product_keywords"=> "Microwave Oven"
            ],
            [
                "product_id"=> "39",
                "product_cat"=> "6",
                "product_brand"=> "5",
                "product_title"=> "Mixer Grinder",
                "product_price"=> "2500",
                "product_desc"=> "Mixer Grinder",
                "product_image"=> "singer-mixer-grinder-mg-46-medium_4bfa018096c25dec7ba0af40662856ef.jpg",
                "product_keywords"=> "Mixer Grinder"
            ],
            [
                "product_id"=> "40",
                "product_cat"=> "2",
                "product_brand"=> "6",
                "product_title"=> "Formal girls dress",
                "product_price"=> "3000",
                "product_desc"=> "Formal girls dress",
                "product_image"=> "girl-walking.jpg",
                "product_keywords"=> "ladies"
            ],
            [
                "product_id"=> "45",
                "product_cat"=> "1",
                "product_brand"=> "2",
                "product_title"=> "Samsung Galaxy Note 3",
                "product_price"=> "10000",
                "product_desc"=> "0",
                "product_image"=> "samsung_galaxy_note3_note3neo.JPG",
                "product_keywords"=> "samsung galaxy Note 3 neo"
            ],
            [
                "product_id"=> "46",
                "product_cat"=> "1",
                "product_brand"=> "2",
                "product_title"=> "Samsung Galaxy Note 3",
                "product_price"=> "10000",
                "product_desc"=> "",
                "product_image"=> "samsung_galaxy_note3_note3neo.JPG",
                "product_keywords"=> "samsung galxaxy note 3 neo"
            ],
            [
                "product_id"=> "47",
                "product_cat"=> "4",
                "product_brand"=> "6",
                "product_title"=> "Laptop",
                "product_price"=> "650",
                "product_desc"=> "nbk",
                "product_image"=> "product01.png",
                "product_keywords"=> "Dell Laptop"
            ],
            [
                "product_id"=> "48",
                "product_cat"=> "1",
                "product_brand"=> "7",
                "product_title"=> "Headphones",
                "product_price"=> "250",
                "product_desc"=> "Headphones",
                "product_image"=> "product05.png",
                "product_keywords"=> "Headphones Sony"
            ],
            [
                "product_id"=> "49",
                "product_cat"=> "1",
                "product_brand"=> "7",
                "product_title"=> "Headphones",
                "product_price"=> "250",
                "product_desc"=> "Headphones",
                "product_image"=> "product05.png",
                "product_keywords"=> "Headphones Sony"
            ],
            [
                "product_id"=> "50",
                "product_cat"=> "3",
                "product_brand"=> "6",
                "product_title"=> "boys shirts",
                "product_price"=> "350",
                "product_desc"=> "shirts",
                "product_image"=> "pm1.JPG",
                "product_keywords"=> "suit boys shirts"
            ],
            [
                "product_id"=> "51",
                "product_cat"=> "3",
                "product_brand"=> "6",
                "product_title"=> "boys shirts",
                "product_price"=> "270",
                "product_desc"=> "shirts",
                "product_image"=> "pm2.JPG",
                "product_keywords"=> "suit boys shirts"
            ],
            [
                "product_id"=> "52",
                "product_cat"=> "3",
                "product_brand"=> "6",
                "product_title"=> "boys shirts",
                "product_price"=> "453",
                "product_desc"=> "shirts",
                "product_image"=> "pm3.JPG",
                "product_keywords"=> "suit boys shirts"
            ],
            [
                "product_id"=> "53",
                "product_cat"=> "3",
                "product_brand"=> "6",
                "product_title"=> "boys shirts",
                "product_price"=> "220",
                "product_desc"=> "shirts",
                "product_image"=> "ms1.JPG",
                "product_keywords"=> "suit boys shirts"
            ],
            [
                "product_id"=> "54",
                "product_cat"=> "3",
                "product_brand"=> "6",
                "product_title"=> "boys shirts",
                "product_price"=> "290",
                "product_desc"=> "shirts",
                "product_image"=> "ms2.JPG",
                "product_keywords"=> "suit boys shirts"
            ],
            [
                "product_id"=> "55",
                "product_cat"=> "3",
                "product_brand"=> "6",
                "product_title"=> "boys shirts",
                "product_price"=> "259",
                "product_desc"=> "shirts",
                "product_image"=> "ms3.JPG",
                "product_keywords"=> "suit boys shirts"
            ],
            [
                "product_id"=> "56",
                "product_cat"=> "3",
                "product_brand"=> "6",
                "product_title"=> "boys shirts",
                "product_price"=> "299",
                "product_desc"=> "shirts",
                "product_image"=> "pm7.JPG",
                "product_keywords"=> "suit boys shirts"
            ],
            [
                "product_id"=> "57",
                "product_cat"=> "3",
                "product_brand"=> "6",
                "product_title"=> "boys shirts",
                "product_price"=> "260",
                "product_desc"=> "shirts",
                "product_image"=> "i3.JPG",
                "product_keywords"=> "suit boys shirts"
            ],
            [
                "product_id"=> "58",
                "product_cat"=> "3",
                "product_brand"=> "6",
                "product_title"=> "boys shirts",
                "product_price"=> "350",
                "product_desc"=> "shirts",
                "product_image"=> "pm9.JPG",
                "product_keywords"=> "suit boys shirts"
            ],
            [
                "product_id"=> "59",
                "product_cat"=> "3",
                "product_brand"=> "6",
                "product_title"=> "boys shirts",
                "product_price"=> "855",
                "product_desc"=> "shirts",
                "product_image"=> "a2.JPG",
                "product_keywords"=> "suit boys shirts"
            ],
            [
                "product_id"=> "60",
                "product_cat"=> "3",
                "product_brand"=> "6",
                "product_title"=> "boys shirts",
                "product_price"=> "150",
                "product_desc"=> "shirts",
                "product_image"=> "pm11.JPG",
                "product_keywords"=> "suit boys shirts"
            ],
            [
                "product_id"=> "61",
                "product_cat"=> "3",
                "product_brand"=> "6",
                "product_title"=> "boys shirts",
                "product_price"=> "215",
                "product_desc"=> "shirts",
                "product_image"=> "pm12.JPG",
                "product_keywords"=> "suit boys shirts"
            ],
            [
                "product_id"=> "62",
                "product_cat"=> "3",
                "product_brand"=> "6",
                "product_title"=> "boys shirts",
                "product_price"=> "299",
                "product_desc"=> "shirts",
                "product_image"=> "pm13.JPG",
                "product_keywords"=> "suit boys shirts"
            ],
            [
                "product_id"=> "63",
                "product_cat"=> "3",
                "product_brand"=> "6",
                "product_title"=> "boys Jeans Pant",
                "product_price"=> "550",
                "product_desc"=> "Pants",
                "product_image"=> "pt1.JPG",
                "product_keywords"=> "boys Jeans Pant"
            ],
            [
                "product_id"=> "64",
                "product_cat"=> "3",
                "product_brand"=> "6",
                "product_title"=> "boys Jeans Pant",
                "product_price"=> "460",
                "product_desc"=> "pants",
                "product_image"=> "pt2.JPG",
                "product_keywords"=> "boys Jeans Pant"
            ],
            [
                "product_id"=> "65",
                "product_cat"=> "3",
                "product_brand"=> "6",
                "product_title"=> "boys Jeans Pant",
                "product_price"=> "470",
                "product_desc"=> "pants",
                "product_image"=> "pt3.JPG",
                "product_keywords"=> "boys Jeans Pant"
            ],
            [
                "product_id"=> "66",
                "product_cat"=> "3",
                "product_brand"=> "6",
                "product_title"=> "boys Jeans Pant",
                "product_price"=> "480",
                "product_desc"=> "pants",
                "product_image"=> "pt4.JPG",
                "product_keywords"=> "boys Jeans Pant"
            ],
            [
                "product_id"=> "67",
                "product_cat"=> "3",
                "product_brand"=> "6",
                "product_title"=> "boys Jeans Pant",
                "product_price"=> "360",
                "product_desc"=> "pants",
                "product_image"=> "pt5.JPG",
                "product_keywords"=> "boys Jeans Pant"
            ],
            [
                "product_id"=> "68",
                "product_cat"=> "3",
                "product_brand"=> "6",
                "product_title"=> "boys Jeans Pant",
                "product_price"=> "550",
                "product_desc"=> "pants",
                "product_image"=> "pt6.JPG",
                "product_keywords"=> "boys Jeans Pant"
            ],
            [
                "product_id"=> "69",
                "product_cat"=> "3",
                "product_brand"=> "6",
                "product_title"=> "boys Jeans Pant",
                "product_price"=> "390",
                "product_desc"=> "pants",
                "product_image"=> "pt7.JPG",
                "product_keywords"=> "boys Jeans Pant"
            ],
            [
                "product_id"=> "70",
                "product_cat"=> "3",
                "product_brand"=> "6",
                "product_title"=> "boys Jeans Pant",
                "product_price"=> "399",
                "product_desc"=> "pants",
                "product_image"=> "pt8.JPG",
                "product_keywords"=> "boys Jeans Pant"
            ],
            [
                "product_id"=> "71",
                "product_cat"=> "1",
                "product_brand"=> "2",
                "product_title"=> "Samsung galaxy s7",
                "product_price"=> "5000",
                "product_desc"=> "Samsung galaxy s7",
                "product_image"=> "product07.png",
                "product_keywords"=> "samsung mobile electronics"
            ],
            [
                "product_id"=> "72",
                "product_cat"=> "7",
                "product_brand"=> "2",
                "product_title"=> "sony Headphones",
                "product_price"=> "3500",
                "product_desc"=> "sony Headphones",
                "product_image"=> "product02.png",
                "product_keywords"=> "sony Headphones electronics gadgets"
            ],
            [
                "product_id"=> "73",
                "product_cat"=> "7",
                "product_brand"=> "2",
                "product_title"=> "samsung Headphones",
                "product_price"=> "3500",
                "product_desc"=> "samsung Headphones",
                "product_image"=> "product05.png",
                "product_keywords"=> "samsung Headphones electronics gadgets"
            ],
            [
                "product_id"=> "74",
                "product_cat"=> "1",
                "product_brand"=> "1",
                "product_title"=> "HP i5 laptop",
                "product_price"=> "5500",
                "product_desc"=> "HP i5 laptop",
                "product_image"=> "product01.png",
                "product_keywords"=> "HP i5 laptop electronics"
            ],
            [
                "product_id"=> "75",
                "product_cat"=> "1",
                "product_brand"=> "1",
                "product_title"=> "HP i7 laptop 8gb ram",
                "product_price"=> "5500",
                "product_desc"=> "HP i7 laptop 8gb ram",
                "product_image"=> "product03.png",
                "product_keywords"=> "HP i7 laptop 8gb ram electronics"
            ],
            [
                "product_id"=> "76",
                "product_cat"=> "1",
                "product_brand"=> "5",
                "product_title"=> "sony note 6gb ram",
                "product_price"=> "4500",
                "product_desc"=> "sony note 6gb ram",
                "product_image"=> "product04.png",
                "product_keywords"=> "sony note 6gb ram mobile electronics"
            ],
            [
                "product_id"=> "77",
                "product_cat"=> "1",
                "product_brand"=> "4",
                "product_title"=> "MSV laptop 16gb ram NVIDEA Graphics",
                "product_price"=> "5499",
                "product_desc"=> "MSV laptop 16gb ram",
                "product_image"=> "product06.png",
                "product_keywords"=> "MSV laptop 16gb ram NVIDEA Graphics electronics"
            ],
            [
                "product_id"=> "78",
                "product_cat"=> "1",
                "product_brand"=> "5",
                "product_title"=> "dell laptop 8gb ram intel integerated Graphics",
                "product_price"=> "4579",
                "product_desc"=> "dell laptop 8gb ram intel integerated Graphics",
                "product_image"=> "product08.png",
                "product_keywords"=> "dell laptop 8gb ram intel integerated Graphics electronics"
            ],
            [
                "product_id"=> "79",
                "product_cat"=> "7",
                "product_brand"=> "2",
                "product_title"=> "camera with 3D pixels",
                "product_price"=> "2569",
                "product_desc"=> "camera with 3D pixels",
                "product_image"=> "product09.png",
                "product_keywords"=> "camera with 3D pixels camera electronics gadgets"
            ],
            [
                "product_id"=> "80",
                "product_cat"=> "1",
                "product_brand"=> "1",
                "product_title"=> "ytrfdkjsd",
                "product_price"=> "12343",
                "product_desc"=> "sdfhgh",
                "product_image"=> "1542455446_thythtf .jpeg",
                "product_keywords"=> "dfgh"
            ],
            [
                "product_id"=> "81",
                "product_cat"=> "4",
                "product_brand"=> "6",
                "product_title"=> "Kids blue dress",
                "product_price"=> "300",
                "product_desc"=> "blue dress",
                "product_image"=> "1543993724_pg4.jpg",
                "product_keywords"=> "kids blue dress"
            ]
        ];
        DB::table('products')->insert($data);

        // Seed user_info table
        $data = [
            [
                "user_id"=> "12",
                "first_name"=> "puneeth",
                "last_name"=> "Reddy",
                "email"=> "puneethreddy951@gmail.com",
                "password"=> "puneeth",
                "mobile"=> "9448121558",
                "address1"=> "123456789",
                "address2"=> "sdcjns"
            ],
            [
                "user_id"=> "15",
                "first_name"=> "hemu",
                "last_name"=> "ajhgdg",
                "email"=> "puneethreddy951@gmail.com",
                "password"=> "346778",
                "mobile"=> "536487276",
                "address1"=> "",
                "address2"=> "mdnbca"
            ],
            [
                "user_id"=> "16",
                "first_name"=> "venky",
                "last_name"=> "vs",
                "email"=> "venkey@gmail.com",
                "password"=> "1234534",
                "mobile"=> "9877654334",
                "address1"=> "snhdgvajfehyfygv",
                "address2"=> "asdjbhfkeur"
            ],
            [
                "user_id"=> "19",
                "first_name"=> "abhishek",
                "last_name"=> "bs",
                "email"=> "abhishekbs@gmail.com",
                "password"=> "asdcsdcc",
                "mobile"=> "9871236534",
                "address1"=> "bangalore",
                "address2"=> "hassan"
            ],
            [
                "user_id"=> "21",
                "first_name"=> "prajval",
                "last_name"=> "mcta",
                "email"=> "prajvalmcta@gmail.com",
                "password"=> "1234545662",
                "mobile"=> "202-555-01",
                "address1"=> "bangalore",
                "address2"=> "kumbalagodu"
            ],
            [
                "user_id"=> "22",
                "first_name"=> "puneeth",
                "last_name"=> "v",
                "email"=> "hemu@gmail.com",
                "password"=> "1234534",
                "mobile"=> "9877654334",
                "address1"=> "snhdgvajfehyfygv",
                "address2"=> "asdjbhfkeur"
            ],
            [
                "user_id"=> "23",
                "first_name"=> "hemanth",
                "last_name"=> "reddy",
                "email"=> "hemanth@gmail.com",
                "password"=> "Puneeth@123",
                "mobile"=> "9876543234",
                "address1"=> "Bangalore",
                "address2"=> "Kumbalagodu"
            ],
            [
                "user_id"=> "24",
                "first_name"=> "newuser",
                "last_name"=> "user",
                "email"=> "newuser@gmail.com",
                "password"=> "puneeth@123",
                "mobile"=> "9535688928",
                "address1"=> "Bangalore",
                "address2"=> "Kumbalagodu"
            ],
            [
                "user_id"=> "25",
                "first_name"=> "otheruser",
                "last_name"=> "user",
                "email"=> "otheruser@gmail.com",
                "password"=> "puneeth@123",
                "mobile"=> "9535688928",
                "address1"=> "Bangalore",
                "address2"=> "Kumbalagodu"
            ]
        ];
        DB::table('user_info')->insert($data);

        // Seed user_info_backup table
        $data = [
            [
                "user_id"=> "12",
                "first_name"=> "puneeth",
                "last_name"=> "Reddy",
                "email"=> "puneethreddy951@gmail.com",
                "password"=> "123456789",
                "mobile"=> "9448121558",
                "address1"=> "123456789",
                "address2"=> "sdcjns"
            ],
            [
                "user_id"=> "14",
                "first_name"=> "hemanthu",
                "last_name"=> "reddy",
                "email"=> "hemanthreddy951@gmail.com",
                "password"=> "123456788",
                "mobile"=> "6526436723",
                "address1"=> "s",
                "address2"=> "dc wfjvnvn"
            ],
            [
                "user_id"=> "15",
                "first_name"=> "hemu",
                "last_name"=> "ajhgdg",
                "email"=> "keeru@gmail.com",
                "password"=> "346778",
                "mobile"=> "536487276",
                "address1"=> "",
                "address2"=> "mdnbca"
            ],
            [
                "user_id"=> "16",
                "first_name"=> "venky",
                "last_name"=> "vs",
                "email"=> "venkey@gmail.com",
                "password"=> "1234534",
                "mobile"=> "9877654334",
                "address1"=> "snhdgvajfehyfygv",
                "address2"=> "asdjbhfkeur"
            ],
            [
                "user_id"=> "19",
                "first_name"=> "abhishek",
                "last_name"=> "bs",
                "email"=> "abhishekbs@gmail.com",
                "password"=> "asdcsdcc",
                "mobile"=> "9871236534",
                "address1"=> "bangalore",
                "address2"=> "hassan"
            ],
            [
                "user_id"=> "20",
                "first_name"=> "pramod",
                "last_name"=> "vh",
                "email"=> "pramod@gmail.com",
                "password"=> "124335353",
                "mobile"=> "9767645653",
                "address1"=> "ksbdfcdf",
                "address2"=> "sjrgrevgsib"
            ],
            [
                "user_id"=> "21",
                "first_name"=> "prajval",
                "last_name"=> "mcta",
                "email"=> "prajvalmcta@gmail.com",
                "password"=> "1234545662",
                "mobile"=> "202-555-01",
                "address1"=> "bangalore",
                "address2"=> "kumbalagodu"
            ],
            [
                "user_id"=> "22",
                "first_name"=> "puneeth",
                "last_name"=> "v",
                "email"=> "hemu@gmail.com",
                "password"=> "1234534",
                "mobile"=> "9877654334",
                "address1"=> "snhdgvajfehyfygv",
                "address2"=> "asdjbhfkeur"
            ],
            [
                "user_id"=> "23",
                "first_name"=> "hemanth",
                "last_name"=> "reddy",
                "email"=> "hemanth@gmail.com",
                "password"=> "Puneeth@123",
                "mobile"=> "9876543234",
                "address1"=> "Bangalore",
                "address2"=> "Kumbalagodu"
            ],
            [
                "user_id"=> "24",
                "first_name"=> "newuser",
                "last_name"=> "user",
                "email"=> "newuser@gmail.com",
                "password"=> "puneeth@123",
                "mobile"=> "9535688928",
                "address1"=> "Bangalore",
                "address2"=> "Kumbalagodu"
            ],
            [
                "user_id"=> "25",
                "first_name"=> "otheruser",
                "last_name"=> "user",
                "email"=> "otheruser@gmail.com",
                "password"=> "puneeth@123",
                "mobile"=> "9535688928",
                "address1"=> "Bangalore",
                "address2"=> "Kumbalagodu"
            ]
        ];
        DB::table('user_info_backup')->insert($data);
    }
}
