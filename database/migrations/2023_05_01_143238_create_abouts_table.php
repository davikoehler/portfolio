<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->text('about')->comment('Texto sobre mim');
            $table->json('links')->nullable()->comment('Links das redes sociais');
            $table->string('curriculum')->nullable()->comment('Link do Currículo em PDF');
            $table->timestamps();

            $table->comment('Tabela do sobre mim');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
