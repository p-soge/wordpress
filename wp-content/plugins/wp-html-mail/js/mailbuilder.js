var haet_mailbuilder = haet_mailbuilder || {};


haet_mailbuilder.serialize_content = function(){
    var $ = jQuery;
    var content_array = {};
    
    $('#mailbuilder-content .mb-contentelement').each(function(){
        var $contentelement = $(this);
        var element_content_array = $contentelement.find('input,select,textarea').serializeArray();
        
        var indexed_element_content_array = {};

        for (var i = 0; i < element_content_array.length; i++) {
            indexed_element_content_array[ element_content_array[i]['name'] ] = element_content_array[i]['value'];
        }

        content_array[$contentelement.attr('id')] = {
            id:         $contentelement.attr('id'),
            type:       $contentelement.data('type'),
            content:    indexed_element_content_array 
        };
    });
    $('#mailbuilder_json').val( JSON.stringify( content_array ) );
};




haet_mailbuilder.add_content_element = function( type, element_id, content_array ){
    var $ = jQuery;
    var $contentelement = $('#mailbuilder-templates .mb-contentelement-' + type)
        .clone()
        .attr('id',element_id)
        .appendTo('#mailbuilder-content');


    if( haet_mailbuilder['create_content_' + type] )
        haet_mailbuilder['create_content_' + type]( $contentelement, element_id, content_array );

};




haet_mailbuilder.read_serialized_content = function(){
    var $ = jQuery;
    var raw_content = $('#mailbuilder_json').val();
    //console.log(raw_content);
    var content_array = [];

    if( raw_content.length )
        content_array = JSON.parse( raw_content );

    for( var i in content_array ){
        haet_mailbuilder.add_content_element( content_array[i]['type'], content_array[i]['id'], content_array[i]['content']);
    }
};




jQuery(document).ready(function($) {
    haet_mailbuilder.read_serialized_content();

    $( '#mailbuilder-content' ).sortable({
        stop: function( event, ui ) {
            haet_mailbuilder.serialize_content();
        }
    });

    // open the "add"-Menu
    $('.mb-add').on('click', function( e ){
        e.preventDefault();
        $('.mb-add-types').slideToggle(300);
        $('.mb-add-types a[data-once="once"]').each(function(){
            var type = $(this).data('type');
            if( $('#mailbuilder-content .mb-contentelement-'+type).length )    
                $(this).addClass('disabled');
            else
                $(this).removeClass('disabled');
        })
    });

    // add content element
    $('.mb-add-types a').on( 'click', function(e){
        e.preventDefault();
        if( !$(this).hasClass('disabled') ){
            var type = $(this).data('type');
            var element_id = 'mb-' + Date.now();
            haet_mailbuilder.add_content_element( type, element_id, {} );
            
            $('.mb-add-types').slideUp(300);
        }
    });

    // remove content element
    $('#mailbuilder-content').on('click', '.mb-remove-element', function(e){
        e.preventDefault();
        $(this).parents('.mb-contentelement').slideUp(500,function(){
            $(this).remove();
            haet_mailbuilder.serialize_content();
        })
    });

    
    // make content editable
    $('#mailbuilder-content').on('click', '.mb-contentelement-content', function(e){
        
        var $element_content = $( this );

        // WYSIWYG Editor
        $element_content.find('.mb-edit-wysiwyg').each(function(){
            var $textarea = $(this).find('textarea'); 

            tinymce.editors['mb_wysiwyg_editor'].setContent( $textarea.val() );
            $( 'body' ).addClass( 'mb-overlay' );
            var $popup = $( '#mb-wysiwyg-popup' );
            $popup.fadeIn(300);

            $popup.find('.mb-apply').one('click', function(){
                    $popup.fadeOut( 200 );
                    $( 'body' ).removeClass( 'mb-overlay' );

                    mb_text.apply_content( $textarea, tinymce.editors['mb_wysiwyg_editor'].getContent() );

                    haet_mailbuilder.serialize_content();
                    tinymce.editors['mb_wysiwyg_editor'].setContent('');

                });

            $popup.find('.mb-cancel').one('click', function(){
                    $popup.fadeOut( 200 );
                    $( 'body' ).removeClass( 'mb-overlay' );
                    tinymce.editors['mb_wysiwyg_editor'].setContent('');
                });
            
        });
    });
    
});