<?php

namespace Database\Seeders;

use Faker\Core\Number;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'productName' => 'NAUTILUS ROSE GOLD DIAMOND BEZEL',
            'productVendor' => 'Patek Philippe',
            'productDescription' => 'WATCH Self-winding mechanical movement. Caliber 240 PS IRM C LU. Date. Power reserve indicator. Seconds subdial.
DIAL Dial:black brown, gold applied hour markers with luminescent coating.CASE Rose gold. Screw-down crown. Sapphire-crystal case back. Water resistant to 60 m. Case diameter (10-4 o’clock): 40 mm. Height: 8.71 mm.
GEMSETTING Bezel and attachments set with 44 baguette diamonds (~7.4 ct.). Fold-over clasp with 6 baguette diamonds (~0.8 ct).
STRAP Strap: shiny chocolate brown alligator. Nautilus fold-over clasp.',
            'productPrice' => 12.500,
        ]);

    }
}
