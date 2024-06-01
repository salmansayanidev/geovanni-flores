<?php
include "header.php"
?>


<main>

    <section class="product-detail-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <div class="pro-detail-imgs-area">
                        <div class="position-relative">
                            <div class="btn-area-360 text-end">
                                <button type="button" class="btn-360">
                                    <img class="img-fluid" src="./assets/images/360-degrees 1.png" alt="">
                                </button>
                            </div>
                            <div class="swiper pro-dtl-slider mySwiper2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-fluid pro-detail-main-img" src="./assets/images/pro-detail-main-img.png" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid pro-detail-main-img" src="./assets/images/pro-detail-main-img.png" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid pro-detail-main-img" src="./assets/images/pro-detail-main-img.png" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid pro-detail-main-img" src="./assets/images/pro-detail-main-img.png" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid pro-detail-main-img" src="./assets/images/pro-detail-main-img.png" />
                                    </div>
                                </div>
                            </div>
                            <div thumbsSlider="" class="swiper pro-dtl-gllry-sldr mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-fluid pro-dtl-gllery-img" src="./assets/images/pro-detail-main-img.png" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid pro-dtl-gllery-img" src="./assets/images/pro-dtl-gllery-img-2.png" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid pro-dtl-gllery-img" src="./assets/images/pro-dtl-gllery-img-3.png" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid pro-dtl-gllery-img" src="./assets/images/pro-dtl-gllery-img-1.png" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid pro-dtl-gllery-img" src="./assets/images/pro-dtl-gllery-img-2.png" />
                                    </div>
                                </div>
                            </div>
                            <div class="pro-dtl-sldr-btn-area">
                                <button type="button" class="pro-dtl-sldr-btn pre">
                                    <i class="fa-solid fa-angle-left"></i>
                                </button>
                                <button type="button" class="pro-dtl-sldr-btn next">
                                    <i class="fa-solid fa-angle-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">

                    <form id="msform" action="">

                        <fieldset class="pro-detail-area lens">
                            <h3 class="select-lens-title">Select Lens Type:</h3>
                            <button type="button" class="Prescription-btn next action-button">
                                <div class="">
                                    <h4 class="">Prescription</h4>
                                    <p class="">Lens with vision correction</p>
                                </div>
                                <div class="">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </div>
                            </button>
                        </fieldset>
                        <fieldset class="pro-detail-area lens">
                            <div class="d-flex justify-content-start mb-4 align-items-center gap-4">
                                <button type="button" class="previous action-button-previous">
                                    <i class="bi bi-chevron-left"></i>
                                </button>
                                <h3 class="select-lens-title mb-0">Enter Prescription</h3>
                            </div>
                            <div class="prescription-img-area">
                                <img id="previewImg" class="img-fluid prescription-img" src="./assets/images/prescription-img.png" alt="Image Preview">
                            </div>
                            <div class="dragBox" id="dropArea" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);">
                                <div class="prescription-img-upload-area " >
                                    <div class="d-flex flex-column justify-content-center align-items-center gap-0 row-gap-3">
                                        <img class="img-fluid" src="./assets/images/upload-icon-img.png" alt="">
                                        <h4 class="drag-drop-title">Drag & Drop Image</h4>
                                        <span>or</span>
                                        <input class="d-none" type="file" name="" onchange="fileChangeHandler(event);" id="uploadFile">
                                        <label class="upload-prescrip-label" for="prescription-input">Upload your prescription image</label>
                                    </div>
                                </div>
                            </div>
                            <div class="drg-drop-or-manually d-flex justify-content-center align-items-center">
                                <span>or</span>
                            </div>
                            <button type="button" class="next action-button prescrip-manually-btn">
                                ENTER PRESCRIPTION MANUALLY
                            </button>
                        </fieldset>

                        <!-- <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Account Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 1 - 4</h2>
                                    </div>
                                </div> <label class="fieldlabels">Email: *</label> <input type="email" name="email" placeholder="Email Id" /> <label class="fieldlabels">Username: *</label> <input type="text" name="uname" placeholder="UserName" /> <label class="fieldlabels">Password: *</label> <input type="password" name="pwd" placeholder="Password" /> <label class="fieldlabels">Confirm Password: *</label> <input type="password" name="cpwd" placeholder="Confirm Password" />
                            </div> <input type="button" name="next" class="next action-button" value="Next" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Personal Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 2 - 4</h2>
                                    </div>
                                </div> <label class="fieldlabels">First Name: *</label> <input type="text" name="fname" placeholder="First Name" /> <label class="fieldlabels">Last Name: *</label> <input type="text" name="lname" placeholder="Last Name" /> <label class="fieldlabels">Contact No.: *</label> <input type="text" name="phno" placeholder="Contact No." /> <label class="fieldlabels">Alternate Contact No.: *</label> <input type="text" name="phno_2" placeholder="Alternate Contact No." />
                            </div> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Image Upload:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 3 - 4</h2>
                                    </div>
                                </div> <label class="fieldlabels">Upload Your Photo:</label> <input type="file" name="pic" accept="image/*"> <label class="fieldlabels">Upload Signature Photo:</label> <input type="file" name="pic" accept="image/*">
                            </div> <input type="button" name="next" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Finish:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 4 - 4</h2>
                                    </div>
                                </div> <br><br>
                                <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                <div class="row justify-content-center">
                                    <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                                </div> <br><br>
                                <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                        <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                    </div>
                                </div>
                            </div>
                        </fieldset> -->
                    </form>
                    <div class="pro-detail-area lens d-flex justify-content-start flex-column gap-0 row-gap-5">
                        <div class="">
                            <span class="mt-size-color d-flex justify-content-between align-items-center">Name: <strong>Maybach 1294</strong></span>
                        </div>
                        <div class="">
                            <span class="mt-size-color d-flex justify-content-between align-items-center">Material: <strong>Plastic</strong></span>
                        </div>
                        <div class="">
                            <span class="mt-size-color d-flex justify-content-between align-items-center">Size: <strong>Medium</strong></span>
                        </div>
                        <div class="">
                            <span class="mt-size-color d-flex justify-content-between align-items-center">Color: <strong>Black</strong></span>
                        </div>
                        <div class="">
                            <span class="mt-size-color d-flex justify-content-between align-items-center">Estimated Amount: <strong>$50.00</strong></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
   

</main>


<?php
include "footer.php"
?>
<script src="./assets/js/select-lens.js"></script>
<script src="./assets/js/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", {
        // loop: true,
        spaceBetween: 10,
        slidesPerView: 5,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".pro-dtl-slider", {
        // loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".pro-dtl-sldr-btn.next",
            prevEl: ".pro-dtl-sldr-btn.pre",
        },
        thumbs: {
            swiper: swiper,
        },
    });
</script>


<script>
    "use strict";

    document.getElementById('dropArea').addEventListener('click', function() {
        document.getElementById('uploadFile').click();
    });

    function fileChangeHandler(event) {
        var file = event.target.files[0];
        if (file) {
            var fileName = URL.createObjectURL(file);
            var previewImg = document.getElementById("previewImg");
            previewImg.setAttribute("src", fileName);
        }
    }

    function dragOverHandler(event) {
        event.preventDefault();
        document.getElementById('dropArea').className = 'draging dragBox';
    }

    function dropHandler(event) {
        event.preventDefault();
        document.getElementById('dropArea').className = 'dragBox';
        var file = event.dataTransfer.files[0];
        if (file) {
            var fileName = URL.createObjectURL(file);
            var previewImg = document.getElementById("previewImg");
            previewImg.setAttribute("src", fileName);
        }
    }
</script>