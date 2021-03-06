<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process;

class DBBackup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'DataBase Schema And Data Backup';

    /**
     * Create a new command instance.
     *
     * @return void
     */

    protected $process;

    public function __construct()
    {
        parent::__construct();

  /*      $today = today()->format('Y-m-d');
        if(!is_dir(storage_path('backups')))
            mkdir(storage_path('backups'));
*/
       /* $this->process = new Process(sprintf('mysqldump --compact --skip-comments -u%s -p%s %s > %s', 
                 config('database.connections.mysql.username'),
                 config('database.connections.mysql.password'),
                 config('database.connections.mysql.database'),
                 storage_path("backups/{$today}.sql")
            ));*/


       /*  $this->process = Process::fromShellCommandline(sprintf('mysqldump --compact --skip-comments -u%s -p%s %s > %s', 
                 config('database.connections.mysql.username'),
                 config('database.connections.mysql.password'),
                 config('database.connections.mysql.database'),
                 storage_path("backups/{$today}.sql")
            ));   */

    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        try{

            //$this->process->mustRun();
            Log::info("Backup Successfully Done");

        }catch(ProcessFailedException $exception){

            Log::error("Backup Failed", $exception);

        }

    }
}
