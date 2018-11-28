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
        $('#showAdultsNoInput').val(adultno);
        $('#showAdultsTotalCost').val(adultTotalPrice);
        $('#showChildrensNo').text(childno);
        $('#showChildrensNoInput').val(childno);
        $('#showChildrensTotalCost').val(childTotalPrice);
        $('#showTotalAmount').text(totalPrice);
        $('#showTotalAmountInput').val(totalPrice);
    }
    else{
        $('#showAdultsNo').text(0);
        $('#showAdultsNoInput').val(0);
        $('#showChildrensNo').text(0);
        $('#showChildrensNoInput').val(0);
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
        $('#showAdultsNoInput').val(adultno);
        $('#showAdultsTotalCost').val(adultTotalPrice);
        $('#showChildrensTotalCost').val(childTotalPrice);
        $('#showChildrensNo').text(childno);
        $('#showChildrensNoInput').val(childno);
        $('#showTotalAmount').text(totalPrice);
        $('#showTotalAmountInput').val(totalPrice);
    }
    else{
        $('#showAdultsNo').text(0);
        $('#showAdultsNoInput').val(0);
        $('#showChildrensNo').text(0);
        $('#showChildrensNoInput').val(0);
    }
});
