
$( document ).ready(function() {
    $('button.update').on('click', function () {

        var time = $('input.time').val();

        $.ajax({
            method: "POST",
            url: "index.php",
            data: { time: time }
        })
            .done(function (html) {
                $('div.container').empty();
                $('body').append(html);
            })
    });

    $('p.delete').on('click', function () {

        if(confirm('Do you want to remove this car from line?')){
            alert('The car successfully removed from line!');
        }

    });
});