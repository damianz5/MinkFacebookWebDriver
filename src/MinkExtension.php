<?php

namespace SilverStripe\MinkFacebookWebDriver;

use Behat\MinkExtension\ServiceContainer\MinkExtension as BaseMinkExtension;
use SilverStripe\MinkFacebookWebDriver\FacebookFactory;

class MinkExtension extends BaseMinkExtension
{
    public function __construct()
    {
        parent::__construct();
        $this->registerDriverFactory(new FacebookFactory());
    }
}
