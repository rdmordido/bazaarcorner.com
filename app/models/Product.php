<?php

class Product
{
    private $products;
    
    private $half_priced;
    
    public function getNewItems()
    {
        $this->products = [
            '1' => [
                'name' => 'Striped Appeal',
                'logo' => 'img/recent_stuff/1st_item.jpg',
                'current_price' => 10,
                'last_price' => 35
            ],
            '2' => [
                'name' => 'Nikon Camera',
                'logo' => 'img/recent_stuff/2nd_item.jpg',
                'current_price' => 210,
                'last_price' => 350
            ],
            '3' => [
                'name' => 'Sala Set',
                'logo' => 'img/recent_stuff/3rd_item.jpg',
                'current_price' => 500,
                'last_price' => 650
            ],
            '4' => [
                'name' => 'Province Art Canvas',
                'logo' => 'img/recent_stuff/4th_item.jpg',
                'current_price' => 180,
                'last_price' => 240
            ],
            '5' => [
                'name' => 'Water Based Adhesive',
                'logo' => 'img/recent_stuff/5th_item.jpg',
                'current_price' => 20,
                'last_price' => 55
            ],
            '6' => [
                'name' => '3-days Boracay Escapade',
                'logo' => 'img/recent_stuff/6th_item.jpg',
                'current_price' => 280,
                'last_price' => 550
            ],
            
            '7' => [
                'name' => 'Striped Appeal',
                'logo' => 'img/recent_stuff/1st_item.jpg',
                'current_price' => 10,
                'last_price' => 35
            ],
            '8' => [
                'name' => 'Nikon Camera',
                'logo' => 'img/recent_stuff/2nd_item.jpg',
                'current_price' => 210,
                'last_price' => 350
            ],
            '9' => [
                'name' => 'Sala Set',
                'logo' => 'img/recent_stuff/3rd_item.jpg',
                'current_price' => 500,
                'last_price' => 650
            ],
            '10' => [
                'name' => 'Province Art Canvas',
                'logo' => 'img/recent_stuff/4th_item.jpg',
                'current_price' => 180,
                'last_price' => 240
            ],
            '11' => [
                'name' => 'Water Based Adhesive',
                'logo' => 'img/recent_stuff/5th_item.jpg',
                'current_price' => 20,
                'last_price' => 55
            ],
            '12' => [
                'name' => '3-days Boracay Escapade',
                'logo' => 'img/recent_stuff/6th_item.jpg',
                'current_price' => 280,
                'last_price' => 550
            ],
            
            '13' => [
                'name' => 'Striped Appeal',
                'logo' => 'img/recent_stuff/1st_item.jpg',
                'current_price' => 10,
                'last_price' => 35
            ],
            '14' => [
                'name' => 'Nikon Camera',
                'logo' => 'img/recent_stuff/2nd_item.jpg',
                'current_price' => 210,
                'last_price' => 350
            ],
            '15' => [
                'name' => 'Sala Set',
                'logo' => 'img/recent_stuff/3rd_item.jpg',
                'current_price' => 500,
                'last_price' => 650
            ],
            '16' => [
                'name' => 'Province Art Canvas',
                'logo' => 'img/recent_stuff/4th_item.jpg',
                'current_price' => 180,
                'last_price' => 240
            ],
            '17' => [
                'name' => 'Water Based Adhesive',
                'logo' => 'img/recent_stuff/5th_item.jpg',
                'current_price' => 20,
                'last_price' => 55
            ],
            '18' => [
                'name' => '3-days Boracay Escapade',
                'logo' => 'img/recent_stuff/6th_item.jpg',
                'current_price' => 280,
                'last_price' => 550
            ],
            
            '19' => [
                'name' => 'Striped Appeal',
                'logo' => 'img/recent_stuff/1st_item.jpg',
                'current_price' => 10,
                'last_price' => 35
            ],
            '20' => [
                'name' => 'Nikon Camera',
                'logo' => 'img/recent_stuff/2nd_item.jpg',
                'current_price' => 210,
                'last_price' => 350
            ],
            '21' => [
                'name' => 'Sala Set',
                'logo' => 'img/recent_stuff/3rd_item.jpg',
                'current_price' => 500,
                'last_price' => 650
            ]            
        ];
        
        return $this->products;
    }
    
    
    public function getHalfPricedItems()
    {
        $this->half_priced = [
            '1' => [
                'name' => 'Fujitsu Laptop Tablet',
                'category' => 'Gadgets',
                'logo' => 'img/half_price/fujitsu_laptop.jpg',
                'current_price' => 300,
                'description' => "Lifebook T4220 Computer PC C2D Slate<br>Touchscreen Windows"
            ],
            '2' => [
                'name' => 'Vans Casual Men',
                'category' => 'Fashion',
                'logo' => 'img/half_price/vans.jpg',
                'current_price' => 35,
                'description' => "Era VN-0QFK7OT Pop Charcoal Red Canvas<br>Casual Shoes Men"
            ],
            '3' => [
                'name' => 'All Crystal Chandeliers',
                'category' => 'Homewares',
                'logo' => 'img/half_price/chandeliers.jpg',
                'current_price' => 100,
                'description' => "Fashion All Crystal Venetian Style Chandeliers<br>6 Lights Fixture Hallway 110V ER9"
            ],
            '4' => [
                'name' => 'Vans Casio G-Shock',
                'category' => 'Fashion',
                'logo' => 'img/half_price/g-shock.jpg',
                'current_price' => 45,
                'description' => "G Shock 1289 Classic Series DW-6900MS"
            ]
        ];
        
        return $this->half_priced;
    }
}
