<script>

    $(document).ready(function () {

        $('#summernote').summernote({

            height: 500,

            minHeight: 350,

            placeholder:
                'Write your blog content here...',

            tabsize: 2,

            toolbar: [

                [
                    'style',
                    ['style']
                ],

                [
                    'font',
                    [
                        'bold',
                        'italic',
                        'underline',
                        'strikethrough',
                        'clear'
                    ]
                ],

                [
                    'fontname',
                    ['fontname']
                ],

                [
                    'fontsize',
                    ['fontsize']
                ],

                [
                    'color',
                    ['color']
                ],

                [
                    'para',
                    [
                        'ul',
                        'ol',
                        'paragraph'
                    ]
                ],

                [
                    'height',
                    ['height']
                ],

                [
                    'table',
                    ['table']
                ],

                [
                    'insert',
                    [
                        'link',
                        'picture',
                        'video',
                        'hr'
                    ]
                ],

                [
                    'view',
                    [
                        'fullscreen',
                        'codeview'
                    ]
                ]

            ],


            callbacks: {

                onImageUpload: function (files) {

                    for (
                        let i = 0;
                        i < files.length;
                        i++
                    ) {

                        uploadSummernoteImage(
                            files[i]
                        );

                    }

                }

            }

        });


        function uploadSummernoteImage(file) {

            let formData = new FormData();

            formData.append(
                'image',
                file
            );


            $.ajax({

                url:
                    "{{ route('admin.blogs.upload-image') }}",

                type: "POST",

                data: formData,

                processData: false,

                contentType: false,

                headers: {

                    'X-CSRF-TOKEN':
                        '{{ csrf_token() }}'

                },


                success: function (response) {

                    $('#summernote')
                        .summernote(
                            'insertImage',
                            response.url
                        );

                },


                error: function (xhr) {

                    let message =
                        'Image upload failed.';


                    if (
                        xhr.responseJSON &&
                        xhr.responseJSON.message
                    ) {

                        message =
                            xhr.responseJSON.message;

                    }


                    alert(message);

                }

            });

        }

    });

</script>
