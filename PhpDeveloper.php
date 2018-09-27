<?php

namespace Economix\Jobs;

use A_0815\JobDescription;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;

class PhpDeveloper extends JobDescription
{
    const PREREQUISITES = 'PHP';
    const OFFICES = 'Wels';
    const YOUR_LOCATION = 'whereever you are';
    const OUR_CONTACT = 'jobs@e-conomix.at';
    const LEGAL_NOTICE = 'Wir bieten je nach kollektivvertraglicher Einstufung ein monatliches Grundgehalt von mindestens € 2.750,- brutto mit ' .
    'der Bereitschaft zur Überzahlung abhängig von der Qualifikation, Erfahrung und dem Engagement im Team.';
    
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
    
    public function __construct()
    {
        $this->isHomeOfficePossible = true;
        $this->bonutSystem = ['Free Drinks', 'Free Food', 'Parking', 'and much more'];
        $this->customers = ['Resch & Frisch', 'Runtastic', 'Fronius', 'electronic4you', 'and many more'];
        $this->furtherBenefits = ['Learning from the best', 'Great team', '3x Magento Master among us'];
    }
    
    /**
     * Our benefits we can offer you
     **/
    public function ourBenefitsForYou()
    {
        $dateTimeZone = new \DateTimeZone('Europe/Vienna');
        $dateTime = new \DateTime('now', $dateTimeZone);
        
        if ($dateTime->format('H') >= 16) {
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
        $mail = new PHPMailer(true);
        
        try {
            $mail->setFrom(self::OUR_CONTACT, 'Job Application Contact');
            $mail->addReplyTo('your-address@example.com', 'Your Name');
            $mail->addAddress(self::OUR_CONTACT, 'Job Application Contact');
            $mail->Subject = 'Job application';
            $mail->AltBody = 'Your job application mail body goes here';
            $mail->addAttachment('path/to/your/jobapplication/as/file.pdf');
            $mail->send();
        } catch (PHPMailerException $e) {
            echo 'Application could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
        
    }
    
    /**
     * Here is your beer
     **/
    private function afterWorkBeer()
    {
        echo 'A beer? Here we cheer 🍻';
    }
}


