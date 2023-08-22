export const MultiStepCheck = ($) => {

	let rtrb_checkoutcheckout = {
		$tabs: $('.rtrb-checkout-tab-item'),
		$sections: $('.rtrb-checkout-step-item'),
		$buttons: $('.rtrb-checkout-nav-button'),
		$checkout_form: $('form.woocommerce-checkout'),
		$coupon_form: $('#checkout_coupon'),
		$before_form: $('#woocommerce_before_checkout_form'),
		current_step: $('ul.rtrb-checkout-tab-item-wrap').data('current-title'),

		init: function () {
			var self = this;

		},
	}
	rtrb_checkoutcheckout.init();
}