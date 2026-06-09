$(function () {
    function appendNextPage() {
        var next_page = parseInt($('#current_page').val()) + 1;
        var api_search_result_url = $('#api_search_result_url').val();
        $.ajax({
            url: api_search_result_url+'?page='+next_page,
        }).done(function(data) {
            $('#search_shops').append($(data['html']));
            if (data['last']) {
                $('#more_button').hide();
            } else {
                $('#current_page').val(next_page);
            }
        }).fail(function(XMLHttpRequest, textStatus, errorThrown){
            console.log(XMLHttpRequest.status);
            console.log(textStatus);
            console.log(errorThrown);
        });
    }

    $('#more_button').click(function(){
        appendNextPage();
        return false;
    });

    function getRemovedQuery($button) {
        var queries = window.location.search.slice(1).split('&');

        var results = [];
        for (var i=0; i < queries.length; i++) {
            var kv = queries[i].split('=');
            if (kv.length !=2 ) {
                continue;
            }

            var v = kv[1];
            if (v == $button.data('tag-id')
                || v == encodeURI($button.data('keywords')).replace('%20', '+')) {
                continue;
            }


            results.push(queries[i]);
        }

        var query = results.join('&');
        if (query) {
            query = '?' + query;
        }

        return query;
    }

    $('.remove_button').click(function() {
        var query = getRemovedQuery($(this));
        var l = window.location;
        window.location = [l.protocol, '//', l.host, l.pathname].join('') + query + '#search-section';
        return false;
    });

    $('.remove_parent_button').click(function() {
        var url = $('#search_url').val();
        var query = getRemovedQuery($(this));
        window.location = url + query + '#search-section';
        return false;
    });

    $('.rst').click(function() {
        var l = window.location;
        window.location = [l.protocol, '//', l.host, l.pathname].join('') + '#search-section';
    });
});
