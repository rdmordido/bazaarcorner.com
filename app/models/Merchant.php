<?php

class Merchant
{
    private $merchants;
    
    public function getFeaturedForTheWeek($limit = 0)
    {
        $this->merchants = [
            '1' => [
                'name' => 'HeartStrings',
                'discount' => 60,
                'logo' => 'img/featured_merchant/hearstrings.jpg',
                'shipping' => 'PH Nationwide'
            ],
            '2' => [
                'name' => 'JetSetter',
                'discount' => 50,
                'logo' => 'img/featured_merchant/jet-setter.jpg',
                'shipping' => 'PH Nationwide'
            ],
            '3' => [
                'name' => 'Zico',
                'discount' => 70,
                'logo' => 'img/featured_merchant/zico.jpg',
                'shipping' => 'PH Nationwide'
            ],
        ];
        
        return $this->merchants;
    }
}
