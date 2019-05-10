<?php require_once('functions.php'); ?>
<?php require_once('data.php'); ?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
		<meta name="keywords" content="<?=$data['keywords']?>"/>
    <meta name="description" content="<?=$data['description']?>"/>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css"/>

        <link rel="shortcut icon" href="/ico.png" />
        
        <meta name="theme-color" content="#212630"/>
    	<meta property="og:title" content="<?=$data['title']?>" />
    	<meta property="og:site_name" content="Yoga-Center.com" />
    	<meta property="og:type" content="place" />
    	<meta property="og:url" content="//www.yoga-center.com/?article=post123434" />
    	<meta property="og:description" content="<?=$data['description']?>" />
    	<meta property="og:image" content="https://yoga.com/images/post-23321.jpg" />
        <title>
            <?=$data['title']?>
        </title>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="/images/logo.svg" height="40px" />Yoga Centers
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">
                                Home
                                <span class="sr-only">
                                    (current)
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/?about">
                                About us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/?contact">
                                Contact us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/?register">
                                Register
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/?login">
                                Login
                            </a>
                        </li>

                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                            Search
                        </button>
                    </form>
                </div>
            </div>
        </nav>

        <header style="background-image: url(<?=bgimage($data['thumbnail'])?>);">
            <div class="cover">
                <div class="cover-cell">
                    <div class="container container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="logo">
                                    <img src="/images/logo.svg"/>
                                </div>
                                <div class="h1">
                                    <?=$data['h1']?>
                                </div>
                                <div class="short-description">
                                    By
                                    <a href="">
                                        Max Sharun
                                    </a>Last updated    Tue 13 May 2019
                                </div>

                                <div class="actions text-center">

                                    <span class="share-us sliding">
                                        Share us
                                        <i class="fas fa-share-alt">
                                        </i>
                                        <span>
                                            <a href="">
                                                <i class="fab fa-facebook-f">
                                                </i>
                                            </a>
                                            <a href="">
                                                <i class="fab fa-instagram">
                                                </i>
                                            </a>
                                            <a href="">
                                                <i class="fab fa-vk">
                                                </i>
                                            </a>
                                        </span>
                                    </span>
                                    <span class="follow-us sliding">
                                        Follow us
                                        <i class="fas fa-users">
                                        </i>
                                        <span>
                                            <a href="">
                                                <i class="fab fa-facebook-f">
                                                </i>
                                            </a>
                                            <a href="">
                                                <i class="fab fa-instagram">
                                                </i>
                                            </a>
                                            <a href="">
                                                <i class="fab fa-vk">
                                                </i>
                                            </a>
                                            <a href="">
                                                <i class="fab fa-youtube">
                                                </i>
                                            </a>
                                        </span>
                                    </span>

                                </div>

                                <div class="read-more">
                                    <a href="#content">
                                        Read more...
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </header>

        <section class="content">
            <div class="container container-fluid">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12 content-page">

                        <article itemscope itemtype="http://schema.org/Article">
                            <a name="content">
                            </a>
                            <h1 itemprop="headline name">
                                <?=$data['h1']?>
                            </h1>

                            <div class="information">
                                <div>
                                    Date published:
                                    <span itemprop="datePublished" content="2019-05-13">
                                        2019-05-13
                                    </span>
                                </div>
                                <div class="author-info" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                                    <link itemprop="sameAs" href="<?=$data['author']['url']?>" />

                                    <img itemprop="image" src="<?=$data['author']['image']?>" alt="Alex Soltyk"/>

                                    <a href="<?=$data['author']['url']?>" target="_blank">
                                        <span itemprop="name">
                                            <?=$data['author']['name']?>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="page-text">
                                <?=$data['content']?>
                            </div>
                        </article>


                        <div class="comments">
                            <h3>
                                Comment it
                            </h3>
                            <form action="">
                                <div class="form-group">
                                    <textarea class="form-control" name="comment">
                                    </textarea>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" checked="checked">
                                    <label class="form-check-label" for="exampleCheck1">
                                        Publish on Facebook
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    Comment
                                </button>
                            </form>

                            <div class="comment-list">
                                <div class="comment">
                                    <div class="title">
                                        <span class="author">
                                            Mathew
                                        </span>
                                        <span class="datetime">
                                            16-05-2019 12:48
                                        </span>
                                    </div>
                                    <div class="details">
                                        I want to be excellent yoga-boy! It`s so wonderfull, really!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar col-lg-3 col-md-3 col-sm-12">
                        <div class="widget widget-articles">
                            <div class="widget-title">
                                Other articles
                            </div>
                            <div class="widget-body">
                            
                            <?php  for ( $i = 0; $i < 3; $i++ ) { ?>
                                <div class="row article">
                                    <div class="col-4 img">
                                        <img src="<?=$authors[$i]->download_url?>" class="img-fluid"/>
                                    </div>
                                    <div class="col-8 short-info">
                                        <div class="title">
                                            <a href="">
                                                <?=$authors[$i]->author?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
              				<?php } ?>
                          
                            </div>
                        </div>


                        <div class="widget widget-categories">
                            <div class="widget-title">
                                Rubrics
                            </div>
                            <div class="widget-body">
                                <ul>
                                    <li>
                                        <a href="">
                                            Yoga on the work
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Yoga events
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Yoga lessons
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Yoga video
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Yoga photo
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                     

                    </div>
                </div>
            </div>

        </section>

        <footer style="background-image: url(<?=bgimage($data['thumbnail'])?>);">
            <div class="cover">
                <div class="cover-cell">
                    <div class="container container-fluid">
                        <div class="row">
                            <div class="col-md-6 offset-md-3 follow-us">
                                <div class="subscribe-form">
                                    <div class="title h2">
                                        Subscribe us
                                    </div>
                                    <div class="offer">
                                        And get one lesson in one of few our schools for free!
                                    </div>
                                    <div class="form">
                                        <form action="">
                                            <div class="input-group mb-3">
                                                <input type="email" class="form-control" placeholder="Write your email" aria-label="Recipient's username" aria-describedby="button-addon2" required="required"/>
                                                <div class="input-group-append">
                                                    <button class="btn btn-red" type="submit" id="button-addon2">
                                                        OK
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="contacts">
                                    <div class="organization" itemscope="" itemtype="http://schema.org/Organization">
                                        <div class="h3" itemprop="name">
                                            International Yoga Centers
                                        </div>
                                        <div class="adress" itemprop="email">
                                            info@yoga-center.com
                                        </div>
                                        <div class="phone">
                                            <h4>
                                                Hotline! Call us now!
                                            </h4>
                                            <p>
                                                <a href="tel:+18007775551" itemprop="telephone">
                                                    +18007775551
                                                </a>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
    </body>
</html>