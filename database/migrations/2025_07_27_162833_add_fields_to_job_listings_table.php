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
        //clear table data before adding new fields
        DB::table('job_listings')->truncate();


        Schema::table('job_listings', function (Blueprint $table) {

            $table->unsignedBigInteger('user_id')->after('id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('salary');
            $table->string('tags')->nullable();
            $table->enum('type', ['full-time', 'part-time', 'contract'])->default('full-time');
            $table->boolean('remote')->default(false);
            $table->date('requirements')->nullable();
            $table->date('benefits')->nullable();
            $table->date('address')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('zipcode')->nullable();
            $table->string('contact_email');
            $table->string('contact_phone')->nullable();
            $table->string('company_name');
            $table->string('company_description')->nullable();
            $table->string('company_website')->nullable();
            $table->string('company_logo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_listings', function (Blueprint $table) {
            $table->dropColumn('salary');
            $table->dropColumn('tags');
            $table->dropColumn('type');
            $table->dropColumn('remote');
            $table->dropColumn('requirements');
            $table->dropColumn('benefits');
            $table->dropColumn('address');
            $table->dropColumn('city');
            $table->dropColumn('state');
            $table->dropColumn('zipcode');
            $table->dropColumn('contact_email');
            $table->dropColumn('contact_phone');
            $table->dropColumn('company_name');
            $table->dropColumn('company_description');
            $table->dropColumn('company_website');
            $table->dropColumn('company_logo');
        });
    }
};
