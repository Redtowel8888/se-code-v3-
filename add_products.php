        <?php

        include 'connection.php';
        include 'admin_header.php';


         ?>
         <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">


            <!-- Font Icon -->
                <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap-colorpicker@3.0.3/dist/css/bootstrap-colorpicker.min.css">
                
                <link rel="stylesheet" href="assets/assets/css/style.css">
                

            <!-- Main css -->
            
           
        <style >

    .cp-container {
      position: relative;
    }
    .cp-container .colorpicker-bs-popover {
      -webkit-transform: none !important;
              transform: none !important;
      top: 100% !important;
      width: 100%;
      max-width: none;
    }
    .cp-container .colorpicker-bs-popover .colorpicker {
      width: 100%;
    }
    .cp-container .colorpicker-bs-popover .colorpicker .colorpicker-saturation,
    .cp-container .colorpicker-bs-popover .colorpicker .colorpicker-hue,
    .cp-container .colorpicker-bs-popover .colorpicker .colorpicker-alpha,
    .cp-container .colorpicker-bs-popover .colorpicker .colorpicker-preview,
    .cp-container .colorpicker-bs-popover .colorpicker .colorpicker-bar {
      width: 100%;
      box-shadow: none;
    }
    .cp-container .colorpicker-bs-popover .colorpicker .colorpicker-saturation {
      height: 150px;
    }
    .cp-container .colorpicker-bs-popover .colorpicker .colorpicker-saturation .colorpicker-guide {
      height: 10px;
      width: 10px;
      border-radius: 10px;
      margin: -5px 0 0 -5px;
    }
    .cp-container .colorpicker-bs-popover .colorpicker .colorpicker-hue,
    .cp-container .colorpicker-bs-popover .colorpicker .colorpicker-alpha,
    .cp-container .colorpicker-bs-popover .colorpicker .colorpicker-preview,
    .cp-container .colorpicker-bs-popover .colorpicker .colorpicker-bar {
      margin-top: 10px;
    }
    .cp-container .colorpicker-bs-popover .colorpicker .colorpicker-hue,
    .cp-container .colorpicker-bs-popover .colorpicker .colorpicker-alpha,
    .cp-container .colorpicker-bs-popover .colorpicker .colorpicker-preview {
      height: 30px;
    }
    .cp-container .colorpicker-bs-popover .colorpicker .colorpicker-alpha,
    .cp-container .colorpicker-bs-popover .colorpicker .colorpicker-preview {
      background-size: 20px 20px;
      background-position: 0 0, 10px 10px;
    }
    .cp-container .colorpicker-bs-popover .colorpicker .colorpicker-preview {
      font-size: 1rem;
      line-height: 1.75;
    }

    .cp-container {
      max-width: 350px;
      margin: 2rem auto;
    }


        </style>

        </head>
        <body style="overflow-x: hidden;">

            <div class="main" >
                <div class="container" style="background-color: #E5E5E5 ">
                    <div class="signup-content">
                       
                        <div class="signup-form">

                            <form method="POST" class="register-form" id="register-form" action="add_server.php" enctype="multipart/form-data" >
                                <h2>Add New Parking</h2>
                                
                                
                               <div class="form-row">
                                    <div class="form-group">
                                        <label for="name">Area Name:</label>
                                        <input type="text" name="areas" id="name" required placeholder="City Name" />
                                    </div>
                                    <div class="form-group">
                                        <label for="father_name">zip code :</label>
                                        <input type="text" name="zip" id="price" required placeholder="City Name" />
                                    </div>
                                </div>
                               <div class="form-row">
                                <div class="form-group">
                                        <label for="father_name">Price /hour:</label>
                                        <input type="text" name="price" id="cost" required placeholder="$." />
                                    </div>
                                  

                            </div>
                                <div class="form-group">

                                    <label for="address">Handycap Services:</label>
                                     <select class="form-control form-control-lg" id="sel1" name="handy_cap">
 
          
                                     <option value="Economy">yes</option>
                                    <option value="Standard">nor</option>
                                    
                                    </select>
                                </div>
                             
                            
                               
                                
                                <div class="form-submit">
                                    
                                    <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" style="margin-right: 200px" />
                                </div>




                            </form>
                        

                          


                        </div>
        
                    </div>
                </div>

            </div>

            <!-- JS -->
            <script src="assets/assets/vendor/jquery/jquery.min.js"></script>
            <script src="assets/assets/js/main.js"></script>
        </body><!-- This templates was made by Colorlib (https://colorlib.com) -->

        </html>

        <?php include 'admin_footer.php'; ?>
        <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.2.4.min.js"></script>
                
                <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
               
                
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap-colorpicker@3.0.3/dist/js/bootstrap-colorpicker.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
                <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
                
        <script >
        	$('#OpenImgUpload').click(function(){ $('#profile_pic').trigger('click'); });	

        	  function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    
                    reader.onload = function (e) {
                        $('#OpenImgUpload').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#profile_pic").change(function(){
                readURL(this);
            });


        $(document).ready(function(){
            var i=1;
            $('#add').click(function(){
                i++;
                $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="colors[]" placeholder="Enter color" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
            });
            
            $(document).on('click', '.btn_remove', function(){
                var button_id = $(this).attr("id"); 
                $('#row'+button_id+'').remove();
            });
            
            $('#submit').click(function(){      
                $.ajax({
                    url:"add_server.php",
                    method:"POST",
                    data:$('#add_name').serialize(),
                    success:function(data)
                    {
                        
                        $('#add_name')[0].reset();
                    }
                });
            });
            
        });


        </script>
        <script type="text/javascript">
            // For testing purposes only
    console.clear();

    init_colorpicker_fn( '#cp2', 'rgb' );

    init_colorpicker_fn( '#cp3', 'hex' );

    function init_colorpicker_fn( id_str, format_str = 'hex' ) {
        
        if ( !id_str.startsWith( '#' ) ) {
            id_str = '#' + id_str;
        }
        
        var $picker_el = jQuery( id_str );

        $picker_el.colorpicker( {
            format: format_str,
            horizontal: true,
            popover: {
                container: id_str + '-container'
            },
            template: '<div class="colorpicker">' +
                '<div class="colorpicker-saturation"><i class="colorpicker-guide"></i></div>' +
                '<div class="colorpicker-hue"><i class="colorpicker-guide"></i></div>' +
                '<div class="colorpicker-alpha">' +
                '   <div class="colorpicker-alpha-color"></div>' +
                '   <i class="colorpicker-guide"></i>' +
                '</div>' +
                '<div class="colorpicker-bar">' +
                '   <div class="input-group">' +
                '       <input class="form-control input-block color-io" />' +
                '   </div>' +
                '</div>' +
                '</div>'
        } ).on( 'colorpickerCreate colorpickerUpdate', function( e ) {
            $picker_el.parent().find( '.colorpicker-input-addon>i' ).css( 'background-color', e.value );
        } ).on( 'colorpickerCreate', function( e ) {
            resize_color_picker_fn( $picker_el );
        } ).on( 'colorpickerShow', function( e ) {
            var cpInput_el = e.colorpicker.popupHandler.popoverTip.find( '.color-io' );

            cpInput_el.val( e.color.string() );

            cpInput_el.on( 'change keyup', function() {
                e.colorpicker.setValue( cpInput_el.val() );
            } );
        } ).on( 'colorpickerHide', function( e ) {
            var cpInput_el = e.colorpicker.popupHandler.popoverTip.find( '.color-io' );
            cpInput_el.off( 'change keyup' );
        } ).on( 'colorpickerChange', function( e ) {
            var cpInput_el = e.colorpicker.popupHandler.popoverTip.find( '.color-io' );

            if ( e.value === cpInput_el.val() || !e.color || !e.color.isValid() ) {
                return;
            }

            cpInput_el.val( e.color.string() );
        } );

        $picker_el.parent().find( '.colorpicker-input-addon>i' ).on( 'click', function( e ) {
            $picker_el.colorpicker( 'colorpicker' ).show();
        } );

        jQuery( window ).resize( function( e ) {
            resize_color_picker_fn( $picker_el );
        } );
    }

    function resize_color_picker_fn( $picker_el ) {
        var rem_int = parseInt( getComputedStyle( document.documentElement ).fontSize ),
            width_int = $picker_el.parent().width() - ( ( rem_int * .75 ) * 2 ) - 2,
            colorPicker_obj = $picker_el.colorpicker( 'colorpicker' ),
            slider_obj = colorPicker_obj.options.slidersHorz;

        slider_obj.alpha.maxLeft = width_int;
        slider_obj.alpha.maxTop = 0;

        slider_obj.hue.maxLeft = width_int;
        slider_obj.hue.maxTop = 0;

        slider_obj.saturation.maxLeft = width_int;
        slider_obj.saturation.maxTop = 150;

        colorPicker_obj.update();
    }
        </script>