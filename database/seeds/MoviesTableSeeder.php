<?php

use Illuminate\Database\Seeder;
use App\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->delete();
        
        Movie::create(array(
            'title' => 'Crazy Rich Asians',
            'rating' => 'PG-13',
            'length' => 120,
            'description' => "Chinese-American New Yorker Rachel travels to Singapore with her boyfriend Nick to attend his best friend's wedding only to discover he comes from one of Asia\'s most wealthy, prominent families. She must stand up to his judgemental mother, who wants nothing more than to break them up." ,
            'onDVD' => 1,
            'onBluRay' => 1,
        ));
    
        Movie::create(array(
            'title' => 'A Simple Favor',
            'rating' => 'R',
            'length' => 117,
            'description' => "Lonely, cheerful mommy blogger Stephanie becomes obsessed with Emily, the chic, mysterious new mother to the neighborhood. When Emily disappears, Stephanie pieces together clues left behind by her friend while also caring for Emily's son, Nicky, and unwisely getting involved with Emily\'s handsome yet suspicious husband Sean." ,
            'onDVD' => 1,
            'onBluRay' => 1,
        ));
    
        Movie::create(array(
            'title' => 'Smallfoot',
            'rating' => 'PG',
            'length' => 96,
            'description' => "An animated adventure for all ages, with original music and an all-star cast, Smallfoot turns the Bigfoot legend upside down when a bright young Yeti (Channing Tatum) finds something he thought didn’t exist: a human. News of this smallfoot (James Corden) brings him fame and a chance with the girl of his dreams. It also throws the simple Yeti community into an uproar over what else might be out there in the big world beyond their snowy village, in a rollicking story about friendship, courage and the joy of discovery.",
            'onDVD' => 1,
            'onBluRay' => 0,
        ));
    
        Movie::create(array(
            'title' => 'Unbroken: Path to Redemption',
            'rating' => 'PG-13',
            'length' => 88,
            'description' => "The story of Olympian and WWII hero Louis Zamperini continues as he meets and marries the love of his life while struggling with his post-war angst, until a chance meeting with Billy Graham in 1949 changes both of their lives forever.",
            'onDVD' => 1,
            'onBluRay' => 1,
        ));
    
        Movie::create(array(
            'title' => 'Skyscraper',
            'rating' => 'PG-13',
            'length' => 102,
            'description' => "Building security expert Will Sawyer is blamed when the tallest, most advanced building in the world, located in in Hong Kong, bursts into flames. On the run from the police, the former FBI agent and amputee must infiltrate the inferno to rescue his family trapped inside, clear his name and find out the truth behind the attack on the skyscraper. " ,
            'onDVD' => 1,
            'onBluRay' => 1,
        ));
    
        Movie::create(array(
            'title' => 'The Meg',
            'rating' => 'PG-13',
            'length' => 114,
            'description' => "A veteran diver is enlisted to save a submarine that was attacked by the world's largest shark. With the help of an eminent Chinese oceanographer and his daughter, he works against the clock and a prehistoric monster to rescue the crew from the world's deepest trench.",
            'onDVD' => 1,
            'onBluRay' => 1,
        ));
    }
}
