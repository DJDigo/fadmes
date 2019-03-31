<?php
App::uses('AppHelper', 'View/Helper');


class GetFinalGradesHelper extends AppHelper {
    
    public function final($first, $second, $third, $fourth) {
        $total = $first + $second + $third + $fourth;
        $total = $total / 4;

        return $total;
    }
}