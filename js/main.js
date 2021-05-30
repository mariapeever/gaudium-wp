/* Author: Mariya Peeva (etherdesign) */
/*jslint browser: true*/
/*global jQuery, window*/
/* Masonry Filter 1.0 filter by etherdesign */
$(function($) {
    "use strict";
    $("[data-load]").each(function() {
        var items = [],
            masonry = $(this).find(".masonry").length;

        function swapItems(order, newOrder, array, dataLoad) {
            var dataOrder = dataLoad.find("[data-order='" + order + "']"),
                newDataOrder = dataLoad.find("[data-order='" + newOrder + "']");
            newDataOrder.html(items[order - 1][1]);
            dataOrder.html(items[newOrder - 1][1]);
            dataOrder.find(".item").addClass("item-hide");
        }
        if(masonry) {
            $(this).find("[data-order]").each(function() {
                var thisOrder = $(this).closest("[data-load]"),
                    order = parseInt($(this).attr("data-order")),
                    dataMatch = thisOrder.find("[data-match='" + order + "']"),
                    dataLoad = parseInt(thisOrder.attr("data-load")),
                    dataCols = thisOrder.find("[data-col]").length,
                    dataColVal = ((order - 1) % dataCols) + 1,
                    dataCol = thisOrder.find("[data-col='" + dataColVal + "']"),
                    item;
                if(dataMatch.find("[data-order]").length) {
                    item = dataMatch.find("[data-order]").html();
                } else {
                    item = dataMatch.html();
                }
                if(dataCol.length) {
                    dataCol.append(dataMatch.html());
                } else {
                    $(this).html(dataMatch.html());
                    if($(this).html()) {
                        dataMatch.remove();
                    }
                }
                dataMatch.remove();
                if(item) {
                    items.push([
                        order,
                        item
                    ]);
                }
            });
            var remaining = items.length - 1;
            for(var i = 1; i < items.length; i++) {
                for(var j = 0; j < remaining; j++) {
                    if(items[j + 1][0] < items[j][0]) {
                        var copy = items[j + 1];
                        items[j + 1] = items[j];
                        items[j] = copy;
                    }
                }
                remaining--;
            }
        }
        $(this).find(".item-cat").click(function() {
            var dataLoad = $(this).closest("[data-load]"),
                ptflCat = $(this).attr("data-rel");
            $(this).parent().addClass("active");
            $(this).parent().siblings().removeClass("active");
            if(masonry) {
                dataLoad.find("[data-order]").each(function() {
                    var order = parseInt($(this).attr("data-order"));
                    if(items[order - 1]) {
                        $(this).html(items[order - 1][1]);
                    }
                });
            }
            dataLoad.find(".item").each(function() {
                if($(this).hasClass(ptflCat)) {
                    $(this).removeClass("item-hide");
                } else {
                    $(this).addClass("item-hide");
                }
            });
            if(masonry) {
                dataLoad.find("[data-order]").each(function() {
                    var order = parseInt($(this).attr("data-order"));
                    if($(this).find(".item").hasClass(ptflCat)) {
                        for(var i = 0; i < items.length; i++) {
                            var iOrder = dataLoad.find("[data-order='" + items[i][0] + "']");
                            if(iOrder.find(".item").hasClass("item-hide") && items[i][0] < order) {
                                var newOrder = items[i][0];
                                if($(this).closest("[data-col]").length) {
                                    swapItems(order, newOrder, items, dataLoad);
                                    break;
                                } else if($(this).find(".item").hasClass("landscape") && 
                                        iOrder.find(".item").hasClass("landscape")) {
                                    swapItems(order, newOrder, items, dataLoad);
                                    break;
                                } else if($(this).find(".item").hasClass("portrait") && 
                                    iOrder.find(".item").hasClass("portrait")) {
                                    swapItems(order, newOrder, items, dataLoad);
                                    break;
                                }
                            }
                        }
                    }
                });
            }
            $(window).trigger("resize");
        });
    });
}(jQuery));
$(function($) {
    $(".form-control").each(function() {
        if($(this).closest(".navbar").length) {
            $(this).closest("form").addClass("navbar-form form-inline");
        }
    });
}(jQuery));
/* Load more button */
/*
    Load more content with jQuery - May 21, 2013
    (c) 2013 @ElmahdiMahmoud
*/
$(function($) {
    function resize() {
        $(window).trigger("resize");
    }
    $("[data-load]").each(function() {
        var toLoad = $(this).find(".to-load"),
            loadMore = $(this).find(".load-more"),
            load = parseInt($(this).attr("data-load")),
            toLoadHidden = $(this).find(".to-load:hidden"),
            masonry = $(this).find(".masonry").length;
        if(masonry) {
            var totalLoad = load;
            var order = 1;
        }
        for(var i = 0; i < load; i++) {
            toLoad.each(function(k, v) {
                load = parseInt($(this).closest("[data-load]").attr("data-load"));
                if(masonry) {
                    if(parseInt($(this).attr("data-order")) == order && 
                        order <= load) {
                        $(this).show();
                        order++;
                    }
                } else {
                    $(this).closest("[data-load]").find(".to-load").slice(0, load).show();
                }
            });
        }
        if(toLoadHidden.length == 0) {
            loadMore.hide();
        }
        loadMore.on("click", function() {
            load = parseInt($(this).closest("[data-load]").attr("data-load"));
            toLoadHidden = $(this).closest("[data-load]").find(".to-load:hidden");
            if(masonry) {
                totalLoad += load;
            }
            for(var i = 0; i < load; i++) {
                toLoadHidden.each(function() {
                    if(masonry) {
                        if(parseInt($(this).attr("data-order")) == order && 
                            order <= totalLoad) {
                            $(this).slideDown();
                            order++;
                        }
                    } else {
                        toLoadHidden.slice(0, load).slideDown();
                    }
                });
            }
            if($(this).closest("[data-load]").find(".to-load:hidden").length == 0) {
                $(this).fadeOut("slow");
            }
            $("html,body").animate({
                scrollTop: $(this).offset().top
            }, 1500);
            resize();
        });
        resize();
    });
});
// Mega dropdown
$(function() {
    $(".mega-dropdown").each(function() {
        var megaDropdown = $(this),
            cols = 6,
            split = Math.ceil((megaDropdown.find(".menu-item").length) / cols),
            col = Math.ceil(12 / cols);
        for(var i = 0; i < cols; i++) {
            for(var j = 0; j < split; j++) {
                megaDropdown.find(".menu-item:eq(" + (j + (i * split)) + ")").addClass("col-" + i);
            }
            $(megaDropdown.find(".col-" + i)).wrapAll('<div class="col-md-' + col + '"></div>');
        }
    });
});
// Multi dropdown
$(function() {
    $(".multi-dropdown").each(function() {
        var multiDropdown = $(this),
            attrClass = multiDropdown.attr("class").split(" "),
            autoCols = multiDropdown.is('[class*="cols-"]'),
            cols, split;
        if(autoCols) {
            cols = attrClass[attrClass.indexOf("multi-dropdown") + 1].split("-")[1];
        } else {
            cols = Math.ceil((multiDropdown.find(".menu-item").length) / 18);
        }
        split = Math.ceil((multiDropdown.find(".menu-item").length) / cols),
            col = Math.ceil(12 / cols);
        for(var i = 0; i < cols; i++) {
            for(var j = 0; j < split; j++) {
                multiDropdown.find(".menu-item:eq(" + (j + (i * split)) + ")").addClass("col-" + i);
            }
            multiDropdown.find(".col-" + i).wrapAll('<div class="col-md-' + col + '"></div>');
        }
    });
});
/* AutoThumbs VR 1.0 by etherdesign */
$(function($) {
    "use strict";
    $(window).on("resize", function() {
        if($("#autothumbs-vr").length) {
            $("#autothumbs-vr").html("");
        }
        $(".autothumb").each(function() {
            var vGrid = 32,
                x = 4,
                y = 3, // 4x3
                imgBgSize = $(this).css("background-size").split(" "),
                width = $(this).innerWidth(),
                rawHeight, height;
            if($(this).hasClass("landscape")) {
                rawHeight = (width / x) * y;
            } else if($(this).hasClass("portrait")) {
                rawHeight = (width / y) * x;
            } else if($(this).hasClass("vr")) {
                rawHeight = imgBgSize[imgBgSize.length - 1].split("px")[0];
            } else {
                rawHeight = width;
            }
            height = Math.floor(rawHeight / vGrid) * vGrid + "px";
            if($("#autothumbs-vr").length === 0) {
                $("head").append("<style id=\"autothumbs-vr\"></style>");
            }
            if($("#autothumbs-vr:contains(.y" + height + ")").length === 0) {
                $("#autothumbs-vr").append(".y" + height + " {height:" + height + ";}");
            }
            if($(this).is("[class*=\"y\"]")) {
                $(this).attr("class", function(i, c) {
                    return c.replace(/(^|\s)y\S+/gm, "");
                });
            }
            $(this).addClass("y" + height);
        });
    }).resize();
}(jQuery));

/* edNavbar 1.0 for Bootstrap 3 by etherdesign */
$(function($) {
    "use strict";
    $(".ed-navbar .navbar-nav a").each(function() {
        var top = $(".ed-navbar .navbar-nav"),
            dropdownMenu = $(this).next(),
            parent = $(this).parent(),
            active = parent.hasClass("active"),
            allParents = $(this).parentsUntil(top, "li"),
            parentSiblingsDropdown = allParents.siblings(".dropdown"),
            parentsDropdown = $(this).parentsUntil(top, ".dropdown"),
            parentItems = $(this).parentsUntil(top, ".dropdown-menu").prev();
        if(parent.hasClass("dropdown")) {
            $(this).attr("data-toggle", "collapse");
        }
        if(active) {
            parentsDropdown.addClass("open");
            parentItems.attr("aria-expanded", "true");
        }
        if(dropdownMenu.length) {
            if(active) {
                $(this).attr("aria-expanded", "true");
            } else {
                $(this).attr("aria-expanded", "false");
            }
        }
        $(this).on("click", function() {
            parent.addClass("active");
            if(dropdownMenu.length) {
                parent.toggleClass("open");
                $(this).attr("aria-expanded", function(i, attr) {
                    return attr === "true" ? "false" : "true";
                });
                if(!parent.hasClass("open")) {
                    dropdownMenu.find(".active").removeClass("active");
                    dropdownMenu.find(".open").removeClass("open");
                    dropdownMenu.find(".dropdown-menu").prev().attr("aria-expanded", "false");
                }
            }
            parent.parentsUntil(top, ".active").removeClass("active");
            allParents.siblings(".open").removeClass("open");
            if(parentSiblingsDropdown.length) {
                parentSiblingsDropdown.find(".active").removeClass("active");
                parentSiblingsDropdown.find(".open").removeClass("open");
                parentSiblingsDropdown.find(".dropdown-menu").prev().attr("aria-expanded", "false");
            }
        });
    });
}(jQuery));
/* Custom file input */
$(function($) {
    "use strict";
    $('.inputfile').each(function(){
        $(this).change(function(e){
                var fileName = e.target.files[0].name,
                label = $(this).next('label').find('span');
                label.html(fileName);
        });
    });
}(jQuery));
$(function($) {
    "use strict";
    var count = 0;
    $(window).on("resize scroll", function() {
        var viewportTop = $(window).scrollTop(),
            level = 96,
            navId = "#main-nav",
            topClasses = "navbar-top mdspace-1";
        if(viewportTop > level) {
            $(navId).removeClass(topClasses);
        } else {
            $(navId).addClass(topClasses);
        }
    });
}(jQuery));
/* Counters */
/* Viewport detection src: https://codepen.io/BoyWithSilverWings/pen/MJgQqR */
/* Counters by etherdesign */
$(function($) {
    "use strict";
    var count = 0;
    $(window).on("resize scroll", function() {
        $(".count").each(function() {
            var $this = $(this),
                value = $this.attr("data-count") + 1,
                viewportTop = $(window).scrollTop(),
                viewportBottom = viewportTop + $(window).height(),
                counterTop = $this.offset().top,
                counterBottom = counterTop + $this.outerHeight();
            setInterval(function() {
                if(count < parseInt(value) && 
                    counterBottom > viewportTop && 
                    counterTop < viewportBottom) {
                    $($this).text(count);
                    count++;
                }
            }, 50);
        });
    });
}(jQuery));
$(function($) {
    "use strict";
    $(".progress-bar").each(function() {
        var $this = $(this),
            min = $this.attr("aria-valuemin"),
            max = $this.attr("aria-valuemax"),
            value = $this.attr("aria-valuenow"),
            count = min,
            width;
        $(window).on("resize scroll", function() {
            var viewportTop = $(window).scrollTop(),
                viewportBottom = viewportTop + $(window).height(),
                counterTop = $this.offset().top,
                counterBottom = counterTop + $this.outerHeight();
            setInterval(function() {
                if(count < parseInt(value) && 
                    counterBottom > viewportTop && 
                    counterTop < viewportBottom) {
                    count++;
                    width = Math.round(count / (max - min) * 100);
                    $($this).find("span").text(count);
                    $this.css("width", width + "%");
                }
                if($this.hasClass("complete") && count == parseInt(value)) {
                    $this.removeClass("active");
                }
            }, 50);
        });
    });
}(jQuery));
$(function($) {
    "use strict";
    var count = 0;
    $(".ed-styles").each(function() {
        count++;
        var styles = $(this).attr("style"),
            className = "style-" + count,
            headStyles = "." + className + " {" + styles + "}",
            media = $(this).attr("data-media");
        if($("#ed-styles").length == 0) {
            $("head").append("<style id=\"ed-styles\"></style>");
        }
        $(this).addClass(className);
        $("#ed-styles").append(headStyles);
        if(media) {
            var mediaArr = media.split(",");
            mediaArr.pop();
            var headMedia = "";
            for(var i = 0; i < mediaArr.length; i++) {
                headMedia += [mediaArr[i].slice(
                                0,
                                mediaArr[i].indexOf("{") + 1),
                                " ." + className + " {",
                                mediaArr[i].slice(mediaArr[i].indexOf("{") + 1,
                                mediaArr[i].length)].join("");
            }
            $("#ed-styles").append(headMedia);
        }
        if($("#ed-styles:contains(." + className + ")").length) {
            $(this).removeAttr("style data-media");
        }
    });
}(jQuery));

/* Pagination */
$(function($) {
    "use strict";
    $(".pagination").each(function() {
        var currentParent = $(this).find('.current').closest('li');
        currentParent.addClass('active');
        if(currentParent.hasClass('active')) {
            $(this).find('.current').removeAttr('class');
        }
    });
}(jQuery));
/* Speed 1.0 parallax by etherdesign */
$(function($) {
    "use strict";
    var init = [];
    $(".speed").each(function() {
        var initMiddle = $(this).offset().top + $(this).outerHeight() / 2;
        init.push(initMiddle);
    });
    $(window).on("resize scroll", function() {
        $(".speed").each(function(k) {
            var initMiddle = init[k],
                viewTop = $(window).scrollTop(),
                viewHeight = $(window).height(),
                viewMiddle = viewTop + viewHeight / 2,
                attrClass = $(this).attr("class").split(" "),
                speed = parseFloat(attrClass[attrClass.indexOf("speed") + 1].split("-")[1]),
                newTop = Math.floor((viewMiddle - initMiddle) * speed);
            $(this).css("top", newTop);
        });
    });
}(jQuery));
$("[data-toggle=\"tooltip\"]").tooltip()
$("[data-toggle=\"popover\"]").popover()
$("[data-toggle=\"button\"]").on("click", function() {
    $(this).button("complete")
})
$("[data-toggle=\"buttons\"]").on("click", function() {
    $(this).button("toggle")
})
$(".carousel").carousel()