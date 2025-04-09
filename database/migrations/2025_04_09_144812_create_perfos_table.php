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
        Schema::create('perfos', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->string("name");
            $table->boolean("status");
            $table->text("description");
            $table->enum("gender", ["male", "female"]);
            $table->integer("age");
            $table->decimal("gpa");
            $table->date("birth_date");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perfos');
    }
};
