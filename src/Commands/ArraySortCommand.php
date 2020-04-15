<?php

namespace Valhalla\Commands;

use Valhalla\Commands\BaseCommand;

class ArraySortCommand extends BaseCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'arr:sort';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Print the sorted array.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $arr = $this->askArray('Please enter integer separated by comma: ');

        // Sort array
        $this->sort($arr);

        $this->info('Sorted array: '.implode(', ', $arr));
    }

    /**
     * Bubble sort.
     *
     * @param  array &$arr
     * @return void
     */
    function sort(&$arr)
    {
        $n = sizeof($arr);

        // Traverse through all array elements
        for($i = 0; $i < $n; $i++)
        {
            // Last i elements are already in place
            for ($j = 0; $j < $n - $i - 1; $j++)
            {
                // traverse the array from 0 to n-i-1
                // Swap if the element found is greater
                // than the next element
                if ($arr[$j] > $arr[$j+1])
                {
                    $t = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $t;
                }
            }
        }
    }
}