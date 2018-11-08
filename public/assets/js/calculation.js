$('#adultsNo').keyup(function () {

    var adultno = parseInt(this.value);
    var childno = parseInt($('#childrensNo').val());

    if(!isNaN(adultno) || !isNaN(childno)){
        var adultPrice = $('#adultPrice').val();
        var adultTotalPrice = adultno * adultPrice;
        var childPrice = $('#childrenPrice').val();

        var childTotalPrice = childno * childPrice;
        var totalPrice = adultTotalPrice + childTotalPrice;

        $('#showAdultsNo').text(adultno);
        $('#showChildrensNo').text(childno);
        $('#showTotalAmount').text(totalPrice);
    }
    else{
        $('#showAdultsNo').text(0);
        $('#showChildrensNo').text(0);
    }


});


$('#childrensNo').keyup(function () {
    var childno = parseInt(this.value);
    var adultno = parseInt($('#adultsNo').val());

    if(!isNaN(adultno) || !isNaN(childno)){
        var adultPrice = $('#adultPrice').val();
        var adultTotalPrice = adultno * adultPrice;
        var childPrice = $('#childrenPrice').val();

        var childTotalPrice = childno * childPrice;
        var totalPrice = adultTotalPrice + childTotalPrice;

        $('#showAdultsNo').text(adultno);
        $('#showChildrensNo').text(childno);
        $('#showTotalAmount').text(totalPrice);
    }
    else{
        $('#showAdultsNo').text(0);
        $('#showChildrensNo').text(0);
    }
});
