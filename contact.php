<?php
include_once"navenduser.php";
?>

        <section id="contact" class="section contact">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="block">
                            <div class="heading wow fadeInUp">
                                <h2>Ask us Anything</h2>
                                <p>Do you know anybody, any single person who gets excited at the thought of helping others?<br> Well, we do… that’s us! While others get bummed when asked for help,<br> we get pumped to serve you! Team Zameen is ever ready to help you every step of the way.<br> We’ve deployed dedicated resources to assist, guide, attend and answer your queries throughout the week.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 offset-md-3 wow fadeInUp" data-wow-delay="0.3s">
                    	<div class="form-group">
                    	    <form action="contactdata.php" method="post" id="contact-form">
                    	        <div class="input-field">
                    	            <input type="text" class="form-control" placeholder="Your Name" name="cname">
                    	        </div>
                    	        <div class="input-field">
                    	            <input type="email" class="form-control" placeholder="Email Address" name="email">
                    	        </div>
                    	        <div class="input-field">
                    	            <textarea class="form-control" placeholder="Your Message" rows="3" name="msg"></textarea>
                    	        </div>
                    	        <button class="btn btn-send" type="submit" name="submit">Send me</button>
                    	    </form>

                    	    <div id="success">
                    	        <p>Your Message was sent successfully</p>
                    	    </div>
                    	    <div id="error">
                    	        <p>Your Message was not sent successfully</p>
                    	    </div>
                    	</div>
                    </div>
                </div>
            </div>
        </section>


<?php
include_once"footerenduser.php"
?>