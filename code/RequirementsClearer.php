<?php 

class RequirementsClearer extends DataExtension {
	public function ClearAllRequirements() {
		Requirements::clear();
	}
}