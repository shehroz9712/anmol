<!DOCTYPE html>
<head>
    <title>Pusher Test</title>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('a383c1a9976b3c17c087', {
            cluster: 'eu',
            encrypted: true
        });

        var channel = pusher.subscribe('App.Models.User.2');
        channel.bind('Illuminate\\Notifications\\Events\\BroadcastNotificationCreated', function(data) {
            alert(JSON.stringify(data));
        });
    </script>
</head>
<body>
<h1>Pusher Test</h1>
<p>
    Try publishing an event to channel <code>newMessage</code>
    with event name <code>new-meesage-event</code>.
</p>
</body>
