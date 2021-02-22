<?php

use PHPUnit\Framework\TestCase;

use DarioMinds\Packages\Vehicle\Vin;

class VinTest extends TestCase
{

    public function setup()
    {
        $this->vin='2T3F1RFV6LC094658';
    }

    public function getVinInstance()
    {
        return new Vin(
            $this->vin
        );
    }

    /**
     * @dataProvider validVinProvider
     */
    public function testValidVin($valid)
    {
        $this->vin=$valid;
        
        $Vin = $this->getVinInstance();

        $this->assertTrue($Vin->checkSum());
    }

    public function validVinProvider()
    {
        return [
            ['2T3F1RFV6LC094658'],
        ];
    }

}
