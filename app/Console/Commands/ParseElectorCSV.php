<?php

namespace App\Console\Commands;

use App\Address;
use App\Resident;
use App\ElectorRow;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class ParseElectorCSV extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'electors:parse {file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Parse the elector csv file';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $file = $this->argument('file');
        
        $this->info('Checking the CSV file...');
        if (!Storage::disk('local')->exists($file)) {
            $this->error('The file does not exist');
            return;
        }

        $this->info('Starting parsing of the CSV file');
        $this->info('Truncating the tables...');

        // empty the tables
        Resident::truncate();
        Address::truncate();

        $this->info('Parsing the rows...');
        // go through the CSV
        // make a hash of the address, stick the address in the db, 
        // then check every address/resident for that hash/address
        $addresses = [];
        if (($handle = fopen($this->argument('file'), "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                
                $elector = new ElectorRow($data);
                $hash = md5(implode('', $elector->getAddress()));
                if (!isset($addresses[$hash])) {
                    $addData = $elector->getAddress();
                    $addData['resident_count'] = 0;
                    $address = Address::create($addData);
                    $addresses[$hash] = $address;
                }
                $resData = $elector->getElector();
                $resData['address_id'] = $addresses[$hash]->id;
                $resident = Resident::create($resData);

                $addresses[$hash]->increment('resident_count');
            }
            fclose($handle);
        }

        $this->info('Finished. ');
    }
}
