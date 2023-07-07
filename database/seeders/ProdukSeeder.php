<?php

namespace Database\Seeders;

use App\Models\Produk;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 25; $i++) {
            $produk = new produk;

            $produk->name = $faker->name;
            $produk->member_id = rand(1, 10);
            $produk->kategori_id = rand(1, 10);
            $produk->stok = rand(10, 20);
            $produk->harga_jual = rand(10000, 20000);
            $produk->harga_beli = rand(10000, 20000);
            $produk->save();
        }
    }
}
