
    


<!-- le formulaire de contact  -->
<section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                     <br>
                    <div class="contact_info">
                        <div class="info_item">
                            <!-- mettre une icone -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                            <h6>77000 Melun</h6>
                            <p>21 Boulevar de l'almont</p>
                        </div>
                        <div class="info_item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                            </svg>
                            <h6><a href="#">00 (440) 9865 562</a></h6>
                            <p>Ouvert du 9am to 6 pm</p>
                        </div>
                        <div class="info_item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                            </svg>
                            <h6><a href="#">support@colorlib.com</a></h6>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">  
                    <!-- le responsive -->
                    <div class="container py-4">
                        
                        <h5 style="color:red; font-size: 20px;"id="error"></h5> 
                        <!-- start contact -->
                        <form name="contactForm" action="contact/mailing" method="POST">
                           
                            
                            <!-- Name input -->
                            <div class="mb-3">
                                <label class="form-label" for="name">Name</label>
                                <input class="form-control" id="name" name="nome" type="text" placeholder="Name" />
                            </div>
                        
                            <!-- Email address input -->
                            <div class="mb-3">
                                <label class="form-label" for="emailAddress">Email Address</label>
                                <input class="form-control" id="emailAddress" name="emailAddress" type="email" placeholder="Email Address" />
                            </div>
                        
                            <!-- Message input -->
                            <div class="mb-3">
                                <label class="form-label" for="message">Message</label>
                                <textarea class="form-control" onKeyUp="saisie()" name="message" type="text" id="text"
                                placeholder="Message" style="height: 10rem;"></textarea>
                                <input class="form-control" name="restant">
                            </div>

                           
                            <!-- Form submit button -->
                             <div class="d-grid"> 
                                <button class="btn btn-primary btn-lg" name="submit" id="formsubmit" type="submit">Submit</button>
                             </div> 
                        
                        </form>
                        
                    </div>
                </div>
            
            </div>
        </div>
        <!-- fin de formulaire contact -->

        <!-- iframe map -->
        <div class="container">
            <!-- Map -->
            <div class="map">
                <div style="width: 100%"><iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=fr&amp;q=21%20boulevard%20de%20l'almont+(77000%20MELUN)&amp;t=k&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://visite360pro.com/">Visite virtuelle Google pour les pros</a></div>
            </div>
           
        </div>
</section>
   
<!-- fin de iframe -->

