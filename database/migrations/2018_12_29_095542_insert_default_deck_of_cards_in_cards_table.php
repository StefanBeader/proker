<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class InsertDefaultDeckOfCardsInCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $suit = 1;
        $value = 2;
        for ($i = 1; $i <= 52; $i++) {
            DB::table('cards')->insert([
                ['value' => $value, 'suit_id' => $suit]
            ]);
            if ($suit < 4) {
                $suit++;
            } else {
                $suit = 1;
            }
            if ($value < 14) {
                $value++;
            } else {
                $value = 2;
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('cards')->delete();
    }
}
