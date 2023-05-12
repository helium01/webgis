<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="{{ asset('js/cbpBGSlideshow.js') }}"></script>
<script src="{{ asset('js/cbpBGSlideshow.min.js') }}"></script>
<script src="{{ asset('js/jquery.imagesloaded.min.js') }}"></script>
<script src="{{ asset('js/jquery-1.8.3.js') }}"></script>
<script src="{{ asset('js/modernizr.custom.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {

    })

    function carikec() {
        var cat_id = $('#nama').val();

        $.ajax({
            type: 'get',
            url: "{{ route('carikec') }}",
            data: {
                'id': cat_id
            },
            success: function(data) {


                $('#nama_kec').html(data);
            },
            error: function() {

            }
        })

    }
</script>

<script>
    $(function() {
        cbpBGSlideshow.init();
    });
</script>

<script>
    function goBack() {
        window.history.back();
    }
</script>

<script>
    //sudahdivaksin
    $("#vaksin_lansia").keyup(function() {
        var a = parseInt($("#vaksin_lansia").val());
        var b = parseInt($("#vaksin_disabilitas").val());
        var c = parseInt($("#vaksin_odgj").val());
        var d = parseInt($("#lansia").val());
        var e = parseInt($("#disabilitas").val());
        var f = parseInt($("#odgj").val());
       
        var g = a + b + c;
        var h = d + e + f;
        var i = g / h * 100;
        console.log(i);
        $("#svaksin").val(i);
    });

    $("#vaksin_disabilitas").keyup(function() {
        var a = parseInt($("#vaksin_lansia").val());
        var b = parseInt($("#vaksin_disabilitas").val());
        var c = parseInt($("#vaksin_odgj").val());
        var d = parseInt($("#lansia").val());
        var e = parseInt($("#disabilitas").val());
        var f = parseInt($("#odgj").val());
        
        var g = a + b + c;
        var h = d + e + f;
        var i = g / h * 100;
        $("#svaksin").val(i);
    });

    $("#vaksin_odgj").keyup(function() {
        var a = parseInt($("#vaksin_lansia").val());
        var b = parseInt($("#vaksin_disabilitas").val());
        var c = parseInt($("#vaksin_odgj").val());
        var d = parseInt($("#lansia").val());
        var e = parseInt($("#disabilitas").val());
        var f = parseInt($("#odgj").val());
       
        var g = a + b + c;
        var h = d + e + f;
        var i = g / h * 100;
        $("#svaksin").val(i);
    });

    $("#lansia").keyup(function() {
        var a = parseInt($("#vaksin_lansia").val());
        var b = parseInt($("#vaksin_disabilitas").val());
        var c = parseInt($("#vaksin_odgj").val());
        var d = parseInt($("#lansia").val());
        var e = parseInt($("#disabilitas").val());
        var f = parseInt($("#odgj").val());
       
        var g = a + b + c;
        var h = d + e + f;
        var i = g / h * 100;
        $("#svaksin").val(i);

    });

    $("#disabilitas").keyup(function() {
        var a = parseInt($("#vaksin_lansia").val());
        var b = parseInt($("#vaksin_disabilitas").val());
        var c = parseInt($("#vaksin_odgj").val());
        var d = parseInt($("#lansia").val());
        var e = parseInt($("#disabilitas").val());
        var f = parseInt($("#odgj").val());
        
        var g = a + b + c;
        var h = d + e + f;
        var i = g / h * 100;
        $("#svaksin").val(i);

    });

    $("#odgj").keyup(function() {
        var a = parseInt($("#vaksin_lansia").val());
        var b = parseInt($("#vaksin_disabilitas").val());
        var c = parseInt($("#vaksin_odgj").val());
        var d = parseInt($("#lansia").val());
        var e = parseInt($("#disabilitas").val());
        var f = parseInt($("#odgj").val());
        
        var g = a + b + c;
        var h = d + e + f;
        var i = g / h * 100;
        $("#svaksin").val(i);

    });
</script>

<script>
    //belumdivaksin
    $("#lansia").keyup(function() {
        var a = parseInt($("#lansia").val());
        var b = parseInt($("#disabilitas").val());
        var c = parseInt($("#odgj").val());
        var d = parseInt($("#vaksin_lansia").val());
        var e = parseInt($("#vaksin_disabilitas").val());
        var f = parseInt($("#vaksin_odgj").val());
       
        var g = a + b + c;
        var h = d + e + f;
        var i = g - h;
        var j = i / g * 100;
        $("#bvaksin").val(j);
    });

    $("#disabilitas").keyup(function() {
        var a = parseInt($("#lansia").val());
        var b = parseInt($("#disabilitas").val());
        var c = parseInt($("#odgj").val());
        var d = parseInt($("#vaksin_lansia").val());
        var e = parseInt($("#vaksin_disabilitas").val());
        var f = parseInt($("#vaksin_odgj").val());
       
        var g = a + b + c;
        var h = d + e + f;
        var i = g - h;
        var j = i / g * 100;
        $("#bvaksin").val(j);
    });


    $("#odgj").keyup(function() {
        var a = parseInt($("#lansia").val());
        var b = parseInt($("#disabilitas").val());
        var c = parseInt($("#odgj").val());
        var d = parseInt($("#vaksin_lansia").val());
        var e = parseInt($("#vaksin_disabilitas").val());
        var f = parseInt($("#vaksin_odgj").val());
      
        var g = a + b + c;
        var h = d + e + f;
        var i = g - h;
        var j = i / g * 100;
        $("#bvaksin").val(j);
    });

    $("#vaksin_lansia").keyup(function() {
        var a = parseInt($("#lansia").val());
        var b = parseInt($("#disabilitas").val());
        var c = parseInt($("#odgj").val());
        var d = parseInt($("#vaksin_lansia").val());
        var e = parseInt($("#vaksin_disabilitas").val());
        var f = parseInt($("#vaksin_odgj").val());
       
        var g = a + b + c;
        var h = d + e + f;
        var i = g - h;
        var j = i / g * 100;
        $("#bvaksin").val(j);
    });

    $("#vaksin_disabilitas").keyup(function() {
        var a = parseInt($("#lansia").val());
        var b = parseInt($("#disabilitas").val());
        var c = parseInt($("#odgj").val());
        var d = parseInt($("#vaksin_lansia").val());
        var e = parseInt($("#vaksin_disabilitas").val());
        var f = parseInt($("#vaksin_odgj").val());
       
        var g = a + b + c;
        var h = d + e + f;
        var i = g - h;
        var j = i / g * 100;
        $("#bvaksin").val(j);
    });

    $("#vaksin_odgj").keyup(function() {
        var a = parseInt($("#lansia").val());
        var b = parseInt($("#disabilitas").val());
        var c = parseInt($("#odgj").val());
        var d = parseInt($("#vaksin_lansia").val());
        var e = parseInt($("#vaksin_disabilitas").val());
        var f = parseInt($("#vaksin_odgj").val());
       
        var g = a + b + c;
        var h = d + e + f;
        var i = g - h;
        var j = i / g * 100;
        $("#bvaksin").val(j);
    });

    $("#lansia").keyup(function() {
        var a = parseInt($("#lansia").val());
        var b = parseInt($("#vaksin_lansia").val());
        
        var c = a - b;
        var d = c / a * 100;
        $("#tlansia").val(d);
    });

    $("#vaksin_lansia").keyup(function() {
        var a = parseInt($("#lansia").val());
        var b = parseInt($("#vaksin_lansia").val());
        
        var c = a - b;
        var d = c / a * 100;
        $("#tlansia").val(d);
    });

    $("#disabilitas").keyup(function() {
        var a = parseInt($("#disabilitas").val());
        var b = parseInt($("#vaksin_disabilitas").val());
       
        var c = a - b;
        var d = c / a * 100;
        $("#tdisabilitas").val(d);
    });

    $("#vaksin_disabilitas").keyup(function() {
        var a = parseInt($("#disabilitas").val());
        var b = parseInt($("#vaksin_disabilitas").val());
       
        var c = a - b;
        var d = c / a * 100;
        $("#tdisabilitas").val(d);
    });

    $("#odgj").keyup(function() {
        var a = parseInt($("#odgj").val());
        var b = parseInt($("#vaksin_odgj").val());
       
        var c = a - b;
        var d = c / a * 100;
        $("#todgj").val(d);
    });

    $("#vaksin_odgj").keyup(function() {
        var a = parseInt($("#odgj").val());
        var b = parseInt($("#vaksin_odgj").val());
       
        var c = a - b;
        var d = c / a * 100;
        $("#todgj").val(d);
    });
</script>
<script>
    var value = document.getElementById("input-value").value;
    console.log(value);
</script>

<script>
    $('#vaksin_disabilitas').keyup(function() {
    var val1 = $('#bvaksin').val();
    console.log(val1);
    var val2 = $('#zona').val();
    if (val1 >= 0 && val1<=20) {
      $('#zona').val('hijau');
    } else if (val1 >=21 && val1 <= 50) {
      $('#zona').val('kuning');
    }  else if (val1 >=51 && val1 <= 85) {
      $('#zona').val('orange');
    }  else if (val1 >=86 && val1 <= 100) {
      $('#zona').val('merah');
    } 
    console.log(val1);
  });
</script>


</body>

</html>
