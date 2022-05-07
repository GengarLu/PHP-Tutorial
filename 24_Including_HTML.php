<?php
    //include可將html的內容搬過來
    /*
    以下範例設想可能有無數文章的頁首及頁尾都相通，
    那就將這兩部分的程式用include搬過來
    */
?>

<?php include "24-1_header.html"?>
<p>
    Hello, my name is Allen.<br>
    I'm from Taiwan.<br>
    I like ping-pong.<br>
</p>
<?php include "24-2_footer.html"?>
<a href='25_Include_PHP.php'>按此可連結下一篇</a>