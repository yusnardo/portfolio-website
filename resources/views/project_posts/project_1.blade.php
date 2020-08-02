<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<link rel="stylesheet" href="{{ URL::asset('css/blog.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css')}}">

        <link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon"/>
        <title>Blog of Yusnardo Tendio</title>
    </head>
    <body>
        <div class='top'>
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{route('home')}}"><img class="icon-contact" src="{{URL::asset('assets/icon.png')}}" alt="Home"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link" href="{{route('cv')}}">CV</a>
                        <a class="nav-item nav-link" href="{{route('portfolio')}}">Projects</a>
                    </div>
                </div>
            </nav>
            <h1 class="playful" aria-label="yus">
                <span aria-hidden="true">Featured</span>
            </h1>
            <h1 class="playful" aria-label="yus">
                <span aria-hidden="true">Projects</span>
            </h1>
        </div>

        <div class='article-middle'>
            <article>
                <h3>Portfolio Website using Laravel 7</h3>
                <code>Saturday, 01-08-2020</code>
            </article>
            <img class='post-image' src="{{URL::asset('assets/portfolio-project.png')}}" alt="Portfolio Website">
            <article>
                <span>In this day and age, CV or resume with paper is not enough. 
                    This is due to paper savings and web technologies which are increasingly easy to implement. 
                    In other hands, every people can see our CV or resume widely with website. 
                    Below are the detail of this portfolio.
                </span>
                <h5>Goals</h5>
                <ul>
                    <li>Makes it easy to recapit the project and its details.</li>
                    <li>Makes it easy to apply for a job or a project.</li>
                    <li>Easy to share</li>
                </ul>
                <h5>Technology</h5>
                <ul>
                    <li>Laravel 7</li>
                    <li>Bootstrap 4.5</li>
                    <li>HTML 5</li>
                    <li>CSS</li>
                    <li>Javascript</li>
                    <li>Color Picker</li>
                    <li>Adobe Illustrator</li>
                </ul>
                <span></span>
            </article>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>