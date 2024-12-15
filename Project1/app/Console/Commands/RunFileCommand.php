<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RunFileCommand extends Command
{
    /**
     * نام کامند که برای اجرا استفاده می‌شود.
     *
     * @var string
     */
    protected $signature = 'run:file';

    /**
     * توضیح کوتاه در مورد کامند.
     *
     * @var string
     */
    protected $description = 'Run a specific PHP file every minute';

    /**
     * اجرای کامند.
     */
    public function handle()
    {
        // مسیر فایل PHP که می‌خواهید اجرا کنید
        $filePath = base_path('app\Console\Tasks\my.php');

        // اجرای فایل PHP
        if (file_exists($filePath)) {
            require $filePath;
            $this->info('File executed successfully.');
        } else {
            $this->error('File not found: ' . $filePath);
        }
    }
}
