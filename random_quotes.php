<?php
// Array of quotes
$quotes = [
    "Success is not final, failure is not fatal: It is the courage to continue that counts. - Winston Churchill",
    "Believe you can and you're halfway there. - Theodore Roosevelt",
    "Happiness is not something ready made. It comes from your own actions. - Dalai Lama",
    "Do what you can, with what you have, where you are. - Theodore Roosevelt",
    "Everything you can imagine is real. - Pablo Picasso",
    "Dream big and dare to fail. - Norman Vaughan",
    "Act as if what you do makes a difference. It does. - William James",
    "It always seems impossible until it’s done. - Nelson Mandela",
    "Don’t watch the clock; do what it does. Keep going. - Sam Levenson",
    "Start where you are. Use what you have. Do what you can. - Arthur Ashe",
    "You miss 100% of the shots you don’t take. - Wayne Gretzky",
    "I have not failed. I’ve just found 10,000 ways that won’t work. - Thomas Edison",
    "Keep your face always toward the sunshine—and shadows will fall behind you. - Walt Whitman",
    "Try to be a rainbow in someone's cloud. - Maya Angelou",
    "The best way to predict your future is to create it. - Abraham Lincoln",
    "Don't be pushed around by the fears in your mind. Be led by the dreams in your heart. - Roy T. Bennett",
    "What lies behind us and what lies before us are tiny matters compared to what lies within us. - Ralph Waldo Emerson",
    "You are never too old to set another goal or to dream a new dream. - C.S. Lewis",
    "Do not wait for the perfect moment, take the moment and make it perfect. - Zoey Sayward",
    "Little by little, a little becomes a lot. - Tanzanian Proverb",
    "Your life does not get better by chance, it gets better by change. - Jim Rohn",
    "The future belongs to those who believe in the beauty of their dreams. - Eleanor Roosevelt",
    "The only limit to our realization of tomorrow is our doubts of today. - Franklin D. Roosevelt",
    "Great things never come from comfort zones. - Unknown",
    "Push yourself, because no one else is going to do it for you. - Unknown",
    "You don’t have to be great to start, but you have to start to be great. - Zig Ziglar",
    "A river cuts through rock not because of its power, but because of its persistence. - James N. Watkins",
];

// Get a random index
$randomIndex = array_rand($quotes);

// Return the random quote
echo $quotes[$randomIndex];
?>
