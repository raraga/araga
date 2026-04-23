<x-layout>
    <main>
        <p>Hello!</p>
        <header class="header">
                <nav class="nav">
                    <button class="nav-toggle" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <ul class="nav-menu">
                        <li><a href="#about">About</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </header>

            <main class="main">
                <section id="home" class="hero">
                    <h1>Araga Development</h1>
                    <p>Build for mobile and desktop</p>
                </section>

                <section id="works">
                    <div class="project-grid"></div>
                </section>

                <section id="contact" class="contact-section">
                    <div class="contact-container">
                        <div class="contact-info">
                            <h3>Let's collaborate!</h3>
                            <p>Got a project in mind? I'd love to hear about it. Whether you need a web app, mobile experience, or just want to brainstorm ideas, reach out and let's create something great together.</p>
                        </div>
                        <form method="POST" action="{{  route('contact_inquiry') }}" id="contact-form" class="form">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn">Submit</button>
                        </form>
                    </div>
                </section>
            </main>

    <footer class="footer">
        <p>&copy; 2026. All rights reserved.</p>
    </footer>
    </main>
</x-layout>