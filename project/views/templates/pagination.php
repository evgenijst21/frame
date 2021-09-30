<div class="pager--wrapper pt--50">
    <ul class="pager nav ff--primary">
        <? for($i = 1; $i <= $page; $i++){ ?>
        <li><a href="/<?= $i?>/"><?= $i?></a></li>
        <? } ?>
    </ul>
</div>