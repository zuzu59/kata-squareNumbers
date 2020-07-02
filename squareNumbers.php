<?php
// version plus propre sans le code de debug
//zf200702.1812

$size = 8;
$x = $size;
$y = 0;
$incx = -1;
$incy = 0;
$compteur = $size * $size;

print "Tableau de $size x $size\n";

function initTableau($size) {
  $monTableau = [];
  for ($i=0; $i < $size; $i++) {
    // see https://www.php.net/manual/en/function.array-fill.php
    $monTableau[] = array_fill(0, $size, '0');
  }
  return $monTableau;
}

// init du tableau
$tab = initTableau($size);

function printTableau($tableau) {
  foreach ($tableau as $ligne) {
    foreach ($ligne as $colonne) {
      if ($colonne<10) {
        print " " . $colonne . " ";
      } else {
        print $colonne . " ";
      }
    }
    print "\n";
  }
  print "\n";
}

print "le tableau vide\n";
printTableau($tab);

// print debug
function zdebug() {
    return;
    global $x, $y, $incx, $incy, $size, $compteur;
    // Debug:
    print "incx=" . $incx . ", incy=" . $incy . ", ";
    print "x=" . $x . ", y=" . $y . ", ";
    print "compteur=" . $compteur . "\n";    
}


// fonction de la tortue
function tortue($tab) {
    
    global $x, $y, $incx, $incy, $size, $compteur , $tab;
    
    while($compteur >= 1 && $x >-10)  {
        print "--- Départ boucle...\n";
        zdebug();
        if ($compteur < 8) {
            //printTableau($tab);
        }
        
        //on sauve la position actuelle
        $x2 = $x;
        $y2 = $y;
            
        //la tortue avance d'un pas
        $x = $x+$incx;
        $y = $y+$incy;
        print "--- On a avancé 1...\n";
        zdebug();

        //la tortue vérifie si elle se trouve à l'extérieur du tableau ?
        if (($x < 0) || ($y < 0) || ($x > $size-1) || ($y > $size-1)) {
            //si oui elle tourne à gauche
            print "--- On est à l'extérieur...\n";
            zdebug();
            tourner();
            //print "--- On a tourné...\n";
            //zdebug();

            // on revient où on était
            $x = $x2;
            $y = $y2;
            //la tortue avance d'un pas
            $x = $x+$incx;
            $y = $y+$incy;
            print "--- On a avancé 2...\n";
            zdebug();
        }

        //la tortue vérifie si la case est pleine
        if ($tab[$y][$x] > '0') {
            //si oui elle tourne à gauche
            print "--- La case est pleine...\n";
            zdebug();
            tourner();
            //print "--- On a tourné...\n";
            //zdebug();

            // on revient où on était
            $x = $x2;
            $y = $y2;
            print "--- On revient en arrière...\n";
            zdebug();

            //la tortue avance d'un pas
            $x = $x+$incx;
            $y = $y+$incy;
            print "--- On a avancé 3...\n";
            zdebug();
        }
        
        //elle dépose un oeuf (le numéro de compteur (chiffre))
        print "--- C'est vide on met un oeuf...\n";
        zdebug();
        $tab[$y][$x] = $compteur;
        //on décrémente le compteur
        $compteur--;
        //boucle juste que tout est pleins
    }
}

// fontction tourner à gauche
function tourner() {
    global $x, $y, $incx, $incy, $size, $compteur;
    //si on va à gauche -> descend
    if ($incx==-1 && $incy==0) {
        $incx=0;
        $incy=1;
        return;
    }
    //si on descend -> va à droite
    if ($incx==0 && $incy==1) {
        $incx=1;
        $incy=0;
        return;
    }
    //si on va à droite - > monte
    if ($incx==1 && $incy==0) {
        $incx=0;
        $incy=-1;
        return;
    }
    //si on monte -> va à gauche
    if ($incx==0 && $incy==-1) {
        $incx=-1;
        $incy=0;
        return;
    }
}

tortue($tab);
print "le tableau terminé:\n";
printTableau($tab);










