<?php




    $data = $_GET['params'];
    $request = array();
    echo $request[] = $data;
    
    $date = date_create();
    $session = date_timestamp_get($date);
    $session = '123456';

    //detect_intent_texts('stryve-c8005',$request,$session);
    echo detect_intent_texts('stryve-f64fe',$request,$session);
    
    
   
    

?>
