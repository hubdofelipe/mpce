<?php include 'header.php' ?>

<div class="page-wrapper content-wrapper">
    <section class="single">
        <article class="single__box">
            <div class="single__header">
                <div class="single__category">Notícias</div>
                <div class="single__title">Lorem ipsum dolor sit amet consectetur.</div>
                <div class="single__share-row">
                    <time class="share-row__date" datetime="2020-09-22">Postado em 22/09/2020</time>
                    <?php include 'template-parts/share.php' ?>
                </div>
            </div>
            <div class="single-content">
                <figure>
                    <img src="http://via.placeholder.com/1920x1080" alt="">
                    <figcaption>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non, atque.</figcaption>
                </figure>
                <p>Lorem ipsum dolor <span class="highlighted-text">sit amet consectetur adipisicing elit. Commodi quod tempora fuga dolorem nesciunt quia praesentium, deleniti</span> eaque doloribus asperiores.</p>
                <blockquote>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis illum consequatur quae. At quos architecto explicabo facere distinctio vel. Voluptatum sed commodi et quae impedit? Eum aliquam et a velit, libero alias voluptatum eligendi cum incidunt, iusto quibusdam nobis, inventore expedita eius similique dolor ipsa accusamus quis eveniet! Incidunt exercitationem temporibus, veritatis voluptates maxime illo repellendus officia ratione dolorum quas?
                </blockquote>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga repudiandae culpa ipsa aut quae odit vero unde, ratione laborum doloribus rerum corrupti excepturi nesciunt nostrum exercitationem dolorum possimus ipsam distinctio repellendus consequatur perspiciatis laudantium sunt. Iste ad sed, aut voluptatibus, recusandae aliquid, atque provident odit eveniet minima delectus modi assumenda?</p>
                <p>Lorem ipsum dolor <span class="highlighted-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, sed. Nemo rem velit, culpa repudiandae, repellat magni recusandae cupiditate assumenda voluptates asperiores architecto nihil ad nam minima eos inventore quibusdam maxime fuga aliquam modi tempore? Facilis laborum magni at enim quidem asperiores odio praesentium, earum, ea cum assumenda labore quae aliquam eos quibusdam nihil repellendus dolorem recusandae ipsum ducimus doloremque consequuntur, esse nisi rerum! Dolor eaque corrupti alias eligendi reiciendis. </span> sit amet consectetur adipisicing elit. Aspernatur incidunt explicabo quasi veniam animi quia provident error dolores illo delectus.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis omnis ducimus corporis nesciunt, ab placeat delectus mollitia vitae distinctio consequuntur rem. Iste iure accusantium maiores illum porro accusamus eius quam a error at hic, obcaecati quia doloremque dolorem ducimus totam minus expedita magni. Alias pariatur, quibusdam qui nemo quis consectetur quam, laudantium obcaecati at recusandae voluptatem corporis, reiciendis vero officiis.</p>
                <?php include 'template-parts/gallery.php'?>
            </div>
        </article>
    </section>
    <?php include 'template-parts/single/last-news.php' ?>
</div>

<script>
    let highlights = document.getElementsByClassName('highlighted-text');
    $(document).on('scroll', function() {
        if ($(this).scrollTop() >= $('.highlighted-text').position().top -200) {
            for(let i = 0; i < highlights.length; i++){
                highlights[i].classList.add('active');
            }
        }
    })
</script>

<?php include 'footer.php' ?>
