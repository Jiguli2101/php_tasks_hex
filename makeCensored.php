<?php
function makeCensored($text, $stopWords)
{
    $template = '$#%!';
    $words = explode(' ', $text);
    for ($i = 0; $i < count($words); $i++) {
        for ($j = 0; $j < count($stopWords); $j++) {
            $words[$i] == $stopWords[$j] ? $words[$i] = $template : $words[$i];
        }
    }
    $zamena_Text = implode($words, ' ');
    return $zamena_Text;
}

$sentence = 'When you play the game of thrones, you win or you die';
makeCensored($sentence, ['die', 'play']);
// => When you $#%! the game of thrones, you win or you $#%!

$sentence2 = 'chicken chicken? chicken! chicken';
makeCensored($sentence2, ['?', 'chicken']);
// => '$#%! chicken? chicken! $#%!';
