

function clearFields() 
{
    let result = confirm("Are you sure you want to clear the fields?");

    if(result)
    {
        document.getElementById('myForm').reset();
    }

}

function submitPost(event) 
{
    let title = document.getElementById('subject');
    let content = document.getElementById('blog');

    if (subject === '' || blog === '') 
    {
        if (subject === '') 
        {
            title.classList.add("missing-field");
        }

        if (blog === '') 
        {
            blog.classList.add("missing-field");
        } 


        alert("Please fill in all fields.");
        event.preventDefault();
    } 
    else 
    {
        alert("Post submitted successfully.");
    }
}

document.getElementById("clear").addEventListener('click', clearFields);
document.getElementById("post").addEventListener('click', submitPost);