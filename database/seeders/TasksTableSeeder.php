<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $t1 = new Task();
        $t1->title = 'Plant a Tree';
        $t1->description = 'Contribute to carbon capture and help combat deforestation by planting a tree in your community.';
        $t1->coins = 10;
        $t1->save();

        $t2 = new Task();
        $t2->title = 'Reduce Plastic Usage';
        $t2->description = 'Minimize plastic consumption by using reusable bags, bottles, and containers to reduce plastic waste.';
        $t2->coins = 5;
        $t2->save();

        $t3 = new Task();
        $t3->title = 'Support Renewable Energy';
        $t3->description = 'Invest in renewable energy sources like solar or wind power to reduce reliance on fossil fuels.';
        $t3->coins = 15;
        $t3->save();

        $t4 = new Task();
        $t4->title = 'Adopt Sustainable Transportation';
        $t4->description = 'Use eco-friendly transportation options such as walking, cycling, or public transit to reduce carbon emissions from vehicles.';
        $t4->coins = 8;
        $t4->save();

        $t5 = new Task();
        $t5->title = 'Reduce Meat Consumption';
        $t5->description = 'Decrease meat consumption and opt for plant-based meals to lower greenhouse gas emissions associated with livestock farming.';
        $t5->coins = 7;
        $t5->save();

        $t6 = new Task();
        $t6->title = 'Conserve Water';
        $t6->description = 'Practice water conservation methods like fixing leaks, taking shorter showers, and using water-efficient appliances to reduce water waste.';
        $t6->coins = 6;
        $t6->save();

        $t7 = new Task();
        $t7->title = 'Support Sustainable Agriculture';
        $t7->description = 'Purchase organic, locally grown produce and support farmers who use sustainable farming practices to protect soil health and biodiversity.';
        $t7->coins = 12;
        $t7->save();

        $t8 = new Task();
        $t8->title = 'Recycle and Reuse';
        $t8->description = 'Recycle paper, glass, plastic, and metal products and repurpose items whenever possible to minimize waste sent to landfills.';
        $t8->coins = 9;
        $t8->save();

        $t9 = new Task();
        $t9->title = 'Educate Others';
        $t9->description = 'Spread awareness about climate change and its impacts by educating your friends, family, and community members.';
        $t9->coins = 11;
        $t9->save();

        $t10 = new Task();
        $t10->title = 'Participate in Environmental Cleanup';
        $t10->description = 'Join local cleanup events to remove litter and pollutants from parks, beaches, and other natural areas to protect wildlife and ecosystems.';
        $t10->coins = 14;
        $t10->save();
    }
}
