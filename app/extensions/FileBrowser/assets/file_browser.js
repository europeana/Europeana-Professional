$(document).ready(function(){
    var navigate = function(targetPath, mode, container) {
        var listElem = $('.file-browser-list', container);
        var rootPath = listElem.data('fb-root');
        var currentPath = listElem.data('fb-cp');
        var currentMode = listElem.data('fb-mode');
        console.log(targetPath, mode, typeof(mode), currentMode);
        if (typeof(mode) !== typeof('') || mode === '') {
            mode = currentMode;
        }
        if (typeof(targetPath) !== typeof('')) {
            targetPath = currentPath;
        }
        listElem.addClass("file-browser-list-loading");
        listElem.append(
            $('<li class="file-browser file-browser-loading" />')
                .text('Loading...'));
        $.get('/async/file_browser?fb_cp=' + targetPath + '&fb_mode=' + mode,
            function(html) {
                container.html(html);
            });
    };
    $('.file-browser-container').on('click', '.file-browser-dir a, a.file-browser-up', function(e){
        var container = $(this).closest('.file-browser-container');
        var targetPath = $(this).data('fb-cp');
        navigate(targetPath, null, container);
        e.preventDefault();
        e.stopPropagation();
    });
    $('.file-browser-container').on('click', '.file-browser-mode-button', function(e){
        var container = $(this).closest('.file-browser-container');
        var mode = $(this).data('fb-mode');
        navigate(null, mode, container);
        e.preventDefault();
        e.stopPropagation();
    });
});
