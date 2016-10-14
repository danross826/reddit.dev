<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function showWelcome()
    {
        return view('welcome');
    }

    public function showIncrement()
    {
    	return redirect()->action('HomeController@increment', array(5));
    }

    public function showUppercase()
    {
    	return redirect()->action('HomeController@uppercase', array('cat'));
    }

    public function rollDice($guess)
    {
    	$data = [];

    	$rolls = [];

    	$rolls[0] = rand(1,6);
    	$rolls[1] = rand(1,6);
    	$rolls[2] = rand(1,6);
    	$rolls[3] = rand(1,6);
    	$rolls[4] = rand(1,6);
    	$rolls[5] = rand(1,6);

    	$data['guess'] = $guess;
    	$data['rolls'] = $rolls;

    	return view('roll-dice')->with($data);
    }

    public function increment($number = 1)
    {
	
		$number++;

		$data['number'] = $number;

		return view('increment')->with($data);
    }

    public function uppercase($word = 'word')
    {
	    $word = $word;

		$wordUpperCase = strtoupper($word);

		$data['word'] = $word;

		$data['wordUpperCase'] = $wordUpperCase;

		return view('uppercase')->with($data);
    }

    public function counter($count)
    {
    	$count++;
    	$data['count'] = $count;

    	return view('counter')->with($data);
    }

}