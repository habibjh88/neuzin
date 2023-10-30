(function ($) {
	"use strict";

	$.event.special.touchstart = {
		setup: function setup(_, ns, handle) {
			this.addEventListener("touchstart", handle, {
				passive: !ns.includes("noPreventDefault")
			});
		}
	};
	$.event.special.touchmove = {
		setup: function setup(_, ns, handle) {
			this.addEventListener("touchmove", handle, {
				passive: !ns.includes("noPreventDefault")
			});
		}
	};

// jquery passing
})(jQuery);