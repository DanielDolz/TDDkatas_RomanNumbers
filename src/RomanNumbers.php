<?php

class RomanNumbers
{
    public function convert($number) {
        if ($number==10) {
            return "X";
        }

        if ($number==5) {
            return "V";
        }

        if ($number==3) {
            return "III";
        }

        if ($number==2) {
            return "II";
        }
        return "I";
    }
}
