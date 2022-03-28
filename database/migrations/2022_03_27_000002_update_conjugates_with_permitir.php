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
    private $infinative = 'permitir';
    private $json = '{"indicative_present_yo":"permito","indicative_preterite_yo":"permití","indicative_imperfect_yo":"permitía","indicative_conditional_yo":"permitiría","indicative_future_yo":"permitiré","indicative_present_tu":"permites","indicative_preterite_tu":"permitiste","indicative_imperfect_tu":"permitías","indicative_conditional_tu":"permitirías","indicative_future_tu":"permitirás","indicative_present_vos":"permitís","indicative_preterite_vos":"permitiste","indicative_imperfect_vos":"permitías","indicative_conditional_vos":"permitirías","indicative_future_vos":"permitirás","indicative_present_el":"permite","indicative_preterite_el":"permitió","indicative_imperfect_el":"permitía","indicative_conditional_el":"permitiría","indicative_future_el":"permitirá","indicative_present_nosotros":"permitimos","indicative_preterite_nosotros":"permitimos","indicative_imperfect_nosotros":"permitíamos","indicative_conditional_nosotros":"permitiríamos","indicative_future_nosotros":"permitiremos","indicative_present_vosotros":"permitís","indicative_preterite_vosotros":"permitisteis","indicative_imperfect_vosotros":"permitíais","indicative_conditional_vosotros":"permitiríais","indicative_future_vosotros":"permitiréis","indicative_present_ellos":"permiten","indicative_preterite_ellos":"permitieron","indicative_imperfect_ellos":"permitían","indicative_conditional_ellos":"permitirían","indicative_future_ellos":"permitirán","subjunctive_present_yo":"permita","subjunctive_preterite_yo":"permitiera, permitiese","subjunctive_imperfect_yo":"permitiere","subjunctive_present_tu":"permitas","subjunctive_preterite_tu":"permitieras, permitieses","subjunctive_imperfect_tu":"permitieres","subjunctive_present_vos":"permitas","subjunctive_preterite_vos":"permitieras, permitieses","subjunctive_imperfect_vos":"permitieres","subjunctive_present_el":"permita","subjunctive_preterite_el":"permitiera, permitiese","subjunctive_imperfect_el":"permitiere","subjunctive_present_nosotros":"permitamos","subjunctive_preterite_nosotros":"permitiéramos, permitiésemos","subjunctive_imperfect_nosotros":"permitiéremos","subjunctive_present_vosotros":"permitáis","subjunctive_preterite_vosotros":"permitierais, permitieseis","subjunctive_imperfect_vosotros":"permitiereis","subjunctive_present_ellos":"permitan","subjunctive_preterite_ellos":"permitieran, permitiesen","subjunctive_imperfect_ellos":"permitieren","imperative_affirmative_yo":"-","imperative_negative_yo":"-","imperative_affirmative_tu":"permite","imperative_negative_tu":"no permitas","imperative_affirmative_vos":"permití","imperative_negative_vos":"no permitas","imperative_affirmative_ud":"permita","imperative_negative_ud":"no permita","imperative_affirmative_nosotros":"permitamos","imperative_negative_nosotros":"no permitamos","imperative_affirmative_vosotros":"permitid","imperative_negative_vosotros":"no permitáis","imperative_affirmative_uds":"permitan","imperative_negative_uds":"no permitan","progressive_present_yo":"estoy permitiendo","progressive_preterite_yo":"estuve permitiendo","progressive_imperfect_yo":"estaba permitiendo","progressive_conditional_yo":"estaría permitiendo","progressive_future_yo":"estaré permitiendo","progressive_present_tu":"estás permitiendo","progressive_preterite_tu":"estuviste permitiendo","progressive_imperfect_tu":"estabas permitiendo","progressive_conditional_tu":"estarías permitiendo","progressive_future_tu":"estarás permitiendo","progressive_present_vos":"estás permitiendo","progressive_preterite_vos":"estuviste permitiendo","progressive_imperfect_vos":"estabas permitiendo","progressive_conditional_vos":"estarías permitiendo","progressive_future_vos":"estarás permitiendo","progressive_present_el":"está permitiendo","progressive_preterite_el":"estuvo permitiendo","progressive_imperfect_el":"estaba permitiendo","progressive_conditional_el":"estaría permitiendo","progressive_future_el":"estará permitiendo","progressive_present_nosotros":"estamos permitiendo","progressive_preterite_nosotros":"estuvimos permitiendo","progressive_imperfect_nosotros":"estábamos permitiendo","progressive_conditional_nosotros":"estaríamos permitiendo","progressive_future_nosotros":"estaremos permitiendo","progressive_present_vosotros":"estáis permitiendo","progressive_preterite_vosotros":"estuvisteis permitiendo","progressive_imperfect_vosotros":"estabais permitiendo","progressive_conditional_vosotros":"estaríais permitiendo","progressive_future_vosotros":"estaréis permitiendo","progressive_present_ellos":"están permitiendo","progressive_preterite_ellos":"estuvieron permitiendo","progressive_imperfect_ellos":"estaban permitiendo","progressive_conditional_ellos":"estarían permitiendo","progressive_future_ellos":"estarán permitiendo","perfect_present_yo":"he permitido","perfect_preterite_yo":"hube permitido","perfect_past_yo":"había permitido","perfect_conditional_yo":"habría permitido","perfect_future_yo":"habré permitido","perfect_present_tu":"has permitido","perfect_preterite_tu":"hubiste permitido","perfect_past_tu":"habías permitido","perfect_conditional_tu":"habrías permitido","perfect_future_tu":"habrás permitido","perfect_present_vos":"has permitido","perfect_preterite_vos":"hubiste permitido","perfect_past_vos":"habías permitido","perfect_conditional_vos":"habrías permitido","perfect_future_vos":"habrás permitido","perfect_present_el":"ha permitido","perfect_preterite_el":"hubo permitido","perfect_past_el":"había permitido","perfect_conditional_el":"habría permitido","perfect_future_el":"habrá permitido","perfect_present_nosotros":"hemos permitido","perfect_preterite_nosotros":"hubimos permitido","perfect_past_nosotros":"habíamos permitido","perfect_conditional_nosotros":"habríamos permitido","perfect_future_nosotros":"habremos permitido","perfect_present_vosotros":"habéis permitido","perfect_preterite_vosotros":"hubisteis permitido","perfect_past_vosotros":"habíais permitido","perfect_conditional_vosotros":"habríais permitido","perfect_future_vosotros":"habréis permitido","perfect_present_ellos":"han permitido","perfect_preterite_ellos":"hubieron permitido","perfect_past_ellos":"habían permitido","perfect_conditional_ellos":"habrían permitido","perfect_future_ellos":"habrán permitido","perfect_subjunctive_present_yo":"haya permitido","perfect_subjunctive_past_yo":"hubiera permitido, hubiese permitido","perfect_subjunctive_future_yo":"hubiere permitido","perfect_subjunctive_present_tu":"hayas permitido","perfect_subjunctive_past_tu":"hubieras permitido, hubieses permitido","perfect_subjunctive_future_tu":"hubieres permitido","perfect_subjunctive_present_vos":"hayas permitido","perfect_subjunctive_past_vos":"hubieras permitido, hubieses permitido","perfect_subjunctive_future_vos":"hubieres permitido","perfect_subjunctive_present_el":"haya permitido","perfect_subjunctive_past_el":"hubiera permitido, hubiese permitido","perfect_subjunctive_future_el":"hubiere permitido","perfect_subjunctive_present_nosotros":"hayamos permitido","perfect_subjunctive_past_nosotros":"hubiéramos permitido, hubiésemos permitido","perfect_subjunctive_future_nosotros":"hubiéremos permitido","perfect_subjunctive_present_vosotros":"hayáis permitido","perfect_subjunctive_past_vosotros":"hubierais permitido, hubieseis permitido","perfect_subjunctive_future_vosotros":"hubiereis permitido","perfect_subjunctive_present_ellos":"hayan permitido","perfect_subjunctive_past_ellos":"hubieran permitido, hubiesen permitido","perfect_subjunctive_future_ellos":"hubieren permitido"}';


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