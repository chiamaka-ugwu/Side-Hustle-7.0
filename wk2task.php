<?php
    $voter_age = 18;
    $voter_pvc = true;
    $voter_polling_unit = "020";

    if ($voter_age >= 18 && $voter_pvc == true && $voter_polling_unit == "020") {
        echo "Voter eligible to vote.";
    } 

    elseif ($voter_age < 18 && $voter_pvc != true && $voter_polling_unit != "020") {
        echo "Voter is underage and so cannot vote! <br>";
        echo "Voter must have a PVC in order to vote! <br>";
        echo "Voter's polling unit must be 020 in order to vote!";
    }

    elseif ($voter_age < 18 && $voter_pvc != true) {
        echo "Voter is underage and so cannot vote! <br>";
        echo "Voter must have a PVC in order to vote!";
    }

    elseif ($voter_age < 18 && $voter_polling_unit != "020") {
        echo "Voter is underage and so cannot vote! <br>";
        echo "Voter's polling unit must be 020 in order to vote!";
    }

    elseif ($voter_pvc != true && $voter_polling_unit != "020") {
        echo "Voter must have a PVC in order to vote! <br>";
        echo "Voter's polling unit must be 020 in order to vote!";
    } 
    
    elseif ($voter_age < 18) {
        echo "Voter is underage and so cannot vote!";
    } 
    
    elseif ($voter_pvc != true) {
        echo "Voter must have a PVC in order to vote!";
    } 
    
    elseif ($voter_polling_unit != "020") {
        echo "Voter's polling unit must be 020 in order to vote!";
    } 
    


    
?>