<?php 
    
    require './Models/Movie.php';
    require './Models/Prohibited.php'; 
    require './Models/Director.php';

    $movie1 = new Movie("The Shawshank Redemption",
                        "2 ore e 22 minuti",
                        "1994",
                        ["Drammatico", "Carcere"],
                        new Director("Frank", "Darabont", "Francese"),
                        "https://img.fruugo.com/product/3/62/14284623_max.jpg",
                        new Prohibited('Vietato ai minori di 14 anni'));
    
    $movie2 = new Movie("Il Padrino",
                        "2 ore e 55 minuti",
                        "1972",
                        ["Gangster", "Criminale"],
                        new Director("Francis Ford", "Coppola", "Statunitense"),
                        "https://pad.mymovies.it/filmclub/2002/08/056/locandina.jpg",
                        new Prohibited('Vietato ai minori di 14 anni'));
    
    $movie3 = new Movie("Il Signore degli Anelli: Il Ritorno del Re",
                        "4 ore e 11 minuti",
                        "2003",
                        ["Fantasy", "Avventura"],
                        new Director("Peter", "Jackson", "Neozelandese"),
                        "https://pad.mymovies.it/filmclub/2004/01/014/locandina.jpg",
                        new Prohibited(null));
   
    $movie4 = new Movie("12 Angry Men",
                        "1 ora e 36 minuti",
                        "1957",
                        ["Drammatico", "Giudiziario"],
                        new Director("Sidney", "Lumet", "Statunitense"),
                        "https://filmartgallery.com/cdn/shop/products/12-Angry-Men-Vintage-Movie-Poster-Original-Window-Card-14x22_800x.progressive.jpg?v=1675976408",
                        new Prohibited(null));
    
    $movie5 = new Movie("Schindler's List - La lista di Schindler",
                        "3 ore e 15 minuti",
                        "1993",
                        ["Storico", "Drammatico"],
                        new Director("Steven", "Spielberg", "Statunitense"),
                        "https://pad.mymovies.it/filmclub/2006/02/315/locandina.jpg",
                        new Prohibited('Vietato ai minori di 14 anni'));
    
    $movie6 = new Movie("Il Cavaliere Oscuro",
                        "2 ore e 32 minuti",
                        "2008",
                        ["Azione", "Thriller"],
                        new Director("Christopher", "Nolan", "Inglese"),
                        "https://pad.mymovies.it/filmclub/2007/02/131/locandina.jpg",
                        new Prohibited('Vietato ai minori di 14 anni'));

    $movies = [
        $movie1,
        $movie2,
        $movie3,
        $movie4,
        $movie5,
        $movie6
    ];

?>