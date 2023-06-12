<!DOCTYPE html>
<html lang="en">

<head>
    @include('../includes.compatibility')
    <meta name="description" content="" />
    <title>Seal Configurator | Home</title>
    @include('../includes.styles')>
</head>

<body>
    @include('../includes.header')
    <section style="margin-top: 6rem; margin-bottom: 3rem;">
        <form id="inventory" method="POST" action="{{ url('inventory') }}" enctype="multipart/form-data">
            @csrf
            <div class="container-fluid pl-5">
                <div class="row">
                    <div class="col-md-2">
                        <div class="invantory-btn  wow bounceIn" style="animation-delay: 0.1s;">
                            <input type="file" name="csv" accept=".csv">
                            <i class="fa-solid fa-file"></i> UPDATE INVENTORY
                        </div>
                    </div>
                </div>
                <div class="row wow bounceInRight" style="animation-delay: 0.2s;">
                    <div class="col-md-8">
                        <div class="invan-feild mt-4">
                            <input type="text" placeholder="Hello Are You Ready- Lets do this" name="" />
                        </div>
                        <label class="custom-field-inv one">
                            <input type="text" name="setup" placeholder=" " />
                            <span class="placeholder">Setup Cpst/hr</span>
                        </label>
                        <label class="custom-field-inv one">
                            <input type="text" name="qcinspector" placeholder=" " />
                            <span class="placeholder">Qc InspectorCost/hr</span>
                        </label>
                        <label class="custom-field-inv one">
                            <input type="text" name="toolingcost" placeholder=" " />
                            <span class="placeholder">Tooling Cost/pr</span>
                        </label>
                        <label class="custom-field-inv one">
                            <input type="text" placeholder=" "name="rejectionrate" />
                            <span class="placeholder">rejection Rate (%)</span>
                        </label>
                    </div>
                </div>

                <div class="row wow bounceInRight" style="animation-delay: 0.4s;">
                    <div class="col-md-8">
                        <div class="mt-4 quality-heading">
                            <h5>Quality Control Time</h5>
                        </div>
                    </div>
                </div>

                <div class="row wow bounceInRight" style="animation-delay: .4s;">
                    <div class="col-md-3">
                        <div class="mt-5 lot-size">
                            <h5>Lot Size</h5>
                            <h5>Quality Control Time (hr)</h5>
                        </div>
                        <div class="mt-2 lot-size">
                            <h5>1-100</h5>
                            <div class="invan-feild">
                                <input type="text" placeholder="0.5" name="qctime1" />
                            </div>
                        </div>
                        <div class="mt-2 lot-size">
                            <h5>101-500</h5>
                            <div class="invan-feild">
                                <input type="text" placeholder="0.5" name="qctime2" />
                            </div>
                        </div>
                        <div class="mt-2 lot-size">
                            <h5>501-1000</h5>
                            <div class="invan-feild">
                                <input type="text" placeholder="0.5" name="qctime3" />
                            </div>
                        </div>
                        <div class="mt-2 lot-size">
                            <h5>1001-up</h5>
                            <div class="invan-feild">
                                <input type="text" placeholder="0.5" name="qctime4" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row wow bounceInRight" style="animation-delay: 0.6s;">
                    <div class="col-md-8">
                        <div class="mt-4 quality-heading">
                            <h5>Set up Time/Cost of prep</h5>
                        </div>
                    </div>
                </div>

                <div class="row wow bounceInRight" style="animation-delay: 0.6s;">
                    <div class="col-md-3">
                        <div class="mt-5 lot-size">
                            <h5>Seal Size (mm)</h5>
                            <h5>Setup time (hr)</h5>
                        </div>
                        <div class="mt-2 lot-size">
                            <h5>1-50</h5>
                            <div class="invan-feild">
                                <input type="text" placeholder="0.5" name="setuptime1" />
                            </div>
                        </div>
                        <div class="mt-2 lot-size">
                            <h5>101-500</h5>
                            <div class="invan-feild">
                                <input type="text" placeholder="0.5" name="setuptime2" />
                            </div>
                        </div>
                        <div class="mt-2 lot-size">
                            <h5>501-1000</h5>
                            <div class="invan-feild">
                                <input type="text" placeholder="0.5" name="setuptime3" />
                            </div>
                        </div>
                        <div class="mt-2 lot-size">
                            <h5>1001-up</h5>
                            <div class="invan-feild">
                                <input type="text" placeholder="0.5" name="setuptime4" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <label class="custom-field-inv one">
                            <input type="text" placeholder="" name="aqllevel" />
                            <span class="placeholder">AQL Level</span>
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="mt-4 quality-heading">
                            <h5>Lead Time</h5>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mt-5 lot-size">
                            <h5>Lot Size (Pcs)</h5>
                            <h5>(Days)</h5>
                        </div>
                        <!-- <div class="mt-2 lot-size">
            <div class="invan-feild">
              <input type="text" placeholder="5" name="" />
            </div>
            <div class="invan-feild">
              <input type="text" placeholder="5" name="" />
            </div>
          </div>
          <div class="mt-2 lot-size">
            <div class="invan-feild">
              <input type="text" placeholder="5" name="" />
            </div>
            <div class="invan-feild">
              <input type="text" placeholder="6" name="" />
            </div>
          </div>
          <div class="mt-2 lot-size">
            <div class="invan-feild">
              <input type="text" placeholder="5" name="" />
            </div>
            <div class="invan-feild">
              <input type="text" placeholder="7" name="" />
            </div>
          </div>
          <div class="mt-2 lot-size">
            <div class="invan-feild">
              <input type="text" placeholder="5" name="" />
            </div>
            <div class="invan-feild">
              <input type="text" placeholder="8" name="" />
            </div>
          </div> -->

                        <div class="mt-2 lot-size">
                            <h5>1-100</h5>
                            <div class="invan-feild">
                                <input type="text" placeholder="0.5" name="leadtime1" />
                            </div>
                        </div>
                        <div class="mt-2 lot-size">
                            <h5>101-25</h5>
                            <div class="invan-feild">
                                <input type="text" placeholder="0.5" name="leadtime2" />
                            </div>
                        </div>
                        <div class="mt-2 lot-size">
                            <h5>251-500</h5>
                            <div class="invan-feild">
                                <input type="text" placeholder="0.5" name="leadtime3" />
                            </div>
                        </div>
                        <div class="mt-2 lot-size">
                            <h5>501-up</h5>
                            <div class="invan-feild">
                                <input type="text" placeholder="0.5" name="leadtime4" />
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-4">
                        <div class="mt-4 quality-heading">
                            <h5>Qty Price Selection</h5>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="table-responsive mt-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col quality-heading">
                                            <h5>Pieces</h5>
                                        </th>
                                        <th scope="col quality-heading">
                                            <h5>Price Selector</h5>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="invan-feild">
                                                <h5>1-500</h5>
                                            </div>
                                        </td>
                                        <td>
                                            <label class="custom-field-inv-select one">
                                                <select name="qty1">
                                                    <option value="Max">Max </option>
                                                    <option value="Min">Min</option>
                                                    <option value="Avg">Avg</option>
                                                </select>
                                                <span class="placeholder">Custom Rank</span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="invan-feild">
                                                <h5>501-1000</h5>
                                            </div>
                                        </td>
                                        <td>
                                            <label class="custom-field-inv-select one">
                                                <select name="qty2">
                                                    <option value="Max">Max </option>
                                                    <option value="Min">Min</option>
                                                    <option value="Avg">Avg</option>
                                                </select>>
                                                <span class="placeholder">Custom Rank</span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="invan-feild">
                                                <h5>1001-up</h5>
                                            </div>
                                        </td>
                                        <td>
                                            <label class="custom-field-inv-select one">
                                                <select name="qty3">
                                                    <option value="Max">Max </option>
                                                    <option value="Min">Min</option>
                                                    <option value="Avg">Avg</option>
                                                </select>
                                                <span class="placeholder">Custom Rank</span>
                                            </label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="mt-4 quality-heading">
                            <h5>O-Ring Cost</h5>
                        </div>
                    </div>
                </div>

               <div class="row">
                <div class="col-md-8">
                   <div class="row table-responsive mt-4 pt-5 pb-5" >
                    <div class="col-md-12">
                        <div class="row quality-heading">
                            <div class="col-md-3">
                              <h5 style="color:rgba(255, 0, 0, 0)"> d</h5><br>
                                <h5>Speed (mm)</h5>
                                <div class="invan-feild mt-3">
                                  <h5>1-50</h5>
                                </div>
                                <div class="invan-feild mt-3">
                                  <h5>51-100</h5>
                                </div>
                                <div class="invan-feild mt-3">
                                  <h5>101-150</h5>
                                </div>
                                <div class="invan-feild mt-3">
                                  <h5>151-200</h5>
                                </div>
                            </div>
                            <div class="col-md-3">
                              <h5>FKM</h5><br>
                                <h5>Cost/pc</h5>
                                <div class="invan-feild mt-3">
                                    <input type="text" placeholder="1-50" name="fkm1" />
                                </div>
                                <div class="invan-feild mt-3">
                                    <input type="text" placeholder="1-50" name="fkm2" />
                                </div>
                                <div class="invan-feild mt-3">
                                    <input type="text" placeholder="1-50" name="fkm3" />
                                </div>
                                <div class="invan-feild mt-3">
                                    <input type="text" placeholder="1-50" name="fkm4" />
                                </div>
                            </div>
                            <div class="col-md-3">
                              <h5>NBR</h5><br>
                                <h5>Cost/pc</h5>
                                <div class="invan-feild mt-3">
                                    <input type="text" placeholder="1-50" name="pccost1" />
                                </div>
                                <div class="invan-feild mt-3">
                                    <input type="text" placeholder="1-50" name="pccost2" />
                                </div>
                                <div class="invan-feild mt-3">
                                    <input type="text" placeholder="1-50" name="pccost3" />
                                </div>
                                <div class="invan-feild mt-3">
                                    <input type="text" placeholder="1-50" name="pccost4" />
                                </div>
                            </div>
                            <div class="col-md-3">
                              <h5>SILICON</h5><br>
                                <h5>Cost/pc</h5>
                                <div class="invan-feild mt-3">
                                    <input type="text" placeholder="1-50" name="sliconcost1" />
                                </div>
                                <div class="invan-feild mt-3">
                                    <input type="text" placeholder="1-50" name="sliconcost2" />
                                </div>
                                <div class="invan-feild mt-3">
                                    <input type="text" placeholder="1-50" name="sliconcost3" />
                                </div>
                                <div class="invan-feild mt-3">
                                    <input type="text" placeholder="1-50" name="sliconcost4" />
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                </div>
               </div>

                <div class="row  mt-4">
                    <div class="col-md-8">
                        <label class="custom-field-inv one">
                            <input type="text" placeholder=" " name="mtrl" />
                            <span class="placeholder">Surcharge Mtrl (Enter in %)</span>
                        </label>
                        <label class="custom-field-inv one">
                            <input type="text" placeholder=" " name="overhead" />
                            <span class="placeholder">Overhead (Enter in %)</span>
                        </label>
                        <label class="custom-field-inv one">
                            <input type="text" placeholder=" " name="overall" />
                            <span class="placeholder">Surcharge Overall(Enter in %)</span>
                        </label>
                        <label class="custom-field-inv one">
                            <input type="text" placeholder=" " name="discount" />
                            <span class="placeholder">Discount (Enter in %)</span>
                        </label>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="table-responsive mt-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col quality-heading">
                                            <h5></h5>
                                        </th>
                                        <th scope="col quality-heading">
                                            <h5>Seal Size (mm)</h5>
                                        </th>
                                        <th scope="col quality-heading">
                                            <h5>Hourly Cost</h5>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="quality-heading">
                                                <h5>Machine 1</h5>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="invan-feild">
                                                <input type="text" placeholder="0-300" name="m1sealsize" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="invan-feild">
                                                <input type="text" placeholder="$98.00" name="m1cost" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="quality-heading">
                                                <h5>Machine 2</h5>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="invan-feild">
                                                <input type="text" placeholder="300-650" name="m2sealsize" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="invan-feild">
                                                <input type="text" placeholder="$98.00" name="m2cost" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="quality-heading">
                                                <h5>Machine 3</h5>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="invan-feild">
                                                <input type="text" placeholder="650-1500" name="m3sealsize" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="invan-feild">
                                                <input type="text" placeholder="$98.00" name="m3cost" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="quality-heading">
                                                <h5>Machine 4</h5>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="invan-feild">
                                                <input type="text" placeholder="501-1000" name="m4sealsize" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="invan-feild">
                                                <input type="text" placeholder="$98.00" name="m4cost" />
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <label class="custom-field-inv one">
                            <input type="text" placeholder=" " name="maxorderqty" />
                            <span class="placeholder">Max Order Qty</span>
                        </label>
                        <label class="custom-field-inv-select one">
                            <select name="customrank">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <span class="placeholder">Custom Rank</span>
                        </label>
                        <label class="custom-field-inv-select one">
                            <select name="custom">
                                <option value="Yes">Yes </option>
                                <option value="No">No</option>
                            </select>
                            <span class="placeholder">Custom Rank</span>
                        </label>
                        <label class="custom-field-inv one">
                            <input type="text" placeholder=" " name="bandsaw" />
                            <span class="placeholder">Band Saw Thickness</span>
                        </label>
                    </div>
                </div>
                <button class="submit_btn">SUBMIT</button>
            </div>
        </form>
    </section>

    @include('../includes.footer')
    @include('../includes.scripts')
    <script>
        function importData() {
            let input = document.createElement('input');
            input.type = 'file';
            input.onchange = _ => {
                // you can use this method to get file and perform respective operations
                let files = Array.from(input.files);
                console.log(files);
            };
            input.click();

        }
    </script>
    <script>
        //   $("#inventory").submit(function(stay){
        //    var formdata = $(this).serialize();
        //     $.ajax({
        //         type: 'POST',
        //         url: "{{ url('inventory') }}",
        //         data: {
        //                _token: '{!! csrf_token() !!}',
        //                data: formdata
        //              },
        //         success: function (data) {
        //            console.log(data);
        //         },
        //     });
        //     stay.preventDefault(); 
        // });
    </script>
</body>

</html>
