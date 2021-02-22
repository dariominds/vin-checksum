<?php 

namespace DarioMinds\Packages\Vehicle;

/**
 * World Manufcaturer Identifier  check the given 2 or 3 character on the begining of VIN values for equivalent manufacturer
 * 
 * @author  Dario Mindoro <dario.mindoro@dealereprocess.com>
 * @version 1.0* 
 */
class Wmi {

        /** @var country string will contain country from given WMI */
        private $country;

        /** @var manufacturer string will contain manufacturer name from given WMI */
        private $manufacturer;

        private $vin;

        /** @var wmi string property that holds 2 to 3 WMI characters */
        private $wmi;

        /**
         * construct
         * 
         * @param string  $wmi  2 or 3 alpha-numeric from the first 3 character of VIN
         */
        public function __construct($wmi)
        {
            $this->setWmi($wmi);
        }   

        /**
         * @method lookUp search for the equivalent country and manufacturer
         */
        public function lookUp()
        {
            if (!empty($this->dataWmi()[$this->wmi])) {
                $this->country=$this->dataWmi()[$this->wmi]['country'];
                $this->manufacturer=$this->dataWmi()[$this->wmi]['manufacturer'];

                echo "<br/>Country: ".$this->country;
                echo "<br/>Manufacturer: ".$this->manufacturer;
            }else{
                $this->country="n/a";
                $this->manufacturer="n/a";
            }
        }
        
        /**
         * @method setWmi take the wmi data from user
         */
        private function setWmi($wmi)
        {
            if (!is_string($wmi) || strlen($wmi) < 2 || strlen($wmi) > 3) {
                throw new \InvalidArgumentException('WMI must be three or two characters only');
            }  

            $this->wmi=$wmi;       
        }

        /**
         *  @method get the data Year 
         */
        private function dataYear()
        {
            //return array(
            //    'A' => 'South Africa',
            //)
        }

        /**
         *  @method dataWmi an associative array containing the equivalent country and manufacturer from the specific wmi.
         */  
        private function dataWmi(){
            return array (
                'AAV' => 
                array (
                  'country' => 'South Africa',
                  'manufacturer' => 'Volkswagen[10]',
                ),
                'ADM' => 
                array (
                  'country' => 'South Africa',
                  'manufacturer' => 'General Motors South Africa',
                ),
                'ADN' => 
                array (
                  'country' => 'South Africa',
                  'manufacturer' => 'Nissan South Africa (Pty) Ltd',
                ),
                'AHT' => 
                array (
                  'country' => 'South Africa',
                  'manufacturer' => 'Toyota[10]',
                ),
                'AFA' => 
                array (
                  'country' => 'South Africa',
                  'manufacturer' => 'Ford',
                ),
                'BF9' => 
                array (
                  'country' => 'Kenya',
                  'manufacturer' => 'KIBO Motorcycles',
                ),
                'CL9' => 
                array (
                  'country' => 'Tunisia',
                  'manufacturer' => 'Wallyscar',
                ),
                'DA1 DA4' => 
                array (
                  'country' => 'Egypt',
                  'manufacturer' => 'Arab American Vehicles Company',
                ),
                'DAA' => 
                array (
                  'country' => 'Egypt',
                  'manufacturer' => 'Fiat Auto Egypt Industrial Co',
                ),
                'DAB' => 
                array (
                  'country' => 'Egypt',
                  'manufacturer' => 'BMW Egypt SKD',
                ),
                'J8B' => 
                array (
                  'country' => 'Japan',
                  'manufacturer' => 'Isuzu Motor Co/Chevrolet',
                ),
                'JA4' => 
                array (
                  'country' => 'Japan',
                  'manufacturer' => 'Mitsubishi',
                ),
                'JAA JAL JAM' => 
                array (
                  'country' => 'Japan',
                  'manufacturer' => 'Isuzu',
                ),
                'JC1' => 
                array (
                  'country' => 'Japan',
                  'manufacturer' => 'Fiat Automobiles/Mazda',
                ),
                'JDA JD1' => 
                array (
                  'country' => 'Japan',
                  'manufacturer' => 'Daihatsu Motor Co. Ltd.',
                ),
                'JF1-JF3' => 
                array (
                  'country' => 'Japan',
                  'manufacturer' => 'Subaru - Fuji Heavy Industries',
                ),
                'JF4' => 
                array (
                  'country' => 'Japan',
                  'manufacturer' => 'SAAB',
                ),
                'JF5' => 
                array (
                  'country' => 'Japan',
                  'manufacturer' => 'Pontiac',
                ),
                'JHD, JHF, JHH' => 
                array (
                  'country' => 'Japan',
                  'manufacturer' => 'Hino[10]',
                ),
                'JHL' => 
                array (
                  'country' => 'Japan',
                  'manufacturer' => 'Honda[10]',
                ),
                'JHM' => 
                array (
                  'country' => 'Japan',
                  'manufacturer' => 'Honda[10]',
                ),
                'JL5' => 
                array (
                  'country' => 'Japan',
                  'manufacturer' => 'Mitsubishi FUSO Truck & Bus Corp',
                ),
                'JM0' => 
                array (
                  'country' => 'Japan',
                  'manufacturer' => 'Mazda for Oceania export',
                ),
                'JM1' => 
                array (
                  'country' => 'Japan',
                  'manufacturer' => 'Mazda',
                ),
                'JMB' => 
                array (
                  'country' => 'Japan',
                  'manufacturer' => 'Mitsubishi[10]',
                ),
                'JM6' => 
                array (
                  'country' => 'Japan',
                  'manufacturer' => 'Mazda[10]',
                ),
                'JN' => 
                array (
                  'country' => 'Japan',
                  'manufacturer' => 'Nissan[10]',
                ),
                'JS' => 
                array (
                  'country' => 'Japan',
                  'manufacturer' => 'Suzuki[10]',
                ),
                'JT' => 
                array (
                  'country' => 'Japan',
                  'manufacturer' => 'Toyota/Lexus[10]',
                ),
                'JY' => 
                array (
                  'country' => 'Japan',
                  'manufacturer' => 'Yamaha[10]',
                ),
                'KL1/KL2/KLA' => 
                array (
                  'country' => 'South Korea',
                  'manufacturer' => 'Daewoo/GM Korea[10]',
                ),
                'KMA' => 
                array (
                  'country' => 'South Korea',
                  'manufacturer' => 'Asia Motors Co Inc',
                ),
                'KMH' => 
                array (
                  'country' => 'South Korea',
                  'manufacturer' => 'Hyundai[10]',
                ),
                'KNA/KNC/KNE' => 
                array (
                  'country' => 'South Korea',
                  'manufacturer' => 'Kia[10]',
                ),
                'KNM' => 
                array (
                  'country' => 'South Korea',
                  'manufacturer' => 'Samsung Motors Inc',
                ),
                'KPT' => 
                array (
                  'country' => 'South Korea',
                  'manufacturer' => 'SsangYong[10]',
                ),
                'L1C' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'Hubei Huawei Special-Purpose Automobile',
                ),
                'L2C' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'Chery Jaguar Land Rover',
                ),
                'L6T' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'Geely',
                ),
                'LA6' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'King Long',
                ),
                'LB3' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'Geely',
                ),
                'LBE' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'Beijing Hyundai',
                ),
                'LBV' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'BMW Brilliance',
                ),
                'LC0' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'BYD Industry',
                ),
                'LDC' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'Dongfeng Peugeot-Citroën',
                ),
                'LDN' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'South East Motor Co Ltd',
                ),
                'LE4' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'Beijing Benz',
                ),
                'LFA' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'Ford Lio Ho Motor Co Ltd',
                ),
                'LFM' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'FAW Toyota',
                ),
                'LFP' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'FAW Car',
                ),
                'LFV' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'FAW-Volkswagen',
                ),
                'LGB' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'Dongfeng Nissan',
                ),
                'LGJ' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'Dongfeng Fengshen',
                ),
                'LGW' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'Great Wall (Havel)',
                ),
                'LGX' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'BYD Auto',
                ),
                'LH1' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'FAW Haima',
                ),
                'LHG' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'Guangzhou Honda',
                ),
                'LJ1' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'JAC',
                ),
                'LJD' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'Dongfeng Yueda Kia',
                ),
                'LJU' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'Shanghai Maple Automobile Co.',
                ),
                'LLV' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'Lifan',
                ),
                'LMG' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'GAC Trumpchi',
                ),
                'LPA' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'Changan PSA (DS Automobiles)',
                ),
                'LPS' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'Polestar',
                ),
                'LS5' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'Changan Suzuki',
                ),
                'LRW' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'Tesla',
                ),
                'LSF' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'SAIC Maxus',
                ),
                'LSG' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'SAIC General Motors',
                ),
                'LSJ' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'SAIC MG',
                ),
                'LSV' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'SAIC Volkswagen',
                ),
                'LTV' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'FAW Toyota (Tianjin)',
                ),
                'LUX' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'Dongfeng Yulon Motor Co. Ltd',
                ),
                'LVG' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'GAC Toyota',
                ),
                'LVH' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'Dongfeng Honda',
                ),
                'LVR' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'Changan Mazda',
                ),
                'LVS' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'Changan Ford',
                ),
                'LVV' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'Chery',
                ),
                'LWV' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'GAC Fiat',
                ),
                'LZW' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'SAIC GM Wuling',
                ),
                'LZY' => 
                array (
                  'country' => 'China',
                  'manufacturer' => 'Yutong',
                ),
                'MA1' => 
                array (
                  'country' => 'India',
                  'manufacturer' => 'Mahindra',
                ),
                'MA3' => 
                array (
                  'country' => 'India',
                  'manufacturer' => 'Maruti Suzuki India Limited|Maruti|Suzuki',
                ),
                'MA6' => 
                array (
                  'country' => 'India',
                  'manufacturer' => 'General Motors India Pvt. Ltd.',
                ),
                'MA7' => 
                array (
                  'country' => 'India',
                  'manufacturer' => 'Hindustan Motors Ltd',
                ),
                'MAJ' => 
                array (
                  'country' => 'India',
                  'manufacturer' => 'Ford India Ltd.',
                ),
                'MAK' => 
                array (
                  'country' => 'India',
                  'manufacturer' => 'Honda Motor India Pvt. Ltd.',
                ),
                'MAL' => 
                array (
                  'country' => 'India',
                  'manufacturer' => 'Hyundai Motors India Ltd',
                ),
                'MAT' => 
                array (
                  'country' => 'India',
                  'manufacturer' => 'Tata Engineering & Locomotive Co',
                ),
                'MB1' => 
                array (
                  'country' => 'India',
                  'manufacturer' => 'Ashok Leyland Ltd',
                ),
                'MBH' => 
                array (
                  'country' => 'India',
                  'manufacturer' => 'Maruti Suzuki Automobiles India Limited',
                ),
                'MBJ' => 
                array (
                  'country' => 'India',
                  'manufacturer' => 'Toyota Kirloskar Motor Pvt Ltd',
                ),
                'MBK' => 
                array (
                  'country' => 'India',
                  'manufacturer' => 'MAN Truck & Bus India Pvt. Ltd',
                ),
                'MBU' => 
                array (
                  'country' => 'India',
                  'manufacturer' => 'Swaraj Vehicles Limited',
                ),
                'MBV' => 
                array (
                  'country' => 'India',
                  'manufacturer' => 'Premier Car World Pvt. Ltd',
                ),
                'MBY' => 
                array (
                  'country' => 'India',
                  'manufacturer' => 'Asia Motor Works good vehicle Ltd',
                ),
                'MC1' => 
                array (
                  'country' => 'India',
                  'manufacturer' => 'Force Motors Limited',
                ),
                'MC2' => 
                array (
                  'country' => 'India',
                  'manufacturer' => 'Eicher Motors Limited',
                ),
                'MC4' => 
                array (
                  'country' => 'India',
                  'manufacturer' => 'Dilip chhabria design pvt ltd',
                ),
                'MCA' => 
                array (
                  'country' => 'India',
                  'manufacturer' => 'FCA India Automobiles Pvt. Ltd',
                ),
                'MCB' => 
                array (
                  'country' => 'India',
                  'manufacturer' => 'General Motors India Pvt. Ltd.',
                ),
                'MCL' => 
                array (
                  'country' => 'India',
                  'manufacturer' => 'International Cars And Motors Ltd',
                ),
                'MD2' => 
                array (
                  'country' => 'India',
                  'manufacturer' => 'Bajaj Auto Ltd',
                ),
                'MDH' => 
                array (
                  'country' => 'India',
                  'manufacturer' => 'Nissan Motor India Pvt Ltd',
                ),
                'MEC' => 
                array (
                  'country' => 'India',
                  'manufacturer' => 'Daimler India Commercial Vehicles Pvt. Ltd.',
                ),
                'MEE' => 
                array (
                  'country' => 'India',
                  'manufacturer' => 'Renault Nissan Automobiles Pvt Ltd',
                ),
                'MH1' => 
                array (
                  'country' => 'Indonesia',
                  'manufacturer' => 'PT Astra Honda Motor',
                ),
                'MLH' => 
                array (
                  'country' => 'Thailand',
                  'manufacturer' => 'Honda',
                ),
                'MM0' => 
                array (
                  'country' => 'Thailand',
                  'manufacturer' => 'Mazda',
                ),
                'MM8' => 
                array (
                  'country' => 'Thailand',
                  'manufacturer' => 'Mazda (Ford-Mazda AAT plant)[11]',
                ),
                'MMB' => 
                array (
                  'country' => 'Thailand',
                  'manufacturer' => 'Mitsubishi[10]',
                ),
                'MMF' => 
                array (
                  'country' => 'Thailand',
                  'manufacturer' => 'BMW[12]',
                ),
                'MMH' => 
                array (
                  'country' => 'Thailand',
                  'manufacturer' => 'Tata[13]',
                ),
                'MMK' => 
                array (
                  'country' => 'Thailand',
                  'manufacturer' => 'Toyota (Auto Works plant)[14]',
                ),
                'MMM' => 
                array (
                  'country' => 'Thailand',
                  'manufacturer' => 'Chevrolet[15]',
                ),
                'MML' => 
                array (
                  'country' => 'Thailand',
                  'manufacturer' => 'MG[15]',
                ),
                'MMR' => 
                array (
                  'country' => 'Thailand',
                  'manufacturer' => 'Subaru[16]',
                ),
                'MMS' => 
                array (
                  'country' => 'Thailand',
                  'manufacturer' => 'Suzuki[17]',
                ),
                'MMT' => 
                array (
                  'country' => 'Thailand',
                  'manufacturer' => 'Mitsubishi[18]',
                ),
                'MNB' => 
                array (
                  'country' => 'Thailand',
                  'manufacturer' => 'Ford (Ford-Mazda AAT plant)[19]',
                ),
                'MNK' => 
                array (
                  'country' => 'Thailand',
                  'manufacturer' => 'Hino Motors Manufacturing Thailand Co Ltd',
                ),
                'MNT' => 
                array (
                  'country' => 'Thailand',
                  'manufacturer' => 'Nissan',
                ),
                'MPA' => 
                array (
                  'country' => 'Thailand',
                  'manufacturer' => 'IMCT Isuzu Motors Company Thailand',
                ),
                'MPB' => 
                array (
                  'country' => 'Thailand',
                  'manufacturer' => 'Ford (FTM plant)[20]',
                ),
                'MP5' => 
                array (
                  'country' => 'Thailand',
                  'manufacturer' => 'Foton[21]',
                ),
                'MRH' => 
                array (
                  'country' => 'Thailand',
                  'manufacturer' => 'Honda',
                ),
                'MR0' => 
                array (
                  'country' => 'Thailand',
                  'manufacturer' => 'Toyota (Ban Pho and Samrong plant)[22]',
                ),
                'MR2' => 
                array (
                  'country' => 'Thailand',
                  'manufacturer' => 'Toyota (Gateway plant)[23]',
                ),
                'MS0' => 
                array (
                  'country' => 'Myanmar',
                  'manufacturer' => 'Kia',
                ),
                'NAA' => 
                array (
                  'country' => 'Iran',
                  'manufacturer' => 'Irankhodro Company',
                ),
                'NAD' => 
                array (
                  'country' => 'Iran',
                  'manufacturer' => 'Saipa Diesel',
                ),
                'NAG' => 
                array (
                  'country' => 'Iran',
                  'manufacturer' => 'Bahman Industrial Group',
                ),
                'NAP' => 
                array (
                  'country' => 'Iran',
                  'manufacturer' => 'Pars Khodro',
                ),
                'NFB' => 
                array (
                  'country' => 'Pakistan',
                  'manufacturer' => 'Honda Atlas Cars Pakistan Ltd',
                ),
                'NLC' => 
                array (
                  'country' => 'Turkey',
                  'manufacturer' => 'Askam Kamyon Imalat Ve Tic.A.S.',
                ),
                'NMA' => 
                array (
                  'country' => 'Turkey',
                  'manufacturer' => 'MAN[10]',
                ),
                'NMT' => 
                array (
                  'country' => 'Turkey',
                  'manufacturer' => 'Toyota',
                ),
                'NM0' => 
                array (
                  'country' => 'Turkey',
                  'manufacturer' => 'Ford Otosan',
                ),
                'NM1' => 
                array (
                  'country' => 'Turkey',
                  'manufacturer' => 'Oyak-Renault Oto Fab AS',
                ),
                'NM4' => 
                array (
                  'country' => 'Turkey',
                  'manufacturer' => 'Tofas Turk Otomobil Fabrikasi AS',
                ),
                'PAB' => 
                array (
                  'country' => 'Philippines',
                  'manufacturer' => 'Isuzu Philippines Corporation',
                ),
                'PL1' => 
                array (
                  'country' => 'Malaysia',
                  'manufacturer' => 'Proton',
                ),
                'PL8' => 
                array (
                  'country' => 'Malaysia',
                  'manufacturer' => 'Hyundai/Inokom',
                ),
                'PLP' => 
                array (
                  'country' => 'Malaysia',
                  'manufacturer' => 'Subaru',
                ),
                'PLZ' => 
                array (
                  'country' => 'Malaysia',
                  'manufacturer' => 'ISUZU',
                ),
                'PMH' => 
                array (
                  'country' => 'Malaysia',
                  'manufacturer' => 'Honda',
                ),
                'PML' => 
                array (
                  'country' => 'Malaysia',
                  'manufacturer' => 'Hicom',
                ),
                'PM1' => 
                array (
                  'country' => 'Malaysia',
                  'manufacturer' => 'BMW',
                ),
                'PM2' => 
                array (
                  'country' => 'Malaysia',
                  'manufacturer' => 'Perodua',
                ),
                'PM9' => 
                array (
                  'country' => 'Malaysia',
                  'manufacturer' => 'Bufori',
                ),
                'PMK' => 
                array (
                  'country' => 'Malaysia',
                  'manufacturer' => 'Honda Boon Siew ',
                ),
                'PMN' => 
                array (
                  'country' => 'Malaysia',
                  'manufacturer' => 'Modenas',
                ),
                'PMV' => 
                array (
                  'country' => 'Malaysia',
                  'manufacturer' => 'Yamaha Hong Leong',
                ),
                'PNA' => 
                array (
                  'country' => 'Malaysia',
                  'manufacturer' => 'Peugeot',
                ),
                'PNV' => 
                array (
                  'country' => 'Malaysia',
                  'manufacturer' => 'Volvo Cars',
                ),
                'PN1/PN2' => 
                array (
                  'country' => 'Malaysia',
                  'manufacturer' => 'Toyota',
                ),
                'PN8' => 
                array (
                  'country' => 'Malaysia',
                  'manufacturer' => 'Nissan',
                ),
                'PP1' => 
                array (
                  'country' => 'Malaysia',
                  'manufacturer' => 'Mazda',
                ),
                'PP3' => 
                array (
                  'country' => 'Malaysia',
                  'manufacturer' => 'Hyundai',
                ),
                'PPP' => 
                array (
                  'country' => 'Malaysia',
                  'manufacturer' => 'Suzuki',
                ),
                'PPV' => 
                array (
                  'country' => 'Malaysia',
                  'manufacturer' => 'Volkswagen',
                ),
                'PR8' => 
                array (
                  'country' => 'Malaysia',
                  'manufacturer' => 'Ford',
                ),
                'PRA' => 
                array (
                  'country' => 'Malaysia',
                  'manufacturer' => 'Sinotruk',
                ),
                'PRH' => 
                array (
                  'country' => 'Malaysia',
                  'manufacturer' => 'Chery',
                ),
                'RF5' => 
                array (
                  'country' => 'Taiwan',
                  'manufacturer' => 'Yulon Motor Co Ltd',
                ),
                'RFD' => 
                array (
                  'country' => 'Taiwan',
                  'manufacturer' => 'Tai Ling Motor Co Ltd',
                ),
                'RHA' => 
                array (
                  'country' => 'Taiwan',
                  'manufacturer' => 'Ford Lio Ho Motor Co Ltd',
                ),
                'RKL' => 
                array (
                  'country' => 'Taiwan',
                  'manufacturer' => 'Toyota Taiwán',
                ),
                'RLE' => 
                array (
                  'country' => 'Vietnam',
                  'manufacturer' => 'Isuzu Vietnam Co Ltd',
                ),
                'SAB' => 
                array (
                  'country' => 'United Kingdom',
                  'manufacturer' => 'Optare',
                ),
                'SAJ' => 
                array (
                  'country' => 'United Kingdom',
                  'manufacturer' => 'Jaguar',
                ),
                'SAL' => 
                array (
                  'country' => 'United Kingdom',
                  'manufacturer' => 'Land Rover[10]',
                ),
                'SAR' => 
                array (
                  'country' => 'United Kingdom',
                  'manufacturer' => 'Rover[10]',
                ),
                'SAT' => 
                array (
                  'country' => 'United Kingdom',
                  'manufacturer' => 'Triumph[10]',
                ),
                'SB1' => 
                array (
                  'country' => 'United Kingdom',
                  'manufacturer' => 'Toyota[10]',
                ),
                'SBM' => 
                array (
                  'country' => 'United Kingdom',
                  'manufacturer' => 'McLaren Automotive[10]',
                ),
                'SCC' => 
                array (
                  'country' => 'United Kingdom',
                  'manufacturer' => 'Lotus Cars[10]',
                ),
                'SCF' => 
                array (
                  'country' => 'United Kingdom',
                  'manufacturer' => 'Aston Martin Lagonda Limited[10]',
                ),
                'SCE' => 
                array (
                  'country' => 'United Kingdom',
                  'manufacturer' => 'DeLorean',
                ),
                'SCK' => 
                array (
                  'country' => 'United Kingdom',
                  'manufacturer' => 'Ifor Williams Trailers',
                ),
                'SDB' => 
                array (
                  'country' => 'United Kingdom',
                  'manufacturer' => 'Talbot Motor Co Ltd',
                ),
                'SFD' => 
                array (
                  'country' => 'United Kingdom',
                  'manufacturer' => 'Alexander Dennis',
                ),
                'SFE' => 
                array (
                  'country' => 'United Kingdom',
                  'manufacturer' => 'Alexander Dennis (North America)',
                ),
                'SHH' => 
                array (
                  'country' => 'United Kingdom',
                  'manufacturer' => 'Honda[10]',
                ),
                'SHS' => 
                array (
                  'country' => 'United Kingdom',
                  'manufacturer' => 'Honda[10]',
                ),
                'SJK SJN' => 
                array (
                  'country' => 'United Kingdom',
                  'manufacturer' => 'Nissan[10]',
                ),
                'SUD' => 
                array (
                  'country' => 'Poland',
                  'manufacturer' => 'Wielton',
                ),
                'SUP' => 
                array (
                  'country' => 'Poland',
                  'manufacturer' => 'Fabryka Samochodow Osobowych',
                ),
                'TCC' => 
                array (
                  'country' => 'Switzerland',
                  'manufacturer' => 'Micro Compact Car[10]',
                ),
                'TEB' => 
                array (
                  'country' => 'UK/Switzerland',
                  'manufacturer' => 'Johnston sweeper (Bucher)',
                ),
                'TMA' => 
                array (
                  'country' => 'Czech Republic',
                  'manufacturer' => 'Hyundai[10]',
                ),
                'TMB' => 
                array (
                  'country' => 'Czech Republic',
                  'manufacturer' => 'Škoda[10]',
                ),
                'TRU' => 
                array (
                  'country' => 'Hungary',
                  'manufacturer' => 'Audi[10]',
                ),
                'TSM' => 
                array (
                  'country' => 'Hungary',
                  'manufacturer' => 'Suzuki[10]',
                ),
                'TW8' => 
                array (
                  'country' => 'Portugal',
                  'manufacturer' => 'General Motors De Portugal Lda',
                ),
                'U5Y' => 
                array (
                  'country' => 'Slovakia',
                  'manufacturer' => 'Kia[10]',
                ),
                'UU' => 
                array (
                  'country' => 'Romania',
                  'manufacturer' => 'Dacia[10]',
                ),
                'VA0' => 
                array (
                  'country' => 'Austria',
                  'manufacturer' => 'ÖAF[10]',
                ),
                'VBK' => 
                array (
                  'country' => 'Austria',
                  'manufacturer' => 'KTM[10]',
                ),
                'VF1' => 
                array (
                  'country' => 'France',
                  'manufacturer' => 'Renault[10]',
                ),
                'VF2' => 
                array (
                  'country' => 'France',
                  'manufacturer' => 'Renault[10]',
                ),
                'VF3' => 
                array (
                  'country' => 'France',
                  'manufacturer' => 'Peugeot[10]',
                ),
                'VF4' => 
                array (
                  'country' => 'France',
                  'manufacturer' => 'Talbot[10]',
                ),
                'VF5' => 
                array (
                  'country' => 'France',
                  'manufacturer' => 'Iveco Unic SA[10]',
                ),
                'VF6' => 
                array (
                  'country' => 'France',
                  'manufacturer' => 'Renault Trucks/Volvo[10]',
                ),
                'VF7' => 
                array (
                  'country' => 'France',
                  'manufacturer' => 'Citroën[10]',
                ),
                'VF8' => 
                array (
                  'country' => 'France',
                  'manufacturer' => 'Matra/Talbot/Simca[10]',
                ),
                'VF9' => 
                array (
                  'country' => 'France',
                  'manufacturer' => 'Bugatti[10]',
                ),
                'VFE' => 
                array (
                  'country' => 'France',
                  'manufacturer' => 'IvecoBus',
                ),
                'VNK' => 
                array (
                  'country' => 'France',
                  'manufacturer' => 'Toyota',
                ),
                'VR1' => 
                array (
                  'country' => 'France',
                  'manufacturer' => 'DS Automobiles',
                ),
                'VS7' => 
                array (
                  'country' => 'Spain',
                  'manufacturer' => 'Citroën',
                ),
                'VSE' => 
                array (
                  'country' => 'Spain',
                  'manufacturer' => 'Santana Motor SA',
                ),
                'VSK' => 
                array (
                  'country' => 'Spain',
                  'manufacturer' => 'Nissan Motor Iberica SA, Nissan Passenger & Multi-Purpose Vehicle',
                ),
                'VSS' => 
                array (
                  'country' => 'Spain',
                  'manufacturer' => 'SEAT[10]',
                ),
                'VSX' => 
                array (
                  'country' => 'Spain',
                  'manufacturer' => 'Opel Automobile Espana,SA',
                ),
                'VV9' => 
                array (
                  'country' => 'Spain',
                  'manufacturer' => 'Tauro Sport Auto',
                ),
                'VX1' => 
                array (
                  'country' => 'Serbia',
                  'manufacturer' => 'Sour Zavodi',
                ),
                'WAG' => 
                array (
                  'country' => 'Germany',
                  'manufacturer' => 'Neoplan[10]',
                ),
                'WAU' => 
                array (
                  'country' => 'Germany',
                  'manufacturer' => 'Audi[10]',
                ),
                'WAP' => 
                array (
                  'country' => 'Germany',
                  'manufacturer' => 'Alpina[10]',
                ),
                'WBA' => 
                array (
                  'country' => 'Germany',
                  'manufacturer' => 'BMW[10]',
                ),
                'WBS' => 
                array (
                  'country' => 'Germany',
                  'manufacturer' => 'BMW M[10]',
                ),
                'WBX' => 
                array (
                  'country' => 'Germany',
                  'manufacturer' => 'BMW[10]',
                ),
                'WDB' => 
                array (
                  'country' => 'Germany',
                  'manufacturer' => 'Mercedes-Benz[10]',
                ),
                'WDC, WDD, WMX' => 
                array (
                  'country' => 'Germany',
                  'manufacturer' => 'DaimlerChrysler AG/Daimler AG[10]',
                ),
                'WEB' => 
                array (
                  'country' => 'Germany',
                  'manufacturer' => 'EvoBus[10]',
                ),
                'WF0' => 
                array (
                  'country' => 'Germany',
                  'manufacturer' => 'Ford of Europe[10]',
                ),
                'WJM' => 
                array (
                  'country' => 'Germany',
                  'manufacturer' => 'Iveco',
                ),
                'WJR' => 
                array (
                  'country' => 'Germany',
                  'manufacturer' => 'Irmscher[10]',
                ),
                'WKK' => 
                array (
                  'country' => 'Germany',
                  'manufacturer' => 'Karl Kässbohrer Fahrzeugwerke[10]',
                ),
                'WMA' => 
                array (
                  'country' => 'Germany',
                  'manufacturer' => 'MAN[10]',
                ),
                'WME' => 
                array (
                  'country' => 'Germany',
                  'manufacturer' => 'Smart[10]',
                ),
                'WMW' => 
                array (
                  'country' => 'Germany',
                  'manufacturer' => 'Mini[10]',
                ),
                'WP0' => 
                array (
                  'country' => 'Germany',
                  'manufacturer' => 'Porsche car[10]',
                ),
                'WP1' => 
                array (
                  'country' => 'Germany[10]',
                  'manufacturer' => 'Porsche SUV',
                ),
                'WUA' => 
                array (
                  'country' => 'Germany',
                  'manufacturer' => 'Quattro[10]',
                ),
                'WVG' => 
                array (
                  'country' => 'Germany',
                  'manufacturer' => 'Volkswagen[10]',
                ),
                'WVW' => 
                array (
                  'country' => 'Germany',
                  'manufacturer' => 'Volkswagen[10]',
                ),
                'WV1' => 
                array (
                  'country' => 'Germany',
                  'manufacturer' => 'Volkswagen Commercial Vehicles[10]',
                ),
                'WV2' => 
                array (
                  'country' => 'Germany',
                  'manufacturer' => 'Volkswagen Commercial Vehicles[10]',
                ),
                'W08' => 
                array (
                  'country' => 'Germany',
                  'manufacturer' => 'Adam Opel AG Belgium',
                ),
                'W09' => 
                array (
                  'country' => 'Germany',
                  'manufacturer' => 'Ruf Automobile[10]',
                ),
                'W0L' => 
                array (
                  'country' => 'Germany',
                  'manufacturer' => 'Opel/Vauxhall[10]',
                ),
                'W0SV' => 
                array (
                  'country' => 'Germany',
                  'manufacturer' => 'Opel Special Vehicles[10]',
                ),
                'XLR' => 
                array (
                  'country' => 'Netherlands',
                  'manufacturer' => 'DAF Trucks[10]',
                ),
                'XTA' => 
                array (
                  'country' => 'Russia',
                  'manufacturer' => 'AvtoVAZ[10]',
                ),
                'XTB' => 
                array (
                  'country' => 'Russia',
                  'manufacturer' => 'AZLK[10]',
                ),
                'XU1' => 
                array (
                  'country' => 'Russia',
                  'manufacturer' => 'UAZ Special Purpose Vehicles Ltd',
                ),
                'XUF' => 
                array (
                  'country' => 'Russia',
                  'manufacturer' => 'General Motors Auto',
                ),
                'XWB' => 
                array (
                  'country' => 'Uzbekistán',
                  'manufacturer' => 'Daewoo GM Uzbekistán',
                ),
                'Y6D' => 
                array (
                  'country' => 'Ukraine',
                  'manufacturer' => 'Zaporiz\'kyi avtozavod',
                ),
                'YK1' => 
                array (
                  'country' => 'Finland',
                  'manufacturer' => 'Saab[10]',
                ),
                'YS2' => 
                array (
                  'country' => 'Sweden',
                  'manufacturer' => 'Scania, Södertälje[10]',
                ),
                'YS3' => 
                array (
                  'country' => 'Sweden',
                  'manufacturer' => 'Saab[10]',
                ),
                'YS4' => 
                array (
                  'country' => 'Sweden',
                  'manufacturer' => 'Scania, Katrineholm[10]',
                ),
                'YTN' => 
                array (
                  'country' => 'Sweden',
                  'manufacturer' => 'Saab NEVS',
                ),
                'YV1' => 
                array (
                  'country' => 'Sweden',
                  'manufacturer' => 'Volvo Cars[10]',
                ),
                'YV2' => 
                array (
                  'country' => 'Sweden',
                  'manufacturer' => 'Volvo Trucks[10]',
                ),
                'YV3' => 
                array (
                  'country' => 'Sweden',
                  'manufacturer' => 'Volvo Buses[10]',
                ),
                'YT9' => 
                array (
                  'country' => 'Sweden',
                  'manufacturer' => 'Koenigsegg Automotive AB[24]',
                ),
                'ZA9' => 
                array (
                  'country' => 'Italy',
                  'manufacturer' => 'Bugatti Automobili S.p.A',
                ),
                'ZAA' => 
                array (
                  'country' => 'Italy',
                  'manufacturer' => 'Autobianchi',
                ),
                'ZAM' => 
                array (
                  'country' => 'Italy',
                  'manufacturer' => 'Maserati[10]',
                ),
                'ZAP' => 
                array (
                  'country' => 'Italy',
                  'manufacturer' => 'Piaggio[25]',
                ),
                'ZAR' => 
                array (
                  'country' => 'Italy',
                  'manufacturer' => 'Alfa Romeo[10]',
                ),
                'ZCF' => 
                array (
                  'country' => 'Italy',
                  'manufacturer' => 'Iveco[10]',
                ),
                'ZFA' => 
                array (
                  'country' => 'Italy',
                  'manufacturer' => 'Fiat[10]',
                ),
                'ZFF' => 
                array (
                  'country' => 'Italy',
                  'manufacturer' => 'Ferrari[10]',
                ),
                'ZGA' => 
                array (
                  'country' => 'Italy',
                  'manufacturer' => 'IvecoBus[10]',
                ),
                'ZHW' => 
                array (
                  'country' => 'Italy',
                  'manufacturer' => 'Lamborghini[10]',
                ),
                'ZLA' => 
                array (
                  'country' => 'Italy',
                  'manufacturer' => 'Lancia[10]',
                ),
                '1B' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Dodge[10]',
                ),
                '1C' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Chrysler[10]',
                ),
                '1F' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Ford[10]',
                ),
                '1G' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'General Motors[10]',
                ),
                '1G1' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Chevrolet',
                ),
                '1G3' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Oldsmobile',
                ),
                '1G4' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Buick[26]',
                ),
                '1G9' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Google',
                ),
                '1GB' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Chevrolet incomplete vehicles[26]',
                ),
                '1GC' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Chevrolet',
                ),
                '1GD' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'GMC incomplete vehicles[26]',
                ),
                '1GM' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Pontiac',
                ),
                '1HG' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Honda[10]',
                ),
                '1J' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Jeep[10]',
                ),
                '1L' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Lincoln[10]',
                ),
                '1M' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Mercury[10]',
                ),
                '1MR' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Continental[10]',
                ),
                '1N' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Nissan',
                ),
                '1VW' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Volkswagen[10]',
                ),
                '1YV' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Mazda[10]',
                ),
                '1ZV' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Ford',
                ),
                '19U' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Honda[10]',
                ),
                '2DG' => 
                array (
                  'country' => 'Canada',
                  'manufacturer' => 'Ontario Drive & Gear',
                ),
                '2F' => 
                array (
                  'country' => 'Canada',
                  'manufacturer' => 'Ford[10]',
                ),
                '2Gx' => 
                array (
                  'country' => 'Canada',
                  'manufacturer' => 'General Motors[10]',
                ),
                '2G1' => 
                array (
                  'country' => 'Canada',
                  'manufacturer' => 'Chevrolet',
                ),
                '2G2' => 
                array (
                  'country' => 'Canada',
                  'manufacturer' => 'Pontiac',
                ),
                '2G9' => 
                array (
                  'country' => 'Canada',
                  'manufacturer' => 'Gnome Homes',
                ),
                '2HG' => 
                array (
                  'country' => 'Canada',
                  'manufacturer' => 'Honda',
                ),
                '2HH' => 
                array (
                  'country' => 'Canada',
                  'manufacturer' => 'Acura',
                ),
                '2HJ' => 
                array (
                  'country' => 'Canada',
                  'manufacturer' => 'Honda',
                ),
                '2HK' => 
                array (
                  'country' => 'Canada',
                  'manufacturer' => 'Honda',
                ),
                '2HM' => 
                array (
                  'country' => 'Canada',
                  'manufacturer' => 'Hyundai',
                ),
                '2L9' => 
                array (
                  'country' => 'Canada',
                  'manufacturer' => 'Les Contenants Durabac',
                ),
                '2LN' => 
                array (
                  'country' => 'Canada',
                  'manufacturer' => 'Lincoln[10]',
                ),
                '2M' => 
                array (
                  'country' => 'Canada',
                  'manufacturer' => 'Mercury[10]',
                ),
                '2T' => 
                array (
                  'country' => 'Canada',
                  'manufacturer' => 'Toyota',
                ),
                '3F' => 
                array (
                  'country' => 'Mexico',
                  'manufacturer' => 'Ford',
                ),
                '3G' => 
                array (
                  'country' => 'Mexico',
                  'manufacturer' => 'General Motors[10]',
                ),
                '3HG' => 
                array (
                  'country' => 'Mexico',
                  'manufacturer' => 'Honda[10]',
                ),
                '3HM' => 
                array (
                  'country' => 'Mexico',
                  'manufacturer' => 'Honda',
                ),
                '3KP' => 
                array (
                  'country' => 'Mexico',
                  'manufacturer' => 'Kia[10]',
                ),
                '3N' => 
                array (
                  'country' => 'Mexico',
                  'manufacturer' => 'Nissan[10]',
                ),
                '3VW' => 
                array (
                  'country' => 'Mexico',
                  'manufacturer' => 'Volkswagen[10]',
                ),
                '4F' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Mazda[10]',
                ),
                '4J' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Mercedes-Benz[10]',
                ),
                '4M' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Mercury',
                ),
                '4S2' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Isuzu Motors America Inc',
                ),
                '4S3' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Subaru[10]',
                ),
                '4S4' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Subaru[10]',
                ),
                '4S6' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Honda',
                ),
                '4T' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Toyota[10]',
                ),
                '4US' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'BMW[10]',
                ),
                '5FN' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Honda[10]',
                ),
                '5FR' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Honda[10]',
                ),
                '5J6' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Honda[10]',
                ),
                '5L' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Lincoln',
                ),
                '5N1' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Nissan',
                ),
                '5NM' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Hyundai',
                ),
                '5NP' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Hyundai',
                ),
                '5T' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Toyota[10]',
                ),
                '5U' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'BMW[10]',
                ),
                '5X' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Hyundai/Kia',
                ),
                '5YJ' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Tesla[10]',
                ),
                55 => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Mercedes-Benz[10]',
                ),
                '6F' => 
                array (
                  'country' => 'Australia',
                  'manufacturer' => 'Ford[10]',
                ),
                '6G' => 
                array (
                  'country' => 'Australia',
                  'manufacturer' => 'General Motors',
                ),
                '6G1' => 
                array (
                  'country' => 'Australia',
                  'manufacturer' => 'Chevrolet',
                ),
                '6G2' => 
                array (
                  'country' => 'Australia',
                  'manufacturer' => 'Pontiac',
                ),
                '6H' => 
                array (
                  'country' => 'Australia',
                  'manufacturer' => 'Holden',
                ),
                '6MM' => 
                array (
                  'country' => 'Australia',
                  'manufacturer' => 'Mitsubishi[10]',
                ),
                '6T1' => 
                array (
                  'country' => 'Australia',
                  'manufacturer' => 'Toyota',
                ),
                '6T9' => 
                array (
                  'country' => 'Australia',
                  'manufacturer' => 'Trailer',
                ),
                '6U9' => 
                array (
                  'country' => 'Australia',
                  'manufacturer' => 'Vehicles without a 17 character VIN which intended to be registered in Australia[27]',
                ),
                '7A1' => 
                array (
                  'country' => 'New Zealand',
                  'manufacturer' => 'Mitsubishi',
                ),
                '7A3' => 
                array (
                  'country' => 'New Zealand',
                  'manufacturer' => 'Honda',
                ),
                '7A4' => 
                array (
                  'country' => 'New Zealand',
                  'manufacturer' => 'Toyota',
                ),
                '7A5' => 
                array (
                  'country' => 'New Zealand',
                  'manufacturer' => 'Ford',
                ),
                '7A8' => 
                array (
                  'country' => 'New Zealand',
                  'manufacturer' => 'NZ Transport Agency (pre-2009)',
                ),
                '7AT' => 
                array (
                  'country' => 'New Zealand',
                  'manufacturer' => 'NZ Transport Agency (post-2009)',
                ),
                '7FA' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Honda',
                ),
                '7JR' => 
                array (
                  'country' => 'United States',
                  'manufacturer' => 'Volvo',
                ),
                829 => 
                array (
                  'country' => 'Bolivia',
                  'manufacturer' => 'Quantum',
                ),
                '8AP' => 
                array (
                  'country' => 'Argentina',
                  'manufacturer' => 'Fiat',
                ),
                '8AF' => 
                array (
                  'country' => 'Argentina',
                  'manufacturer' => 'Ford[10]',
                ),
                '8AG' => 
                array (
                  'country' => 'Argentina',
                  'manufacturer' => 'General Motors',
                ),
                '8AW' => 
                array (
                  'country' => 'Argentina',
                  'manufacturer' => 'Volkswagen',
                ),
                '8AJ' => 
                array (
                  'country' => 'Argentina',
                  'manufacturer' => 'Toyota',
                ),
                '8A1' => 
                array (
                  'country' => 'Argentina',
                  'manufacturer' => 'Renault',
                ),
                '8AC' => 
                array (
                  'country' => 'Argentina',
                  'manufacturer' => 'Mercedes Benz',
                ),
                '8BB' => 
                array (
                  'country' => 'Argentina',
                  'manufacturer' => 'Agrale Argentina S.A',
                ),
                '8BC' => 
                array (
                  'country' => 'Argentina',
                  'manufacturer' => 'Citroën',
                ),
                '8AD' => 
                array (
                  'country' => 'Argentina',
                  'manufacturer' => 'Peugeot',
                ),
                '8AN' => 
                array (
                  'country' => 'Argentina',
                  'manufacturer' => 'Nissan',
                ),
                '8C3' => 
                array (
                  'country' => 'Argentina',
                  'manufacturer' => 'Honda',
                ),
                '8AT' => 
                array (
                  'country' => 'Argentina',
                  'manufacturer' => 'Iveco',
                ),
                '8G1 8GD' => 
                array (
                  'country' => 'Chile',
                  'manufacturer' => 'Automotores Franco Chilena S.A',
                ),
                '8GG' => 
                array (
                  'country' => 'Chile',
                  'manufacturer' => 'General Motors Chile S.A',
                ),
                '8LB' => 
                array (
                  'country' => 'Ecuador',
                  'manufacturer' => 'General Motors OBB',
                ),
                '8LF' => 
                array (
                  'country' => 'Ecuador',
                  'manufacturer' => 'Maresa',
                ),
                '8LG' => 
                array (
                  'country' => 'Ecuador',
                  'manufacturer' => 'Aymesa',
                ),
                '8Z1' => 
                array (
                  'country' => 'Venezuela',
                  'manufacturer' => 'General Motors Venezolana C.A.',
                ),
                '9AM' => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'Massari',
                ),
                '9BD' => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'Fiat Automóveis',
                ),
                '9BG' => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'General Motors',
                ),
                '9BW' => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'Volkswagen[10]',
                ),
                '9BF' => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'Ford',
                ),
                '93H' => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'Honda',
                ),
                '9BR' => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'Toyota',
                ),
                936 => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'Peugeot',
                ),
                935 => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'Citroën',
                ),
                '93P' => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'Volare',
                ),
                '93Y' => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'Renault',
                ),
                '93X' => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'Souza Ramos - Mitsubishi / Suzuki',
                ),
                '9BH' => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'Hyundai',
                ),
                '95P' => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'CAOA / Hyundai',
                ),
                '94D' => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'Nissan',
                ),
                '94G' => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'Indabra',
                ),
                '94M' => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'HVR-Busscar',
                ),
                '94N' => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'RWM Brazil',
                ),
                '98R' => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'Chery',
                ),
                988 => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'Jeep',
                ),
                '98M' => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'BMW',
                ),
                '9BM' => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'Mercedes-Benz',
                ),
                '9BN' => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'Mafersa',
                ),
                '99A' => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'Audi',
                ),
                '99L' => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'BYD',
                ),
                '99J' => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'Jaguar Land Rover',
                ),
                '9C2' => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'Honda Motorcycles[10]',
                ),
                '9C6' => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'Yamaha[10]',
                ),
                '9CD' => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'Suzuki (motorcycles)',
                ),
                '93V' => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'International Navistar',
                ),
                '93W' => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'Fiat Professional',
                ),
                '93Z' => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'Iveco',
                ),
                953 => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'VW Trucks / MAN',
                ),
                '9BS' => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'Scania',
                ),
                '9BV' => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'Volvo Trucks',
                ),
                '9BY' => 
                array (
                  'country' => 'Brazil',
                  'manufacturer' => 'Agrale S/A',
                ),
                '9FB' => 
                array (
                  'country' => 'Colombia',
                  'manufacturer' => 'Renault',
                ),
                '9FC' => 
                array (
                  'country' => 'Colombia',
                  'manufacturer' => 'Compañía Colombiana Automotriz S.A',
                ),
                '9GC' => 
                array (
                  'country' => 'Colombia',
                  'manufacturer' => 'General Motors Colmotores S.A',
                ),
                '9UJ' => 
                array (
                  'country' => 'Uruguay',
                  'manufacturer' => 'Chery',
                ),
                '9UK' => 
                array (
                  'country' => 'Uruguay',
                  'manufacturer' => 'Lifan',
                ),
                '9UW' => 
                array (
                  'country' => 'Uruguay',
                  'manufacturer' => 'Kia',
                ),
            );
        }



}
