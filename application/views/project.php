<h1>Project - <?= $project->name ?></h1>
<table class="table">
    <tr>
        <th>#</th><th>Pages URL</th><th>Visitors</th><th>Active Visitors</th><th>Conversion</th>
    </tr>
    <?php
        $count = 1;
        foreach($pages as $page):
            $conversion = 0;
            if($page->visitors != 0)
            {
                $conversion = $page->active_visitors / $page->visitors * 100;
            }
    ?>
    <tr>
        <td><?= $count ?></td><td><?= $page->url ?></td><td><?= $page->visitors ?></td>
        <td><?= $page->active_visitors ?></td><td><?= $conversion ?> %</td>
    </tr>
    <?php
        $count++;
        endforeach;
    ?>
</table>

