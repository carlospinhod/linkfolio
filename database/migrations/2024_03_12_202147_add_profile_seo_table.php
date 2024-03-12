<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->string('seo_title', 60)->nullable()->after('profile_image');
            $table->string('seo_description', 160)->nullable()->after('seo_title');
            $table->string('seo_image')->nullable()->after('seo_description');
            $table->string('seo_keywords', 280)->nullable()->after('seo_image');
            $table->string('favicon')->nullable()->after('seo_keywords');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropColumns('profiles',
            [
                'seo_title',
                'seo_description',
                'seo_image',
                'seo_keywords',
                'favicon',
            ]);
    }
};
