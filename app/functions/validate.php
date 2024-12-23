<?php
    
    
    
    $validate = [];
    function validate(array $fields ){
        $request = request(); 
        foreach ($fields as $key => $type) {
            switch($type){
                case 's':
                    $validate[$key] = filter_var($request[$key],FILTER_SANITIZE_STRING);
                    break;
                case 'i':
                    $validate[$key] = filter_var($request[$key],FILTER_SANITIZE_NUMBER_INT);
                    break;
                case 'e':
                    $validate[$key] = filter_var($request[$key],FILTER_SANITIZE_EMAIL);
                    break;
                default:
                    break;
            }
        }

        return (object) $validate;
    }

    function isEmpty(){
        $request = request();

        $empty = false;
        foreach ($request as $key => $value) {
            if(empty($request[$key])){
                $empty = true;
            }
        }

        return $empty;
    }
