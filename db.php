<?php 
    
    require './Models/Movie.php';
    require './Models/Prohibited.php'; 

    $movie1 = new Movie("The Beautiful Game", "2 ore", "2024", ["Drammatico", "Sportivo"], new Prohibited(null));
    $movie2 = new Movie("Povere creature!", "2 ore", "2024", ["Commedia"], new Prohibited('Vietato ai minori'));

    $movies = [
        $movie1,
        $movie2
    ];

?>