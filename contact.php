<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | The Shopper's Card</title>

    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <header id="contact-header">
        <?php
            session_start();
            if(isset($_SESSION['id'])){
                include 'Snippets/loggedInNav.php'; 
            } else {
                include 'Snippets/nav.php';
            }
        ?>
    </header>

    <div class="contact">
        <h2>Contact Us</h2>
        <h3>Frequently Asked Questions</h3>
        <p>Browse through our frequently asked questions. You might just find what you're looking for.</p>

        <div class="accordion" onclick="expand('q1')"; data-aos="flip-down">
            <div class="icon" ><i class="fa fa-plus-circle" aria-hidden="true"></i></div>
            <h3>How do I register for a Shopper's Card?</h3>
        </div>
        <div class="panel" id="q1">
            <p >Register online and wait 4-6 working days for your card to arrive by post or call our support line on 0800 402402. Our support team are available between 8am-6pm on weekdays, and between 8am-5pm on Saturdays.</p>
        </div>

        <div class="accordion" onclick="expand('q2')"; data-aos="flip-down">
            <div class="icon" ><i class="fa fa-plus-circle" aria-hidden="true"></i></div>
            <h3>What happens if I lose my card?</h3>
        </div>
        <div class="panel" id="q2">
            <p>You can login to your account and request a new one. We'll pause the rewards on your current card until you receive a new one. This will prevent anyone who may find your card from using your points.</p>
        </div>

        <div class="accordion" onclick="expand('q3')"; data-aos="flip-down">
            <div class="icon" ><i class="fa fa-plus-circle" aria-hidden="true"></i></div>
            <h3>Is my information protected?</h3>
        </div>
        <div class="panel" id="q3">
            <p>We take our customer's privacy very seriously but in order to provide the best service when you use your Shopper's Card, we will collect information relating to the purchases and transactions you undertake at BP in order to issue you with points and operate the loyalty scheme.</p>
        </div>

        <div class="accordion" onclick="expand('q4')"; data-aos="flip-down">
            <div class="icon" ><i class="fa fa-plus-circle" aria-hidden="true"></i></div>
            <h3>How many points per transaction do I earn?</h3>
        </div>
        <div class="panel" id="q4">
            <p>Points and rewards depend on each indepedent company. To find out more information, check out the Companies link once you've logged in.</p>
        </div>

        <div class="accordion" onclick="expand('q5')"; data-aos="flip-down">
            <div class="icon" ><i class="fa fa-plus-circle" aria-hidden="true"></i></div>
            <h3>How do I redeem my points?</h3>
        </div>
        <div class="panel" id="q5">
            <p> Points are redeemed through the independent company’s system, we simply make it easier for you to see how many points you've collected from each store which can later be exchanged for vouchers, gift cards, etc according to the store's policy.</p>
        </div>

        <div class="accordion" onclick="expand('q6')"; data-aos="flip-down">
            <div class="icon" ><i class="fa fa-plus-circle" aria-hidden="true"></i></div>
            <h3>How Can I contact you directly?</h3>
        </div>
        <div class="panel" id="q6">
            <div class="contact-form">
                <h3>Email Us Directly, We'll Get Back To You As Soon As Possible!</h3>
                <form name="contact" method="POST">
                    <input type="text" name="name" id="name" placeholder="Enter Your Name" required>
                    
                    <input type="email" name="email" id="email"  placeholder="Enter Your Email" required>
                    
                    <label for="message">Message:</label>
                    <textarea name="message" id="message" cols="10" rows="10" ></textarea>
                    <button type="submit" name="submit"> Submit </button>
                </form>
            </div>
        </div>

        <div class="contact-info">
            <p>Still having trouble? Drop Us A Call, we'd love to hear from you. <br>Monday - Friday: 8:00AM - 5:00PM <br> Saturday: 8:00AM - 4:00PM</p>
            <h3>Telephone Number: 0800 402402</h3>
        </div>
        
    </div>


    <?php include 'Snippets/footer.php' ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="Javascript/main.js"></script>
</body>
</html>