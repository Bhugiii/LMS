
document.addEventListener('DOMContentLoaded', () => {
    const loginButton = document.querySelector('.login-button');
    const signupButton = document.querySelector('.signup-button');
    const forgetPasswordLink = document.querySelector('.forget-password-link');

    loginButton.addEventListener('click', (event) => {
        event.preventDefault();

        const libraryId = document.querySelector('.input-field[placeholder="Library ID"]').value;
        const password = document.querySelector('.input-field[placeholder="Password"]').value;

        if (!libraryId || !password) {
            alert("Please enter both Library ID and Password");
            return;
        }

        
        if (libraryId === "admin" && password === "password123") {
            alert("Login successful!");
            
        } else {
            console.log("Invalid Library ID or Password");
          
        }
    });

    signupButton.addEventListener('click', (event) => {
        event.preventDefault();
        alert("Sign-up functionality is not implemented yet.");
        
    });

    forgetPasswordLink.addEventListener('click', (event) => {
        event.preventDefault();
        alert("Password reset functionality is not implemented yet.");
        
    });
});
