<x-layout>
<<<<<<< HEAD
=======
    <main>
        <header class="header border-b-0">
                <nav class="nav" x-data="{ open: false }">
                    <button class="nav-toggle" aria-label="Toggle navigation" aria-expanded="false" @click="open = !open; $el.setAttribute('aria-expanded', open)">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <ul class="nav-menu" :class="{ 'active': open }">
                        <li><a href="{{ route('index') }}" @click="open = false">Home</a></li>
                        <li><a href="{{ route('about') }}" @click="open = false">About</a></li>
                        <li><a href="{{ route('blog') }}" @click="open = false">Blog</a></li>
                        <li><a href="{{ route('index') }}#contact" @click="open = false">Contact</a></li>
                    </ul>
                </nav>
            </header>

>>>>>>> refs/remotes/origin/main
            <main class="main">
                <section id="home" class="hero">
                    <h1>Araga Development</h1>
                    <p>Build for mobile and desktop</p>
                </section>

                <section id="works">
                    <div class="project-grid"></div>
                </section>

                <section id="logo-cloud">
                    <div class="logo-cloud">
                        <div class="logo-cloud-inner">
                            <div class="logo-cloud-grid">
                                <img class="logo-cloud-img logo-cloud-img-dark" src="/storage/bkp.jpg" alt="BKP" />
                                <img class="logo-cloud-img" src="/storage/bkp.jpg" alt="BKP" />

                                <img class="logo-cloud-img logo-cloud-img-dark" src="/storage/sac-state.jpg" alt="Sac State" />
                                <img class="logo-cloud-img" src="/storage/sac-state.jpg" alt="Sac State" />

                                <img class="logo-cloud-img logo-cloud-img-dark" src="/storage/select-pt.jpg" alt="Select PT" />
                                <img class="logo-cloud-img" src="/storage/select-pt.jpg" alt="Select PT" />

                                <img class="logo-cloud-img logo-cloud-img-dark" src="/storage/toshiba.jpg" alt="Toshiba" />
                                <img class="logo-cloud-img" src="/storage/toshiba.jpg" alt="Toshiba" />
                            </div>
                        </div>
                    </div>
                </section>

                <section id="contact" class="contact-section">
                    <div class="contact-container">
                        <div class="contact-info">
                            <h1>Want to chat?</h1>
                            <p>Got a project in mind? I'd love to hear about it. Whether you need a web app, mobile experience, or just want to brainstorm ideas, reach out and let's create something great together.</p>
                        </div>
                        <form method="POST" action="{{ route('contact_inquiry') }}" id="contact-form" class="form">
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
                            <button type="submit" class="btn">Let's get started!</button>
                        </form>
                    </div>
                </section>
            </main>
</x-layout>
