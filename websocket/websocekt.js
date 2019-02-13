var WebSocketServer = require('websocket').server;
var http = require('http');

var server = http.createServer(function (request, response) {
	// process HTTP request. Since we're writing just WebSockets
	// server we don't have to implement anything.
});
server.listen(2160, function () {
	console.log('server listen 2160');
});

// create the server
wsServer = new WebSocketServer({
	httpServer: server
});

// WebSocket server
wsServer.on('request', function (request) {
	var connection = request.accept(null, request.origin);
	console.log('request');

	// This is the most important callback for us, we'll handle
	// all messages from users here.
	connection.on('message', function (message) {
		console.log('message: ' + message.utf8Data);
		if (message.type === 'utf8') {
			// process WebSocket message
		}
	});

	connection.on('close', function (connection) {
		// close user connection
		console.log('close');
	});
});