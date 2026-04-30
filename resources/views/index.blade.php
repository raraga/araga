<x-layout>
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
