<x-layout>
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

        <main class="main">
            <section class="project-detail">
                <div class="project-grid-2col">
                    <div class="project-info">
                        <h1>{{ $project->title }}</h1>
                        @if ($project->description)
                            <div class="project-description">
                                {!! nl2br(e($project->description)) !!}
                            </div>
                        @endif
                    </div>

                    <div class="project-photos">
                        @if ($project->photos->count() > 0)
                            <div class="photo-thumbnails">
                                @foreach ($project->photos as $photo)
                                    <div class="photo-thumbnail">
                                        <img src="{{ asset('storage/' . $photo->path) }}" alt="{{ $project->title }} photo">
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p class="no-photos">No photos available for this project.</p>
                        @endif
                    </div>
                </div>
            </section>
        </main>
</x-layout>
