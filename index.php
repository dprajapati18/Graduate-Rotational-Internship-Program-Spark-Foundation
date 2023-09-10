<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- <div class="container"> -->

    <header>
        <?php include_once("nav.php")?>
        <div class="hero">
            <div class="content">
                <h2>Welcome To </h2>
                <h1>Spark - Basic Banking System</h1>
                <h2>By Dheeraj Prajapati</h2>
                <h4>#GRIPSEPTEMBER23</h4>
            </div>
        </div>
    </header>


    <section>
        <!-- Important Options -->

        <div class="grid-container container">
            <div>
                <div class="icon-image">
                    <img src="img/male-customer.png" alt="Customers">
                </div>
                <div class="text">
                    <a href="Customer.php">View all Customer</a>
                </div>
            </div>
            <div>
                <div class="icon-image">
                    <img src="img/money-transaction.png" alt="Customers">

                </div>
                <div class="text">
                    <a href="TransferMoney.php">Transfer Money</a>
                </div>
            </div>
            <div>
                <div class="icon-image">
                    <img src="img/transaction-history.png" alt="Customers">

                </div>
                <div class="text">
                    <a href="TransactionHistory.php">Transaction History</a>
                </div>
            </div>
        </div>

    </section>
    <!-- about us -->
    <section id="about" class="container">
        <div class="title">
            <h2>About Me</h2>
        </div>
        <div class="about">

            <div class="aboutme">
                <h2>Hi 👋, I'm Dheeraj Prajapati</h2>
                <h3>
                    A passionate Software developer from Nepal
                </h3>
                <h3>
                #GRIPSEPTEMBER23
                </h3>
                <div class="socialMedia">
                    <a href="https://github.com/dprajapati18"><i class="fa-brands fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/dheeraj-prajapati-21854221b/"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="https://www.facebook.com/dheerajprajapati1018/"><i class="fa-brands fa-square-facebook"></i></a>
                   
                </div>
                
            </div>
            <div class="myImg"></div>
        </div>

    </section>
    <!-- About us end -->

    <!-- Contact Us Section Start -->
    <section id="contact" class="container">
        <div class="title">
            <h2>Contact Us</h2>
        </div>
        <div class="contactForm">
            <form action="">
                <div class="form-field">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" required>
                </div>
                <div class="form-field">
                    <label for="email">Email:</label>
                    <input type="email" name="name" id="email" required>
                </div>
                <div class="form-field">
                    <label for="message">Message:</label>
                    <textarea name="message" id="message" rows="10" required></textarea>
                </div>
                <div class="btn-container">
                    
                    <input type="submit" value="Submit" class="btn">
                </div>
            </form>
        </div>
    </section>
    <script src="js/scrip.js"></script>
</body>

</html>