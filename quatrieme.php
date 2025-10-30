<html lang="en">

<head>
    <title>Document</title>
    <?php include 'assets/include/head.php'; ?>
</head>

<body class="bg-black">

    <?php include 'assets/include/header.php'; ?>
    <div id="topPage" class="flexCC mt-5">
        <h1 class="text-center">Ceci est le titre de la page <br> pour les accordions</h1>
    </div>
<section id="section01" class="container pb-5 mt-5">
    <div class="row g-4">
        <div class="col-lg-6">
            <div class="box h-100 degradeStrong">
                <div class="accordion colorWarning" id="accordionExample001">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne001" aria-expanded="true"
                                aria-controls="collapseOne001">
                                <span>Accordion Item #1</span>
                                <i class="icon icon-chevron-down"></i>
                            </button>
                        </h2>
                        <div id="collapseOne001" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample001">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is shown by default,
                                until the collapse plugin adds the appropriate classes that we use to style each element.
                                These classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default
                                variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo001" aria-expanded="false"
                                aria-controls="collapseTwo001">
                                <span>Accordion Item #2</span>
                                <i class="icon icon-chevron-down"></i>
                            </button>
                        </h2>
                        <div id="collapseTwo001" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample001">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                until the collapse plugin adds the appropriate classes that we use to style each
                                element. These classes control the overall appearance, as well as the showing and hiding
                                via CSS transitions. You can modify any of this with custom CSS or overriding our
                                default variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree001" aria-expanded="false"
                                aria-controls="collapseThree001">
                                <span>Accordion Item #3</span>
                                <i class="icon icon-chevron-down"></i>
                            </button>
                        </h2>
                        <div id="collapseThree001" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample001">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                until the collapse plugin adds the appropriate classes that we use to style each element.
                                These classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default
                                variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="box h-100 degradeStrong">
                <div class="accordion colorDanger" id="accordionExample002">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne002" aria-expanded="true"
                                aria-controls="collapseOne002">
                                <span>Accordion Item #1</span>
                                <i class="icon icon-chevron-down"></i>
                            </button>
                        </h2>
                        <div id="collapseOne002" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample002">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is shown by default,
                                until the collapse plugin adds the appropriate classes that we use to style each element.
                                These classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default
                                variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo002" aria-expanded="false"
                                aria-controls="collapseTwo002">
                                <span>Accordion Item #2</span>
                                <i class="icon icon-chevron-down"></i>
                            </button>
                        </h2>
                        <div id="collapseTwo002" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample002">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                until the collapse plugin adds the appropriate classes that we use to style each
                                element. These classes control the overall appearance, as well as the showing and hiding
                                via CSS transitions. You can modify any of this with custom CSS or overriding our
                                default variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree002" aria-expanded="false"
                                aria-controls="collapseThree002">
                                <span>Accordion Item #3</span>
                                <i class="icon icon-chevron-down"></i>
                            </button>
                        </h2>
                        <div id="collapseThree002" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample002">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                until the collapse plugin adds the appropriate classes that we use to style each element.
                                These classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default
                                variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="box h-100 degradeStrong">
                <div class="accordion colorPrimary" id="accordionExample003">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne003" aria-expanded="true"
                                aria-controls="collapseOne003">
                                <span>Accordion Item #1</span>
                                <i class="icon icon-chevron-down"></i>
                            </button>
                        </h2>
                        <div id="collapseOne003" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample003">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is shown by default,
                                until the collapse plugin adds the appropriate classes that we use to style each element.
                                These classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default
                                variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo003" aria-expanded="false"
                                aria-controls="collapseTwo003">
                                <span>Accordion Item #2</span>
                                <i class="icon icon-chevron-down"></i>
                            </button>
                        </h2>
                        <div id="collapseTwo003" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample003">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                until the collapse plugin adds the appropriate classes that we use to style each
                                element. These classes control the overall appearance, as well as the showing and hiding
                                via CSS transitions. You can modify any of this with custom CSS or overriding our
                                default variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree003" aria-expanded="false"
                                aria-controls="collapseThree003">
                                <span>Accordion Item #3</span>
                                <i class="icon icon-chevron-down"></i>
                            </button>
                        </h2>
                        <div id="collapseThree003" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample003">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                until the collapse plugin adds the appropriate classes that we use to style each element.
                                These classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default
                                variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="box h-100 degradeStrong">
                <div class="accordion colorTeal" id="accordionExample004">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne004" aria-expanded="true"
                                aria-controls="collapseOne004">
                                <span>Accordion Item #1</span>
                                <i class="icon icon-chevron-down"></i>
                            </button>
                        </h2>
                        <div id="collapseOne004" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample004">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is shown by default,
                                until the collapse plugin adds the appropriate classes that we use to style each element.
                                These classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default
                                variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo004" aria-expanded="false"
                                aria-controls="collapseTwo004">
                                <span>Accordion Item #2</span>
                                <i class="icon icon-chevron-down"></i>
                            </button>
                        </h2>
                        <div id="collapseTwo004" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample004">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                until the collapse plugin adds the appropriate classes that we use to style each
                                element. These classes control the overall appearance, as well as the showing and hiding
                                via CSS transitions. You can modify any of this with custom CSS or overriding our
                                default variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree004" aria-expanded="false"
                                aria-controls="collapseThree004">
                                <span>Accordion Item #3</span>
                                <i class="icon icon-chevron-down"></i>
                            </button>
                        </h2>
                        <div id="collapseThree004" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample004">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                until the collapse plugin adds the appropriate classes that we use to style each element.
                                These classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default
                                variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




</body>
<script src="assets/js/custom.js"></script>


</html>