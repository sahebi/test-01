<?php
    require_once 'vendor/autoload.php';
    require_once 'spellout.php';

    $data = json_decode(file_get_contents('php://input'), true);
    $number   = $data['number'];
    $language = $data['language'];  
    
    try
    {
        $spellout = new Spellout($number, $language);
        echo json_encode(["spellout" => $spellout->getValue()]);
    }
    catch(Exception $e)
    {
        echo json_encode(["spellout" => $e->getMessage()]);
    }