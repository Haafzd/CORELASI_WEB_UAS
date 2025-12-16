<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Using raw SQL to avoid doctrine/dbal dependency for simple column modification
        DB::statement("ALTER TABLE learning_materials MODIFY external_link VARCHAR(2048) NULL");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("ALTER TABLE learning_materials MODIFY external_link VARCHAR(2048) NOT NULL");
    }
};
