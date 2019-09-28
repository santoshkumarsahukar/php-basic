$(document).ready(function() {
    $('#submit').click(function(e) {
    // Initializing Variables With Form Element Values
    var name = $('#name').val();
   
    // Initializing Variables With Regular Expressions
    var name_regex = /^[a-zA-Z]+$/;
    // To Check Empty Form Fields.
    if (name.length == 0) {
    $('#head').text("* All fields are mandatory *"); // This Segment Displays The Validation Rule For All Fields
    $("#name").focus();
    return false;
    }
    // Validating Name Field.
    else if (!name.match(name_regex) || name.length == 0) {
    $('#p1').text("* For your name please use alphabets only *"); // This Segment Displays The Validation Rule For Name
    $("#name").focus();
    return false;
    }
    });
    });