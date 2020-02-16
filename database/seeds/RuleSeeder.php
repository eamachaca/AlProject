<?php
use App\Models\Rule;
use Illuminate\Database\Seeder;



class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rule::truncate();

        $rule = new Rule();
        $rule->title="norma # 1";
        $rule->description="esta es la descripcion de la regla #1";
        $rule->portal_id="1";
        $rule->save();

        $rule = new Rule();
        $rule->title="norma # 2";
        $rule->description="esta es la descripcion de la regla #2";
        $rule->portal_id="1";
        $rule->save();

        $rule = new Rule();
        $rule->title="norma # 3";
        $rule->description="esta es la descripcion de la regla #3";
        $rule->portal_id="1";
        $rule->save();


    }
}
