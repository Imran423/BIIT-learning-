<?php


class Demo
{
    public function demo(){
        if (isset($_POST['btn'])){

            $first = $_POST['first_number'];
            $last = $_POST['last_number'];
            $check = $_POST['check'];
            $res = "";
            if ($first<$last){

                for($a=$first;$a<=$last;$a++){

                    if($a%2!=0 && $check=="odd"){

                        $res.= $a." "; //$res=$res$a""

                    }
                    if($a%2==0 && $check=="even"){

                        $res.= $a." "; //$res=$res$a""

                    }

                }
                return $res;
            }



        }
    }
}