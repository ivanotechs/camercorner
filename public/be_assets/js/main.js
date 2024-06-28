$(function() {
    $('button.confirm-btn').click(function () {
        const r = confirm($(this).data('message'));
        if (r === true) {
            $(this).closest('form').submit();
        }
    });

    // tiny mce
    tinymce.init({
        selector: '.tiny-textarea',
        height: "400px",
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker permanentpen advtable advcode editimage advtemplate mentions tinycomments tableofcontents footnotes mergetags inlinecss code',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat | code',
        tinycomments_mode: 'embedded',
        a11y_advanced_options: true,
        paste_as_text: true,
        relative_urls : false,
        remove_script_host : true,
        color_picker_callback: function(callback, value) {
            callback('#4b83eb')
        }
    });
});


$(function() {
    $('.select2-tag').select2({
        ajax: {
            url: '/api/tags',
            dataType: 'json',
            delay: 250,
            processResults: function (resp) {
                const data = resp.data;
                const meta = resp.meta;

                return {
                    results: data.map(formatResponse),
                    pagination: {
                        more: (meta?.last_page > meta?.current_page)
                    }
                };
            },
        },
        templateResult,
        templateSelection
    });

    function formatResponse(item) {
        return {
            'id': item.id,
            'text': item.name,
            ...item
        }
    }

    function templateResult (item) {
        if (item.loading || !(item.meta)) {
            return item.text;
        }

        var $container = $(
            "<div class='select2-result-tag clearfix'>" +
            "   <div class='select2-result-tag__meta'>" +
            "       <div class='select2-result-tag__title'></div>" +
            "       <div class='select2-result-tag__description'></div>" +
            "   </div>" +
            "</div>"
        );

        $container.find(".select2-result-tag__title").text(item.text);
        $container.find(".select2-result-tag__description").text(item.meta.caption);

        return $container;
    }

    function templateSelection (item) {
        return item.text;
    }
});
