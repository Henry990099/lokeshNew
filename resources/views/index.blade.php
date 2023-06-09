<!DOCTYPE html>
<html lang="en">
  <head> @include("includes.compatibility")
    <meta name="description" content="" />
    <title>Seal Configurator | Seal</title> @include("includes.styles")
  </head>
  <style type="text/css">
    @import url("https://fonts.googleapis.com/css?family=Roboto");
    .wizard>div.wizard-inner {
    top: 70px;
    position: fixed;
    margin-bottom: 51px;
    text-align: center;
    width: 100%;
    z-index: 9999999999999;
    background: #34393f;
    height: 89px;
}
    /*------------------------*/
    input:focus,
    button:focus,
    .form-control:focus {
      outline: none;
      box-shadow: none;
    }

    .form-control:disabled,
    .form-control[readonly] {
      background-color: #fff;
    }

    /*----------step-wizard------------*/
    .d-flex {
      display: flex;
    }

    .justify-content-center {
      justify-content: center;
    }

    .align-items-center {
      align-items: center;
    }

    /*---------signup-step-------------*/
    .bg-color {
      background-color: #333;
    }

    .signup-step-container {
      padding: 88px 0px;
      padding-bottom: 60px;
    }

    .wizard .nav-tabs {
      position: relative;
      margin-bottom: 0;
      border-bottom-color: transparent;
    }

    /* .wizard>div.wizard-inner {
      position: relative;
      margin-bottom: 50px;
      text-align: center;
    } */

    .connecting-line {
      height: 2px;
      background: #e0e0e0;
      position: absolute;
      width: 75%;
      margin: 0 auto;
      left: 0;
      right: 0;
      top: 15px;
      z-index: 1;
    }

    .wizard .nav-tabs>li.active>a,
    .wizard .nav-tabs>li.active>a:hover,
    .wizard .nav-tabs>li.active>a:focus {
      color: #555555;
      cursor: default;
      border: 0;
      border-bottom-color: transparent;
    }

    span.round-tab {
      width: 30px;
      height: 30px;
      line-height: 30px;
      display: inline-block;
      border-radius: 50%;
      background: #484e55;
      z-index: 2;
      position: absolute;
      left: 0;
      text-align: center;
      font-size: 19px;
      font-family: "Poppins", sans-serif;
      color: #fff;
      font-weight: 500;
      border: 1px solid #484e55;
      box-shadow: 0 2px 17px 13px rgb(46 46 46 / 69%);
      transition: 0.3s;
    }

    span.round-tab i {
      color: #555555;
    }

    .wizard li.active span.round-tab {
      background: #47a5f4;
      color: #fff;
      border-color: #47a5f4;
      box-shadow: 0 2px 17px 13px rgb(46 46 46 / 69%);
      transition: 0.3s;
    }

    .wizard li.active span.round-tab i {
      color: #5bc0de;
    }

    .wizard .nav-tabs>li.active>a i {
      font-size: 22px;
      text-align: center;
      color: #fff;
      font-weight: 400;
    }

    .wizard .nav-tabs>li {
      width: 25%;
    }

    .wizard li:after {
      content: " ";
      position: absolute;
      left: 46%;
      opacity: 0;
      margin: 0 auto;
      bottom: 0px;
      border: 5px solid transparent;
      border-bottom-color: red;
      transition: 0.1s ease-in-out;
    }

    .wizard .nav-tabs>li a {
      width: 30px;
      height: 30px;
      margin: 20px auto;
      border-radius: 100%;
      padding: 0;
      background-color: transparent;
      position: relative;
      top: 0;
    }

    .wizard .nav-tabs>li a i {
      position: absolute;
      top: 50px;
      font-style: normal;
      white-space: nowrap;
      left: 50%;
      transform: translate(-37%, -50%);
      color: #9ea2a7;
      font-size: 22px;
      text-align: center;
      font-weight: 400;
    }

    .wizard .nav-tabs>li a:hover {
      background: transparent;
    }

    .wizard .tab-pane {
      position: relative;
      padding-top: 20px;
    }

    .wizard h3 {
      margin-top: 0;
    }

    .prev-step,
    .next-step {
      font-size: 13px;
      /*padding: 8px 24px;*/
      border: none;
      cursor: pointer;
      border-radius: 4px;
    }

    .next-step {
      background-color: transparent;
      cursor: pointer;
    }

    .skip-btn {
      background-color: #cec12d;
    }

    .step-head {
      font-size: 20px;
      text-align: center;
      font-weight: 500;
      margin-bottom: 20px;
    }

    .term-check {
      font-size: 14px;
      font-weight: 400;
    }

    .custom-file {
      position: relative;
      display: inline-block;
      width: 100%;
      height: 40px;
      margin-bottom: 0;
    }

    .custom-file-input {
      position: relative;
      z-index: 2;
      width: 100%;
      height: 40px;
      margin: 0;
      opacity: 0;
    }

    .custom-file-label {
      position: absolute;
      top: 0;
      right: 0;
      left: 0;
      z-index: 1;
      height: 40px;
      padding: 0.375rem 0.75rem;
      font-weight: 400;
      line-height: 2;
      color: #495057;
      background-color: #fff;
      border: 1px solid #ced4da;
      border-radius: 0.25rem;
    }

    .custom-file-label::after {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      z-index: 3;
      display: block;
      height: 38px;
      padding: 0.375rem 0.75rem;
      line-height: 2;
      color: #495057;
      content: "Browse";
      background-color: #e9ecef;
      border-left: inherit;
      border-radius: 0 0.25rem 0.25rem 0;
    }

    .footer-link {
      margin-top: 30px;
    }

    .all-info-container {}

    .list-content {
      margin-bottom: 10px;
    }

    .list-content a {
      padding: 10px 15px;
      width: 100%;
      display: inline-block;
      background-color: #f5f5f5;
      position: relative;
      color: #565656;
      font-weight: 400;
      border-radius: 4px;
    }

    .list-content a[aria-expanded="true"] i {
      transform: rotate(180deg);
    }

    .list-content a i {
      text-align: right;
      position: absolute;
      top: 15px;
      right: 10px;
      transition: 0.5s;
    }

    .form-control[disabled],
    .form-control[readonly],
    fieldset[disabled] .form-control {
      background-color: #fdfdfd;
    }

    .list-box {
      padding: 10px;
    }

    .signup-logo-header .logo_area {
      width: 200px;
    }

    .signup-logo-header .nav>li {
      padding: 0;
    }

    .signup-logo-header .header-flex {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .list-inline li {
      display: inline-block;
    }

    .pull-right {
      float: right;
    }

    /*-----------custom-checkbox-----------*/
    /*----------Custom-Checkbox---------*/
    input[type="checkbox"] {
      position: relative;
      display: inline-block;
      margin-right: 5px;
    }

    input[type="checkbox"]::before,
    input[type="checkbox"]::after {
      position: absolute;
      content: "";
      display: inline-block;
    }

    input[type="checkbox"]::before {
      height: 16px;
      width: 16px;
      border: 1px solid #999;
      left: 0px;
      top: 0px;
      background-color: #fff;
      border-radius: 2px;
    }

    input[type="checkbox"]::after {
      height: 5px;
      width: 9px;
      left: 4px;
      top: 4px;
    }

    input[type="checkbox"]:checked::after {
      content: "";
      border-left: 1px solid #fff;
      border-bottom: 1px solid #fff;
      transform: rotate(-45deg);
    }

    input[type="checkbox"]:checked::before {
      background-color: #18ba60;
      border-color: #18ba60;
    }

    @media (max-width: 767px) {
      .sign-content h3 {
        font-size: 40px;
      }

      .wizard .nav-tabs>li a i {
        display: none;
      }

      .signup-logo-header .navbar-toggle {
        margin: 0;
        margin-top: 8px;
      }

      .signup-logo-header .logo_area {
        margin-top: 0;
      }

      .signup-logo-header .header-flex {
        display: block;
      }
    }

    input[type="radio"] {
      accent-color: #47a5f4;
      cursor: pointer;
    }

    ul.list-inline.pull-right {
      position: fixed;
      top: 92%;
      right: 1%;
    }

    .first-btn a {
      font-size: 18px;
    color: #4a9ff0;
    background: #ffffff;
      padding: 3px 19px;
      border-radius: 28px;
      position: absolute;
          top: 14.6%;
    left: 20%;
      width: 12%;
      border: 1px solid #4a9ff0;
      text-align: center;
  }
  .first-btn a:hover{
        background: #45a0f3;
    border: 1px solid #4a9ff0;
    color: #ffffff;
}

    .sec-btn a {
      font-size: 18px;
      color: #4a9ff0;
      background: #ffffff;
      padding: 3px 19px;
      border-radius: 28px;
      position: absolute;
      top: 2.9%;
      left: 38%;
      width: 13%;
      border: 1px solid #4a9ff0;
      text-align: center;
    }

    .sec-btn a:hover {
      background: #45a0f3;
      border: 1px solid #4a9ff0;
      color: #ffffff;
    }

    .third-btn a {
      font-size: 18px;
      color: #4a9ff0;
      background: #ffffff;
      padding: 3px 17px;
      border-radius: 28px;
      position: absolute;
      top: 6.9%;
      left: 53.5%;
      width: 14%;
      border: 1px solid #4a9ff0;
      text-align: center;
    }

    .third-btn a:hover {
      background: #45a0f3;
      border: 1px solid #4a9ff0;
      color: #ffffff;
    }

    .fourth-btn a {
      font-size: 18px;
      color: #4a9ff0;
      background: #ffffff;
      padding: 3px 17px;
      border-radius: 28px;
      position: absolute;
      top: 10.1%;
      left: 72.5%;
      width: 14%;
      border: 1px solid #4a9ff0;
      text-align: center;
    }

    .fourth-btn a:hover {
      background: #45a0f3;
      border: 1px solid #4a9ff0;
      color: #ffffff;
    }

    .five-btn a {
      font-size: 18px;
      color: #4a9ff0;
      background: #ffffff;
      padding: 3px 17px;
      border-radius: 28px;
      position: absolute;
      top: 85.1%;
      left: 10.5%;
      width: 18%;
      border: 1px solid #4a9ff0;
      text-align: center;
    }

    .five-btn a:hover {
      background: #45a0f3;
      border: 1px solid #4a9ff0;
      color: #ffffff;
    }

    .six-btn a {
      font-size: 18px;
      color: #4a9ff0;
      background: #ffffff;
      padding: 3px 17px;
      border-radius: 28px;
      position: absolute;
      top: 85.1%;
      left: 51.1%;
      width: 11%;
      border: 1px solid #4a9ff0;
      text-align: center;
    }
.seal-1{
  background: transparent;
    padding: 1px;
    position: absolute;
    top: 55.8%;
    RIGHT: 26%;
    text-align: center;
    color: #fff;
    z-index: 999;
    font-weight: 600;
    font-size: 18px;
    background: #33a0f3;
    padding: 4px 0px;
    border-radius: 72px !important;
    border: none;
    width: 16% !important;
    height: 31px;

}
.seal-3{
  background: transparent;
    padding: 1px;
    position: absolute;
    top: 6.4%;
    right: 45.5%;
    text-align: center;
    color: #fff;
    z-index: 999;
    font-weight: 600;
    font-size: 18px;
    background: #33a0f3;
    padding: 4px 0px;
    border-radius: 72px !important;
    border: none;
    width: 16% !important;
    height: 32px;

}
.seal-2{
  background: transparent;
    padding: 1px;
    position: absolute;
    top: 51.1%;
    left: 20.1%;
    text-align: center;
    color: #fff;
    z-index: 999;
    font-weight: 600;
    font-size: 18px;
    background: #33a0f3;
    padding: 4px 0px;
    border-radius: 72px !important;
    border: none;
    width: 16% !important;
    height: 32px;

}
    .six-btn a:hover {
      background: #45a0f3;
      border: 1px solid #4a9ff0;
      color: #ffffff;
    }
    .data-sheet a{
        text-align: left;
    font-size: 30px;
    color: #fff;
    text-align: center;
    font-family: "Poppins", sans-serif;
    font-weight: 500;
    margin-bottom: 15px;
    }
    .p-3.data-sheet {
    text-align: center;
    display: revert;
    justify-content: center;
}
.p-3.data-sheet h4 {
    text-align: center;
}
#loader {
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: rgba(0, 0, 0, 0.7);
  color: #fff;
  padding: 10px 20px;
  border-radius: 4px;
  z-index: 9999;
}

.loader {
  animation: spin 1s infinite linear;
}

@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
  </style>
  <script>
    var backup="";

  
  </script>
  <?php
  
  $profiles = [
      "DF101",
      "DF102",
      "DF103",
      "DF104",
      "DF105",
      "DF106",
      "DF107",
      "DF108"
    ]; ?>
  <body> @include("includes.header") <section class="signup-step-container" style="margin-bottom: 3rem;">
  <?php $imagePath = "https://drive.google.com/uc?export=view&id=1xKBMVJv14FTjrUGOOAiymO6aNBa30G_r"; ?>

      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12">
            <div class="wizard">
              <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="first active">
                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true" class="active" aria-selected="true">
                      <span class="round-tab">1 </span>
                      <i>
                        <h6>Select Seal Type</h6>
                      </i>
                    </a>
                  </li>
                  <li role="presentation" class="">
                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false" class="" aria-selected="false">
                      <span class="round-tab">2</span>
                      <i>
                        <h6>Material Selection</h6>
                      </i>
                    </a>
                  </li>
                  <li role="presentation" class="">
                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" class="" aria-selected="false">
                      <span class="round-tab">3</span>
                      <i>
                        <h6>Seal/Gland Selection</h6>
                      </i>
                    </a>
                  </li>
                  <li role="presentation" class="last">
                    <a class="step4" href="#step4" data-toggle="tab" aria-controls="step4" role="tab" aria-selected="false">
                      <span class="round-tab">4</span>
                      <i>
                        <h6>Hooray, You made it</h6>
                      </i>
                    </a>
                  </li>
                </ul>
              </div>
              
              <div class="tab-content" id="main_form">
                <div class="tab-pane active" role="tabpanel" id="step1">
                  <div class="container-fluid mt-5">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="seal-type">
                          <h6>SEAL TYPE</h6>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <img src="assets/images/main-seal1.jpg" class="img-fluid rounded" alt="" width="100%" />
                        <div class="first-btn ">
                          <a href="" data-id="Wiper" class="category ">Wiper</a>
                        </div>
                        <div class="sec-btn ">
                          <a href="" data-id="Rod Seal" class="category ">Rod Seal</a>
                        </div>
                        <div class="third-btn ">
                          <a href="" data-id="Wear Ring" class="category ">Wear Ring</a>
                        </div>
                        <div class="fourth-btn ">
                          <a href="" data-id="Piston Seal" class="category ">Piston Seal</a>
                        </div>
                        <div class="five-btn ">
                          <a href="" data-id="Back-up Ring" class="category ">Back-Up Ring</a>
                        </div>
                        <div class="six-btn ">
                          <a href="" data-id="Gasket" class="category ">GasKet</a>
                        </div>
                      </div>
                      <div class="col-md-6 rounded">
                        <img src="assets/images/seal-img1.jpg" class="img-fluid rounded category" width="100%" alt="" data-id="Rotary Seal" />
                      </div>
                    </div>
                    <div id="sub_category_fetch"></div>
                  </div>
                  <ul class="list-inline pull-right">
                    <li>
                      <button id="nextStep" type="button" class="default-btn next-step">
                        <i class="fa-solid fa-arrow-right"></i>
                      </button>
                    </li>
                  </ul>
                </div>
                <div class="tab-pane" role="tabpanel" id="step2">
                  <div class="container mt-5">
                    <div class="row">
                      <div class="col-md-5 radio-heading">
                        <div class="measure-type">
                          <h6>MEASUREMENTS AND MATERIAL</h6>
                        </div>
                        <input type="radio" id="html" class="inchMetric" name="fav_language" value="Inch" />
                        <label for="html">Inch</label>
                        <input type="radio" id="css" class="inchMetric" name="fav_language" class="ml-4" value="Metric" />
                        <label for="css">Metric</label>
                        <label class="custom-field-inv-select one mt-4">
                          <select id="select_id">
                            <option>Please Select</option>
                            <option value="POLYURETHANE" class="material">POLYURETHANE</option>
                            <option value="ELASTOMERS" class="material">ELASTOMERS</option>
                            <option value="PTFE" class="material">PTFE</option>
                            <option value="THERMOPLASTIC">THERMOPLASTIC</option>
                          </select>
                          <span class="placeholder">MATERIAL FAMILY</span>
                        </label>
                        <label class="custom-field-inv-select one mt-3">
                          <select id="material_selecton">
                            <option>Please Select</option>
                          </select>
                          <span class="placeholder">MATERIAL SELECTION</span>
                        </label>
                      </div>
                      <div class="col-md-2"></div>
                      <div class="col-md-5">
                        <div class="shA material">
                          <h6></h6>
                        </div>
                        <div class="text-center" id="materialImage">
                          
                        </div>
                        <div class="row">
                          <div class="col-md-2"></div>
                          <div class="col-md-8">
                            <div class="shA-ul mt-4 materialUl">
                              
                            </div>
                          </div>
                          <div class="col-md-2"></div>
                        </div>
                      </div>
                    </div>

                    <div class="row" style="margin-top: 40px"  id="backup_material">
                      
                    </div>
                    
                  </div>
                  
                  <ul class="list-inline pull-right left">
                    <li>
                      <button type="button" class="default-btn prev-step">
                        <i class="fa-solid fa-arrow-left"></i>
                      </button>
                    </li>
                  </ul>
                  
                  <ul class="list-inline pull-right">
                    <li>
                        <button id="nextStep" type="button" class="default-btn next-step">
                          <i class="fa-solid fa-arrow-right"></i>
                        </button>
                      </li>
                  </ul>
                </div>
                <!-- STEP O3 -->
                <div class="tab-pane" role="tabpanel" id="step3">
                  <div class="container-fluid mt-5">
                    <div class="row">
                      <div class="col-md-5 radio-heading pl-5">
                        <div id="sub_category_value" class="measure-type">
                          <h6>INPUT YOUR DIMENSIONS</h6>
                        </div> @if(!empty($subCat) && $subCat['value'] == 'Y') <label class="custom-field-inv-select one mt-4">
                          <select id="select_id">
                            <option>Please Select</option>
                            <option value="FKM" class="energizer">FKM</option>
                            <option value="NBM" class="energizer">NBM</option>
                            <option value="SILICONE" class="energizer">SILICONE</option>
                          </select>
                          <span class="placeholder">ENERGIZER</span>
                        </label> @endif <p class="mt-3">Do you have Gland Dimensions or Seal Dimensions?</p>
                        <p class="mb-4">Please Select as applicable.</p>
                        <input type="radio" id="html" class="sealGland sealDim" name="dimensions" onchange="dimensionChange(this);" value="Seal" />
                        <label class="sealDim" for="html">Seal Dimensions </label>
                        <input type="radio" id="css" name="dimensions" onchange="dimensionChange(this);" class="ml-4 sealGland" value="Gland" />
                        <label for="css">Gland Dimensions</label>
                        <div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="invan-feild mt-4">
                                <input type="text" class="id" id="dimension-id" onkeyup="dimensionFields()" placeholder="ID" name="ID" />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="invan-feild mt-4">
                                <input type="text" class="od" id="dimension-od" onkeyup="dimensionFields()" placeholder="OD" name="OD" />
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        <div class="changeDimensions" style="display:none">
                        <input type="radio" id="html" class="sealHeight mt-3 sealD" name="seal_height" value="Seal" />
                        <label for="html " class="sealD">Seal Height </label>
                        <input type="radio" id="css" name="seal_height" class="ml-4 sealHeight mt-3 glandD" value="Gland" />
                        <label for="css" class="glandD">Gland Height</label>
                        <div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="invan-feild mt-4">
                                <input type="text" class="ht" id="dimension-ht" onkeyup="dimensionFields()" placeholder="HT" name="HT" />
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                        
                        <div class="limits mt-4">
                          <p>Size Limits: Min ID = 10mm or 3/8 in Max OD = 609 mm or 24 in</p>
                        </div>
                        <div class="quantity">
                          <h6>QUANTITY</h6>
                          <div class="row">
                            
                              <div class="invan-feild mt-2 pl-3 trash-icon field_wrapper col-md-12">
                                <div class="row">
                                  <div class="col-md-4">
                                    <input type="number" placeholder="Quantity" class="quantity" name="quantity[]" onkeyup="dimensionFields()" style="padding: 14px 40px 12px 12px;">
                                  </div>
                                  <div class='fetch-message0 quantity-message col-md-7'></div>
                                </div>
                              </div>
                              
                              <div class="plus add_button">
                                <i class="fa-solid fa-plus"></i>
                              </div>
                            
                          </div>
                        </div>
                        @if(!in_array(session()->get('subCategory'),$profiles))
                        <div class="row mt-5">
                          <div class="col-md-6 split-box">
                            <p class="mb-2">Split</p>
                            <input type="radio" id="html" name="split_data" value="Yes" onchange="split_data(this);" />
                            <label for="html">Yes </label>
                            <input type="radio" id="css" name="split_data" class="ml-3" value="No" checked onchange="split_data(this);" />
                            <label for="css">No</label>
                            <div class="split_data" style="display:none">
                              <p class="mb-2 mt-3">Type Of Cut</p>
                              <input type="radio" id="html" name="fav_language" value="HTML" />
                              <label for="html">Butt Cut </label>
                              <input type="radio" id="css" name="fav_language" class="ml-3" value="CSS" />
                              <label for="css">Scaft Cut</label>
                              <div class="invan-feild mt-2 mb-2">
                              </div>
                              <input type="radio" id="gap" name="gapNoGap" value="HTML" />
                              <label for="gap">Gap</label>
                              <input type="radio" id="nogap" name="gapNoGap" class="ml-3" value="CSS" />
                              <label for="nogap">No Gap</label>
                              <div id="gapThickness" class="invan-feild mt-2 mb-2" style="display:none">
                                <input class="gapThickness" type="text" placeholder="Gap Thickness" name="gapThickness" />
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="notes">
                              <textarea placeholder="Additional Notes"></textarea>
                            </div>
                          </div>
                        </div>
                        @endif
                      </div>
                      <div class="col-md-7">
                        
                       <div class="row">
                        {{-- <div class="col-md-6">
                            <div class="p-3">
                                <img src="assets/images/step-3.jpg" alt="" class="img-fluid" width="100%" />
                              </div>
                        </div> --}}
                        <div class="col-md-6">
                            <div class="p-3 data-sheet" >
                                <h4>
                                </h4>
                                <img src="assets/images/image_2023_06_08T22_08_13_304Z.png" alt="" class="img-fluid" width="100%" />
                               <h4 class="mt-4"> <a href="{{url::asset('assets/K01-P-Piston-seal-datasheet_.pdf')}}" target="_blank">Data Sheet</a></h4>
                               <div class="dimensions-fields">
                                <span class="id seal-1"></span>
                                <span class="od seal-2"></span>
                                <span class="ht seal-3"></span>
                              </div>
                               </div>
                        </div>
                       </div>
                        {{-- <div class="d-flex justify-content-space-around">
                          
                          <div class="p-3">
                           
                          </div>
                        </div> --}}
                      </div>
                    </div>
                    {{-- <div class="container">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="feed-back">
                            <h4>Feedback</h4>
                          </div>
                          <div class="invan-feild mt-4">
                            <input type="text" placeholder="Please input your valuable feedback/suggestions here" name="" style="height: 68px !important; font-size: 20px; border-radius: 10px;" />
                            <div class="d-flex justify-content-center">
                              <button class="submit_btn">SUBMIT <i class="fa-solid fa-envelope"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> --}}
                    <ul class="list-inline pull-right">
                      <li>
                        <button type="button" class="default-btn next-step">
                          <i class="fa-solid fa-arrow-right"></i>
                        </button>
                      </li>
                    </ul>
                    <!--<ul class="list-inline pull-right">-->
                    <!--  <li><button type="button" class="default-btn prev-step">Back</button></li>-->
                    <!--  <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>-->
                    <!--  <li><button type="button" class="default-btn next-step">Continue</button></li>-->
                    <!--</ul>-->
                  </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="step4">
                  <div class="container mt-5">
                    <div class="row">
                      <div class="col-md-12 radio-heading">
                        <div class="measure-type">
                          <h6>FINAL QUOTE</h6>
                        </div>
                        <p class="mb-3">Rush Order</p>
                        <input type="radio" id="html" name="rush_order" class="rush_order" value="Yes" />
                        <label for="html">Yes</label>
                        <input type="radio" id="css" name="rush_order" class="ml-4 rush_order" value="No" />
                        <label for="css">No</label>
                        <div class="mt-3" style="font-size:large">
                          <a href="#" id="calculate">
                            <i class="fa-solid fa-file"></i>
                            <span style="color: #47a5f4;font-size:22px;">CALCULATE</span>
                          </a>
                        </div>
                        <div class="table-responsive mt-4">
                            <div id="loader">Loading...</div>
                          <table class="table" id="table"></table>
                        </div>
                        <div class="downloads mt-4">
                          {{-- <div>
                            <a href="#">
                              <i class="fa-solid fa-file"></i>
                              <span style="color: #47a5f4;"> Save Quote</span>
                            </a>
                          </div> --}}
                          <div>
                            {{-- <button id="download-btn">Download Quote</button> --}}
                            <a href="{{url('download-pdf')}}" id="qoute">
                              <i class="fa-solid fa-file-arrow-down" style="color: green;"></i>
                              <span style="color: green;"> Download Quote</span>
                            </a>
                          </div>
                          {{-- <div>
                            <a href="#">
                              <i class="fa-solid fa-envelope" style="color: orange;"></i>
                              <span style="color: orange;"> E-mail Quote</span>
                            </a>
                          </div> --}}
                        </div>
                        {{-- <div class="d-flex justify-content-center mt-4 mb-5">
                          <button class="submit_btn">PLACE ORDER</button>
                        </div> --}}
                      </div>
                    </div>
                    {{-- <div class="row">
                      <div class="col-md-12">
                        <div class="feed-back">
                          <h4>Feedback</h4>
                        </div>
                        <div class="invan-feild mt-4">
                          <input type="text" placeholder="Please input your valuable feedback/suggestions here" name="" style="height: 68px !important; font-size: 20px; border-radius: 10px;" />
                          <div class="d-flex justify-content-center">
                            <button class="submit_btn">SUBMIT <i class="fa-solid fa-envelope"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div> --}}
                  </div>
                  <!--<ul class="list-inline pull-right">-->
                  <!--  <li><button type="button" class="default-btn prev-step">Back</button></li>-->
                  <!--  <li><button type="button" class="default-btn next-step">Finish</button></li>-->
                  <!--</ul>-->
                  <ul class="list-inline pull-right left">
                    <li>
                      <button type="button" class="default-btn prev-step">
                        <i class="fa-solid fa-arrow-left"></i>
                      </button>
                    </li>
                  </ul>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 
    @include("includes.footer") 
    @include("includes.scripts")  
    <script type="text/javascript">
      $(document).ready(function () {
          $(".nav-tabs > li a[title]").tooltip();
          $('a[data-toggle="tab"]').on("shown.bs.tab", function (e) {
              var target = $(e.target);

              if (target.parent().hasClass("disabled")) {
                  return false;
              }
          });

          $(".next-step").click(function (e) {
              var active = $(".wizard .nav-tabs li.active");
              active.next().removeClass("disabled");
              nextTab(active);
          });
          $(".prev-step").click(function (e) {
              var active = $(".wizard .nav-tabs li.active");
              prevTab(active);
          });
      });

      function nextTab(elem) {
          $(elem).next().find('a[data-toggle="tab"]').click();
      }
      function prevTab(elem) {
          $(elem).prev().find('a[data-toggle="tab"]').click();
      }

      $(".nav-tabs").on("click", "li", function () {
          $(".nav-tabs li.active").removeClass("active");
          $(this).addClass("active");
      });
  </script>          
    <script>
        function importData() {
            let input = document.createElement("input");
            input.type = "file";
            input.onchange = (_) => {
                let files = Array.from(input.files);
                console.log(files);
            };
            input.click();
        }
    </script>
 
    <script>
        $(".category").click(function (e) {
            $("#sub_category_fetch").html("").slideToggle();
            var urllink =  "{{URL::asset('step-two')}}/"
            e.preventDefault();
            var category=$(this).attr("data-id");
            $.ajax({
            method:'GET',
            url: urllink+category,
            success:function(result){
                console.log(result);
                $("#sub_category_fetch").html(result).slideToggle();
                $('html, body').animate({
                    scrollTop: $(".inst-btn").offset().top
                }, 2000); 
            },
        });
        });
    </script>
     <script>
        $('#select_id').on('change',function (e) {
            var urllink =  "{{URL::asset('measurement-material')}}/"
            e.preventDefault();
            var material=$(this).val();
            $.ajax({
            method:'GET',
            url: urllink+material,
            success:function(result){
                $("#material_selecton").empty();
                var firstVal = "";
                $("#material_selecton").append('<option value="">SELECT OPTION</option>');

                $.each(result[0],function(val,key){  
                  if(firstVal=="")
                    firstVal=val;
                  
                    $("#material_selecton").append('<option value=' + val + '>' + val.replaceAll("-"," ")  + '</option>');

                })
                // materialSelection(firstVal);
                
            },
            });
        });
    </script>
    <script>
        $(".inchMetric").change(function(){ 
            if( $(this).is(":checked") ){ 
              
                var inchMetric = $(this).val(); 
                var urllink =  "{{URL::asset('measurements')}}/"
                $.ajax({
                method:'GET',
                url: urllink+inchMetric,
                success:function(result){
                    console.log(result);
                },
            });
            }
        });
    </script>
      <script>
        $('#material_selecton').on('change',function (e) {
            e.preventDefault();
            var selection=$(this).val();
            
            materialSelection(selection);
        });

        function materialSelection(selection)
        {
          if(selection === '')
          {
            $('.material h6').empty();
                $(".shA-ul").html('')
                $("#materialImage").html('')
          }
          else{
              
          var urllink =  "{{URL::asset('material-selection')}}/"
          $.ajax({
            method:'GET',
            url: urllink+selection,
            success:function(result){
              var items = result.materialImage.split('/');
              var materials = result.material.replaceAll("-"," ")
                $('.material h6').text(materials);
                $(".materialUl").html('<ul><a target="_blank" href="'+result.materialSheet+'">'+result.feature+'</a></ul>')
                $("#materialImage").html('<img src="https://drive.google.com/uc?export=view&id='+items[5]+'" alt="" class="img-fluid" />')
                },
            });
          }
        }
    </script>
      <script>
        $(".sealGland").change(function(){ 
            var urllink =  "{{URL::asset('seal-gland')}}/"
            if( $(this).is(":checked") ){ 
                var sealGland = $(this).val(); 
                $.ajax({
                method:'GET',
                url: urllink+sealGland,
                success:function(result){
                    
                },
            });
            }
        });
    </script>
    <script>
        $(".sealHeight").change(function(){ 
            var urllink =  "{{URL::asset('seal-height')}}/"
            if( $(this).is(":checked") ){ 
                var sealHeight = $(this).val(); 
                $.ajax({
                method:'GET',
                url: urllink+sealHeight,
                success:function(result){
                    
                },
            });
            }
        });
    </script>

    <script>
        $(".rush_order").change(function(){ 
            var urllink =  "{{URL::asset('rush-order')}}/"
            if( $(this).is(":checked") ){ 
                var rushOrder = $(this).val(); 
                $.ajax({
                method:'GET',
                url: urllink+rushOrder,
                success:function(result){
                    
                },
            });
            }
        });
    </script>
<script>
$('.quantity').on('focusout', function() {
    var urllink =  "{{URL::asset('quantity')}}/"
    var values = $("input[name='quantity[]']").map(function(){return $(this).val();}).get();
    $.ajax({
        type:'POST',
        url: "{{URL::asset('quantity')}}",
        data: {
               _token: '{!! csrf_token() !!}',
               quantity: values
             },
        success: function(data) {
          var result = JSON.parse(data);
          if(result['code']=='200')
            {
              var message_array=result['data'];
              var length=message_array.length;
              for(var i=0;i<length;i++)
              {
                $(".fetch-message"+i).html(message_array[i]);
              }
            }
          },
        });
     });
</script>
<script>
$('.gapThickness').on('change', function() {
    var urllink =  "{{URL::asset('quantity')}}/"
    var thickness = $(this).val();
    console.log(thickness);
    $.ajax({
        type:'GET',
        url: "{{URL::asset('thickness')}}/"+thickness,
        success: function(data) {
          console.log(data);
          },
        });
     });
</script>



<script>
$('#dimension-id').on('change', function() {
    var urllink =  "{{URL::asset('id')}}/"
    var id = $('#dimension-id').val();
    $.ajax({
        method:'GET',
        url: urllink+id,
        success:function(result){
            console.log(result);
            $('.data-sheet h4').text(result);
        },
    });
});
</script>


<script>
$('#dimension-od').on('change', function() {
    var urllink =  "{{URL::asset('od')}}/"
    var od = $('#dimension-od').val();
    $.ajax({
        method:'GET',
        url: urllink+od,
        success:function(result){
            console.log(result);
        },
    });
});
</script>    
<script>    
$('#dimension-ht').on('change', function() {
    var urllink =  "{{URL::asset('ht')}}/"
    var ht = $('#dimension-ht').val();
    $.ajax({
        method:'GET',
        url: urllink+ht,
        success:function(result){
            console.log(result);
        },
    });
});
</script>

<script>
$('#calculate').on('click',function(){
    var urllink =  "{{URL::asset('output')}}/";
    $("#loader").show();
    $.ajax({
        url: urllink,
        method: 'GET',
        success:function(result){
            $("#table").html(result);
            $("#loader").hide();

        }
    });
});
</script>


<script type="text/javascript">
$(document).ready(function(){
    var maxField = 5; 
    var addButton = $('.add_button');
    var wrapper = $('.field_wrapper'); 
    var x = 1;
    
    $(addButton).click(function(){
        if(x < maxField){ 
          var fieldHTML = '<div class="row"><div class="col-md-4"><input type="text" name="quantity[]" class="quantity" placeholder="Quantity" value=""/><a href="javascript:void(0);" class="remove_button"> <i class="fas fa-solid fa-trash"></i></a></div><div class="col-md-7 quantity-message fetch-message'+x+'"></div></div>';
   
            $(wrapper).append(fieldHTML); 
         
            x++;
        }
    });
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').parent('div').remove(); 
        x--; 
    });
});

function dimensionChange(src) {
  var value=src.value;
   dimensionChange2(value,backup);
  }

  function dimensionChange2(value="",backup="")
  {
    
    $(".changeDimensions").css("display","initial");
    if(backup=="Y")
    {
        $(".sealD").css("display","none");
        $(".glandD").css("display","initial");
        $(".sealDim").css("display","none");
    }
    else
    {
        if(value=="Seal")
        {
          $(".sealD").css("display","initial");
          $(".glandD").css("display","none");
        }  
        else
        {
          $(".glandD").css("display","initial");
          $(".sealD").css("display","initial");
        }
            
    }
    
  }

  function dimensionFields()
  {
    var dimension_id= $("#dimension-id").val();
    var dimension_od=$("#dimension-od").val();
    var dimension_ht=$("#dimension-ht").val();

    $(".id").html(dimension_id);
    $(".od").html(dimension_od);
    $(".ht").html(dimension_ht);
  }

function split_data(src)
{
  var value=src.value;
  if(value=='Yes')
    $(".split_data").css("display","initial");
  else
    $(".split_data").css("display","none");
}
</script>
<script>
  $(document).ready(function(){
    $("input[name='gapNoGap']").click(function() {
     if ($("#gap").is(":checked")) {
       $("#gapThickness").show();
     } else {
       $("#gapThickness").hide();
     }
   });
  });
  </script>

<style>
  .sealD, .glandD
  {
    display:none ;
  }

  .quantity-message{
    font-size: 21px;
    font-weight: bold;
    margin-top: 10px;
  }
</style>
  </body>
</html>

@stack('custom-scripts')
