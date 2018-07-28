<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Agile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style type="text/css">
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
</head>

<body>

<div class="card-window">
    <div class="card-window-close"></div>
    <div class="card-window-title">
        Подготовка презентации
    </div>
    <div class="card-window-description">
        Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться.
        Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона,
        а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации
        "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.."
    </div>
    <div class="card-window-description-images">
        <img src="img/pres1.jpg" />
        <img src="img/pres2.jpg" />
        <img src="img/pres3.jpg" />
    </div>
    <div class="card-window-comments">
        <div class="card-window-comments-title">
            Comments:
        </div>
        <div class="card-window-comments-add">
            <textarea placeholder="Write a comment..."></textarea>
        </div>
    </div>
</div>

<div class="add-card-window">
    <div class="add-card-window-close"></div>
    <div class="add-card-window-title">
        Create task
    </div>
    <div class="add-card-window-title-input">
        <input type="text" placeholder="Write a title..." />
    </div>
    <div class="add-card-window-description">
        <textarea placeholder="Write a description..."></textarea>
    </div>
    <div class="add-card-window-btns">
        <button class="btn btn-success save-task-btn">Save</button>
        <button class="btn btn-danger">Cancel</button>
    </div>
</div>



<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="nav-button hamburger">
            <a href="" id="project-list-btn">Projects</a>
        </div>
        <div class="nav-right">
            <div class="nav-messages">
                <a href="#" id="messenger-btn">Messenger</a>
            </div>
            <div class="nav-login">
                <img src="img/cat.png" />
                <a href="#" class="nav-login-name">-</a>
                <span class="nav-login-available-money">-</span>
                <span class="nav-login-disabled-money">-</span>
            </div>
            <div class="nav-logout">
                <a href="/logout">Sign out</a>
            </div>
        </div>

    </div>
</div>

<div class="project-list">
    <div class="project-list-search">
        <input type="text" placeholder="Find projects..." />
    </div>
    <div class="project-list-list">
        <div class="project-list-item">
            <a href="#">Сайт с котиками</a>
        </div>
        <div class="project-list-item">
            <a href="#">Ремонт на даче</a>
        </div>
    </div>

    <div class="project-list-add-project">
        <a href="#">Create new project</a>
        <div class="project-list-add-project-input">
            <input type="text" placeholder="Write a name..." />
        </div>
    </div>
</div>

    <div class="board-row">
        <div class="board-col">

            <div class="board-col-title">
                ToDo
            </div>

            <div class="board-card">
                <div class="board-body">
                    <div class="board-title">Подготовка презентации</div>
                </div>
            </div>

            <div class="board-card">
                <div class="board-body">
                    <div class="board-title">Подготовка презентации</div>
                </div>
            </div>

            <div class="board-card">
                <div class="board-body">
                    <div class="board-title">Подготовка презентации</div>
                </div>
            </div>

            <div class="board-add-card">
                <a href="#">Add a card</a>
            </div>

        </div>

        <div class="board-col">

            <div class="board-col-title">
                Approval
            </div>

            <div class="board-card">
                <div class="board-body">
                    <div class="board-title">Подготовка презентации</div>
                </div>
            </div>

            <div class="board-card">
                <div class="board-body">
                    <div class="board-title">Подготовка презентации</div>
                </div>
            </div>

        </div>

        <div class="board-col">

            <div class="board-col-title">
                Work
            </div>

            <div class="board-card">
                <div class="board-body">
                    <div class="board-title">Подготовка презентации</div>
                </div>
            </div>
        </div>

        <div class="board-col">

            <div class="board-col-title">
                Acceptance
            </div>
        </div>

        <div class="board-col">

            <div class="board-col-title">
                Arbitrage
            </div>
        </div>

        <div class="board-col">

            <div class="board-col-title">
                Done
            </div>
        </div>
    </div>

    <div class="clear"></div>

    <div class="messenger" id="messenger">
        <div class="messenger-contact-list">
            <div class="messenger-search">
                <input type="text" placeholder="Search users..." />
            </div>
            <div class="messenger-contact-item">
                <a href="#">
                    <img src="img/cat2.jpg" /><span>Andrey K</span></a>
            </div>
            <div class="messenger-contact-item">
                <a href="#">
                    <img src="img/cat3.jpg" /><span>Yuyu Palamarchuk</span></a>
            </div>
            <div class="messenger-contact-item">
                <a href="#">
                    <img src="img/cat5.jpeg" /><span>Grue Some Bot</span></a>
            </div>
        </div>

        <div class="messenger-field">
            <div class="messages">
                <div class="message-my-message">Привет, нужно нарисовать дизайн кухни</div>
                <div class="message-other-message">Нужно определиться с бюджетом, цветовой палитрой.
                    Очень важно также нарисовать желаемое расположение мебели и техники.
                </div>
                <div class="message-other-message">Еще нужны варианты дизайнов которые вам нравятся</div>
                <div class="message-my-message">Все пришлю в течение завтрашнего дня</div>
                <div class="message-my-message">Очень интересно было бы посмотреть на примеры ваших работ.
                Было бы круто, если сможете прислать их в этот чат картинками, спасибо!</div>
            </div>
            <div class="messenger-new-messege-field">
                <textarea placeholder="Type message..."></textarea>
            </div>
        </div>

    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>

<script>
$(document).ready(function () {
    $('.messenger-new-messege-field textarea').keyup(function(e){
        if(e.keyCode === 13)
        {
            $.ajax({
                type: "POST",
                url: '/send_msg.php',
                data: {
                    sender: 1,
                    receiver: 2,
                    message: $('.messenger-new-messege-field textarea').val()
                },
                success: function () {
                    $('.messenger-new-messege-field textarea').val('');
                }
            });
        }
    });
});


$(document).ready(function () {
   setInterval(function () {
       $.ajax({
           type: "GET",
           url: '/get_msg.php',
           data: {
               sender: 1,
               receiver: 2
           },
           success: function (res) {
               let curr_user = 1;
               let messages = [];
               for (let msg of JSON.parse(res)) {
                    if (msg.sender == curr_user) {
                        messages.push(
                            '<div class="message-my-message">' + msg.message + '</div>'
                        )
                    } else {
                        messages.push(
                            '<div class="message-other-message">' + msg.message + '</div>'
                        )
                    }
               }
               $('.messages').html(messages);
           }
       });
   }, 1000);
});


</script>

<script>
    $(document).ready(function () {
        let projectListOpened = false;
        $('#project-list-btn').click(function () {
            if (projectListOpened) {
                $('.project-list').animate({
                    left: -345
                }, 200);
            } else {
                $('.project-list').animate({
                    left: 0
                }, 200);
            }
            projectListOpened = !projectListOpened;
            return false;
        });


        $('#messenger-btn').click(function () {
            $('#messenger').toggle(100);
        });


        $('.board-card').click(function () {
            $('.card-window').show(60);
        });

        $('.card-window-close').click(function () {
            $('.card-window').hide(60);
        });

    })
</script>

<script src="https://cdn.jsdelivr.net/npm/eosjs@16.0.0/lib/eos.min.js"
        integrity="sha512-vNyLnOEb7uFmEtVbLnyZQ9/k4zckM2Vu3jJOKq6XfWEVZG0yKcjDExVN4EQ7e3F+rePWRncMolI2xFi/3qo62A=="
        crossorigin="anonymous"></script>

<script>
    document.addEventListener('scatterLoaded', scatterExtension => {
        const scatter = window.scatter;
        window.scatter = null;

        let scatterNetwork = {
            blockchain: 'eos',
            host: '163.172.139.34',
            port: '8888',
            chainId: "cf057bbfb72640471fd910bcb67639c22df9f92470936cddc1ade0e2f2e7dc4f"
        };

        let config = {
            broadcast: true,
            sign: true,
            chainId: "cf057bbfb72640471fd910bcb67639c22df9f92470936cddc1ade0e2f2e7dc4f",
            verbose: true,
        };

        let eos = scatter.eos(scatterNetwork, Eos, config);

        scatter.getIdentity({
            accounts:[scatterNetwork]
        }).then(function (res) {
            let name = res.accounts[0].name;
            $('.nav-login-name').html(name);

            let params = {
                json: true,
                code: "bbn.code",
                scope: "bbn.code",
                table: "accounts2",
                limit: 500
            };
            eos.getTableRows(params).then(function (res) {
                for (let row of res.rows) {
                    console.log(row);
                    if (row.owner == name) {
                        $('.nav-login-available-money').html(row.balance);
                        $('.nav-login-disabled-money').html(row.lock);
                    }
                }
            });

            params = {
                json: true,
                code: "bbn.code",
                scope: "bbn.code",
                table: "boards2",
                limit: 500
            };
            eos.getTableRows(params).then(function (res) {
                let boards = [];
                for (let row of res.rows) {
                    console.log(row);
                    if (row.owner == name) {
                        boards.push(' <div class="project-list-item">' +
                            '        <a href="#">' + row.name + '</a>' +
                            '</div>')
                    }
                }
                $('.project-list-list').html(boards);
            });

            params = {
                json: true,
                code: "bbn.code",
                scope: "bbn.code",
                table: "tasks2",
                limit: 500
            };
            eos.getTableRows(params).then(function (res) {
                console.log(res);
                let tasks = {};
                for (let row of res.rows) {
                    if (row.status in row) {
                        tasks[row.status].push(row);
                    } else {
                        tasks[row.status] = [row];
                    }
                }
                console.log(tasks);
                window.global_tasks = tasks;
                const status_map = {
                    0: 'ToDo',
                    1: 'Approval',
                    2: 'In progress',
                    3: 'Done',
                    4: 'Closed'
                };
                let statusHtml = '';
                for (let status_id of Object.keys(status_map)) {
                    statusHtml += '<div class="board-col">' +
                        '<div class="board-col-title">' + status_map[status_id] +
                        '</div>';

                    if (!(status_id in tasks)) {
                        statusHtml += '</div>';
                        continue;
                    }
                    for (let card of tasks[status_id]) {
                        statusHtml += '<div class="board-card">';
                        statusHtml += '<div class="board-body">';
                        statusHtml += '<div class="board-title">';
                        statusHtml += card.name;
                        statusHtml += '</div></div></div>';
                    }

                    if (status_id == 0) {
                        statusHtml += '<div class="board-add-card">';
                        statusHtml += '<a href="#">Add a card</a>';
                        statusHtml += '</div>';
                    }

                    statusHtml += '</div>';
                }
                $('.board-row').html(statusHtml);

                $('.board-add-card').click(function () {
                    $('.add-card-window').show(60);
                });
                $('.add-card-window-close').click(function () {
                    $('.add-card-window').hide(60);
                })
            });

            $('.project-list-add-project-input input').keyup(function(e){
                if(e.keyCode === 13)
                {
                    let new_board_name = $('.project-list-add-project-input input').val();
                    eos.transaction(
                        {
                            actions: [
                                {
                                    account: 'bbn.code',
                                    name: 'cboard',
                                    authorization: [{
                                        actor: 'tester',
                                        permission: 'active'
                                    }],
                                    data: {
                                        'owner': 'tester',
                                        'name': new_board_name
                                    }
                                }
                            ]
                        }
                    ).then(function () {
                        location.reload();
                    });
                }
            });
        });

        $('.project-list-add-project a').click(function () {
            $('.project-list-add-project-input').show();
            return false;
        });

        $('.save-task-btn').click(function() {
            let board_id = <?php echo $_GET['board_id']; ?>;
            let name = $('.add-card-window-title-input input').val();
            let desc = $('.add-card-window-description textarea').val();

            eos.transaction(
                {
                    actions: [
                        {
                            account: 'bbn.code',
                            name: 'ctask',
                            authorization: [{
                                actor: 'tester',
                                permission: 'active'
                            }],
                            data: {
                                'owner': 'tester',
                                'name': name,
                                'description': desc,
                                'board': board_id,
                                'cost': 10
                            }
                        }
                    ]
                }
            ).then(function () {
                location.reload();
            });
        });
    });

</script>



</body>
</html>
