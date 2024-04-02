<?php 
    
    require './Models/Movie.php';
    require './Models/Prohibited.php'; 
    require './Models/Director.php';

    $movie1 = new Movie("The Beautiful Game", "2 ore", "2024", ["Drammatico", "Sportivo"], new Director("Thea", "Sharrock", "British"), new Prohibited(null));
    $movie2 = new Movie("Povere creature!", "2 ore", "2024", ["Commedia"], new Director("Yorgos", "Lanthimos", "Greek"), new Prohibited('Vietato ai minori'));

    $movies = [
        $movie1,
        $movie2
    ];

?>