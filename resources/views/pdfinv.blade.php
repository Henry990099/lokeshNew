


        <style>
               
                body {
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  height: 100vh;
                  flex-direction: column;
                }

             
                .container {
                  text-align: center;
                  display: flex;
                  justify-content: space-around;
                  align-items: center;
                  margin-bottom: 20px;
                }

              
                table {
                  border-collapse: collapse;
                  width: 100%;
                }

                th, td {
                  border: 1px solid black;
                  padding: 8px;
                  text-align: center;
                }
                .textbox textarea{
                margin: 0rem 1rem;
                width: 60%;
                height: 70px;
            }
                
        </style>
        <div class="container">
            <div class="textbox">
                <div>
                    <h6 style="font-size: 30px; color: #000000;">Seal Configurator <sup>TM</sup></h6>
                </div>
            </div>

            <div class="textbox">
                <table>
                    <thead>
                        <tr style="background: #e8e3e2;">
                            <th>Estimate#</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>23 xxxxx</td>
                            <td>5/3/2023</td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <thead>
                        <tr style="background: #47a5f4;">
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>RPE</td>
                        </tr>
                        <tr>
                            <td>RP</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container">
            <div class="textbox" style="">
                <label style="font-weight: bold;font-size: 20px">NAME / ADDRESS</label>
                 <table style=" margin-top: 1rem;">
                    <thead>
                        <tr style="background: #e8e3e2;">
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Client Name Enter Here </td>
                            
                        </tr>
                        <tr>
                            <td>Address Enter Here </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="textbox" style="margin-top: 1rem">
                <label style="font-weight: bold;font-size: 20px  ">SHIP TO</label>
                 <table style=" margin-top: 1rem;">
                    <thead>
                        <tr style="background: #e8e3e2;">
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Shipment Reciver Name here</td>
                        </tr>
                        <tr>
                            <td>Shiper Name Address Here</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <table style="width: 100%; margin-top: 2rem">
            <thead>
                 @foreach ($output as $key => $value) 
                    @if($key==0)
                        <tr style="background: #e8e3e2;">
                            @foreach($value as $key2=>$value2)
                                @if($value2=="0")
                                <?php continue ; ?>
                                @endif
                                <th>{{$value2}}</th>
                            @endforeach
                        </tr>
                    @endif
            </thead>
            <tbody>
                @if($key!=0)
                        <tr>
                            @foreach($value as $key2=>$value2)
                                <td>{{$value2}}</td>
                            @endforeach
                        </tr>
                    @endif
                    @endforeach
            </tbody>
        </table>

        <div class="container">
        <div class="textbox" style="margin-top: 1rem">
            <label style="font-weight: bold;font-size: 20px;float:left;margin-left:100px;margin-bottom:10px ">Approved</label>
        <div class="textbox">
            <table style=" margin-top: 1rem; width:40%;clear:both">
                <thead>
                    <tr style="background: #47a5f4;">
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Name : ____________</td>
                    </tr>
                    <tr>
                        <td>QTY : ______________</td>
                    </tr>
                    <tr>
                        <td>Address : ____________</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
        <div class="textbox" style="float: right">
            <p>61.85 x 64.85 x 7.50</p>
            <p>Material: PTFE Carbon-Graphite(23/2)</p>
            <p>Dimension: Metric</p>
            <p>05/012/23</p>
        </div>
        
    </div>
