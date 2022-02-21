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
    private $infinative = 'dar';
    private $json = '{"indicative_present_yo":"doy","indicative_preterite_yo":"di","indicative_imperfect_yo":"daba","indicative_conditional_yo":"daría","indicative_future_yo":"daré","indicative_present_tu":"das","indicative_preterite_tu":"diste","indicative_imperfect_tu":"dabas","indicative_conditional_tu":"darías","indicative_future_tu":"darás","indicative_present_el":"da","indicative_preterite_el":"dio","indicative_imperfect_el":"daba","indicative_conditional_el":"daría","indicative_future_el":"dará","indicative_present_nosotros":"damos","indicative_preterite_nosotros":"dimos","indicative_imperfect_nosotros":"dábamos","indicative_conditional_nosotros":"daríamos","indicative_future_nosotros":"daremos","indicative_present_vosotros":"dais","indicative_preterite_vosotros":"disteis","indicative_imperfect_vosotros":"dabais","indicative_conditional_vosotros":"daríais","indicative_future_vosotros":"daréis","indicative_present_ellos":"dan","indicative_preterite_ellos":"dieron","indicative_imperfect_ellos":"daban","indicative_conditional_ellos":"darían","indicative_future_ellos":"darán","subjunctive_present_yo":"dé","subjunctive_preterite_yo":"diera, diese","subjunctive_imperfect_yo":"diere","subjunctive_present_tu":"des","subjunctive_preterite_tu":"dieras, dieses","subjunctive_imperfect_tu":"dieres","subjunctive_present_el":"dé","subjunctive_preterite_el":"diera, diese","subjunctive_imperfect_el":"diere","subjunctive_present_nosotros":"demos","subjunctive_preterite_nosotros":"diéramos, diésemos","subjunctive_imperfect_nosotros":"diéremos","subjunctive_present_vosotros":"deis","subjunctive_preterite_vosotros":"dierais, dieseis","subjunctive_imperfect_vosotros":"diereis","subjunctive_present_ellos":"den","subjunctive_preterite_ellos":"dieran, diesen","subjunctive_imperfect_ellos":"dieren","imperative_affirmative_yo":"-","imperative_negative_yo":"-","imperative_affirmative_tu":"da","imperative_negative_tu":"no des","imperative_affirmative_ud":"dé","imperative_negative_ud":"no dé","imperative_affirmative_nosotros":"demos","imperative_negative_nosotros":"no demos","imperative_affirmative_vosotros":"dad","imperative_negative_vosotros":"no deis","imperative_affirmative_uds":"den","imperative_negative_uds":"no den","progressive_present_yo":"estoy dando","progressive_preterite_yo":"estuve dando","progressive_imperfect_yo":"estaba dando","progressive_conditional_yo":"estaría dando","progressive_future_yo":"estaré dando","progressive_present_tu":"estás dando","progressive_preterite_tu":"estuviste dando","progressive_imperfect_tu":"estabas dando","progressive_conditional_tu":"estarías dando","progressive_future_tu":"estarás dando","progressive_present_el":"está dando","progressive_preterite_el":"estuvo dando","progressive_imperfect_el":"estaba dando","progressive_conditional_el":"estaría dando","progressive_future_el":"estará dando","progressive_present_nosotros":"estamos dando","progressive_preterite_nosotros":"estuvimos dando","progressive_imperfect_nosotros":"estábamos dando","progressive_conditional_nosotros":"estaríamos dando","progressive_future_nosotros":"estaremos dando","progressive_present_vosotros":"estáis dando","progressive_preterite_vosotros":"estuvisteis dando","progressive_imperfect_vosotros":"estabais dando","progressive_conditional_vosotros":"estaríais dando","progressive_future_vosotros":"estaréis dando","progressive_present_ellos":"están dando","progressive_preterite_ellos":"estuvieron dando","progressive_imperfect_ellos":"estaban dando","progressive_conditional_ellos":"estarían dando","progressive_future_ellos":"estarán dando","perfect_present_yo":"he dado","perfect_preterite_yo":"hube dado","perfect_past_yo":"había dado","perfect_conditional_yo":"habría dado","perfect_future_yo":"habré dado","perfect_present_tu":"has dado","perfect_preterite_tu":"hubiste dado","perfect_past_tu":"habías dado","perfect_conditional_tu":"habrías dado","perfect_future_tu":"habrás dado","perfect_present_el":"ha dado","perfect_preterite_el":"hubo dado","perfect_past_el":"había dado","perfect_conditional_el":"habría dado","perfect_future_el":"habrá dado","perfect_present_nosotros":"hemos dado","perfect_preterite_nosotros":"hubimos dado","perfect_past_nosotros":"habíamos dado","perfect_conditional_nosotros":"habríamos dado","perfect_future_nosotros":"habremos dado","perfect_present_vosotros":"habéis dado","perfect_preterite_vosotros":"hubisteis dado","perfect_past_vosotros":"habíais dado","perfect_conditional_vosotros":"habríais dado","perfect_future_vosotros":"habréis dado","perfect_present_ellos":"han dado","perfect_preterite_ellos":"hubieron dado","perfect_past_ellos":"habían dado","perfect_conditional_ellos":"habrían dado","perfect_future_ellos":"habrán dado","perfect_subjunctive_present_yo":"haya dado","perfect_subjunctive_past_yo":"hubiera dado, hubiese dado","perfect_subjunctive_future_yo":"hubiere dado","perfect_subjunctive_present_tu":"hayas dado","perfect_subjunctive_past_tu":"hubieras dado, hubieses dado","perfect_subjunctive_future_tu":"hubieres dado","perfect_subjunctive_present_el":"haya dado","perfect_subjunctive_past_el":"hubiera dado, hubiese dado","perfect_subjunctive_future_el":"hubiere dado","perfect_subjunctive_present_nosotros":"hayamos dado","perfect_subjunctive_past_nosotros":"hubiéramos dado, hubiésemos dado","perfect_subjunctive_future_nosotros":"hubiéremos dado","perfect_subjunctive_present_vosotros":"hayáis dado","perfect_subjunctive_past_vosotros":"hubierais dado, hubieseis dado","perfect_subjunctive_future_vosotros":"hubiereis dado","perfect_subjunctive_present_ellos":"hayan dado","perfect_subjunctive_past_ellos":"hubieran dado, hubiesen dado","perfect_subjunctive_future_ellos":"hubieren dado"}';


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