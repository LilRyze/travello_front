<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use App\Review;

class ReviewsOfTheDay extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reviews:day';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get reviews from Google Places API every day';

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

        $response = file_get_contents('https://maps.googleapis.com/maps/api/place/details/json?placeid=ChIJt5jksChT10AR-agprwnqq3c&fields=name,rating,reviews,formatted_phone_number&key=AIzaSyD3SwgEUVcD2b643E-vhDwQyBKIXwmv56Q');
        $results = json_decode($response);

        if($results->status === 'OK') {
            foreach($results->result->reviews as $result) {
                if(($result->rating) >= 4)
                {
                    $review = Review::where('author_name', $result->author_name)
                        ->where('rating', $result->rating)
                        ->where('time', $result->time)
                        ->first();
                    if(!$review) {
                        Review::create([
                                'author_name' => $result->author_name,
                                'rating' => $result->rating,
                                'text' => $result->text,
                                'time' => $result->time,
                            ]);
                        $this->info('Reviews fetched from Google Places API');
                        } else {
                            $this->info('Already in base');
                        }
                    } else {
                    $this->info('Rating < 4');
                    }
                }
            } else {
        $this->info(' Status is not OK');
        }
    }
}
