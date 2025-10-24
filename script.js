// Smooth Scrolling
document.querySelectorAll('.smooth').forEach(link => {
    link.addEventListener('click', e => {
        e.preventDefault();
        const target = document.querySelector(link.getAttribute('href'));
        if (target) target.scrollIntoView({ behavior: 'smooth' });
    });
});

// Hamburger Menu (Appealing Toggle)
const hamburger = document.querySelector('.hamburger');
const menu = document.querySelector('.menu');
if (hamburger && menu) {
    hamburger.addEventListener('click', () => {
        menu.classList.toggle('hidden-desktop');
    });
}

// Fade-ins on Scroll (Ease of Use)
function observeFadeIns() {
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
            }
        });
    }, { threshold: 0.1 });
    document.querySelectorAll('.fade-in, .milestone, .project-card, .skill-item').forEach(el => observer.observe(el));
}
observeFadeIns();

// GSAP Stagger (Stylish Animations)
gsap.from('.project-card', { duration: 1, y: 50, opacity: 0, stagger: 0.2, ease: 'power2.out' });
gsap.from('.skill-item', { duration: 1, scale: 0.8, opacity: 0, stagger: 0.1, ease: 'back.out(1.7)' });

// Project Modals (Interactive)
document.querySelectorAll('.project-card').forEach(card => {
    card.addEventListener('click', () => {
        const modal = document.createElement('div');
        modal.className = 'modal';
        modal.innerHTML = `
            <div class="modal-content">
                <h3>${card.querySelector('h3').textContent}</h3>
                <p>Expanded details: Interactive PHP e-commerce with user auth.</p>
                <img src="${card.querySelector('img').src}" alt="Screenshot" style="width:100%;">
                <button class="btn primary" onclick="document.querySelector('.modal').remove()">Close</button>
            </div>
        `;
        document.body.appendChild(modal);
        modal.style.display = 'block';
        gsap.from('.modal-content', { duration: 0.5, scale: 0.9, opacity: 0, ease: 'back.out(1.7)' });
    });
});

// Back to Top
document.querySelector('a[href="#top"]')?.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});