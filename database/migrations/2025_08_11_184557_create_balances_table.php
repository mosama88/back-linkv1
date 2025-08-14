<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('balances', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->decimal('balance', 10, 2); //500
            $table->decimal('used_balance', 10, 2); //300
            $table->decimal('remain_balance', 10, 2); //200
            $table->foreignIdFor(User::class)->constrained()->onDelete('cascade');
            $table->tinyInteger('active')->default(1);
            $table->foreignId('created_by')->references('id')->on('users')->onUpdate('cascade');
            $table->foreignId('updated_by')->nullable()->references('id')->on('users')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('balances');
    }
};
