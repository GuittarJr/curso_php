<?php

    
    require "../../../bootstrap.php";

    if(isEmpty()){
      flash();
    }

    $validate = validate([
        'name' => 's',
        'email' => 'e',
        'subject' => 's',
        'message' => 's'
    ]);


    dd($validate->email);
