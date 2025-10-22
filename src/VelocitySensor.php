<?php
namespace App;
class VelocitySensor
{
    function checkVelocity($velocity)
    {
        switch (true) {
            case ($velocity < 30):
                return "Molt Lent";
            case ($velocity >= 30 && $velocity <= 60):
                return "Velocitat Adequada";
            case ($velocity > 60 && $velocity <= 80):
                return "Exces Lleu";
            case ($velocity > 80 && $velocity <= 100):
                return "Exces Moderat";
            case ($velocity > 100):
                return "Exces Greu";
        }
    }
}


?>