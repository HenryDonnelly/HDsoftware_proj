<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class DropRewardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reward_user', function ($table) {
            $table->dropForeign('reward_user_reward_id_foreign');
        });

        Schema::dropIfExists('rewards');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // This is a drop migration, so there's no need to define the "down" method.
    }
}
