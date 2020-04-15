<?php

namespace Valhalla\Commands;

use Valhalla\Commands\BaseCommand;

class StringRecurringCommand extends BaseCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'str:recurring';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Print the recurring character.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $str = $this->ask('Please enter string: ');

        $this->info($str . ' => ' . $this->recurring($str));
    }

    /**
     * Recurring string.
     *
     * @param  string $str
     * @return string
     */
    public function recurring($str)
    {
        foreach (str_split($str) as $value) {
            if (substr_count($str, $value) > 1) {
                return $value;
            }
        }

        return 'null';
    }
}