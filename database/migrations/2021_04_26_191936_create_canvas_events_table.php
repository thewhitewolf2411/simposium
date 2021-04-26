<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCanvasEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canvas_events', function (Blueprint $table) {
            $table->id();
            $table->integer('canvas_id');
            $table->integer('event_type')->nullable();
            $table->string('script_type')->nullable();
            $table->string('x1')->nullable();
            $table->string('y1')->nullable();
            $table->string('x2')->nullable();
            $table->string('y2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('canvas_events');
    }
}
