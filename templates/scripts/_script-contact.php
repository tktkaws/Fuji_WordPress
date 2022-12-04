<!-- jquery -->
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.6.0.min.js"></script>
<script>
jQuery(function($) {
    $('.zip-button').keyup(function() {
        AjaxZip3.zip2addr('郵便番号', '', '都道府県', '市区町村', '番地・建物名');
    });
});
</script>