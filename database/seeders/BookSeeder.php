<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'One Hundred Years of Solitude',
            'genre' => 'Magical Realism',
            'language' => 'Spanish',
            'isbn' => '9780060883287',
            'year' => 1967,
            'observations' => 'Winner of the Nobel Prize in Literature.',
        ]);

        Book::create([
            'title' => '1984',
            'genre' => 'Dystopian',
            'language' => 'English',
            'isbn' => '9780451524935',
            'year' => 1949,
            'observations' => 'A chilling depiction of totalitarianism.',
        ]);

        Book::create([
            'title' => 'Kafka on the Shore',
            'genre' => 'Fiction',
            'language' => 'Japanese',
            'isbn' => '9781400079278',
            'year' => 2002,
            'observations' => 'A surreal and multi-layered story.',
        ]);

        Book::create([
            'title' => 'The Handmaid\'s Tale',
            'genre' => 'Dystopian',
            'language' => 'English',
            'isbn' => '9780385490818',
            'year' => 1985,
            'observations' => 'A powerful critique of patriarchy.',
        ]);

        Book::create([
            'title' => 'Things Fall Apart',
            'genre' => 'Historical Fiction',
            'language' => 'English',
            'isbn' => '9780385474542',
            'year' => 1958,
            'observations' => 'A tragic tale of colonialism in Nigeria.',
        ]);

        Book::create([
            'title' => 'Pride and Prejudice',
            'genre' => 'Romance',
            'language' => 'English',
            'isbn' => '9780141040349',
            'year' => 1813,
            'observations' => 'A classic romantic novel.',
        ]);

        Book::create([
            'title' => 'The Metamorphosis',
            'genre' => 'Fiction',
            'language' => 'German',
            'isbn' => '9780553213690',
            'year' => 1915,
            'observations' => 'A seminal work of absurdist fiction.',
        ]);

        Book::create([
            'title' => 'The Kite Runner',
            'genre' => 'Drama',
            'language' => 'English',
            'isbn' => '9781594631931',
            'year' => 2003,
            'observations' => 'A tale of friendship and redemption.',
        ]);

        Book::create([
            'title' => 'War and Peace',
            'genre' => 'Historical Fiction',
            'language' => 'Russian',
            'isbn' => '9780307266934',
            'year' => 1869,
            'observations' => 'An epic of Russian history.',
        ]);

        Book::create([
            'title' => 'The House of the Spirits',
            'genre' => 'Magical Realism',
            'language' => 'Spanish',
            'isbn' => '9780553383805',
            'year' => 1982,
            'observations' => 'A family saga infused with magical realism.',
        ]);
    }
}
