<html>
<head>
    <title>Create SMS Message</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body style="text-align: center">
    <h1>Create SMS Message</h1>
    <form method="POST" action="{{ route('sms.store',[$id ?? '']) }}">
        @csrf
        <label for="message">Message:</label><br>
        <input type="text" id="message" name="message" value="{{$message->message ?? ''}}"><br><br>
        <button type="submit">Submit</button>
    </form>
        <div id="messages"></div>
        <div id="total"></div>

</body>

   <script>
        // Fetch all messages
        $.get("/all-messages", function(data) {
            var messagesHtml = "<ul>";
            $.each(data, function(index, message) {
                messagesHtml += "<li>" + message.message + "</li>";
            });
            messagesHtml += "</ul>";
            $("#messages").html(messagesHtml);
        });
        
        // Fetch total number of messages
        $.get("/total-messages", function(data) {
            $("#total").html("Total messages: " + data.total);
        });
    </script>
</html>
