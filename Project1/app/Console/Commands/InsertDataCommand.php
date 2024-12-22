<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Category; // مدل مورد نظر خود را ایمپورت کنید

class InsertDataCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'data:insert';

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
        // داده‌هایی که می‌خواهید درج کنید
        $data = [
            'name' => 'Example Name',
            'description' => 'Example Description',
            'status' => 1,
        ];

        // درج داده در دیتابیس
        Category::create($data);

        // پیام موفقیت
        $this->info('Data inserted successfully!');
    }
}
