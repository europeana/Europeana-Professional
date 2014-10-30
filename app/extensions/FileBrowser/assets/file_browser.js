$(document).ready(function(){
    var buildQueryString = function(data) {
        var keys = Object.getOwnPropertyNames(data);
        var i;
        var queryStringItems = [];
        var key;
        var value;

        for (i = 0; i < keys.length; ++i) {
            key = keys[i];
            value = data[key];
            queryStringItems.push(
                encodeURIComponent(key) +
                '=' +
                encodeURIComponent(value));
        }

        return '?' + queryStringItems.join('&');
    };

    var navigate = function(targetPath, mode, container) {
        var listElem = $('.file-browser-list', container);
        var rootPath = listElem.data('fb-root');
        var currentPath = listElem.data('fb-cp');
        var currentMode = listElem.data('fb-mode');
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
        $.get('/async/file_browser' +
            buildQueryString({
                fb_cp: targetPath,
                fb_mode: mode,
                fb_root: rootPath}),
            function(html) {
                container.html(html);
            });
    };

    // make sure we don't have duplicate events bound.. Doesn't work unfortunately.
    // $('.file-browser-container').off('click.filebrowser');
    //
    // Of course this doesn't work - this code only runs once on startup, and
    // at that point, nothing is bound to this event yet.

    $('.file-browser-container').on('click.filebrowser', '.file-browser-dir a, a.file-browser-up', function(e){
        var container = $(this).closest('.file-browser-container');
        var targetPath = $(this).data('fb-cp');
        navigate(targetPath, null, container);
        e.preventDefault();
        e.stopPropagation();
    });
    $('.file-browser-container').on('click.filebrowser', '.file-browser-mode-button', function(e){
        var container = $(this).closest('.file-browser-container');
        var mode = $(this).data('fb-mode');
        navigate(null, mode, container);
        e.preventDefault();
        e.stopPropagation();
    });
});
