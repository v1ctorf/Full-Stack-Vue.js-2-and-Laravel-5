<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Vuebnb</title>
  <link rel="stylesheet" href="/node_modules/open-sans-all/css/open-sans.css">
  <link rel="stylesheet" href="/style.css" type="text/css">
</head>
<body>
	<div id="toolbar">
		<img class="icon" src="/logo.png">
		<h1>vuebnb</h1>
	</div>
	<div id="app">
		<div class="header">
			<div class="header-img" v-bind:style="headerImageStyle"></div>
		</div>
		<div class="container">
			<div class="heading">
				<h1>{{ title }}</h1>
				<p>{{ address }}</p>
			</div>
			<hr>
			<div class="about">
				<h3>About this listing</h3>
				<p>{{ about }}</p>
			</div>			
		</div>
	</div>
	<script src="/node_modules/vue/dist/vue.js"></script>
	<script src="/sample/data.js"></script>
	<script src="/app.js"></script>
</body>
</html>
