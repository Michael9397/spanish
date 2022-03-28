<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use \App\Traits\ManageMigrationRecords;

    /**
     * Directions for how to fill this out quickly is in root directory webscraping.txt
     */
    private $infinative = 'beber';
    private $json = '{"indicative_present_yo":"bebo","indicative_preterite_yo":"bebí","indicative_imperfect_yo":"bebía","indicative_conditional_yo":"bebería","indicative_future_yo":"beberé","indicative_present_tu":"bebes","indicative_preterite_tu":"bebiste","indicative_imperfect_tu":"bebías","indicative_conditional_tu":"beberías","indicative_future_tu":"beberás","indicative_present_vos":"bebés","indicative_preterite_vos":"bebiste","indicative_imperfect_vos":"bebías","indicative_conditional_vos":"beberías","indicative_future_vos":"beberás","indicative_present_el":"bebe","indicative_preterite_el":"bebió","indicative_imperfect_el":"bebía","indicative_conditional_el":"bebería","indicative_future_el":"beberá","indicative_present_nosotros":"bebemos","indicative_preterite_nosotros":"bebimos","indicative_imperfect_nosotros":"bebíamos","indicative_conditional_nosotros":"beberíamos","indicative_future_nosotros":"beberemos","indicative_present_vosotros":"bebéis","indicative_preterite_vosotros":"bebisteis","indicative_imperfect_vosotros":"bebíais","indicative_conditional_vosotros":"beberíais","indicative_future_vosotros":"beberéis","indicative_present_ellos":"beben","indicative_preterite_ellos":"bebieron","indicative_imperfect_ellos":"bebían","indicative_conditional_ellos":"beberían","indicative_future_ellos":"beberán","subjunctive_present_yo":"beba","subjunctive_preterite_yo":"bebiera, bebiese","subjunctive_imperfect_yo":"bebiere","subjunctive_present_tu":"bebas","subjunctive_preterite_tu":"bebieras, bebieses","subjunctive_imperfect_tu":"bebieres","subjunctive_present_vos":"bebas","subjunctive_preterite_vos":"bebieras, bebieses","subjunctive_imperfect_vos":"bebieres","subjunctive_present_el":"beba","subjunctive_preterite_el":"bebiera, bebiese","subjunctive_imperfect_el":"bebiere","subjunctive_present_nosotros":"bebamos","subjunctive_preterite_nosotros":"bebiéramos, bebiésemos","subjunctive_imperfect_nosotros":"bebiéremos","subjunctive_present_vosotros":"bebáis","subjunctive_preterite_vosotros":"bebierais, bebieseis","subjunctive_imperfect_vosotros":"bebiereis","subjunctive_present_ellos":"beban","subjunctive_preterite_ellos":"bebieran, bebiesen","subjunctive_imperfect_ellos":"bebieren","imperative_affirmative_yo":"-","imperative_negative_yo":"-","imperative_affirmative_tu":"bebe","imperative_negative_tu":"no bebas","imperative_affirmative_vos":"bebé","imperative_negative_vos":"no bebas","imperative_affirmative_ud":"beba","imperative_negative_ud":"no beba","imperative_affirmative_nosotros":"bebamos","imperative_negative_nosotros":"no bebamos","imperative_affirmative_vosotros":"bebed","imperative_negative_vosotros":"no bebáis","imperative_affirmative_uds":"beban","imperative_negative_uds":"no beban","progressive_present_yo":"estoy bebiendo","progressive_preterite_yo":"estuve bebiendo","progressive_imperfect_yo":"estaba bebiendo","progressive_conditional_yo":"estaría bebiendo","progressive_future_yo":"estaré bebiendo","progressive_present_tu":"estás bebiendo","progressive_preterite_tu":"estuviste bebiendo","progressive_imperfect_tu":"estabas bebiendo","progressive_conditional_tu":"estarías bebiendo","progressive_future_tu":"estarás bebiendo","progressive_present_vos":"estás bebiendo","progressive_preterite_vos":"estuviste bebiendo","progressive_imperfect_vos":"estabas bebiendo","progressive_conditional_vos":"estarías bebiendo","progressive_future_vos":"estarás bebiendo","progressive_present_el":"está bebiendo","progressive_preterite_el":"estuvo bebiendo","progressive_imperfect_el":"estaba bebiendo","progressive_conditional_el":"estaría bebiendo","progressive_future_el":"estará bebiendo","progressive_present_nosotros":"estamos bebiendo","progressive_preterite_nosotros":"estuvimos bebiendo","progressive_imperfect_nosotros":"estábamos bebiendo","progressive_conditional_nosotros":"estaríamos bebiendo","progressive_future_nosotros":"estaremos bebiendo","progressive_present_vosotros":"estáis bebiendo","progressive_preterite_vosotros":"estuvisteis bebiendo","progressive_imperfect_vosotros":"estabais bebiendo","progressive_conditional_vosotros":"estaríais bebiendo","progressive_future_vosotros":"estaréis bebiendo","progressive_present_ellos":"están bebiendo","progressive_preterite_ellos":"estuvieron bebiendo","progressive_imperfect_ellos":"estaban bebiendo","progressive_conditional_ellos":"estarían bebiendo","progressive_future_ellos":"estarán bebiendo","perfect_present_yo":"he bebido","perfect_preterite_yo":"hube bebido","perfect_past_yo":"había bebido","perfect_conditional_yo":"habría bebido","perfect_future_yo":"habré bebido","perfect_present_tu":"has bebido","perfect_preterite_tu":"hubiste bebido","perfect_past_tu":"habías bebido","perfect_conditional_tu":"habrías bebido","perfect_future_tu":"habrás bebido","perfect_present_vos":"has bebido","perfect_preterite_vos":"hubiste bebido","perfect_past_vos":"habías bebido","perfect_conditional_vos":"habrías bebido","perfect_future_vos":"habrás bebido","perfect_present_el":"ha bebido","perfect_preterite_el":"hubo bebido","perfect_past_el":"había bebido","perfect_conditional_el":"habría bebido","perfect_future_el":"habrá bebido","perfect_present_nosotros":"hemos bebido","perfect_preterite_nosotros":"hubimos bebido","perfect_past_nosotros":"habíamos bebido","perfect_conditional_nosotros":"habríamos bebido","perfect_future_nosotros":"habremos bebido","perfect_present_vosotros":"habéis bebido","perfect_preterite_vosotros":"hubisteis bebido","perfect_past_vosotros":"habíais bebido","perfect_conditional_vosotros":"habríais bebido","perfect_future_vosotros":"habréis bebido","perfect_present_ellos":"han bebido","perfect_preterite_ellos":"hubieron bebido","perfect_past_ellos":"habían bebido","perfect_conditional_ellos":"habrían bebido","perfect_future_ellos":"habrán bebido","perfect_subjunctive_present_yo":"haya bebido","perfect_subjunctive_past_yo":"hubiera bebido, hubiese bebido","perfect_subjunctive_future_yo":"hubiere bebido","perfect_subjunctive_present_tu":"hayas bebido","perfect_subjunctive_past_tu":"hubieras bebido, hubieses bebido","perfect_subjunctive_future_tu":"hubieres bebido","perfect_subjunctive_present_vos":"hayas bebido","perfect_subjunctive_past_vos":"hubieras bebido, hubieses bebido","perfect_subjunctive_future_vos":"hubieres bebido","perfect_subjunctive_present_el":"haya bebido","perfect_subjunctive_past_el":"hubiera bebido, hubiese bebido","perfect_subjunctive_future_el":"hubiere bebido","perfect_subjunctive_present_nosotros":"hayamos bebido","perfect_subjunctive_past_nosotros":"hubiéramos bebido, hubiésemos bebido","perfect_subjunctive_future_nosotros":"hubiéremos bebido","perfect_subjunctive_present_vosotros":"hayáis bebido","perfect_subjunctive_past_vosotros":"hubierais bebido, hubieseis bebido","perfect_subjunctive_future_vosotros":"hubiereis bebido","perfect_subjunctive_present_ellos":"hayan bebido","perfect_subjunctive_past_ellos":"hubieran bebido, hubiesen bebido","perfect_subjunctive_future_ellos":"hubieren bebido"}';


    public function up()
    {
        $data = array_merge(['infinitive' => $this->infinative], json_decode($this->json, true));
        $this->insertRecords('conjugates', $data);
    }

    public function down()
    {
        $this->deleteRecordsByInfinative('conjugates', $this->infinative);
    }
};
