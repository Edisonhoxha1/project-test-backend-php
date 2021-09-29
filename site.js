  
    $(document).ready(function() {

        $('.button-orari').hide();
        $('.button-orari').first().show();

        $('.single-date').click(function() {
            $(this).parent().find('.single-date').removeClass('dateactive');
            $(this).addClass('dateactive');
        })

        $('.single-time').click(function() {
            $(this).parent().find('.single-time').removeClass('timeactive');
            $(this).addClass('timeactive');
        })


        //get value, input type button ajax
        $('.avanti').click(function(){
            var date = $(".dateactive").val();
            var time = $(".timeactive").val();
            $.post("insertUsers.php", {
                date: date,
                time: time
            },
            function(data, status){
                console.log(data);
            });
        });

    });  

    function addClassByClick(date){
            $('.button-orari').show();
            $('.button-orari').not('#' + date).hide();
    }
    

    //gettime
    function addClassTime(id){
        
    }






    $(document).ready(function() {
        $( ".left:selected" ).text();
    });

    $(document).ready(function() {
        $(".quantity-number").text();
    })


    $(document).ready(function () {
        $(".quantity-number1").change(function () {
            $("option", $(this)).each(function (index) {
                if ($(this).is(":selected")) {
                    $(".quantity-number1").css("backgroundColor", "#0FB7B6");
                    $(".rectange1").css("backgroundColor", "#0FB7B6");
                }
            });
        });
    });


    $(document).ready(function () {
        $(".quantity-number2").change(function () {
            $("option", $(this)).each(function (index) {
                if ($(this).is(":selected")) {
                    $(".quantity-number2").css("backgroundColor", "#0FB7B6");
                    $(".rectange2").css("backgroundColor", "#0FB7B6");
                }
            });
        });
    });

    
