<?php

use App\Language;
use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(Language $language)
    {
        $languages = collect(['HTML', 'CSS', 'PHP', 'Javascript', 'Ruby', 'Bash/Shell']);
        $languages->each(function($language_name) use ($language) {
            $language->create([
                'name' => $language_name
            ]);
        });
    }
}
