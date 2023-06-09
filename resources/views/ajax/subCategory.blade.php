
<div class="row">
    <div class="col-md-12">
        
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    
                    @foreach($parts as $key=>$part)

                      @foreach($part as $key2=>$value)
                      <?php $imagePath = "https://drive.google.com/uc?export=view&id=1xKBMVJv14FTjrUGOOAiymO6aNBa30G_r"; ?>
                      <?php $path = $value;
                        $id = explode("/",$path);
                        // if(!isset($id[5]))
                        //     continue;
                      ?>
                        <figure class="figure ">
                            <a data-id="{{$key2}}" data-value="{{$key2}}" class="subcat">
                            @if(isset($id[5]))
                            <img src="https://drive.google.com/uc?export=view&id={{$id[5]}}" class="img-fluid next-step" alt="" />
                            @else
                            <img src="{{URL::asset('assets/images/dst.jpg')}}" class="img-fluid next-step" alt="" />
                            </a>
                            @endif
                            <figcaption class="figure-caption text-center" style="color:aliceblue"> {{$key2}}</figcaption>
                        </figure>
                        @endforeach
                    @endforeach
                </div>
                
            </div>
        </div>
      
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="invan-feild mt-4">
                    <div class="inst-btn">
                        <button class="">INSTANT QUOTE? UPLOAD YOUR 3D MODEL <i class="fa-solid fa-cloud-arrow-up"></i></button>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
</div>  

<script>
    
    $('.subcat').on('click', function(e) {
   e.preventDefault();
   var subcat = $(this).attr("data-id");
   var subval = $(this).attr("data-value");
   var urllink =  "{{URL::asset('step-three')}}/"
   $.ajax({
       method: 'GET',
       url: urllink+subcat,
       success:function(result){
        var active = $(".wizard .nav-tabs li.active");
              active.next().removeClass("disabled");
              nextTab(active);
            $("#backup_material").html(result);
       },
   });
});


</script>
