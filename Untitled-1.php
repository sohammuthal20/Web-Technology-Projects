<html>

<head>
    <title>Company Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }
    </style>
</head>

<body>

    <form id="companyRegistrationForm" onsubmit="submitForm(event)">
        <h2>Company Registration Form</h2>
        <label for="companyName">Company Name:</label>
        <input type="text" id="companyName" name="companyName" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phoneNumber">Phone Number:</label>
        <input type="tel" id="phoneNumber" name="phoneNumber" required>

        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea>

        <label for="industry">Industry:</label>
        <select id="industry" name="industry" required>
            <option value="it">IT</option>
            <option value="finance">Finance</option>
            <option value="manufacturing">Manufacturing</option>
            <option value="other">Other</option>
        </select>

        <input type="submit" value="Submit">
    </form>

    <script>
        function submitForm(event) {
            event.preventDefault();
            alert("Form submitted successfully");
        }
    </script>

</body>

</html>