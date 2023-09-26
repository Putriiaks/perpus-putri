<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ExportBukus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:export-bukus';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $bukus = Buku::all(); // Ambil semua data buku

        // Gunakan library Excel atau format ekspor yang Anda pilih
        // Contoh menggunakan Laravel Excel package (https://github.com/Maatwebsite/Laravel-Excel)
        Excel::create('exported_bukus.xlsx', function($excel) use ($bukus) {
            $excel->sheet('Sheet 1', function($sheet) use ($bukus) {
                $sheet->fromArray($bukus);
            });
        })->store('xlsx', storage_path('exports'));

        $this->info('Data buku telah diekspor!');
    }
}
