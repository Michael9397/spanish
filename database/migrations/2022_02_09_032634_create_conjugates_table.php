<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conjugates', function (Blueprint $table) {
            $table->id();
            $table->string('infinitive');
            $table->text("indicative_present_yo")->nullable();
            $table->text("indicative_preterite_yo")->nullable();
            $table->text("indicative_imperfect_yo")->nullable();
            $table->text("indicative_conditional_yo")->nullable();
            $table->text("indicative_future_yo")->nullable();
            $table->text("indicative_present_tu")->nullable();
            $table->text("indicative_preterite_tu")->nullable();
            $table->text("indicative_imperfect_tu")->nullable();
            $table->text("indicative_conditional_tu")->nullable();
            $table->text("indicative_future_tu")->nullable();
            $table->text("indicative_present_el")->nullable();
            $table->text("indicative_preterite_el")->nullable();
            $table->text("indicative_imperfect_el")->nullable();
            $table->text("indicative_conditional_el")->nullable();
            $table->text("indicative_future_el")->nullable();
            $table->text("indicative_present_nosotros")->nullable();
            $table->text("indicative_preterite_nosotros")->nullable();
            $table->text("indicative_imperfect_nosotros")->nullable();
            $table->text("indicative_conditional_nosotros")->nullable();
            $table->text("indicative_future_nosotros")->nullable();
            $table->text("indicative_present_vosotros")->nullable();
            $table->text("indicative_preterite_vosotros")->nullable();
            $table->text("indicative_imperfect_vosotros")->nullable();
            $table->text("indicative_conditional_vosotros")->nullable();
            $table->text("indicative_future_vosotros")->nullable();
            $table->text("indicative_present_ellos")->nullable();
            $table->text("indicative_preterite_ellos")->nullable();
            $table->text("indicative_imperfect_ellos")->nullable();
            $table->text("indicative_conditional_ellos")->nullable();
            $table->text("indicative_future_ellos")->nullable();
            $table->text("subjunctive_present_yo")->nullable();
            $table->text("subjunctive_preterite_yo")->nullable();
            $table->text("subjunctive_imperfect_yo")->nullable();
            $table->text("subjunctive_present_tu")->nullable();
            $table->text("subjunctive_preterite_tu")->nullable();
            $table->text("subjunctive_imperfect_tu")->nullable();
            $table->text("subjunctive_present_el")->nullable();
            $table->text("subjunctive_preterite_el")->nullable();
            $table->text("subjunctive_imperfect_el")->nullable();
            $table->text("subjunctive_present_nosotros")->nullable();
            $table->text("subjunctive_preterite_nosotros")->nullable();
            $table->text("subjunctive_imperfect_nosotros")->nullable();
            $table->text("subjunctive_present_vosotros")->nullable();
            $table->text("subjunctive_preterite_vosotros")->nullable();
            $table->text("subjunctive_imperfect_vosotros")->nullable();
            $table->text("subjunctive_present_ellos")->nullable();
            $table->text("subjunctive_preterite_ellos")->nullable();
            $table->text("subjunctive_imperfect_ellos")->nullable();
            $table->text("imperative_affirmative_yo")->nullable();
            $table->text("imperative_negative_yo")->nullable();
            $table->text("imperative_affirmative_tu")->nullable();
            $table->text("imperative_negative_tu")->nullable();
            $table->text("imperative_affirmative_ud")->nullable();
            $table->text("imperative_negative_ud")->nullable();
            $table->text("imperative_affirmative_nosotros")->nullable();
            $table->text("imperative_negative_nosotros")->nullable();
            $table->text("imperative_affirmative_vosotros")->nullable();
            $table->text("imperative_negative_vosotros")->nullable();
            $table->text("imperative_affirmative_uds")->nullable();
            $table->text("imperative_negative_uds")->nullable();
            $table->text("progressive_present_yo")->nullable();
            $table->text("progressive_preterite_yo")->nullable();
            $table->text("progressive_imperfect_yo")->nullable();
            $table->text("progressive_conditional_yo")->nullable();
            $table->text("progressive_future_yo")->nullable();
            $table->text("progressive_present_tu")->nullable();
            $table->text("progressive_preterite_tu")->nullable();
            $table->text("progressive_imperfect_tu")->nullable();
            $table->text("progressive_conditional_tu")->nullable();
            $table->text("progressive_future_tu")->nullable();
            $table->text("progressive_present_el")->nullable();
            $table->text("progressive_preterite_el")->nullable();
            $table->text("progressive_imperfect_el")->nullable();
            $table->text("progressive_conditional_el")->nullable();
            $table->text("progressive_future_el")->nullable();
            $table->text("progressive_present_nosotros")->nullable();
            $table->text("progressive_preterite_nosotros")->nullable();
            $table->text("progressive_imperfect_nosotros")->nullable();
            $table->text("progressive_conditional_nosotros")->nullable();
            $table->text("progressive_future_nosotros")->nullable();
            $table->text("progressive_present_vosotros")->nullable();
            $table->text("progressive_preterite_vosotros")->nullable();
            $table->text("progressive_imperfect_vosotros")->nullable();
            $table->text("progressive_conditional_vosotros")->nullable();
            $table->text("progressive_future_vosotros")->nullable();
            $table->text("progressive_present_ellos")->nullable();
            $table->text("progressive_preterite_ellos")->nullable();
            $table->text("progressive_imperfect_ellos")->nullable();
            $table->text("progressive_conditional_ellos")->nullable();
            $table->text("progressive_future_ellos")->nullable();
            $table->text("perfect_present_yo")->nullable();
            $table->text("perfect_preterite_yo")->nullable();
            $table->text("perfect_past_yo")->nullable();
            $table->text("perfect_conditional_yo")->nullable();
            $table->text("perfect_future_yo")->nullable();
            $table->text("perfect_present_tu")->nullable();
            $table->text("perfect_preterite_tu")->nullable();
            $table->text("perfect_past_tu")->nullable();
            $table->text("perfect_conditional_tu")->nullable();
            $table->text("perfect_future_tu")->nullable();
            $table->text("perfect_present_el")->nullable();
            $table->text("perfect_preterite_el")->nullable();
            $table->text("perfect_past_el")->nullable();
            $table->text("perfect_conditional_el")->nullable();
            $table->text("perfect_future_el")->nullable();
            $table->text("perfect_present_nosotros")->nullable();
            $table->text("perfect_preterite_nosotros")->nullable();
            $table->text("perfect_past_nosotros")->nullable();
            $table->text("perfect_conditional_nosotros")->nullable();
            $table->text("perfect_future_nosotros")->nullable();
            $table->text("perfect_present_vosotros")->nullable();
            $table->text("perfect_preterite_vosotros")->nullable();
            $table->text("perfect_past_vosotros")->nullable();
            $table->text("perfect_conditional_vosotros")->nullable();
            $table->text("perfect_future_vosotros")->nullable();
            $table->text("perfect_present_ellos")->nullable();
            $table->text("perfect_preterite_ellos")->nullable();
            $table->text("perfect_past_ellos")->nullable();
            $table->text("perfect_conditional_ellos")->nullable();
            $table->text("perfect_future_ellos")->nullable();
            $table->text("perfect_subjunctive_present_yo")->nullable();
            $table->text("perfect_subjunctive_past_yo")->nullable();
            $table->text("perfect_subjunctive_future_yo")->nullable();
            $table->text("perfect_subjunctive_present_tu")->nullable();
            $table->text("perfect_subjunctive_past_tu")->nullable();
            $table->text("perfect_subjunctive_future_tu")->nullable();
            $table->text("perfect_subjunctive_present_el")->nullable();
            $table->text("perfect_subjunctive_past_el")->nullable();
            $table->text("perfect_subjunctive_future_el")->nullable();
            $table->text("perfect_subjunctive_present_nosotros")->nullable();
            $table->text("perfect_subjunctive_past_nosotros")->nullable();
            $table->text("perfect_subjunctive_future_nosotros")->nullable();
            $table->text("perfect_subjunctive_present_vosotros")->nullable();
            $table->text("perfect_subjunctive_past_vosotros")->nullable();
            $table->text("perfect_subjunctive_future_vosotros")->nullable();
            $table->text("perfect_subjunctive_present_ellos")->nullable();
            $table->text("perfect_subjunctive_past_ellos")->nullable();
            $table->text("perfect_subjunctive_future_ellos")->nullable();
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
        Schema::dropIfExists('conjugates');
    }
};