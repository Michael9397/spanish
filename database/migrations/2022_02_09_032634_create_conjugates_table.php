<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private $columns = ["indicative_present_yo","indicative_preterite_yo","indicative_imperfect_yo","indicative_conditional_yo","indicative_future_yo","indicative_present_tu","indicative_preterite_tu","indicative_imperfect_tu","indicative_conditional_tu","indicative_future_tu","indicative_present_vos","indicative_preterite_vos","indicative_imperfect_vos","indicative_conditional_vos","indicative_future_vos","indicative_present_el","indicative_preterite_el","indicative_imperfect_el","indicative_conditional_el","indicative_future_el","indicative_present_nosotros","indicative_preterite_nosotros","indicative_imperfect_nosotros","indicative_conditional_nosotros","indicative_future_nosotros","indicative_present_vosotros","indicative_preterite_vosotros","indicative_imperfect_vosotros","indicative_conditional_vosotros","indicative_future_vosotros","indicative_present_ellos","indicative_preterite_ellos","indicative_imperfect_ellos","indicative_conditional_ellos","indicative_future_ellos","subjunctive_present_yo","subjunctive_preterite_yo","subjunctive_imperfect_yo","subjunctive_present_tu","subjunctive_preterite_tu","subjunctive_imperfect_tu","subjunctive_present_vos","subjunctive_preterite_vos","subjunctive_imperfect_vos","subjunctive_present_el","subjunctive_preterite_el","subjunctive_imperfect_el","subjunctive_present_nosotros","subjunctive_preterite_nosotros","subjunctive_imperfect_nosotros","subjunctive_present_vosotros","subjunctive_preterite_vosotros","subjunctive_imperfect_vosotros","subjunctive_present_ellos","subjunctive_preterite_ellos","subjunctive_imperfect_ellos","imperative_affirmative_yo","imperative_negative_yo","imperative_affirmative_tu","imperative_negative_tu","imperative_affirmative_vos","imperative_negative_vos","imperative_affirmative_ud","imperative_negative_ud","imperative_affirmative_nosotros","imperative_negative_nosotros","imperative_affirmative_vosotros","imperative_negative_vosotros","imperative_affirmative_uds","imperative_negative_uds","progressive_present_yo","progressive_preterite_yo","progressive_imperfect_yo","progressive_conditional_yo","progressive_future_yo","progressive_present_tu","progressive_preterite_tu","progressive_imperfect_tu","progressive_conditional_tu","progressive_future_tu","progressive_present_vos","progressive_preterite_vos","progressive_imperfect_vos","progressive_conditional_vos","progressive_future_vos","progressive_present_el","progressive_preterite_el","progressive_imperfect_el","progressive_conditional_el","progressive_future_el","progressive_present_nosotros","progressive_preterite_nosotros","progressive_imperfect_nosotros","progressive_conditional_nosotros","progressive_future_nosotros","progressive_present_vosotros","progressive_preterite_vosotros","progressive_imperfect_vosotros","progressive_conditional_vosotros","progressive_future_vosotros","progressive_present_ellos","progressive_preterite_ellos","progressive_imperfect_ellos","progressive_conditional_ellos","progressive_future_ellos","perfect_present_yo","perfect_preterite_yo","perfect_past_yo","perfect_conditional_yo","perfect_future_yo","perfect_present_tu","perfect_preterite_tu","perfect_past_tu","perfect_conditional_tu","perfect_future_tu","perfect_present_vos","perfect_preterite_vos","perfect_past_vos","perfect_conditional_vos","perfect_future_vos","perfect_present_el","perfect_preterite_el","perfect_past_el","perfect_conditional_el","perfect_future_el","perfect_present_nosotros","perfect_preterite_nosotros","perfect_past_nosotros","perfect_conditional_nosotros","perfect_future_nosotros","perfect_present_vosotros","perfect_preterite_vosotros","perfect_past_vosotros","perfect_conditional_vosotros","perfect_future_vosotros","perfect_present_ellos","perfect_preterite_ellos","perfect_past_ellos","perfect_conditional_ellos","perfect_future_ellos","perfect_subjunctive_present_yo","perfect_subjunctive_past_yo","perfect_subjunctive_future_yo","perfect_subjunctive_present_tu","perfect_subjunctive_past_tu","perfect_subjunctive_future_tu","perfect_subjunctive_present_vos","perfect_subjunctive_past_vos","perfect_subjunctive_future_vos","perfect_subjunctive_present_el","perfect_subjunctive_past_el","perfect_subjunctive_future_el","perfect_subjunctive_present_nosotros","perfect_subjunctive_past_nosotros","perfect_subjunctive_future_nosotros","perfect_subjunctive_present_vosotros","perfect_subjunctive_past_vosotros","perfect_subjunctive_future_vosotros","perfect_subjunctive_present_ellos","perfect_subjunctive_past_ellos","perfect_subjunctive_future_ellos"];

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
            foreach ($this->columns as $column) {
                $table->text($column)->nullable();
            }
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
