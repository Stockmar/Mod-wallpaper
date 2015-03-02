<?php
/*
* Version			: 1.0.1
* Created by		: Stockmar
* Email				: info@stockmar.dk
* Created on		: 01-02-2013
* Last Modified 	: 01-02-2013
* URL				: http://stockmar.dk
* License			: GPLv2
* Copyright			: 2013 stockmar.dk
* License 			: GPLv2 http://www.gnu.org/licenses/gpl-2.0.html
* 
*/
defined('_JEXEC') or die;
?>
<script>
(function($) {
		<?php 
			// One background image
			if ($wallpaperType == 1) {
				echo "$.backstretch(" . "\"$wallpaperStatic2\"";
				echo ");";
				// echo $wallpaperType;
			};
			// Slideshow
			if ($wallpaperType == 2) {
				echo "$.backstretch([";
				foreach ($wallpapers as $wall_name => $wall_value) 
				echo "\"$wall_value\"".",\n";
				echo "], {";
				echo "fade:".$fadeSpeed.",\n";
				echo "duration:".$duration." ";
				echo "});";
				// echo $wallpaperType;
			};
		?>	
	})(jQuery);
</script>