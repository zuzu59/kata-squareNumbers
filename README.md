# Carré de chiffres
Kata : remplir un carré de chiffres organisés en lignes, colonnes et spirale.

## But
Cet exercice permet de travailler les boucles dans le langage de votre choix.

## Comment procéder
[Forker](https://github.com/epfl-dojo/kata-squareNumbers/#fork-destination-box) le repo et créer une branche (`git checkout -b username-langage` par exemple `git checkout -b ponsfrilus-nodejs`, depuis votre fork). Faire ensuite une pull request pour l'ajouter à ce repoen vous ajoutant comme contributeurs en bas de ce fichier.

## Problème
Générer un carré de chiffres en lignes, colonnes et spirale. L'utilisateur doit entrer la taille du carré. Le programme affichera les trois versions (lignes, colonnes, spirale), selon exemples ci-dessous.

  * L'utilisateur peut entrer que des chiffres (gestion de l'input/message d'erreur);
  * Les nombres doivent être préfixés d'autant de 0 que nécessaire (e.g. 001 → 100);
  * Les trois carrés de chiffres doivent être affichés.

### - en lignes
```
 3x3          5x5
1 2 3    01 02 03 04 05
4 5 6    06 07 08 09 10
7 8 9    11 12 13 14 15
         16 17 18 19 20
         21 22 23 24 25
```

### - en colonnes
```
 3x3          5x5
1 4 7    01 06 11 16 21
2 5 8    02 07 12 17 22
3 6 9    03 08 13 18 23
         04 09 14 19 24
         05 10 15 20 25
```

### - en spirale
```
 3x3          5x5
7 8 9    21 22 23 24 25
6 1 2    20 07 08 09 10
5 4 3    19 06 01 02 11
         18 05 04 03 12
         17 16 15 14 13
         
9x9
73 74 75 76 77 78 79 80 81 
72 43 44 45 46 47 48 49 50 
71 42 21 22 23 24 25 26 51 
70 41 20 07 08 09 10 27 52 
69 40 19 06 01 02 11 28 53 
68 39 18 05 04 03 12 29 54 
67 38 17 16 15 14 13 30 55 
66 37 36 35 34 33 32 31 56 
65 64 63 62 61 60 59 58 57

10x10
091 092 093 094 095 096 097 098 099 100 
090 057 058 059 060 061 062 063 064 065 
089 056 031 032 033 034 035 036 037 066 
088 055 030 013 014 015 016 017 038 067 
087 054 029 012 003 004 005 018 039 068 
086 053 028 011 002 001 006 019 040 069 
085 052 027 010 009 008 007 020 041 070 
084 051 026 025 024 023 022 021 042 071 
083 050 049 048 047 046 045 044 043 072 
082 081 080 079 078 077 076 075 074 073         

```

## Contributeurs (langages par ordre alphabétique)
  * [python](./squareNumbers.py) → [@epfl-dojo](https://github.com/epfl-dojo)
