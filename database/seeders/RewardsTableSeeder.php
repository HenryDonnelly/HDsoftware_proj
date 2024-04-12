<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reward;

class RewardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $r1 = new Reward();
        $r1->title = 'Nike Air Max Sneakers';
        $r1->description = 'Iconic Nike Air Max sneakers with comfortable cushioning and stylish design.';
        $r1->reward_image = 'storage/rewards/PngItem_2128990.png';
        $r1->coins= 30000;
        $r1->supplier_id = 1;
        $r1->save();

        $r2 = new Reward();
        $r2->title = 'Adidas Ultraboost Running Shoes';
        $r2->description = 'High-performance Adidas Ultraboost running shoes designed for maximum comfort and energy return.';
        $r2->reward_image = 'storage/rewards/adidas.png';
        $r2->coins= 30000;
        $r2->supplier_id = 2;
        $r2->save();

        $r3 = new Reward();
        $r3->title = 'Gucci Logo T-Shirt';
        $r3->description = 'Stylish Gucci logo T-shirt made from premium cotton fabric.';
        $r3->reward_image = 'storage/rewards/tshirt.svg';
        $r3->coins= 90000;
        $r3->supplier_id = 3;
        $r3->save();

        $r4 = new Reward();
        $r4->title = 'Apple AirPods Pro';
        $r4->description = 'Wireless Apple AirPods Pro with active noise cancellation for immersive sound experience.';
        $r4->reward_image = 'storage/rewards/airpod.png';
        $r4->coins= 9000;
        $r4->supplier_id = 4;
        $r4->save();

        $r5 = new Reward();
        $r5->title = 'Samsung Galaxy Watch';
        $r5->description = 'Samsung Galaxy Watch with advanced fitness tracking and long-lasting battery life.';
        $r5->reward_image = 'storage/rewards/samsung.png';
        $r5->coins= 60000;
        $r5->supplier_id = 5;
        $r5->save();

        $r6 = new Reward();
        $r6->title = 'Louis Vuitton Monogram Belt';
        $r6->description = 'Luxurious Louis Vuitton monogram belt crafted from premium leather with iconic LV logo buckle.';
        $r6->reward_image = 'storage/rewards/belt.png';
        $r6->coins= 120000;
        $r6->supplier_id = 6;
        $r6->save();

        $r7 = new Reward();
        $r7->title = 'Sony PlayStation 5 Console';
        $r7->description = 'Next-generation Sony PlayStation 5 gaming console with ultra-fast SSD storage and immersive gaming experiences.';
        $r7->reward_image = 'storage/rewards/ps5r.png';
        $r7->coins= 90000;
        $r7->supplier_id = 7;
        $r7->save();

        $r8 = new Reward();
        $r8->title = 'Dior Sauvage Cologne';
        $r8->description = 'Sophisticated Dior Sauvage cologne with a fresh, spicy fragrance for men.';
        $r8->reward_image = 'storage/rewards/dior.png';
        $r8->coins= 7000;
        $r8->supplier_id = 8;
        $r8->save();

        $r9 = new Reward();
        $r9->title = 'Rolex Submariner Watch';
        $r9->description = 'Classic Rolex Submariner watch with waterproof features and timeless design.';
        $r9->reward_image = 'storage/rewards/rolex.png';
        $r9->coins= 200000;
        $r9->supplier_id = 9;
        $r9->save();

        $r10 = new Reward();
        $r10->title = 'Hermes Birkin Handbag';
        $r10->description = 'Iconic Hermes Birkin handbag crafted from premium leather with exquisite craftsmanship.';
        $r10->reward_image = 'storage/rewards/berkin.png';
        $r10->coins= 80000;
        $r10->supplier_id = 10;
        $r10->save();
    }
    // public function down()
    // {
    //     Reward::truncate(); // This will delete all records from the rewards table
    // }
}
