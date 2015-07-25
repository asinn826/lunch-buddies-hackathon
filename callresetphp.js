$('button').click(function() {
    if (this.id === 'btn-reset') {
        console.log(this.id);
        $.ajax({
            url: './resetDb.php/',
            success: function(data){
                console.log(data);
                window.location.href = "./index.html";
            }
        });
        return false;
    }
    
});