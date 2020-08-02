<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<link rel="stylesheet" href="{{ URL::asset('css/app.css')}}">
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
		<link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon"/>
		<title>Yusnardo Tendio</title>
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
				<span aria-hidden="true">yusnardo</span>
			</h1>
			<h1 class="playful" aria-label="yus">
				<span aria-hidden="true">tendio</span>
			</h1>
			<h2 class="data-ranger" aria-label="yus">
				<span aria-hidden="true">data enthusiast</span>
			</h2>
			<div class='find-me' style="text-align: center">
                <a href="https://www.linkedin.com/in/yusnardo-tendio-a00b32130/" target="_blank" title='linkedin'>
                    <img class="icon-contact" src="{{URL::asset('assets/linkedin.svg')}}" alt="linkedin">
                </a>
                <a href="https://github.com/yusnardo" target="_blank" title='github'>
                    <img class="icon-contact" src="{{URL::asset('assets/github.svg')}}" alt="github">
                </a>
                <a href="https://www.instagram.com/yustendio/" target="_blank" title='instagram'>
                    <img class="icon-contact" src="{{URL::asset('assets/ig.svg')}}" alt="ig">
                </a>
            </div>
		</div>

		<div class='middle'>
			<div id='projects'>
				<h3 style='margin-bottom:20px'>Projects</h3>
				<div class="card-deck">
					
					<div class="card">
						<a href="{{route('project_1')}}">
							<img src="{{URL::asset('assets/portfolio-project.png')}}" class="card-img-top" alt="Portfolio Website">\
						</a>
						<div class="card-body">
							<h5 class="card-title">Portfolio Website using Laravel 7</h5>
							<p class="card-text">Frontend - A portfolio website built with Laravel, Bootstrap, and others. You can see my resume in CV.</p>
						</div>
						<div class="card-footer">
							<small class="text-muted" >Saturday, 01-08-2020</small>
						</div>						
					</div>
					<div class="card ">
                        <a href="{{route('project_2')}}">
                            <img src="{{URL::asset('assets/project2.png')}}" class="card-img-top" alt="Portfolio Website">\
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Cross sell problem in Tiket.com prediction model</h5>
                            <p class="card-text">Data Science - Predict whether customer booked hotel with flight transaction or not. Comparing some of machine learning algorithm.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted" >Saturday, 01-08-2020</small>
                        </div>						
                    </div>
				</div>
				<div class="card-deck" style='margin-top:20px'>
					<div class="card ">
                        <a href="{{route('project_3')}}">
                            <img src="{{URL::asset('assets/timetabling.png')}}" class="card-img-top" alt="Timetabling Problem">\
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Examination Timetabling Problem</h5>
                            <p class="card-text">Optimization - Implemented hill climbing, simulated annealing, great deluge using some low level heuristic such as simple random and Kempe Chain.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted" >Saturday, 01-08-2020</small>
                        </div>						
                    </div>
					<div class="card">
						<a href="{{route('project_4')}}">
							<img src="{{URL::asset('assets/demion.png')}}" class="card-img-top" alt="Demion">
						</a>
						<div class="card-body">
							<h5 class="card-title">Demion e-learning template</h5>
							<p class="card-text">Frontend, Backend - e-learning website template, complete all function and design such as login, register, and even checkout.</p>
						</div>
						<div class="card-footer">
							<small class="text-muted">Saturday, 01-08-2020</small>
						</div>
					</div>
				</div>
			</div>	

			<div id='about'>
				<h3 style='margin-bottom:20px'>About Me</h3>
				<div class="card-1">
					<div class="desc">
						<p class="desc-text-big">Hello world! I'm Yusnardo Tendio!</p>
						<div class="desc-text-small">
							I'm a Information System major studying at Institut Teknologi Sepuluh Nopember. 
							Currently, I'm learning Data Science, Machine Learning, Web Development, and Data Structure. 
							Nice to meet you!
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class='footer'>
			<span>Created by Yusnardo Tendio <i class="fa fa-heart" aria-hidden="true" style='color: #CF3253;'></i></span>
		</div>
		

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
		<script src="/js/app.js"></script>
	</body>
</html>



