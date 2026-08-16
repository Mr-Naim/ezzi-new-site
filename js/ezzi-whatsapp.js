(function () {
	var WHATSAPP_NUMBER = '8801713008394';
	var widget = document.getElementById('ezziWhatsapp');
	if (!widget) return;

	var toggle = document.getElementById('ezziWhatsappToggle');
	var close = document.getElementById('ezziWhatsappClose');
	var form = document.getElementById('ezziWhatsappForm');
	var input = document.getElementById('ezziWhatsappText');

	function openPanel() {
		widget.classList.add('is-open');
		input.focus();
	}
	function closePanel() {
		widget.classList.remove('is-open');
	}

	toggle.addEventListener('click', function () {
		widget.classList.contains('is-open') ? closePanel() : openPanel();
	});
	close.addEventListener('click', closePanel);

	document.addEventListener('click', function (e) {
		if (widget.classList.contains('is-open') && !widget.contains(e.target)) {
			closePanel();
		}
	});

	form.addEventListener('submit', function (e) {
		e.preventDefault();
		var message = input.value.trim();
		var url = 'https://wa.me/' + WHATSAPP_NUMBER + (message ? '?text=' + encodeURIComponent(message) : '');
		window.open(url, '_blank', 'noopener');
		input.value = '';
	});
})();
