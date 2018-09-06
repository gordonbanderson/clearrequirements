<?php

namespace WebOfTalent\ClearRequirements;

use SilverStripe\View\Requirements;
use SilverStripe\Core\Config\Config;
use SilverStripe\ORM\DataExtension;

class RequirementsClearer extends DataExtension
{
    /**
     * Clear all requirements.  Call this from a template using $ClearAllRequirements
     */
    public function ClearAllRequirements()
    {
        Requirements::clear();
    }


    /**
     * Clear a list of JS and CSS files from a configuration file
     * See README.md for details
     */
    public function ClearCustomRequirements()
    {
        $config = Config::inst();

        // clear the JavaScript files
        $jsfiles = $config->get(RequirementsClearer::class, 'JavaScript');
        if (!empty($jsfiles)) {
            foreach ($jsfiles as $jsfile) {
                Requirements::block($jsfile);
            }
        }

        // clear the CSS files
        $cssfiles = $config->get(RequirementsClearer::class, 'CSS');
        if (!empty($cssfiles)) {
            foreach ($cssfiles as $cssfile) {
                Requirements::block($cssfile);
            }
        }
    }
}
