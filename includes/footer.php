<?php
// footer.php
?>
<!-- Footer Section -->
<footer>
    <div class="container">
        <div class="footer-content">
            <!-- Left Side - Logos and Links -->
            <div class="footer-left">

            <img src="../assets/image/logo.jpg" width="400px" height="400px" alt="AI Youth Alliance Logo">
                
                <p>Empowering the next generation of AI innovators and leaders.</p>
            </div>
            <!-- Center - Social Media Icons -->
            <div class="footer-center">
                <ul class="social-links">
                    <li><a href="https://www.facebook.com/aiyouthalliance" target="_blank"><i class="fab fa-facebook"></i> Facebook</a></li>
                    <li><a href="https://twitter.com/aiyouthalliance" target="_blank"><i class="fab fa-twitter"></i> Twitter</a></li>
                    <li><a href="https://www.linkedin.com/company/aiyouthalliance" target="_blank"><i class="fab fa-linkedin"></i> LinkedIn</a></li>
                    <li><a href="https://www.instagram.com/aiyouthalliance" target="_blank"><i class="fab fa-instagram"></i> Instagram</a></li>
                </ul>
            </div>

            <!-- Right Side - Copyright and Info -->
            <div class="footer-right">
                <p>&copy; 2024 AI Youth Alliance. All Rights Reserved.</p>
                <p><a href="/pages/privacy-policy.php">Privacy Policy</a> | <a href="/pages/terms-conditions.php">Terms & Condition</a></p>
            </div>
        </div>
    </div>
</footer>

<!-- Footer Styling (CSS) -->
<style>
    footer {
        background-color: #333;
        color: #fff;
        padding: 40px 0;
        font-size: 14px;
    }
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }
    .footer-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .footer-left {
        flex: 1;
        max-width: 33%;
    }
    .footer-logo {
        width: 150px;
        margin-bottom: 10px;
    }
    .footer-left p {
        font-size: 14px;
        color: #ccc;
    }
    .footer-center {
        flex: 1;
        text-align: center;
    }
    .social-links {
        list-style: none;
        padding: 0;
        display: flex;
        justify-content: center;
    }
    .social-links li {
        margin: 0 10px;
    }
    .social-links i {
        font-size: 30px;
        color: #fff;
    }
    .footer-right {
        flex: 1;
        text-align: right;
    }
    .footer-right p {
        margin: 5px 0;
    }
    .footer-right a {
        color: #fff;
        text-decoration: none;
        margin: 0 10px;
    }
    .footer-right a:hover {
        text-decoration: underline;
    }
</style>

<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
