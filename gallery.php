<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Website - Gallery</title>

        <!-- links -->
    <link rel="stylesheet" href="css/gallery.css">
    <?php require('inc/links.php'); ?> 
    
</head>
    <body class="bg-light">

        <!-- header -->

        <?php require('inc/header.php'); ?>

        <div class="my-5 px-4">
            <h2 class="fw-bold h-font text-center">OUR SERVICES</h2>
            <div class="h-line bg-dark"></div>
            <p class="text-center mt-3">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                Sint repudiandae ea reiciendis <br> quaerat exercitationem 
                iure praesentium quae ipsa, dolor odit?
            </p>
        </div>

        <div class="lightbox">
            <div class="row">
                <div class="col-lg-6">
                    <img
                        src="images/gallery/room1.jpg"
                        data-mdb-img="images/gallery/des1.jpg"
                        alt="Table Full of Spices"
                        class="w-100 mb-2 mb-md-4 shadow-1-strong rounded"
                     />
                </div>
                <div class="col-lg-6">
                      <img
                        src="images/gallery/service.jpg"
                        data-mdb-img="images/gallery/1.jpg"
                        alt="Dark Roast Iced Coffee"
                        class="w-100 shadow-1-strong rounded"
                      />
                </div>
                <div class="col-lg-6">
                      <img
                        src="images/gallery/room2.jpg"
                        data-mdb-img="images/gallery/1.jpg"
                        alt="Dark Roast Iced Coffee"
                        class="w-100 shadow-1-strong rounded"
                      />
                </div>
                <div class="col-lg-6">
                      <img
                        src="images/gallery/4.jpg"
                        data-mdb-img="images/gallery/1.jpg"
                        alt="Dark Roast Iced Coffee"
                        class="w-100 shadow-1-strong rounded"
                      />
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-6 my-4">
                    <img
                        src="images/gallery/service2.jpg"
                        data-mdb-img="images/gallery/1.jpg"
                        alt="Table Full of Spices"
                        class="w-100 mb-2 mb-md-4 shadow-1-strong rounded"
                     />
                </div>
                <div class="col-lg-6 my-4">
                      <img
                        src="images/gallery/3.jpg"
                        data-mdb-img="images/gallery/1.jpg"
                        alt="Dark Roast Iced Coffee"
                        class="w-100 shadow-1-strong rounded"
                      />
                </div>
                <div class="col-lg-6">
                      <img
                        src="images/gallery/rest.jpg"
                        data-mdb-img="images/gallery/1.jpg"
                        alt="Dark Roast Iced Coffee"
                        class="w-100 shadow-1-strong rounded"
                      />
                </div>
                <div class="col-lg-6">
                      <img
                        src="images/gallery/gift.jpg"
                        data-mdb-img="images/gallery/1.jpg"
                        alt="Dark Roast Iced Coffee"
                        class="w-100 shadow-1-strong rounded"
                      />
                </div>
                
            </div>
        </div>
        <!-- footer -->

        <?php require('inc/footer.php'); ?>

        <script>
            let list = document.querySelectorAll('.list');
            let itemBox = document.querySelectorAll('.itemBox');

            for(let i = 0; i<list.length; i++){
                list[i].addEventListener('click', function(){
                    for(let j = 0; j<list.length; j++){
                        list[j].classList.remove('active');
                    }
                    this.classList.add('active');

                    let dataFilter = this.getAtrribute('data-filter');
                    for( let k = 0; k<itemBox.length; k++){
                        itemBox[k].classList.remove('active');
                        itemBox[k].classList.add('hide');

                        if(itemBox[k].getAttribute('data-item') == dataFilter || dataFilter == "all"){
                            itemBox[k].classList.remove('hide');
                            itemBox[k].classList.add('active');
                        }
                    }
                })
            }
        </script>
    </body>
</html>