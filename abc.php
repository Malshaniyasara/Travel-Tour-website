<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>


    <!--font eke-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<body><section class="booking">
    <h1 class="heading-title">Book your Trip!</h1>
    <form action="book_form.php" method="POST" class="book-form">
        <div class="flex">
           
        <div class="inputBox">
                <span> name:</span>
                <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="inputBox">
                <span> email:</span>
                <input type="email" placeholder="enter your email" name="email">
            </div>
            <div class="inputBox">
                <span> phone:</span>
                <input type="number" placeholder="enter your number" name="phone">
            </div>
            <div class="inputBox">
                <span> address:</span>
                <input type="text" placeholder="enter your address " name="address">
            </div>
            <div class="inputBox">
                <span> where to:</span>
                <input type="text" placeholder="place you want to visit" name="location">
            </div>
            <div class="inputBox">
                <span> how many:</span>
                <input type="number" placeholder="number of guest" name="guest">
            </div>
            <div class="inputBox">
                <span> arrivals:</span>
                <input type="date" name="arrivals">
            </div>
            <div class="inputBox">
                <span> leaving:</span>
                <input type="date" name="leaving">
            </div>
        </div>
        <input type="submit" value="submit" class="btn" name="send">
    </form>
</section>
<script src="script.js"></script>
</body>
</html>