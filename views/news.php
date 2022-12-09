<script type="text/javascript">
    document.title = 'Tin tức'
</script>
<h1>Tin Tức</h1>
<div class="articles">
    <?php foreach($params['news'] as $newsModel) {?>
    <div class="row">
        <div class="col-lg-4 col-6 article-img">
            <a href="/news/content?id=<?=$newsModel->getId()?>">
                <img src="/images/news/<?=$newsModel->getImage()?>" alt="">
            </a>
        </div>
        <div class="col-lg-8 col-6 article-info">
            <div class="article-title">
                <a href="/news/content?id=<?=$newsModel->getId()?>"><?=$newsModel->getTitle()?></a> 
            </div>
            <div class="article-date"><?=$newsModel->getDate()?></div>
            <div class="article-description"><?=$newsModel->getDescription()?></div>
        </div>
    </div>
    <?php } ?>
    
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-end" id="news-pagination">
            <li class="page-item <?=$params['page']==1?'page-disabled':''?>">
                <a class="page-link" href="/news?page=<?=$params['page']-1?>"><i class="fa-solid fa-angle-left" style="font-size: 20px;"></i></a>
            </li>

            <?php 
                if ($params['maxPage'] <= 5) {
                    for ($i = 1; $i <= $params['maxPage']; $i++) {
                    ?>
                        <li class="page-item <?=$params['page']==$i?'page-active':''?>"><a class="page-link" href="/news?page=<?=$i?>"><?=$i?></a></li>
                    <?php }
                }
                else {
                    if ($params['page'] == 1) {
                    ?>
                        <li class="page-item page-active"><a class="page-link" href="/news?page=1">1</a></li>
                        <li class="page-item"><a class="page-link" href="/news?page=2">2</a></li>
                        <li class="page-item"><a class="page-link" href="/news?page=3">3</a></li>
                        <li class="page-item no-pointer"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="/news?page=<?=$params['maxPage']-1?>"><?=$params['maxPage']-1?></a></li>
                        <li class="page-item"><a class="page-link" href="/news?page=<?=$params['maxPage']?>"><?=$params['maxPage']?></a></li>
                    <?php
                    } 
                    else if ($params['page'] == $params['maxPage']) {
                    ?>
                        <li class="page-item"><a class="page-link" href="/news?page=1">1</a></li>
                        <li class="page-item"><a class="page-link" href="/news?page=2">2</a></li>
                        <li class="page-item no-pointer"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="/news?page=<?=$params['maxPage']-2?>"><?=$params['maxPage']-2?></a></li>
                        <li class="page-item"><a class="page-link" href="/news?page=<?=$params['maxPage']-1?>"><?=$params['maxPage']-1?></a></li>
                        <li class="page-item page-active"><a class="page-link" href="/news?page=<?=$params['maxPage']?>"><?=$params['maxPage']?></a></li>
                    <?php
                    } else {
                        $i = 1;
                        for (; $i < min(3, $params['page']-1); $i++) {
                            ?>
                            <li class="page-item"><a class="page-link" href="/news?page=<?=$i?>"><?=$i?></a></li>
                            <?php
                        }

                        if ($params['page']-1 >3) {
                            ?>
                            <li class="page-item no-pointer"><a class="page-link" href="#">...</a></li>
                            <?php
                        }
                    ?>
                        <li class="page-item"><a class="page-link" href="/news?page=<?=$params['page']-1?>"><?=$params['page']-1?></a></li>
                        <li class="page-item page-active"><a class="page-link" href="/news?page=<?=$params['page']?>"><?=$params['page']?></a></li>
                        <li class="page-item"><a class="page-link" href="/news?page=<?=$params['page']+1?>"><?=$params['page']+1?></a></li>
                    <?php
                        if ($params['page']+1 < $params['maxPage']-2) {
                            ?>
                            <li class="page-item no-pointer"><a class="page-link" href="#">...</a></li>
                            <?php
                        }
                        $i = max($params['maxPage']-1, $params['page']+2);
                        for (; $i <= $params['maxPage']; $i++) {
                            ?>
                            <li class="page-item"><a class="page-link" href="/news?page=<?=$i?>"><?=$i?></a></li>
                            <?php
                        }
                    }
                }
             ?>

            <li class="page-item <?=$params['page']>=$params['maxPage']?'page-disabled':''?>">
                <a class="page-link" href="/news?page=<?=$params['page']+1?>"><i class="fa-solid fa-angle-right" style="font-size: 20px;"></i></a>
            </li>
        </ul>
    </nav>


</div>