<?php

class PhonesGenerator{

  //phone length groupings
  public $twelveArray = array('+423' => 'Liechtenstein');

  public $elevenArray = array('+86' => 'China');

  public $tenArray =  array('+91' => 'India', '+54' => 'Argentina', '+1' => 'United States of America', '+92'=>'Pakistan', '+880'=>'Bangladesh', '+7'=>'Russia', '+52' => 'Mexico', '+81'=>'Japan', '+63'=>'Philippines', '+20'=>'Egypt', '+98'=>'Iran', '+90'=>'Turkey',
      '+49'=>'Germany', '+44'=>'United Kingdom', '+39'=>'Italy', '+254'=>'Kenya', '+57'=>'Colombia', '+82'=>'Korea South', '+1'=>'Canada', '+977'=>'Nepal', '+40'=>'Romania', '+7'=>'Kazakhstan', '+1'=>'Dominican Republic',
      '+30'=>'Greece', '+262' => 'Mayotte', '+378' => 'San Marino', '+1' => 'Puerto Rico','+7' => 'Russian', '+212' => 'Morocco', '+43'=>'Austria', '+353' => 'Ireland', '+218'=>'Libya', '+62' => 'Indonesia', '+1' => 'Bahamas', '+1' => 'Jamaica', '+594' => 'French Guiana', '+33' => 'France', '+1' => 'Dominica', '+55' => 'Brazil');

  public $nineArray = array('+84'=>'Vietnam', '+66'=>'Thailand', '+27'=>'South Africa', '+34'=>'Spain', '+213'=>'Algeria', '+93'=>'Afghanistan', '+48'=>'Poland', '+'=>'Saudi Arabia', '+380'=>'Ukraine', '+967'=>'Yemen', '+51'=>'Peru', '+233'=>'Ghana', '+237'=>'Cameroon',
      '+61'=>'Australia', '+886'=>'Taiwan', '+995' => 'Georgia','+245' => 'Guinea-Bissau', '240' => 'Equatorial Guinea', '+244' => 'Angola','+358' => 'Croatia', '+375' => 'Belarus', '+355' => 'Albania', '+963'=>'Syria', '+260'=>'Zambia', '+56'=>'Chile', '+593'=>'Ecuador',
      '+31'=>'Netherlands', '+970' => 'Palestine', '+250' =>	'Rwanda', '+351' => 'Portugal', '+595' => 'Paraguay', '+596' => 'Martinique', '+264' => 'Namibia', '+855'=>'Cambodia', '+352' => 'Luxembourg', '+966' => 'Kyrgyzstan', '+686' => 'Kiribati', '+263'=>'Zimbabwe',
      '+229'=>'Benin', '+386' => 'Slovenia', '+998' => 'Uzbekistan', '+41' => 'Switzerland', '971' => 'United Arab Emirates', '+992' =>	'Tajikistan', '+421' => 'Slovakia', '+32'=>'Belgium', '+221' => 'Senegal', '+962'=>'Jordan', '+420'=>'Czech Republic', '+36'=>'Hungary');

  public $eightArray = array( '+234'=>'Nigeria', '+95'=>'Myanmar', '+227'=>'Niger', '+223'=>'Mali', '+226'=>'Burkina Faso', '+235'=>'Chad', '+252'=>'Somalia', '+502'=>'Guatemala', '+216'=>'Tunisia', '+504'=>'Honduras', '+228'=>'Togo', '+852'=>'Hong Kong', '+381'=>'Serbia', 
      '+505' => 'Nicaragua', '+503' =>'El Salvador', '+53' => 'Cuba', '+372' => 'Estonia', '+225' => 'Côte DIvoire', '+242' => 'Congo (Brazzaville)', '+243' =>	'Congo (Kinshasa)', '236' => 'Central African Republic', '+257' => 'Burundi', '267' => 'Botswana', '+65'=>'Singapore', '+973' => 'Bahrain',
      '591' => 'Bolivia', '+389' => 'Macedonia', '+370' => 'Lithuania', '+853' => 'Macau', '+266' => 'Lesotho', '+371' => 'Latvia', '357' => 'Cyprus', '+379' => 'Holy See', '+509' => 'Haiti', '+350' => 'Gibraltar', '+253' => 'Djibouti', '+45'=>'Denmark', '+47'=>'Norway',
      '+506'=>'Costa Rica', '+976' => 'Mongolia', '+598' => 'Uruguay', '+993' => 'Turkmenistan', '+268' => 'Swaziland', '+47' => 'Svalbard and Jan Mayen Islands', '+232' => 'Sierra Leone', '+40' => 'Romania', '+870' => 'Pitcairn', '+377' => 'Monaco', '+675' => 'Papua New Guinea',
   '+373' =>	'Moldova', '+230' => 'Mauritius', '+968'=>'Oman', '+356' =>	'Malta', '+507'=>'Panama', '+965'=>'Kuwait', '+387' => 'Bosnia and Herzegovina');

  public $sevenArray = array('+60'=>'Malaysia', '291' => 'Eritrea', '+251' => 'Ethiopia', '+238' => 'Cape Verde', '+269' => 'Comoros','+994' => 'Azerbaijan', '+58'=>'Venezuela', '+94'=>'Sri Lanka', '+46'=>'Sweden', '+'=>'Liberia', '+'=>'Lebanon', '241'=>'Gabon',
  '+677'=>'Solomon Islands', '+674' => 'Nauru', '+64' => 'New Zealand', '+265' => 'Malawi', '+258' => 'Mozambique', '+261' => 'Madagascar', '+220' => 'Gambia','+850' => 'Korea North', '+972' => 'Israel', '+352' => 'Iceland', '+592' => 'Guyana','+960'=>'Maldives', '+358' => 'Finland', '+679' => 'Fiji',
    '+691'=>'Micronesia', '+248' => 'Seychelles', '+256' => 'Uganda', '+670' => 'Timor-Leste', '+597' => 'Suriname', '+249' => 'Sudan', '+692'=>'Marshall Islands', '+680'=>'Palau', '+239' => 'São Tomé and Principe');

  public $sixArray = array('+255'=>'Tanzania','+964' => 'Iraq', '+681' => 'Wallis and Futuna Islands', '+508' => 'Saint Pierre and Miquelon', '+672' => 'Norfolk Island', '+382' => 'Montenegro', '+222' => 'Mauritania', '+590' => 'Guadeloupe','+374' => 'Armenia', '+376' => 'Andorra', '+689'=>'French Polynesia', '+687'=>'New Caledonia', '+299'=>'Greenland');

  public $fiveArray = array('+690' => 'Tokelau', '+676' => 'Tonga', '+688' => 'Tuvalu', '+678' => 'Vanuatu');

  public $fourArray = array('+683' => 'Niue');

  public $threeArray = array('+685'=>'Samoa', '+298'=>'Faroe Islands', '+343'=>'Cook Islands');

  public $numbers = array();

  public function generatePhoneNumbers($code, $quantity)
  {

      if(array_key_exists($code, $this->twelveArray))
      {
        
          for($val = 0; $val < $quantity; $val++){
            $random = rand(000000000000, 999999999999);
            array_push($this->numbers, $code . $random);
          }
          
          return $this->numbers;
        }

      elseif(array_key_exists($code, $this->elevenArray))
      {
          for($val = 0; $val < $quantity; $val++){
              $random = rand(00000000000, 99999999999);
              array_push($this->numbers, $code . $random);
            }
            
            return $this->numbers;
      }

      elseif(array_key_exists($code, $this->tenArray))
      {
          for($val = 0; $val < $quantity; $val++){
              $random = rand(0000000000, 9999999999);
              array_push($this->numbers, $code . $random);
            }
            
            return $this->numbers;
      }

      elseif(array_key_exists($code, $this->nineArray))
      {
          for($val = 0; $val < $quantity; $val++){
              $random = rand(000000000, 999999999);
              array_push($this->numbers, $code . $random);
            }
            
            return $this->numbers;
      }

      elseif(array_key_exists($code, $this->eightArray))
      {
          for($val = 0; $val < $quantity; $val++){
              $random = rand(00000000, 99999999);
              array_push($this->numbers, $code . $random);
            }
            
            return $this->numbers;
      }

      elseif(array_key_exists($code, $this->sevenArray))
      {
          for($val = 0; $val < $quantity; $val++){
              $random = rand(0000000, 9999999);
              array_push($this->numbers, $code . $random);
            }
            
            return $this->numbers;
      }

      elseif(array_key_exists($code, $this->sixArray))
      {
          for($val = 0; $val < $quantity; $val++){
              $random = rand(000000, 999999);
              array_push($this->numbers, $code . $random);
            }
            
            return $this->numbers;
      }

      elseif(array_key_exists($code, $this->fiveArray))
      {
          for($val = 0; $val < $quantity; $val++){
              $random = rand(00000, 99999);
              array_push($this->numbers, $code . $random);
            }
            
            return $this->numbers;
      }

      elseif(array_key_exists($code, $this->fourArray))
      {
          for($val = 0; $val < $quantity; $val++){
              $random = rand(0000, 9999);
              array_push($this->numbers, $code . $random);
            }
            
            return $this->numbers;
      }

      else
      {
          for($val = 0; $val < $quantity; $val++){
              $random = rand(000, 999);
              array_push($this->numbers, $code . $random);
            }
            
            return $this->numbers;
      }
  }

}

?>