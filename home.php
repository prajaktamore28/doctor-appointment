<head>

      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<?php 
include 'admin/db_connect.php'; 
?>
<style>
#portfolio .img-fluid{
    width:100%
}
</style>


<!-- Extra CSS  -->

<style>

*{
    margin: 0;
    padding: 0;
}

/* Home Page CSS */
.title_style2{

    text-align: left;
    font-size: 40px;
    font-weight: bold;
    height: 55px;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    overflow: hidden;
    


}
.slider_style2{
    color: rgb(131, 15, 15);
    box-sizing: border-box;
    margin-left: 12px;
    animation: slider 6s linear infinite;

}

@keyframes slider {
    0%{ margin-top: -130px;  }
    30%{ margin-top: -130px;  }
    35%{ margin-top: 0px;  }
     65%{ margin-top: 0px;  }
    70%{ margin-top: 100px;  }
    100%{ margin-top: 100px;  }
}

.ani1{
    display:flex;
    align-items: center;
    justify-content: center;
    margin: 20px;
    
   

}

.ani1div1{
    display: flex;
    flex-direction: column;
    width: 200px;
    text-align: justify;
    margin-left: 20px;
    margin-right: 20px;
    margin-bottom: 20px;
    }
.ani1div1 h3{
    color:aquamarine;
    text-align: center;
    background-color: black;
}





</style>

        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end mb-4 page-title">
                    	<h3 class="text-white">Welcome to Your Doctor Guide</h3>
                        <hr class="divider my-4" />
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="index.php?page=doctors">Find a Doctor</a>

                    </div>
                    
                </div>
            </div>
        </header>
       
	<!-- <section class="page-section" id="menu">
        
    </section> -->

    <br><br>
   <div class="title_style2">
        Stay Home,
           <div class="slider_style2">
           <div>Stay Safe</div> 
           <div>Stop Corona</div>
            <div>Be Safe</div>
        
        </div>
</div>

<br>
<br>
<!-- Animation corona -->
<section class="ani1" >
 <img src="image/facemask.png" alt="" width="150" height = "150" data-aos="slide-right">
 
    
    <div class="ani1div1" data-aos="slide-left">
        <h3> <b>No Mask <br> NO Safety</b></h3>
        <p> Make sure your mask covers both your nose, mouth and chin. Clean your hands before you put your mask on, as well as before and after you take it off, and after you touch it at any time.</p>    
    </div>
</section>

<section class="ani1" >
 
    
    <div class="ani1div1" data-aos="slide-right">
        <h3> <b>Stay Home <br> Stay Safe</b></h3>
        <p> If you develop symptoms of covid 19, stay at home and self isolate immediately. if you have a positive test result but do not have symptioms, stay at home. </p>    
    </div>

    <img src="image/quarantine.png" alt="" width="150" height = "150" data-aos="slide-left">
 
</section>

<section class="ani1" >
 <img src="image/vaccine.png" alt="" width="150" height = "150" data-aos="slide-right">
 
    
    <div class="ani1div1" data-aos="slide-left">
        <h3> <b>Take Vaccine <br> Be Safe</b></h3>
        <p>The covid 19 vaccination will help keep you from getting the virus. Covid 19 vaccination is an important tool to help stop the pandemic</p>    
    </div>
</section>

<br><br>
    <div id="portfolio" class="container">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-lg-12 text-center">
                    <b><h1 class="mb-4"> <span> <b> Medical Specialties </b></span> </h1></b>
                    <hr class="divider">

                    </div>
                </div>
                <div class="row no-gutters">
                    <?php
                    $cats = $conn->query("SELECT * FROM medical_specialty order by id asc");
                                while($row=$cats->fetch_assoc()):
                    ?>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="index.php?page=doctors&sid=<?php echo $row['id'] ?>">
                            <img class="img-fluid" src="assets/img/<?php echo $row['img_path'] ?>" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-name"><?php echo $row['name'] ?></div>
                                <div class="project-category text-white">Find Doctor</div>
                            </div>
                        </a>
                    </div>
                    <?php endwhile; ?>
                    
                </div>
            </div>
        </div>

        <!-- Our aos data -->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

    <script>
        
        $('.view_prod').click(function(){
            uni_modal_right('Product','view_prod.php?id='+$(this).attr('data-id'))
        })
    </script>
	
        
