<?php 
    class Result{
        //Propertise
        public $sum;
        public $grade;

        // Sum Method
        function sum($x, $y){
           $total = $x + $y;
           return $total;
       }

        // Grade Method
       function grade($a){
        if($a >=80 && $a<=100){
            return "A+";
        }elseif($a >=70 && $a<=79){
            return "A";
        }elseif($a >=60 && $a<=69){
            return "A-";
        }elseif($a >=50 && $a<=59){
            return "B";
        }elseif($a >=40 && $a<=49){
            return "C";
        }elseif($a >=33 && $a<=39){
            return "D";
        }elseif($a<33){
            return "F";
        }else{
            return "Enter Valid Marks!";
        }
       }
    }
?>