<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $data = [
            1 => [
                'manufacturer' => 'BBS',
                'model' => 'XR Platinum Silver',
                'code' => 'kgk001',
                'type' => 'Mesh Design, Twin 7 Spoke',
                'color' => 'Silver',
                'size' => '17',
                'price' => 216.6,
                'description' => 'The new BBS “XR” wheel unites opposites. A total of seven clearly shaped Y-spokes pick up on the company‘s classic design language and simultaneously reinterpret it. The striking recess in the centre of the wheel pays homage to former BBS legends. The XR comes in 17" to 20" diameters(depending on the finish) with a variety of PCD patterns, such as 5x120, 5x112 and many more, making it a perfect match for all modern BMW, Audi, and Mercedes-Benz vehicles, along with many Ford cars. Available in gloss black, platinum silver, and satin bronze finish.',
                'picture_name' => 'prod_img_kgk001',
                'picture_amount' => 1,
            ],
            2 => [
                'manufacturer' => 'BBS',
                'model' => 'XR Platinum Silver',
                'code' => 'kgk002',
                'type' => 'Mesh Design, Twin 7 Spoke',
                'color' => 'Silver',
                'size' => '18',
                'price' => 216.6,
                'description' => 'The new BBS “XR” wheel unites opposites. A total of seven clearly shaped Y-spokes pick up on the company‘s classic design language and simultaneously reinterpret it. The striking recess in the centre of the wheel pays homage to former BBS legends. The XR comes in 17" to 20" diameters(depending on the finish) with a variety of PCD patterns, such as 5x120, 5x112 and many more, making it a perfect match for all modern BMW, Audi, and Mercedes-Benz vehicles, along with many Ford cars. Available in gloss black, platinum silver, and satin bronze finish.',
                'picture_name' => 'prod_img_kgk002',
                'picture_amount' => 1,
            ],
            3 => [
                'manufacturer' => 'BBS',
                'model' => 'XR Platinum Silver',
                'code' => 'kgk003',
                'type' => 'Mesh Design, Twin 7 Spoke',
                'color' => 'Silver',
                'size' => '19',
                'price' => 216.6,
                'description' => 'The new BBS “XR” wheel unites opposites. A total of seven clearly shaped Y-spokes pick up on the company‘s classic design language and simultaneously reinterpret it. The striking recess in the centre of the wheel pays homage to former BBS legends. The XR comes in 17" to 20" diameters(depending on the finish) with a variety of PCD patterns, such as 5x120, 5x112 and many more, making it a perfect match for all modern BMW, Audi, and Mercedes-Benz vehicles, along with many Ford cars. Available in gloss black, platinum silver, and satin bronze finish.',
                'picture_name' => 'prod_img_kgk003',
                'picture_amount' => 1,
            ],
            4 => [
                'manufacturer' => 'BBS',
                'model' => 'XR Platinum Silver',
                'code' => 'kgk004',
                'type' => 'Mesh Design, Twin 7 Spoke',
                'color' => 'Silver',
                'size' => '20',
                'price' => 216.6,
                'description' => 'The new BBS “XR” wheel unites opposites. A total of seven clearly shaped Y-spokes pick up on the company‘s classic design language and simultaneously reinterpret it. The striking recess in the centre of the wheel pays homage to former BBS legends. The XR comes in 17" to 20" diameters(depending on the finish) with a variety of PCD patterns, such as 5x120, 5x112 and many more, making it a perfect match for all modern BMW, Audi, and Mercedes-Benz vehicles, along with many Ford cars. Available in gloss black, platinum silver, and satin bronze finish.',
                'picture_name' => 'prod_img_kgk004',
                'picture_amount' => 1,
            ],
        ];

        foreach ($data as $product) {
            \App\Models\Product::create([
                'manufacturer' => $product['manufacturer'],
                'model' => $product['model'],
                'code' => $product['code'],
                'type' => $product['type'],
                'color' => $product['color'],
                'size' => $product['size'],
                'price' => $product['price'],
                'description' => $product['description'],
                'picture_name' => $product['picture_name'],
                'picture_amount' => $product['picture_amount'],
            ]);

        }
    }
}