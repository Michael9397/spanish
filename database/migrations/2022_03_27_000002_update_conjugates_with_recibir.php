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
    private $infinative = 'recibir';
    private $json = '{"indicative_present_yo":"recibo","indicative_preterite_yo":"recibí","indicative_imperfect_yo":"recibía","indicative_conditional_yo":"recibiría","indicative_future_yo":"recibiré","indicative_present_tu":"recibes","indicative_preterite_tu":"recibiste","indicative_imperfect_tu":"recibías","indicative_conditional_tu":"recibirías","indicative_future_tu":"recibirás","indicative_present_vos":"recibís","indicative_preterite_vos":"recibiste","indicative_imperfect_vos":"recibías","indicative_conditional_vos":"recibirías","indicative_future_vos":"recibirás","indicative_present_el":"recibe","indicative_preterite_el":"recibió","indicative_imperfect_el":"recibía","indicative_conditional_el":"recibiría","indicative_future_el":"recibirá","indicative_present_nosotros":"recibimos","indicative_preterite_nosotros":"recibimos","indicative_imperfect_nosotros":"recibíamos","indicative_conditional_nosotros":"recibiríamos","indicative_future_nosotros":"recibiremos","indicative_present_vosotros":"recibís","indicative_preterite_vosotros":"recibisteis","indicative_imperfect_vosotros":"recibíais","indicative_conditional_vosotros":"recibiríais","indicative_future_vosotros":"recibiréis","indicative_present_ellos":"reciben","indicative_preterite_ellos":"recibieron","indicative_imperfect_ellos":"recibían","indicative_conditional_ellos":"recibirían","indicative_future_ellos":"recibirán","subjunctive_present_yo":"reciba","subjunctive_preterite_yo":"recibiera, recibiese","subjunctive_imperfect_yo":"recibiere","subjunctive_present_tu":"recibas","subjunctive_preterite_tu":"recibieras, recibieses","subjunctive_imperfect_tu":"recibieres","subjunctive_present_vos":"recibas","subjunctive_preterite_vos":"recibieras, recibieses","subjunctive_imperfect_vos":"recibieres","subjunctive_present_el":"reciba","subjunctive_preterite_el":"recibiera, recibiese","subjunctive_imperfect_el":"recibiere","subjunctive_present_nosotros":"recibamos","subjunctive_preterite_nosotros":"recibiéramos, recibiésemos","subjunctive_imperfect_nosotros":"recibiéremos","subjunctive_present_vosotros":"recibáis","subjunctive_preterite_vosotros":"recibierais, recibieseis","subjunctive_imperfect_vosotros":"recibiereis","subjunctive_present_ellos":"reciban","subjunctive_preterite_ellos":"recibieran, recibiesen","subjunctive_imperfect_ellos":"recibieren","imperative_affirmative_yo":"-","imperative_negative_yo":"-","imperative_affirmative_tu":"recibe","imperative_negative_tu":"no recibas","imperative_affirmative_vos":"recibí","imperative_negative_vos":"no recibas","imperative_affirmative_ud":"reciba","imperative_negative_ud":"no reciba","imperative_affirmative_nosotros":"recibamos","imperative_negative_nosotros":"no recibamos","imperative_affirmative_vosotros":"recibid","imperative_negative_vosotros":"no recibáis","imperative_affirmative_uds":"reciban","imperative_negative_uds":"no reciban","progressive_present_yo":"estoy recibiendo","progressive_preterite_yo":"estuve recibiendo","progressive_imperfect_yo":"estaba recibiendo","progressive_conditional_yo":"estaría recibiendo","progressive_future_yo":"estaré recibiendo","progressive_present_tu":"estás recibiendo","progressive_preterite_tu":"estuviste recibiendo","progressive_imperfect_tu":"estabas recibiendo","progressive_conditional_tu":"estarías recibiendo","progressive_future_tu":"estarás recibiendo","progressive_present_vos":"estás recibiendo","progressive_preterite_vos":"estuviste recibiendo","progressive_imperfect_vos":"estabas recibiendo","progressive_conditional_vos":"estarías recibiendo","progressive_future_vos":"estarás recibiendo","progressive_present_el":"está recibiendo","progressive_preterite_el":"estuvo recibiendo","progressive_imperfect_el":"estaba recibiendo","progressive_conditional_el":"estaría recibiendo","progressive_future_el":"estará recibiendo","progressive_present_nosotros":"estamos recibiendo","progressive_preterite_nosotros":"estuvimos recibiendo","progressive_imperfect_nosotros":"estábamos recibiendo","progressive_conditional_nosotros":"estaríamos recibiendo","progressive_future_nosotros":"estaremos recibiendo","progressive_present_vosotros":"estáis recibiendo","progressive_preterite_vosotros":"estuvisteis recibiendo","progressive_imperfect_vosotros":"estabais recibiendo","progressive_conditional_vosotros":"estaríais recibiendo","progressive_future_vosotros":"estaréis recibiendo","progressive_present_ellos":"están recibiendo","progressive_preterite_ellos":"estuvieron recibiendo","progressive_imperfect_ellos":"estaban recibiendo","progressive_conditional_ellos":"estarían recibiendo","progressive_future_ellos":"estarán recibiendo","perfect_present_yo":"he recibido","perfect_preterite_yo":"hube recibido","perfect_past_yo":"había recibido","perfect_conditional_yo":"habría recibido","perfect_future_yo":"habré recibido","perfect_present_tu":"has recibido","perfect_preterite_tu":"hubiste recibido","perfect_past_tu":"habías recibido","perfect_conditional_tu":"habrías recibido","perfect_future_tu":"habrás recibido","perfect_present_vos":"has recibido","perfect_preterite_vos":"hubiste recibido","perfect_past_vos":"habías recibido","perfect_conditional_vos":"habrías recibido","perfect_future_vos":"habrás recibido","perfect_present_el":"ha recibido","perfect_preterite_el":"hubo recibido","perfect_past_el":"había recibido","perfect_conditional_el":"habría recibido","perfect_future_el":"habrá recibido","perfect_present_nosotros":"hemos recibido","perfect_preterite_nosotros":"hubimos recibido","perfect_past_nosotros":"habíamos recibido","perfect_conditional_nosotros":"habríamos recibido","perfect_future_nosotros":"habremos recibido","perfect_present_vosotros":"habéis recibido","perfect_preterite_vosotros":"hubisteis recibido","perfect_past_vosotros":"habíais recibido","perfect_conditional_vosotros":"habríais recibido","perfect_future_vosotros":"habréis recibido","perfect_present_ellos":"han recibido","perfect_preterite_ellos":"hubieron recibido","perfect_past_ellos":"habían recibido","perfect_conditional_ellos":"habrían recibido","perfect_future_ellos":"habrán recibido","perfect_subjunctive_present_yo":"haya recibido","perfect_subjunctive_past_yo":"hubiera recibido, hubiese recibido","perfect_subjunctive_future_yo":"hubiere recibido","perfect_subjunctive_present_tu":"hayas recibido","perfect_subjunctive_past_tu":"hubieras recibido, hubieses recibido","perfect_subjunctive_future_tu":"hubieres recibido","perfect_subjunctive_present_vos":"hayas recibido","perfect_subjunctive_past_vos":"hubieras recibido, hubieses recibido","perfect_subjunctive_future_vos":"hubieres recibido","perfect_subjunctive_present_el":"haya recibido","perfect_subjunctive_past_el":"hubiera recibido, hubiese recibido","perfect_subjunctive_future_el":"hubiere recibido","perfect_subjunctive_present_nosotros":"hayamos recibido","perfect_subjunctive_past_nosotros":"hubiéramos recibido, hubiésemos recibido","perfect_subjunctive_future_nosotros":"hubiéremos recibido","perfect_subjunctive_present_vosotros":"hayáis recibido","perfect_subjunctive_past_vosotros":"hubierais recibido, hubieseis recibido","perfect_subjunctive_future_vosotros":"hubiereis recibido","perfect_subjunctive_present_ellos":"hayan recibido","perfect_subjunctive_past_ellos":"hubieran recibido, hubiesen recibido","perfect_subjunctive_future_ellos":"hubieren recibido"}';


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
