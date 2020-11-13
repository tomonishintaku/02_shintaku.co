<section class="comment-ac-button ac-menu">
    <div class="show"><i class="far fa-comment-dots"></i> この記事にコメントする<span class="comment-num"></span>
    </div>
    <div class="hide"> <?php comments_template(); ?>
    </div>
</section>


<script type="text/javascript">

$(document).ready(function(){

    var $element = $('#comments-title span').html();
    $('.comment-num').html($element);

});

</script>