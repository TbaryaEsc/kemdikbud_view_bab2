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
        Schema::create('kerjasamas', function (Blueprint $table) {
            $table->id();
            $table->string("ringkasanmou",1000);
            $table->string("nomormoa",100);
            $table->string("deskripsimoa",100);
            $table->date("tglmulaimoa");
            $table->date("tglberakhirmoa");
            $table->string("misiprogram",1000);
            $table->string("targetprogram",1000);
            $table->string("alasanmitra",1000);
            $table->string("prinsipkerjasama",1000);
            $table->string("manfaatkerjasama",1000);
            $table->string("tantanganpelaksanaan",1000);
            $table->string("kepemilikanhakcipta",1000);
            $table->string("mekanismeresipokal",1000);
            $table->string("keberlanjutankerjasama",1000);
            $table->string("hakdankewajiban",1000);
            $table->enum('haktercantum',['ya','tidak']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kerjasamas');
    }
};
