@extends('layout.main')
@section('Form')
    <?php $title = 'Home Page'; ?>

    {{-- navbar --}}
    <div class="container-fluid" id="Home">
        <nav class="navbar sticky-top navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Portfulio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#Home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action 1</a></li>
                                <li><a class="dropdown-item" href="#">Action 2</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                        <li>
                            <a href="#About-Us" class="nav-link">About Us</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="container mt-3 content">
            <h1>
                <center>Welcome Home</center>
            </h1>
            <article class="shadow bg-dark text-light p-2 rounded-4">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis nesciunt, praesentium assumenda doloribus
                ratione maxime libero dolorem nisi iste architecto beatae soluta aut suscipit dolore sunt id, nobis tenetur
                quam rem ex cum vero necessitatibus placeat laudantium! Cumque repellendus sit quos. Ipsam tempora fugit
                molestiae odit ratione atque nihil a? Sit reprehenderit officia explicabo, animi ducimus dignissimos
                facilis, sed
                repudiandae pariatur iure nam perspiciatis vero voluptatibus quidem maxime iusto quae ut dolores aperiam
                voluptatum impedit ad obcaecati rerum id. Dolor dicta, dolorem neque natus adipisci corporis officia nulla
                architecto sapiente quia excepturi deleniti reiciendis ipsum quaerat quibusdam maiores necessitatibus
                repellendus sed. Voluptatem minus culpa, reprehenderit repellat accusamus laudantium consequatur nostrum
                soluta fugiat autem ex totam dolorem est consequuntur amet? Repudiandae nemo nihil perspiciatis perferendis
                ullam
                nostrum, assumenda facilis aliquid expedita nam sed! Facilis iusto fugiat, voluptatem excepturi quidem harum
                provident vitae qui obcaecati voluptates at, quasi minima minus tenetur dolorum aliquam dolor neque ad
                assumenda incidunt asperiores? Aliquid, neque veniam rem sequi dicta deleniti commodi corrupti, culpa
                sapiente
                inventore labore itaque expedita, quibusdam et cumque! Tempora, iusto enim! Nam, debitis neque est beatae
                sequi ullam
                repellat in facilis asperiores cupiditate, dolores ex, expedita libero. Perspiciatis illo, ab voluptas,
                inventore velit ducimus aut dolor, vitae harum autem quibusdam neque architecto porro sed vel mollitia nisi?
                Molestias neque modi aperiam officia in dolor aliquam, sint animi? Sint tempore libero ad sunt debitis
                consequatur dignissimos fugit odio quia similique, fugiat maiores dolorem facere voluptates, excepturi amet
                perspiciatis iure aliquid dolores ullam necessitatibus in? Id distinctio quod voluptatum eaque saepe. Facere
                ipsa nisi autem corporis. Suscipit ratione dolorem reiciendis quisquam dicta, blanditiis voluptates officiis
                aut recusandae nisi excepturi magni nihil ea ex sapiente eos deserunt sint consequatur perspiciatis. Aliquid
                ab
                veniam sit cupiditate amet iure, aliquam quae cum laborum deleniti blanditiis at. A natus facilis mollitia
                libero. Laudantium necessitatibus quaerat mollitia iusto distinctio repellat, id blanditiis vitae
                consequatur, aliquid et ipsa ipsum cum pariatur laboriosam corporis magni vel sunt. Ex, quod adipisci.
                Nostrum, vel!
                Illo, doloribus id esse quod excepturi consequuntur, itaque delectus odio odit rem est doloremque, aliquam
                necessitatibus ducimus maiores ullam expedita. Soluta facilis eveniet dolores nesciunt quasi numquam porro
                ab et. Ex nisi libero eveniet, et odio animi aliquid ea dolor placeat perferendis distinctio, non corrupti
                incidunt consectetur recusandae magnam? Non tempora animi itaque maiores molestiae, expedita quos illo
                suscipit
                dolorum
            </article>
            <div class="bg-info p-2 my-2 rounded-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium necessitatibus beatae temporibus sed
                velit doloribus delectus eligendi quibusdam deserunt vitae unde facere voluptatum rerum aliquam est vero,
                veritatis at odio.
            </div>
            <div id="About-Us" class=" my-3">
                <h2>
                    <center>About Us</center>
                </h2>
                <div class="Cards container">
                    <div class="row">
                        <div class="card m-3 col" style="width: 18rem;">
                            <img src="{{ url('img/43.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Back-end Developer</h5>
                                <p class="card-text">
                                    Intrested in all back serves, and know same liguage like java, python,
                                    C and C++.
                                </p>
                                <a href="https://www.google.com/search?q=developer+back+end&client=firefox-b-d&sxsrf=ALiCzsa3PJbQfUeMSKQc9DI9gXz4O4Du1g%3A1660583487587&ei=P376Yp6yI8KClwTk9omYBg&oq=developer+back+end&gs_lcp=Cgdnd3Mtd2l6EAMYADIFCAAQgAQyBggAEB4QBTIGCAAQHhAFMgYIABAeEAUyBggAEB4QBTIGCAAQHhAFMgYIABAeEAUyBggAEB4QBTIGCAAQHhAFMgYIABAeEAU6BwgAEEcQsAM6CggAEEcQsAMQyQM6BwgAELADEEM6CggAEOQCELADGAE6FQguEMcBENEDENQCEMgDELADEEMYAjoSCC4QxwEQ0QMQyAMQsAMQQxgCOgYIABAeEAc6CAgAEB4QCBAHOgQIABAeOgYIABAeEA9KBAhBGABKBAhGGAFQwgxYrBZgvyFoAnABeACAAb8BiAHpBpIBAzAuNZgBAKABAcgBEcABAdoBBggBEAEYCdoBBggCEAEYCA&sclient=gws-wiz"
                                    class="btn btn-primary">Back-end</a>
                            </div>
                        </div>
                        <div class="card m-3 col" style="width: 18rem;">
                            <img src="{{ url('img/43.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Front-end Developer</h5>
                                <p class="card-text">
                                    Soma papulies call me a disagner I know things like html css js on general
                                    and some laberary of thos last things.
                                </p>
                                <a href="https://www.google.com/search?q=developer+front+end&client=firefox-b-d&sxsrf=ALiCzsY3aNk6irmc8WOfgx9c99LMUn3TJQ%3A1660583471693&ei=L376Ysz0KcGWaav3gtAL&oq=developer+front&gs_lcp=Cgdnd3Mtd2l6EAMYATIFCAAQgAQyBQgAEIAEMgYIABAeEBYyBggAEB4QFjIGCAAQHhAWMgYIABAeEBYyCQgAEB4QyQMQFjIGCAAQHhAWMggIABAeEBYQCjIICAAQHhAWEAo6BwgAEEcQsAM6BwgAELADEEM6BAgAEEM6BAgAEAo6CggAEIAEEIcCEBQ6BQgAEJECOggIABCRAhCLAzoICAAQgAQQiwM6CAgAEB4QDxAWSgQIQRgASgQIRhgAULcBWOQkYO9eaAFwAXgAgAHiAYgB6giSAQUwLjUuMZgBAKABAcgBCrgBAsABAQ&sclient=gws-wiz"
                                    class="btn btn-primary">Front-end</a>
                            </div>
                        </div>
                        <div class="card m-3 col" style="width: 18rem;">
                            <img src="{{ url('img/43.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">3D Games Developer</h5>
                                <p class="card-text">
                                    This branch is not in fes yet some we knew nothig about it.
                                </p>
                                <a href="https://www.google.com/search?q=develop+3d+games&client=firefox-b-d&sxsrf=ALiCzsZG-yeZrSiQXxcfgfdUQ74lBs0Leg%3A1660583524356&ei=ZH76YuGjFc-Iur4P6qyl0Ag&oq=developer+3D+Games&gs_lcp=Cgdnd3Mtd2l6EAMYADIGCAAQHhAWMgoIABAeEA8QFhAKMggIABAeEA8QFjIFCAAQhgMyBQgAEIYDMgUIABCGAzIFCAAQhgM6BwgAEEcQsAM6CggAEEcQsAMQyQM6BwgAELADEENKBAhBGABKBAhGGABQ3QNY3QNglxNoAXABeACAAcgBiAHIAZIBAzItMZgBAKABAqABAcgBCcABAQ&sclient=gws-wiz"
                                    class="btn btn-primary">3D Games</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end container --}}
    </div>
    {{-- end parent container --}}
@endsection
