<?php
$duomenys = [1,2,4,7,1,6,2,8];

function difference($duomenys){
        $diff = [];
        foreach($duomenys as $number){
            foreach($duomenys as $numbe)
            if($number - $numbe > 0){
                $diff[] = $number - $numbe;
            };
        }
        return array_sum($diff);
}



function find($duomenys){
    $result = [];
    $smallest = INF;
    $found = false;
    for($i = 0; $i<count($duomenys); $i++){
    for($j = 0; $j<count($duomenys); $j++){
            if($i != $j){
            $copy = $duomenys;

            $copy[$j]= $duomenys[$i] + $duomenys[$j]; 
            unset($copy[$i]);
            $copy = array_values($copy);
            $diff = difference($copy);

                
                  if(count($copy)>1){
                      if($diff==1){
                        foreach($copy as $num){
                            echo $num." ";
                        }  
                        echo "difference: ".$diff;
                        echo "<br/>";
                      }
                      if($diff==2){
                        foreach($copy as $num){
                            echo $num." ";
                        }  
                        echo "difference: ".$diff;
                        echo "<br/>";
                      }
                      find($copy);
                  }}}
        break;
                
    }

}


function main($duomenys){
find($duomenys);
};
main($duomenys);

?>
