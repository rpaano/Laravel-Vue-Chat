<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row" id="app">
            <ul class="list-group col-md-6 offset-md-3">
                <li class="list-group-item active">Chat Room</li>
                <message></message>
                <input type="text" class="list-group-item" placeholder="Type your message here..." v-model="message" @keyup="send">
              </ul>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>