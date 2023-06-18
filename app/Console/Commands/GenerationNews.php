<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\News;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class GenerationNews extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generation-news {lang*}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $languages = $this->argument('lang');

        $category = Category::create([
            'name' => 'Test category ' . Str::random(6)
        ]);

        $news = $category->news()->create();
        foreach ($languages as $lang) {
            $news->translate()->create([
                'lang' => $lang,
                'name' => 'Test name ' . $lang . ' ' . Str::random(6),
                'body' => 'Test body ' . $lang . ' ' . Str::random(24)
            ]);
        }
    }
}
