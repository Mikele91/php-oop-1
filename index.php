<?php
require_once __DIR__ . "/classes/movie.php";

$pulpFiction = new Movie ("Pulp Fiction", "Tarantino", 1994);
echo "<p> Il film {$pulpFiction->getTitolo()} diretto da {$pulpFiction->getRegista()} è uscito nell'anno {$pulpFiction->getAnno()} </p> <hr>";

$cavaliereOscuro = new Movie ("Cavaliere Oscuro", "Nolan", 2008);
echo "<p> Il film {$cavaliereOscuro->getTitolo()} diretto da {$cavaliereOscuro->getRegista()} è uscito nell'anno {$cavaliereOscuro->getAnno()} </p> <hr>";

