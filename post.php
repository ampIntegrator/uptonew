<html lang="en">

<head>
    <title>Document</title>
    <?php include 'assets/include/head.php'; ?>
</head>

<body class="blogPost bg-black">

    <?php include 'assets/include/header.php'; ?>

    <div class="container py-5">
        <div class="row g-4">
            <aside class="col-md-3 col-lg-4">
                <div class="position-sticky" style="top: 80px;">
                    <div class="box">
                        <span class="text-primary fw-600 fs5 mb-2 d-block">Sommaire de l'article</span>
                        <div class="summaryBox">

                        </div>
                    </div>
                </div>
            </aside>
            <article class="col-md-9 col-lg-8">
                <h1 class="fs-2 mb-1 text-white">Titre de l'article dans une balise h1 en haut de page</h1>
                <small class="metadata d-block mb-3">Posté le <span>31 mai 2025</span></small>
                <div class="badgeBox h5 mb-4">
                    <span class="badge rounded-pill bg-primary">Danger</span>
                    <span class="badge rounded-pill bg-danger">Technology</span>
                </div>
                <img src="assets/img/adobe007.avif" class="w-100 mb-4 roundedImg" alt="">
                <div class="box postContent">
                    <h2 class="">Sample blog post</h2>
                    <p>
                        This blog post shows a few different types of content that’s supported and styled with
                        Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as
                        expected.
                    </p>
                    <p>
                        This is some additional paragraph placeholder content. It has been written to fill the
                        available space and show how a longer snippet of text affects the surrounding content. We'll
                        repeat it often to keep the demonstration flowing, so be on the lookout for this exact same
                        string of text.
                    </p>
                    <h2>Blockquotes</h2>
                    <p>
                        This is an example blockquote in action:
                    </p>
                    <blockquote class="blockquote">
                        <p>
                            Quoted text goes here.
                        </p>
                    </blockquote>
                    <p>
                        This is some additional paragraph placeholder content. It has been written to fill the
                        available space and show how a longer snippet of text affects the surrounding content. We'll
                        repeat it often to keep the demonstration flowing, so be on the lookout for this exact same
                        string of text.
                    </p>
                    <h2>Nanterre ca pue sa mère</h2>
                    <h3>Example lists</h3>
                    <p>
                        This is some additional paragraph placeholder content. It's a slightly shorter version of
                        the other highly repetitive body text used throughout. This is an example unordered list:
                    </p>
                    <img class="w-100 mb-3" src="assets/img/adobe005.avif" alt="">
                    <ul>
                        <li>First list item</li>
                        <li>Second list item with a longer description</li>
                        <li>Third list item to close it out</li>
                    </ul>
                    <p>
                        And this is an ordered list:
                    </p>
                    <ol>
                        <li>First list item</li>
                        <li>Second list item with a longer description</li>
                        <li>Third list item to close it out</li>
                    </ol>
                    <p>
                        And this is a definition list:
                    </p>
                    <dl>
                        <dt>
                            HyperText Markup Language (HTML)
                        </dt>
                        <dd>
                            The language used to describe and define the content of a Web page
                        </dd>
                        <dt>
                            Cascading Style Sheets (CSS)
                        </dt>
                        <dd>
                            Used to describe the appearance of Web content
                        </dd>
                        <dt>
                            JavaScript (JS)
                        </dt>
                        <dd>
                            The programming language used to build advanced Web sites and applications
                        </dd>
                    </dl>
                    <h2>Inline HTML elements</h2>
                    <p>
                        HTML defines a long list of available inline tags, a complete list of which can be found on
                        the
                        <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element">Mozilla Developer
                            Network</a>
                        .
                    </p>
                    <ul>
                        <li>
                            <strong>To bold text</strong>
                            , use
                            <code class="language-plaintext highlighter-rouge">
                                &lt;strong&gt;
                            </code>
                            .
                        </li>
                        <li>
                            <em>To italicize text</em>
                            , use
                            <code class="language-plaintext highlighter-rouge">
                                &lt;em&gt;
                            </code>
                            .
                        </li>
                        <li>
                            Abbreviations, like
                            <abbr title="HyperText Markup Language">
                                HTML
                            </abbr>
                            should use
                            <code class="language-plaintext highlighter-rouge">
                                &lt;abbr&gt;
                            </code>
                            , with an optional
                            <code class="language-plaintext highlighter-rouge">
                                title
                            </code>
                            attribute for the full phrase.
                        </li>
                        <li>
                            Citations, like
                            <cite>
                                — Mark Otto
                            </cite>
                            , should use
                            <code class="language-plaintext highlighter-rouge">
                                &lt;cite&gt;
                            </code>
                            .
                        </li>
                        <li>
                            <del>
                                Deleted
                            </del>
                            text should use
                            <code class="language-plaintext highlighter-rouge">
                                &lt;del&gt;
                            </code>
                            and
                            <ins>
                                inserted
                            </ins>
                            text should use
                            <code class="language-plaintext highlighter-rouge">
                                &lt;ins&gt;
                            </code>
                            .
                        </li>
                        <li>
                            Superscript
                            <sup>
                                text
                            </sup>
                            uses
                            <code class="language-plaintext highlighter-rouge">
                                &lt;sup&gt;
                            </code>
                            and subscript
                            <sub>
                                text
                            </sub>
                            uses
                            <code class="language-plaintext highlighter-rouge">
                                &lt;sub&gt;
                            </code>
                            .
                        </li>
                    </ul>
                    <p>
                        Most of these elements are styled by browsers with few modifications on our part.
                    </p>
                    <h2>Heading</h2>
                    <p>
                        This is some additional paragraph placeholder content. It has been written to fill the
                        available space and show how a longer snippet of text affects the surrounding content. We'll
                        repeat it often to keep the demonstration flowing, so be on the lookout for this exact same
                        string of text.
                    </p>
                    <h3>Sub-heading</h3>
                    <p>
                        This is some additional paragraph placeholder content. It has been written to fill the
                        available space and show how a longer snippet of text affects the surrounding content. We'll
                        repeat it often to keep the demonstration flowing, so be on the lookout for this exact same
                        string of text.
                    </p>
                    <pre>
                        <code>
                            Example code block
                        </code>
                    </pre>
                    <p>
                        This is some additional paragraph placeholder content. It's a slightly shorter version of
                        the other highly repetitive body text used throughout.
                    </p>
                    <h4>Sous titre au format enfin avec une balise h4</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis labore perspiciatis
                        dolore. Autem, sapiente. Dicta ut, explicabo laudantium ipsam aliquam ipsa ex. Quas, illo
                        consequuntur veritatis ut qui ipsam voluptas aliquid corporis quae placeat ab in cum odit ex
                        natus?</p>



                </div>

            </article>
            <div class="col-12">
                <div class="box">
                    <div class="row g-4">
                        <div class="col-12">
                            <h3>Ces articles pourraient vous plaire... </h3>
                        </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="blogPost oneCol colorWarning">
                                    <div class="row g-0 overflow-hidden position-relative">
                                        <a href="post.php" class="position-absolute top-0 w-100 h-100 start-O z-1"></a>
                                        <div class="col-8 p-3"> 
                                            <div class="flexCSB">
                                                <strong class="d-inline-block fz14">World</strong>
                                                <small class="">Nov 12 2021</small>
                                            </div>
                                            <h3 class="postBlogTitle textToAdjust"><span>Featured post title clickbait Lorem ipsum dolor sit, amet consectetur adipisicing elit.</span></h3>
                                            <p class="card-text mb-3">This is a wider card with supporting text below as
                                                a natural lead-in to additional content to go to the pool with the horse and the glucks.
                                            </p> 
                                            <span class="voirPlus textToAdjust flexCS">Voir plus <i class="bi bi-arrow-right-short"></i></span>
                                        </div>
                                        <div class="col-4 h-100">
                                            <div class="bgi" style="background-image: url(assets/img/city.jpg);"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="blogPost oneCol colorWarning">
                                    <div class="row g-0 overflow-hidden position-relative">
                                        <a href="post.php" class="position-absolute top-0 w-100 h-100 start-O z-1"></a>
                                        <div class="col-8 p-3"> 
                                            <div class="flexCSB">
                                                <strong class="d-inline-block fz14">World</strong>
                                                <small class="">Nov 12 2021</small>
                                            </div>
                                            <h3 class="postBlogTitle textToAdjust"><span>Featured post title clickbait Lorem ipsum dolor sit, amet consectetur adipisicing elit.</span></h3>
                                            <p class="card-text mb-3">This is a wider card with supporting text below as
                                                a natural lead-in to additional content to go to the pool with the horse and the glucks.
                                            </p> 
                                            <span class="voirPlus textToAdjust flexCS">Voir plus <i class="bi bi-arrow-right-short"></i></span>
                                        </div>
                                        <div class="col-4 h-100">
                                            <div class="bgi" style="background-image: url(assets/img/Photo0008.avif);"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="blogPost oneCol colorWarning">
                                    <div class="row g-0 overflow-hidden position-relative">
                                        <a href="post.php" class="position-absolute top-0 w-100 h-100 start-O z-1"></a>
                                        <div class="col-8 p-3"> 
                                            <div class="flexCSB">
                                                <strong class="d-inline-block fz14">Technology</strong>
                                                <small class="">31 Octobre 2021</small>
                                            </div>
                                            <h3 class="postBlogTitle textToAdjust"><span>Maganda beautiful jardin Haus</span></h3>
                                            <p class="card-text mb-3">This is not a wider card with not supporting text below as
                                                a natural lead-in to additional not content.
                                            </p> 
                                            <span class="voirPlus textToAdjust flexCS">Voir plus <i class="bi bi-arrow-right-short"></i></span>
                                        </div>
                                        <div class="col-4 h-100">
                                            <div class="bgi" style="background-image: url(assets/img/Photo0002.avif);"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="blogPost oneCol colorWarning">
                                    <div class="row g-0 overflow-hidden position-relative">
                                        <a href="post.php" class="position-absolute top-0 w-100 h-100 start-O z-1"></a>
                                        <div class="col-8 p-3"> 
                                            <div class="flexCSB">
                                                <strong class="d-inline-block fz14">Technology</strong>
                                                <small class="">31 Octobre 2021</small>
                                            </div>
                                            <h3 class="postBlogTitle textToAdjust"><span>Maganda beautiful jardin Haus</span></h3>
                                            <p class="card-text mb-3">This is not a wider card with not supporting text below as
                                                a natural lead-in to additional not content.
                                            </p> 
                                            <span class="voirPlus textToAdjust flexCS">Voir plus <i class="bi bi-arrow-right-short"></i></span>
                                        </div>
                                        <div class="col-4 h-100">
                                            <div class="bgi" style="background-image: url(assets/img/Photo0002.avif);"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</body>
<script src="assets/js/custom.js"></script>



</html>


