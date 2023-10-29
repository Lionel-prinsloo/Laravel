<?php

use Illuminate\Support\Facades\Route;
//opdracht 2
$planets = [
    [
        'name' => 'Mars',
        'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'
    ],
    [
        'name' => 'Venus',
        'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'
    ],
    [
        'name' => 'Earth',
        'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far that is inhabited by living things.'
    ],
    [
        'name' => 'Jupiter',
        'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.'
    ],
];

//opdrach 1
Route::get('/', function () {
    $planeten = ["Uranus", "Jupiter", "Mars", "Aarde", "Saturnus", "Pluto", "Neptunus", "Venus"];
    return view('planets', ['planets' => $planeten]);
});

//opdracht 3
$planet = request('planet');

if (request()->has('planet')) {
    // Voer code uit als de 'planet' GET-parameter aanwezig is
} else {
    // Voer code uit als de 'planet' GET-parameter ontbreekt
}
