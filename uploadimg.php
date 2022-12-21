<html>
<head>
    <title>Image upload</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <form action="upload.php"
          method="post"
          enctype="multipart/form-data">  

        <input type="file"
               name="my_image">

        <input type="submit"
               name="submit"
               value="upload">

</body>
</html>