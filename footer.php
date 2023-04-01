<!-- START FOOTER -->

<footer>
    <div class="div-image">
        <a href="index.php#"><img src="images/cake-logo-white.png" width="120" height="80" alt="Cake Application" /></a>
    </div>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
    <div class="footer-inline-link">
        <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
        <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
        <a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a>
    </div>
</footer>

<!-- END FOOTER -->

<!-- START AFTER FOOTER -->

<div class="after-footer">
    <p>© <span id="year"></span> Designed And Developed By <a href="https://github.com/milosm00" target="_blank">MM</a>.</p>
</div>

<script>
    const year = document.querySelector("#year");
    let date = new Date();
    year.textContent = date.getFullYear();
</script>

<!-- END AFTER FOOTER -->

<style>
    
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif;
}

/* START FOOTER */

footer{
    display: flex;
    justify-content: flex-start;
    align-items: center;
    flex-direction: column;
    padding-top: 30px;
    padding-bottom: 30px;
    background-color: rgb(50, 50, 50);
    color: #fff;
}

.div-image{
    display: flex;
    justify-content: flex-start;
    align-items: center;
    width: 300px;
}

.div-image > a > img{
    border: 2px solid #fff;
    border-radius: 10px;
}

footer > p{
    max-width: 300px;
    font-size: 18px;
    text-align: left;
    padding-bottom: 20px;
}

.footer-inline-link{
    width: 300px;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    gap: 10px;
}

.footer-inline-link > a{
    display: flex;
    justify-content: center;
    align-items: center;

    font-size: 20px;
    width: 40px;
    height: 40px;
    background-color: #fff;
    color: #000;
    border-radius: 5px;
    text-decoration: none;
    transition: all 0.5s;
}

.footer-inline-link > a:hover{
    background-color: #db6750;
    color: #fff;
}

/* END FOOTER */

/* START AFTER FOOTER */

.after-footer{
    padding-top: 20px;
    padding-bottom: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgb(15, 15, 15);
    color: #fff;
}

.after-footer > p{
    text-align: center;
    font-size: 16px;
    font-weight: 700;
}

.after-footer > p > a{
    color: #fff;
    transition: all 0.5s;
}

.after-footer > p > a:hover{
    color:#db6750;
    text-decoration: none;
}

/* END AFTER FOOTER */

</style>

<?php // THIS IS PHP ?>