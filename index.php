<!doctype html>
<html lang="en">
<?php 
$pageTile = "My Blog Title";
$dateVer  = date('his');
$projectArr = [];
$projectArr['csslinks'] = ['bootstrap.min', 'animate', 'style'];
?>
<head>
  <title><?php echo $pageTile;?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php
  foreach($projectArr['csslinks'] as $csslink) {
  ?>
  <link rel="stylesheet" href="css/<?php echo $csslink; ?>.css?ver=<?php echo $dateVer; ?>">
  <?php 
  }
  ?>
  <script defer src="js/lib/fontawesome-all.min.js?ver=<?php echo $dateVer; ?>"></script>
</head>

<body data-spy="scroll" data-target=".site-nav" data-offset="55">

  <header id="page-hero" class="site-header d-flex flex-column align-content-between">

    <nav class="site-nav family-sans navbar navbar-expand-md navbar-dark fixed-top">
      <div class="container-fluid">

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myTogglerNav" aria-controls="myTogglerNav"
          aria-label="Toggle Navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand text-uppercase" href="#page-hero">
          <i class="fas fa-cube mr-2"></i> Layout Components</a>

        <div class="collapse navbar-collapse" id="myTogglerNav">
          <div class="navbar-nav ml-auto font-weight-regular text-uppercase">
            <a class="nav-item nav-link" href="#page-hero">home</a>
            <a class="nav-item nav-link" href="#page-multicolumn">columns</a>
            <a class="nav-item nav-link" href="#page-media">media</a>
            <a class="nav-item nav-link" href="#page-photogrid">grid</a>
            <a class="nav-item nav-link" href="#page-carousel">carousel</a>
            <a class="nav-item nav-link" href="#page-nested">nested</a>
            <a class="nav-item nav-link" href="#page-icons">icons</a>
            <a class="nav-item nav-link" href="#page-floater">floater</a>
            <a class="nav-item nav-link" href="#page-cards">cards</a>
          </div>
        </div>

      </div>
    </nav>

    <section class="layout-hero jumbotron jumbotron-fluid d-flex align-items-center mt-5 text-reverse">
      <div class="container text-center">
        <div class="row justify-content-center">
          <div class="col-11 col-sm-10 col-md-8 animated fadeInUp">
            <h3 class="page-section-title text-reverse">raybo.org/bootstrap4layouts</h3>
            <p class="page-section-text lead">Learn to build practical Bootstrap 4 layouts using the grid, flex classes and utlity classes with these sample
              layout components. Each component is wrapped in an individual section class so you can copy, paste and customize
              them into your own layouts.</p>
            <a class="btn btn-outline-light" href="https://github.com/planetoftheweb/bootstrap4layouts">Github Repo</a>
          </div>
        </div>
      </div>
    </section>

  </header>

  <article id="page-multicolumn" class="page-section vertical-padding">

    <header class="page-section-header container">
      <h2 class="page-section-title display-4 pt-4 text-center">Multi-column</h2>
      <p class="page-section-text lead mx-md-5">This layout uses multiple column rules so that how many columns each group takes depends on the width of the browser,
        by also using the
        <code>justify-content-center</code> class on the row, using less than 12 columns results in a centered set of columns. The rules used are
        <code>col-10</code>
        <code>col-md-6</code>
        <code>col-lg-4</code>
        <code>col-xl-3</code>.</p>
    </header>

    <section class="layout-multicolumn container family-sans text-uppercase text-center py-4">
      <div class="row justify-content-center py-2">

        <section class="photo-modal mb-5 col-10 col-md-6 col-lg-4 col-xl-3">
          <a data-toggle="modal" data-target="#site-modal" data-highres="https://dummyimage.com/16:9x1600/A.png&text=+" href="#">
            <img class="layout-image img-fluid rounded" src="https://dummyimage.com/16:9x400/6.png&text=+" alt="sample image">
          </a>
          <h5 class="layout-title mt-1">Text Heading</h5>
        </section>

        <section class="photo-modal text-center mb-5 col-10 col-md-6 col-lg-4 col-xl-3">
          <a data-toggle="modal" data-target="#site-modal" data-highres="https://dummyimage.com/16:9x1600/A.png&text=+" href="#">
            <img class="layout-image img-fluid rounded" src="https://dummyimage.com/16:9x400/6.png&text=+" alt="sample image">
          </a>
          <h5 class="layout-title mt-1">Text Heading</h5>
        </section>

        <section class="photo-modal text-center mb-5 col-10 col-md-6 col-lg-4 col-xl-3">
          <a data-toggle="modal" data-target="#site-modal" data-highres="https://dummyimage.com/16:9x1600/A.png&text=+" href="#">
            <img class="layout-image img-fluid rounded" src="https://dummyimage.com/16:9x400/6.png&text=+" alt="sample image">
          </a>
          <h5 class="layout-title mt-1">Text Heading</h5>
        </section>

        <section class="photo-modal text-center mb-5 col-10 col-md-6 col-lg-4 col-xl-3">
          <a data-toggle="modal" data-target="#site-modal" data-highres="https://dummyimage.com/16:9x1600/A.png&text=+" href="#">
            <img class="layout-image img-fluid rounded" src="https://dummyimage.com/16:9x400/6.png&text=+" alt="sample image">
          </a>
          <h5 class="layout-title mt-1">Text Heading</h5>
        </section>

        <section class="photo-modal text-center mb-5 col-10 col-md-6 col-lg-4 col-xl-3">
          <a data-toggle="modal" data-target="#site-modal" data-highres="https://dummyimage.com/16:9x1600/A.png&text=+" href="#">
            <img class="layout-image img-fluid rounded" src="https://dummyimage.com/16:9x400/6.png&text=+" alt="sample image">
          </a>
          <h5 class="layout-title mt-1">Text Heading</h5>
        </section>

        <section class="photo-modal text-center mb-5 col-10 col-md-6 col-lg-4 col-xl-3">
          <a data-toggle="modal" data-target="#site-modal" data-highres="https://dummyimage.com/16:9x1600/A.png&text=+" href="#">
            <img class="layout-image img-fluid rounded" src="https://dummyimage.com/16:9x400/6.png&text=+" alt="sample image">
          </a>
          <h5 class="layout-title mt-1">Text Heading</h5>
        </section>

        <section class="photo-modal text-center mb-5 col-10 col-md-6 col-lg-4 col-xl-3">
          <a data-toggle="modal" data-target="#site-modal" data-highres="https://dummyimage.com/16:9x1600/A.png&text=+" href="#">
            <img class="layout-image img-fluid rounded" src="https://dummyimage.com/16:9x400/6.png&text=+" alt="sample image">
          </a>
          <h5 class="layout-title mt-1">Text Heading</h5>
        </section>

        <section class="photo-modal text-center mb-5 col-10 col-md-6 col-lg-4 col-xl-3">
          <a data-toggle="modal" data-target="#site-modal" data-highres="https://dummyimage.com/16:9x1600/A.png&text=+" href="#">
            <img class="layout-image img-fluid rounded" src="https://dummyimage.com/16:9x400/6.png&text=+" alt="sample image">
          </a>
          <h5 class="layout-title mt-1">Text Heading</h5>
        </section>

        <section class="photo-modal text-center mb-5 col-10 col-md-6 col-lg-4 col-xl-3">
          <a data-toggle="modal" data-target="#site-modal" data-highres="https://dummyimage.com/16:9x1600/A.png&text=+" href="#">
            <img class="layout-image img-fluid rounded" src="https://dummyimage.com/16:9x400/6.png&text=+" alt="sample image">
          </a>
          <h5 class="layout-title mt-1">Text Heading</h5>
        </section>

        <section class="photo-modal text-center mb-5 col-10 col-md-6 col-lg-4 col-xl-3">
          <a data-toggle="modal" data-target="#site-modal" data-highres="https://dummyimage.com/16:9x1600/A.png&text=+" href="#">
            <img class="layout-image img-fluid rounded" src="https://dummyimage.com/16:9x400/6.png&text=+" alt="sample image">
          </a>
          <h5 class="layout-title mt-1">Text Heading</h5>
        </section>

        <section class="photo-modal text-center mb-5 col-10 col-md-6 col-lg-4 col-xl-3">
          <a data-toggle="modal" data-target="#site-modal" data-highres="https://dummyimage.com/16:9x1600/A.png&text=+" href="#">
            <img class="layout-image img-fluid rounded" src="https://dummyimage.com/16:9x400/6.png&text=+" alt="sample image">
          </a>
          <h5 class="layout-title mt-1">Text Heading</h5>
        </section>

        <section class="photo-modal text-center mb-5 col-10 col-md-6 col-lg-4 col-xl-3">
          <a data-toggle="modal" data-target="#site-modal" data-highres="https://dummyimage.com/16:9x1600/A.png&text=+" href="#">
            <img class="layout-image img-fluid rounded" src="https://dummyimage.com/16:9x400/6.png&text=+" alt="sample image">
          </a>
          <h5 class="layout-title mt-1">Text Heading</h5>
        </section>

      </div>
    </section>
  </article>

  <article id="page-media" class="page-section vertical-padding">

    <header class="page-section-header container text-center">
      <h2 class="page-section-title display-4 pt-4 text-center">Media</h2>
      <p class="page-section-text lead mx-md-5 ">A quick way two column pattern that shows an image next to a photo. In bootstrap 4, you gain the ability to center
        elements using flexbox classes. A couple of things to watch out for is that these will always render as single columns
        and can sometimes be too wide, so these particular media elements are inside an 8 column grid.</p>
    </header>

    <section class="layout-media container my-5">

      <div class="row justify-content-md-center">
        <div class="animated-group col-lg-8 invisible">

          <section class="media mb-4">
            <img class="layout-image align-self-center mr-3 img-fluid rounded" src="https://dummyimage.com/80/6.png&text=+" alt="Photo Sample">
            <div class="media-body">
              <h4 class="layout-title">Media One</h4>
              <p class="layout-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum at voluptatibus incidunt, quia sapiente sequi
                quis quae atque quas id quam ab nobis iste eius, accusamus et officia laudantium! Ducimus.</p>
            </div>
          </section>

          <section class="media mb-4">
            <img class="layout-image align-self-center mr-3 img-fluid rounded" src="https://dummyimage.com/80/6.png&text=+" alt="Photo Sample">
            <div class="media-body">
              <h4 class="layout-title">Media Two</h4>
              <p class="layout-text">Possimus beatae magnam illum necessitatibus laudantium illo aspernatur ducimus eveniet? Voluptas labore similique
                aut quam quibusdam eius voluptatum dolores quas molestiae suscipit numquam veniam, nemo totam incidunt ullam
                pariatur perspiciatis.</p>
            </div>
          </section>

          <section class="media mb-4">
            <img class="layout-image align-self-center mr-3 img-fluid rounded" src="https://dummyimage.com/80/6.png&text=+" alt="Photo Sample">
            <div class="media-body">
              <h4 class="layout-title">Media Three</h4>
              <p class="layout-text">Quis at impedit repellat ipsam ad reiciendis beatae odio explicabo amet fuga nostrum animi nisi unde ab sint,
                sequi est officia. Maiores, fuga aliquid pariatur dignissimos eum vitae ex suscipit.</p>
            </div>
          </section>

        </div>
      </div>
    </section>

  </article>

  <article id="page-photogrid" class="page-section">

    <header class="page-section-header text-center container">
      <h2 class="page-section-title display-4 pt-4">Photo Grid</h2>
      <p class="page-section-text lead mx-md-5 ">A photo grid creates an edge to edge layout with a grid of photos.</p>
    </header>

    <section class="layout-photogrid">
      <div class="row justify-content-center no-gutters">

        <section class="photo-modal text-center col-12 col-sm-6 col-md-4 col-lg-3">
          <img class="layout-image img-fluid" src="https://dummyimage.com/16:9x600/6/C.png&text=01" alt="sample image">
        </section>

        <section class="photo-modal text-center col-12 col-sm-6 col-md-4 col-lg-3">
          <img class="layout-image img-fluid" src="https://dummyimage.com/16:9x600/6/C.png&text=02" alt="sample image">
        </section>

        <section class="photo-modal text-center col-12 col-sm-6 col-md-4 col-lg-3">
          <img class="layout-image img-fluid" src="https://dummyimage.com/16:9x600/6/C.png&text=03" alt="sample image">
        </section>

        <section class="photo-modal text-center col-12 col-sm-6 col-md-4 col-lg-3">
          <img class="layout-image img-fluid" src="https://dummyimage.com/16:9x600/6/C.png&text=04" alt="sample image">
        </section>

        <section class="photo-modal text-center col-12 col-sm-6 col-md-4 col-lg-3">
          <img class="layout-image img-fluid" src="https://dummyimage.com/16:9x600/6/C.png&text=05" alt="sample image">
        </section>

        <section class="photo-modal text-center col-12 col-sm-6 col-md-4 col-lg-3">
          <img class="layout-image img-fluid" src="https://dummyimage.com/16:9x600/6/C.png&text=06" alt="sample image">
        </section>

        <section class="photo-modal text-center col-12 col-sm-6 col-md-4 col-lg-3">
          <img class="layout-image img-fluid" src="https://dummyimage.com/16:9x600/6/C.png&text=07" alt="sample image">
        </section>

        <section class="photo-modal text-center col-12 col-sm-6 col-md-4 col-lg-3">
          <img class="layout-image img-fluid" src="https://dummyimage.com/16:9x600/6/C.png&text=08" alt="sample image">
        </section>

        <section class="photo-modal text-center col-12 col-sm-6 col-md-4 col-lg-3">
          <img class="layout-image img-fluid" src="https://dummyimage.com/16:9x600/6/C.png&text=09" alt="sample image">
        </section>

        <section class="photo-modal text-center col-12 col-sm-6 col-md-4 col-lg-3">
          <img class="layout-image img-fluid" src="https://dummyimage.com/16:9x600/6/C.png&text=10" alt="sample image">
        </section>

        <section class="photo-modal text-center col-12 col-sm-6 col-md-4 col-lg-3">
          <img class="layout-image img-fluid" src="https://dummyimage.com/16:9x600/6/C.png&text=11" alt="sample image">
        </section>

        <section class="photo-modal text-center col-12 col-sm-6 col-md-4 col-lg-3">
          <img class="layout-image img-fluid" src="https://dummyimage.com/16:9x600/6/C.png&text=12" alt="sample image">
        </section>

      </div>
    </section>
  </article>

  <article id="page-carousel" class="page-section">

    <section id="layout-carousel" class="layout-carousel carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <ol class="carousel-indicators">
          <li data-target="#layout-carousel" data-slide-to="0"></li>
          <li data-target="#layout-carousel" data-slide-to="1" class="active"></li>
          <li data-target="#layout-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-item active">
          <img class="img-fluid" src="https://dummyimage.com/16:9x1600/A/B.png&text=one" alt="Photo Sample">
        </div>

        <div class="carousel-item">
          <img class="img-fluid" src="https://dummyimage.com/16:9x1600/B/C.png&text=two" alt="Photo Sample">
        </div>
        <div class="carousel-item">
          <img class="img-fluid" src="https://dummyimage.com/16:9x1600/D/E.png&text=three" alt="Photo Sample">
        </div>

        <a class="carousel-control-prev" href="#layout-carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true">
            <span class="sr-only">Previous</span>
          </span>
        </a>

        <a class="carousel-control-next" href="#layout-carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true">
            <span class="sr-only">Previous</span>
          </span>
        </a>
      </div>
    </section>

  </article>

  <article id="page-nested" class="page-section text-reverse">

    <section class="layout-nested container-fluid vertical-padding">
      <div class="row align-items-center justify-content-center">

        <section class="col-sm-9 col-md-5 col-lg-12 text-center text-lg-left">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-2 text-lg-right">
              <img class="layout-image img-circle img-fluid rounded-circle py-3" src="https://dummyimage.com/200/9.png&text=+" alt="Photo placeholder">
            </div>
            <div class="col-lg-6">
              <h2 class="layout-title pt-3">Nested</h2>
              <p class="layout-text">Fuga possimus aliquam repudiandae, aspernatur quam velit cupiditate nihil beatae eum ipsa consequuntur itaque
                doloremque! Consequatur consequuntur nesciunt perferendis in illum excepturi nisi, eius totam ducimus nemo.
                Libero, accusantium tempore?</p>
            </div>
          </div>
        </section>

        <section class="col-sm-9 col-md-5 col-lg-12 text-center text-lg-left">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-2 text-lg-right">
              <img class="layout-image img-circle img-fluid rounded-circle" src="https://dummyimage.com/200/9.png&text=+" alt="Photo placeholder">
            </div>
            <div class="col-lg-6">
              <h2 class="layout-title pt-3">Nested</h2>
              <p class="layout-text">Fuga possimus aliquam repudiandae, aspernatur quam velit cupiditate nihil beatae eum ipsa consequuntur itaque
                doloremque! Consequatur consequuntur nesciunt perferendis in illum excepturi nisi, eius totam ducimus nemo.
                Libero, accusantium tempore?</p>
            </div>
          </div>
        </section>

      </div>
    </section>

  </article>

  <article id="page-icons" class="page-section">

    <div class="layout-iconcolumns container py-5">
      <div class="row text-center">

        <section class="col-md-4 my-3">
          <div class="icon layout-icon">
            <i class="fas fa-anchor"></i>
          </div>
          <h3 class="layout-title">Icon One</h3>
          <p class="layout-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis doloremque possimus dignissimos illo praesentium
            id consectetur tempora dolorum! Vel sapiente vitae, deserunt minima et rem accusamus?</p>
        </section>

        <section class="col-md-4 my-3">
          <div class="icon layout-icon">
            <i class="fas fa-bed"></i>
          </div>
          <h3 class="layout-title">Icon Two</h3>
          <p class="layout-text">Dolorem repudiandae ipsa fugit distinctio modi earum dicta eum tenetur, vel temporibus laudantium totam libero
            odit ex labore commodi maiores molestias. Quo, hic maxime. Accusantium impedit dolorem cum error?</p>
        </section>

        <section class="col-md-4 my-3">
          <div class="icon layout-icon">
            <i class="fas fa-beer"></i>
          </div>
          <h3 class="layout-title">Icon Three</h3>
          <p class="layout-text">Et, alias asperiores? Repellat repudiandae, eum temporibus quibusdam iure, recusandae illo nesciunt, doloremque
            eligendi maiores tempora eos aliquid minus iusto ipsum facere. Minus, vitae autem dolores vero dolore?</p>
        </section>

      </div>
    </div>

  </article>

  <article id="page-floater" class="page-section vertical-padding">

    <section class="layout-floater container text-reverse">
      <div class="row align-items-center justify-content-center">

        <div class="col-8 col-md-4 img-container">
          <img class="layout-image img-fluid" src="http://planetoftheweb.com/i/phone.svg" alt="Photo Sample">
        </div>

        <div class="col-10 col-md-6 align-self-center">
          <div class="my-5 text-center text-md-left pl-md-5">
            <h2 class="layout-title">Floater Title</h2>
            <p class="layout-text ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis fuga ex delectus sunt natus doloremque praesentium
              aspernatur, totam tempora officia, sed fugit? Libero voluptatem nulla mollitia, amet dolor iste magni.</p>
          </div>
        </div>

      </div>
    </section>

  </article>

  <article id="page-cards" class="page-section">

    <section class="layout-cards container">
      <div class="row justify-content-center">
        <div class="col-8 col-sm-12 col-lg-10">
          <div class="card-deck">

            <section class="card my-3">
              <img class="layout-image card-img-top img-fluid" src="https://dummyimage.com/16:9x400/6.png&text=+" alt="Photo Sample">
              <div class="card-body">
                <h4 class="layout-title card-title">Card Title</h4>
                <p class="layout-text card-text ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint dolorem dolores consequatur ducimus nisi quos
                  saepe error quo praesentium, recusandae aliquam repudiandae.</p>
              </div>
            </section>

            <section class="card my-3">
              <img class="layout-image card-img-top img-fluid" src="https://dummyimage.com/16:9x400/6.png&text=+" alt="Photo Sample">
              <div class="card-body">
                <h4 class="layout-title card-title">Card Title</h4>
                <p class="layout-text card-text ">Impedit autem ea delectus repudiandae iste commodi a natus aspernatur culpa accusantium, hic, ullam molestiae
                  ratione perspiciatis sit?
                </p>
              </div>
            </section>

            <section class="card my-3">
              <img class="layout-image card-img-top img-fluid" src="https://dummyimage.com/16:9x400/6.png&text=+" alt="Photo Sample">
              <div class="card-body">
                <h4 class="layout-title card-title">Card Title</h4>
                <p class="layout-text card-text ">Magnam dolorem consectetur, soluta omnis quis eveniet dignissimos dolores mollitia sunt praesentium quo fugiat?
                  Eius ab in mollitia minus ad quisquam eum!</p>
              </div>
            </section>
          </div>
        </div>
      </div>
    </section>

  </article>

  <footer class="site-footer bg-reverse">

    <div class="layout-social container py-5 d-flex justify-content-center">
      <a class="text-reverse px-2" href="https://twitter.com/planetoftheweb">
        <i class="fab fa-twitter"></i>
      </a>
      <a class="text-reverse px-2" href="https://facebook.com/viewsource">
        <i class="fab fa-facebook"></i>
      </a>
      <a class="text-reverse px-2" href="https://linkedin.com/in/planetoftheweb">
        <i class="fab fa-linkedin"></i>
      </a>
      <a class="text-reverse px-2" href="https://github.com/planetoftheweb">
        <i class="fab fa-github"></i>
      </a>
      <a class="text-reverse px-2" href="https://plus.google.com/+RayVillalobos0">
        <i class="fab fa-google-plus"></i>
      </a>
      <a class="text-reverse px-2" href="https://dribbble.com/planetoftheweb">
        <i class="fab fa-dribbble"></i>
      </a>
      <a class="text-reverse px-2" href="https://www.flickr.com/photos/planetoftheweb/sets/72157602932636630/">
        <i class="fab fa-flickr"></i>
      </a>
      <a class="text-reverse px-2" href="https://www.youtube.com/user/planetoftheweb">
        <i class="fab fa-youtube"></i>
      </a>
    </div>

  </footer>

  <article id="site-modal" class="modal fade">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <img data-dismiss="modal" class="img-fluid" src="#" alt="Modal Photo">
      </div>
    </div>
  </article>

  <script src="js/lib/jquery.min.js"></script>
  <script src="js/lib/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>