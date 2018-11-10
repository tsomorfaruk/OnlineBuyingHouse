<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="span5">
                <h3>Contact Form</h3>
                <div>
                    <form class="form-main" name="ajax-form" id="ajax-form" action="#" method="post">
                        <div id="ajaxsuccess">E-mail was successfully sent.</div>
                        <div class="error" id="err-name">Please enter name</div>
                        <input name="name" id="name" type="text" value="Name" onfocus="if(this.value == 'Name') this.value='';" onblur="if(this.value == '') this.value='Name';">

                        <div class="error" id="err-email">Please enter e-mail</div>
                        <div class="error" id="err-emailvld">E-mail is not a valid format</div>
                        <input  name="email" id="email" type="text" value="E-mail" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='E-mail';">

                        <div class="error" id="err-message">Please enter message</div>
                        <textarea  name="message" id="message" onfocus="if(this.value == 'Message') this.value='';" onblur="if(this.value == '') this.value='Message';">Message</textarea><br>
                        <div>
                            <div class="error" id="err-form">There was a problem validating the form please check!</div>
                            <div class="error" id="err-timedout">The connection to the server timed out!</div>
                            <div class="error" id="err-state"></div>
                        </div>
                        <button id="send" class="btn f-right">Send Message <i class="icon-ok"></i></button>
                    </form>
                </div>
            </div>
            <div class="span3 offset3">
                <h3>Address</h3>
                81 Sunnyvale Street<br>
                Los Angeles, CA 90185<br>
                United States<br>
                <br>
                <i class="icon-phone"></i>+01 880 555 999<br>
                <i class="icon-envelope"></i><a href="mailto:support@example.com">support@example.com</a><br>
                <i class="icon-home"></i><a href="#">www.example.com</a>

                <div class="row space40"></div>

                <a href="#" class="social-network sn2 behance"></a>
                <a href="#" class="social-network sn2 facebook"></a>
                <a href="#" class="social-network sn2 pinterest"></a>
                <a href="#" class="social-network sn2 flickr"></a>
                <a href="#" class="social-network sn2 dribbble"></a>
                <a href="#" class="social-network sn2 lastfm"></a>
                <a href="#" class="social-network sn2 forrst"></a>
                <a href="#" class="social-network sn2 xing"></a>
            </div>
        </div>

        <div class="row space50"></div>
        <div class="row">
            <div class="span6">
                <div class="logo-footer">
                    Design by <a href="https://www.freshdesignweb.com">freshDesignweb</a>
                </div>
            </div>
            <div class="span6 right">
                &copy; 2020. All rights reserved.
            </div>
        </div>

    </div>
</footer>