/* Source and licensing information for the line(s) below can be found at http://www.animecenter.tv/modules/views/js/base.js. */
Drupal.Views = {};
Drupal.behaviors.viewsTabs = function (context) {
    $('#views-tabset:not(.views-processed)').addClass('views-processed').each(function () {
        new Drupal.Views.Tabs($(this), {selectedClass: 'active'})
    });
    $('a.views-remove-link').addClass('views-processed').click(function () {
        var id = $(this).attr('id').replace('views-remove-link-', '');
        $('#views-row-' + id).hide();
        $('#views-removed-' + id).attr('checked', true);
        return false
    })
};
Drupal.behaviors.viewsHoverlinks = function () {
    if ($.browser.msie) {
        $("div.view:not(.views-hover-processed)").addClass('views-hover-processed').hover(function () {
            $('div.views-hide', this).addClass("views-hide-hover");
            return true
        }, function () {
            $('div.views-hide', this).removeClass("views-hide-hover");
            return true
        });
        $("div.views-admin-links:not(.views-hover-processed)").addClass('views-hover-processed').hover(function () {
            $(this).addClass("views-admin-links-hover");
            return true
        }, function () {
            $(this).removeClass("views-admin-links-hover");
            return true
        })
    }
};
Drupal.Views.parseQueryString = function (query) {
    var args = {}, pos = query.indexOf('?');
    if (pos != -1)query = query.substring(pos + 1);
    var pairs = query.split('&');
    for (var i in pairs)if (typeof(pairs[i]) == 'string') {
        var pair = pairs[i].split('=');
        if (pair[0] != 'q' && pair[1])args[pair[0]] = decodeURIComponent(pair[1].replace(/\+/g, ' '))
    }
    ;
    return args
};
Drupal.Views.parseViewArgs = function (href, viewPath) {
    var returnObj = {}, path = Drupal.Views.getPath(href);
    if (viewPath && path.substring(0, viewPath.length + 1) == viewPath + '/') {
        var args = decodeURIComponent(path.substring(viewPath.length + 1, path.length));
        returnObj.view_args = args;
        returnObj.view_path = path
    }
    ;
    return returnObj
};
Drupal.Views.pathPortion = function (href) {
    var protocol = window.location.protocol;
    if (href.substring(0, protocol.length) == protocol)href = href.substring(href.indexOf('/', protocol.length + 2));
    return href
};
Drupal.Views.getPath = function (href) {
    href = Drupal.Views.pathPortion(href);
    href = href.substring(Drupal.settings.basePath.length, href.length);
    if (href.substring(0, 3) == '?q=')href = href.substring(3, href.length);
    var chars = ['#', '?', '&'];
    for (i in chars)if (href.indexOf(chars[i]) > -1)href = href.substr(0, href.indexOf(chars[i]));
    return href
};
/* Source and licensing information for the above line(s) can be found at http://www.animecenter.tv/modules/views/js/base.js. */
