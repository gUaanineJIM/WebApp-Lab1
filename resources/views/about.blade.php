<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Janine Ishe Matamorosa</title>
    <link href="/css/about1.css" rel="stylesheet">
</head>

<body>
    <div class="header__main">
        <div>
            <nav>
                <ul class="header__nav">
                    <li><a href="homepage">Home</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="content">Projects</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <main>
        <section class="section-content">
            <h2>Activity for Web Development - Laboratory 1</h2><br><br>
            <p>
                For my Web Development course activity, I followed the given instructions to create a website using
                Laravel, which showcases my personal information and some of the projects I've worked on as a BS
                Information Technology student at Bicol University.
            </p><br>
            <p>
                The website includes three main views: a homepage, an about page, and a content page. I added a simple
                To-Do list feature to demonstrate additional functionality. This To-Do list is built using JavaScript
                and leverages the web browser's storage to keep track of tasks, eliminating the need for a database.
            </p><br>
            <p>
                I used Blade, Laravel's templating engine, to create the views. This allowed me to easily integrate
                dynamic content and ensure a consistent layout across the pages. The project is managed in a Git
                repository, where I documented each step of the process—from installing Laravel to setting up the
                environment, creating routes, and navigating the pages. The documentation, including screenshots, is
                stored in a PDF file within the "docs" folder in the repository.
            </p><br>
            <p>
                This project not only meets the course requirements but also serves as a personal showcase of my skills
                and experience as an IT student.
            </p><br>
        </section>
    </main>


    <main class="header__content">
        <div class="img">
            <img src="{{ asset('img/grad.jpg') }}" alt="Image description">
        </div>

        <div class="header__text">
            <h1>Janine Ishe Matamorosa</h1>
            <h4>BS Information Technology Student</h4>
            <button class="btn"><a href="content">My Projects </a></button>
        </div>
    </main>

    <footer class="contact__footer">
        <p>&copy; 2024 Janine Ishe Matamorosa. All rights reserved.</p><br>
        <p>Email: <a href="mailto:jimm2022-9346-24541@bicol-u.edu.ph">jimm2022-9346-24541@bicol-u.edu.ph</a></p>
        <p>| Phone: <a href="tel:+1234567890">+1234567890</a></p>
        <p>| LinkedIn: <a href="https://www.linkedin.com/in/janine-ishe-matamorosa-3952442b3/">LinkIN Account</a></p>
        
    </footer>

</body>

</html>