<?php

class RequirementsClearer extends DataExtension {
	/**
	 * Clear all requirements.  Call this from a template using $ClearAllRequirements
	 */
	public function ClearAllRequirements() {
		Requirements::clear();
	}


	/**
	 * Clear a list of JS and CSS files from a configuration file
	 * See README.md for details
	 */
	public function ClearCustomRequirements() {
		$config = Config::inst();

		// clear the JavaScript files
		$jsfiles = $config->get('RequirementsClearer', 'JavaScript');
        if (!empty($jsfiles)) {
            foreach ($jsfiles as $jsfile) {
                Requirements::block($jsfile);
            }
        }


		// clear the CSS files
		$cssfiles = $config->get('RequirementsClearer', 'CSS');
        if (!empty($cssfiles)) {
            foreach ($cssfiles as $cssfile) {
                Requirements::block($cssfile);
            }
        }

	}
}
