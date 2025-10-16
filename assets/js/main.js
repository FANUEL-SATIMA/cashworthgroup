// Mobile navigation toggle
const navToggleButton = document.getElementById('navToggle');
const navElement = document.getElementById('nav');
if (navToggleButton && navElement) {
	navToggleButton.addEventListener('click', () => {
		const isOpen = navElement.classList.toggle('is-open');
		navToggleButton.setAttribute('aria-expanded', String(isOpen));
	});

	navElement.querySelectorAll('a').forEach(link => {
		link.addEventListener('click', () => {
			navElement.classList.remove('is-open');
			navToggleButton.setAttribute('aria-expanded', 'false');
		});
	});
}

// Smooth scroll for in-page links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
	anchor.addEventListener('click', function (e) {
		const href = this.getAttribute('href');
		if (!href || href === '#') return;
		const target = document.querySelector(href);
		if (!target) return;
		e.preventDefault();
		target.scrollIntoView({ behavior: 'smooth', block: 'start' });
	});
});

// Year in footer
const yearEl = document.getElementById('year');
if (yearEl) {
	yearEl.textContent = String(new Date().getFullYear());
}

// Bootstrap-like client-side validation for contact form
(() => {
	const form = document.querySelector('.needs-validation');
	if (!form) return;
	form.addEventListener('submit', (event) => {
		if (!form.checkValidity()) {
			event.preventDefault();
			event.stopPropagation();
		} else {
			// optimistic success hint for static forms
			const success = document.getElementById('contactSuccess');
			if (success) success.classList.remove('d-none');
		}
		form.classList.add('was-validated');
	}, false);
})();

// Scroll reveal with IntersectionObserver
(() => {
	const elements = document.querySelectorAll('.reveal');
	if (!('IntersectionObserver' in window) || elements.length === 0) {
		// Fallback: show all
		elements.forEach(el => el.classList.add('is-visible'));
		return;
	}
	const observer = new IntersectionObserver((entries, obs) => {
		entries.forEach(entry => {
			if (entry.isIntersecting) {
				entry.target.classList.add('is-visible');
				obs.unobserve(entry.target);
			}
		});
	}, { root: null, rootMargin: '0px 0px -10% 0px', threshold: 0.15 });
	
	elements.forEach((el) => observer.observe(el));
})();

