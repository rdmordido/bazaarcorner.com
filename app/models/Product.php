<?php

class Product
{
    private $products;
    
    private $half_priced;
    
    public function getNewItems()
    {
        $this->products = [
            [
                'name' => 'Striped Appeal',
                'logo' => 'img/recent_stuff/1st_item.jpg',
                'current_price' => 10,
                'last_price' => 35
            ],
            [
                'name' => 'Nikon Camera',
                'logo' => 'img/recent_stuff/2nd_item.jpg',
                'current_price' => 210,
                'last_price' => 350
            ],
            [
                'name' => 'Sala Set',
                'logo' => 'img/recent_stuff/3rd_item.jpg',
                'current_price' => 500,
                'last_price' => 650
            ],
            [
                'name' => 'Province Art Canvas',
                'logo' => 'img/recent_stuff/4th_item.jpg',
                'current_price' => 180,
                'last_price' => 240
            ],
            [
                'name' => 'Water Based Adhesive',
                'logo' => 'img/recent_stuff/5th_item.jpg',
                'current_price' => 20,
                'last_price' => 55
            ],
            [
                'name' => '3-days Boracay Escapade',
                'logo' => 'img/recent_stuff/6th_item.jpg',
                'current_price' => 280,
                'last_price' => 550
            ],
            [
                'name' => 'Striped Appeal',
                'logo' => 'img/recent_stuff/1st_item.jpg',
                'current_price' => 10,
                'last_price' => 35
            ],
            [
                'name' => 'Nikon Camera',
                'logo' => 'img/recent_stuff/2nd_item.jpg',
                'current_price' => 210,
                'last_price' => 350
            ],
            [
                'name' => 'Sala Set',
                'logo' => 'img/recent_stuff/3rd_item.jpg',
                'current_price' => 500,
                'last_price' => 650
            ],
            [
                'name' => 'Province Art Canvas',
                'logo' => 'img/recent_stuff/4th_item.jpg',
                'current_price' => 180,
                'last_price' => 240
            ],
            [
                'name' => 'Water Based Adhesive',
                'logo' => 'img/recent_stuff/5th_item.jpg',
                'current_price' => 20,
                'last_price' => 55
            ],
            [
                'name' => '3-days Boracay Escapade',
                'logo' => 'img/recent_stuff/6th_item.jpg',
                'current_price' => 280,
                'last_price' => 550
            ],
            [
                'name' => 'Striped Appeal',
                'logo' => 'img/recent_stuff/1st_item.jpg',
                'current_price' => 10,
                'last_price' => 35
            ],
            [
                'name' => 'Nikon Camera',
                'logo' => 'img/recent_stuff/2nd_item.jpg',
                'current_price' => 210,
                'last_price' => 350
            ],
            [
                'name' => 'Sala Set',
                'logo' => 'img/recent_stuff/3rd_item.jpg',
                'current_price' => 500,
                'last_price' => 650
            ],
            [
                'name' => 'Province Art Canvas',
                'logo' => 'img/recent_stuff/4th_item.jpg',
                'current_price' => 180,
                'last_price' => 240
            ],
            [
                'name' => 'Water Based Adhesive',
                'logo' => 'img/recent_stuff/5th_item.jpg',
                'current_price' => 20,
                'last_price' => 55
            ],
            [
                'name' => '3-days Boracay Escapade',
                'logo' => 'img/recent_stuff/6th_item.jpg',
                'current_price' => 280,
                'last_price' => 550
            ],
            [
                'name' => 'Striped Appeal',
                'logo' => 'img/recent_stuff/1st_item.jpg',
                'current_price' => 10,
                'last_price' => 35
            ],
            [
                'name' => 'Nikon Camera',
                'logo' => 'img/recent_stuff/2nd_item.jpg',
                'current_price' => 210,
                'last_price' => 350
            ],
            [
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
    
    
    public function condition()
    {
        return [
            [
                'condition' => 'New with tags',
                'description' => 'A brand-new, unused, and unworn item (including handmade items) in the original packaging (such as the original box or bag) and/or with the original tags attached.'
            ],
            [
                'condition' => 'New without tags',
                'description' => 'A brand-new, unused, and unworn item (including handmade items) that is not in original packaging or may be missing original packaging materials (such as the original box or bag). The original tags may not be attached.'
            ],
            [
                'condition' => 'New with defects',
                'description' => 'A brand-new, unused, and unworn item. Possible cosmetic imperfections range from natural color variations to scuffs, cuts or nicks, hanging threads or missing buttons that occasionally occur during the manufacturing or delivery process. The apparel may contain irregular or mismarked size tags. The item may be missing the original packaging materials (such as original box or tag). New factory seconds and/or new irregular items may fall into this category. The original tags may or may not be attached. See the seller’s listing for <a href="http://pages.ebay.com.sg/help/sell/item-condition.html">full</a> details and description of any imperfections.'
            ],
            [
                'condition' => 'Used',
                'description' => 'An item that has been used or worn previously. See the seller’s listing for full details and description of any imperfections.'
            ]
        ];
    }
}
