<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 209px;
  background-color: rgba(0,0,0,0.8);
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color:rgba(237,234,235,0.9);
  padding: 16px;
  text-decoration: none;
  cursor: pointer;
  transition: 0.6s;
}
 
.sidebar a.active {
  background-color: rgb(0,0,0);
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 209px;
  background-color: white;
  padding: 1px 16px;
  height: 670px;
}


@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
</head>
<body>
</body>
</html>