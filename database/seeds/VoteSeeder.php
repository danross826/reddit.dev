<?php

use Illuminate\Database\Seeder;
use App\Models\Vote;

class VoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $votes_created = App\Models\Vote::count();
        $this->command->info('Starting at ' . $votes_created . ' vote records');
        while ($votes_created <= 2000) {
            $user_id = App\User::all()->random()->id;
            $post_id = App\Models\Post::all()->random()->id;
            $vote = App\Models\Vote::where('post_id', $post_id)->where('user_id', $user_id)->first();
            if (!$vote) {
                $vote = new App\Models\Vote;
                $vote->user_id = $user_id;
                $vote->post_id = $post_id;
                $vote->vote = mt_rand(0, 1);
                $vote->save();
                $votes_created++;
                $thousands_created = $votes_created / 1000;
                if ($votes_created % 1000 == 0) {
                    $this->command->info('Created ' . $thousands_created . '000 vote recoreds');
                }
            }
        }
        App\Models\Post::calculateVoteScore();
    }
}
