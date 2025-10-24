<?php $pageTitle = 'Contact'; include 'header.php'; ?>
<main>
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