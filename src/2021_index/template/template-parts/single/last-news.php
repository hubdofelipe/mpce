<?php
    $news = [
        [
            "photo" => "https://www.sesc-ce.com.br/wp-content/uploads/2018/06/foto1.jpg",
            "title" => "Lorem ipsum dolor sit amet consectetur.",
            "date" => "22/09/2020"
        ],
        [
            "photo" => "https://1.bp.blogspot.com/-fxy75XfK234/XZy5HT3O9WI/AAAAAAAAwv8/Ax8Hu8N7ut8bCZQLCZQytybtAJFPCotogCLcBGAsYHQ/s1600/dp.jpg",
            "title" => "Lorem ipsum dolor sit amet consectetur.",
            "date" => "22/09/2020"
        ],
        [
            "photo" => "http://via.placeholder.com/600x400",
            "title" => "Lorem ipsum dolor sit amet consectetur.",
            "date" => "22/09/2020"
        ],
    ]
?>

<section class="last-news-section">
    <div class="container">
        <div class="news-section__title">Últimas Notícias</div>
        <div class="news-section__news-listing">
            <?php foreach($news as $newsitem): ?>
                <a href="#" class="news-listing__news-item">
                    <div class="news-item__photo">
                        <img src="<?php echo $newsitem['photo']?>" alt="">
                    </div>
                    <div class="news-item__overlay">
                        <div class="news-item__news-title">
                            <?php echo $newsitem['title']?>
                        </div>
                        <div class="news-item__news-date">
                            Postado em <?php echo $newsitem['date']?>
                        </div>
                    </div>
                </a>
            <?php endforeach ?>
        </div>
    </div>
</section>
