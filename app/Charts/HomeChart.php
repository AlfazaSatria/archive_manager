<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class HomeChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $bumbu = Chartisan::build()
        ->labels(['Indomie', 'Sarimi', 'Supermi','Intermi','Sakura','Pop Mie','Non Brand','SI'])
        ->dataset('Bumbu', [1,2,3,4,5,6,7,8]);

        $minyak = Chartisan::build()
        ->labels(['Indomie', 'Sarimi', 'Supermi','Intermi','Sakura','Pop Mie','Non Brand','SI'])
        ->dataset('Bumbu', [1,2,3,4,5,6,7,8]);

        $bumbu_export=Chartisan::build()
        ->labels(['Indomie', 'Sarimi', 'Supermi','Intermi','Sakura','Pop Mie','Non Brand','SI'])
        ->dataset('Bumbu', [1,2,3,4,5,6,7,8]);

        $bulk_export=Chartisan::build()
        ->labels(['Indomie', 'Sarimi', 'Supermi','Intermi','Sakura','Pop Mie','Non Brand','SI'])
        ->dataset('Bumbu', [1,2,3,4,5,6,7,8]);

        $sayur=Chartisan::build()
        ->labels(['Indomie', 'Sarimi', 'Supermi','Intermi','Sakura','Pop Mie','Non Brand','SI'])
        ->dataset('Bumbu', [1,2,3,4,5,6,7,8]);

        return $bumbu;
    }

    // public function handler1(Request $request): Chartisan
    // {
    //     return Chartisan::build()
    //         ->labels(['Indomie', 'Sarimi', 'Supermi','Intermi','Sakura','Pop Mie','Non Brand','SI'])
    //         ->dataset('Bumbu', [1,2,3,4,5,6,7,8]);
    // }
}