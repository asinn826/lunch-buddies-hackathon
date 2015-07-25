$('button').click(function() {
    if (this.id === 'button-submit') {
        console.log(this.id);
        console.log(document.getElementById('name-box').value);
        var peanuts =false, gluten = false, vegann = false;
        if ($('input[type="checkbox"]')[0].checked) {
            peanuts = true;
        }
        if ($('input[type="checkbox"]')[1].checked) {
            gluten = true;
        }
        if ($('input[type="checkbox"]')[2].checked) {
            vegann = true;
        }
        var postData = {
            fullName : document.getElementById('name-box').value,
            peanutAllergy : peanuts,
            glutenFree : gluten,
            vegan : vegann
        }
        $.ajax({
            url: './insertIntoDb.php/',
            data: postData,
            success: function(data){
                console.log(data);
                 // alert('Added you to the lunch list!');
            }
        });
        return false;
    } else if (this.id === 'magic-button') {
        window.location.href = "./map.php";
    }
    
});
