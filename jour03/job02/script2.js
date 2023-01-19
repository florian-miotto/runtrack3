// Dans cet exercice, 6 images s’assemblent pour former un arc-en-ciel, il vous faudra les
// mélanger puis les remettre en ordre.

// Le but de ce job sera dans un premier temps de créer une balise <button>. Cette balise
// servira à mélanger l’ensemble des images de l’arc-en-ciel.
// Par la suite, vous devrez faire en sorte qu’il soit possible de remettre les images dans le
// bon ordre, en utilisant un ou plusieurs conteneurs.
// Une fois que les 6 images sont ordonnées, un message s’affiche en dessous :
// Si l'arc-en-ciel est bien reconstitué, le message “Vous avez gagné” s’affiche en vert.
// Sinon, le message “Vous avez perdu” s’affiche en rouge.

$(document).ready(function () {
    var correctOrder = ["arc1", "arc2", "arc3", "arc4", "arc5", "arc6"];
    var currentOrder = [];

    $("#images-container .image").click(function () {
        var imageId = $(this).attr("id");
        var imageClone = $(this).clone();
        imageClone.attr("id", imageId + "_clone");
        imageClone.appendTo("#display-container");
        currentOrder.push(imageId);
        if (currentOrder.length === 6) {
            checkOrder();
        }
    });

    $("#shuffle").click(function () {
        // shuffle the images
        $("#images-container .image").shuffle();
    });

    function checkOrder() {
        var solved = true;
        for (var i = 0; i < 6; i++) {
            if (currentOrder[i] !== correctOrder[i]) {
                solved = false;
                break;
            }
        }
        if (solved) {
            $("#message").text("Vous avez gagné").css("color", "green");
        } else {
            $("#message").text("Vous avez perdu").css("color", "red");
        }
    }

    $.fn.shuffle = function () {
        var allElems = this.get();
        var getRandom = function (max) {
            return Math.floor(Math.random() * max);
        }
        var shuffled = $.map(allElems, function () {
            var random = getRandom(allElems.length),
                randEl = $(allElems[random]).clone(true)[0];
            allElems.splice(random, 1);
            return randEl;
        });
        this.each(function (i) {
            $(this).replaceWith($(shuffled[i]));
        });
        return $(shuffled);
    };

})
