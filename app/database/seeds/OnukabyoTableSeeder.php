<?php

class OnukabyoTableSeeder extends Seeder {
/**
     * Run the onukabyo seeds.
     *
     * @return void
     */
    public function run()
    {
        $onukabyo = new Onukabyo();
        $onukabyo->user_id = 1;
        $onukabyo->title = "অনুকাব্য";
        $onukabyo->content = "কাব্য";

        $onukabyo->save();

    }
}