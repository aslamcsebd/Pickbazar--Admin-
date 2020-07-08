<!-- The register Modal -->
<div class="modal" id="regModal">
   <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
         
         <!-- Modal Header -->
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
         </div>
         
         <!-- Modal body -->
         <div class="modal-body">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs d-none">
               <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#menu1">Menu 1</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
               </li>
            </ul>
            
            <!-- Tab panes -->
            <div class="tab-content">
               <div id="home" class="container tab-pane active"><br>
                  <div class="login-form">
                     <form action="/examples/actions/confirmation.php" method="post">
                        <h2 class="text-center">Log in</h2>
                        <div class="form-group">
                           <input type="text" class="form-control" placeholder="Username" required="required">
                        </div>
                        <div class="form-group">
                           <input type="password" class="form-control" placeholder="Password" required="required">
                        </div>
                        <div class="form-group">
                           <button type="submit" class="btn btn-primary btn-block">Log in</button>
                        </div>
                        <div class="clearfix">
                           <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
                           <a href="#" class="float-right">Forgot Password?</a>
                        </div>
                        <button class="btn btn-info btn-block"  data-toggle="tab" href="#menu1">Sign Up as a Bussiness</button>
                        <button class="btn btn-danger btn-block">Sign Up as a Company</button>
                     </form>
                     
                  </div>
               </div>
               <div id="menu1" class="container tab-pane fade"><br>
                  <form action="/action_page.php">
                     
                     <div class="form-group">
                        <input type="email" class="form-control" placeholder="Enter email" id="email">
                     </div>
                     <div class="form-group">
                        <input type="password" class="form-control" placeholder="Enter password" id="pass">
                     </div>
                     <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirm password" id="cpass">
                     </div>
                     <button type="submit" class="btn btn-primary" data-toggle="tab" href="#menu2">Submit</button>
                  </form>
               </div>
               <div id="menu2" class="container tab-pane fade"><br>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14756.821877112727!2d91.7830984!3d22.3836103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1593957851888!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                  
                  <form action="/action_page.php">
                     <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Company Name" id="cname">
                     </div>
                     <div class="form-group">
                        <input type="address" class="form-control" placeholder="Enter Company address" id="cadd">
                     </div>
                     <button class="btn btn-block btn-success" data-toggle="tab" href="#menu3">Next</button>
                  </form>
               </div>
               <div id="menu3" class="container tab-pane fade">
                  <form role="form">
                     <div class="form-group">
                        <label for="username">Full name (on the card)</label>
                        <input type="text" class="form-control" name="username" placeholder="" required="">
                        </div> <!-- form-group.// -->
                        
                        <div class="form-group">
                           <label for="cardNumber">Card number</label>
                           <div class="input-group">
                              <input type="text" class="form-control" name="cardNumber" placeholder="">
                              <div class="input-group-append">
                                 <span class="input-group-text text-muted">
                                    <i class="fab fa-cc-visa"></i>   <i class="fab fa-cc-amex"></i>
                                    <i class="fab fa-cc-mastercard"></i>
                                 </span>
                              </div>
                           </div>
                           </div> <!-- form-group.// -->
                           
                           <div class="row">
                              <div class="col-sm-8">
                                 <div class="form-group">
                                    <label><span class="hidden-xs">Expiration</span> </label>
                                    <div class="input-group">
                                       <input type="number" class="form-control" placeholder="MM" name="">
                                       <input type="number" class="form-control" placeholder="YY" name="">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
                                    <input type="number" class="form-control" required="">
                                    </div> <!-- form-group.// -->
                                 </div>
                                 </div> <!-- row.// -->
                                 <button class="subscribe btn btn-primary btn-block" type="button"> Confirm  </button>
                              </form>
                           </div>
                        </div>
                     </div>
                     
                     <!-- Modal footer -->
                     <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                     </div>-->
                     
                  </div>
               </div>
            </div>
            <!-- The register Modal -->