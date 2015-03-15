<h1>Scripts for <?= $project->name ?></h1>

<div class="panel panel-default">
  <div class="panel-heading">Main PHP script for index.php in base directory of your site</div>
  <div class="panel-body">
      <?php
echo highlight_string('<?php define(FILE_FLAG, "flag");
    $flag;
    if(file_exists(FILE_FLAG))
    {
        $flag = file_get_contents(FILE_FLAG);
        $file = fopen(FILE_FLAG, "w");
        if($flag == 1)
            fwrite($file, 2);
        else
            fwrite($file, 1);
        fclose($file);
    }else{
        $file = fopen(FILE_FLAG, "w") or die("Change the permission for root directory!");
        fwrite($file, 2);
        fclose($file);
        $flag = 1;
    }
    
    if($flag == 1)
    {
        header("Location:' . $pages[0]->url . '");
        
    }elseif($flag == 2){
        header("Location:' . $pages[1]->url . '");
        
    }else{
        echo "ERROR";
    }
    ?>
    ', TRUE);
?>
  </div>
</div>
<?php $count = 1; ?>
<?php foreach($pages as $page): ?>
<div class="panel panel-default">
    <div class="panel-heading">JavaScript code for page nr. <?= $count ?><br>URL: <?= $page->url ?></div>
  <div class="panel-body">
    <?php
        echo highlight_string(
            '<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <script>
            var page = '. $page->id .';
            $( document ).ready(function() {
                $.ajax({
                    method: "GET",
                    url: "http://splittest.lan/stats/visitors/" + page
                });
            });
            $("#split").submit(function() {
                $.ajax({
                    method: "GET",
                    url: "http://splittest.lan/stats/activeVisitors/" + page
                });
                alert("Form has send!");
            });
            </script>'
                , TRUE);
    ?>
  </div>
</div>
<?php $count++; ?>
<?php endforeach; ?>
<a class="btn btn-success" href="/home/project/<?= $project->id ?>">Done</a>