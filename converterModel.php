<?php

class Numeral{
    public $numeral = [];
    public $valid_numerals = array("I","V","X","L","C","D","M");
    public $user_input;
    public $decimal_notation = array(1, 5, 10, 50, 100, 500, 1000);
    public $converted_uncounted_decimal_notation = [];
    public $decimal_value = [];

    public function __construct($numeral)
    {
        $this->user_input = str_split(strtoupper($numeral));
    }

    public function gatekeepNumerals()
    {
        foreach($this->user_input as $i){
            if(in_array($i,$this->valid_numerals)){
                $this->numeral[] .= $i;
            }else {
                $this->numeral[] .= 0;
            }
        }
        if(in_array("0", $this->numeral)){
            return "<p>Please only enter valid Roman numerals.</p>";
        }else {
            return $this->numeral;
        }
    }

    public function convertLatinNotationIntoDecimalNotation()
    {
        if(count($this->numeral)!=0) {
            foreach ($this->numeral as $key => $i) {
                if ($i == "I") {
                    $this->converted_uncounted_decimal_notation[] .= 1;
                } elseif ($i == "V") {
                    $this->converted_uncounted_decimal_notation[] .= 5;
                } elseif($i == "X"){
                    $this->converted_uncounted_decimal_notation[] .= 10;
                } elseif ($i == "L") {
                    $this->converted_uncounted_decimal_notation[] .= 50;
                } elseif ($i == "C") {
                    $this->converted_uncounted_decimal_notation[] .= 100;
                } elseif ($i == "D") {
                    $this->converted_uncounted_decimal_notation[] .= 500;
                } elseif ($i == "M") {
                    $this->converted_uncounted_decimal_notation[] .= 1000;
                }
            }
            return $this->converted_uncounted_decimal_notation;
        }
    }

    public function convertLatinValuesIntoDecimalValues()
    {
        #Iterate through array
        #Find values where preceding value is lower
        $len = count($this->converted_uncounted_decimal_notation)-1;
        for($i = 0; $i <= $len; $i++){

            if($i < $len)
            {
                $current_num = $this->converted_uncounted_decimal_notation[$i];
                $next_num = $this->converted_uncounted_decimal_notation[$i+1];
                if($current_num < $next_num){
                    $this->decimal_value[] .= $next_num - $current_num;
                    $i++;
                }else {
                    $this->decimal_value[] .= $this->converted_uncounted_decimal_notation[$i];
                }
            }else{
                $this->decimal_value[] .= $this->converted_uncounted_decimal_notation[$i];
            }
        }
        return strval(array_sum($this->decimal_value));
    }
}

$numeral = new Numeral($_POST['numeral']);
$numeral->gatekeepNumerals();
$numeral->convertLatinNotationIntoDecimalNotation();
?>
<link rel="stylesheet" href="style.css">

<h1>Let Us Convertus</h1>
<div class="display_conversion">
    <p>The decimal notation of that Roman numeral is: <?php echo $numeral->convertLatinValuesIntoDecimalValues();?>.</p>
    <br>
    <br>
    <a href="index.php">Return</a>
</div>


