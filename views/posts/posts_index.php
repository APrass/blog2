<?foreach($posts as $post):?>
    <div class="span8">
        <h1><a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><?=$post['post_subject']?></a></h1>
        <p><?=$post["post_text"]?></p>
        <div>
            <span class="badge badge-success">Posted <?=$post["post_created"]?></span>
            <div class="pull-right">
                <span class="label">üks</span> <span class="label">kaks</span> <span class="label">kolm</span> <span class="label">neli</span></div>
        </div>
        <hr>
    </div>
<?endforeach?>