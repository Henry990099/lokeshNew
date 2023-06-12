<?php
 
namespace App\Http\Controllers;

use Revolution\Google\Sheets\Facades\Sheets;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use PDF;

use Session;
  
class GoogleSpreadsheetController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function stepOne()
    {
        $sheets = Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Profile and Squezze')->get();
        $parts=[];
        foreach($sheets as $key=>$value)
        {
            if($key!=0)
            {
                if(!empty($value[0]))
                    $parts[$value[0]]=$value[0];
                //$parts['category'][$value[0]]['subcategories'][$value[1]]=$value[1];
            }                
        }
  
        return view('index',compact('parts'));
    }
    public function stepTwo($category)
    {
        
        $subCategory = Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Profile and Squezze')->get();

        $parts=[];
        foreach($subCategory as $key=>$value)
        {
            
            if($key!=0)
            {
                if($value[0] == $category)
                {
                    if(!isset($value[11]))
                        continue;        
                    $parts[$value[1]][$value[1]]=$value[11];
                }
                
            }
        }
        // echo '<pre>';
        // print_r($parts);
        // die;
 
        return view('ajax.subCategory',compact('parts'))->render();
    }

    public function stepThree($subCategory)
    {
 
        
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Webpage')->range('D9')->update([[$subCategory]]);
        $values = Sheets::range('')->all();

        $subCategory1 = Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Profile and Squezze')->get();
        $dataProfileAndSqueeze=[];
        foreach($subCategory1 as $key=>$value)
        {
            if($value[1]==$subCategory)
            {
                foreach($value as $key2=> $value2)
                {
                    if($key2==0)
                        $dataProfileAndSqueeze["profile"]=$value2;
                    if($key2==1)
                        $dataProfileAndSqueeze["type"]=$value2;
                    if($key2==4)
                        $dataProfileAndSqueeze["energizer"]=$value2;
                    if($key2==8)
                        $dataProfileAndSqueeze["backup"]=$value2;
                    if($key2==10)
                        $dataProfileAndSqueeze["noofseals"]=$value2;
                    if($key2==11)
                        $dataProfileAndSqueeze["imagepath"]=$value2;
                }
            }
        }
        session()->put('subCategory', $subCategory);
        return view('ajax.backup_material',compact('dataProfileAndSqueeze'))->render();
    
    }
    public function measurementAndMaterial($material)
    {
       
        $materials = Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Profile')->get();
        $materialDesc = [];
        $sheet = [];

        foreach($materials as $key=>$value)
        {         
           
            if($key!=0 && $key!=1)
            {  
                if(!isset($value[13]))
                    continue;        
                $materialDesc[$value[13]][$value[10]]=$value[10];
                if($value[1] == $material)
                {
                    $sheet[]=$value[8];
                }
            } 
        }
    
        return response()->json([
            $materialDesc[$material],$sheet]);
    }

    public function backupMaterial($material)
    {
        $materials = Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Profile')->get();
        $materialDesc = [];

        foreach($materials as $key=>$value)
        { 
            if($key!=0 && $key!=1)
            {  
                if(!isset($value[13]))
                    continue;        
                $materialDesc[$value[13]][$value[10]]=$value[10];
            } 
        }
        return response()->json($materialDesc[$material]);
    }
      
    public function getMmData($inchmetric)
    {
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Webpage')->range('D14')->update([[$inchmetric]]);
        $values = Sheets::range('')->all();
    }
    public function getMaterialSelection($selection)
    {
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Webpage')->range('D16')->update([[$selection]]);
        $values = Sheets::range('')->all();

        $materialSelection = Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Profile')->get();
  
        $selectionData = [];
        foreach($materialSelection as $key=>$value)
        {
            
            if(!isset($value[10]))
                continue;
                if($value[10]==$selection)
                {
                    foreach($value as $key2=> $value2)
                    {
                        if($key2==8)
                            $selectionData["materialSheet"]=$value2;
                        if($key2==9)
                            $selectionData["materialImage"]=$value2;
                        if($key2==10)
                            $selectionData["material"]=$value2;
                        if($key2==15)
                            $selectionData["feature"]=$value2;
                    }
                }
        }
        return response()->json($selectionData);
    }
    public function getBackupMaterialSelection($selection)
    {
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Webpage')->range('D24')->update([[$selection]]);
        $values = Sheets::range('')->all();

        $materialSelection = Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Profile')->get();
        $selectionData1 = [];
        foreach($materialSelection as $key=>$value)
        {
            
            if(!isset($value[10]))
                continue;
                if($value[10]==$selection)
                {
                    foreach($value as $key2=> $value2)
                    {
                        if($key2==8)
                            $selectionData1["materialSheet"]=$value2;
                        if($key2==9)
                            $selectionData1["materialImage"]=$value2;
                        if($key2==10)
                            $selectionData1["material"]=$value2;
                        if($key2==15)
                            $selectionData1["feature"]=$value2;
                    }
                }
        }
        return response()->json($selectionData1);
    }

    public function energizer($selection)
    {
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Webpage')->range('D10')->update([[$selection]]);
        $values = Sheets::range('')->all();

        return response()->json($selection);
    }


    public function sealGland($sealgland)
    {
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Webpage')->range('D13')->update([[$sealgland]]);
        $values = Sheets::range('')->all();
    }
    public function sealHeight($sealheight)
    {
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Webpage')->range('D19')->update([[$sealheight]]);
        $values = Sheets::range('')->all();
    }
    public function rushOrder($rushorder)
    {
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Webpage')->range('M28')->update([[$rushorder]]);
        $values = Sheets::range('')->all();
    }
    public function id($id)
    {        
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Webpage')->range('D17')->update([[$id]]);
        $values = Sheets::range('')->all();
    }
    public function od($od)
    {
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Webpage')->range('D18')->update([[$od]]);
        $values = Sheets::range('')->all();
    }
    public function ht($ht)
    {
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Webpage')->range('D20')->update([[$ht]]);
        $values = Sheets::range('')->all();
    }
    public function quantity(Request $request)
    {        
        for($i=38;$i<=42;$i++)
            Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Webpage')->range('D'.$i)->update([[0]]);
       
        $data=$request->all();
        $quantity=$data['quantity'];
       
        $column=38;
        if(!empty($quantity))
        {

            foreach($quantity as $value)
            {
                $test=0;
                $message="";
                if(isset($value))
                {
                    $test=(int)$value;
                     Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Webpage')->range('D'.$column)->update([[$test]]);
                     $message= Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Webpage')->range('E'.$column++)->get();
                     $fetchMessage[]=$message[0][0];
                }
            }
        }
        $ssdata = array('status'=>'success','code'=>'200','data' => $fetchMessage);
        $ssdata=json_encode($ssdata);
        return response()->json($ssdata);
    }

    public function output()
    {
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

        return view('ajax.output',compact('output'))->render();

    }

    public function downloadPDF(Request $request)
    {
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
        foreach($output as $key=>$value )
        {
            if($key==0)
            {
               foreach($value as $key2=>$value2)
               {
                if($value2!=0 )
                    $count_array[]=$key2;
               }

            }
        }
        foreach($output as $key=>$value )
        {
            foreach($value as $key2=>$value2)
            {
             if(!in_array($key2,$count_array))
                 unset($output[$key][$key2]);
            }
        }
       
        $loop=-1;
        foreach($output as $key=>$value)
        {
           
            if($key == 0 || $key==17 || $key==18 || $key==20  )
            {
                $loop++;
                $new_output[$key]['name']=$value[0];
                foreach($value as $key2=>$value2)
                {
                    if(isset($value2)&& $key2!=0)
                    {
                        $new_output[$key][]=$value2;
                    }
                }
                
            }
        }
      
        $htmlContent = view('pdfinv', ['output' => $new_output])->render();
        $pdf = new Dompdf();
        $pdf->loadHtml($htmlContent);
        $pdf->render();
        return $pdf->stream('pdfinv', ['Content-Type' => 'application/pdf']);
    }

    public function thickness($thick)
    {
        Sheets::spreadsheet('1Fk9HaiJ9tLT3bQDDE4bslky2dtC3MVOxPbflsM98wqo')->sheet('Webpage')->range('D44')->update([[$thick]]);
    }
}