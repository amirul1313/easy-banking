<div class="body_wrapper body_color">
<div>
       	 <div class="contact1">Contact us....</div>
         <div class="contact_box"><p class="contact_box_text">Thanks for contacting us! We'll get back to you as soon as possible.</p></div>
         <div>
                <h3 style="color:green" >
                    <?php
                    $msg = $this->session->userdata('message');
                    if (isset($msg)) {
                        echo $msg;
                        $this->session->unset_userdata('message');
                    }
                    ?>
                </h3>
            </div>
         <div class="contact_form">
         	<form action="<?php echo base_url() ?>welcome/save_contact" method="post">
            	<div>Your Name</div>
                <input name="name" type="text" Required placeholder="Enter Your Name" size="30" style="height:25px;">
                <div class="contact_form_text">Email</div>
                <input name="email" type="email" Required placeholder="Enter Your Email Address" size="30" style="height:25px;">
                <div class="contact_form_text">Phone Number</div>
                <input name="number" type="number" Required placeholder="Enter Your Phone Number" size="30" style="height:25px;">
                <div class="contact_form_text">Comment</div>
                <textarea name="comment" cols="400" rows="5" ></textarea>
                <div class="contact_form_submit">
                    <input name="btn" type="reset" value="Reset" style="background:#0CF; height:30px">
                    <input name="btn" type="submit" value="Submit" style="background:#0CF; height:30px">
                </div>
            </form>
         </div>    
      </div>
     </div>