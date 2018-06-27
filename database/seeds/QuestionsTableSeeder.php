<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            ['vraag' => 'Hoeveel last heeft u van haaruitval?', 'symptoom' => 'Haaruitval'],
            ['vraag' => 'Hoeveel last heeft u van huiduitslag?', 'symptoom' => 'huiduitslag'],
            ['vraag' => 'Hoeveel last heeft u van onverklaarbare temperatuur-verhogingen of koorts?', 'symptoom' => 'Koorts'],
            ['vraag' => 'Hoeveel last heeft u van onverklaarbare koude rillingen?', 'symptoom' => 'Koude rillingen'],
            ['vraag' => 'Hoeveel last heeft u van een pijnlijke keel?', 'symptoom' => 'Pijklijke keel'],
            ['vraag' => 'Hoeveel last heeft u van kortademigheid, hoesten?', 'symptoom' => 'kortademigheid, hoesten'],
            ['vraag' => 'Hoeveel last heeft u van maagklachten, buikpijn?', 'symptoom' => 'Maagklachten, buikpijn'],
            ['vraag' => 'Hoeveel last heeft u van een veranderde stoelgang (obstipatie, diarree)?', 'symptoom' => 'Veranderede stoelgang'],
            ['vraag' => 'Hoeveel last heeft u van onverklaarbare gewichtsveranderingen > 3 kg?', 'symptoom' => 'Onverklaarbare gewichtsveranderingen'],
            ['vraag' => 'Hoeveel last heeft u van hartkloppingen, overslaan van het hart?', 'symptoom' => 'Hartkloppingen'],
            ['vraag' => 'Hoeveel last heeft u van pijn in de borstkas, ribben?', 'symptoom' => 'Pijn in de borstkas, ribben'],
            ['vraag' => 'Hoeveel last heeft u van pijn en/ of zwelling in gewrichten?', 'symptoom' => 'Pijn/zwelling gewrichten'],
            ['vraag' => 'Hoeveel last heeft u van pijn in (aanhechting van) spieren en pezen (vgl fibromyalgie)?', 'symptoom' => 'Pijn spieren/pezen'],
            ['vraag' => 'Hoeveel last heeft u van stijfheid van gewrichten en/of rug?', 'symptoom' => 'Stijve gewrichten/rug'],
            ['vraag' => 'Hoeveel last heeft u van tintelingen, dove plekken, plaatselijk branderige of stekende pijn?', 'symptoom' => 'Tintelingen/stekende pijn'],
            ['vraag' => 'Hoeveel last heeft u van spiertrekkingen in het gezicht of elders?', 'symptoom' => 'Spiertrekkingen'],
            ['vraag' => 'Hoeveel last heeft u van spierkrampen, restless legs?', 'symptoom' => 'spierkrampen'],
            ['vraag' => 'Hoeveel last heeft u van dubbelzien, tunnelzicht, moeite met scherp zien?', 'symptoom' => 'Zicht beperking'],
            ['vraag' => 'Hoeveel last heeft u van overgevoeligheid voor licht?', 'symptoom' => 'Overgevoelig voor licht'],
            ['vraag' => 'Hoeveel last heeft u van pijn of jeuk in oren?', 'symptoom' => 'Pijn/jeuk oren'],
            ['vraag' => 'Hoeveel last heeft u van oorsuizen, zoemen of fluiten?', 'symptoom' => 'Gehoor beperking'],
            ['vraag' => 'Hoeveel last heeft u van licht in het hoofd, problemen met staan/ lopen?', 'symptoom' => 'licht in het hoofd'],
            ['vraag' => 'Hoeveel last heeft u van verwardheid, moeite een gedachtespoor vast te houden?', 'symptoom' => 'Verwardheid, aandachtsproblemen'],
            ['vraag' => 'Hoeveel last heeft u van oriëntatie problemen (verdwalen, dingen kwijt raken)?', 'symptoom' => 'Oriëntatie problemen'],
            ['vraag' => 'Hoeveel last heeft u van geïrriteerde blaas, niet kunnen ophouden van urine of juist moeilijk kunnen plassen?', 'symptoom' => 'Geïrriteerde blaas'],
        ]);
    }
}
