$(document).ready(function () {
    // Variables
    var clickedTab = $(".tabs > .active");
    var tabWrapper = $(".tab__content");
    var activeTab = tabWrapper.find(".active");
    var activeTabHeight = activeTab.outerHeight();

    // Show tab on page load
    activeTab.show();

    // Set height of wrapper on page load
    tabWrapper.height(activeTabHeight);

    $(".tabs > li").on("click", function () {
        // Remove class from active tab
        $(".tabs > li").removeClass("active");

        // Add class active to clicked tab
        $(this).addClass("active");

        // Update clickedTab variable
        clickedTab = $(".tabs .active");

        // fade out active tab
        activeTab.fadeOut(250, function () {
            // Remove active class all tabs
            $(".tab__content > li").removeClass("active");

            // Get index of clicked tab
            var clickedTabIndex = clickedTab.index();

            // Add class active to corresponding tab
            $(".tab__content > li").eq(clickedTabIndex).addClass("active");

            // update new active tab
            activeTab = $(".tab__content > .active");

            // Update variable
            activeTabHeight = activeTab.outerHeight();

            // Animate height of wrapper to new tab height
            tabWrapper
                .stop()
                .delay(50)
                .animate(
                    {
                        height: activeTabHeight
                    },
                    500,
                    function () {
                        // Fade in active tab
                        activeTab.delay(50).fadeIn(250);
                    }
                );
        });
    });

    var clickedTab_low = $(".low_tabs > .active");
    var tabWrapper_low = $(".tab__content");
    var activeTab_low = tabWrapper_low.find(".active");
    var activeTabHeight_low = activeTab_low.outerHeight();

    // Show tab on page load
    activeTab_low.show();

    // Set height of wrapper on page load
    tabWrapper_low.height(activeTabHeight_low);

    $(".low_tabs > li").on("click", function () {
        // Remove class from active tab
        $(".low_tabs > li").removeClass("active");

        // Add class active to clicked tab
        $(this).addClass("active");

        // Update clickedTab variable
        clickedTab_low = $(".low_tabs .active");

        // fade out active tab
        activeTab_low.fadeOut(250, function () {
            // Remove active class all tabs
            $(".low_tab__content > li").removeClass("active");

            // Get index of clicked tab
            var clickedTabIndex = clickedTab_low.index();

            // Add class active to corresponding tab
            $(".low_tab__content > li").eq(clickedTabIndex).addClass("active");

            // update new active tab
            activeTab_low = $(".low_tab__content > .active");

            // Update variable
            activeTabHeight_low = activeTab_low.outerHeight();

            // Animate height of wrapper to new tab height
            tabWrapper_low
                .stop()
                .delay(50)
                .animate(
                    {
                        height: activeTabHeight_low
                    },
                    500,
                    function () {
                        // Fade in active tab
                        activeTab_low.delay(50).fadeIn(250);
                    }
                );
        });
    });


});
