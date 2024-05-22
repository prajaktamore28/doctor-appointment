 <!-- Masthead-->


<style>
.img1{
    display: flex;
    align-items: center;
    justify-content: center;
    

}
.img1 img{
    width: 100px;
    height: 100px;
}


</style>

        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end mb-4" style="background: #0000002e;">
                    	 <h1 class="text-uppercase text-white font-weight-bold">About Us</h1>
                        <hr class="divider my-4" />
                    </div>
                    
                </div>
            </div>
        </header>

    <section class="page-section">
        <div class="container">
        <div class="img1">
    <h1>Your Doctor <span style="color:gold">Guide</span> </h1>
         
            <img src="image/stethoscope.png" alt="" srcset=""></div>
    <?php echo html_entity_decode($_SESSION['setting_about_content']) ?>        
            
        </div>
        </section>