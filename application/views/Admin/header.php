<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="<?php echo base_url('assets/img/logo/icon.png');?>">

        <title>Rumah Kos Bukit Duri</title>

        <!-- Base Css Files -->
        <link href="<?php echo base_url('assets/blue/css/bootstrap.min.css');?>" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="<?php echo base_url('assets/blue/assets/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" />
        <link href="<?php echo base_url('assets/blue/assets/ionicon/css/ionicons.min.css');?>" rel="stylesheet" />
        <link href="<?php echo base_url('assets/blue/css/material-design-iconic-font.min.css');?>" rel="stylesheet">
        <!-- animate css -->
        <link href="<?php echo base_url('assets/blue/css/animate.css');?>" rel="stylesheet" />
        <!-- Waves-effect -->
        <link href="<?php echo base_url('assets/blue/css/waves-effect.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/blue/assets/toggles/toggles.css');?>" rel="stylesheet">
        <!-- sweet alerts -->
        <link href="<?php echo base_url('assets/blue/assets/sweet-alert/sweet-alert.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/blue/assets/timepicker/bootstrap-datepicker.min.css');?>" rel="stylesheet" />
        <link href="<?php echo base_url('assets/blue/assets/timepicker/bootstrap-timepicker.min.css');?>" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo base_url('assets/blue/assets/magnific-popup/magnific-popup.css');?>"/>
        <link href="<?php echo base_url('assets/blue/assets/responsive-table/rwd-table.min.css');?>" rel="stylesheet" type="text/css" media="screen"/>
        <!-- Custom Files -->
        <link href="<?php echo base_url('assets/blue/css/helper.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/blue/css/style.css');?>" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/blue/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css');?>" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <script src="<?php echo base_url('assets/blue/js/modernizr.min.js');?>"></script>
        <script>
            function tampilkanPreview(gambar,idpreview){
//                membuat objek gambar
                var gb = gambar.files;
                
//                loop untuk merender gambar
                for (var i = 0; i < gb.length; i++){
//                    bikin variabel
                    var gbPreview = gb[i];
                    var imageType = /image.*/;
                    var preview=document.getElementById(idpreview);            
                    var reader = new FileReader();                   
                    if (gbPreview.type.match(imageType)) {
//                        jika tipe data sesuai
                        preview.file = gbPreview;
                        reader.onload = (function(element) { 
                            return function(e) { 
                                element.src = e.target.result; 
                            }; 
                        })(preview);
    //                    membaca data URL gambar
                        reader.readAsDataURL(gbPreview);
                    }else{
//                        jika tipe data tidak sesuai
                        alert("Type file tidak sesuai. Khusus image.");
                    }    
                }    
            }
        </script>
    </head>