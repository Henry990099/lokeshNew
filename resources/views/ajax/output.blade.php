<?php
    $outputs = Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Webpage')->get();
    $output = [];
    $loop=-1;$increment=0;
    foreach($outputs as $key=>$value)
    { 
        if($key>=6)
        {
            $loop++; $increment=0;
            foreach($value as $key2=> $value2)
            {
                if($key2>=11)
                {
                    $output[$loop][$increment++]=$value2;
                }
            }
        }
    }
?>
             <thead class="last-step">
                        @foreach ($output as $key => $value) 
                            @if($key==0)
                                <tr>
                                    @foreach($value as $key2=>$value2)
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

     