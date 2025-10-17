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

// Rotating hero backgrounds on home page
(() => {
    const hero = document.querySelector('.hero.hero--bg');
    // Only rotate on pages that start with hero--home
    if (!hero || !hero.classList.contains('hero--home')) return;

    const classes = ['hero--home', 'hero--divisions', 'hero--about'];
    let idx = 0;

    function setHero(i) {
        classes.forEach(c => hero.classList.remove(c));
        hero.classList.add(classes[i]);
    }

    setHero(idx);
    setInterval(() => {
        idx = (idx + 1) % classes.length;
        setHero(idx);
    }, 6000); // switch every 6s
})();

// Increment counters on About page
(() => {
    const counters = document.querySelectorAll('[data-counter]');
    if (counters.length === 0) return;

    const animate = (el) => {
        const target = Number(el.getAttribute('data-target') || '0');
        const suffix = el.getAttribute('data-suffix') || '';
        const duration = 1200; // ms
        const start = performance.now();

        const step = (now) => {
            const progress = Math.min((now - start) / duration, 1);
            const value = Math.floor(progress * target);
            el.textContent = value.toString() + (progress === 1 ? suffix : '');
            if (progress < 1) requestAnimationFrame(step);
        };

        requestAnimationFrame(step);
    };

    const startWhenVisible = (el) => {
        const obs = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animate(el);
                    obs.disconnect();
                }
            });
        }, { threshold: 0.3 });
        obs.observe(el);
    };

    counters.forEach(startWhenVisible);
})();

