<?php 

namespace DarioMinds\Packages\Vehicle;

/**
 * Class VIN  Vehicle Identifier Number
 * 
 * This call can do a checksum verification from the given VIN number if it is valid
 * 
 * @author  Dario Mindoro <dario.mindoro@dealereprocess.com>
 * @version 1.0
 */
class Vin {

        /**
         * @var sum integer holds the total sum result of VIN against the weights constant, this as to initialize to 0;
         */
        private $sum = 0;

        /**
         * @var vin string  holds a 17 alpha-numeric value
         */
        private $vin;

        /**
         * @var expected_check_digit the 9th character (or 8th if zero-based position) on the VIN
         */
        private $expected_check_digit;

        /** @var transliteration array of standard equivalent value of vin character */
        private $transliteration = array(
            'A'=>1, 'B'=>2, 'C'=>3, 'D'=>4, 'E'=>5, 'F'=>6, 'G'=>7, 'H'=>8, 
            'J'=>1, 'K'=>2, 'L'=>3, 'M'=>4, 'N'=>5, 'P'=>7, 'R'=>9,
            'S'=>2, 'T'=>3, 'U'=>4, 'V'=>5, 'W'=>6, 'X'=>7, 'Y'=>8, 'Z'=>9,
        );

        /**
         * @var weights array holds an equivalent constant value for every character of the 17 character VIN
         */
        private $weights = array(8,7,6,5,4,3,2,10,0,9,8,7,6,5,4,3,2);

        /**
         * construct
         * 
         * @param string vin  a valid 17 alpha-numeric data
         */
        public function __construct($vin)
        {
            $this->setVin($vin);
        }

        /**
         * @method checkSum this will do a calculation to get a checkdigit result against expected valud
         * 
         * @return true is VIN is valid otherwise false
         */
        public function checkSum()
        {
            $product = array();
            $value = array();
            echo $this->vin;
            $sv=0;
            $this->sum = 0;

            for($i = 0 ; $i < strlen($this->vin) ; $i++ ) {	
                if(!is_numeric($this->vin[$i])) {
                    $v= $this->transliteration[$this->vin[$i]] * $this->weights[$i];
                    $this->sum +=$v;

                    $value[]=$this->transliteration[$this->vin{$i}];
                } else {
                    $v = $this->vin[$i] * $this->weights[$i];
                    $this->sum +=$v;

                    $value[]=$this->vin[$i];
                }
                $product[]=$v;
                
                $sv=$sv+$v;
            }
        
            $checkdigit = $this->sum % 11;
            if($checkdigit==10){
                $checkdigit="X";
            }
        
            return ($checkdigit==$this->expected_check_digit);
        }

        /**
         * @method displayChecksumSummary display an html table output of the checksum process
         * 
         * @return html a pre-formated table data output
         */
        public function displayChecksumSummary()
        { 
            $product = array();

            $value = array();

            $returnHtml="";

            $sv=0;

            $this->sum = 0;

            for($i = 0 ; $i < strlen($this->vin) ; $i++ ) {	
                if(!is_numeric($this->vin[$i])) {
                    $v= $this->transliteration[$this->vin[$i]] * $this->weights[$i];
                    $this->sum +=$v;

                    $value[]=$this->transliteration[$this->vin{$i}];
                } else {
                    $v = $this->vin[$i] * $this->weights[$i];
                    $this->sum +=$v;

                    $value[]=$this->vin[$i];
                }
                $product[]=$v;
                
                $sv=$sv+$v;
            }
            
            // build a table row for VIN
            $returnHtml.="<table border=1 cellpadding=5 cellspacing=0>";
            $returnHtml.="<tr><td>VIN</td>";

            for($i = 0 ; $i < strlen($this->vin) ; $i++ ) {	
                $returnHtml.="<td>".$this->vin[$i]."</td>";
            }
            $returnHtml.="</tr>";

            // build a table row for actual VIN value
            $returnHtml.="<tr><td>Value</td>";

            foreach($value as $k=>$v){
                $returnHtml.="<td>".$v."</td>";
            }
            $returnHtml.="</tr>";

            // build a table row for products
            $returnHtml.= "<tr><td>Products</td>";

            foreach($product as $k=>$v){
                $returnHtml.= "<td>".$v."</td>";
            }

            $returnHtml.= "</tr>";
            $returnHtml.= "</table>";

            // show the tota sum of products
            $returnHtml.= "<br/> Sum: ".$sv; 
        
            // get a modulous of sum and 11
            $checkdigit = $this->sum % 11;
            if($checkdigit==10){
                $checkdigit="X";
            }

            // show if result check digit is the same on the expected digit
            $returnHtml.= "<br/> check digit: ".$checkdigit;
            $returnHtml.= "<br/> expected check digit: ".$this->expected_check_digit;

            return $returnHtml;
        }

        /**
         * @method setVin setter method for vin, it will also extract the character from the 8th position (zero-based array)
         * 
         * @param string $vin
         */
        private function setVin($vin)
        {

            $invalid_chars = array('O','I','Q');          

            if (!is_string($vin) || strlen($vin) != 17) {
              throw new \InvalidArgumentException('VIN must have 17 alpha-numeric characters only.');
            }
        
            for($i=0;$i<strlen($vin);$i++){
              if (in_array($vin[$i], $invalid_chars))	{
                throw new \InvalidArgumentException("VIN cannot contain I, O or Q letters.");
              }
            }
        
            // vin has to be alphanumeric character except with O,I, and Q.
            if (!ctype_alnum($vin)) {
              throw new \InvalidArgumentException('VIN must have alphanumeric characters only.');
            }

            $this->vin = $vin;
            $this->expected_check_digit=$this->vin[8];
        }

}
