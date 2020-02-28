$( document ).ready(function() {
    function makeAfromdata(data){
        return "<a href='"+data+"'>"+data +"</a>"
    }

    $(".fromLink").submit('click', function (e) {
        let inputLink = $("input[name='linkInput']" ,this).val().trim();
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        if(inputLink !== ''){
            $.post('makeShort', { link: inputLink}, function (data) {
                console.log(data);
                $('a','.resultShorten').html(makeAfromdata(data))
                $("input[name='linkInput']").val('')
            })
        }else {
            $('.resultShorten').append("<h4 class='error'>empty field</h4>")
        }







    })

    function updateResntLink (){
        $.get('resentUpdate', function (data) {
            var respons = JSON.parse(data);
            $('#resentShorten').html('');
            for (let i = 0; i < respons.length; i++) {
                var elem = $( "<a/>", {
                    html: respons[i]['link'],
                    "class": "",
                    href: respons[i]['link']
                });
                $(elem).attr('target','_blank');
                $('#resentShorten').append(elem);
                console.log(respons[i])
            }
        })
    }
    // updateResntLink();
    setInterval(updateResntLink,1000)

});
