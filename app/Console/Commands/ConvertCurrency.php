<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use AmrShawky\LaravelCurrency\Facade\Currency;

class ConvertCurrency extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'currency:convert {usd}';
    

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is a custom command for converting currency (USD To BDT) ';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $usd=(float)$this->argument('usd');
        echo Currency::convert()
        ->from('USD')
        ->to('BDT')
        ->amount($usd)
        ->get();
        
    }
}
