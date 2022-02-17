<?php 
$data = '10%'
?>
<div class="line">
    <div class="line-main"></div>
    <div class="line-progress"></div>
</div>

<style>
    .line-progress {
<?php        echo "width: $data;"; ?>
    }
</style>