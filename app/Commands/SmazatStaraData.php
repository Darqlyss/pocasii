<?php

namespace App\Commands;

use App\Models\Data;
use CodeIgniter\CLI\BaseCommand;

class SmazatStaraData extends BaseCommand
{
    protected $group = 'Pocasi';
    protected $name = 'smazat-stara-data';
    protected $description = 'Soft delete dat starsich nez 11 let.';

    public function run(array $params)
    {
        $data = new Data();
        $datum = date('Y-m-d', strtotime('-11 years'));

        $data
            ->where('date <', $datum)
            ->delete();

        echo "Stara data byla smazana.\n";
    }
}
