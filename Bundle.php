<?php
namespace Asgard\SEO;

class Bundle extends \Asgard\Core\BundleLoader {
	public function load($queue) {
		\Asgard\Core\Autoloader::preloadDir(dirname(__FILE__));
		
		parent::load($queue);
	}
}