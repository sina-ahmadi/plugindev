jQuery(document).ready(function ($) {

    $('#col-color').wpColorPicker({
        defaultColor: '#FF0',
        width: 400,
        hint: false
    });

    //rh_cm_setting
    wp.codeEditor.initialize($('#css_code'));

    var background_uploader;

    $('#background-selector').click(function () {

        if (background_uploader !== undefined) {
            background_uploader.open();
            return;
        }

        background_uploader = wp.media({
            title: 'انتخاب تصویر پس زمینه',
            button: {
                text: 'انتخاب'
            },
            library: {
                type: ['image']
            },
        });

        background_uploader.on('select', function () {

            let selected = background_uploader.state().get('selection');
            $('#background').val(selected.first().toJSON().url)
        });

        background_uploader.open();

    });

    window.send_to_editor = function (html) {
        console.log( html );
        let url = $( html ).attr('src');
        $('#logo').val( url );
        tb_remove()
    }

});