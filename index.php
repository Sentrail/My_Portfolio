<?php $pageTitle = 'Home'; include 'header.php'; ?>
<main>
    <!-- Hero (Unchanged) -->
    <section id="hero" class="hero full-vh flex center gradient-bg">
        <div class="hero-content fade-in">
            <img src="assets/headshot.jpg" alt="[Your Name]" class="headshot circle">
            <h1 class="bold heading">[Your Name]</h1>
            <p class="subtext">Frontend Developer | Aspiring Fullstack Engineer</p>
            <p>Crafting intuitive digital experiences with modern technologies. Passionate about creating seamless user interfaces and robust backend systems.</p>
            <div class="ctas flex">
                <a href="#projects" class="btn primary smooth">View Projects</a>
                <a href="contact.php" class="btn secondary smooth">Contact Me</a>
            </div>
        </div>
        <div class="scroll-indicator">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 10L12 15L17 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="section container bg-light">        <div class="text-center mb-16">
            <h2 class="bold heading">About Me</h2>
            <div class="underline mx-auto mb-8"></div>
        </div>
        <p class="bio text-center mb-16 max-w-3xl mx-auto">I'm a passionate developer on a journey from frontend mastery to fullstack excellence. What started as a fascination with creating beautiful user interfaces has evolved into a comprehensive understanding of web development from pixels to databases. My approach combines aesthetic sensibility with technical precision, always striving to create experiences that are both visually stunning and functionally robust. I believe great software is where art meets engineering.</p>
        <div class="core-competencies-about grid">
            <div class="competency-card fade-in">
                <svg viewBox="0 0 64 64" class="icon-svg" fill="#00D4FF">
                    <path d="M2 32h20v20H2z"/> <!-- Simplified code icon -->
                </svg>
                <h4>Frontend Development</h4>
            </div>
            <div class="competency-card fade-in">
                <svg viewBox="0 0 64 64" class="icon-svg" fill="#FF6B6B">
                    <rect x="8" y="8" width="48" height="48" rx="4"/> <!-- Server icon -->
                </svg>
                <h4>Backend Systems</h4>
            </div>
            <div class="competency-card fade-in">
                <svg viewBox="0 0 64 64" class="icon-svg" fill="#4ECDC4">
                    <circle cx="32" cy="32" r="28"/> <!-- Database icon -->
                </svg>
                <h4>Database Design</h4>
            </div>
            <div class="competency-card fade-in">
                <svg viewBox="0 0 64 64" class="icon-svg" fill="#95E1D3">
                    <path d="M32 2L2 32h20v20h20V32h20z"/> <!-- Globe icon -->
                </svg>
                <h4>Web Applications</h4>
            </div>
            <div class="competency-card fade-in">
                <svg viewBox="0 0 64 64" class="icon-svg" fill="#FFD93D">
                    <rect x="8" y="8" width="48" height="48" rx="8"/> <!-- Phone icon -->
                </svg>
                <h4>Responsive Design</h4>
            </div>
            <div class="competency-card fade-in">
                <svg viewBox="0 0 64 64" class="icon-svg" fill="#C77DFF">
                    <circle cx="32" cy="32" r="30" fill="none" stroke="currentColor" stroke-width="4">
                        <path d="M20 20 L44 44 M20 44 L44 20"/> <!-- Palette brush -->
                    </circle>
                </svg>
                <h4>UI/UX Design</h4>
            </div>
        </div>
    </section>

    <!-- Featured Projects -->
    <section id="projects" class="section gradient-bg">
        <div class="container">
            <div class="text-center mb-16">
                <h2 class="bold heading text-white">Featured Projects</h2>
                <div class="underline mx-auto mb-8" style="background: linear-gradient(to right, var(--secondary), white);"></div>
                <p class="text-white/80">Showcase of my recent work, demonstrating expertise across the full stack</p>
            </div>
            <div class="featured-grid grid">
                <div class="project-card featured fade-in" data-modal="ecommerce">
                    <img src="assets/ecommerce-thumb.jpg" alt="E-Commerce Platform">
                    <div class="card-content">
                        <h3>E-Commerce Platform</h3>
                        <p>Full-featured online shopping platform with cart, checkout, and admin panel</p>
                        <div class="badges flex">React | Node.js | MySQL | Stripe API</div>
                        <div class="project-links flex">
                            <a href="#" class="btn small primary">Live Demo</a>
                            <a href="https://github.com/project1" class="btn small secondary">Code</a>
                        </div>
                    </div>
                </div>
                <div class="project-card featured fade-in" data-modal="weather">
                    <img src="assets/weather-thumb.jpg" alt="Weather Dashboard">
                    <div class="card-content">
                        <h3>Weather Dashboard</h3>
                        <p>Real-time weather app with forecasts and interactive maps</p>
                        <div class="badges flex">JavaScript | Weather API | Leaflet.js</div>
                        <div class="project-links flex">
                            <a href="#" class="btn small primary">Live Demo</a>
                            <a href="https://github.com/project2" class="btn small secondary">Code</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="projects-grid grid">
                <div class="project-card fade-in" data-modal="blog">
                    <img src="assets/blog-thumb.jpg" alt="Blog CMS">
                    <div class="card-content">
                        <h3>Blog CMS</h3>
                        <p>Content management system with markdown support</p>
                        <div class="badges flex">PHP | MySQL | TailwindCSS</div>
                        <div class="project-links flex">
                            <a href="#" class="btn small primary">Live Demo</a>
                            <a href="https://github.com/project3" class="btn small secondary">Code</a>
                        </div>
                    </div>
                </div>
                <div class="project-card fade-in" data-modal="task">
                    <img src="assets/task-thumb.jpg" alt="Task Manager Pro">
                    <div class="card-content">
                        <h3>Task Manager Pro</h3>
                        <p>Collaborative project management tool</p>
                        <div class="badges flex">React | Firebase | Material-UI</div>
                        <div class="project-links flex">
                            <a href="#" class="btn small primary">Live Demo</a>
                            <a href="https://github.com/project4" class="btn small secondary">Code</a>
                        </div>
                    </div>
                </div>
                <div class="project-card fade-in" data-modal="portfolio">
                    <img src="assets/portfolio-thumb.jpg" alt="Portfolio Generator">
                    <div class="card-content">
                        <h3>Portfolio Generator</h3>
                        <p>Dynamic portfolio builder with templates</p>
                        <div class="badges flex">JavaScript | Node.js | React</div>
                        <div class="project-links flex">
                            <a href="#" class="btn small primary">Live Demo</a>
                            <a href="https://github.com/project5" class="btn small secondary">Code</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills -->
    <section id="skills" class="section container bg-light">
        <div class="text-center mb-16">
            <h2 class="bold heading">Technical Skills</h2>
            <div class="underline mx-auto mb-8"></div>
            <p class="text-lg mb-16">Proficiency across modern web technologies and development tools</p>
        </div>
        <div class="skills-categories grid">
            <div class="category-card fade-in">
                <h4>Frontend</h4>
                <div class="progress-bar"><span style="width:95%;"></span></div><label>HTML/CSS 95%</label>
                <div class="progress-bar"><span style="width:90%;"></span></div><label>JavaScript 90%</label>
                <div class="progress-bar"><span style="width:85%;"></span></div><label>React 85%</label>
                <div class="progress-bar"><span style="width:90%;"></span></div><label>Tailwind CSS 90%</label>
                <div class="progress-bar"><span style="width:75%;"></span></div><label>TypeScript 75%</label>
            </div>
            <div class="category-card fade-in">
                <h4>Backend</h4>
                <div class="progress-bar"><span style="width:80%;"></span></div><label>PHP 80%</label>
                <div class="progress-bar"><span style="width:75%;"></span></div><label>Node.js 75%</label>
                <div class="progress-bar"><span style="width:85%;"></span></div><label>MySQL 85%</label>
                <div class="progress-bar"><span style="width:80%;"></span></div><label>API Development 80%</label>
                <div class="progress-bar"><span style="width:70%;"></span></div><label>PostgreSQL 70%</label>
            </div>
            <div class="category-card fade-in">
                <h4>Tools & Others</h4>
                <div class="progress-bar"><span style="width:90%;"></span></div><label>Git/GitHub 90%</label>
                <div class="progress-bar"><span style="width:95%;"></span></div><label>Responsive Design 95%</label>
                <div class="progress-bar"><span style="width:80%;"></span></div><label>UI/UX Design 80%</label>
                <div class="progress-bar"><span style="width:75%;"></span></div><label>Performance Optimization 75%</label>
                <div class="progress-bar"><span style="width:70%;"></span></div><label>Testing 70%</label>
            </div>
        </div>
        <div class="core-competencies text-center mt-16">
            <h3 class="bold mb-8">Core Competencies Overview</h3>
            <div class="competencies-grid grid">
                <div class="competency-circle fade-in">
                    <svg class="progress-circle" viewBox="0 0 128 128">
                        <circle cx="64" cy="64" r="56" fill="none" stroke="#E5E7EB" stroke-width="8"/>
                        <circle class="progress-fill cyan" cx="64" cy="64" r="56" fill="none" stroke-width="8" stroke-dasharray="352" stroke-dashoffset="35.2"/>
                    </svg>
                    <div class="circle-label">Frontend<br>90%</div>
                </div>
                <div class="competency-circle fade-in">
                    <svg class="progress-circle" viewBox="0 0 128 128">
                        <circle cx="64" cy="64" r="56" fill="none" stroke="#E5E7EB" stroke-width="8"/>
                        <circle class="progress-fill blue" cx="64" cy="64" r="56" fill="none" stroke-width="8" stroke-dasharray="352" stroke-dashoffset="70.4"/>
                    </svg>
                    <div class="circle-label">Backend<br>80%</div>
                </div>
                <div class="competency-circle fade-in">
                    <svg class="progress-circle" viewBox="0 0 128 128">
                        <circle cx="64" cy="64" r="56" fill="none" stroke="#E5E7EB" stroke-width="8"/>
                        <circle class="progress-fill teal" cx="64" cy="64" r="56" fill="none" stroke-width="8" stroke-dasharray="352" stroke-dashoffset="52.8"/>
                    </svg>
                    <div class="circle-label">Database<br>85%</div>
                </div>
                <div class="competency-circle fade-in">
                    <svg class="progress-circle" viewBox="0 0 128 128">
                        <circle cx="64" cy="64" r="56" fill="none" stroke="#E5E7EB" stroke-width="8"/>
                        <circle class="progress-fill yellow" cx="64" cy="64" r="56" fill="none" stroke-width="8" stroke-dasharray="352" stroke-dashoffset="105.6"/>
                    </svg>
                    <div class="circle-label">DevOps<br>70%</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact -->
     <section id="contact" class="section full-vh flex center gradient-bg">
        <div class="container">
            <h2 class="bold heading text-center mb-4">Let's Connect</h2>
            <div class="underline mx-auto mb-8"></div>
            <p class="text-center mb-12">Have a project in mind or just want to chat? I'd love to hear from you!</p>
            <div class="contact-grid grid">
                <div class="form-card fade-in">
                    <h3>Send a Message</h3>
                    <form action="process.php" method="POST">
                        <input type="text" name="name" placeholder="Your Name" required>
                        <input type="email" name="email" placeholder="Email Address" required>
                        <textarea name="message" placeholder="Tell me about your project..."></textarea>
                        <button type="submit" class="btn primary">Send Message</button>
                    </form>
                </div>
                <div class="social-card fade-in">
                    <h3>Connect With Me</h3>
                    <div class="social-icons grid">
                        <a href="https://github.com/yourusername" class="social-icon">GitHub</a>
                        <a href="https://linkedin.com/in/yourprofile" class="social-icon">LinkedIn</a>
                        <a href="https://twitter.com/yourhandle" class="social-icon">X</a>
                        <a href="mailto:your@email.com" class="social-icon">Email</a>
                    </div>
                    <div class="info-bullets">
                        <p>• Available for freelance projects</p>
                        <p>• Open to full-time opportunities</p>
                        <p>• Response within 24 hours</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include 'footer.php'; ?>