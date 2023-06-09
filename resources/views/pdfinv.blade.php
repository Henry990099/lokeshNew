


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
                margin: 0rem 6rem;
                width: 60%;
                height: 70px;
            }
                
        </style>
        <div class="container">
            <div class="textbox">
                <div>
                    <h6 style="font-size: 35px; color: #47a5f4;    margin-right: 18rem;">Seal Configurator <sup>TM</sup></h6>
                </div>
            </div>

            <div class="textbox">
                <table>
                    <thead>
                        <tr style="background: #47a5f4;">
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
                        <tr style="background: #47a5f4;">
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

            <div class="textbox" style="">
                <label style="font-weight: bold;font-size: 20px  margin-top: 5rem;">SHIP TO</label>
                 <table style=" margin-top: 5rem;">
                    <thead>
                        <tr style="background: #47a5f4;">
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

        <table style="    width: 100%; margin-top: 2rem">
            <thead>
                 @foreach ($output as $key => $value) 
                    @if($key==0)
                        <tr style="background: #47a5f4;">
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
 