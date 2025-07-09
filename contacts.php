<?php
include 'common/header_start.php';
include 'common/header_end.php';
?>
<div class="container-form">
    <form action="submit.php" method="POST">
        <label for="fname">Име:</label>
        <input type="text" id="fname" name="name" placeholder="Име..">

        <label for="subject">Тема на въпрос:</label>
        <textarea id="subject" name="message" placeholder="Пиши тук.." style="height:200px"></textarea>

        <label for="email">Имейл:</label>
        <input type="text" id="email" name="email" placeholder="Имейл..">

        <div class="container-right">
            <input type="submit" value="Прати">
        </div>
    </form>
    <div class="container-form">
        <label for="userId">Въведи ID:</label>
        <input type="number" id="userId" placeholder="Въведи ID">
        <button id="fetchData">Търси</button>
        <div id="userData" style="margin-top: 20px;"></div>
    </div>

    <script src="jquery-3.7.1.min.js"></script>
    <script>
        $('#searchForm').on('submit', function(e) {
            e.preventDefault();

            const userId = $('#userId').val();

            if (!userId) {
                $('#userData').html('<p>Моля, въведи ID.</p>');
                return;
            }

            $.ajax({
                url: 'submit.php',
                type: 'GET',
                data: {
                    id: userId
                },
                dataType: 'json',
                success: function(response) {
                    if (response.error) {
                        $('#userData').html('<p>' + response.error + '</p>');
                    } else {
                        $('#userData').html(
                            '<p><strong>Име:</strong> ' + response.name + '</p>' +
                            '<p><strong>Тема на въпрос:</strong> ' + response.message + '</p>' +
                            '<p><strong>Имейл:</strong> ' + response.email + '</p>'
                        );
                    }
                },
                error: function() {
                    $('#userData').html('<p>Възникна грешка при търсенето.</p>');
                }
            });
        });
    </script>
</div>
<?php
include 'common/footer_start.php';
include 'common/footer_end.php';
?>