<?php
require('../views/header.php');
?>



<section class="pre-think-block">
    <div class="container">

        <h2 class="pre-think-title">
            Think.Design.Develop.
        </h2>
        <p class="pre-think-sentence">
            We are a new design studio based in USA. We have over 20 <br><br>years
            of
            combined experience, and know a thing or two about <br><br>designing websites and mobile apps.
        </p>
    </div>
</section>


<nav class="setting-nav">
    <a href="#"  class=" nav-toggle-btn">
        <i class="fa fa-cog" id="nav-set-icon"></i>
    </a>
    <ul>
        <li><a href="../index.php">Style 1</a></li>
        <li><a href="../views/work.php">Style 2</a></li>
        <li><a href="../views/think.php">Style 3</a></li>
        <li><a href="../views/think.php">Style 4</a></li>
    </ul>
</nav>

<section class="th-wrapper">
    <div class="row no-gutters">

        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="content">
                <img src="../images/article1.png" alt="article" class="th-wrapper-img">
                <div class="overlay">
                    <div class="text">Hello World</div>
                    <p class="text-description">Lorem ipsum dolor</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="content">
                <img src="../images/article2.png" alt="article" class="th-wrapper-img">
                <div class="overlay">
                    <div class="text">Hello World</div>
                    <p class="text-description">Lorem ipsum dolor</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="content">
                <img src="../images/article3.png" alt="article" class="th-wrapper-img">
                <div class="overlay">
                    <div class="text">Hello World</div>
                    <p class="text-description">Lorem ipsum dolor</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="content">
                <img src="../images/article4.png" alt="article" class="th-wrapper-img">
                <div class="overlay">
                    <div class="text">Hello World</div>
                    <p class="text-description">Lorem ipsum dolor</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="content">
                <img src="../images/article5.png" alt="article" class="th-wrapper-img">
                <div class="overlay">
                    <div class="text">Hello World</div>
                    <p class="text-description">Lorem ipsum dolor</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="content">
                <img src="../images/article6.png" alt="article" class="th-wrapper-img">
                <div class="overlay">
                    <div class="text">Hello World</div>
                    <p class="text-description">Lorem ipsum dolor</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="content">
                <img src="../images/article7.png" alt="article" class="th-wrapper-img">
                <div class="overlay">
                    <div class="text">Hello World</div>
                    <p class="text-description">Lorem ipsum dolor</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="content">
                <img src="../images/article11.png" alt="article" class="th-wrapper-img">
                <div class="overlay">
                    <div class="text">Hello World</div>
                    <p class="text-description">Lorem ipsum dolor</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="content">
                <img src="../images/article3.png" alt="article" class="th-wrapper-img">
                <div class="overlay">
                    <div class="text">Hello World</div>
                    <p class="text-description">Lorem ipsum dolor</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="content">
                <img src="../images/article13.png" alt="article" class="th-wrapper-img">
                <div class="overlay">
                    <div class="text">Hello World</div>
                    <p class="text-description">Lorem ipsum dolor</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="content">
                <img src="../images/article1.png" alt="article" class="th-wrapper-img">
                <div class="overlay">
                    <div class="text">Hello World</div>
                    <p class="text-description">Lorem ipsum dolor</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="content">
                <img src="../images/article2.png" alt="article" class="th-wrapper-img">
                <div class="overlay">
                    <div class="text">Hello World</div>
                    <p class="text-description">Lorem ipsum dolor</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>


    (function() {

        var bodyEl = $('body'),
            navToggleBtn = bodyEl.find('.nav-toggle-btn');

        navToggleBtn.on('click', function(e) {
            bodyEl.toggleClass('active-nav');
            e.preventDefault();
        });


    })();


</script>

</body>
</html>