<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('short_codes', function (Blueprint $table) {
            $table->id();
            $table->string('shortcode');
            $table->text('replace');
            $table->timestamps();
        });

        DB::table('short_codes')->insert([
            ['shortcode' => '[[TypeA]]', 'replace' => 'Vaikams(iki 5)'],
            ['shortcode' => '[[A_sub1]]', 'replace' => 'Lorem ipsum dolor sit amet consectetur'],
            ['shortcode' => '[[A_sub2]]', 'replace' => 'Lorem ipsum dolor sit amet consectetur'],
            ['shortcode' => '[[A_sub3]]', 'replace' => 'Lorem ipsum dolor sit amet consectetur'],
            ['shortcode' => '[[TypeB]]', 'replace' => 'Vaikams(iki 16)'],
            ['shortcode' => '[[B_sub1]]', 'replace' => 'Lorem ipsum dolor sit amet consectetur'],
            ['shortcode' => '[[B_sub2]]', 'replace' => 'Lorem ipsum dolor sit amet consectetur'],
            ['shortcode' => '[[B_sub3]]', 'replace' => 'Lorem ipsum dolor sit amet consectetur'],
            ['shortcode' => '[[TypeC]]', 'replace' => 'Suaugusiems'],
            ['shortcode' => '[[C_sub1]]', 'replace' => 'Lorem ipsum dolor sit amet consectetur'],
            ['shortcode' => '[[C_sub2]]', 'replace' => 'Lorem ipsum dolor sit amet consectetur'],
            ['shortcode' => '[[C_sub3]]', 'replace' => 'Lorem ipsum dolor sit amet consectetur'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
