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
        $r1->reward_image = 'https://example.com/nike-air-max.jpg';
        $r1->supplier_id = 1;
        $r1->save();

        $r2 = new Reward();
        $r2->title = 'Adidas Ultraboost Running Shoes';
        $r2->description = 'High-performance Adidas Ultraboost running shoes designed for maximum comfort and energy return.';
        $r2->reward_image = 'https://example.com/adidas-ultraboost.jpg';
        $r2->supplier_id = 1;
        $r2->save();

        $r3 = new Reward();
        $r3->title = 'Gucci Logo T-Shirt';
        $r3->description = 'Stylish Gucci logo T-shirt made from premium cotton fabric.';
        $r3->reward_image = 'https://example.com/gucci-tshirt.jpg';
        $r3->supplier_id = 1;
        $r3->save();

        $r4 = new Reward();
        $r4->title = 'Apple AirPods Pro';
        $r4->description = 'Wireless Apple AirPods Pro with active noise cancellation for immersive sound experience.';
        $r4->reward_image = 'https://example.com/apple-airpods-pro.jpg';
        $r4->supplier_id = 1;
        $r4->save();

        $r5 = new Reward();
        $r5->title = 'Samsung Galaxy Watch';
        $r5->description = 'Samsung Galaxy Watch with advanced fitness tracking and long-lasting battery life.';
        $r5->reward_image = 'https://example.com/samsung-galaxy-watch.jpg';
        $r5->supplier_id = 1;
        $r5->save();

        $r6 = new Reward();
        $r6->title = 'Louis Vuitton Monogram Belt';
        $r6->description = 'Luxurious Louis Vuitton monogram belt crafted from premium leather with iconic LV logo buckle.';
        $r6->reward_image = 'https://example.com/louis-vuitton-belt.jpg';
        $r6->supplier_id = 1;
        $r6->save();

        $r7 = new Reward();
        $r7->title = 'Sony PlayStation 5 Console';
        $r7->description = 'Next-generation Sony PlayStation 5 gaming console with ultra-fast SSD storage and immersive gaming experiences.';
        $r7->reward_image = 'https://example.com/sony-playstation-5.jpg';
        $r7->supplier_id = 1;
        $r7->save();

        $r8 = new Reward();
        $r8->title = 'Dior Sauvage Cologne';
        $r8->description = 'Sophisticated Dior Sauvage cologne with a fresh, spicy fragrance for men.';
        $r8->reward_image = 'https://example.com/dior-sauvage-cologne.jpg';
        $r8->supplier_id = 1;
        $r8->save();

        $r9 = new Reward();
        $r9->title = 'Rolex Submariner Watch';
        $r9->description = 'Classic Rolex Submariner watch with waterproof features and timeless design.';
        $r9->reward_image = 'https://example.com/rolex-submariner.jpg';
        $r9->supplier_id = 1;
        $r9->save();

        $r10 = new Reward();
        $r10->title = 'Hermes Birkin Handbag';
        $r10->description = 'Iconic Hermes Birkin handbag crafted from premium leather with exquisite craftsmanship.';
        $r10->reward_image = 'storage/app/public/rewards/nike-1-min.jpg';
        $r10->supplier_id = 1;
        $r10->save();
    }
    // public function down()
    // {
    //     Reward::truncate(); // This will delete all records from the rewards table
    // }
}
