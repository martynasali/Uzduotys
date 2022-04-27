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

        if (count($duomenys) == 0|| count($diff)==0){
            return;
        }
        return (array_sum($diff)/count($diff)/count($duomenys)) ;
}



function find($duomenys){
    for($i = 0; $i<count($duomenys); $i++){
    for($j = 0; $j<count($duomenys); $j++){
            if($i != $j){
            $copy = $duomenys;

            $copy[$j]= $duomenys[$i] + $duomenys[$j]; 
            unset($copy[$i]);
            $copy = array_values($copy);
            $diff = difference($copy);

                
                  if(count($copy)>1){
                      if($diff<0.34 ){
                        foreach($copy as $num){
                            echo $num." ";
                        }  
                        echo "difference: ".$diff;
                        echo "<br/>";
                      }
                      
                      find($copy);
                  }
                }
            }
         break;       
    }

}


function main($duomenys){
    // echo difference([10, 10, 11 ]);
find($duomenys);
};
main($duomenys);

?>
