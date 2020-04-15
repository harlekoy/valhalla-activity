<?php

namespace Valhalla\Commands;

use Valhalla\Commands\BaseCommand;

class StringReverseCommand extends BaseCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'str:reverse';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Print back the same string, except with the words in backwards order.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $str = $this->ask('Please enter string: ');

        $this->info($this->reverse($str));
    }

    /**
     * Reverse string.
     *
     * @param  string $str
     * @return string
     */
    public function reverse($str)
    {
        $reverse = array_reverse(explode(' ', $str));

        return ucfirst(strtolower(implode(' ', $reverse)));
    }
}