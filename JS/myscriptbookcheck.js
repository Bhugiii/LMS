document.getElementById("loginBtn").addEventListener("click", function() {
    alert("Login");
  });
  
  document.getElementById("signupBtn").addEventListener("click", function() {
    alert("Sign up");
  });
  
  document.getElementById("searchBtn").addEventListener("click", function() {
    var searchTerm = document.getElementById("searchInput").value;
    alert("Searching for: " + searchTerm);
  });                            

  document.getElementById("backButton").addEventListener("click", function() {
    alert("Back button clicked");
  });
  document.getElementById("confirmButton").addEventListener("click", function() {
    alert("Confirm button clicked");
  });