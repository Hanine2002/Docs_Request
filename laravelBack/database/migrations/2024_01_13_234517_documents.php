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
        Schema::create('documents', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->string('libelle');

            $table->unsignedBigInteger('admin_id');
            $table->unsignedBigInteger('etudiant_id')->nullable();

            $table->softDeletes();
            $table->timestamps(); // Created at and Updated at timestamps
            $table->foreign('admin_id')->references('id')->on('admin')->onDelete('cascade');
            $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');

    }
};
