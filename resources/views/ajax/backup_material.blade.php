
@if(!empty($dataProfileAndSqueeze['backup']) && $dataProfileAndSqueeze['backup']=="Y")
<script>
  backup="Y";
  dimensionChange2("Seal",backup);
</script>
<div class="col-md-5 radio-heading">
    <div class="measure-type">
      <h6>BACKUP MATERIAL SELECTION</h6>
    </div>
    {{-- <input type="radio" id="html" class="inchMetric" name="fav_language" value="Inch" />
    <label for="html">Inch</label>
    <input type="radio" id="css" class="inchMetric" name="fav_language" class="ml-4" value="Metric" />
    <label for="css">Metric</label> --}}
    <label class="custom-field-inv-select one mt-4">
      <select class="backup_material">
        <option>Please Select</option>
        <option value="POLYURETHANE" class="material">POLYURETHANE</option>
        <option value="ELASTOMERS" class="material">ELASTOMERS</option>
        <option value="PTFE" class="material">PTFE</option>
        <option value="THERMOPLASTIC">THERMOPLASTIC</option>
      </select>
      <span class="placeholder">MATERIAL FAMILY</span>
    </label>
    <label class="custom-field-inv-select one mt-3">
      <select id="backup_selecton">
        <option>Please Select</option>
      </select>
      <span class="placeholder">MATERIAL SELECTION</span>
    </label>
</div>
<div class="col-md-2"></div>
  <div class="col-md-5">
    <div class="shA backup">
      <h6></h6>
    </div>
    <div class="text-center" id="backUpmaterialImage">
      
    </div>
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="shA-ul backupUl mt-4">
          
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>

@endif

@if(!empty($dataProfileAndSqueeze['energizer']) && $dataProfileAndSqueeze['energizer'] == "Y" )
                       
<div class="col-md-5 radio-heading">
    <div class="measure-type">
      <h6>ENERGIZER</h6>
    </div>
    <label class="custom-field-inv-select one mt-4">
      <select class="energizer">
        <option>Please Select</option>
        <option value="FKM" class="energ">FKM</option>
        <option value="DKM" class="energ">DKM</option>
        <option value="SILICONE" class="energ">SILICONE</option>
      </select>
      <span class="placeholder">MATERIAL FAMILY</span>
    </label>
</div>
@endif

<!--@if(!empty($dataProfileAndSqueeze['noofseals']) && $dataProfileAndSqueeze['noofseals'] == "3")-->
                       
<!--<div class="col-md-5 radio-heading">-->
<!--    <div class="measure-type">-->
<!--      <h6>ENERGIZER</h6>-->
<!--    </div>-->
<!--    <label class="custom-field-inv-select one mt-4">-->
<!--      <select class="energizer">-->
<!--        <option>Please Select</option>-->
<!--        <option value="FKM" class="energ">FKM</option>-->
<!--        <option value="DKM" class="energ">DKM</option>-->
<!--        <option value="SILICONE" class="energ">SILICONE</option>-->
<!--      </select>-->
<!--      <span class="placeholder">MATERIAL FAMILY</span>-->
<!--    </label>-->
<!--</div>-->

<!--@endif-->


<script>
    $('.backup_material').on('change',function (e) {
        var urllink =  "{{URL::asset('backup-material')}}/"
        e.preventDefault();
        var backup=$(this).val();
        $.ajax({
        method:'GET',
        url: urllink+backup,
        success:function(result){
            $("#backup_selecton").empty();
                var firstVal = "";
                $("#backup_selecton").append('<option value="">SELECT OPTION</option>');
            $.each(result,function(val,key){                       
                $("#backup_selecton").append('<option value=' + val + '>' + val.replaceAll("-"," ") + '</option>');
            });
        },
        });
    });
</script>
<script>
  $('#backup_selecton').on('change',function (e) {
            e.preventDefault();
            var selection=$(this).val();
            backupMaterialSelection(selection);
           
        });
        function backupMaterialSelection(selection)
        {
          if(selection === '')
          {
            $('.backup h6').empty();
                $(".backupUl").html('')
                $("#backUpmaterialImage").html('')
          }
          else{
          var urllink =  "{{URL::asset('material-selection')}}/"
          $.ajax({
            method:'GET',
            url: urllink+selection,
            success:function(result){
              var items = result.materialImage.split('/');
              var materials = result.material.replaceAll("-"," ")
                $('.backup h6').text(materials);
                $(".backupUl").html('<ul><a target="_blank" href="'+result.materialSheet+'">'+result.feature+'</a></ul>')
                $("#backUpmaterialImage").html('<img src="https://drive.google.com/uc?export=view&id='+items[5]+'" alt="" class="img-fluid" />')
                },
            });
          }
        }
</script>
<script>
  $('.energizer').on('change',function (e) {
      var urllink =  "{{URL::asset('energizer')}}/"
      e.preventDefault();
      var energizer=$(this).val();
      $.ajax({
      method:'GET',
      url: urllink+energizer,
      success:function(result){
        console.log(result)
          },
      });
  });
</script>

<script>
  $('#nextStep,#step4').on('click',function(){
      var urllink =  "{{URL::asset('output')}}/"
      $.ajax({
          url: urllink,
          method: 'GET',
          success:function(result){
              $("#table").html(result);
          }
      });
  });
  </script>
  