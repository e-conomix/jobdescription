<?php
namespace Economix\Jobs;

use \A_0815\JobDescription;

class PhpDeveloper extends JobDescription {
    const PREREQUISITES = 'PHP';
    const OFFICES = 'Wels';
    const YOUR_LOCATION = 'whereever you are';
    const OUR_CONTACT = 'jobs@e-conomix.at';
    const LEGAL_NOTICE = 'Wir bieten je nach kollektivvertraglicher Einstufung ein monatliches Grundgehalt von mindestens € 2.750,- brutto mit ' . 'der Bereitschaft zur Überzahlung abhängig von der Qualifikation, Erfahrung und dem Engagement im Team.'
    
    /** @var bool */
    private $isHomeOfficePossible;
    /** @var array */
    private $bonutSystem;
    /** @var array */
    private $customers;
    /** @var array */
    private $furtherBenefits;
    /** @var array */
    private $mandatorySkills;
    /** @var array */
    private $programmingSkills;
    
    /**
     * Our benefits we can offer you
     **/
    public function ourBenefitsForYou()
    {
        $this->isHomeOfficePossible = true;
        $this->bonutSystem = ['Free Drinks', 'Free Food', 'Parking', 'and much more'];
        $this->customers = ['Resch & Frisch', 'Biohort', 'Runtastic', 'Fronius', 'and many more'];
        $this->furtherBenefits = ['Learning from the best', 'Great team', '3x Magento Master among us'];
        
        if (date('H') >= 16) {
            $this->afterWorkBeer();
        }
    }
    
    /**
     * The interests you bring
     **/
    public function yourInterests()
    {
        $this->mandatorySkills = ['Interest in programming', 'you like a nice team around you'];
        $this->programmingSkills = ['OOP', 'PHP'];
    }

    /**
     * Here you can apply
     **/    
    public function contactUs()
    {
        mail(self::OUR_CONTACT, 'Job application', 'My application');
    }
    
    /**
     * Here is your beer
     **/
    private function afterWorkBeer()
    {
        echo 'You like beer? So do we - cheers 🍻';
    }
}

