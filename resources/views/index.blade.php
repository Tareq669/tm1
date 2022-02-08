<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>tareq</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/site1">TMM669</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('site1home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about434') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('services669') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact996') }}">Contact</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>

        <section class="slider">

            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="http://placehold.it/1600x600" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="http://placehold.it/1600x600" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="http://placehold.it/1600x600" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <section class="my-5">
            <div class="container">
                <table class="table table-borderd table-striped table-hover">
                    <tr class="table-dark">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Gendet</th>
                        <th>job</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>tareq</td>
                        <td>tm@gmail.com</td>
                        <td>0598201669</td>
                        <td>male</td>
                        <td>Dev</td>
                        <td>
                            <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></>
                        </td>
                    </tr>
                    <tr>
                        <td>tareq</td>
                        <td>tm@gmail.com</td>
                        <td>0598201669</td>
                        <td>male</td>
                        <td>Dev</td>
                        <td>
                            <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></>
                        </td>
                    </tr>
                    <tr>
                        <td>tareq</td>
                        <td>tm@gmail.com</td>
                        <td>0598201669</td>
                        <td>male</td>
                        <td>Dev</td>
                        <td>
                            <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></>
                        </td>
                    </tr>
                    <tr>
                        <td>tareq</td>
                        <td>tm@gmail.com</td>
                        <td>0598201669</td>
                        <td>male</td>
                        <td>Dev</td>
                        <td>
                            <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></>
                        </td>
                    </tr>
                    <tr>
                        <td>tareq</td>
                        <td>tm@gmail.com</td>
                        <td>0598201669</td>
                        <td>male</td>
                        <td>Dev</td>
                        <td>
                            <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></>
                        </td>
                    </tr>
                    <tr>
                        <td>tareq</td>
                        <td>tm@gmail.com</td>
                        <td>0598201669</td>
                        <td>male</td>
                        <td>Dev</td>
                        <td>
                            <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></>
                        </td>
                    </tr>
                    <tr>
                        <td>tareq</td>
                        <td>tm@gmail.com</td>
                        <td>0598201669</td>
                        <td>male</td>
                        <td>Dev</td>
                        <td>
                            <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></>
                        </td>
                    </tr>
                </table>
            </div>
        </section>
        <section class="about">

            <div class="container">

                <div class="row align-items-center">

                    <div class="col-md-6">
                        <h2>About Us</h2>
                         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi alias, odit fugit dicta beatae veritatis quisquam itaque excepturi autem nam praesentium sapiente soluta mollitia consequuntur sunt atque quas perspiciatis repellendus odio quasi rerum distinctio omnis a? Quidem voluptates commodi aliquam voluptatem modi totam impedit sint doloremque ab deleniti, assumenda reiciendis dolorum quia corrupti illum minus, doloribus quis iure. Quia et debitis, ipsum labore tempore obcaecati recusandae fuga beatae repellendus quis illum tempora veritatis vitae aspernatur tenetur magnam vel culpa vero, quo minus inventore ratione libero, consequuntur perspiciatis? Obcaecati veniam doloribus temporibus maxime! Sapiente quos, nostrum est maiores quo, sequi consectetur nisi temporibus sed, praesentium recusandae quasi iste soluta dolor alias distinctio numquam beatae officia. Harum modi nobis perferendis adipisci vel ab corrupti illum? Maxime incidunt tempore culpa recusandae minima delectus optio quo vitae repellat mollitia pariatur nisi praesentium eius, facilis reprehenderit tenetur obcaecati id, ab accusamus quisquam maiores. Ullam, fugiat.</p>
                    </div>
                    <div class="col-md-6"> <img src="https://placekitten.com/500/500" alt=""> </div>

                </div>

            </div>
        </section>

        <section class="video my-5 text-center">
            <div class="container">
                <iframe width="700" height="500" src="https://www.youtube.com/embed/tXIBomCa78s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

        </section>
    </main>

    <footer>

        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <form action="">
                        <input class="form-control mb-3" type="text"
                        placeholder="Name">
                        <input class="form-control mb-3" type="text"
                        placeholder="Subject">
                        <textarea class="form-control mb-3" rows="5" placeholder="Message"></textarea>
                        <button class="btn btn-dark w-100 {{-- text-end --}} ">Send</button>
                    </form>
                </div>
                <div class="col-md-7"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54427.5625526125!2d34.4294035434723!3d31.504306216948283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14fd7f9e1c3b72c9%3A0xab42fb704ce14797!2z2KfZhNmF2LPYrNivINin2YTYudmF2LHZiiDYp9mE2YPYqNmK2LE!5e0!3m2!1sen!2s!4v1644202066905!5m2!1sen!2s" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
            </div>
        </div>

        <div class="coprigt bg-dark py-4 text-center text-white">
            <p class="m-0">All Copyright reservd to
                <a href="https://www.facebook.com/tareq6699/">Tareq Ameer</a>
                <i class="far fa-copyright"> {{ date('Y')}}</i>
            </p>
        </div>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>



</body>

</html>
