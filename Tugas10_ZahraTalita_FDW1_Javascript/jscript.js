$("document").ready(function() {
    $("#profile").click(function (){
        $(this).html(
            `<p>
                Nama : Zahra Talita Putri Rumalia
                <br>
                Jenis Kelamin : Perempuan
            </p>`
        );
    });

    $("#motto").click(function (){
        $(this).html(
            `<p>
               "Dengan pendidikan kamu bisa mengubah dunia"
            </p>    
            `
        );
    });

    $("#skill").click(function (){
        $(this).html(
            `<p>
                Saya suka belajar, tetapi saya tidak terlalu ahli.
            </p>
            `
        )
    })
});
