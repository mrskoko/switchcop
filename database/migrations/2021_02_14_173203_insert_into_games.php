<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertIntoGames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::insert("INSERT INTO `games` (`id`, `name`, `description`, `score`) VALUES
                (1, 'Goose Game', 'Untitled Goose Game is a slapstick-stealth-sandbox, where you are a goose let loose on an unsuspecting village. Make your way around town, from peoples\' back gardens to the high street shops to the village green, setting up pranks, stealing hats, honking a lot, and generally ruining everyone’s day.', '91.8'),
                (2, 'Broforce', 'When evil threatens the world, the world calls on Broforce - an under-funded, over-powered paramilitary organization dealing exclusively in excessive force. Brace your loins with up to four players to run ‘n’ gun as dozens of different bros and eliminate the opposing terrorist forces that threaten our way of life. Unleash scores of unique weapons and set off incredible chain reactions of fire, napalm, and limbs in the name of freedom. ', '9.0');"

        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
