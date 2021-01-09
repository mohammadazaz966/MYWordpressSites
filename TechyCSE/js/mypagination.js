      document.addEventListener('DOMContentLoaded', function () {
        var items = jQuery(".main-post .card");
        var numItems = items.length;
        var perPage = 10;
        items.slice(perPage).hide();
        jQuery('.pagination-holder').pagination({
            items: numItems,
            itemsOnPage: perPage,
            prevText: "Prev",
            nextText: "Next",
            cssStyle: 'dark-theme',
            onPageClick: function (pageNumber) {
                var showFrom = perPage * (pageNumber - 1);
                var showTo = showFrom + perPage;
                items.hide().slice(showFrom, showTo).show();
            }
        });
    });
	
});