<?php

use App\Enum\Status;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->enum('status', Status::values())->comment('Status do Projeto (0 - Inativo / 1 - Ativo)');
            $table->string('description')->comment('Descrição do projeto');
            $table->string('project_image')->default(null)->nullable()->comment('Link da imagem do Projeto');
            $table->timestamps();

            $table->comment('Tabela que salva os projetos realizados');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
