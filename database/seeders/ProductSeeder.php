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
        //
        DB::table('products')->insert([
            [
                'name'=>"Samsung",
                'price'=>"1300",
                'description'=>"Smart Phone with 12g ram from samsung Company",
                'category'=>"Mobile",
                'gallary'=>"https://images.samsung.com/is/image/samsung/p6pim/eg/galaxy-s21/gallery/eg-galaxy-s21-ultra-5g-g988-sm-g998bzkgmea-thumb-368371554?$264_264_PNG$",
            ],
            [
                'name'=>"Tornado Tv",
                'price'=>"800",
                'description'=>"Smart Tv from Tornado Company",
                'category'=>"Tv",
                'gallary'=>"https://www.elarabygroup.com/media/catalog/product/cache/b2a75c2f978d2066af0275388b9e495d/t/o/tornado-led-tv-32-inch-hd-with-built-in-receiver-2-hdmi-and-2-usb-inputs-32er9500e-front.jpg",
            ],
            [
                'name'=>"PlayStation 5",
                'price'=>"1500",
                'description'=>"PlayStation 5",
                'category'=>"Mobile",
                'gallary'=>"https://media.gemini.media/img/large/2021/10/24/2021_10_24_13_40_17_671.jpg",
            ],
            [
                'name'=>"Iphone 12pro",
                'price'=>"1500",
                'description'=>"Smart fridge",
                'category'=>"fridge",
                'gallary'=>"https://cdn.vox-cdn.com/thumbor/Atvpj5tUuIgLq55pPrG2-A-MHF8=/0x389:8426x7181/1200x800/filters:focal(3671x2467:5117x3913)/cdn.vox-cdn.com/uploads/chorus_image/image/62795169/samsung_fridge.0.jpg",
            ]
            
            
    ]);
    }
}
