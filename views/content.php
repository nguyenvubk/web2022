<img src="/images/news/<?=$params['news']->getImage()?>" width="100%" alt="">
<div class="article-content mx-auto">
    <div class="content-title">
        <?=$params['news']->getTitle()?>
    </div>
    <div class="content-date"><i class="fa fa-tag"></i><?=$params['news']->getDate()?></div>
    <div class="content">
        <?=$params['news']->getContent()?>
    </div>

    <div class="d-flex justify-content-between content-action">
        <a href="/news/content?id=<?=$params['prev']?>" class="prev-article <?=($params['prev']!='')?'':'hidden'?>">BÀI TRƯỚC</a>
        <a href="/news/content?id=<?=$params['next']?>" class="next-article <?=($params['next']!='')?'':'hidden'?>">BÀI KẾ TIẾP</a>
    </div>


</div>