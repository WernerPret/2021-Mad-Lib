<?php

function generateStory($singularNoun, $verb, $color){
  $story = "The ${singularNoun}s are lovely, ${color}, and deep.\n
But I have promises to keep,\n
And miles to go before I ${verb},\n
And miles to go before I ${verb}.\n";

return $story;

}

echo generateStory("hound", "eat", "green");
// echo generateStory();
// echo generateStory();