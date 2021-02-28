<?php

namespace Softechlove\Sohagjone\Frontend;

class Shortcode
{
	function __construct()
	{
		add_shortcode('softechlove', [$this, 'render_shortcode']);
	}
	public function render_shortcode($atts, $content = '')
	{
		return 'Generate My First ShortCode';
	}
}

?>