<?php

namespace App\Models;

/**
 * Class Setting
 * @package App\Models
 */
class Setting extends \Eloquent
{

    const CURRENCIES = [
        [
            'code' => 'AFN',
            'countryname' => 'Afghanistan',
            'name' => 'Afghanistan Afghani',
            'symbol' => '&#1547;'],

        ['code' => 'ARS',
            'countryname' => 'Argentina',
            'name' => 'Argentine Peso',
            'symbol' => '&#36;'],

        ['code' => 'AWG',
            'countryname' => 'Aruba',
            'name' => 'Aruban florin',
            'symbol' => '&#402;'],

        ['code' => 'AUD',
            'countryname' => 'Australia',
            'name' => 'Australian Dollar',
            'symbol' => '&#65;&#36;'],

        ['code' => 'AZN',
            'countryname' => 'Azerbaijan',
            'name' => 'Azerbaijani Manat',
            'symbol' => '&#8380;'],

        ['code' => 'BSD',
            'countryname' => 'The Bahamas',
            'name' => 'Bahamas Dollar',
            'symbol' => '&#66;&#36;'],

        ['code' => 'BBD',
            'countryname' => 'Barbados',
            'name' => 'Barbados Dollar',
            'symbol' => '&#66;&#100;&#115;&#36;'],

        ['code' => 'BDT',
            'countryname' => 'People\'s Republic of Bangladesh',
            'name' => 'Bangladeshi taka',
            'symbol' => '&#2547;'],

        ['code' => 'BYN',
            'countryname' => 'Belarus',
            'name' => 'Belarus Ruble',
            'symbol' => '&#66;&#114;'],

        ['code' => 'BZD',
            'countryname' => 'Belize',
            'name' => 'Belize Dollar',
            'symbol' => '&#66;&#90;&#36;'],

        ['code' => 'BMD',
            'countryname' => 'British Overseas Territory of Bermuda',
            'name' => 'Bermudian Dollar',
            'symbol' => '&#66;&#68;&#36;'],

        ['code' => 'BOP',
            'countryname' => 'Bolivia',
            'name' => 'Boliviano',
            'symbol' => '&#66;&#115;'],

        ['code' => 'BAM',
            'countryname' => 'Bosnia and Herzegovina',
            'name' => 'Bosnia-Herzegovina Convertible Marka',
            'symbol' => '&#75;&#77;'],

        ['code' => 'BWP',
            'countryname' => 'Botswana',
            'name' => 'Botswana pula',
            'symbol' => '&#80;'],

        ['code' => 'BGN',
            'countryname' => 'Bulgaria',
            'name' => 'Bulgarian lev',
            'symbol' => '&#1083;&#1074;'],

        ['code' => 'BRL',
            'countryname' => 'Brazil',
            'name' => 'Brazilian real',
            'symbol' => '&#82;&#36;'],

        ['code' => 'BND',
            'countryname' => 'Sultanate of Brunei',
            'name' => 'Brunei dollar',
            'symbol' => '&#66;&#36;'],

        ['code' => 'KHR',
            'countryname' => 'Cambodia',
            'name' => 'Cambodian riel',
            'symbol' => '&#6107;'],

        ['code' => 'CAD',
            'countryname' => 'Canada',
            'name' => 'Canadian dollar',
            'symbol' => '&#67;&#36;'],

        ['code' => 'KYD',
            'countryname' => 'Cayman Islands',
            'name' => 'Cayman Islands dollar',
            'symbol' => '&#36;'],

        ['code' => 'CLP',
            'countryname' => 'Chile',
            'name' => 'Chilean peso',
            'symbol' => '&#36;'],

        ['code' => 'CNY',
            'countryname' => 'China',
            'name' => 'Chinese Yuan Renminbi',
            'symbol' => '&#165;'],

        ['code' => 'COP',
            'countryname' => 'Colombia',
            'name' => 'Colombian peso',
            'symbol' => '&#36;'],

        ['code' => 'CRC',
            'countryname' => 'Costa Rica',
            'name' => 'Costa Rican colón',
            'symbol' => '&#8353;'],

        ['code' => 'HRK',
            'countryname' => 'Croatia',
            'name' => 'Croatian kuna',
            'symbol' => '&#107;&#110;'],

        ['code' => 'CUP',
            'countryname' => 'Cuba',
            'name' => 'Cuban peso',
            'symbol' => '&#8369;'],

        ['code' => 'CZK',
            'countryname' => 'Czech Republic',
            'name' => 'Czech koruna',
            'symbol' => '&#75;&#269;'],

        ['code' => 'DKK',
            'countryname' => 'Denmark, Greenland, and the Faroe Islands',
            'name' => 'Danish krone',
            'symbol' => '&#107;&#114;'],

        ['code' => 'DOP',
            'countryname' => 'Dominican Republic',
            'name' => 'Dominican peso',
            'symbol' => '&#82;&#68;&#36;'],

        ['code' => 'XCD',
            'countryname' => 'Antigua and Barbuda, Commonwealth of Dominica, Grenada, Montserrat, St. Kitts and Nevis, Saint Lucia and St. Vincent and the Grenadines',
            'name' => 'Eastern Caribbean dollar',
            'symbol' => '&#36;'],

        ['code' => 'EGP',
            'countryname' => 'Egypt',
            'name' => 'Egyptian pound',
            'symbol' => '&#163;'],

        ['code' => 'SVC',
            'countryname' => 'El Salvador',
            'name' => 'Salvadoran colón',
            'symbol' => '&#36;'],

        ['code' => 'EEK',
            'countryname' => 'Estonia',
            'name' => 'Estonian kroon',
            'symbol' => '&#75;&#114;'],

        ['code' => 'EUR',
            'countryname' => 'European Union, Italy, Belgium, Bulgaria, Croatia, Cyprus, Czechia, Denmark, Estonia, Finland, France, Germany,
                    Greece, Hungary, Ireland, Latvia, Lithuania, Luxembourg, Malta, Netherlands, Poland,
                    Portugal, Romania, Slovakia, Slovenia, Spain, Sweden',
            'name' => 'Euro',
            'symbol' => '&#8364;'],

        ['code' => 'FKP',
            'countryname' => 'Falkland Islands',
            'name' => 'Falkland Islands (Malvinas) Pound',
            'symbol' => '&#70;&#75;&#163;'],

        ['code' => 'FJD',
            'countryname' => 'Fiji',
            'name' => 'Fijian dollar',
            'symbol' => '&#70;&#74;&#36;'],

        ['code' => 'GHC',
            'countryname' => 'Ghana',
            'name' => 'Ghanaian cedi',
            'symbol' => '&#71;&#72;&#162;'],

        ['code' => 'GIP',
            'countryname' => 'Gibraltar',
            'name' => 'Gibraltar pound',
            'symbol' => '&#163;'],

        ['code' => 'GTQ',
            'countryname' => 'Guatemala',
            'name' => 'Guatemalan quetzal',
            'symbol' => '&#81;'],

        ['code' => 'GGP',
            'countryname' => 'Guernsey',
            'name' => 'Guernsey pound',
            'symbol' => '&#81;'],

        ['code' => 'GYD',
            'countryname' => 'Guyana',
            'name' => 'Guyanese dollar',
            'symbol' => '&#71;&#89;&#36;'],

        ['code' => 'HNL',
            'countryname' => 'Honduras',
            'name' => 'Honduran lempira',
            'symbol' => '&#76;'],

        ['code' => 'HKD',
            'countryname' => 'Hong Kong',
            'name' => 'Hong Kong dollar',
            'symbol' => '&#72;&#75;&#36;'],

        ['code' => 'HUF',
            'countryname' => 'Hungary',
            'name' => 'Hungarian forint',
            'symbol' => '&#70;&#116;'],

        ['code' => 'ISK',
            'countryname' => 'Iceland',
            'name' => 'Icelandic króna',
            'symbol' => '&#237;&#107;&#114;'],

        ['code' => 'INR',
            'countryname' => 'India',
            'name' => 'Indian rupee',
            'symbol' => '&#8377;'],

        ['code' => 'IDR',
            'countryname' => 'Indonesia',
            'name' => 'Indonesian rupiah',
            'symbol' => '&#82;&#112;'],

        ['code' => 'IRR',
            'countryname' => 'Iran',
            'name' => 'Iranian rial',
            'symbol' => '&#65020;'],

        ['code' => 'IMP',
            'countryname' => 'Isle of Man',
            'name' => 'Manx pound',
            'symbol' => '&#163;'],

        ['code' => 'ILS',
            'countryname' => 'Israel, Palestinian territories of the West Bank and the Gaza Strip',
            'name' => 'Israeli Shekel',
            'symbol' => '&#8362;'],

        ['code' => 'JMD',
            'countryname' => 'Jamaica',
            'name' => 'Jamaican dollar',
            'symbol' => '&#74;&#36;'],

        ['code' => 'JPY',
            'countryname' => 'Japan',
            'name' => 'Japanese yen',
            'symbol' => '&#165;'],

        ['code' => 'JEP',
            'countryname' => 'Jersey',
            'name' => 'Jersey pound',
            'symbol' => '&#163;'],

        ['code' => 'KZT',
            'countryname' => 'Kazakhstan',
            'name' => 'Kazakhstani tenge',
            'symbol' => '&#8376;'],

        ['code' => 'KPW',
            'countryname' => 'North Korea',
            'name' => 'North Korean won',
            'symbol' => '&#8361;'],

        ['code' => 'KPW',
            'countryname' => 'South Korea',
            'name' => 'South Korean won',
            'symbol' => '&#8361;'],

        ['code' => 'KGS',
            'countryname' => 'Kyrgyz Republic',
            'name' => 'Kyrgyzstani som',
            'symbol' => '&#1083;&#1074;'],

        ['code' => 'LAK',
            'countryname' => 'Laos',
            'name' => 'Lao kip',
            'symbol' => '&#8365;'],

        ['code' => 'LAK',
            'countryname' => 'Laos',
            'name' => 'Latvian lats',
            'symbol' => '&#8364;'],

        ['code' => 'LVL',
            'countryname' => 'Laos',
            'name' => 'Latvian lats',
            'symbol' => '&#8364;'],

        ['code' => 'LBP',
            'countryname' => 'Lebanon',
            'name' => 'Lebanese pound',
            'symbol' => '&#76;&#163;'],

        ['code' => 'LRD',
            'countryname' => 'Liberia',
            'name' => 'Liberian dollar',
            'symbol' => '&#76;&#68;&#36;'],

        ['code' => 'LTL',
            'countryname' => 'Lithuania',
            'name' => 'Lithuanian litas',
            'symbol' => '&#8364;'],

        ['code' => 'MKD',
            'countryname' => 'North Macedonia',
            'name' => 'Macedonian denar',
            'symbol' => '&#1076;&#1077;&#1085;'],

        ['code' => 'MYR',
            'countryname' => 'Malaysia',
            'name' => 'Malaysian ringgit',
            'symbol' => '&#82;&#77;'],

        ['code' => 'MUR',
            'countryname' => 'Mauritius',
            'name' => 'Mauritian rupee',
            'symbol' => '&#82;&#115;'],

        ['code' => 'MXN',
            'countryname' => 'Mexico',
            'name' => 'Mexican peso',
            'symbol' => '&#77;&#101;&#120;&#36;'],

        ['code' => 'MNT',
            'countryname' => 'Mongolia',
            'name' => 'Mongolian tögrög',
            'symbol' => '&#8366;'],


        ['code' => 'MZN',
            'countryname' => 'Mozambique',
            'name' => 'Mozambican metical',
            'symbol' => '&#77;&#84;'],

        ['code' => 'NAD',
            'countryname' => 'Namibia',
            'name' => 'Namibian dollar',
            'symbol' => '&#78;&#36;'],

        ['code' => 'NPR',
            'countryname' => 'Federal Democratic Republic of Nepal',
            'name' => 'Nepalese rupee',
            'symbol' => '&#82;&#115;&#46;'],

        ['code' => 'ANG',
            'countryname' => 'Curaçao and Sint Maarten',
            'name' => 'Netherlands Antillean guilder',
            'symbol' => '&#402;'],

        ['code' => 'NZD',
            'countryname' => 'New Zealand, the Cook Islands, Niue, the Ross Dependency, Tokelau, the Pitcairn Islands',
            'name' => 'New Zealand dollar',
            'symbol' => '&#36;'],


        ['code' => 'NIO',
            'countryname' => 'Nicaragua',
            'name' => 'Nicaraguan córdoba',
            'symbol' => '&#67;&#36;'],

        ['code' => 'NGN',
            'countryname' => 'Nigeria',
            'name' => 'Nigerian naira',
            'symbol' => '&#8358;'],

        ['code' => 'NOK',
            'countryname' => 'Norway and its dependent territories',
            'name' => 'Norwegian krone',
            'symbol' => '&#107;&#114;'],

        ['code' => 'OMR',
            'countryname' => 'Oman',
            'name' => 'Omani rial',
            'symbol' => '&#65020;'],

        ['code' => 'PKR',
            'countryname' => 'Pakistan',
            'name' => 'Pakistani rupee',
            'symbol' => '&#82;&#115;'],

        ['code' => 'PAB',
            'countryname' => 'Panama',
            'name' => 'Panamanian balboa',
            'symbol' => '&#66;&#47;&#46;'],

        ['code' => 'PYG',
            'countryname' => 'Paraguay',
            'name' => 'Paraguayan Guaraní',
            'symbol' => '&#8370;'],

        ['code' => 'PEN',
            'countryname' => 'Peru',
            'name' => 'Sol',
            'symbol' => '&#83;&#47;&#46;'],

        ['code' => 'PHP',
            'countryname' => 'Philippines',
            'name' => 'Philippine peso',
            'symbol' => '&#8369;'],

        ['code' => 'PLN',
            'countryname' => 'Poland',
            'name' => 'Polish złoty',
            'symbol' => '&#122;&#322;'],

        ['code' => 'QAR',
            'countryname' => 'State of Qatar',
            'name' => 'Qatari Riyal',
            'symbol' => '&#65020;'],

        ['code' => 'RON',
            'countryname' => 'Romania',
            'name' => 'Romanian leu (Leu românesc)',
            'symbol' => '&#76;'],

        ['code' => 'RUB',
            'countryname' => 'Russian Federation, Abkhazia and South Ossetia, Donetsk and Luhansk',
            'name' => 'Russian ruble',
            'symbol' => '&#8381;'],


        ['code' => 'SHP',
            'countryname' => 'Saint Helena, Ascension and Tristan da Cunha',
            'name' => 'Saint Helena pound',
            'symbol' => '&#163;'],

        ['code' => 'SAR',
            'countryname' => 'Saudi Arabia',
            'name' => 'Saudi riyal',
            'symbol' => '&#65020;'],

        ['code' => 'RSD',
            'countryname' => 'Serbia',
            'name' => 'Serbian dinar',
            'symbol' => '&#100;&#105;&#110;'],

        ['code' => 'SCR',
            'countryname' => 'Seychelles',
            'name' => 'Seychellois rupee',
            'symbol' => '&#82;&#115;'],

        ['code' => 'SGD',
            'countryname' => 'Singapore',
            'name' => 'Singapore dollar',
            'symbol' => '&#83;&#36;'],

        ['code' => 'SBD',
            'countryname' => 'Solomon Islands',
            'name' => 'Solomon Islands dollar',
            'symbol' => '&#83;&#73;&#36;'],

        ['code' => 'SOS',
            'countryname' => 'Somalia',
            'name' => 'Somali shilling',
            'symbol' => '&#83;&#104;&#46;&#83;&#111;'],

        ['code' => 'ZAR',
            'countryname' => 'South Africa',
            'name' => 'South African rand',
            'symbol' => '&#82;'],

        ['code' => 'LKR',
            'countryname' => 'Sri Lanka',
            'name' => 'Sri Lankan rupee',
            'symbol' => '&#82;&#115;'],


        ['code' => 'SEK',
            'countryname' => 'Sweden',
            'name' => 'Swedish krona',
            'symbol' => '&#107;&#114;'],


        ['code' => 'CHF',
            'countryname' => 'Switzerland',
            'name' => 'Swiss franc',
            'symbol' => '&#67;&#72;&#102;'],

        ['code' => 'SRD',
            'countryname' => 'Suriname',
            'name' => 'Suriname Dollar',
            'symbol' => '&#83;&#114;&#36;'],

        ['code' => 'SYP',
            'countryname' => 'Syria',
            'name' => 'Syrian pound',
            'symbol' => '&#163;&#83;'],

        ['code' => 'TWD',
            'countryname' => 'Taiwan',
            'name' => 'New Taiwan dollar',
            'symbol' => '&#78;&#84;&#36;'],


        ['code' => 'THB',
            'countryname' => 'Thailand',
            'name' => 'Thai baht',
            'symbol' => '&#3647;'],


        [
            'code' => 'TTD',
            'countryname' => 'Trinidad and Tobago',
            'name' => 'Trinidad and Tobago dollar',
            'symbol' => '&#84;&#84;&#36;'],


        ['code' => 'TRY',
            'countryname' => 'Turkey, Turkish Republic of Northern Cyprus',
            'name' => 'Turkey Lira',
            'symbol' => '&#8378;'],

        ['code' => 'TVD',
            'countryname' => 'Tuvalu',
            'name' => 'Tuvaluan dollar',
            'symbol' => '&#84;&#86;&#36;'],

        ['code' => 'UAH',
            'countryname' => 'Ukraine',
            'name' => 'Ukrainian hryvnia',
            'symbol' => '&#8372;'],


        [
            'code' => 'GBP',
            'countryname' => 'United Kingdom, Jersey, Guernsey, the Isle of Man, Gibraltar, South Georgia and the South Sandwich Islands, the British Antarctic Territory, and Tristan da Cunha',
            'name' => 'Pound sterling',
            'symbol' => '&#163;'],


        [
            'code' => 'UGX',
            'countryname' => 'Uganda',
            'name' => 'Ugandan shilling',
            'symbol' => '&#85;&#83;&#104;'],


        [
            'code' => 'USD',
            'countryname' => 'United States',
            'name' => 'United States dollar',
            'symbol' => '&#36;'],

        ['code' => 'UYU',
            'countryname' => 'Uruguayan',
            'name' => 'Peso Uruguayolar',
            'symbol' => '&#36;&#85;'],

        ['code' => 'UZS',
            'countryname' => 'Uzbekistan',
            'name' => 'Uzbekistani soʻm',
            'symbol' => '&#1083;&#1074;'],


        ['code' => 'VEF',
            'countryname' => 'Venezuela',
            'name' => 'Venezuelan bolívar',
            'symbol' => '&#66;&#115;'],


        ['code' => 'VND',
            'countryname' => 'Vietnam',
            'name' => 'Vietnamese dong (Đồng)',
            'symbol' => '&#8363;'],

        ['code' => 'VND',
            'countryname' => 'Yemen',
            'name' => 'Yemeni rial',
            'symbol' => '&#65020;'],

        ['code' => 'ZWD',
            'countryname' => 'Zimbabwe',
            'name' => 'Zimbabwean dollar',
            'symbol' => '&#90;&#36;'],

    ];

    protected $guarded = ['id'];

    /**
     * @param int $size
     * @param string $d
     * @return \Illuminate\Contracts\Routing\UrlGenerator|mixed|string
     */
    public function getLogoImageAttribute($size = 150, $d = 'mm')
    {

        if (in_array($this->logo, ['default.jpg', 'logo.png', '', null])) {
            return asset('assets/global/img/hrm-logo.png');
        }

        if (str_contains($this->logo, 'https://')) {
            return str_replace('type=normal', 'type=large', $this->logo);
        }

        return asset_url('setting/logo/' . $this->logo, null);
    }

    public static function getCurrency($currencyCode)
    {

        $index = array_search(strtoupper($currencyCode), array_column(self::CURRENCIES, 'code'));

        return $index ? self::CURRENCIES[$index] : self::CURRENCIES[107];
    }

}
