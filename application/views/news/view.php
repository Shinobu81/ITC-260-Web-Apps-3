<?php
//application/views/news/view.php
?>
<div class="container">
    <?php
    $this->load->view($this->config->item('theme') . 'header');
    ?>
</div>
<?php
echo '<h2>'.$news_item['title'].'</h2>';
echo $news_item['text'];
?>
<div class="conatiner">
    <?php
    $this->load->view($this->config->item('theme') . 'footer');
    ?>
</div>