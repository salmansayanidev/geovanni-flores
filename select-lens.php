<?php
include "header.php"
    ?>


<main>

    <section class="product-detail-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <div class="pro-detail-imgs-area">
                        <div class="btn-area-360 text-end">
                            <button type="button" class="btn-360">
                                <img class="img-fluid" src="./assets/images/360-degrees 1.png" alt="">
                            </button>
                        </div>
                        <div class="position-relative">
                            <div class="swiper pro-dtl-slider mySwiper2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-fluid pro-detail-main-img"
                                            src="./assets/images/pro-dtl-gllery-img-7.png" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid pro-detail-main-img"
                                            src="./assets/images/pro-dtl-gllery-img-8.png" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid pro-detail-main-img"
                                            src="./assets/images/pro-dtl-gllery-img-9.png" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid pro-detail-main-img"
                                            src="./assets/images/pro-dtl-gllery-img-10.png" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid pro-detail-main-img"
                                            src="./assets/images/pro-dtl-gllery-img-7.png" />
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
                        <div thumbsSlider="" class="swiper pro-dtl-gllry-sldr mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="img-fluid pro-dtl-gllery-img"
                                        src="./assets/images/pro-dtl-gllery-img-7.png" />
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid pro-dtl-gllery-img"
                                        src="./assets/images/pro-dtl-gllery-img-8.png" />
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid pro-dtl-gllery-img"
                                        src="./assets/images/pro-dtl-gllery-img-9.png" />
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid pro-dtl-gllery-img"
                                        src="./assets/images/pro-dtl-gllery-img-10.png" />
                                </div>
                                <div class="swiper-slide position-relative">
                                    <img class="img-fluid pro-dtl-gllery-img"
                                        src="./assets/images/pro-dtl-gllery-img-7.png" />
                                    <span class="video-icon-area">
                                        <i class="bi bi-camera-video"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-lg-5">

                    <form id="msform" class="position-relative" action="">

                        <div id="step-1" class="pro-detail-area lens position-relative step step-1 active">
                            <h3 class="select-lens-title">Select Lens Type:</h3>
                            <div class="">
                                <input class="d-none select-lens-radio next" type="radio" name="prescription_radio"
                                    id="prescription-radio">
                                <label for="prescription-radio" class="prescription-label next-step-btn">
                                    <div class="">
                                        <h4 class="lens-radio-title">Prescription</h4>
                                        <p class="lens-radio-para">Lens with vision correction</p>
                                    </div>
                                    <div class="">
                                        <i class="fa-solid lens-arrow-icon fa-arrow-right-long"></i>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div id="step-2" class="pro-detail-area lens position-relative step step-2">
                            <button class="step-pre-btn" type="button">
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                            <h3 class="select-lens-title">Select an option</h3>
                            <div class="">
                                <input class="d-none select-lens-radio next" type="radio" name="customer_prescription"
                                    id="customer-or-prescription">
                                <label for="customer-or-prescription" class="prescription-label next-step-btn">
                                    <div class="">
                                        <h4 class="lens-radio-title">NEW CUSTOMER OR NEW PRESCRIPTION?</h4>
                                        <p class="lens-radio-para">You will need your current prescription and pupillary
                                            distance (PD).</p>
                                    </div>
                                    <div class="">
                                        <i class="fa-solid lens-arrow-icon fa-arrow-right-long"></i>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div id="step-3" class="pro-detail-area lens position-relative step step-3">
                            <button class="step-pre-btn" type="button">
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                            <h3 class="select-lens-title">Select a prescription type</h3>
                            <div class="mb-3">
                                <input class="d-none select-lens-radio next" value="singleVision" type="radio"
                                    name="prescription_type" id="single-vision">
                                <label for="single-vision" class="prescription-label next-step-btn">
                                    <div class="">
                                        <h4 class="lens-radio-title">SINGLE VISION</h4>
                                        <p class="lens-radio-para">Most common prescription that corrects for one
                                            distance (near or far).</p>
                                    </div>
                                    <div class="">
                                        <i class="fa-solid lens-arrow-icon fa-arrow-right-long"></i>
                                    </div>
                                </label>
                            </div>
                            <div class="mb-3">
                                <input class="d-none select-lens-radio next" value="progressive" type="radio"
                                    name="prescription_type" id="Progressive">
                                <label for="Progressive" class="prescription-label next-step-btn">
                                    <div class="">
                                        <h4 class="lens-radio-title">PROGRESSIVE</h4>
                                        <p class="lens-radio-para">Most common prescription that corrects for one
                                            distance (near or far).</p>
                                    </div>
                                    <div class="">
                                        <i class="fa-solid lens-arrow-icon fa-arrow-right-long"></i>
                                    </div>
                                </label>
                            </div>
                            <div class="">
                                <input class="d-none select-lens-radio next" value="flatTop" type="radio"
                                    name="prescription_type" id="Flat-Top-or-Bifocal">
                                <label for="Flat-Top-or-Bifocal" class="prescription-label next-step-btn">
                                    <div class="">
                                        <h4 class="lens-radio-title">FLAT TOP OR BIFOCAL</h4>
                                        <p class="lens-radio-para">Most common prescription that corrects for one
                                            distance (near or far).</p>
                                    </div>
                                    <div class="">
                                        <i class="fa-solid lens-arrow-icon fa-arrow-right-long"></i>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div id="step-4" class="pro-detail-area lens position-relative step step-4">
                            <button class="step-pre-btn" type="button">
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                            <div class="">
                                <!-- <button type="button" class="previous action-button-previous">
                                    <i class="bi bi-chevron-left"></i>
                                </button> -->
                                <h3 class="select-lens-title">Enter Prescription</h3>
                            </div>
                            <div class="prescription-img-area">
                                <img id="previewImg" class="img-fluid prescription-img"
                                    src="./assets/images/prescription-img.png" alt="Image Preview">
                            </div>
                            <div class="dragBox" id="dropArea" ondrop="dropHandler(event);"
                                ondragover="dragOverHandler(event);">
                                <div class="prescription-img-upload-area ">
                                    <div
                                        class="d-flex flex-column justify-content-center align-items-center gap-0 row-gap-3">
                                        <img class="img-fluid" src="./assets/images/upload-icon-img.png" alt="">
                                        <h4 class="drag-drop-title">Drag & Drop Image</h4>
                                        <span>or</span>
                                        <input class="d-none" type="file" name="" onchange="fileChangeHandler(event);"
                                            id="uploadFile">
                                        <label class="upload-prescrip-label" for="prescription-input">Upload your
                                            prescription image</label>
                                    </div>
                                </div>
                            </div>
                            <div class="drg-drop-or-manually d-flex justify-content-center align-items-center">
                                <span>or</span>
                            </div>
                            <button type="button" class="prescrip-manually-btn next-step-btn">
                                ENTER PRESCRIPTION MANUALLY
                            </button>
                            <div class="mt-5">
                                <h4 class="lens-radio-title">Have Prism Values?</h4>
                                <p class="lens-radio-para">The scan can't capture prism values. Please enter manually
                                    from your prescription if noted.</p>
                            </div>
                        </div>

                        <div id="step-5" class="pro-detail-area lens position-relative step step-5">
                            <button class="step-pre-btn" type="button">
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                            <div class="">
                                <h3 class="select-lens-title">Enter your prescription</h3>
                                <div class="d-flex justify-content-start align-items-center gap-3 mb-5">
                                    <h4 class="lens-radio-title mb-0">PD - Pupillary Distance</h4>
                                    <button class="question-mark-btn" type="button">
                                        <i class="fa-solid fa-circle-question"></i>
                                    </button>
                                </div>
                                <div class="pupillary-distance-radio-area">
                                    <div class="">
                                        <label class="pupillary-distance-label" for="pupillary-distance-one">
                                            <input checked class="pupillary-distance-radio" value="one_number"
                                                type="radio" name="pupillary_distance_radio"
                                                id="pupillary-distance-one">
                                            One Number
                                        </label>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center gap-5">
                                        <label class="pupillary-distance-label" for="pupillary-distance-two">
                                            <input class="pupillary-distance-radio" type="radio" value="two_number"
                                                name="pupillary_distance_radio" id="pupillary-distance-two">
                                            Two Numbers
                                        </label>
                                        <button class="question-mark-btn" type="button">
                                            <i class="fa-solid fa-circle-question"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="pupillary-distance-text-area mb-4">
                                    <p class="lens-radio-para mb-5">For a single PD or two PD numbers over 40 mm, enter
                                        the larger number in the One Number PD field.</p>
                                    <p class="lens-radio-para mb-5">For two PDs under 40 mm, choose the Two Number PD
                                        field.</p>
                                    <p class="lens-radio-para">Don't see your PD? This frame may not be compatible with
                                        your prescription. <a class="text-decoration-none" href="#">Shop other
                                            frames</a> that may be a better fit.</p>
                                </div>

                                <div id="one-number-select" class="">
                                    <select id="pupillary-distance-select-1"
                                        class="form-select lens-select pupillary-distance-select"
                                        aria-label="Default select example">
                                        <option selected disabled="" value="">Enter your pupillary distance</option>
                                        <option value="54">54</option>
                                        <option value="55">55</option>
                                        <option value="56">56</option>
                                        <option value="57">57</option>
                                        <option value="58">58</option>
                                        <option value="59">59</option>
                                        <option value="60">60</option>
                                        <option value="61">61</option>
                                        <option value="62">62</option>
                                        <option value="63">63</option>
                                        <option value="64">64</option>
                                        <option value="65">65</option>
                                        <option value="66">66</option>
                                        <option value="67">67</option>
                                        <option value="68">68</option>
                                        <option value="69">69</option>
                                        <option value="70">70</option>
                                        <option value="71">71</option>
                                        <option value="72">72</option>
                                        <option value="73">73</option>
                                        <option value="74">74</option>
                                    </select>
                                    <h4 class="select-lens-sm-title mt-4 mb-4 text-center">
                                        Don't know your Pupillary Distance (PD)?
                                        <a class="text-decoration-none" href="#">
                                            FIND YOUR PD
                                            <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                    </h4>
                                </div>

                                <div id="two-numbers-select" class="mb-4 select-flex-list">
                                    <div class="select-flex">
                                        <select id="pupillary-distance-select-2"
                                            class="form-select lens-select pupillary-distance-select"
                                            aria-label="Default select example">
                                            <option selected disabled="" value="">Right</option>
                                            <option value="17.5" class="sl-notranslate">17.5</option>
                                            <option value="18.0" class="sl-notranslate">18.0</option>
                                            <option value="18.5" class="sl-notranslate">18.5</option>
                                            <option value="19.0" class="sl-notranslate">19.0</option>
                                            <option value="19.5" class="sl-notranslate">19.5</option>
                                            <option value="20.0" class="sl-notranslate">20.0</option>
                                            <option value="20.5" class="sl-notranslate">20.5</option>
                                            <option value="21.0" class="sl-notranslate">21.0</option>
                                            <option value="21.5" class="sl-notranslate">21.5</option>
                                            <option value="22.0" class="sl-notranslate">22.0</option>
                                            <option value="22.5" class="sl-notranslate">22.5</option>
                                            <option value="23.0" class="sl-notranslate">23.0</option>
                                            <option value="23.5" class="sl-notranslate">23.5</option>
                                            <option value="24.0" class="sl-notranslate">24.0</option>
                                            <option value="24.5" class="sl-notranslate">24.5</option>
                                            <option value="25.0" class="sl-notranslate">25.0</option>
                                            <option value="25.5" class="sl-notranslate">25.5</option>
                                            <option value="26.0" class="sl-notranslate">26.0</option>
                                            <option value="26.5" class="sl-notranslate">26.5</option>
                                            <option value="27.0" class="sl-notranslate">27.0</option>
                                            <option value="27.5" class="sl-notranslate">27.5</option>
                                            <option value="28.0" class="sl-notranslate">28.0</option>
                                            <option value="28.5" class="sl-notranslate">28.5</option>
                                            <option value="29.0" class="sl-notranslate">29.0</option>
                                            <option value="29.5" class="sl-notranslate">29.5</option>
                                            <option value="30.0" class="sl-notranslate">30.0</option>
                                            <option value="30.5" class="sl-notranslate">30.5</option>
                                            <option value="31.0" class="sl-notranslate">31.0</option>
                                            <option value="31.5" class="sl-notranslate">31.5</option>
                                            <option value="32.0" class="sl-notranslate">32.0</option>
                                            <option value="32.5" class="sl-notranslate">32.5</option>
                                            <option value="33.0" class="sl-notranslate">33.0</option>
                                            <option value="33.5" class="sl-notranslate">33.5</option>
                                            <option value="34.0" class="sl-notranslate">34.0</option>
                                            <option value="34.5" class="sl-notranslate">34.5</option>
                                            <option value="35.0" class="sl-notranslate">35.0</option>
                                            <option value="35.5" class="sl-notranslate">35.5</option>
                                            <option value="36.0" class="sl-notranslate">36.0</option>
                                            <option value="36.5" class="sl-notranslate">36.5</option>
                                            <option value="37.0" class="sl-notranslate">37.0</option>
                                            <option value="37.5" class="sl-notranslate">37.5</option>
                                            <option value="38.0" class="sl-notranslate">38.0</option>
                                            <option value="38.5" class="sl-notranslate">38.5</option>
                                            <option value="39.0" class="sl-notranslate">39.0</option>
                                            <option value="39.5" class="sl-notranslate">39.5</option>
                                            <option value="40.0" class="sl-notranslate">40.0</option>
                                        </select>
                                    </div>
                                    <div class="select-flex">
                                        <select id="pupillary-distance-select-3"
                                            class="form-select lens-select pupillary-distance-select"
                                            aria-label="Default select example">
                                            <option selected disabled="" value="">Left</option>
                                            <option value="17.5" class="sl-notranslate">17.5</option>
                                            <option value="18.0" class="sl-notranslate">18.0</option>
                                            <option value="18.5" class="sl-notranslate">18.5</option>
                                            <option value="19.0" class="sl-notranslate">19.0</option>
                                            <option value="19.5" class="sl-notranslate">19.5</option>
                                            <option value="20.0" class="sl-notranslate">20.0</option>
                                            <option value="20.5" class="sl-notranslate">20.5</option>
                                            <option value="21.0" class="sl-notranslate">21.0</option>
                                            <option value="21.5" class="sl-notranslate">21.5</option>
                                            <option value="22.0" class="sl-notranslate">22.0</option>
                                            <option value="22.5" class="sl-notranslate">22.5</option>
                                            <option value="23.0" class="sl-notranslate">23.0</option>
                                            <option value="23.5" class="sl-notranslate">23.5</option>
                                            <option value="24.0" class="sl-notranslate">24.0</option>
                                            <option value="24.5" class="sl-notranslate">24.5</option>
                                            <option value="25.0" class="sl-notranslate">25.0</option>
                                            <option value="25.5" class="sl-notranslate">25.5</option>
                                            <option value="26.0" class="sl-notranslate">26.0</option>
                                            <option value="26.5" class="sl-notranslate">26.5</option>
                                            <option value="27.0" class="sl-notranslate">27.0</option>
                                            <option value="27.5" class="sl-notranslate">27.5</option>
                                            <option value="28.0" class="sl-notranslate">28.0</option>
                                            <option value="28.5" class="sl-notranslate">28.5</option>
                                            <option value="29.0" class="sl-notranslate">29.0</option>
                                            <option value="29.5" class="sl-notranslate">29.5</option>
                                            <option value="30.0" class="sl-notranslate">30.0</option>
                                            <option value="30.5" class="sl-notranslate">30.5</option>
                                            <option value="31.0" class="sl-notranslate">31.0</option>
                                            <option value="31.5" class="sl-notranslate">31.5</option>
                                            <option value="32.0" class="sl-notranslate">32.0</option>
                                            <option value="32.5" class="sl-notranslate">32.5</option>
                                            <option value="33.0" class="sl-notranslate">33.0</option>
                                            <option value="33.5" class="sl-notranslate">33.5</option>
                                            <option value="34.0" class="sl-notranslate">34.0</option>
                                            <option value="34.5" class="sl-notranslate">34.5</option>
                                            <option value="35.0" class="sl-notranslate">35.0</option>
                                            <option value="35.5" class="sl-notranslate">35.5</option>
                                            <option value="36.0" class="sl-notranslate">36.0</option>
                                            <option value="36.5" class="sl-notranslate">36.5</option>
                                            <option value="37.0" class="sl-notranslate">37.0</option>
                                            <option value="37.5" class="sl-notranslate">37.5</option>
                                            <option value="38.0" class="sl-notranslate">38.0</option>
                                            <option value="38.5" class="sl-notranslate">38.5</option>
                                            <option value="39.0" class="sl-notranslate">39.0</option>
                                            <option value="39.5" class="sl-notranslate">39.5</option>
                                            <option value="40.0" class="sl-notranslate">40.0</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="prescription-values-area">
                                    <div class="bg-white rounded-3 py-4 px-2 mb-5">
                                        <h5 class="pupillary-distance-label mb-2 text-center d-block">Select your
                                            prescription values</h5>
                                        <p class="lens-radio-para text-center">A plus (+) means difficulty seeing near,
                                            and a <br> minus (-) means difficulty seeing far.</p>
                                    </div>
                                    <div class="d-flex align-items-center mb-4 justify-content-between">
                                        <h4 class="lens-radio-title mb-0">Right Eye - OD</h4>
                                        <button class="question-mark-btn" type="button">
                                            <i class="fa-solid fa-circle-question"></i>
                                        </button>
                                    </div>
                                    <div class="select-flex-list">

                                        <div class="select-flex">
                                            <label class="pupillary-distance-label mb-3">
                                                SPH
                                            </label>
                                            <select class="form-select lens-select only-lencs" aria-label="Default select example">
                                                <option selected disabled value="">0.00</option>
                                                <option value="-20.00">-20.00</option>
                                                <option value="-19.75">-19.75</option>
                                                <option value="-19.50">-19.50</option>
                                                <option value="-19.25">-19.25</option>
                                                <option value="-19.00">-19.00</option>
                                                <option value="-18.75">-18.75</option>
                                                <option value="-18.50">-18.50</option>
                                                <option value="-18.25">-18.25</option>
                                                <option value="-18.00">-18.00</option>
                                                <option value="-17.75">-17.75</option>
                                                <option value="-17.50">-17.50</option>
                                                <option value="-17.25">-17.25</option>
                                                <option value="-17.00">-17.00</option>
                                                <option value="-16.75">-16.75</option>
                                                <option value="-16.50">-16.50</option>
                                                <option value="-16.25">-16.25</option>
                                                <option value="-16.00">-16.00</option>
                                                <option value="-15.75">-15.75</option>
                                                <option value="-15.50">-15.50</option>
                                                <option value="-15.25">-15.25</option>
                                                <option value="-15.00">-15.00</option>
                                                <option value="-14.75">-14.75</option>
                                                <option value="-14.50">-14.50</option>
                                                <option value="-14.25">-14.25</option>
                                                <option value="-14.00">-14.00</option>
                                                <option value="-13.75">-13.75</option>
                                                <option value="-13.50">-13.50</option>
                                                <option value="-13.25">-13.25</option>
                                                <option value="-13.00">-13.00</option>
                                                <option value="-12.75">-12.75</option>
                                                <option value="-12.50">-12.50</option>
                                                <option value="-12.25">-12.25</option>
                                                <option value="-12.00">-12.00</option>
                                                <option value="-11.75">-11.75</option>
                                                <option value="-11.50">-11.50</option>
                                                <option value="-11.25">-11.25</option>
                                                <option value="-11.00">-11.00</option>
                                                <option value="-10.75">-10.75</option>
                                                <option value="-10.50">-10.50</option>
                                                <option value="-10.25">-10.25</option>
                                                <option value="-10.00">-10.00</option>
                                                <option value="-9.75">-9.75</option>
                                                <option value="-9.50">-9.50</option>
                                                <option value="-9.25">-9.25</option>
                                                <option value="-9.00">-9.00</option>
                                                <option value="-8.75">-8.75</option>
                                                <option value="-8.50">-8.50</option>
                                                <option value="-8.25">-8.25</option>
                                                <option value="-8.00">-8.00</option>
                                                <option value="-7.75">-7.75</option>
                                                <option value="-7.50">-7.50</option>
                                                <option value="-7.25">-7.25</option>
                                                <option value="-7.00">-7.00</option>
                                                <option value="-6.75">-6.75</option>
                                                <option value="-6.50">-6.50</option>
                                                <option value="-6.25">-6.25</option>
                                                <option value="-6.00">-6.00</option>
                                                <option value="-5.75">-5.75</option>
                                                <option value="-5.50">-5.50</option>
                                                <option value="-5.25">-5.25</option>
                                                <option value="-5.00">-5.00</option>
                                                <option value="-4.75">-4.75</option>
                                                <option value="-4.50">-4.50</option>
                                                <option value="-4.25">-4.25</option>
                                                <option value="-4.00">-4.00</option>
                                                <option value="-3.75">-3.75</option>
                                                <option value="-3.50">-3.50</option>
                                                <option value="-3.25">-3.25</option>
                                                <option value="-3.00">-3.00</option>
                                                <option value="-2.75">-2.75</option>
                                                <option value="-2.50">-2.50</option>
                                                <option value="-2.25">-2.25</option>
                                                <option value="-2.00">-2.00</option>
                                                <option value="-1.75">-1.75</option>
                                                <option value="-1.50">-1.50</option>
                                                <option value="-1.25">-1.25</option>
                                                <option value="-1.00">-1.00</option>
                                                <option value="-0.75">-0.75</option>
                                                <option value="-0.50">-0.50</option>
                                                <option value="-0.25">-0.25</option>
                                                <option value="0.00">0.00</option>
                                                <option value="+0.25">+0.25</option>
                                                <option value="+0.50">+0.50</option>
                                                <option value="+0.75">+0.75</option>
                                                <option value="+1.00">+1.00</option>
                                                <option value="+1.25">+1.25</option>
                                                <option value="+1.50">+1.50</option>
                                                <option value="+1.75">+1.75</option>
                                                <option value="+2.00">+2.00</option>
                                                <option value="+2.25">+2.25</option>
                                                <option value="+2.50">+2.50</option>
                                                <option value="+2.75">+2.75</option>
                                                <option value="+3.00">+3.00</option>
                                                <option value="+3.25">+3.25</option>
                                                <option value="+3.50">+3.50</option>
                                                <option value="+3.75">+3.75</option>
                                                <option value="+4.00">+4.00</option>
                                                <option value="+4.25">+4.25</option>
                                                <option value="+4.50">+4.50</option>
                                                <option value="+4.75">+4.75</option>
                                                <option value="+5.00">+5.00</option>
                                                <option value="+5.25">+5.25</option>
                                                <option value="+5.50">+5.50</option>
                                                <option value="+5.75">+5.75</option>
                                                <option value="+6.00">+6.00</option>
                                                <option value="+6.25">+6.25</option>
                                                <option value="+6.50">+6.50</option>
                                                <option value="+6.75">+6.75</option>
                                                <option value="+7.00">+7.00</option>
                                                <option value="+7.25">+7.25</option>
                                                <option value="+7.50">+7.50</option>
                                                <option value="+7.75">+7.75</option>
                                                <option value="+8.00">+8.00</option>
                                                <option value="+8.25">+8.25</option>
                                                <option value="+8.50">+8.50</option>
                                                <option value="+8.75">+8.75</option>
                                                <option value="+9.00">+9.00</option>
                                                <option value="+9.25">+9.25</option>
                                                <option value="+9.50">+9.50</option>
                                                <option value="+9.75">+9.75</option>
                                                <option value="+10.00">+10.00</option>
                                                <option value="+10.25">+10.25</option>
                                                <option value="+10.50">+10.50</option>
                                                <option value="+10.75">+10.75</option>
                                                <option value="+11.00">+11.00</option>
                                                <option value="+11.25">+11.25</option>
                                                <option value="+11.50">+11.50</option>
                                                <option value="+11.75">+11.75</option>
                                                <option value="+12.00">+12.00</option>
                                            </select>

                                        </div>

                                        <div class="select-flex">
                                            <label class="pupillary-distance-label mb-3">
                                                CYL
                                            </label>
                                            <select class="form-select lens-select only-lencs" aria-label="Default select example">
                                                <option selected disabled value="">0.00</option>
                                                <option value="-6.00">-6.00</option>
                                                <option value="-5.75">-5.75</option>
                                                <option value="-5.50">-5.50</option>
                                                <option value="-5.25">-5.25</option>
                                                <option value="-5.00">-5.00</option>
                                                <option value="-4.75">-4.75</option>
                                                <option value="-4.50">-4.50</option>
                                                <option value="-4.25">-4.25</option>
                                                <option value="-4.00">-4.00</option>
                                                <option value="-3.75">-3.75</option>
                                                <option value="-3.50">-3.50</option>
                                                <option value="-3.25">-3.25</option>
                                                <option value="-3.00">-3.00</option>
                                                <option value="-2.75">-2.75</option>
                                                <option value="-2.50">-2.50</option>
                                                <option value="-2.25">-2.25</option>
                                                <option value="-2.00">-2.00</option>
                                                <option value="-1.75">-1.75</option>
                                                <option value="-1.50">-1.50</option>
                                                <option value="-1.25">-1.25</option>
                                                <option value="-1.00">-1.00</option>
                                                <option value="-0.75">-0.75</option>
                                                <option value="-0.50">-0.50</option>
                                                <option value="-0.25">-0.25</option>
                                                <option value="0.00">0.00</option>
                                                <option value="+0.25">+0.25</option>
                                                <option value="+0.50">+0.50</option>
                                                <option value="+0.75">+0.75</option>
                                                <option value="+1.00">+1.00</option>
                                                <option value="+1.25">+1.25</option>
                                                <option value="+1.50">+1.50</option>
                                                <option value="+1.75">+1.75</option>
                                                <option value="+2.00">+2.00</option>
                                                <option value="+2.25">+2.25</option>
                                                <option value="+2.50">+2.50</option>
                                                <option value="+2.75">+2.75</option>
                                                <option value="+3.00">+3.00</option>
                                                <option value="+3.25">+3.25</option>
                                                <option value="+3.50">+3.50</option>
                                                <option value="+3.75">+3.75</option>
                                                <option value="+4.00">+4.00</option>
                                                <option value="+4.25">+4.25</option>
                                                <option value="+4.50">+4.50</option>
                                                <option value="+4.75">+4.75</option>
                                                <option value="+5.00">+5.00</option>
                                                <option value="+5.25">+5.25</option>
                                                <option value="+5.50">+5.50</option>
                                                <option value="+5.75">+5.75</option>
                                                <option value="+6.00">+6.00</option>
                                            </select>
                                        </div>

                                        <div class="select-flex">
                                            <label class="pupillary-distance-label mb-3">
                                                Axis
                                            </label>
                                            <select class="form-select lens-select only-lencs" aria-label="Default select example">
                                                <option selected value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                                <option value="32">32</option>
                                                <option value="33">33</option>
                                                <option value="34">34</option>
                                                <option value="35">35</option>
                                                <option value="36">36</option>
                                                <option value="37">37</option>
                                                <option value="38">38</option>
                                                <option value="39">39</option>
                                                <option value="40">40</option>
                                                <option value="41">41</option>
                                                <option value="42">42</option>
                                                <option value="43">43</option>
                                                <option value="44">44</option>
                                                <option value="45">45</option>
                                                <option value="46">46</option>
                                                <option value="47">47</option>
                                                <option value="48">48</option>
                                                <option value="49">49</option>
                                                <option value="50">50</option>
                                                <option value="51">51</option>
                                                <option value="52">52</option>
                                                <option value="53">53</option>
                                                <option value="54">54</option>
                                                <option value="55">55</option>
                                                <option value="56">56</option>
                                                <option value="57">57</option>
                                                <option value="58">58</option>
                                                <option value="59">59</option>
                                                <option value="60">60</option>
                                                <option value="61">61</option>
                                                <option value="62">62</option>
                                                <option value="63">63</option>
                                                <option value="64">64</option>
                                                <option value="65">65</option>
                                                <option value="66">66</option>
                                                <option value="67">67</option>
                                                <option value="68">68</option>
                                                <option value="69">69</option>
                                                <option value="70">70</option>
                                                <option value="71">71</option>
                                                <option value="72">72</option>
                                                <option value="73">73</option>
                                                <option value="74">74</option>
                                                <option value="75">75</option>
                                                <option value="76">76</option>
                                                <option value="77">77</option>
                                                <option value="78">78</option>
                                                <option value="79">79</option>
                                                <option value="80">80</option>
                                                <option value="81">81</option>
                                                <option value="82">82</option>
                                                <option value="83">83</option>
                                                <option value="84">84</option>
                                                <option value="85">85</option>
                                                <option value="86">86</option>
                                                <option value="87">87</option>
                                                <option value="88">88</option>
                                                <option value="89">89</option>
                                                <option value="90">90</option>
                                                <option value="91">91</option>
                                                <option value="92">92</option>
                                                <option value="93">93</option>
                                                <option value="94">94</option>
                                                <option value="95">95</option>
                                                <option value="96">96</option>
                                                <option value="97">97</option>
                                                <option value="98">98</option>
                                                <option value="99">99</option>
                                                <option value="100">100</option>
                                                <option value="101">101</option>
                                                <option value="102">102</option>
                                                <option value="103">103</option>
                                                <option value="104">104</option>
                                                <option value="105">105</option>
                                                <option value="106">106</option>
                                                <option value="107">107</option>
                                                <option value="108">108</option>
                                                <option value="109">109</option>
                                                <option value="110">110</option>
                                                <option value="111">111</option>
                                                <option value="112">112</option>
                                                <option value="113">113</option>
                                                <option value="114">114</option>
                                                <option value="115">115</option>
                                                <option value="116">116</option>
                                                <option value="117">117</option>
                                                <option value="118">118</option>
                                                <option value="119">119</option>
                                                <option value="120">120</option>
                                                <option value="121">121</option>
                                                <option value="122">122</option>
                                                <option value="123">123</option>
                                                <option value="124">124</option>
                                                <option value="125">125</option>
                                                <option value="126">126</option>
                                                <option value="127">127</option>
                                                <option value="128">128</option>
                                                <option value="129">129</option>
                                                <option value="130">130</option>
                                                <option value="131">131</option>
                                                <option value="132">132</option>
                                                <option value="133">133</option>
                                                <option value="134">134</option>
                                                <option value="135">135</option>
                                                <option value="136">136</option>
                                                <option value="137">137</option>
                                                <option value="138">138</option>
                                                <option value="139">139</option>
                                                <option value="140">140</option>
                                                <option value="141">141</option>
                                                <option value="142">142</option>
                                                <option value="143">143</option>
                                                <option value="144">144</option>
                                                <option value="145">145</option>
                                                <option value="146">146</option>
                                                <option value="147">147</option>
                                                <option value="148">148</option>
                                                <option value="149">149</option>
                                                <option value="150">150</option>
                                                <option value="151">151</option>
                                                <option value="152">152</option>
                                                <option value="153">153</option>
                                                <option value="154">154</option>
                                                <option value="155">155</option>
                                                <option value="156">156</option>
                                                <option value="157">157</option>
                                                <option value="158">158</option>
                                                <option value="159">159</option>
                                                <option value="160">160</option>
                                                <option value="161">161</option>
                                                <option value="162">162</option>
                                                <option value="163">163</option>
                                                <option value="164">164</option>
                                                <option value="165">165</option>
                                                <option value="166">166</option>
                                                <option value="167">167</option>
                                                <option value="168">168</option>
                                                <option value="169">169</option>
                                                <option value="170">170</option>
                                                <option value="171">171</option>
                                                <option value="172">172</option>
                                                <option value="173">173</option>
                                                <option value="174">174</option>
                                                <option value="175">175</option>
                                                <option value="176">176</option>
                                                <option value="177">177</option>
                                                <option value="178">178</option>
                                                <option value="179">179</option>
                                                <option value="180">180</option>
                                            </select>
                                        </div>

                                        <div class="select-flex">
                                            <label class="pupillary-distance-label mb-3">
                                                Seg-ht or OC
                                            </label>
                                            <select class="form-select lens-select only-lencs" aria-label="Default select example">
                                                <option selected value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>

                                    </div>

                                    <hr class="mt-5 mb-5 opacity-75 text-black">

                                    <div class="d-flex align-items-center mb-4 justify-content-between">
                                        <h4 class="lens-radio-title mb-0">Left Eye - OS</h4>
                                    </div>

                                    <div class="select-flex-list">

                                        <div class="select-flex">
                                            <label class="pupillary-distance-label mb-3">
                                                SPH
                                            </label>
                                            <select class="form-select lens-select only-lencs" aria-label="Default select example">
                                                <option selected disabled value="">0.00</option>
                                                <option value="-20.00">-20.00</option>
                                                <option value="-19.75">-19.75</option>
                                                <option value="-19.50">-19.50</option>
                                                <option value="-19.25">-19.25</option>
                                                <option value="-19.00">-19.00</option>
                                                <option value="-18.75">-18.75</option>
                                                <option value="-18.50">-18.50</option>
                                                <option value="-18.25">-18.25</option>
                                                <option value="-18.00">-18.00</option>
                                                <option value="-17.75">-17.75</option>
                                                <option value="-17.50">-17.50</option>
                                                <option value="-17.25">-17.25</option>
                                                <option value="-17.00">-17.00</option>
                                                <option value="-16.75">-16.75</option>
                                                <option value="-16.50">-16.50</option>
                                                <option value="-16.25">-16.25</option>
                                                <option value="-16.00">-16.00</option>
                                                <option value="-15.75">-15.75</option>
                                                <option value="-15.50">-15.50</option>
                                                <option value="-15.25">-15.25</option>
                                                <option value="-15.00">-15.00</option>
                                                <option value="-14.75">-14.75</option>
                                                <option value="-14.50">-14.50</option>
                                                <option value="-14.25">-14.25</option>
                                                <option value="-14.00">-14.00</option>
                                                <option value="-13.75">-13.75</option>
                                                <option value="-13.50">-13.50</option>
                                                <option value="-13.25">-13.25</option>
                                                <option value="-13.00">-13.00</option>
                                                <option value="-12.75">-12.75</option>
                                                <option value="-12.50">-12.50</option>
                                                <option value="-12.25">-12.25</option>
                                                <option value="-12.00">-12.00</option>
                                                <option value="-11.75">-11.75</option>
                                                <option value="-11.50">-11.50</option>
                                                <option value="-11.25">-11.25</option>
                                                <option value="-11.00">-11.00</option>
                                                <option value="-10.75">-10.75</option>
                                                <option value="-10.50">-10.50</option>
                                                <option value="-10.25">-10.25</option>
                                                <option value="-10.00">-10.00</option>
                                                <option value="-9.75">-9.75</option>
                                                <option value="-9.50">-9.50</option>
                                                <option value="-9.25">-9.25</option>
                                                <option value="-9.00">-9.00</option>
                                                <option value="-8.75">-8.75</option>
                                                <option value="-8.50">-8.50</option>
                                                <option value="-8.25">-8.25</option>
                                                <option value="-8.00">-8.00</option>
                                                <option value="-7.75">-7.75</option>
                                                <option value="-7.50">-7.50</option>
                                                <option value="-7.25">-7.25</option>
                                                <option value="-7.00">-7.00</option>
                                                <option value="-6.75">-6.75</option>
                                                <option value="-6.50">-6.50</option>
                                                <option value="-6.25">-6.25</option>
                                                <option value="-6.00">-6.00</option>
                                                <option value="-5.75">-5.75</option>
                                                <option value="-5.50">-5.50</option>
                                                <option value="-5.25">-5.25</option>
                                                <option value="-5.00">-5.00</option>
                                                <option value="-4.75">-4.75</option>
                                                <option value="-4.50">-4.50</option>
                                                <option value="-4.25">-4.25</option>
                                                <option value="-4.00">-4.00</option>
                                                <option value="-3.75">-3.75</option>
                                                <option value="-3.50">-3.50</option>
                                                <option value="-3.25">-3.25</option>
                                                <option value="-3.00">-3.00</option>
                                                <option value="-2.75">-2.75</option>
                                                <option value="-2.50">-2.50</option>
                                                <option value="-2.25">-2.25</option>
                                                <option value="-2.00">-2.00</option>
                                                <option value="-1.75">-1.75</option>
                                                <option value="-1.50">-1.50</option>
                                                <option value="-1.25">-1.25</option>
                                                <option value="-1.00">-1.00</option>
                                                <option value="-0.75">-0.75</option>
                                                <option value="-0.50">-0.50</option>
                                                <option value="-0.25">-0.25</option>
                                                <option value="0.00">0.00</option>
                                                <option value="+0.25">+0.25</option>
                                                <option value="+0.50">+0.50</option>
                                                <option value="+0.75">+0.75</option>
                                                <option value="+1.00">+1.00</option>
                                                <option value="+1.25">+1.25</option>
                                                <option value="+1.50">+1.50</option>
                                                <option value="+1.75">+1.75</option>
                                                <option value="+2.00">+2.00</option>
                                                <option value="+2.25">+2.25</option>
                                                <option value="+2.50">+2.50</option>
                                                <option value="+2.75">+2.75</option>
                                                <option value="+3.00">+3.00</option>
                                                <option value="+3.25">+3.25</option>
                                                <option value="+3.50">+3.50</option>
                                                <option value="+3.75">+3.75</option>
                                                <option value="+4.00">+4.00</option>
                                                <option value="+4.25">+4.25</option>
                                                <option value="+4.50">+4.50</option>
                                                <option value="+4.75">+4.75</option>
                                                <option value="+5.00">+5.00</option>
                                                <option value="+5.25">+5.25</option>
                                                <option value="+5.50">+5.50</option>
                                                <option value="+5.75">+5.75</option>
                                                <option value="+6.00">+6.00</option>
                                                <option value="+6.25">+6.25</option>
                                                <option value="+6.50">+6.50</option>
                                                <option value="+6.75">+6.75</option>
                                                <option value="+7.00">+7.00</option>
                                                <option value="+7.25">+7.25</option>
                                                <option value="+7.50">+7.50</option>
                                                <option value="+7.75">+7.75</option>
                                                <option value="+8.00">+8.00</option>
                                                <option value="+8.25">+8.25</option>
                                                <option value="+8.50">+8.50</option>
                                                <option value="+8.75">+8.75</option>
                                                <option value="+9.00">+9.00</option>
                                                <option value="+9.25">+9.25</option>
                                                <option value="+9.50">+9.50</option>
                                                <option value="+9.75">+9.75</option>
                                                <option value="+10.00">+10.00</option>
                                                <option value="+10.25">+10.25</option>
                                                <option value="+10.50">+10.50</option>
                                                <option value="+10.75">+10.75</option>
                                                <option value="+11.00">+11.00</option>
                                                <option value="+11.25">+11.25</option>
                                                <option value="+11.50">+11.50</option>
                                                <option value="+11.75">+11.75</option>
                                                <option value="+12.00">+12.00</option>
                                            </select>

                                        </div>

                                        <div class="select-flex">
                                            <label class="pupillary-distance-label mb-3">
                                                CYL
                                            </label>
                                            <select class="form-select lens-select only-lencs" aria-label="Default select example">
                                                <option selected disabled value="">0.00</option>
                                                <option value="-6.00">-6.00</option>
                                                <option value="-5.75">-5.75</option>
                                                <option value="-5.50">-5.50</option>
                                                <option value="-5.25">-5.25</option>
                                                <option value="-5.00">-5.00</option>
                                                <option value="-4.75">-4.75</option>
                                                <option value="-4.50">-4.50</option>
                                                <option value="-4.25">-4.25</option>
                                                <option value="-4.00">-4.00</option>
                                                <option value="-3.75">-3.75</option>
                                                <option value="-3.50">-3.50</option>
                                                <option value="-3.25">-3.25</option>
                                                <option value="-3.00">-3.00</option>
                                                <option value="-2.75">-2.75</option>
                                                <option value="-2.50">-2.50</option>
                                                <option value="-2.25">-2.25</option>
                                                <option value="-2.00">-2.00</option>
                                                <option value="-1.75">-1.75</option>
                                                <option value="-1.50">-1.50</option>
                                                <option value="-1.25">-1.25</option>
                                                <option value="-1.00">-1.00</option>
                                                <option value="-0.75">-0.75</option>
                                                <option value="-0.50">-0.50</option>
                                                <option value="-0.25">-0.25</option>
                                                <option value="0.00">0.00</option>
                                                <option value="+0.25">+0.25</option>
                                                <option value="+0.50">+0.50</option>
                                                <option value="+0.75">+0.75</option>
                                                <option value="+1.00">+1.00</option>
                                                <option value="+1.25">+1.25</option>
                                                <option value="+1.50">+1.50</option>
                                                <option value="+1.75">+1.75</option>
                                                <option value="+2.00">+2.00</option>
                                                <option value="+2.25">+2.25</option>
                                                <option value="+2.50">+2.50</option>
                                                <option value="+2.75">+2.75</option>
                                                <option value="+3.00">+3.00</option>
                                                <option value="+3.25">+3.25</option>
                                                <option value="+3.50">+3.50</option>
                                                <option value="+3.75">+3.75</option>
                                                <option value="+4.00">+4.00</option>
                                                <option value="+4.25">+4.25</option>
                                                <option value="+4.50">+4.50</option>
                                                <option value="+4.75">+4.75</option>
                                                <option value="+5.00">+5.00</option>
                                                <option value="+5.25">+5.25</option>
                                                <option value="+5.50">+5.50</option>
                                                <option value="+5.75">+5.75</option>
                                                <option value="+6.00">+6.00</option>
                                            </select>
                                        </div>

                                        <div class="select-flex">
                                            <label class="pupillary-distance-label mb-3">
                                                Axis
                                            </label>
                                            <select class="form-select lens-select only-lencs" aria-label="Default select example">
                                                <option selected value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                                <option value="32">32</option>
                                                <option value="33">33</option>
                                                <option value="34">34</option>
                                                <option value="35">35</option>
                                                <option value="36">36</option>
                                                <option value="37">37</option>
                                                <option value="38">38</option>
                                                <option value="39">39</option>
                                                <option value="40">40</option>
                                                <option value="41">41</option>
                                                <option value="42">42</option>
                                                <option value="43">43</option>
                                                <option value="44">44</option>
                                                <option value="45">45</option>
                                                <option value="46">46</option>
                                                <option value="47">47</option>
                                                <option value="48">48</option>
                                                <option value="49">49</option>
                                                <option value="50">50</option>
                                                <option value="51">51</option>
                                                <option value="52">52</option>
                                                <option value="53">53</option>
                                                <option value="54">54</option>
                                                <option value="55">55</option>
                                                <option value="56">56</option>
                                                <option value="57">57</option>
                                                <option value="58">58</option>
                                                <option value="59">59</option>
                                                <option value="60">60</option>
                                                <option value="61">61</option>
                                                <option value="62">62</option>
                                                <option value="63">63</option>
                                                <option value="64">64</option>
                                                <option value="65">65</option>
                                                <option value="66">66</option>
                                                <option value="67">67</option>
                                                <option value="68">68</option>
                                                <option value="69">69</option>
                                                <option value="70">70</option>
                                                <option value="71">71</option>
                                                <option value="72">72</option>
                                                <option value="73">73</option>
                                                <option value="74">74</option>
                                                <option value="75">75</option>
                                                <option value="76">76</option>
                                                <option value="77">77</option>
                                                <option value="78">78</option>
                                                <option value="79">79</option>
                                                <option value="80">80</option>
                                                <option value="81">81</option>
                                                <option value="82">82</option>
                                                <option value="83">83</option>
                                                <option value="84">84</option>
                                                <option value="85">85</option>
                                                <option value="86">86</option>
                                                <option value="87">87</option>
                                                <option value="88">88</option>
                                                <option value="89">89</option>
                                                <option value="90">90</option>
                                                <option value="91">91</option>
                                                <option value="92">92</option>
                                                <option value="93">93</option>
                                                <option value="94">94</option>
                                                <option value="95">95</option>
                                                <option value="96">96</option>
                                                <option value="97">97</option>
                                                <option value="98">98</option>
                                                <option value="99">99</option>
                                                <option value="100">100</option>
                                                <option value="101">101</option>
                                                <option value="102">102</option>
                                                <option value="103">103</option>
                                                <option value="104">104</option>
                                                <option value="105">105</option>
                                                <option value="106">106</option>
                                                <option value="107">107</option>
                                                <option value="108">108</option>
                                                <option value="109">109</option>
                                                <option value="110">110</option>
                                                <option value="111">111</option>
                                                <option value="112">112</option>
                                                <option value="113">113</option>
                                                <option value="114">114</option>
                                                <option value="115">115</option>
                                                <option value="116">116</option>
                                                <option value="117">117</option>
                                                <option value="118">118</option>
                                                <option value="119">119</option>
                                                <option value="120">120</option>
                                                <option value="121">121</option>
                                                <option value="122">122</option>
                                                <option value="123">123</option>
                                                <option value="124">124</option>
                                                <option value="125">125</option>
                                                <option value="126">126</option>
                                                <option value="127">127</option>
                                                <option value="128">128</option>
                                                <option value="129">129</option>
                                                <option value="130">130</option>
                                                <option value="131">131</option>
                                                <option value="132">132</option>
                                                <option value="133">133</option>
                                                <option value="134">134</option>
                                                <option value="135">135</option>
                                                <option value="136">136</option>
                                                <option value="137">137</option>
                                                <option value="138">138</option>
                                                <option value="139">139</option>
                                                <option value="140">140</option>
                                                <option value="141">141</option>
                                                <option value="142">142</option>
                                                <option value="143">143</option>
                                                <option value="144">144</option>
                                                <option value="145">145</option>
                                                <option value="146">146</option>
                                                <option value="147">147</option>
                                                <option value="148">148</option>
                                                <option value="149">149</option>
                                                <option value="150">150</option>
                                                <option value="151">151</option>
                                                <option value="152">152</option>
                                                <option value="153">153</option>
                                                <option value="154">154</option>
                                                <option value="155">155</option>
                                                <option value="156">156</option>
                                                <option value="157">157</option>
                                                <option value="158">158</option>
                                                <option value="159">159</option>
                                                <option value="160">160</option>
                                                <option value="161">161</option>
                                                <option value="162">162</option>
                                                <option value="163">163</option>
                                                <option value="164">164</option>
                                                <option value="165">165</option>
                                                <option value="166">166</option>
                                                <option value="167">167</option>
                                                <option value="168">168</option>
                                                <option value="169">169</option>
                                                <option value="170">170</option>
                                                <option value="171">171</option>
                                                <option value="172">172</option>
                                                <option value="173">173</option>
                                                <option value="174">174</option>
                                                <option value="175">175</option>
                                                <option value="176">176</option>
                                                <option value="177">177</option>
                                                <option value="178">178</option>
                                                <option value="179">179</option>
                                                <option value="180">180</option>
                                            </select>
                                        </div>

                                        <div class="select-flex">
                                            <label class="pupillary-distance-label mb-3">
                                                Seg-ht or OC
                                            </label>
                                            <select class="form-select lens-select only-lencs" aria-label="Default select example">
                                                <option selected value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>

                                    </div>

                                    <hr class="mt-5 mb-5 opacity-75 text-black">

                                    <div class="d-flex align-items-center mb-4 justify-content-between">
                                        <h4 class="lens-radio-title mb-0">Birth Year</h4>
                                        <button class="question-mark-btn" type="button">
                                            <i class="fa-solid fa-circle-question"></i>
                                        </button>
                                    </div>
                                    <div class="select-flex-list">
                                        <div class="select-flex w-100">
                                            <select class="form-select lens-select" id='birth-year-dropdown'>
                                                <option selected disabled="" value="">Select (YYYY)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="prescrip-manually-btn mt-4 next-step-btn">
                                    SUBMIT
                                </button>
                            </div>
                        </div>

                        <div id="step-6" class="pro-detail-area lens position-relative step step-6">
                            <button class="step-pre-btn" type="button">
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                            <h3 class="select-lens-title">Select an option AA</h3>
                            <div class="price-lences" data-price="singleVision">
                                <div class="mb-3">
                                    <input class="d-none select-lens-radio next" type="radio"
                                        name="customer_prescription" id="customer-or-prescription">
                                    <label for="customer-or-prescription" class="prescription-label next-step-btn">
                                        <div class="d-flex align-items-start gap-3">
                                            <!-- <div>
                                            <img src="assets/images/anti-reflective.svg1.svg" class="svg-step-fields">
                                        </div> -->
                                            <div class="">
                                                <div class="d-flex align-items-center justify-content-between w-90">
                                                    <h4 class="lens-radio-title">CR-39:</h4>
                                                    <div class="lens-radio-title">$80</div>
                                                </div>
                                                <!-- <p class="lens-radio-para">Water-resistant; reduces light reflections</p> -->
                                            </div>
                                        </div>
                                        <div class="">
                                            <i class="fa-solid lens-arrow-icon fa-arrow-right-long"></i>
                                        </div>
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <input class="d-none select-lens-radio next" type="radio"
                                        name="customer_prescription" id="customer-or-prescription">
                                    <label for="customer-or-prescription" class="prescription-label next-step-btn">
                                        <div class="d-flex align-items-start gap-3">
                                            <!-- <div>
                                            <img src="assets/images/anti-reflective.svg1.svg" class="svg-step-fields">
                                        </div> -->
                                            <div class="">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="lens-radio-title">Polycarbonate:</h4>
                                                    <div class="lens-radio-title">$130</div>
                                                </div>
                                                <!-- <p class="lens-radio-para">Fingerprint- and water-resistant; reduces light
                                                reflections</p> -->
                                            </div>
                                        </div>
                                        <div class="">
                                            <i class="fa-solid lens-arrow-icon fa-arrow-right-long"></i>
                                        </div>
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <input class="d-none select-lens-radio next" type="radio"
                                        name="customer_prescription" id="customer-or-prescription">
                                    <label for="customer-or-prescription" class="prescription-label next-step-btn">
                                        <div class="d-flex align-items-start gap-3">
                                            <!-- <div>
                                            <img src="assets/images/oil-resistant.svg2.svg" class="svg-step-fields">
                                        </div> -->
                                            <div class="">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="lens-radio-title">Hi Index 1.67:</h4>
                                                    <div class="lens-radio-title">$160</div>
                                                </div>
                                                <!-- <p class="lens-radio-para">Limits light reflections and fogging. Includes
                                                activator lens cloth</p> -->
                                            </div>
                                        </div>
                                        <div class="">
                                            <i class="fa-solid lens-arrow-icon fa-arrow-right-long"></i>
                                        </div>
                                    </label>
                                </div>
                                <div class="">
                                    <input class="d-none select-lens-radio next" type="radio"
                                        name="customer_prescription" id="customer-or-prescription">
                                    <label for="customer-or-prescription" class="prescription-label next-step-btn">
                                        <div class="d-flex align-items-start gap-3">
                                            <!-- <div>
                                            <img src="assets/images/oil-resistant.svg2.svg" class="svg-step-fields">
                                        </div> -->
                                            <div class="">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="lens-radio-title">Hi Index 1.74:</h4>
                                                    <div class="lens-radio-title">$210</div>
                                                </div>
                                                <!-- <p class="lens-radio-para">Limits light reflections and fogging. Includes
                                                activator lens cloth</p> -->
                                            </div>
                                        </div>
                                        <div class="">
                                            <i class="fa-solid lens-arrow-icon fa-arrow-right-long"></i>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="price-lences" data-price="progressive">
                                <div class="mb-3">
                                    <input class="d-none select-lens-radio next" type="radio"
                                        name="customer_prescription" id="customer-or-prescription">
                                    <label for="customer-or-prescription" class="prescription-label next-step-btn">
                                        <div class="d-flex align-items-start gap-3">
                                            <!-- <div>
                                            <img src="assets/images/anti-reflective.svg1.svg" class="svg-step-fields">
                                        </div> -->
                                            <div class="">
                                                <div class="d-flex align-items-center justify-content-between w-90">
                                                    <h4 class="lens-radio-title">CR-39:</h4>
                                                    <div class="lens-radio-title">$200</div>
                                                </div>
                                                <!-- <p class="lens-radio-para">Water-resistant; reduces light reflections</p> -->
                                            </div>
                                        </div>
                                        <div class="">
                                            <i class="fa-solid lens-arrow-icon fa-arrow-right-long"></i>
                                        </div>
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <input class="d-none select-lens-radio next" type="radio"
                                        name="customer_prescription" id="customer-or-prescription">
                                    <label for="customer-or-prescription" class="prescription-label next-step-btn">
                                        <div class="d-flex align-items-start gap-3">
                                            <!-- <div>
                                            <img src="assets/images/anti-reflective.svg1.svg" class="svg-step-fields">
                                        </div> -->
                                            <div class="">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="lens-radio-title">Polycarbonate:</h4>
                                                    <div class="lens-radio-title">$250</div>
                                                </div>
                                                <!-- <p class="lens-radio-para">Fingerprint- and water-resistant; reduces light
                                                reflections</p> -->
                                            </div>
                                        </div>
                                        <div class="">
                                            <i class="fa-solid lens-arrow-icon fa-arrow-right-long"></i>
                                        </div>
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <input class="d-none select-lens-radio next" type="radio"
                                        name="customer_prescription" id="customer-or-prescription">
                                    <label for="customer-or-prescription" class="prescription-label next-step-btn">
                                        <div class="d-flex align-items-start gap-3">
                                            <!-- <div>
                                            <img src="assets/images/oil-resistant.svg2.svg" class="svg-step-fields">
                                        </div> -->
                                            <div class="">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="lens-radio-title">Hi Index 1.67:</h4>
                                                    <div class="lens-radio-title">$300</div>
                                                </div>
                                                <!-- <p class="lens-radio-para">Limits light reflections and fogging. Includes
                                                activator lens cloth</p> -->
                                            </div>
                                        </div>
                                        <div class="">
                                            <i class="fa-solid lens-arrow-icon fa-arrow-right-long"></i>
                                        </div>
                                    </label>
                                </div>
                                <div class="">
                                    <input class="d-none select-lens-radio next" type="radio"
                                        name="customer_prescription" id="customer-or-prescription">
                                    <label for="customer-or-prescription" class="prescription-label next-step-btn">
                                        <div class="d-flex align-items-start gap-3">
                                            <!-- <div>
                                            <img src="assets/images/oil-resistant.svg2.svg" class="svg-step-fields">
                                        </div> -->
                                            <div class="">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="lens-radio-title">Hi Index 1.74:</h4>
                                                    <div class="lens-radio-title">$350</div>
                                                </div>
                                                <!-- <p class="lens-radio-para">Limits light reflections and fogging. Includes
                                                activator lens cloth</p> -->
                                            </div>
                                        </div>
                                        <div class="">
                                            <i class="fa-solid lens-arrow-icon fa-arrow-right-long"></i>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="price-lences" data-price="flatTop">
                                <div class="mb-3">
                                    <input class="d-none select-lens-radio next" type="radio"
                                        name="customer_prescription" id="customer-or-prescription">
                                    <label for="customer-or-prescription" class="prescription-label next-step-btn">
                                        <div class="d-flex align-items-start gap-3">
                                            <!-- <div>
                                            <img src="assets/images/anti-reflective.svg1.svg" class="svg-step-fields">
                                        </div> -->
                                            <div class="">
                                                <div class="d-flex align-items-center justify-content-between w-90">
                                                    <h4 class="lens-radio-title">CR-39:</h4>
                                                    <div class="lens-radio-title">$120</div>
                                                </div>
                                                <!-- <p class="lens-radio-para">Water-resistant; reduces light reflections</p> -->
                                            </div>
                                        </div>
                                        <div class="">
                                            <i class="fa-solid lens-arrow-icon fa-arrow-right-long"></i>
                                        </div>
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <input class="d-none select-lens-radio next" type="radio"
                                        name="customer_prescription" id="customer-or-prescription">
                                    <label for="customer-or-prescription" class="prescription-label next-step-btn">
                                        <div class="d-flex align-items-start gap-3">
                                            <!-- <div>
                                            <img src="assets/images/anti-reflective.svg1.svg" class="svg-step-fields">
                                        </div> -->
                                            <div class="">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="lens-radio-title">Polycarbonate:</h4>
                                                    <div class="lens-radio-title">$170</div>
                                                </div>
                                                <!-- <p class="lens-radio-para">Fingerprint- and water-resistant; reduces light
                                                reflections</p> -->
                                            </div>
                                        </div>
                                        <div class="">
                                            <i class="fa-solid lens-arrow-icon fa-arrow-right-long"></i>
                                        </div>
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <input class="d-none select-lens-radio next" type="radio"
                                        name="customer_prescription" id="customer-or-prescription">
                                    <label for="customer-or-prescription" class="prescription-label next-step-btn">
                                        <div class="d-flex align-items-start gap-3">
                                            <!-- <div>
                                            <img src="assets/images/oil-resistant.svg2.svg" class="svg-step-fields">
                                        </div> -->
                                            <div class="">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="lens-radio-title">Hi Index 1.67:</h4>
                                                    <div class="lens-radio-title">$200</div>
                                                </div>
                                                <!-- <p class="lens-radio-para">Limits light reflections and fogging. Includes
                                                activator lens cloth</p> -->
                                            </div>
                                        </div>
                                        <div class="">
                                            <i class="fa-solid lens-arrow-icon fa-arrow-right-long"></i>
                                        </div>
                                    </label>
                                </div>
                                <div class="">
                                    <input class="d-none select-lens-radio next" type="radio"
                                        name="customer_prescription" id="customer-or-prescription">
                                    <label for="customer-or-prescription" class="prescription-label next-step-btn">
                                        <div class="d-flex align-items-start gap-3">
                                            <!-- <div>
                                            <img src="assets/images/oil-resistant.svg2.svg" class="svg-step-fields">
                                        </div> -->
                                            <div class="">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="lens-radio-title">Hi Index 1.74:</h4>
                                                    <div class="lens-radio-title">$260</div>
                                                </div>
                                                <!-- <p class="lens-radio-para">Limits light reflections and fogging. Includes
                                                activator lens cloth</p> -->
                                            </div>
                                        </div>
                                        <div class="">
                                            <i class="fa-solid lens-arrow-icon fa-arrow-right-long"></i>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div id="step-7" class="pro-detail-area lens position-relative step step-7">
                            <button class="step-pre-btn" type="button">
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                            <h3 class="select-lens-title">Add Features</h3>
                            <div class="mb-3">
                                <input class="d-none select-lens-radio next" value="" type="radio"
                                    name="add_features" id="feature-1">
                                <label for="feature-1" class="prescription-label next-step-btn">
                                    <div class="">
                                        <h4 class="lens-radio-title m-0">Anti-reflective coatings</h4>
                                    </div>
                                    <div class="">
                                        <i class="fa-solid lens-arrow-icon fa-arrow-right-long"></i>
                                    </div>
                                </label>
                            </div>
                            <div class="mb-3">
                                <input class="d-none select-lens-radio next" value="" type="radio"
                                    name="add_features" id="feature-2">
                                <label for="feature-2" class="prescription-label next-step-btn">
                                    <div class="">
                                        <h4 class="lens-radio-title m-0">Tints</h4>
                                    </div>
                                    <div class="">
                                        <i class="fa-solid lens-arrow-icon fa-arrow-right-long"></i>
                                    </div>
                                </label>
                            </div>
                            <div class="">
                                <input class="d-none select-lens-radio next" value="" type="radio"
                                    name="add_features" id="feature-3">
                                <label for="feature-3" class="prescription-label next-step-btn">
                                    <div class="">
                                        <h4 class="lens-radio-title m-0">Photochromic Materials</h4>
                                    </div>
                                    <div class="">
                                        <i class="fa-solid lens-arrow-icon fa-arrow-right-long"></i>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div id="step-8" class="pro-detail-area lens position-relative step step-8 ">
                            <button class="step-pre-btn" type="button">
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                            <h3 class="select-lens-title">Select Color</h3>

                            <div class="feature-color-list">
                                <div class="feature-color-area">
                                    <input class="d-none select-lens-radio next" value="" type="radio"
                                        name="feature_color" id="feature-color-1">
                                    <label for="feature-color-1" class="prescription-label feature-color-label">
                                        <div class="text-center">
                                            <span style="--bg-color: #39393a;" class="feature-color-circle"></span>
                                            <h4 class="lens-radio-title mb-0 mt-3 text-center">Gray</h4>
                                        </div>
                                    </label>
                                </div>
                                <div class="feature-color-area">
                                    <input class="d-none select-lens-radio next" value="" type="radio"
                                        name="feature_color" id="feature-color-2">
                                    <label for="feature-color-2" class="prescription-label feature-color-label">
                                        <div class="text-center">
                                            <span style="--bg-color: #66271e;" class="feature-color-circle"></span>
                                            <h4 class="lens-radio-title mb-0 mt-3 text-center">Brown</h4>
                                        </div>
                                    </label>
                                </div>
                                <div class="feature-color-area">
                                    <input class="d-none select-lens-radio next" value="" type="radio"
                                        name="feature_color" id="feature-color-3">
                                    <label for="feature-color-3" class="prescription-label feature-color-label">
                                        <div class="text-center">
                                            <span style="--bg-color: green;" class="feature-color-circle"></span>
                                            <h4 class="lens-radio-title mb-0 mt-3 text-center">Green</h4>
                                        </div>
                                    </label>
                                </div>
                                <div class="feature-color-area">
                                    <input class="d-none select-lens-radio next" value="" type="radio"
                                        name="feature_color" id="feature-color-4">
                                    <label for="feature-color-4" class="prescription-label feature-color-label">
                                        <div class="text-center">
                                            <span style="--bg-color: black;" class="feature-color-circle"></span>
                                            <h4 class="lens-radio-title mb-0 mt-3 text-center">Black</h4>
                                        </div>
                                    </label>
                                </div>
                            </div>

                            
                            <div class="text-center mt-5">
                                <button type="button" class="checkout-page border-0 next-step-btn">
                                    Continue
                                </button>
                            </div>
                        </div>

                        <div id="step-9" class="pro-detail-area lens position-relative step step-9">
                            <button class="step-pre-btn" type="button">
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                            <h3 class="select-lens-title">FINISH</h3>
                            <div class="text-center mt-4">
                                <a href="cart.php" class="checkout-page d-inline-block">FINISH & ADD TO CART</a>
                            </div>
                        </div>

                    </form>

                    <div class="pro-detail-area lens d-flex justify-content-start flex-column gap-0 row-gap-5">
                        <div class="">
                            <span class="mt-size-color d-flex justify-content-between align-items-center">Name:
                                <strong>Maybach 1294</strong></span>
                        </div>
                        <div class="">
                            <span class="mt-size-color d-flex justify-content-between align-items-center">Material:
                                <strong>Plastic</strong></span>
                        </div>
                        <div class="">
                            <span class="mt-size-color d-flex justify-content-between align-items-center">Size:
                                <strong>Medium</strong></span>
                        </div>
                        <div class="">
                            <span class="mt-size-color d-flex justify-content-between align-items-center">Color:
                                <strong>Black</strong></span>
                        </div>
                        <div class="">
                            <span class="mt-size-color d-flex justify-content-between align-items-center">Estimated
                                Amount: <strong>$50.00</strong></span>
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

<script src="./assets/js/swiper-bundle.min.js"></script>
<script src="./assets/js/select-lens.js"></script>