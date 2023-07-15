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
        Schema::create('iletisim', function (Blueprint $table) {
            $table->id();
            $table->string("adsoyad")->nullable();
            $table->string("mail")->nullable();
            $table->string("telefon")->nullable();
            $table->text("metin")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iletisim');
    }
};
