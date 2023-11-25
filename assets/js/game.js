
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
    $('#bet-orange').click(function() {
        startGame($(this));
    });
    $('#bet-purple').click(function() {
        startGame($(this));
    });

    $('#users-bet-decrease').click(function() {
        updateUsersBet('min');
    });
    $('#users-bet-double-decrease').click(function() {
        updateUsersBet('doubleDec');
    });
    $('#users-bet-double-increase').click(function() {
        updateUsersBet('doubleInc');
    });
    $('#users-bet-increase').click(function() {
        updateUsersBet('max');
    });

    $(window).click(function(event) {
        if ($(event.target).is("#resultModal")) {
            $("#resultModal").fadeOut();
        }
    });

    const $scrollList = $('#scroll-list');
    const $usersBet = $('#users-bet');
    addElements(500);

    function getRandomClass() {
        const classes = [
            {code: 'green', name: 'зеленый'},
            {code: 'red', name: 'красный'},
            {code: 'blue', name: 'синий'},
            {code: 'orange', name: 'оранжевый'},
            {code: 'purple', name: 'фиолетовый'},
            {code: 'yellow', name: 'желтый'}
        ];
        const randomIndex = Math.floor(Math.random() * classes.length);
        return classes[randomIndex];
    }

    function addElements(num) {
        for (let i = 0; i < num; i++) {
            const gotColor = getRandomClass();
            $scrollList.append('<div class="trl-roll__el-wrap"><div data-color-code="'+gotColor.code+'" data-color-name="'+gotColor.name+'" class="trl-roll__el trl-gr-'+gotColor.code+' rounded-5"></div></div>');
        }
    }

    function startGame(selectedColor) {
        updateUsersBet();

        offBtn(true);

        const maxScroll = $scrollList.get(0).scrollWidth - $scrollList.width();
        const randomStop = Math.floor(Math.random() * maxScroll);
        let scrollSpeed = randomStop < 1000 ? 1000 : randomStop < 15000 ? 5000 : 28000;

        showModal('bet', {
            'color': selectedColor.data('color-name'),
            'amount': $usersBet.val() + ' рублей',
        });

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
                    showModal('win', {
                        'color': winningElement.data('color-name'),
                        'amount': $usersBet.val() + ' рублей',
                    });
                } else {
                    showModal('fail', {
                        'color': winningElement.data('color-name'),
                        'amount': $usersBet.val() + ' рублей',
                    });
                }
            }

            offBtn(false);
        });

        function showModal(status, order) {
            let html;
            if(status == 'win') {
                $('.modal-content').addClass('modal-content--win');
                $('.modal-content').removeClass('modal-content--fail');

                html = `
                    <h6>Поздравляем!</h6>
                    <h3> Выигрыш: <b>${order.amount}</b></h3>
                `;
            }
            else if(status == 'bet') {
                $('.modal-content').removeClass('modal-content--win');
                $('.modal-content').removeClass('modal-content--fail');

                html = `
                    <h6>Ставка</h6>
                    <h3><b>${order.amount}</b></h3>
                    <h6>На <b>${order.color} цвет</b></h6>
                `;
            }
            else {
                $('.modal-content').addClass('modal-content--fail');
                $('.modal-content').removeClass('modal-content--win');

                html = `
                    <h6>Проигрыш</h6>
                    <h3><b>${order.amount}</b></h3>
                    <h6>Цвет выпал: <b>${order.color}</b></h6>
                `;
            }

            $("#resultText").html(html);
            $("#resultModal").fadeIn();

            setTimeout(function () {
                $("#resultModal").fadeOut();
            }, 2700);
        }

        $(".close").click(function() {
            $("#resultModal").fadeOut();
        });
        function offBtn(turn) {
            $('button').each(function () {
                $(this).attr('disabled', turn);
            })
        }
    }

    function updateUsersBet(action = false) {
        let currentVal = parseFloat($usersBet.val());

        if(isNaN(currentVal) || currentVal <= 0) {
            console.log('Invalid bet value. Please enter a number greater than zero.');
            $usersBet.val(currentVal = 0.01);
            return;
        }

        switch(action) {
            case 'min': {
                currentVal = 0.01;
                break;
            }
            case 'max': {
                currentVal = 100000;
                break;
            }
            case 'doubleInc': {
                currentVal = currentVal * 2;
                break;
            }
            case 'doubleDec': {
                currentVal = Math.max(0, currentVal / 2);
                break;
            }
        }

        if(!Number.isInteger(currentVal)) {
            currentVal = currentVal.toFixed(2);
        }

        $usersBet.val(currentVal);
    }
});






