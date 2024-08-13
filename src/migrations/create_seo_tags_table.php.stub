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
        Schema::create('seo_tags', function (Blueprint $table) {
            $table->id();
            $table->text('uri')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();
            $table->string('robots')->nullable();
            $table->string('og_title')->nullable();
            $table->text('og_description')->nullable();
            $table->text('og_url')->nullable();
            $table->string('twitter_card')->nullable();
            $table->string('twitter_title')->nullable();
            $table->text('twitter_description')->nullable();
            $table->string('schema_type')->nullable();
            $table->string('schema_name')->nullable();
            $table->text('schema_description')->nullable();
            $table->text('schema_url')->nullable();
            $table->enum('type', ['static', 'dynamic'])->default('dynamic');
            $table->nullableMorphs('seoable');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seo_tags');
    }
};
