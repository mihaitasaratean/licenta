/**
 * <script type="text/javascript">

 * function CopyToClipboard()

 * {
 * CopiedTxt = document.selection.createRange();
 * CopiedTxt.execCommand("Copy");
 * }

 * </script>
 */
<!--
<form name="Form1">
Here is some text you can copy. You can copy text from anywhere on the page, simply select it and press the Copy to clipboard button. Then you can paste it anywhere you want, in Notepad, Visual Studio or in the textarea below. <br />
<br />
<textarea id="txtArea" cols="60" rows="5">You can also copy text from this textarea. Or you can paste the text here, using the Ctrl+V key combination.</textarea>
<br />
<input type="button" onClick="CopyToClipboard()" value="Copy to clipboard" />
</form>
-->



<?php
    $unique_id = md5(uniqid());
    echo $unique_id;
?>
<div id="<?=$unique_id?>item-size" class="item-size">
    <div class="view pic-transition"> 
        <figure class="ribbonnew">
            <img class="ribbonnewimg" alt="" src="../images/endingsoonribbon.png">
        </figure>
            <img src="../images/woman.jpg" /> 
            <div class="mask"> 
                <h2>Title</h2> 
                <p>This is a test of a description for an item.</p> 
                    <a href="#" class="info">Read More</a> 
            </div> 
    </div>
</div>