<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Name</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .carousel-container {
            max-width: 70%; 
            margin: 0 auto;    
        }
        .carousel-item img {
            max-height: 500px; 
            object-fit: cover; 
            width: 100%; 
        }
        .info-div {
            background-color: #f8f9fa;
            padding: 20px;
            margin: 10px 0;
            text-align: center;
        }
        .bg-image-div {
            background-image: url('https://images.pexels.com/photos/614117/pexels-photo-614117.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            background-size: cover;
            background-position: center;
            height: 400px;
            max-width: 80%;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
            margin: 0 auto;
        }  
        .central-div{
            height: 150px;
        }
         
    </style>
</head>
<body>
    @include('partials.firmLogo')
    @include('partials.header')
    <div class="carousel-container mt-5">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="First Slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Lorem ipsum dolor </h5>
                        <p>Duis placerat ligula id risus vestibulum congue. </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1542744094-3a31f272c490?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="Second Slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Nulla rutrum dapibus aliquet</h5>
                        <p>Sed blandit nibh ex, eu porttitor tellus ultrices a. Donec et pellentesque nisi. </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1635405050330-b0824eb1bf26?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="Third Slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Curabitur fringilla lorem rhoncus</h5>
                        <p>Curabitur facilisis, neque sed imperdiet vestibulum, diam lacus rutrum metus, at eleifend arcu odio at neque. </p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="row equal-height mt-5">
        <div class="col-md-4">
            <div class="info-div central-div">
                <h5>Ut euismod euismod interdum</h5>
                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="info-div central-div">
                <h5>Pellentesque sed libero augue</h5>
                <p>Etiam odio justo, pharetra nec massa ut, dictum laoreet lorem. </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="info-div central-div">
                <h5>Nulla rutrum dapibus aliquet</h5>
                <p>Donec mattis sapien nec odio accumsan, nec vehicula tellus tincidunt. Phasellus quis dolor consequat, dapibus ex vitae, pharetra arcu. Phasellus ultrices pulvinar maximus.</p>
            </div>
        </div>
    </div>
</div>
<div class="bg-image-div mt-5">
    <div>
        <h2>Vestibulum a eros at ligula faucibus pellentesque.</h2>
        <p>ed iaculis ultricies mauris in dictum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis fermentum rhoncus libero vel commodo. </p>
    </div>
</div>
</div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h1>Fusce a luctus sapien</h1>
                <p>Phasellus sit amet ultrices libero, ac consequat erat. Vestibulum auctor magna dolor. Suspendisse potenti. Curabitur ut lectus at urna malesuada viverra ac ut purus. Sed ut nunc sit amet sem fringilla rhoncus.</p>
                <p>Praesent posuere, arcu sagittis scelerisque tempor, diam lectus viverra enim, non lacinia urna diam ac felis. Cras commodo dui nibh, eget dapibus massa faucibus pellentesque. </p>
                <p><strong>Cras at urna mattis, rutrum ipsum pretium, lobortis sem.</strong></p>
            </div>
            <div class="col-md-6">
                <img src="https://images.pexels.com/photos/1181371/pexels-photo-1181371.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid" alt="Internship">
            </div>
        </div>
    </div>

    @include('partials.footer')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
