$('#inquirysubmit').click( function(){
    console.log('click');
    namevalue = $('#nm').val();
    emailvalue = $('#em').val();
    console.log(namevalue, emailvalue);
    $('#nmval').html(namevalue);
    $('#emval').html(emailvalue);
} );


$('#inquirysubmit').click( function(){
    console.log('click');
    namevalue = $('#nm').val();
    emailvalue = $('#em').val();
    postMessagevalue = $('#msg').val();
    console.log(namevalue, emailvalue, postMessagevalue);
    $('#nmval').html(namevalue);
    $('#emval').html(emailvalue);
    $('#msgval').html(postMessagevalue);
} );