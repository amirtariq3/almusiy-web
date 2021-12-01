<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQoutWebsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qout_webs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('company_name');
            $table->string('email');
            $table->string('mobile');
            $table->string('company_do')->nullable();
            $table->string('website_url')->nullable();
            $table->string('hosting')->nullable();
            $table->string('domain')->nullable();
            $table->string('project_deadline')->nullable();
            $table->string('project_budget')->nullable();
            $table->string('project_type')->nullable();
            $table->string('project_target')->nullable();
            $table->string('client_target')->nullable();
            $table->string('project_offer')->nullable();
            $table->string('project_search')->nullable();
            $table->string('project_uniqueness')->nullable();
            $table->string('project_solution')->nullable();
            $table->string('project_include')->nullable();
            $table->string('address')->nullable();
            $table->string('Project_features')->nullable();
            $table->string('images')->nullable();
            $table->string('logo')->nullable();
            $table->string('hosting_domain')->nullable();
            $table->string('ssl_certificate')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('project_competitor')->nullable();
            $table->string('project_pick')->nullable();
            $table->string('website_update')->nullable();
            $table->string('something_missing')->nullable();
            $table->string('require_update')->nullable();
            $table->string('project_training')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qout_webs');
    }
}
