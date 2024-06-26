<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technologies', function (Blueprint $table) {
            $table->id();
            $table->enum('technology', [
                'git',
                'HTML',
                'Java Script',
                'CSS',
                'Java',
                'PHP',
                'SQL',
                'Rust',
                'Python',
                'Ruby',
                'C',
                'C#',
                'C++',
                'Swift',
                'Go'
            ]);
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
        Schema::dropIfExists('technologies');
    }
};
