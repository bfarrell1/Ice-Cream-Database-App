const iceCreamform = document.querySelector('#myform');

// this is a DIV in enter_new_record.php -
const response_content = document.querySelector('#response');

// this DIV contains the form in enter_new_record.php -
const iceCream_form = document.querySelector('#iceCream');
// show the DIV if it is hidden
iceCream_form.style.display = 'block';


// event handler
iceCreamform.onsubmit = (e) => {
    // gets the names and current values from the form
    const formData = new FormData(iceCreamform);
    // FETCH
    fetch('enter.php', {
        method: "POST",
        body: formData,
        credentials: "same-origin"
    })
    .then( (response) => {
        if (!response.ok) {
            throw new Error("Network response was not ok");
        }
        return response.text();
    })
    .then( (data) => {
        iceCream_form.style.display = 'none';
        response_content.innerHTML =
        "<p class='announce'>" + data + "</p>" +
        "<p class='middle'><a href='enter_new_record.php'>Return to the form</a></p>";
    })
    .catch( (error) => {
        console.error('Error in fetch: ', error);
    }); // end of FETCH
    return false;
}; // end sockform.onsubmit
