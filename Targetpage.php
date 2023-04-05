<?php
session_start();
include 'config.php';

if($_GET['dat1']==null){
   
    header("Location: Sourcepage.php");
    exit();
    
}

if(($_SESSION['email'])==null){
    header("location:index.php");
    
    }else{ 
        $imgepath=$_SESSION['email'];
        $sql="SELECT * FROM rolebasedlogin WHERE email='$imgepath'";
    $run_data=mysqli_query($con,$sql);
        while($row = mysqli_fetch_array($run_data))
                                    {
                                    
                                      $artwork = $row['aname'];
                                      $username = $row['username'];
    
                                      
                                }

?>
                    
                    <!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    
    <link href="css/theme.css" rel="stylesheet" media="all">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <style>
        h1 {
            font-size: 1.6rem;
        }

        h2 {
            font-size: 1.4rem;
        }

        h4 {
            font-size: 1.2rem;
        }

        #calcform {
            padding: 20px;
            background: #f0f0f0;
            border: 1px solid #e0e0e0;
            border-radius: 7px;
        }

        .btn i {
            vertical-align: bottom;
        }

        #is-fitwidth+i,
        #is-orig+i {
            transform: rotate(90deg);
        }

        #videodiv {
            position: relative;
            width: 100%;
        }

        #videodiv>button {
            display: none;
            position: absolute;
            top: 80%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
        }

        #video {
            width: 100%;
            height: auto;
        }

        #videodiv {
            background: #444;
        }

        #imgdiv {
            border: 10px dashed #aaa;
            padding: 5px;
            background: #f0f0f0;
            width: 100%;
            min-height: 160px;
            text-align: center;
        }

        #imgdiv i {
            margin-top: 30px;
            color: #ccc;
            font-size: xx-large;
        }

        #imgdiv img {
            background: #ffffff;
            border: 5px solid #ffffff;
            margin: 5px;
            display: inline-block;
            user-drag: none;
            /*ok*/
            -webkit-user-drag: none;
            user-select: none;
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }

        #imgdiv.draghover {
            border: 10px dashed #888;
        }

        #isdiv {
            display: none;
        }

        #imgsize {
            width: calc(100% - 20px);
        }

        #calcform button i {
            vertical-align: middle;
        }

        #outframe {
            width: 100%;
            height: 300px;
            margin: 0;
            padding: 0;
            display: none;
        }

        #fileElem {
            visibility: hidden;
            width: 30px;
        }

        #canvas {
            display: none;
        }

        .form-check input[type=checkbox] {
            -ms-transform: scale(3);
            -moz-transform: scale(3);
            -webkit-transform: scale(3);
            -o-transform: scale(3);
            transform: scale(3);
            padding: 10px;
            margin: auto -5px;
        }

        .form-check label {
            margin-left: 30px;
            margin-top: 0px;
            vertical-align: top;
        }

        #bar {
            display: none;
            width: 100%;
        }

        @media all and (max-width: 800px) {
            #dragLabel {
                display: none;
            }
            #calcform {
                padding: 10px;
            }
            #camerabtn {
                display: none;
            }
        }
    </style>
  </head>
  <body>

      <div id="trgtdisp" class="page-wrapper">
        
        <header class="header-desktop4">
            <div class="container">

                <div class="header4-wrap">
                    <div class="header__logo">
                        
                    <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                              <?php

echo "
<tr>
  
  <td class='text-left'><img src='uploads/$artwork' width='150px' height='150px' ></td>
 </tr>                        
";

                              ?>
                                </div>

                                <div class="content">
                                <a href="#"><?php echo $username ?></a>
                                </div>

                                <div style="margin-left:80%;" class="notifi-dropdown js-dropdown">
                                    <div class="info clearfix">
                                       <div class="content">
                                            <h5 class="name">
                                                <a href="#"></a>
                                            </h5>
                                            <span class="email">Login info: <?php echo $_SESSION['email']; ?></span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i><?php echo $username ?></a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="logout.php">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>

                            </div>
                        </div>


                      
                    </div>
                    <div class="header__tool">


                        <div class="header-button-item  js-item-menu">
                            <i class="zmdi "></i>
                            <div class="account-dropdown js-dropdown">
                                <div class="notifi__title">
                                    <p>Tools </p>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c1 img-cir img-40">
                                        <i class="zmdi zmdi-image"></i>
                                    </div>
                                    <div class="content">
                                        <p>Image to Text</p>
                                        
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c2 img-cir img-40">
                                        <i class="zmdi zmdi-file-text"></i>
                                    </div>
                                    <div class="content">
                                        <p>Similarity Between Raw Text</p>
                                       
                                    </div>
                                </div>
                               
                             
                            </div>
                        </div>
                        <a href="#">
                            <img style="width:120px;height:120;" src="FypLogo.png" alt="CoolAdmin" />
                        </a>

                    </div>
                </div>
            </div>
        </header>

      <div id="trgtdisp" class="jumboton px-2 mt-4">
        <div class="row">
            <div class="col-sm-6" >
            <div class="card text-center custom_tool_box m-0 text-left" >
                <div class="card-body">
                <h5 class="card-title text-center">Target Solution</h5>
                <hr>
        <form autocomplete="off" name="calcform">
            <div class="col-md-12">
              
                <p style="text-align: center;"></p>
                <div class="text-center">
                    <div id="home_top_a" class="default_a" >
                    </div>
                </div>
               
            


                <div class="form-group">
                        <label for="dropElem" id="dragLabel">Drag & drop image</label>
                        <div id="imgdiv"><i class="material-icons">photo</i></div>
                    </div>
                    <div class="form-group">
                        <progress max="1" value="10" id="bar"></progress>
                    </div>
                    <div class="form-group">
                        <button type="button" id="convertbtn" title="Convert to Text" aria-label="Convert to Text" onclick="OnConvert()" class="btn btn-secondary"><i class="material-icons"></i> Convert</button>
                    </div>

                <div class="container">
                    <div class="row">
                        <div class="col-sm-12" >
                            <div id="mainPer" ></div>
                            <div >
                                <div>
                                  
           
                                 
                                    
                               
                                    
                                </div>
                            </div>
                        </div>
                        
                
                      
                        <div class="col-sm-12" style="margin-bottom: 0px;">
                            <table class="mytable" id="mytable"></table>
                        </div>

                        <div class="col-sm-12" style="margin-bottom: 0px;">
                            <div id="home_bottom_a" class="default_a" ></div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="lastcnt" id="lastcnt" value="0">
                <input type="hidden" name="imgUrls" id="imgUrls" value="">
                <input type="hidden" name="totpics" id="totpics" value="0">
                <input type="hidden" name="uploadurl" style="display:none;" id="uploadUrl" value="">
                <input type="hidden" name="uploadname" style="display:none;" id="uploadName">
                <input type="file" name="img[]" multiple style="display:none;" id="uploadFile" autocomplete="off" accept="image/*">
            </div>
           
        </form>
                </div>
    </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                <form action="Result.php">
                  <table class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th class='text-center' scope='col'>Extracted Text from Target Documet </th>
                                  
                            </tr>
                                  <tr>
                                  <th class='text-center' style="width: 100%;height:600px;" scope='col'><textarea id="txt" name="dat2" style="width: 100%;height:600px; border-color: Transparent; "  Required></textarea> </th>
                                  <th style="display:none" class='text-center'   scope='col'><textarea  name="dat1again"><?php echo $_GET['dat1'];?></textarea></th>
                                  <th style="display:none" class='text-center'  scope='col'><textarea  name="SystemID" ><?php echo $_GET['SystemID'];?></textarea></th>
                                  <th style="display:none" class='text-center'  scope='col'><textarea  name="student_id" ><?php echo $_GET['student_id'];?></textarea></th>
                                  <th style="display:none" class='text-center'  scope='col'><textarea  name="sname"><?php echo $_GET['sname'];?></textarea></th>
                                  <th style="display:none" class='text-center'  scope='col'><textarea  name="rdate"><?php echo $_GET['rdate'];?></textarea></th>
                                  <th style="display:none" class='text-center'  scope='col'><textarea  name="srno"><?php echo $_GET['srno'];?></textarea></th>
                                  <th style="display:none" class='text-center'  scope='col'><textarea  name="DocumentType" ><?php echo $_GET['DocumentType'];?></textarea></th>
                                  <th style="display:none" class='text-center'  scope='col'><textarea  name="StudentImage" ><?php echo $_GET['StudentImage'];?></textarea></th>
                                  <th style="display:none" class='text-center'  scope='col'><textarea  name="Examiner" ><?php echo $imgepath;?></textarea></th>  
                                </tr>
                                </thead>
                </table>
                <button  type="submit" class="btn btn-primary" style="margin-left: 40%;" name="x">Submit</button>
                                </form>

                                </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- END PAGE CONTENT  -->

    </div>
                     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
 

    <script type="text/javascript" src="./assets/js/jquery.min.js"></script>
<script>
    
    function diplay(){
        document.getElementById("trgtdisp").style.display='none';
        document.getElementById("trgt1disp").style.display='block';
    }
    function showtext(){
        document.getElementById("txtdiv").style.display='block';
    }
   
</script>

























<script src="/lib/utils/utils.js"></script>
    <script src="/lib/jsPDF/pdfobject.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" defer></script>
    <script src='https://unpkg.com/tesseract.js@v2.0.0-alpha.12/dist/tesseract.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/file-saver@2.0.2/dist/FileSaver.min.js" integrity="sha256-u/J1Urdrk3nCYFefpoeTMgI5viU1ujCDu2fXXoSJjhg=" crossorigin="anonymous"></script>
    <script>
        "use strict"
        var imgh, imgw, iimg, nimg = 0;
        var doc;
        var image = [];
        var filename = [];
        var videoStream = null;
        var x, y, width, height;
        //var isVideoDivOpen=false;
        var videoSem = false;
        $(document).ready(function() {
            $("#msg_div").hide();
            $("#imgdiv").on("dragover", function(event) {
                event.preventDefault();
                event.stopPropagation();
                $(this).addClass('draghover');
                return false;
            });
            $("#imgdiv").on("dragleave dragend", function(event) {
                event.preventDefault();
                event.stopPropagation();
                $(this).removeClass('draghover');
                return false;
            });
            $("#imgdiv").on("drop", function(event) {
                event.preventDefault();
                //event.stopPropagation();
                $(this).removeClass('draghover');
                var file = event.originalEvent.dataTransfer.files;
                for (var i = 0; i < file.length; i++)
                    fileLoad(file[i]);
            });
            $('input[name=is]').change(function() {
                var radioButtons = $("#sizediv input:radio[name='is']");
                var i = radioButtons.index(radioButtons.filter(':checked'));
                if (i == 0)
                    $("#isdiv").hide();
                else
                    $("#isdiv").show();
            });
            $('input[name=ps]').change(function() {
                //var radioButtons = $("#sizediv input:radio[name='ps']");
                //var i = radioButtons.index(radioButtons.filter(':checked'));
                $('#ps-select')[0].selectedIndex = 0;
            });
            $('#ps-select').on('change', function() {
                var i = $('#ps-select')[0].selectedIndex;
                if (i == 0) {
                    $('#psizediv>div>label:first-child').addClass('active');
                    $('#ps-select').removeClass('active');
                } else {
                    $('#psizediv>div>label>input').prop('checked', false);
                    $('#psizediv>div>label').removeClass('active');
                    $('#ps-select').addClass('active');
                }
            });
        });

        function OnCamera() {
            if (!$("#collapseVideo").hasClass("show"))
            //if( !isVideoDivOpen )
            {
                //isVideoDivOpen = true;
                if (videoSem == false)
                    startStream();
                else
                    setTimeout(function() {
                        startStream();
                    }, 1000);
            } else {
                //isVideoDivOpen = false;
                $("#photobtn").hide();
                if (videoSem == false)
                    stopStream();
                else
                    setTimeout(function() {
                        stopStream();
                    }, 1000);
            }
        }

        function startStream() {
            var constraints = {
                audio: false,
                video: {
                    width: 1280,
                    height: 720
                }
            };
            //var constraints = { audio: false, video: true };
            videoSem = true;
            navigator.mediaDevices.getUserMedia(constraints)
                .then(function(stream) {
                    var video = document.querySelector('video');
                    video.srcObject = stream;
                    video.onloadedmetadata = function(e) {
                        video.play();
                        $("#photobtn").show();
                        videoSem = false;
                        $("#msg_div").hide();
                    };
                    videoStream = stream;
                })
                .catch(function(err) {
                    console.log(err.name + ": " + err.message);
                    videoSem = false;
                    $("#msg_div").show();
                });
        }

        function stopStream() {
            if (videoStream == null) return;
            videoStream.getTracks().forEach(function(track) {
                track.stop();
                videoStream.removeTrack(track);
            });
            videoStream = null;
        }

        function OnTake() {
            //var canvas = document.createElement("canvas");
            var canvas = document.getElementById('canvas');
            canvas.width = 640;
            canvas.height = 480;
            var ctx = canvas.getContext('2d');
            ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
            var data = canvas.toDataURL("image/jpeg", 1.0);
            //var imageQuality=$("#quality").val()/100.0;
            //var data = canvas.toDataURL("image/jpeg", imageQuality);
            addImage(data);
        }

        function OnConvert() {
            //var img = new Image();
            //img.src = imgsrc;
            var img = $("#imgdiv>img:nth-child(2)")[0];
            if (img == undefined) return;
            //const { TesseractWorker, utils: { loadLang } } = Tesseract;
            //const { TesseractWorker } = Tesseract;
            const worker = new Tesseract.TesseractWorker();
            //worker.recognize(img)
            worker
                .recognize(
                    //'https://tesseract.projectnaptha.com/img/eng_bw.png',
                    img,
                    'eng', {
                        'tessjs_create_pdf': '1',
                        'tessjs_pdf_auto_download': false, // disable auto download
                        'tessjs_pdf_bin': true, // add pdf file bin array in result
                    }
                )
                .progress(message => {
                    console.log(message);
                    $("#bar").show();
                    $("#bar").val(message.progress);
                })
                .catch(err => console.error(err))
                .then(result => {
                    //.then(({ files: { pdf } }) => {
                    //   console.log(Object.values(pdf));
                    console.log(result);
                    worker.terminate();
                    var txt;
                    if ($("#newlinecheck").is(":checked"))
                        txt = result.text.replace(/\n\n/g, " ");
                    else
                        txt = result.text.replace(/\n\n/g, "\n");
                    $("#txt").val(txt);
                    $("#bar").hide();
                })
                .finally(resultOrError => console.log(resultOrError));
        }

        function OnOpen() {
            $("#fileElem").click();
        }

        function OnFile() {
            var file = document.getElementById("fileElem").files;
            document.getElementById("fileElem").value = "";
            for (var i = 0; i < file.length; i++)
                fileLoad(file[i], i);
        }

        function OnSave() {
            var file = $("#title").val() + ".pdf";
            if (file == ".pdf") file = "my_image.pdf";
            //fileSave(file);
            doc.save(file);
        }

        function fileLoad(file, i) {
            iimg = i;
            filename.push(file.name);
            var reader = new FileReader();
            //$("#imgdiv>img:nth-child("+i+")").prop("title",file.name);
            reader.onloadend = function(e) {
                //if( e.target.readyState==FileReader.DONE ) {
                var data = e.target.result;
                addImage(data, i);
            };
            reader.readAsDataURL(file);
        }

        function addImage(data, i) {
            var img = $("<img src='" + data + "' style='display:none'>").on("load", function(event) {
                nimg++;
                var n = nimg + 1;
                var s = "#imgdiv>img:nth-child(" + n + ")";
                $(s).hide();
                $("#imgdiv i").hide();
                //var divheight=($("#imgdiv").prop("clientHeight")-30)/2;
                var divheight = 55;
                var imgheight = Math.round(this.height);
                var imgwidth = Math.round(this.width);
                //var imgheight=Math.round(this.naturalHeight);
                //var imgwidth=Math.round(this.naturalWidth);
                image[n - 2] = [];
                image[n - 2].height = imgheight;
                image[n - 2].width = imgwidth;
                imgwidth = Math.round(imgwidth * divheight / imgheight);
                $("#imgdiv").css("text-align", "left");
                $(s).css("width", imgwidth);
                $(s).css("height", divheight);
                $(s).show();
            });
            $("#imgdiv").append(img);
            $("#createbtn").removeClass("btn-secondary");
            $("#createbtn").addClass("btn-primary");
        }

        function OnClear() {
            $("#createbtn").removeClass("btn-primary");
            $("#createbtn").addClass("btn-secondary");
            //$("#imgdiv").empty();
            $("#imgdiv>img").remove();
            $("#title").val("");
            $("#outframe").prop("src", "");
            filename = [];
            image = [];
            nimg = 0;
        }

        function OnSave() {
            var txt = $("#txt").val();
            var OSName = GetOS();
            if (OSName == "Windows")
                txt = txt.replace(/\n/g, '\r\n');
            var blob = new Blob([txt], {
                type: "text/plain;charset=utf-8"
            });
            saveAs(blob, "textscan.txt");
        }

    </script>
























































<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>
<script src="vendorcounterupjquerydesign2.js"></script>
     <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
   

</script>










    <script>

    </script>
</body>
</html>

<?php

}
?>