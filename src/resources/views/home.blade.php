<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Split-Screen Portfolio - Free HTML Template</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@300;400;600;700&family=Archivo:wght@300;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/tooplate-split-portfolio.css') }}">
<!--

Tooplate 2154 Split Portfolio

https://www.tooplate.com/view/2154-split-portfolio

Free HTML CSS Template

-->
</head>
<body>
    <header>
        <a href="#home" class="logo">
            <svg class="logo-icon" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <circle cx="50" cy="50" r="45" fill="none" stroke="#ff3366" stroke-width="3"/>
                <path d="M 30 40 L 50 60 L 70 40" fill="none" stroke="#ff3366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <circle cx="50" cy="70" r="3" fill="#ff3366"/>
            </svg>
            <span>My Portofolio</span>
        </a>
        <nav>
            <ul class="desktop-nav">
                <li><a href="#home">About</a></li>
                <li><a href="#portofolio">Portofolio</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="menu-icon">
            <span></span>
        </div>
    </header>

    <!-- MOBILE NAV -->
    <div class="mobile-nav">

        <button class="mobile-nav-close" aria-label="Close menu">
        &times;
        </button>

            <ul>
                <li><a href="#home">About</a></li>
                <li><a href="#portofolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>

        </div>

<!-- HERO SECTION -->
<section class="hero-section" id="home">

    <div class="hero-left">

        <img src="{{ asset('assets/images/foto-arum.jpeg') }}"
            alt="Arum Syafitri Puspita Pratiwi">

    </div>

    <div class="hero-right">

        <h1>
            {{ $profile->name }}
        </h1>

        <span class="hero-role">
            {{ $profile->role }}
        </span>

        <p class="hero-description">
            {{ $profile->description }}
        </p>

        <div class="hero-tags">

            @foreach((array) $profile->tech_stack as $tech)

                <span>
                    {{ $tech }}
                </span>

            @endforeach

        </div>

    </div>

</section>

<!-- SHOWCASE SECTION -->
<section class="showcase-section" id="portofolio">
    <div class="section-header">
        <h2>{{ $profile->project_title }}</h2>
        <p>
            {{ $profile->project_subtitle }}
        </p>

    </div>

   <div class="showcase-grid">
    @foreach($projects as $project)
    <div class="showcase-card">
        <img src="{{ asset('storage/' . $project->image) }}"
            alt="{{ $project->title }}">
        <div class="showcase-content">
            <span class="showcase-label">
                {{ $project->category }}
            </span>
            <h3>
                {{ $project->title }}
            </h3>
            <p>
                {{ $project->short_description }}
            </p>
            <div class="project-tags">
                @foreach($project->tech_stack as $tech)
                <span class="tag">
                    {{ $tech }}
                </span>
                @endforeach
            </div>
            <a href="/project/{{ $project->slug }}"
                class="view-project-btn">
                View Detail →
            </a>
        </div>
    </div>
    @endforeach
</div>

</section>

<!-- CONTACT -->
<section id="contact" class="contact-section">
    <div class="contact-split">
        <div class="contact-info">
            <h2>{{ $contact?->title }}</h2>
            <p>
                {{ $contact?->description }}
            </p>
            <div class="contact-details">
                <div class="contact-item">
                    <div class="contact-item-icon">📧</div>
                    <div class="contact-item-content">
                        <h4>Email</h4>
                        <a href="mailto:{{ $contact?->email }}">
                            {{ $contact?->email }}
                        </a>
                    </div>
                </div>

                <div class="contact-item">
                <div class="contact-item-icon">
                    <i class="fab fa-github"></i>
                </div>

                <div class="contact-item-content">
                    <h4>GitHub</h4>
                    <a href="{{ $contact?->github }}"
                     target="_blank">
                     {{ str_replace('https://github.com/', '@', $contact?->github) }}
                    </a>
                </div>
            </div>

                <div class="contact-item">
                    <div class="contact-item-icon">📍</div>
                    <div class="contact-item-content">
                        <h4>Location</h4>
                        <a href="#">
                            {{ $contact?->location }}
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <form  class="contact-form" method="POST" action="/contact">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-group">
                <label>Message</label>
                <textarea name='message' required></textarea>
            </div>

            <button type="submit" class="submit-btn">
                Send Message
            </button>
        </form>
    </div>
</section>

<footer>

    <p>
        Copyright © 2026 Arum Portfolio.
    </p>
    
</footer>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="{{ asset('assets/tooplate-split-scripts.js') }}"></script>
</body>
</html>