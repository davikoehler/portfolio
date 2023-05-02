<?php

use App\Enum\Category;
use App\Enum\Status;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique()->comment('Nome da linguagem de programação');
            $table->enum('status', Status::values())->default(1)->comment('Status (0 - Inativo / 1 - Ativo)');
            $table->enum('category', Category::values())->comment('Categoria da Linguagem (0 - Front/ 1 - Back)');
            $table->text('description')->comment('Resumo sobre a linguagem');
            $table->timestamps();

            $table->comment('Tabela de Linguagens de Programação');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('languages');
    }
};
