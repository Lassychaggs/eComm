<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'LG Xpression Plus 3',
                'price'=>'500',
                'category'=>'mobile',
                'description'=>'Mobile phone, quard core processor with 32gig Ram dual 20 mega pixel Camera and 80gig Space',
                'gallery'=>'https://www.lg.com/us/images/cell-phones/md07517144/gallery/desktop-01.jpg'    
            ],
            [
                'name'=>'Television',
                'price'=>'650',
                'category'=>'TVs',
                'description'=>'LG Smart Television fast  processor with internet capability and 64gig Space',
                'gallery'=>'https://www.lg.com/us/images/tvs/md07521325/gallery/D-01.jpg'    
            ],
            [
                'name'=>'UltraGear Monitor',
                'price'=>'200',
                'category'=>'Monitors',
                'description'=>'27 Inch UltraGear UHD Nano IPS 1ms 144Hz HDR600 Monitor with G-SYNC® Compatibility',
                'gallery'=>'https://www.lg.com/us/images/monitors/md08000330/gallery/medium01.jpg'    
            ],
            [
                'name'=>'Ultra-Lightweight Laptop',
                'price'=>'200',
                'category'=>'computers',
                'description'=>'LG gram 16 Inch 2-in-1 Ultra-Lightweight Laptop with Intel® Evo 11th Gen Intel® Core™ i5 Processor and Iris® Xe Graphics',
                'gallery'=>'https://www.lg.com/us/images/laptops/md08000691/gallery/D-01.jpg'    
            ],
        ]);
    }
}
