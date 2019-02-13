<?php
/**
 * Created by PhpStorm.
 * User: Mariusz
 * Date: 13.02.2019
 * Time: 07:48.
 */
?><!DOCTYPE HTML>

<html>
<head>

	<script type="text/javascript">
		function WebSocketTest() {

			if ("WebSocket" in window) {
				console.log("WebSocket is supported by your Browser!");

				// Let us open a web socket
				var ws = new WebSocket("ws://127.0.0.1:2160/");

				ws.onopen = function () {

					// Web Socket is connected, send data using send()
					ws.send("Message to send");
					console.log("Message is sent...");
				};

				ws.onmessage = function (evt) {
					var received_msg = evt.data;
					console.log("Message is received...");
				};

				ws.onclose = function () {

					// websocket is closed.
					console.log("Connection is closed...");
				};
			} else {

				// The browser doesn't support WebSocket
				console.log("WebSocket NOT supported by your Browser!");
			}
		}
	</script>

</head>

<body>
<div id="sse">
	<a href="javascript:WebSocketTest()">Run WebSocket</a>
</div>

</body>
</html>