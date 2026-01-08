document.getElementById("Addbooks").addEventListener("click", function(event) {
    event.preventDefault(); // Prevents the form from submitting
    var bookTitle = document.getElementById("bookTitle").value;
    var authorName = document.getElementById("authorName").value;
    console.log("Book Title: " + bookTitle);
    console.log("Author Name: " + authorName);
    // Add your code here to handle the book and author data
});