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
    private $infinative = 'decir';
    private $json = '{"indicative_present_yo":"digo","indicative_preterite_yo":"dije","indicative_imperfect_yo":"decía","indicative_conditional_yo":"diría","indicative_future_yo":"diré","indicative_present_tu":"dices","indicative_preterite_tu":"dijiste","indicative_imperfect_tu":"decías","indicative_conditional_tu":"dirías","indicative_future_tu":"dirás","indicative_present_el":"dice","indicative_preterite_el":"dijo","indicative_imperfect_el":"decía","indicative_conditional_el":"diría","indicative_future_el":"dirá","indicative_present_nosotros":"decimos","indicative_preterite_nosotros":"dijimos","indicative_imperfect_nosotros":"decíamos","indicative_conditional_nosotros":"diríamos","indicative_future_nosotros":"diremos","indicative_present_vosotros":"decís","indicative_preterite_vosotros":"dijisteis","indicative_imperfect_vosotros":"decíais","indicative_conditional_vosotros":"diríais","indicative_future_vosotros":"diréis","indicative_present_ellos":"dicen","indicative_preterite_ellos":"dijeron","indicative_imperfect_ellos":"decían","indicative_conditional_ellos":"dirían","indicative_future_ellos":"dirán","subjunctive_present_yo":"diga","subjunctive_preterite_yo":"dijera, dijese","subjunctive_imperfect_yo":"dijere","subjunctive_present_tu":"digas","subjunctive_preterite_tu":"dijeras, dijeses","subjunctive_imperfect_tu":"dijeres","subjunctive_present_el":"diga","subjunctive_preterite_el":"dijera, dijese","subjunctive_imperfect_el":"dijere","subjunctive_present_nosotros":"digamos","subjunctive_preterite_nosotros":"dijéramos, dijésemos","subjunctive_imperfect_nosotros":"dijéremos","subjunctive_present_vosotros":"digáis","subjunctive_preterite_vosotros":"dijerais, dijeseis","subjunctive_imperfect_vosotros":"dijereis","subjunctive_present_ellos":"digan","subjunctive_preterite_ellos":"dijeran, dijesen","subjunctive_imperfect_ellos":"dijeren","imperative_affirmative_yo":"-","imperative_negative_yo":"-","imperative_affirmative_tu":"di","imperative_negative_tu":"no digas","imperative_affirmative_ud":"diga","imperative_negative_ud":"no diga","imperative_affirmative_nosotros":"digamos","imperative_negative_nosotros":"no digamos","imperative_affirmative_vosotros":"decid","imperative_negative_vosotros":"no digáis","imperative_affirmative_uds":"digan","imperative_negative_uds":"no digan","progressive_present_yo":"estoy diciendo","progressive_preterite_yo":"estuve diciendo","progressive_imperfect_yo":"estaba diciendo","progressive_conditional_yo":"estaría diciendo","progressive_future_yo":"estaré diciendo","progressive_present_tu":"estás diciendo","progressive_preterite_tu":"estuviste diciendo","progressive_imperfect_tu":"estabas diciendo","progressive_conditional_tu":"estarías diciendo","progressive_future_tu":"estarás diciendo","progressive_present_el":"está diciendo","progressive_preterite_el":"estuvo diciendo","progressive_imperfect_el":"estaba diciendo","progressive_conditional_el":"estaría diciendo","progressive_future_el":"estará diciendo","progressive_present_nosotros":"estamos diciendo","progressive_preterite_nosotros":"estuvimos diciendo","progressive_imperfect_nosotros":"estábamos diciendo","progressive_conditional_nosotros":"estaríamos diciendo","progressive_future_nosotros":"estaremos diciendo","progressive_present_vosotros":"estáis diciendo","progressive_preterite_vosotros":"estuvisteis diciendo","progressive_imperfect_vosotros":"estabais diciendo","progressive_conditional_vosotros":"estaríais diciendo","progressive_future_vosotros":"estaréis diciendo","progressive_present_ellos":"están diciendo","progressive_preterite_ellos":"estuvieron diciendo","progressive_imperfect_ellos":"estaban diciendo","progressive_conditional_ellos":"estarían diciendo","progressive_future_ellos":"estarán diciendo","perfect_present_yo":"he dicho","perfect_preterite_yo":"hube dicho","perfect_past_yo":"había dicho","perfect_conditional_yo":"habría dicho","perfect_future_yo":"habré dicho","perfect_present_tu":"has dicho","perfect_preterite_tu":"hubiste dicho","perfect_past_tu":"habías dicho","perfect_conditional_tu":"habrías dicho","perfect_future_tu":"habrás dicho","perfect_present_el":"ha dicho","perfect_preterite_el":"hubo dicho","perfect_past_el":"había dicho","perfect_conditional_el":"habría dicho","perfect_future_el":"habrá dicho","perfect_present_nosotros":"hemos dicho","perfect_preterite_nosotros":"hubimos dicho","perfect_past_nosotros":"habíamos dicho","perfect_conditional_nosotros":"habríamos dicho","perfect_future_nosotros":"habremos dicho","perfect_present_vosotros":"habéis dicho","perfect_preterite_vosotros":"hubisteis dicho","perfect_past_vosotros":"habíais dicho","perfect_conditional_vosotros":"habríais dicho","perfect_future_vosotros":"habréis dicho","perfect_present_ellos":"han dicho","perfect_preterite_ellos":"hubieron dicho","perfect_past_ellos":"habían dicho","perfect_conditional_ellos":"habrían dicho","perfect_future_ellos":"habrán dicho","perfect_subjunctive_present_yo":"haya dicho","perfect_subjunctive_past_yo":"hubiera dicho, hubiese dicho","perfect_subjunctive_future_yo":"hubiere dicho","perfect_subjunctive_present_tu":"hayas dicho","perfect_subjunctive_past_tu":"hubieras dicho, hubieses dicho","perfect_subjunctive_future_tu":"hubieres dicho","perfect_subjunctive_present_el":"haya dicho","perfect_subjunctive_past_el":"hubiera dicho, hubiese dicho","perfect_subjunctive_future_el":"hubiere dicho","perfect_subjunctive_present_nosotros":"hayamos dicho","perfect_subjunctive_past_nosotros":"hubiéramos dicho, hubiésemos dicho","perfect_subjunctive_future_nosotros":"hubiéremos dicho","perfect_subjunctive_present_vosotros":"hayáis dicho","perfect_subjunctive_past_vosotros":"hubierais dicho, hubieseis dicho","perfect_subjunctive_future_vosotros":"hubiereis dicho","perfect_subjunctive_present_ellos":"hayan dicho","perfect_subjunctive_past_ellos":"hubieran dicho, hubiesen dicho","perfect_subjunctive_future_ellos":"hubieren dicho"}';


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
