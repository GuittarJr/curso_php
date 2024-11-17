<?php
    $validate = [];
    function validate(array $fields ){
        foreach ($fields as $key => $type) {
            switch($type){
                case 's':
                    $validate[$key] = filter_var($_POST[$key],FILTER_SANITIZE_STRING);
                    break;
                case 'i':
                    $validate[$key] = filter_var($_POST[$key],FILTER_SANITIZE_NUMBER_INT);
                    break;
                case 'e':
                    $validate[$key] = filter_var($_POST[$key],FILTER_SANITIZE_EMAIL);
                    break;
                default:
                    break;
            }
        }

        return (object) $validate;
    }
