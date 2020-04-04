<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="colorlib.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="template/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link href="template/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="template/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- Main css -->
    <link rel="stylesheet" href="template/css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <form method="POST" id="signup-form" class="signup-form wizard clearfix" enctype="multipart/form-data" role="application">
              <a href="?core=client&action=logout">logout</a>
                <div class="steps clearfix"><ul role="tablist"><li role="tab" class="first done" aria-disabled="false" aria-selected="false"><a id="signup-form-t-0"href="?core=OrgAuth&action=new_auth"  aria-controls="signup-form-p-0"><h3 class="title">
                    New Authorisation
                </h3></a></li><li role="tab" class="last current" aria-disabled="false" aria-selected="true"><a id="signup-form-t-1" href="?core=OrgAuth&action=auths"  aria-controls="signup-form-p-1"><span class="current-info audible"> </span><h3 class="title">
                    All Authorisations
                </h3></a></li></ul></div><div class="content clearfix">
                <h3 id="signup-form-h-0" tabindex="-1" class="title">
                    New Authorisation
                </h3>
                <fieldset id="signup-form-p-0" role="tabpanel" aria-labelledby="signup-form-h-0" class="body" aria-hidden="true" style="display: none;">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" name="email" id="email">
                        </div>
                        <div class="form-select">
                            <label for="country">Country</label>
                            <div class="select-group">
                                
                            <ul id="country" class="select-list" name="country"><li value="" class="init"></li><li value="Vn">Viet Nam</li><li value="US">United States America</li></ul></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="password">Your password</label>
                            <input type="password" name="password" id="password">
                        </div>
                        <div class="form-select">
                            <label for="country">Daily budget</label>
                            <div class="select-group">
                                
                            <ul id="daily_budget" class="select-list" name="daily_budget"><li value="" class="init"></li><li value="40$">40$</li><li value="60$">60$</li></ul></div>
                        </div>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term">
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>Subscribe to out newletter</label>
                    </div>
                </fieldset>

                <h3 id="signup-form-h-1" tabindex="-1" class="title current">
                    All Authorisations
                </h3>
                <fieldset id="signup-form-p-1" role="tabpanel" aria-labelledby="signup-form-h-1" class="body current" aria-hidden="false" style="">
                
                            <div class="table-responsive mb-4">
                                <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Activity type</th>
                                            <th>Start datetime</th>
                                            <th>End datetime</th>
                                            <th>Status</th>
                                            <th>QR Code</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php 
                                       
                                        foreach($table as $ligne) {
                                            if(($ligne->getStatus())=="Approved"){
                                         ?>
                                        <tr>
                                            <td><?php echo $ligne->getAction_type(); ?></td>
                                            <td><?php echo $ligne->getStart_datetime(); ?></td>
                                            <td><?php echo $ligne->getEnd_datetime(); ?></td>
                                            <td class=""><span class=" shadow-none badge outline-badge-primary"><?php echo $ligne->getStatus(); ?></span></td>
                                             <td class=""> <a tabindex="0" role="button" class="shadow-none badge outline-badge-primary" data-toggle="popover" data-trigger="focus" data-placement="right" data-url="?php echo $ligne->getReason(); ?">Display</a>
                                       <div id="qrcode" style="display:none; width:auto; height:auto;padding:5px;"></div></td>

                                        </tr>
                                        <?php 
                                       
                                        
                                           } else {
                                         ?>
                                        <tr>
                                            <td><?php echo $ligne->getReason(); ?></td>
                                            <td><?php echo $ligne->getStart_datetime(); ?></td>
                                             <td><?php echo $ligne->getEnd_datetime(); ?></td>
                                            <td class=""><span class="badge outline-badge-danger shadow-none"><?php echo $ligne->getStatus(); ?></span></td>
                                            <td>not available</td>
                                    
                                        </tr>
  <?php  }} ?>
                                    </tbody>
                                </table>
                            </div>
                  
                </fieldset>
        </div>

    </div>

    <!-- JS -->
    <script src="template/vendor/jquery/jquery.min.js"></script>
    <script src="template/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="template/bootstrap/js/bootstrap.min.js"></script>
    <script src="template/assets/js/app.js"></script>

<div id="qrcode"></div>
<script type="text/javascript" src="template/qrcode.min.js"></script>
<script type="text/javascript">

</script>

       
       
 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./qrcode.min.js?ver=v1.0"></script>
    <script type="text/javascript">
        var qrcode = new QRCode(document.getElementById("qrcode"),
            {
                width : 100,
                height : 100
            }
        );
        function makeQrcode(e) {
            qrcode.makeCode(e.attr("data-url"));
        }
        jQuery(document).ready(function(){
            jQuery("[data-toggle='popover']").popover(
                options={
                    content: jQuery("#qrcode"),
                    html: true // important! popover html content (tag: "#qrcode") which contains an image
                }
            );

            jQuery("[data-toggle='popover']").on("show.bs.popover", function(e) {
                makeQrcode(jQuery(this));
                jQuery("#qrcode").show();
            });
        });
    </script>

</body></html>