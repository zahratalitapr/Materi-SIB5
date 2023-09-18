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
               Dengan pendidikan kamu bisa mengubah dunia
               <br>
               alsannya : karna dengan belajar kita bisa mengetahui banyak ilmu yang akan berguna bagi masa depan
            </p>    
            `
        );
    });

    $("#skill").click(function (){
        $(this).html(
            `<p>
                Saya suka belajar, tetapi saya tidak terlalu ahli. 
                <br>
                pengalaman saya membuat desain ui/ux saat uas dan mendapatkan nilai hampir sempurna
            </p>
            `
        )
    })
});
