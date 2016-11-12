(function ($) {
    // Create a new instance of Slidebars
    var controller = new slidebars();

    // Events
    $(controller.events).on('init');

    $(controller.events).on('css');

    $(controller.events).on('opening');

    $(controller.events).on('opened');

    $(controller.events).on('closing');

    $(controller.events).on('closed');

    // Initialize Slidebars
    controller.init();

    $('.js-toggle-left-slidebar').on('click', function (event) {
        event.stopPropagation();
        controller.toggle('slidebar-1');
    });

    $('#content').click(function(){
        controller.close('slidebar-1');
    });


}) (jQuery);