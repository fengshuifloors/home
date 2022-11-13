<?php
namespace ElementPack\Modules\VideoGallery;

use ElementPack\Base\Element_Pack_Module_Base;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Module extends Element_Pack_Module_Base {

	public function get_name() {
		return 'video-gallery';
	}

	public function get_widgets() {

		$widgets = [
			'Video_Gallery',
		];

		return $widgets;
	}
}
