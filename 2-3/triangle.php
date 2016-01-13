<?php

class ShapeMaker {

    var $input;
    var $ParentArray;

        function __construct($inp){
            
            $this->input = $inp;
            // $this->ParentArray = $ParentArray;
            
            
            $BabyArray = array();

                for ($i = 0; $i < $this->input ; $i++) {

                        $BabyArray[$i] = "*";

                }

                  // print_r($BabyArray);

                for ($i = 0; $i < $this->input; $i++){
                            
                       for ( $j = 0; $j < $this->input; $j++) {
                                     
                           $this->ParentArray[$i] = $BabyArray; 

                  }
            }

            // print_r($this->ParentArray);

        }

        function BackwardsTriangle() {

             $counter = 0;

              for ( $x = 0; $x < ($this->input + 1); $x++) {

                  for( $y = $this->input; $y > $x ; $y--) {
                    
                    echo ' ';

                  }

                  for($j = 0; $j < $counter; $j++) {

                          echo "*";
                          
                 }
                      $counter++;
                      echo "\n";
              }

          echo "\n"; 

       }

        function RegularTriangle() {

           

            for ( $x = 0; $x < ($this->input + 1); $x++) {

                  for( $y = 0; $y < ($x + 1) ; $y++) {

                    echo $this->ParentArray[$x][$y];

                    }

                      echo "\n";
                }

        }

        function UpsideDownTriangle()  {
          
            for ( $x = 0; $x < ($this->input + 1); $x++) {

                  for( $y = $this->input; $y > ($x - 1) ; $y--) {
                    
                    echo $this->ParentArray[$x][$y];

                    }

                      echo "\n";
                }


        }

}

$regular = new ShapeMaker(4);
$regular->RegularTriangle();

$backwards = new ShapeMaker(4);
$backwards->BackwardsTriangle();

$upsidedown = new ShapeMaker(4);
$upsidedown->UpsideDownTriangle();



?>