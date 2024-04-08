<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Supplier;
use App\Models\Reward;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $s1 = new Supplier();
        $s1->name = 'Nike';
        $s1->phone_no = '123-456-7890';
        $s1->address = '123 Nike Street, Portland, OR';
        $s1->save();

        $s2 = new Supplier();
        $s2->name = 'Adidas';
        $s2->phone_no = '234-567-8901';
        $s2->address = '456 Adidas Avenue, Berlin';
        $s2->save();

        $s3 = new Supplier();
        $s3->name = 'Gucci';
        $s3->phone_no = '345-678-9012';
        $s3->address = '789 Gucci Road, Florence';
        $s3->save();

        $s4 = new Supplier();
        $s4->name = 'Apple';
        $s4->phone_no = '456-789-0123';
        $s4->address = '1 Apple Park Way, Cupertino, CA';
        $s4->save();

        $s5 = new Supplier();
        $s5->name = 'Samsung';
        $s5->phone_no = '567-890-1234';
        $s5->address = '123 Samsung Boulevard, Seoul';
        $s5->save();

        $s6 = new Supplier();
        $s6->name = 'Louis Vuitton';
        $s6->phone_no = '678-901-2345';
        $s6->address = '1 Louis Vuitton Street, Paris';
        $s6->save();

        $s7 = new Supplier();
        $s7->name = 'Sony';
        $s7->phone_no = '789-012-3456';
        $s7->address = '123 Sony Drive, Tokyo';
        $s7->save();

        $s8 = new Supplier();
        $s8->name = 'Dior';
        $s8->phone_no = '890-123-4567';
        $s8->address = '456 Dior Avenue, Paris';
        $s8->save();

        $s9 = new Supplier();
        $s9->name = 'Rolex';
        $s9->phone_no = '901-234-5678';
        $s9->address = '1 Rolex Street, Geneva';
        $s9->save();

        $s10 = new Supplier();
        $s10->name = 'Hermes';
        $s10->phone_no = '012-345-6789';
        $s10->address = '123 Hermes Road, Paris';
        $s10->save();
    }
}
