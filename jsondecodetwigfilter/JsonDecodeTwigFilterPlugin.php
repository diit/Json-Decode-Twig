<?php
namespace Craft;

class JsonDecodeTwigFilterPlugin extends BasePlugin {

	function getName() {

		return Craft::t('JSON Decode Twig Filter');
	}

	function getVersion() {

		return '1.0.9';
	}

	function getDeveloper() {

		return 'Dale Inverarity';
	}

	function getDeveloperUrl() {

		return 'http://dale.wtf/';
	}

	public function addTwigExtension() {

	    Craft::import('plugins.JsonDecodeTwigFilterPlugin.twigextensions.JsonDecodeTwigExtension');
	    return new JsonDecodeTwigExtension();
	}

}
