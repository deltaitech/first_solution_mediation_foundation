<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('consultations', function (Blueprint $table) {
            $table->enum('falling_facility',['company','organization'])->nullable()->after('service_id');
            $table->boolean('facility_have_financial')->default(0)->nullable()->after('falling_facility');
            $table->enum('financial_statements',['internal','audited'])->nullable()->after('facility_have_financial');
            $table->longText('revenues')->nullable()->after('financial_statements');
        });
    }

    public function down()
    {
        Schema::table('consultations', function (Blueprint $table) {
            //
        });
    }
};
