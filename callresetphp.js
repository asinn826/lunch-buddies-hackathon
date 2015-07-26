$('button').click(function() {
    if (this.id === 'btn-reset') {
        window.location.href = "./index.php";
        // console.log(this.id);
        // $.ajax({
        //     url: './resetDb.php/',
        //     success: function(data){
        //         console.log(data);
                
        //     }
        // });
        // return false;
    }
    
});