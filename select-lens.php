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
                                        <img class="img-fluid pro-detail-main-img" src="./assets/images/pro-dtl-gllery-img-7.png" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid pro-detail-main-img" src="./assets/images/pro-dtl-gllery-img-8.png" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid pro-detail-main-img" src="./assets/images/pro-dtl-gllery-img-9.png" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid pro-detail-main-img" src="./assets/images/pro-dtl-gllery-img-10.png" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid pro-detail-main-img" src="./assets/images/pro-dtl-gllery-img-7.png" />
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
                                    <img class="img-fluid pro-dtl-gllery-img" src="./assets/images/pro-dtl-gllery-img-7.png" />
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid pro-dtl-gllery-img" src="./assets/images/pro-dtl-gllery-img-8.png" />
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid pro-dtl-gllery-img" src="./assets/images/pro-dtl-gllery-img-9.png" />
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid pro-dtl-gllery-img" src="./assets/images/pro-dtl-gllery-img-10.png" />
                                </div>
                                <div class="swiper-slide position-relative">
                                    <img class="img-fluid pro-dtl-gllery-img" src="./assets/images/pro-dtl-gllery-img-7.png" />
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
                        <!-- <button type="button" class="pro-cancel-btn">
                            <i class="fa-solid fa-xmark"></i>
                        </button> -->

                        <div id="step-1" class="pro-detail-area lens">
                            <h3 class="select-lens-title">Select Lens Type:</h3>
                            <div class="">
                                <input class="d-none select-lens-radio" type="radio" name="prescription_radio" id="prescription-radio">
                                <label for="prescription-radio" class="prescription-label">
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

                        <div id="step-2" class="pro-detail-area lens">
                            <h3 class="select-lens-title">Select an option</h3>
                            <div class="">
                                <input class="d-none select-lens-radio" type="radio" name="customer_prescription" id="customer-or-prescription">
                                <label for="customer-or-prescription" class="prescription-label">
                                    <div class="">
                                        <h4 class="lens-radio-title">NEW CUSTOMER OR NEW PRESCRIPTION?</h4>
                                        <p class="lens-radio-para">You will need your current prescription and pupillary distance (PD).</p>
                                    </div>
                                    <div class="">
                                        <i class="fa-solid lens-arrow-icon fa-arrow-right-long"></i>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div id="step-3" class="pro-detail-area lens">
                            <h3 class="select-lens-title">Select a prescription type</h3>
                            <div class="mb-3">
                                <input class="d-none select-lens-radio" type="radio" name="prescription_type" id="single-vision">
                                <label for="single-vision" class="prescription-label">
                                    <div class="">
                                        <h4 class="lens-radio-title">SINGLE VISION</h4>
                                        <p class="lens-radio-para">Most common prescription that corrects for one distance (near or far).</p>
                                    </div>
                                    <div class="">
                                        <i class="fa-solid lens-arrow-icon fa-arrow-right-long"></i>
                                    </div>
                                </label>
                            </div>
                            <div class="mb-3">
                                <input class="d-none select-lens-radio" type="radio" name="prescription_type" id="Progressive">
                                <label for="Progressive" class="prescription-label">
                                    <div class="">
                                        <h4 class="lens-radio-title">PROGRESSIVE</h4>
                                        <p class="lens-radio-para">Most common prescription that corrects for one distance (near or far).</p>
                                    </div>
                                    <div class="">
                                        <i class="fa-solid lens-arrow-icon fa-arrow-right-long"></i>
                                    </div>
                                </label>
                            </div>
                            <div class="">
                                <input class="d-none select-lens-radio" type="radio" name="prescription_type" id="Flat-Top-or-Bifocal">
                                <label for="Flat-Top-or-Bifocal" class="prescription-label">
                                    <div class="">
                                        <h4 class="lens-radio-title">FLAT TOP OR BIFOCAL</h4>
                                        <p class="lens-radio-para">Most common prescription that corrects for one distance (near or far).</p>
                                    </div>
                                    <div class="">
                                        <i class="fa-solid lens-arrow-icon fa-arrow-right-long"></i>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div id="step-4" class="pro-detail-area lens">
                            <div class="">
                                <!-- <button type="button" class="previous action-button-previous">
                                    <i class="bi bi-chevron-left"></i>
                                </button> -->
                                <h3 class="select-lens-title">Enter Prescription</h3>
                            </div>
                            <div class="prescription-img-area">
                                <img id="previewImg" class="img-fluid prescription-img" src="./assets/images/prescription-img.png" alt="Image Preview">
                            </div>
                            <div class="dragBox" id="dropArea" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);">
                                <div class="prescription-img-upload-area ">
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
                            <div class="mt-5">
                                <h4 class="lens-radio-title">Have Prism Values?</h4>
                                <p class="lens-radio-para">The scan can't capture prism values. Please enter manually from your prescription if noted.</p>
                            </div>
                        </div>

                        <div id="step-5" class="pro-detail-area lens">
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
                                            <input checked class="pupillary-distance-radio" type="radio" name="pupillary_distance_radio" id="pupillary-distance-one">
                                            One Number
                                        </label>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center gap-5">
                                        <label class="pupillary-distance-label" for="pupillary-distance-two">
                                            <input class="pupillary-distance-radio" type="radio" name="pupillary_distance_radio" id="pupillary-distance-two">
                                            Two Numbers
                                        </label>
                                        <button class="question-mark-btn" type="button">
                                            <i class="fa-solid fa-circle-question"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="pupillary-distance-text-area mb-4">
                                    <p class="lens-radio-para mb-5">For a single PD or two PD numbers over 40 mm, enter the larger number in the One Number PD field.</p>
                                    <p class="lens-radio-para mb-5">For two PDs under 40 mm, choose the Two Number PD field.</p>
                                    <p class="lens-radio-para">Don't see your PD? This frame may not be compatible with your prescription. <a class="text-decoration-none" href="#">Shop other frames</a> that may be a better fit.</p>
                                </div>
                                <select class="form-select lens-select" aria-label="Default select example">
                                    <option disabled="" value="">Enter your pupillary distance</option>
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
                                <div class="prescription-values-area">
                                    <div class="bg-white rounded-3 py-4 px-2 mb-5">
                                        <h5 class="pupillary-distance-label mb-2 text-center d-block">Select your prescription values</h5>
                                        <p class="lens-radio-para text-center">A plus (+) means difficulty seeing near, and a <br> minus (-) means difficulty seeing far.</p>
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
                                            <select class="form-select lens-select" aria-label="Default select example">
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
                                            <select class="form-select lens-select" aria-label="Default select example">
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
                                            <select class="form-select lens-select" aria-label="Default select example">
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
                                            <select class="form-select lens-select" aria-label="Default select example">
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
                                            <select class="form-select lens-select" aria-label="Default select example">
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
                                            <select class="form-select lens-select" aria-label="Default select example">
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
                                            <select class="form-select lens-select" aria-label="Default select example">
                                                <option selected disabled="" value="">Select (YYYY)</option>
                                                <option value="2024">2024</option>
                                                <option value="2023">2023</option>
                                                <option value="2022">2022</option>
                                                <option value="2021">2021</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                                <option value="2017">2017</option>
                                                <option value="2016">2016</option>
                                                <option value="2015">2015</option>
                                                <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                                <option value="2012">2012</option>
                                                <option value="2011">2011</option>
                                                <option value="2010">2010</option>
                                                <option value="2009">2009</option>
                                                <option value="2008">2008</option>
                                                <option value="2007">2007</option>
                                                <option value="2006">2006</option>
                                                <option value="2005">2005</option>
                                                <option value="2004">2004</option>
                                                <option value="2003">2003</option>
                                                <option value="2002">2002</option>
                                                <option value="2001">2001</option>
                                                <option value="2000">2000</option>
                                                <option value="1999">1999</option>
                                                <option value="1998">1998</option>
                                                <option value="1997">1997</option>
                                                <option value="1996">1996</option>
                                                <option value="1995">1995</option>
                                                <option value="1994">1994</option>
                                                <option value="1993">1993</option>
                                                <option value="1992">1992</option>
                                                <option value="1991">1991</option>
                                                <option value="1990">1990</option>
                                                <option value="1989">1989</option>
                                                <option value="1988">1988</option>
                                                <option value="1987">1987</option>
                                                <option value="1986">1986</option>
                                                <option value="1985">1985</option>
                                                <option value="1984">1984</option>
                                                <option value="1983">1983</option>
                                                <option value="1982">1982</option>
                                                <option value="1981">1981</option>
                                                <option value="1980">1980</option>
                                                <option value="1979">1979</option>
                                                <option value="1978">1978</option>
                                                <option value="1977">1977</option>
                                                <option value="1976">1976</option>
                                                <option value="1975">1975</option>
                                                <option value="1974">1974</option>
                                                <option value="1973">1973</option>
                                                <option value="1972">1972</option>
                                                <option value="1971">1971</option>
                                                <option value="1970">1970</option>
                                                <option value="1969">1969</option>
                                                <option value="1968">1968</option>
                                                <option value="1967">1967</option>
                                                <option value="1966">1966</option>
                                                <option value="1965">1965</option>
                                                <option value="1964">1964</option>
                                                <option value="1963">1963</option>
                                                <option value="1962">1962</option>
                                                <option value="1961">1961</option>
                                                <option value="1960">1960</option>
                                                <option value="1959">1959</option>
                                                <option value="1958">1958</option>
                                                <option value="1957">1957</option>
                                                <option value="1956">1956</option>
                                                <option value="1955">1955</option>
                                                <option value="1954">1954</option>
                                                <option value="1953">1953</option>
                                                <option value="1952">1952</option>
                                                <option value="1951">1951</option>
                                                <option value="1950">1950</option>
                                                <option value="1949">1949</option>
                                                <option value="1948">1948</option>
                                                <option value="1947">1947</option>
                                                <option value="1946">1946</option>
                                                <option value="1945">1945</option>
                                                <option value="1944">1944</option>
                                                <option value="1943">1943</option>
                                                <option value="1942">1942</option>
                                                <option value="1941">1941</option>
                                                <option value="1940">1940</option>
                                                <option value="1939">1939</option>
                                                <option value="1938">1938</option>
                                                <option value="1937">1937</option>
                                                <option value="1936">1936</option>
                                                <option value="1935">1935</option>
                                                <option value="1934">1934</option>
                                                <option value="1933">1933</option>
                                                <option value="1932">1932</option>
                                                <option value="1931">1931</option>
                                                <option value="1930">1930</option>
                                                <option value="1929">1929</option>
                                                <option value="1928">1928</option>
                                                <option value="1927">1927</option>
                                                <option value="1926">1926</option>
                                                <option value="1925">1925</option>
                                                <option value="1924">1924</option>
                                                <option value="1923">1923</option>
                                                <option value="1922">1922</option>
                                                <option value="1921">1921</option>
                                                <option value="1920">1920</option>
                                                <option value="1919">1919</option>
                                                <option value="1918">1918</option>
                                                <option value="1917">1917</option>
                                                <option value="1916">1916</option>
                                                <option value="1915">1915</option>
                                                <option value="1914">1914</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



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
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 3,
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 4,
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 4,
            },
            // when window width is >= 768px
            767: {
                slidesPerView: 5,
            },
        },
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