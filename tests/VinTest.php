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
    public function testValidVinChecksum($valid)
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

	/**
	 * @dataProvider invalidVinProvider
	 */	
	public function testInvalidVinProvider($invalid)
	{
		$this->expectException(\InvalidArgumentException::class);

		$this->vin = $invalid;

        $Vin = $this->getVinInstance();
	}

	/**
	 * @method invalidVinProvider called by testInvalidVinProvider
	 * 
	 * @return array values for possibel invalid VINs
	 */
	public function invalidVinProvider()
	{
		return [
			['I2233445566778899'],	// with I character
			['O2233445566778899'],	// with O character
			['O223344556677889'],	// 16 characters only
			['O223344556677889LONGVIN'], // morethan 17 characters
			['AB-223344556677889'],	// with special character -
		];
	}


}
