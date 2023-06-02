<footer>

    <nav class="footer-menu">
    <?php the_custom_logo();?>
        <?php wp_nav_menu(array(
            'theme_location' => 'footerMenu',
            'depth' => 1
        ));
        ?>
        <div>
            <h5>Flexifix</h5>
            <h5>
                Danmarksgade 86A
            </h5>
            <h5>9000 Aalborg</h5>
            <h5>
                CVR: 37692182</h5>
        </div>
        <div>
            <h4>Contact</h4>
            <h5>
+45 91 86 95 25 
flexi-fix@mail.com</h5>
        </div>
        <div>
            <h5>Opening hours

Monday - Friday: 10 - 18
Saturday: 10 - 14
Other times: Appointments only
Holidays: Usually open, but text us</h5>
        </div>
        <div>
            <img src="http://flexifix.local/wp-content/uploads/2023/05/vintage-bicycle.svg" alt="">
            <a href=""><h4>facebook</h4></a>

        </div>
    </nav>
</footer>

<?php wp_footer(); ?>
</body>

</html>