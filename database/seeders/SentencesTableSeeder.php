<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SentencesTableSeeder extends Seeder
{
    public function run()
    {
        $sentences = [
            ['phrase' => 'The baby giggled with delight as her mother tickled her tiny $.',                'correct_word' => 'feet'],
            ['phrase' => 'He carefully washed and polished his vintage $ to make it shine.',                'correct_word' => 'car'],
            ['phrase' => 'The athlete stretched his tired $ before his next race.',                'correct_word' => 'muscles'],
            ['phrase' => 'The students eagerly opened their $ and began studying for the exam.',                'correct_word' => 'textbooks'],
            ['phrase' => 'The musician carefully tuned her $ before her performance.',                'correct_word' => 'guitar'],
            ['phrase' => 'The painter carefully mixed the $ to get the perfect shade for her painting.',                'correct_word' => 'colors'],
            ['phrase' => 'The engineer carefully designed and built the $ to ensure its safety.',                'correct_word' => 'bridge'],
            ['phrase' => 'The baby bird bravely took its first flight out of the $.',                'correct_word' => 'nest'],
            ['phrase' => 'The florist carefully arranged the $ into a beautiful bouquet.',                'correct_word' => 'flowers'],
            ['phrase' => 'The surfer paddled out into the ocean and caught a huge $.',                'correct_word' => 'wave'],
            ['phrase' => 'The author carefully crafted the $ and characters for her new novel.',                'correct_word' => 'plot'],
            ['phrase' => 'The doctor carefully examined the $ and prescribed medication for her illness.',                'correct_word' => 'patient'],
            ['phrase' => 'The gardener carefully planted the $ and watered the soil to help the plants grow.',                'correct_word' => 'seeds'],
            ['phrase' => 'The pilot carefully flew the $ through the storm to ensure the safety of the passengers.',                'correct_word' => 'plane'],
            ['phrase' => 'The artist carefully sketched the $ before starting to paint.',                'correct_word' => 'scene'],
            ['phrase' => 'The mechanic carefully inspected the $ and replaced the faulty part.',                'correct_word' => 'car'],
            ['phrase' => 'The swimmer carefully timed her $ to get the best time in the race.',                'correct_word' => 'stroke'],
            ['phrase' => 'The chef carefully chopped the $ to prepare the delicious soup for the guests.',                'correct_word' => 'vegetables'],
            ['phrase' => 'The photographer carefully adjusted the $ to capture the perfect shot.',                'correct_word' => 'lighting'],
            ['phrase' => 'The actor carefully rehearsed his $ before the big performance.',                'correct_word' => 'lines'], ['phrase' => 'The athlete carefully tied his $ before the big game.',                'correct_word' => 'shoes'],
            ['phrase' => 'The scientist carefully analyzed the $ and recorded his findings.',                'correct_word' => 'data'],
            ['phrase' => 'The construction worker carefully laid the $ to build the foundation of the house.',                'correct_word' => 'bricks'],
            ['phrase' => 'The seamstress carefully sewed the $ together to create a beautiful dress.',                'correct_word' => 'fabric'],
            ['phrase' => 'The astronomer carefully observed the $ through her telescope.',                'correct_word' => 'stars'],
            ['phrase' => 'The bartender carefully mixed the $ to make the perfect cocktail.',                'correct_word' => 'ingredients'],
            ['phrase' => 'The farmer carefully tended to his $ to ensure a bountiful harvest.',                'correct_word' => 'crops'],
            ['phrase' => 'The teacher carefully planned her $ to engage her students in learning.',                'correct_word' => 'lessons'],
            ['phrase' => 'The journalist carefully wrote her $ to accurately report the news.',                'correct_word' => 'article'],
            ['phrase' => 'The sculptor carefully chiseled the $ to create a masterpiece.',                'correct_word' => 'marble'],
        ];

        foreach ($sentences as $sentence) {
            DB::table('sentences')->insert([
                'phrase' => $sentence['phrase'],
                'correct_word' => $sentence['correct_word'],
            ]);
        }
    }
}
