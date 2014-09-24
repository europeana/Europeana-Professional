

/* Declare a namespace for the site */
var Site = window.Site || {};

/* Create a closure to maintain scope of the '$'
   and remain compatible with other frameworks.  */
(function($) {

    var body = $('body');

    var bodyClickFn = function(evt) {
        var target = $(evt.target);
        if(!target.closest('.menu-right, .nav-toggle-menu, .nav-toggle-search, .search-global, .nav-toggle-sites, .menu-top').length){
            Site.resetMenu();
        }
    };

    Site.resetMenu = function(){
        body.removeClass('is-open-menu-right is-open-globalsearch is-open-menu-top');
        document.removeEventListener( 'click', bodyClickFn );
    };

    // Swaps the input fields placeholder text in and out
    Site.placeholders = function () {
        var colour_focus = "#333",
        colour_blur = "#171207";
        
        $('input[placeholder]').each(function(){

            var $this = $(this);
        
            var attrPh = $this.attr('placeholder');
            
            $this.attr('value', attrPh)
            .bind('focus', function() {

                if($this.val() === attrPh){
                    $this.val('').css('color', colour_blur);
                }
                
            }).bind('blur', function() {
            
                if($this.val() === ''){
                    $this.val(attrPh).css('color', colour_focus);
                }
            
            });

        });
        
    };
    
    //	init jQuery plugin "minRead"
    // 	https://github.com/heyimjuani/minRead
    Site.initMinRead = function() {
    	
    	//	check for read-time item
    	if ( !$(".read-time").length ) return;
    	
    	var options = {
    		where: ".read-time",				// where the "x min read" will be inserted. Defaults to ".min-read"
    		wordsPerMinute	: 180,				// this is the avg adults can read on a screen, acording to wikipedia
    		archive: true,						// set to true if trying to fetch read time from another page. "false" by default
    		archiveText: ".textcontent",		// if archive: true, time will be calculated using text on div specified here. Defaults to ".text"
    		anchor: ".item-details h2 a",		// external article anchor class. Defaults to ".article-link"
    		label: " mins to read"
    	}

    	//	init for list views
    	$(".list-item").minRead(options);

    	//	init for page view with disabled "archive" function
    	options.archive = 0;
    	$(".textcontent").minRead(options);
    }
    
    
    //	file download handler
    Site.fileHelper = function() {
    	
    	//	prevent event default to force download
    	$('form').on('click', 'a.download', function(e) {
    		
    		e.preventDefault();
    		$link = $(this);
    		$form = $link.parents('form');
    		
    		//	remove input previous download
    		$('input', $form).remove();
    		
    		//	create hidden input with download values
    		$input = $('<input type="hidden" name="downloadfile" value="' + $link.attr('data-downloadFile') + '" >')

    		//	insert input + submit
    		$form.append($input);
    		$form[0].submit();
    		
    	});
    	
    }
    


    //same as $(document).ready();
    $(function() {
        

        //Navigation toggle
        $('.nav-toggle-menu').on("click", function(e) {

            if( body.hasClass( 'is-open-menu-right' ) ){
                Site.resetMenu();
            }else{
                body.addClass('is-open-menu-right');
                document.addEventListener( 'click', bodyClickFn );
            }

            e.preventDefault();

        });
        
        //Navigation toggle
        $('.nav-toggle-search').on('click', function(e) {
            
            if( body.hasClass( 'is-open-globalsearch' ) ){
                Site.resetMenu();
            }else{
                body.addClass('is-open-globalsearch');
                document.addEventListener( 'click', bodyClickFn );
            }

            e.preventDefault();
        });

        //Our Sites toggle
        $('.nav-toggle-sites').on('click', function(e) {
            
            if( body.hasClass( 'is-open-menu-top' ) ){
                Site.resetMenu();
            }else{
                body.addClass('is-open-menu-top');
                document.addEventListener( 'click', bodyClickFn );
            }

            e.preventDefault();
        });


        Site.placeholders();
        Site.initMinRead();
        Site.fileHelper();


    });
})(jQuery);