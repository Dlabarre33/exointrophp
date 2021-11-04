<?php

function hypotenuse($coteAB,$coteAC) {
    // Si un triangle est rectangle, alors le carre de la longueur de l'hypoténuse est égal a la somme
    // des carrés de longueurs des deux autres cotes
        if($coteAB && $coteAC)
        {
            $coteAC_carre=pow($coteAB,2)+pow($coteAC,2);
            $coteAC=sqrt($coteAC_carre);
            return $coteAC;
        }
        else
        {
            return false;
        }
    }
echo hypotenuse(3,6);

?>