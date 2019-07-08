<?php
$baseURL = get_site_url();
?>
</div>
<footer id="footer">
    <div class="footer-holder" role="complementary">
        <nav class="nav" role="navigation">
            <ul>
                <li><a href="/">HOME</a></li>
                <li><a href="<?php echo $baseURL . '/' . get_page_url_by_id(169) . '/'; ?>">ABOUT US</a></li>
                <li><a href="<?php echo $baseURL . '/' . get_page_url_by_id(298) . '/'; ?>">OUR WORK</a></li>
                <li><a href="<?php echo $baseURL . '/' . get_page_url_by_id(194) . '/'; ?>" target="_blank">Contact form</a></li>
                <li class="parent-drop">
                    <a class="all" href="#">SERVICES</a>
                    <div class="drop" style="display: none;">
                        <ul>
                            <li><a href="#">PSD to HTML Conversion</a></li>
                            <li><a href="#">PSD to Bootstrap</a></li>
                            <li><a href="#">PSD to Email Templates</a></li>
                        </ul>
                        <ul>
                            <li><a href="/magento-development.html">Magento Development</a></li>
                            <li><a href="/wordpress-development.html">WordPress Development</a></li>
                            <li><a href="/sketch-to-html.html">Sketch to HTML</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul>
                <li><a href="/faq.html">FAQ</a></li>
                <li><a href="/terms-and-conditions.html">Terms</a></li>
                <li><a href="/privacy-policy.html">Privacy Policy</a></li>
                <li><a href="/order-now.html">Order now</a></li>
                <li class="tel">888.724.9414</li>
            </ul>
        </nav>
        <div class="social-icons">
            <a href="#" class="fa fa-facebook" target="_blank"></a>
            <a href="#" class="fa fa-twitter" target="_blank"></a>
            <a href="#" class="fa fa-linkedin" target="_blank"></a>
            <a href="#" class="fa fa-instagram" target="_blank"></a>
        </div>
    </div>
    <div class="add" role="contentinfo">
        <span class="copyright">2005–2019 All Rights Reserved. <a href="/">P2H</a>, Inc.</span>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>