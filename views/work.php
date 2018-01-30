<?php
require('../views/header.php');
?>


<section class="pre-skill">
    <div class="row no-gutters">

        <div class="col-lg-12">

            <h2 class="pre-skill-title">
                Skills.Passions.Ideas.
            </h2>

            <p class="pre-skill-subtitle">
                Design/photography
            </p>
            <div class="pre-skill-icon">
                <div class="col-lg-6">
                    <i class="fa fa-square" aria-hidden="true"></i>
                    <i class="fa fa-square" aria-hidden="true"></i>
                </div>
                <div class="col-lg-6 pre-skill-icon-mt">
                    <i class="fa fa-square" aria-hidden="true"></i>
                    <i class="fa fa-square" aria-hidden="true"></i>
                </div>
            </div>
        </div>
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

<section class="sk-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <img src="../images/sk_article1.jpg" alt="article 1" class="sk-wrapper-img">
                <img src="../images/sk_article2.jpg" alt="article 2" class="sk-wrapper-img">
                <img src="../images/sk_article3.jpg" alt="article 3" class="sk-wrapper-img">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <img src="../images/sk_article4.jpg" alt="article 4" class="sk-wrapper-img">
                <img src="../images/sk_article5.jpg" alt="article 5" class="sk-wrapper-img">
                <img src="../images/sk_article6.jpg" alt="article 6" class="sk-wrapper-img">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <img src="../images/sk_article7.jpg" alt="article 7" class="sk-wrapper-img">
                <img src="../images/sk_article8.jpg" alt="article 8" class="sk-wrapper-img">
                <img src="../images/sk_article9.jpg" alt="article 9" class="sk-wrapper-img">
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