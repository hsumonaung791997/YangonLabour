<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class BackupDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:backup-db';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Backup Database';
    protected $process;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $today = today()->format('Y-m-d');
        
        if(!is_dir(storage_path('app/public/backups'))) mkdir(storage_path('app/public/backups'));
        $this->process = new Process(sprintf(
            'C:\xampp1\mysql\bin\mysqldump --compact --skip-comments -u%s -p%s %s > %s',
            config('database.connections.mysql.username'),
            config('database.connections.mysql.password'),
            config('database.connections.mysql.database'),
            storage_path('app/public/backups/'.$today.'.sql')
        ));
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        try{
            $this->process->mustRun();
            Log::info('Daily DB Backup - Success');
        }catch(PorcessFailedException $exception){
            Log::error('Daily DB Backup - Failed',$exception);
        }
    }
}
