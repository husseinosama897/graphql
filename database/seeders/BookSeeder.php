<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\books;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
$data = [
    ['name'=>'hellooooooooo','user_id'=>1],
    ['name'=>'hellooooooooo2','user_id'=>2],
    ['name'=>'hellooooooooo25','user_id'=>3],

];

books::insert($data);

    }
}
