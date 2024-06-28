<div wire:ignore>
    <div
        x-data="{
            value: @entangle($attributes->wire('model')),
        }"
        type="textarea"
        x-ref="tinymce"
        x-init="
             tinymce.init({
                target: $refs.tinymce,
                relative_urls: false,
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker permanentpen advtable advcode editimage advtemplate mentions tinycomments tableofcontents footnotes mergetags inlinecss code',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat | code',
                tinycomments_mode: 'embedded',
                remove_script_host : false,
                document_base_url: '{{config('app.url')}}/',
                language: 'en',
                advcode_inline: true,
                setup: function(editor) {
                    editor.on('blur', function(e) {
                        value = editor.getContent()
                    })

                    editor.on('focus', function (e) {
                        $dispatch('textarea-focus');
                    });

                    editor.on('init', function (e) {
                        if (value != null) {
                            editor.setContent(value)
                        }
                    })

                    editor.on('paste', (e) => {
                        var imageBlob = getPastedImage(e);

                        if (!imageBlob) {
                            return;
                        }

                        e.preventDefault();

                        uploadPastedImage(imageBlob)
                            .then(response => response.json())
                            .then(data => {
                                if ('location' in data) {
                                    editor.insertContent(`<img src='${data.location}' />`);
                                }
                            });
                    });

                    function putCursorToEnd() {
                        editor.selection.select(editor.getBody(), true);
                        editor.selection.collapse(false);
                    }

                    $watch('value', function (newValue) {
                        if (newValue !== editor.getContent()) {
                            editor.resetContent(newValue || '');
                            putCursorToEnd();
                        }
                    });
                }


                });
                "
          {{ $attributes }}
    >
        <div>
            <textarea
                x-ref="tinymce"
                type="textarea"
                {{ $attributes->whereDoesntStartWith('wire:model')->merge(['class' => 'w-full bg-cultured']) }}
            ></textarea>
        </div>
    </div>

</div>
