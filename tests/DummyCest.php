<?php
class LoginCest 
{    
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/');
    }

    public function pageRenderedSuccessful(AcceptanceTester $I)
    {
        $I->see('#success');
    }    
}
