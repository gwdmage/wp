jQuery(document).ready(function($) {

    $(".catalog_list_item_description .wp-block-gallery").remove();
    var postsPerPage = 3; // Post per page
    var defaultSortOrder = "ASC";
    var newSortOrder = "DESC";
    var defaultPointerDirection = 'Sort By Date ▼';
    var newtPointerDirection = 'Sort By Date ▲';

    function getOption(currentOption, defaultOption, newOption) {
        return currentOption === defaultOption ? newOption : defaultOption;
    }

    $("#more_posts").on("click", function () {
        var qty = Number($(this).attr("data-qty"));
        var currentSortOrder = $("#sort-by-date").attr("data-current-sort-order");
        var sortOrder = getOption(currentSortOrder, defaultSortOrder, newSortOrder);
        $.post(ajaxUrl, {
            action: "more_post_ajax",
            offset: qty,
            postsPerPage: postsPerPage,
            sort_order: sortOrder
        }).success(function (posts) {
            var incQty = qty + 3;
            $('#more_posts').attr({"data-qty": incQty});
            $("#ajax-posts").append(posts);
        });
    });
    $("#sort-by-date").on("click", function () {
        var incQty = $("#more_posts").attr("data-qty");
        var currentSortOrder = $(this).attr("data-current-sort-order");
        var currentPointerDirection = $(this).text();
        var newSortAttValue = getOption(currentSortOrder, defaultSortOrder, newSortOrder);
        var newPointerDirectionValue = getOption(currentPointerDirection, defaultPointerDirection, newtPointerDirection);
        $.post(ajaxUrl, {
            action: "sort_date_ajax",
            postsPerPage: incQty,
            sort_order: currentSortOrder
        }).success(function (posts) {
            $('#sort-by-date').attr({"data-current-sort-order": newSortAttValue});
            $('#sort-by-date').text(newPointerDirectionValue);
            $("#ajax-posts").html(posts);
        });
    });

    var clicks = 0;
    $(".menu").on("click", function () {
        if ((clicks % 2) === 0) {
            $("#header").addClass('active-panel');
            clicks++;
        } else {
            $("#header").removeClass('active-panel');
            clicks--;
        }
    });
    clicks = 0;

    $(".menu-item-has-children").on("click", function () {
        var dropClassName = "drop-active";
        var mobileMedia = 700;
        var windowWidth = $(window).width();
        var dropActiveStatus = $(this).hasClass(dropClassName);
        if (windowWidth <= mobileMedia && !dropActiveStatus) {
            $(this).addClass(dropClassName);
        } else {
            $(this).removeClass(dropClassName);
        }
    });

    $("#menu-item-40").on("click", function () {
        var hoverClassName = "hover";
        $(this).addClass(hoverClassName);
    })
});