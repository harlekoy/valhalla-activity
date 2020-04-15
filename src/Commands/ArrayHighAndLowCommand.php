<?php

namespace Valhalla\Commands;

use Valhalla\Commands\BaseCommand;

class ArrayHighAndLowCommand extends BaseCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'arr:hi-lo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Print highest and lowest integer.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $arr = $this->askArray('Please enter integer separated by comma: ');

        $this->info('Highest: '.$this->highest($arr));
        $this->info('Lowest: '.$this->lowest($arr));
    }

    /**
     * Get the highest integer.
     *
     * @param array $arr
     * @return int
     */
    public function highest($arr)
    {
        $max = array_shift($arr);

        foreach ($arr as $key => $val) {
            if ($val > $max) {
                $max = $val;
            }
        }

        return $max;
    }

    /**
     * Get the lowest integer.
     *
     * @param array $arr
     * @return int
     */
    public function lowest($arr)
    {
        $min = array_shift($arr);

        foreach ($arr as $key => $val) {
            if ($val < $min) {
                $min = $val;
            }
        }

        return $min;
    }
}