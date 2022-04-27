#!/usr/bin/php -q
<?php

$data = array(
    array(
        'Name' => 'Trikse',
        'Color' => 'Green',
        'Element' => 'Earth',
        'Likes' => 'Flowers'
        ),
    array(
        'Name' => 'Vardenis',
        'Element' => 'Air',
        'Likes' => 'Singning',
        'Color' => 'Blue'
        ),  
    array(
        'Element' => 'Water',
        'Likes' => 'Dancing',
        'Name' => 'Jonas',
        'Color' => 'Pink'
        ),
);
function find_longest_string($data){
    $length = 0;
    foreach($data as $one){
        foreach($one as $key => $value){
            if(strlen($key) > $length){
               $length = strlen($key);
            } 
            if(strlen($value) > $length){
               $length = strlen($value);
            }
        }
}
    return $length;
};
function print_line($length){
    echo "+";
    for($i =0; $i<4; $i++){
        $line = str_repeat("-", $length+2);
        echo $line;
        echo "+";
    }
    echo "\n";
}

function print_values($data, $length){
    $keys= [];
    foreach($data[0] as $key=>$value){
        $keys[]= $key;
        }
    foreach($data as $one){
        foreach($keys as $key){
            echo'| ';
            echo $one[$key];
            $spaces = $length+1 - strlen($one[$key]);
            $space = str_repeat(" ", $spaces);
            echo $space;
        }
        echo'|';
        echo "\n";
        print_line($length);
    }
}


function print_keys($data, $length){
$key_length = "";
$value_length = "";
    foreach($data as $key => $value){
        $spaces = ($length+1)-strlen($key);
        $space = str_repeat(" ", $spaces);
        
        // echo $spaces;
        $I = "| ";
        $key_length.=$I.=$key.=$space;

        $value_length.=$value;
    }
    echo $key_length;
    echo "| \n";
    // echo $value_length;
}

function main ($data){
    $length = find_longest_string($data);
    print_line($length);
    print_keys($data[0], $length);
    print_line($length);
    print_values($data, $length);
};
main($data);