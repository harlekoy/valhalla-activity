<?php

namespace Valhalla\Commands;

use Valhalla\Commands\BaseCommand;

class ArrayNumberCombinationCommand extends BaseCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'arr:combination';

    /**
     * @var integer
     */
    protected $desiredSum = 8;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check array of numbers for all combinations of 2 numbers and tell if any combination is equal to 8';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $arr = $this->askArray('Please enter integer separated by comma: ');
        $response = $this->equalToNum($arr) ? 'Yes' : 'No';

        $this->info('Sum = 8 '. $response);
    }

    /**
     * Check number combination.
     *
     * @param  string $arr
     * @return boolean
     */
    public function equalToNum($arr)
    {
        foreach ($arr as $index => $x) {
            $arr2 = $arr;
            unset($arr2[$index]);

            foreach ($arr2 as $y) {
                if ($this->desiredSum == $x+$y) {
                    return true;
                }
            }
        }
    }
}