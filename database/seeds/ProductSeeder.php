<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'nama' => '1More Piston Fit In-Ear Earphones',
            'harga' => 69000,
            'elektronika_id' => 1,
            'gambar' => '1more-earphone.png',
        ]);

        DB::table('products')->insert([
            'nama' => 'dbE DJ80 Foldable DJ Headphone with Detachable Microphone',
            'harga' => 199000,
            'elektronika_id' => 1,
            'gambar' => 'dbe-dj80.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'Dualshock 4 / DS4 / Stick PS4 Wireless LED Light Bar',
            'harga' => 599000,
            'elektronika_id' => 1,
            'gambar' => 'ds4.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'HP s1000 Mouse Wireless USB Optical 1600DPI',
            'harga' => 55000,
            'elektronika_id' => 1,
            'gambar' => 'hp-s1000.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'Keyboard Flexible',
            'harga' => 50000,
            'elektronika_id' => 1,
            'gambar' => 'keyboard-flexi.jpeg',
        ]);

        DB::table('products')->insert([
            'nama' => 'Rexus Mousepad Gaming Kclar T5',
            'harga' => 35000,
            'elektronika_id' => 1,
            'gambar' => 'mousepad-kvlar.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'OontZ Angle Ultra 3 Portable Wireless Bluetooth Speaker',
            'harga' => 849000,
            'elektronika_id' => 1,
            'gambar' => 'oontz.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'USB Hub 3.0',
            'harga' => 57000,
            'elektronika_id' => 1,
            'gambar' => 'usb-hub.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'Infinix Hot 9 Play 4/64 GB',
            'harga' => 1540000,
            'elektronika_id' => 2,
            'gambar' => 'infinix-hot9.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'Inone Official Smartphone Lava R3 Note 3GB RAM 16GB ROM 13MP Camera',
            'harga' => 1599000,
            'elektronika_id' => 2,
            'gambar' => 'inone-lava.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'Nokia 105 Mobile Phone Dual Sim',
            'harga' => 135000,
            'elektronika_id' => 2,
            'gambar' => 'nokia-105.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'Nokia E90 Communicator',
            'harga' => 370000,
            'elektronika_id' => 2,
            'gambar' => 'nokia-communicator.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'Realme C11 3/32 GB',
            'harga' => 1699000,
            'elektronika_id' => 2,
            'gambar' => 'realme-c11.png',
        ]);

        DB::table('products')->insert([
            'nama' => 'Redmi 3S 2/16 GB',
            'harga' => 749000,
            'elektronika_id' => 2,
            'gambar' => 'redmi-3s.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'Samsung A11 3/32 GB',
            'harga' => 1750000,
            'elektronika_id' => 2,
            'gambar' => 'samsung-a11.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'Samsung Lipat GT-E1272 Dual Sim',
            'harga' => 160000,
            'elektronika_id' => 2,
            'gambar' => 'samsung-lipat.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'Acer Aspire 3 A314-32 N4000 4GB 1TB WIN10 14inch HD',
            'harga' => 5199000,
            'elektronika_id' => 3,
            'berat' => 4,
            'gambar' => 'acer-aspire-3.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'Acer Aspire 5 A514-53 - i3-1005G1 4GB 512GB SSD 14" W10 OFFICE',
            'harga' => 7499000,
            'elektronika_id' => 3,
            'berat' => 4,
            'gambar' => 'acer-aspire-5.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'Acer Swift 3 SF314-57-39WL With Intel Gen 10th And SSD 256GB',
            'harga' => 7799000,
            'elektronika_id' => 3,
            'berat' => 4,
            'gambar' => 'acer-swift-3.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'ASUS X441NA WIN 10 - INTEL N3350/4GB/500GB/14inch',
            'harga' => 4599000,
            'elektronika_id' => 3,
            'berat' => 4,
            'gambar' => 'asus-x441na.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'Lenovo Ideapad 320 Core i3-6006U RAM 4GB HDD 1TB Win10',
            'harga' => 5950000,
            'elektronika_id' => 3,
            'berat' => 4,
            'gambar' => 'lenovo-ideapad.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'Lenovo Thinkpad T440 Core i5 Gen 4 RAM 4GB HDD 500GB',
            'harga' => 5950000,
            'elektronika_id' => 3,
            'jenis' => 'Barang Second',
            'berat' => 4,
            'gambar' => 'thinkpad-t440.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'Toshiba Dynabook R732 CORE i5 3340M RAM 4GB HDD 320GB',
            'harga' => 2450000,
            'elektronika_id' => 3,
            'jenis' => 'Barang Second',
            'berat' => 4,
            'gambar' => 'toshiba-dynabook.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'Zyrex Sky 360 2in1 Touchscreen N3350 4GB 256SSD W10 11.6FHD',
            'harga' => 4199000,
            'elektronika_id' => 3,
            'berat' => 3.5,
            'gambar' => 'zyrex.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'AOC Monitor 24 inch 24V2Q',
            'harga' => 1575000,
            'elektronika_id' => 4,
            'berat' => 10,
            'gambar' => 'aoc-24inch.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => ' ASUS LED Gaming TUF VG249Q - Wide Screen Full HD 24 inch',
            'harga' => 3480000,
            'elektronika_id' => 4,
            'berat' => 8,
            'gambar' => 'asus-24inch.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'DELL P2419H Monitor',
            'harga' => 2679000,
            'elektronika_id' => 4,
            'berat' => 8,
            'gambar' => 'dell-24inch.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'LG 24MP59G 24" Inch 21:9 IPS Gaming Monitor FULL HD AMD FreeSync 75Hz',
            'harga' => 1900000,
            'elektronika_id' => 4,
            'berat' => 8,
            'gambar' => 'lg-24inch.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'MSI Optix G241VC 24 Inch Curved Gaming Monitor - 1080p FHD 75Hz 1ms',
            'harga' => 2175000,
            'elektronika_id' => 4,
            'berat' => 8,
            'gambar' => 'msi-curved-24inch.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'LED MONITOR PHILIPS 24 INCH IPS HDMI FRAMELESS 243V7Q-2437QDSB',
            'harga' => 1425000,
            'elektronika_id' => 4,
            'berat' => 8,
            'gambar' => 'philips-24inch.jpg',
        ]);

        DB::table('products')->insert([
            'nama' => 'SAMSUNG Monitor LED Curved 24" LC24F390FHE',
            'harga' => 1515000,
            'elektronika_id' => 4,
            'berat' => 8,
            'gambar' => 'samsung-curved-24-inch.png',
        ]);

        DB::table('products')->insert([
            'nama' => 'Monitor VIEWSONIC 24 INCH VA2465SH',
            'harga' => 1450000,
            'elektronika_id' => 4,
            'berat' => 8,
            'gambar' => 'viewsonic-24inch.jpg',
        ]);
    }
}
