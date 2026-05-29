<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    <title>{{ $project->title }}</title>
    <link rel="stylesheet" href="{{ asset('assets/tooplate-split-portfolio.css') }}">
</head>
<body>

<header>
    <a href="/" class="logo">
        <svg class="logo-icon" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <circle cx="50" cy="50" r="45" fill="none" stroke="#ff3366" stroke-width="3"/>
                <path d="M 30 40 L 50 60 L 70 40" fill="none" stroke="#ff3366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <circle cx="50" cy="70" r="3" fill="#ff3366"/>
            </svg>
        <span>My Portofolio</span>
    </a>
    <nav>
        <ul class="desktop-nav">
            <li><a href="/">Home</a></li>
            <li><a href="#detail">Detail Project</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</header>

    <!-- DETAIL HERO -->

    <section class="project-detail-page">
        <div class="detail-container">
            <div class="detail-image">
                <img src="{{ asset('storage/' . $project->image) }}"
                    alt="{{ $project->title }}">
            </div>
            <div class="detail-content">
                <span class="detail-label">
                    {{ $project->category }}
                </span>
                <h1>
                    {{ $project->title }}
                </h1>
                <p class="detail-description">
                    {{ $project->short_description }}
                </p>
                <div class="detail-tags">
                    @foreach($project->tech_stack as $tech)
                        <span>
                            {{ $tech }}
                        </span>
                    @endforeach
                </div>
                <a href="/"
                    class="view-project-btn">
                    ← Back To Home
                </a>
            </div>
        </div>
    </section>

    <!-- CONTENT -->

    <section class="project-section">

        <div class="project-wrapper">

            <div class="content-card">

                <h2>Description</h2>

                <div class="content-text">
                    {!! $project->description !!}
                </div>

            </div>

            <div class="content-card">

                <h2>Problem Analysis</h2>

                <div class="content-text">
                    {!! $project->problem_analysis !!}
                </div>

            </div>

            <div class="content-card">

                <h2>Features</h2>

                <ul class="feature-list">

                    @foreach($project->features as $feature)

                        <li>
                            {{ $feature }}
                        </li>

                    @endforeach

                </ul>

            </div>

            <div class="content-card">

                <h2>Architecture</h2>

                <div class="content-text">
                    {!! $project->architecture !!}
                </div>

            </div>

            <div class="content-card">

                <h2>ERD / Diagram</h2>

                <div class="project-gallery">

                    <img src="{{ asset('storage/' . $project->diagram) }}"
                        alt="Diagram">

                </div>

            </div>

        </div>

    </section>

    <!-- CONTACT -->
<section id="contact" class="contact-section">
    <div class="contact-split">
        <div class="contact-info">
            <h2>Let's Work Together</h2>
            <p>
                Have a project in mind?
                I'd love to hear about it.
            </p>
            <div class="contact-details">
                <div class="contact-item">
                    <div class="contact-item-icon">📧</div>
                    <div class="contact-item-content">
                        <h4>Email</h4>
                        <a href="#">
                            arumsyafitri11@gmail.com
                        </a>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-item-icon">📱</div>
                    <div class="contact-item-content">
                        <h4>Phone</h4>
                        <a href="#">
                            081382238901
                        </a>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-item-icon">📍</div>
                    <div class="contact-item-content">
                        <h4>Location</h4>
                        <a href="#">
                            Indonesia
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <form class="contact-form">

            <div class="form-group">

                <label>Name</label>

                <input type="text">

            </div>

            <div class="form-group">

                <label>Email</label>

                <input type="email">

            </div>

            <div class="form-group">

                <label>Message</label>

                <textarea></textarea>

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

</body>
</html>
