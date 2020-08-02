<?php

$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "You'll need to guess what the next number is a number from 1 to 10, once you guessed I'll reveal the actual number and wheter you were right or wrong";

function guessNumber(){
  global $play_count;
  global $correct_guesses;
  global $guess_high;
  global $guess_low;

  $play_count += 1;

  $computerNumber = rand(1,10);

  echo "\n Take a guess as to what number I am thinking of\n";

  $playerGuess = intval(readline(">>"));


  echo "\nRound {$play_count} \n";
  echo "The number I was thinking off was {$computerNumber}\n";
  echo "You Guessed {$playerGuess}\n";

  if($computerNumber===$playerGuess){
    $correct_guesses += 1;
  }elseif($computerNumber>$playerGuess){
    $guess_low+=1;
  }elseif($computerNumber<$playerGuess){
    $guess_high+=1;
  }
}

guessNumber();
guessNumber();
guessNumber();

$perc_correct = round($correct_guesses/$play_count,2);
echo "\nFinal Score\n";
echo "Percentage Correct: {$perc_correct}\n\n";

if($guess_high>$guess_low){
  echo "When you guessed wrong, you tended to guess high.\n";
}elseif($guess_high<$guess_low){
  echo "When you guessed wrong, you tended to guess low.\n";
}else{
  "You guessed evenly high and low when you were wrong\n";
}


