

function validateLoginForm() {
    var username = document.getElementById("login-username").value.trim();
    var pas = document.getElementById("login-password").value.trim();
    var userType = document.getElementById("user-type").value;

    if (username === "") {
        alert("Username is required.");
        return false;
    }
    if (pas === "") {
        alert("Please enter Password.");
        return false;
    } else if (pas.length < 8) {
        alert("Password must be at least 8 characters long.");
        return false;
    } else if (!(/[A-Z]/.test(pas))) {
        alert("Password must contain at least one uppercase letter.");
        return false;
    } else if (!(/[a-z]/.test(pas))) {
        alert("Password must contain at least one lowercase letter.");
        return false;
    } else if (!(/\d/.test(pas))) {
        alert("Password must contain at least one number.");
        return false;
    } else if (!(/[!@#$%^&*]/.test(pas))) {
        alert("Password must contain at least one special character (!@#$%^&*).");
        return false;
    }

    if (userType === "") {
        alert("Please select a user type.");
        return false;
    }

    return true;
}
function validateForm() {
                var companyId = document.getElementById("company-id").value.trim();
                var companyName = document.getElementById("company-name").value.trim();
                var contactPerson = document.getElementById("contact-person").value.trim();
                var address = document.getElementById("address").value.trim();
                var city = document.getElementById("city").value.trim();
                var email = document.getElementById("email").value.trim();
                var mobile = document.getElementById("mobile").value.trim();
                var areaOfWork = document.getElementById("area-of-work").value.trim();
                var username = document.getElementById("username").value.trim();
                var pas = document.getElementById("password").value.trim();

                if (companyId === "" || isNaN(companyId)) {
                    alert("Company ID must be a number.");
                    return false;
                }

                if (companyName === "") {
                    alert("Company Name is required.");
                    return false;
                }

                if (contactPerson === "") {
                    alert("Contact Person is required.");
                    return false;
                }

                if (address === "") {
                    alert("Address is required.");
                    return false;
                }

                if (city === "") {
                    alert("City is required.");
                    return false;
                }

                if (email === "" || !validateEmail(email)) {
                    alert("Valid Email is required.");
                    return false;
                }

                if (mobile === "" || isNaN(mobile)) {
                    alert("Mobile number must be a number.");
                    return false;
                }

                if (areaOfWork === "") {
                    alert("Area of Work is required.");
                    return false;
                }

                if (username === "") {
                    alert("Username is required.");
                    return false;
                }

                if (pas === "") {
                alert("Please enter Password.");
                return false;
            } else if (pas.length < 8) {
                alert("Password must be at least 8 characters long.");
                return false;
            } else if (!(/[A-Z]/.test(pas))) {
                alert("Password must contain at least one uppercase letter.");
                return false;
            } else if (!(/[a-z]/.test(pas))) {
                alert("Password must contain at least one lowercase letter.");
                return false;
            } else if (!(/\d/.test(pas))) {
                alert("Password must contain at least one number.");
                return false;
            } else if (!(/[!@#$%^&*]/.test(pas))) {
                alert("Password must contain at least one special character (!@#$%^&*).");
                return false;
            }

                return true;
            }

            function validateEmail(email) {
                var re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
                return re.test(email);
            }
            
            function validationjobseeker() {
            var userid = document.getElementById('userid').value;
            var username = document.getElementById('username').value;
            var address = document.getElementById('address').value;
            var city = document.getElementById('city').value;
            var email = document.getElementById('email').value;
            var phone = document.getElementById('phone').value;
            var qualification = document.getElementById('qualification').value;
            var gender = document.getElementById('gender').value;
            var birth = document.getElementById('birth').value;
            var password = document.getElementById('password').value;
            var repassword = document.getElementById('repassword').value;

            if (userid.trim() === '') {
                alert("User ID is required.");
                return false;
            }

            if (username.trim() === '') {
                alert("Username is required.");
                return false;
            }

            if (address.trim() === '') {
                alert("Address is required.");
                return false;
            }

            if (city.trim() === '') {
                alert("City is required.");
                return false;
            }

            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                alert("Please enter a valid email address.");
                return false;
            }

            var phonePattern = /^[0-9]{10,15}$/;
            if (!phonePattern.test(phone)) {
                alert("Phone number should be between 10 to 15 digits.");
                return false;
            }

            if (qualification.trim() === '') {
                alert("Highest qualification is required.");
                return false;
            }

            if (gender === '') {
                alert("Please select your gender.");
                return false;
            }

            if (birth === '') {
                alert("Date of birth is required.");
                return false;
            }

            if (password.trim() === '') {
                alert("Password is required.");
                return false;
            }
            if (password !== repassword) {
                alert("Passwords do not match.");
                return false;
            }

            return true;
        }