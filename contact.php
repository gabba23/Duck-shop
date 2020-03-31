<?php
    require "header.php";
?>

<!--<main class="main_2">
    <p>SEND E-MAIL</p>
    <form class="contact-form" action="contactform.php" method="post">
        <input type="text" name="name" placeholder="Full name">
        <input type="text" name="mail" placeholder="Your e-mail">
        <input type="text" name="subject" placeholder="Subject">
        <textarea name="message" placeholder="Message"></textarea>
        <button type="submit" name="submit">SEND MAIL</button>
    </form>

-->


	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				<h2>Contact Us</h2>
				<h4>Got questions about our ducks? Contact us!</h4>
			</div>
        </div>

        <form class="contact-form-container" action="contactform.php" method="post">
            <div class="col-md-9">
                <div class="contact-form">
                    <div class="form-group">
                    <label class="control-label col-sm-2" for="fname">First Name:</label>
                    <div class="col-sm-10">          
                        <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-sm-2" for="lname">Last Name:</label>
                    <div class="col-sm-10">          
                        <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    </div>
                    <label class="control-label col-sm-2" for="lname">Last Name:</label>
                    <div class="col-sm-10">          
                        <input type="text" class="form-control" id="lname" placeholder="Subject" name="subject">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-sm-2" for="comment">Message:</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="5" id="comment" placeholder="Message" name="message"></textarea>
                    </div>
                    </div>
                    <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                    </div>
                </div>
            </div>
        </form>
	</div>


</main>

<?php 
    require "footer.php";
?>