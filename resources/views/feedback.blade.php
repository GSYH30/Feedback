<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="../css/style.css">
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container-feedback">
        <div class="box-feedback">
            <div class="dalam-box-feedback">
                <h1 class="title-feedback">Apa comment anda tentang web ini?</h1>
                <br>
                <div class="textarea">
                    <textarea placeholder="Ketik di sini..."></textarea>
                </div>
                <script>
                    const textarea = document.querySelector("textarea");
                    textarea.addEventListener("keyup", e =>{
                        textarea.style.height = "1px";
                        let scHeight = e.target.scrollHeight; 
                        textarea.style.height = `${scHeight}px`;
                       
                       
                    });
                </script>
               <div class="dalam-box">
                <div><span class="text"><a href="/index" class="transition-link">Back</a></span>
                <div class="right-position"><a href="#">Submit</a></div>
            </div>
            </div>
        </div> 
    </div>
</body>
</html> 