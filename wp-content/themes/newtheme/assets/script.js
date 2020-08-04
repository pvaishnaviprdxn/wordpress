(function($) {
    $(document).ready(function(){
        $(document).on('click','#cat-link',function(e) {
            e.preventDefault();
            var categories = $(this).data('category');
            $.ajax({
                url: wpAjax.ajaxUrl,
                data: { action: 'filter', category : categories },
                type: 'post',
                success: function(result) {
                    $('.js-filter').html(result);
                },
                error: function(result) {
                    console.warn(result);
                }
            })
        })
    })
})(jQuery);