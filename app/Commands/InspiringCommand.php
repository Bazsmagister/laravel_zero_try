<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class InspiringCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'inspiring {name=Artisan}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Display an inspiring quote';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //     $option = $this->menu('Pizza menu', [
        // 'Freshly baked muffins',
        // 'Freshly baked croissants',
        // 'Turnovers, crumb cake, cinnamon buns, scones',
        // ])->open();


        // $option = $this->menu('Pizza menu', [
        // 'Freshly baked muffins',
        // 'Freshly baked croissants',
        // 'Turnovers, crumb cake, cinnamon buns, scones',
        // ])->open();

        $options = [
    'Freshly baked muffins',
    'Freshly baked croissants',
    'Turnovers, crumb cake, cinnamon buns, scones',
    ];

        $option = $this->menu('Pizzamenu2', $options)
    ->setForegroundColour('green')
    ->setBackgroundColour('black')
    ->setWidth(200)
    ->setPadding(10)
    ->setMargin(5)
    ->setExitButtonText("Abort")
    // remove exit button with
    // ->disableDefaultItems()
    // ->setUnselectedMarker('❅')
    // ->setSelectedMarker('✏')
    ->setTitleSeparator('*-')
    ->addLineBreak('<3', 2)
    ->addStaticItem('AREA 2')
    ->open();

        $this->info("You have chosen the option number #$option");

        $this->info('Simplicity is the ultimate sophistication.');
    }

    /**
     * Define the command's schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    public function schedule(Schedule $schedule)
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
