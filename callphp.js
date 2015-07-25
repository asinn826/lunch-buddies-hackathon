$('button').click(function() {
    console.log($("#textbox-val").val());
    $.ajax({
        url: './test.php',
        success: function(){
             ('Added you to the lunch list!');
        }
    });

    return false;
});