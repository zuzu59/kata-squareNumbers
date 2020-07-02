<?php
// version plus propre sans le code de debug
//utilisation https://codebunk.com/b/4981100120290/
//zf200702.1835

$size = 19;
$x = $size;
$y = 0;
$incx = -1;
$incy = 0;
$compteur = $size * $size;

// init du tableau
function initTableau($size)
{
    $monTableau = [];
    for ($i=0; $i < $size; $i++) {
        $monTableau[] = array_fill(0, $size, '0');
    }
    return $monTableau;
}

// impression du tableau
function printTableau($tableau)
{
    foreach ($tableau as $ligne) {
        foreach ($ligne as $colonne) {
            if ($colonne<10) {
                print "  " . $colonne . " ";
            } elseif ($colonne<100) {
                print " " . $colonne . " ";
            } else {
                print $colonne . " ";
            }
        }
        print "\n";
    }
    print "\n";
}

// fonction de la tortue
function tortue($tab)
{
    global $x, $y, $incx, $incy, $size, $compteur , $tab;
    while ($compteur >= 1 && $x >-10) {
        if ($compteur < 8) {
        }
        //on sauve la position actuelle
        $x2 = $x;
        $y2 = $y;
        //la tortue avance d'un pas
        $x = $x+$incx;
        $y = $y+$incy;
        //la tortue vérifie si elle se trouve à l'extérieur du tableau ?
        if (($x < 0) || ($y < 0) || ($x > $size-1) || ($y > $size-1)) {
            //si oui elle tourne à gauche
            tourner();
            // on revient où on était
            $x = $x2;
            $y = $y2;
            //la tortue avance d'un pas
            $x = $x+$incx;
            $y = $y+$incy;
        }
        //la tortue vérifie si la case est pleine
        if ($tab[$y][$x] > '0') {
            //si oui elle tourne à gauche
            tourner();
            // on revient où on était
            $x = $x2;
            $y = $y2;
            //la tortue avance d'un pas
            $x = $x+$incx;
            $y = $y+$incy;
        }
        //elle dépose un oeuf (le numéro de compteur (chiffre))
        $tab[$y][$x] = $compteur;
        //on décrémente le compteur
        $compteur--;
        //boucle juste que tout est pleins
    }
}

// fontction tourner à gauche
function tourner()
{
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

print "Tableau de $size x $size\n\n";
$tab = initTableau($size);
tortue($tab);
print "Le tableau terminé:\n";
printTableau($tab);
