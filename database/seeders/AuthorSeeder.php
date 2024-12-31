<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Author::create(['first_name' => 'Gabriel', 'last_name' => 'García Márquez', 'country' => 'Colômbia']);
        Author::create(['first_name' => 'George', 'last_name' => 'Orwell', 'country' => 'Reino Unido']);
        Author::create(['first_name' => 'Haruki', 'last_name' => 'Murakami', 'country' => 'Japão']);
        Author::create(['first_name' => 'Margaret', 'last_name' => 'Atwood', 'country' => 'Canadá']);
        Author::create(['first_name' => 'Toni', 'last_name' => 'Morrison', 'country' => 'Estados Unidos']);
        Author::create(['first_name' => 'Chinua', 'last_name' => 'Achebe', 'country' => 'Nigéria']);
        Author::create(['first_name' => 'Leo', 'last_name' => 'Tolstoy', 'country' => 'Rússia']);
        Author::create(['first_name' => 'Jane', 'last_name' => 'Austen', 'country' => 'Reino Unido']);
        Author::create(['first_name' => 'Franz', 'last_name' => 'Kafka', 'country' => 'República Tcheca']);
        Author::create(['first_name' => 'Isabel', 'last_name' => 'Allende', 'country' => 'Chile']);
        Author::create(['first_name' => 'Khaled', 'last_name' => 'Hosseini', 'country' => 'Afeganistão']);
    }
}
