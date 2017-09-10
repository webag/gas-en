;(function($, window) {

	var $win = $(window);
	var defaults = {
		gap: 0
	};

	$.fn.fixer = function(options) {
		options = $.extend({}, defaults, options);

		return this.each(function() {
			var style = this.style,
				$this = $(this),
				$parent = $this.parent(),
				el_width = $(this).outerWidth();
				$this.css('width', el_width + 'px');

			$win.on('scroll', function() {
				var scrollPos = $win['scrollTop'](),
					elemSize = $this['outerHeight'](),
					parentPos = $parent.offset().top,
					parentSize = $parent['outerHeight']();

				if (scrollPos >= parentPos - options.gap && (parentSize + parentPos - options.gap) >= (scrollPos + elemSize)) {
					style.position = 'fixed';
					style.top = options.gap + 'px';
				} else if (scrollPos < parentPos) {
					style.position = 'relative';
					style.top = 0;
				} else {
					style.position = 'absolute';
					style.top = parentSize - elemSize + 'px';
				}
			}).resize();
		});
	};

}(jQuery, this));

