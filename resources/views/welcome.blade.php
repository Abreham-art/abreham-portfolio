
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#100d22">
    <meta name="description" content="Explore my developer portfolio, skills, projects, and web development services.">
    <title>Abreham Leta | PHP and Laravel Developer</title>

    <style>
        :root {
            --bg: #100d22;
            --panel: #1b1733;
            --text: #f8f7ff;
            --muted: #b5b0cf;
            --purple: #a78bfa;
            --cyan: #67e8f9;
            --orange: #fb923c;
            --pink: #f472b6;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        html { scroll-behavior: smooth; scroll-padding-top: 85px; }

        body {
            font-family: Inter, "Segoe UI", Arial, sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.7;
        }

        a { color: inherit; text-decoration: none; }
        .container { width: min(1120px, 90%); margin: auto; }

        header {
            position: sticky;
            top: 0;
            z-index: 10;
            background: rgba(16, 13, 34, .92);
            backdrop-filter: blur(14px);
            border-bottom: 1px solid #ffffff15;
        }

        nav {
            min-height: 76px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .logo {
            font-size: 1.45rem;
            font-weight: 900;
            letter-spacing: -1px;
        }

        .logo span { color: var(--purple); }

        .nav-links { display: flex; gap: 25px; list-style: none; }
        .nav-links a { color: var(--muted); font-size: .94rem; }
        .nav-links a:hover { color: var(--cyan); }

        .menu-btn {
            display: none;
            background: transparent;
            color: white;
            border: 1px solid #ffffff30;
            padding: 8px 12px;
            border-radius: 8px;
            cursor: pointer;
        }

        .hero {
            min-height: 630px;
            display: grid;
            grid-template-columns: 1.25fr .75fr;
            align-items: center;
            gap: 60px;
            padding-top: 70px;
            padding-bottom: 85px;
        }

        .eyebrow {
            color: var(--cyan);
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            font-size: .8rem;
        }

        h1 {
            font-size: clamp(2.8rem, 6vw, 5rem);
            line-height: 1.12;
            letter-spacing: -3px;
            margin: 20px 0;
        }

        .gradient-text {
            background: linear-gradient(100deg, var(--purple), var(--pink), var(--orange));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .hero p, .section-intro { color: var(--muted); max-width: 620px; }

        .actions { display: flex; flex-wrap: wrap; gap: 14px; margin-top: 30px; }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 21px;
            border-radius: 10px;
            font-weight: 750;
            transition: transform .2s, opacity .2s;
        }

        .btn:hover { transform: translateY(-3px); opacity: .9; }

        .btn-primary {
            color: #171127;
            background: linear-gradient(100deg, var(--purple), var(--cyan));
        }

        .btn-outline { border: 1px solid #ffffff35; }

        .art {
            position: relative;
            min-height: 340px;
            display: grid;
            place-items: center;
        }

        .orb {
            width: min(300px, 75vw);
            aspect-ratio: 1;
            border-radius: 45% 55% 65% 35%;
            background: linear-gradient(145deg, #a78bfa, #f472b6 55%, #fb923c);
            box-shadow: 0 0 100px #a78bfa35;
            display: grid;
            place-items: center;
            transform: rotate(-7deg);
        }

        .orb-inner {
            width: 78%;
            aspect-ratio: 1;
            background: var(--bg);
            border-radius: inherit;
            display: grid;
            place-items: center;
            text-align: center;
            transform: rotate(7deg);
        }

        .orb-inner strong { font-size: 5rem; color: var(--cyan); }
        .orb-inner span { color: var(--muted); }

        .floating {
            position: absolute;
            background: var(--panel);
            border: 1px solid #ffffff20;
            border-radius: 12px;
            padding: 12px 16px;
            box-shadow: 0 12px 35px #0003;
        }

        .float-one { top: 18px; right: 0; color: var(--cyan); }
        .float-two { bottom: 22px; left: 0; color: var(--orange); }

        section { padding: 90px 0; }
        .section-heading { font-size: clamp(2rem, 4vw, 3rem); margin-bottom: 12px; }
        .section-heading span { color: var(--purple); }
        .section-intro { margin-bottom: 36px; }

        .about-grid, .skills-grid, .project-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            padding: 26px;
            border-radius: 18px;
            background: var(--panel);
            border: 1px solid #ffffff12;
        }

        .card h3 { margin: 10px 0; }
        .card p { color: var(--muted); font-size: .95rem; }
        .card-icon { font-size: 2rem; }

        .skills-grid { grid-template-columns: repeat(4, 1fr); }
        .skill { text-align: center; font-weight: 700; }
        .skill span { display: block; font-size: 2rem; margin-bottom: 8px; }

        .project-card {
            display: flex;
            flex-direction: column;
            min-height: 250px;
        }

        .project-card .tag {
            display: inline-block;
            align-self: flex-start;
            color: var(--cyan);
            background: #67e8f91a;
            border-radius: 30px;
            padding: 4px 10px;
            font-size: .8rem;
            margin: 12px 0;
        }

        .project-card .project-link {
            color: var(--purple);
            margin-top: auto;
            padding-top: 18px;
            font-weight: 700;
        }

        .contact-box {
            text-align: center;
            border-radius: 24px;
            padding: 55px 25px;
            background: linear-gradient(130deg, #6d45b5, #302c69 55%, #155e75);
        }

        .contact-box p { margin: 12px auto 25px; max-width: 600px; color: #f0eaff; }

        footer {
            padding: 25px 0;
            text-align: center;
            color: var(--muted);
            border-top: 1px solid #ffffff15;
        }

        :focus-visible { outline: 2px solid var(--cyan); outline-offset: 4px; }

        @media (max-width: 800px) {
            .hero { grid-template-columns: 1fr; gap: 20px; padding-top: 65px; }
            .art { min-height: 320px; }
            .about-grid, .project-grid { grid-template-columns: 1fr 1fr; }
            .skills-grid { grid-template-columns: 1fr 1fr; }

            .menu-btn { display: block; }

            .nav-links {
                display: none;
                position: absolute;
                top: 76px;
                left: 0;
                right: 0;
                padding: 22px 5%;
                background: var(--panel);
                flex-direction: column;
                gap: 16px;
            }

            .nav-links.open { display: flex; }
        }

        @media (max-width: 520px) {
            h1 { letter-spacing: -1.5px; }
            .about-grid, .project-grid { grid-template-columns: 1fr; }
            section { padding: 65px 0; }
            .card { padding: 22px; }
        }

        @media (prefers-reduced-motion: reduce) {
            html { scroll-behavior: auto; }
            *, *::before, *::after { transition: none !important; }
        }
    </style>
</head>
<body>

<header>
    <nav class="container" aria-label="Main navigation">
        <a href="#home" class="logo">Abreham<span>.Dev</span></a>

        <button class="menu-btn" id="menuBtn"
                aria-label="Toggle navigation" aria-expanded="false"
                aria-controls="navLinks">☰ Menu</button>

        <ul class="nav-links" id="navLinks">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</header>

<main>
    <section class="container hero" id="home">
        <div>
            <div class="eyebrow">Welcome to my creative space</div>
            
<h1>Hi, I'm <span class="gradient-text">Abreham Leta.</span><br>
    I build things for the web.</h1>
<p>
    I'm a PHP and Laravel Developer passionate about building
    modern, reliable, and beautiful web applications.
    I turn ideas into digital experiences that solve real problems.
</p>

            <div class="actions">
                <a class="btn btn-primary" href="#projects">Explore My Work ↗</a>
                <a class="btn btn-outline" href="#contact">Let's Connect</a>
            </div>
        </div>

        <div class="art" aria-label="Developer illustration">
            <div class="orb">
                <div class="orb-inner">
                    <div>
                        <strong>&lt;/&gt;</strong>
                        <br><span>Code. Create. Improve.</span>
                    </div>
                </div>
            </div>
            <div class="floating float-one">✦ Creative Thinker</div>
            <div class="floating float-two">⚡ Laravel Developer</div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <h2 class="section-heading">A little <span>about me</span></h2>
            <p class="section-intro">
                I enjoy turning ideas into practical digital solutions.
                My goal is to create websites and applications that are
                attractive, reliable, and easy to use.
            </p>

            <div class="about-grid">
                <article class="card">
                    <div class="card-icon">💡</div>
                    <h3>Creative Thinking</h3>
                    <p>I enjoy solving problems and finding better ways to build for the web.</p>
                </article>
                <article class="card">
                    <div class="card-icon">🛠️</div>
                    <h3>Web Development</h3>
                    <p>I build web experiences using modern development practices.</p>
                </article>
                <article class="card">
                    <div class="card-icon">📚</div>
                    <h3>Always Learning</h3>
                    <p>I continuously improve my skills and explore new technologies.</p>
                </article>
            </div>
        </div>
    </section>

    <section id="skills">
        <div class="container">
            <h2 class="section-heading">My <span>skills</span></h2>
            <p class="section-intro">Technologies I use or am learning.</p>

            <div class="skills-grid">
                <div class="card skill"><span>🐘</span>PHP</div>
                <div class="card skill"><span>🔴</span>Laravel</div>
                <div class="card skill"><span>🗄️</span>MySQL</div>
                <div class="card skill"><span>🎨</span>HTML &amp; CSS</div>
                <div class="card skill"><span>⚡</span>JavaScript</div>
                <div class="card skill"><span>🌿</span>Git</div>
                <div class="card skill"><span>📱</span>Responsive Design</div>
                <div class="card skill"><span>🧩</span>Problem Solving</div>
            </div>
        </div>
    </section>

    <section id="projects">
        <div class="container">
            <h2 class="section-heading">Featured <span>projects</span></h2>
            <p class="section-intro">
                A selection of projects that demonstrate my development journey.
                Replace these examples with your real work.
            </p>

            <div class="project-grid">
                
<article class="card project-card">
    <div class="card-icon">🎓</div>
    <h3>Student Registrar System</h3>
    <p>
        A Laravel-based student registration application
        designed to organize student records and simplify
        registration management.
    </p>
    <span class="tag">PHP · Laravel · MySQL</span>
    <a class="project-link"
       href="#contact">Ask about this project ↗</a>
</article>


                <article class="card project-card">
                    <div class="card-icon">🌐</div>
                    <h3>Personal Portfolio</h3>
                    <p>A responsive personal website to present my skills, projects, and professional identity.</p>
                    <span class="tag">Laravel · CSS</span>
                    <a class="project-link" href="#home">You're viewing it ↗</a>
                </article>

                <article class="card project-card">
                    <div class="card-icon">🚀</div>
                    <h3>Future Project</h3>
                    <p>A space for my next application. I'll add details when the project is ready.</p>
                    <span class="tag">Coming soon</span>
                    <a class="project-link" href="#contact">Let's collaborate ↗</a>
                </article>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="contact-box">
                <h2 class="section-heading">Let's build something <span>great!</span></h2>
                <p>
                    Have a project idea, collaboration opportunity, or just
                    want to connect? I'd love to hear from you.
                </p>
                <a class="btn btn-primary"
   href="mailto:abrishleta@gmail.com">Email Me ✉</a>
            </div>
        </div>
    </section>
</main>

<footer>
    <div class="container">
        <p>© <span id="year"></span> Abreham Leta. Built with Laravel and creativity.</p>
    </div>
</footer>

<script>
    const menuBtn = document.getElementById('menuBtn');
    const navLinks = document.getElementById('navLinks');

    menuBtn.addEventListener('click', () => {
        const isOpen = navLinks.classList.toggle('open');
        menuBtn.setAttribute('aria-expanded', String(isOpen));
    });

    navLinks.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            navLinks.classList.remove('open');
            menuBtn.setAttribute('aria-expanded', 'false');
        });
    });

    document.getElementById('year').textContent = new Date().getFullYear();
</script>

</body>
</html>
