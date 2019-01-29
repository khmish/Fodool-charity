<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    

<form class="border border-light p-5" method="POST" action="/blogInsert" > 

@csrf
<p class="h4 mb-4 text-center">Blog</p>


    
    <input name="name" class="form-control mb-4" id="name" type="text" placeholder="name">

    <textarea name="description" class="form-control mb-4" id="description" placeholder="description"></textarea>

    <input name="type" class="form-control mb-4" id="type" type="text" placeholder="type">

    <input name="state" class="form-control mb-4" id="state" type="text" placeholder="state">

    <button class="btn btn-info btn-block" type="submit">Send</button>
</form>
</body></html>