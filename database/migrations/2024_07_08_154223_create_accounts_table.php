<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\AccountController;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('fullname');
            $table -> string('username') -> unique();
            $table -> string('password');
            $table -> string('email') -> unique();
            $table -> string('address');
            $table -> string('phone') -> unique();
            //add new block
            $table -> boolean('blocked') -> default(false);
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
