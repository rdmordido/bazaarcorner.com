<?php

class SiteController extends BaseController
{
    public function index()
	{
        $merchants = new Merchant();
        $featured = $merchants->getFeaturedForTheWeek(3);
        
        $products = new Product();
        $items = $products->getNewItems();        
        $halfPriced = $products->getHalfPricedItems();
        
        return View::make(
            'site.index',
            [
                'merchants' => $featured,
                /**
                 * Items are chunked into 6 per page
                 * based on the UI design
                 */
                'pages' => array_chunk($items, 6),
                'items' => $halfPriced
            ]
        );
	}
    
    public function aboutUs()
    {
        $team = new TeamMembers();
        
        return View::make(
            'site.about-us',
            [
                'executives' => $team->executives(),
                'developers' => $team->developers()
            ]
        );
    }
    
    public function getHelp()
    {
        return View::make('site.get-help');
    }
    
    public function contactUs()
    {
        return View::make('site.contact-us');
    }
    
    public function privacyPolicy()
    {
        return View::make('site.privacy-policy');
    }
    
    public function termsAndCondition()
    {
        return View::make('site.terms-and-condition');
    }
    
    public function shippingAndReturns()
    {
        return View::make('site.shipping-and-returns');
    }
}
