<!-- resources/views/read_sms.blade.php -->

<html>
<head>
    <title>Read SMS Message</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Read SMS Message</h1>
    <div id="message-container">
        <!-- SMS message will be displayed here -->
    </div>
    <button id="read-message-btn">Read Message</button> <!-- Button to trigger message reading -->

    <script>
        $(document).ready(function() {
            $("#read-message-btn").click(function() { // Add click event listener to the button
                $.get("/api/sms/read", function(data) {
                    $("#message-container").html("<p>" + data.message + "</p>");
                });
            });
        });
    </script>
</body>
</html>
