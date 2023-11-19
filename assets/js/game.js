$(document).ready(function() {
    $('#bet-yellow').click(function() {
        startGame($(this));
    });
    $('#bet-red').click(function() {
        startGame($(this));
    });
    $('#bet-green').click(function() {
        startGame($(this));
    });
    $('#bet-blue').click(function() {
        startGame($(this));
    });

});

const $scrollList = $('#scroll-list');

function getClassColor(className) {
    return ;
}

function getRandomClass() {
    const classes = [{code: 'green', name: 'зеленый'}, {code: 'red', name: 'красный'}, {code: 'blue', name: 'синий'}, {code: 'yellow', name: 'желтый'}];
    const randomIndex = Math.floor(Math.random() * classes.length);
    return classes[randomIndex];
}

function addElements(num) {
    for (let i = 0; i < num; i++) {
        const gotColor = getRandomClass();
        $scrollList.append('<div class="trl-roll__el-wrap"><div data-color-code="'+gotColor.code+'" data-color-name="'+gotColor.name+'" class="trl-roll__el trl-gr-'+gotColor.code+' rounded-5"></div></div>');
    }
}

addElements(500);

function startGame(selectedColor) {
    const maxScroll = $scrollList.get(0).scrollWidth - $scrollList.width();
    const randomStop = Math.floor(Math.random() * maxScroll);
    let scrollSpeed = randomStop < 1000 ? 1000 : randomStop < 15000 ? 5000 : 28000;

    showModal('Вы выбрали '+selectedColor.data('color-name')+' цвет');

    $scrollList.animate({ scrollLeft: randomStop }, scrollSpeed, 'easeOutCubic', function() {
        const linePosition = $scrollList.offset().left + ($scrollList.width() / 2);

        let winningElement = null;
        let closestDistance = Infinity;


        $scrollList.find('.trl-roll__el').each(function() {
            const elCenter = $(this).offset().left + ($(this).outerWidth() / 2);
            const distanceToLine = Math.abs(linePosition - elCenter);

            if (distanceToLine < closestDistance) {
                closestDistance = distanceToLine;
                winningElement = $(this);
            }
        });

        if (winningElement) {
            if (winningElement.data('color-code') === selectedColor.data('color-code')) {
                showModal('Победа. Цвет выпал ' + winningElement.data('color-name'));
            } else {
                showModal('Поражение. Цвет дожен был быть ' + winningElement.data('color-name'));
            }
        }
    });
}

// Function to show the modal with the result
function showModal(resultText) {
    $("#resultText").html(resultText);
    $("#resultModal").fadeIn();

    setTimeout(function () {
        $("#resultModal").fadeOut();
    }, 2500);
}

// When the user clicks on <span> (x), close the modal
$(".close").click(function() {
    $("#resultModal").fadeOut();
});

// When the user clicks anywhere outside of the modal, close it
$(window).click(function(event) {
    if ($(event.target).is("#resultModal")) {
        $("#resultModal").fadeOut();
    }
});
