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
                <h3>Examination Timetabling Problem</h3>
                <code>Saturday, 01-08-2020</code>
            </article>
            <img class='post-image' src="{{URL::asset('assets/timetabling.png')}}" alt="Timetabling Problem">
            <article>
                <span>Secara umum penjadwalan ujian dilakukan secara manual dan membutuhkan waktu yang cukup lama. 
                    Banyak penelitian yang telah dilakukan untuk menemukan strategi yang paling tepat untuk menyusun jadwal dengan baik. 
                    Hill Climbing, Simulated Annealing, Great Deluge, dan Tabu Search merupakan algoritma yang digunakan dalam penelitian ini. 
                    Simple random digunakan sebagai metode untuk memilih low level heuristic yang digunakan. 
                    Dataset Carter (Toronto) digunakan sebagai bahan pengujian. Setiap algoritma akan dijalankan sebanyak 200.000 iterasi yang akan dibandingkan. 
                    Hasil yang diperoleh menunjukan Simulated Annealing dengan menggunakan Kempe Chain sebagai low level heuristic mampu memberikan hasil yang lebih baik dibandingkan dengan algoritma lainnya. 
                    Namun algoritma heuristic lainnya juga mampu bersaing dengan mendominasi pada dataset tertentu.</span>
                <h5>Goals</h5>
                <ul>
                    <li>Exam timetabling problem dalam dataset Toronto, berisi exam yang akan ditempatkan dalam slot waktu tertentu dan penempatannya harus memenuhi constraint yang ada (soft constraint dan hard constraint).</li>
                    <li>Untuk hard constraint, tidak boleh ada siswa yang dijadwalkan untuk mengikuti lebih dari satu ujian pada periode waktu yang sama.</li>
                    <li>Ketika hard constraint sudah dipenuhi, lalu digunakan fungsi objektif untuk memperkecil nilai penalty-nya. Nilai penalty diperoleh dari seberapa besar soft constraint yang dilanggar.</li>
                </ul>

                <h5>Algorithm</h5>
                <ul>
                    <li>Hill Climbing</li>
                    <li>Simulated Annealing</li>
                    <li>Great Deluge</li>
                    <li>Tabu Search</li>
                    <li>Some low level heuristic</li>
                </ul>
                <h5>Check my paper</h5>
                <a target='_blank' href="https://drive.google.com/file/d/1K5Bqjf3u7aC4GZLrSLZ6CD7qnbanEOPM/view?usp=sharing">Paper here</a>
            </article>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>