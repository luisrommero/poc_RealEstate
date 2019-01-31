$("#investForm").submit(function(e) {
    var form = $(this);
    var url = "../../../databases/ajax.php";
    console.log(form.serialize());

    $.ajax({
           type: "POST",
           url: url,
           data: form.serialize(), // serializes the form's elements.
           success: function(data)
           {
               alert(data); // show response from the php script.
           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});
