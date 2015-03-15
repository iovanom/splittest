<h1>List of Active Projects</h1>
<ul class="list-unstyled">
    <?php foreach($projects as $project): ?>
    <li><a href="/home/project/<?= $project->id ?>"><?= $project->name ?></a></li>
    <?php endforeach; ?>
</ul>

