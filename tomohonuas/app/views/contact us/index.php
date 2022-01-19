<div id="contact" class="contact">
  <div class="container">
   <div class="row">
     <div class="col-md-12">
                <div class="titlepage">
                    <br>
                  <h2><?= $data['judul'] ?></h2>
                </div>
   </div>

</div>
    <h4 class="sent-notification"></h4>
    <div class="white_color">
      <div class="row">

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
           <form id="myForm" class="contact_bg">
            <div class="row">
              <div class="col-md-12">
              
                <div class="col-md-12">
                  <input id="name" class="contactus" placeholder="Your Name" type="text" name="Your Name">
                </div>
                <div class="col-md-12">
                  <input id="email" class="contactus" placeholder="Email" type="email" name="email">
                </div>
                <div class="col-md-12">
                  <input id="number" class="contactus" placeholder="Phone Number" type="text" name="Phone Number">
                </div>
                <div class="col-md-12">
                  <textarea id="message" class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <button type="button" onclick="sendEmail()" class="send">Send</button>
                </div>
              </div>
            </form>
          </div>
            </div>
      
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
<div id="map">
          </div>
           </div>
          </div>
        </div>

      </div>
    </div>
</div>
</div>