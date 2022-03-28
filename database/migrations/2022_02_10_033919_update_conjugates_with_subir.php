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
    private $infinative = 'subir';
    private $json = '{"indicative_present_yo":"subo","indicative_preterite_yo":"subí","indicative_imperfect_yo":"subía","indicative_conditional_yo":"subiría","indicative_future_yo":"subiré","indicative_present_tu":"subes","indicative_preterite_tu":"subiste","indicative_imperfect_tu":"subías","indicative_conditional_tu":"subirías","indicative_future_tu":"subirás","indicative_present_vos":"subís","indicative_preterite_vos":"subiste","indicative_imperfect_vos":"subías","indicative_conditional_vos":"subirías","indicative_future_vos":"subirás","indicative_present_el":"sube","indicative_preterite_el":"subió","indicative_imperfect_el":"subía","indicative_conditional_el":"subiría","indicative_future_el":"subirá","indicative_present_nosotros":"subimos","indicative_preterite_nosotros":"subimos","indicative_imperfect_nosotros":"subíamos","indicative_conditional_nosotros":"subiríamos","indicative_future_nosotros":"subiremos","indicative_present_vosotros":"subís","indicative_preterite_vosotros":"subisteis","indicative_imperfect_vosotros":"subíais","indicative_conditional_vosotros":"subiríais","indicative_future_vosotros":"subiréis","indicative_present_ellos":"suben","indicative_preterite_ellos":"subieron","indicative_imperfect_ellos":"subían","indicative_conditional_ellos":"subirían","indicative_future_ellos":"subirán","subjunctive_present_yo":"suba","subjunctive_preterite_yo":"subiera, subiese","subjunctive_imperfect_yo":"subiere","subjunctive_present_tu":"subas","subjunctive_preterite_tu":"subieras, subieses","subjunctive_imperfect_tu":"subieres","subjunctive_present_vos":"subas","subjunctive_preterite_vos":"subieras, subieses","subjunctive_imperfect_vos":"subieres","subjunctive_present_el":"suba","subjunctive_preterite_el":"subiera, subiese","subjunctive_imperfect_el":"subiere","subjunctive_present_nosotros":"subamos","subjunctive_preterite_nosotros":"subiéramos, subiésemos","subjunctive_imperfect_nosotros":"subiéremos","subjunctive_present_vosotros":"subáis","subjunctive_preterite_vosotros":"subierais, subieseis","subjunctive_imperfect_vosotros":"subiereis","subjunctive_present_ellos":"suban","subjunctive_preterite_ellos":"subieran, subiesen","subjunctive_imperfect_ellos":"subieren","imperative_affirmative_yo":"-","imperative_negative_yo":"-","imperative_affirmative_tu":"sube","imperative_negative_tu":"no subas","imperative_affirmative_vos":"subí","imperative_negative_vos":"no subas","imperative_affirmative_ud":"suba","imperative_negative_ud":"no suba","imperative_affirmative_nosotros":"subamos","imperative_negative_nosotros":"no subamos","imperative_affirmative_vosotros":"subid","imperative_negative_vosotros":"no subáis","imperative_affirmative_uds":"suban","imperative_negative_uds":"no suban","progressive_present_yo":"estoy subiendo","progressive_preterite_yo":"estuve subiendo","progressive_imperfect_yo":"estaba subiendo","progressive_conditional_yo":"estaría subiendo","progressive_future_yo":"estaré subiendo","progressive_present_tu":"estás subiendo","progressive_preterite_tu":"estuviste subiendo","progressive_imperfect_tu":"estabas subiendo","progressive_conditional_tu":"estarías subiendo","progressive_future_tu":"estarás subiendo","progressive_present_vos":"estás subiendo","progressive_preterite_vos":"estuviste subiendo","progressive_imperfect_vos":"estabas subiendo","progressive_conditional_vos":"estarías subiendo","progressive_future_vos":"estarás subiendo","progressive_present_el":"está subiendo","progressive_preterite_el":"estuvo subiendo","progressive_imperfect_el":"estaba subiendo","progressive_conditional_el":"estaría subiendo","progressive_future_el":"estará subiendo","progressive_present_nosotros":"estamos subiendo","progressive_preterite_nosotros":"estuvimos subiendo","progressive_imperfect_nosotros":"estábamos subiendo","progressive_conditional_nosotros":"estaríamos subiendo","progressive_future_nosotros":"estaremos subiendo","progressive_present_vosotros":"estáis subiendo","progressive_preterite_vosotros":"estuvisteis subiendo","progressive_imperfect_vosotros":"estabais subiendo","progressive_conditional_vosotros":"estaríais subiendo","progressive_future_vosotros":"estaréis subiendo","progressive_present_ellos":"están subiendo","progressive_preterite_ellos":"estuvieron subiendo","progressive_imperfect_ellos":"estaban subiendo","progressive_conditional_ellos":"estarían subiendo","progressive_future_ellos":"estarán subiendo","perfect_present_yo":"he subido","perfect_preterite_yo":"hube subido","perfect_past_yo":"había subido","perfect_conditional_yo":"habría subido","perfect_future_yo":"habré subido","perfect_present_tu":"has subido","perfect_preterite_tu":"hubiste subido","perfect_past_tu":"habías subido","perfect_conditional_tu":"habrías subido","perfect_future_tu":"habrás subido","perfect_present_vos":"has subido","perfect_preterite_vos":"hubiste subido","perfect_past_vos":"habías subido","perfect_conditional_vos":"habrías subido","perfect_future_vos":"habrás subido","perfect_present_el":"ha subido","perfect_preterite_el":"hubo subido","perfect_past_el":"había subido","perfect_conditional_el":"habría subido","perfect_future_el":"habrá subido","perfect_present_nosotros":"hemos subido","perfect_preterite_nosotros":"hubimos subido","perfect_past_nosotros":"habíamos subido","perfect_conditional_nosotros":"habríamos subido","perfect_future_nosotros":"habremos subido","perfect_present_vosotros":"habéis subido","perfect_preterite_vosotros":"hubisteis subido","perfect_past_vosotros":"habíais subido","perfect_conditional_vosotros":"habríais subido","perfect_future_vosotros":"habréis subido","perfect_present_ellos":"han subido","perfect_preterite_ellos":"hubieron subido","perfect_past_ellos":"habían subido","perfect_conditional_ellos":"habrían subido","perfect_future_ellos":"habrán subido","perfect_subjunctive_present_yo":"haya subido","perfect_subjunctive_past_yo":"hubiera subido, hubiese subido","perfect_subjunctive_future_yo":"hubiere subido","perfect_subjunctive_present_tu":"hayas subido","perfect_subjunctive_past_tu":"hubieras subido, hubieses subido","perfect_subjunctive_future_tu":"hubieres subido","perfect_subjunctive_present_vos":"hayas subido","perfect_subjunctive_past_vos":"hubieras subido, hubieses subido","perfect_subjunctive_future_vos":"hubieres subido","perfect_subjunctive_present_el":"haya subido","perfect_subjunctive_past_el":"hubiera subido, hubiese subido","perfect_subjunctive_future_el":"hubiere subido","perfect_subjunctive_present_nosotros":"hayamos subido","perfect_subjunctive_past_nosotros":"hubiéramos subido, hubiésemos subido","perfect_subjunctive_future_nosotros":"hubiéremos subido","perfect_subjunctive_present_vosotros":"hayáis subido","perfect_subjunctive_past_vosotros":"hubierais subido, hubieseis subido","perfect_subjunctive_future_vosotros":"hubiereis subido","perfect_subjunctive_present_ellos":"hayan subido","perfect_subjunctive_past_ellos":"hubieran subido, hubiesen subido","perfect_subjunctive_future_ellos":"hubieren subido"}';


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
