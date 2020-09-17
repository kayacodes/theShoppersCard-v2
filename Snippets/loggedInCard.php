<div class="cardDesign" >
    <div style="background-image: url('<?php echo $img; ?>')" class="cardImage" id="edit" data-aos="flip-left">
    <h5>The Shopper's Card</h5>
</div>
<div class="options">
    <h6>Options</h6>
    <form action="PHP_Includes/updateCard.php"   method="POST" >
        <button type="submit" name="default" class="op" id="default"> Default </button>

        <button type="submit" name="1" class="op" id="btn1" >1</button>
                    
        <button type="submit" name="2" class="op" id="btn2"  >2</button>

        <button type="submit" name="3" class="op" id="btn3"  >3</button>

        <button type="submit" name="4" class="op" id="btn4"  >4</button>
    </form>
</div>