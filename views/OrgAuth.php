<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="colorlib.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
       <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <link rel="stylesheet" href="template/fonts/material-icon/css/material-design-iconic-font.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="template/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- Main css -->
    <link rel="stylesheet" href="template/css/style.css">


</head>
<body>
    <div class="main">

        <div class="container">
            <form method="POST" action="?core=OrgAuth&action=add_Auth" id="signup-form" class="signup-form wizard clearfix" enctype="multipart/form-data" role="application">
            <a href="?core=user&action=logout" >logout</a>


                <div class="steps clearfix"><ul role="tablist"><li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="signup-form-t-0" href="?core=OrgAuth&action=new_auth" aria-controls="signup-form-p-0"><span class="current-info audible"> </span><h3 class="title">
                    New Authorisation
                </h3></a></li><li role="tab" class="last done" aria-disabled="false" aria-selected="false"><a id="signup-form-t-1"  href="?core=OrgAuth&action=auths" aria-controls="signup-form-p-1"><h3 class="title">
                    All Authorisations
                </h3></a></li></ul></div><div class="content clearfix">
                <h3 id="signup-form-h-0" tabindex="-1" class="title current">
                    New Authorisation
                </h3>
                <fieldset id="signup-form-p-0" role="tabpanel" aria-labelledby="signup-form-h-0" class="body current" aria-hidden="false" style="">
                    <div class="form-row">

                            <div class="form-select">
                            Activity Type 
                            <select name="reason"  class="custom-select mb-3" id="Reason">
                             <option name="reason" value="Need for food">Daily</option>
                             <option name="reason" value="Emergency">Occasional</option>
                             <option name="reason" value="Other">Other</option>
                            </select>
                        
                        </div>

                        <div class="form-group ">
                            Please add your program here:
                            <input type="text" class ="form-control" name="coment" >
                        </div>
                       
                    </div>
                     <div class="form-row">




                            <div class="form-select">
                           From : <input  class ="form-control" type="datetime-local" name="time" > <br>
                           
                            <select name="state" class="custom-select mb-3" id="from">
                             <option name="state" value="Ariana">Ariana</option>
                             <option name="state" value="Beja">Beja</option>
                             <option name="state" value="Ben Arous">Ben Arous</option>
                             <option name="state" value="Bizerte">Bizerte</option>
                             <option name="state" value="Gabes">Gabes</option>
                             <option name="state" value="Gafsa">Gafsa</option>
                             <option name="state" value="Jendouba">Jendouba</option>
                             <option name="state" value="Kairouan">Kairouan</option>
                             <option name="state" value="Kasserine">Kasserine</option>
                             <option name="state" value="Kebili">Kebili</option>
                             <option name="state" value="Kef">Kef</option>
                             <option name="state" value="Mahdia">Mahdia</option>
                             <option name="state" value="Manouba">Manouba</option>
                             <option name="state" value="Medenine">Medenine</option>
                             <option name="state" value="Monastir">Monastir</option>
                             <option name="state" value="Nabeul">Nabeul</option>
                             <option name="state" value="Sfax">Sfax</option>
                             <option name="state" value="Sidi Bouzid">Sidi Bouzid</option>
                             <option name="state" value="Siliana">Siliana</option>
                             <option name="state" value="Sousse">Sousse</option>
                             <option name="state" value="Tataouine">Tataouine</option>
                             <option name="state" value="Tozeur">Tozeur</option>
                             <option name="state" value="Tunis">Tunis</option>
                             <option name="state" value="Zaghouan">Zaghouan</option>
                            </select>
                              City
                            <input type="text" class ="form-control" name="city" >
                        
                        </div> 
                       <div class="form-select">
                            To :<input  class ="form-control" type="datetime-local" name="time2" > <br>
                            
                            <select name="state2" class="custom-select mb-3" id="from">
                              <option name="state2" value="Ariana">Ariana</option>
                             <option name="state2" value="Beja">Beja</option>
                             <option name="state2" value="Ben Arous">Ben Arous</option>
                             <option name="state2" value="Bizerte">Bizerte</option>
                             <option name="state2" value="Gabes">Gabes</option>
                             <option name="state2" value="Gafsa">Gafsa</option>
                             <option name="state2" value="Jendouba">Jendouba</option>
                             <option name="state2" value="Kairouan">Kairouan</option>
                             <option name="state2" value="Kasserine">Kasserine</option>
                             <option name="state2" value="Kebili">Kebili</option>
                             <option name="state2" value="Kef">Kef</option>
                             <option name="state2" value="Mahdia">Mahdia</option>
                             <option name="state2" value="Manouba">Manouba</option>
                             <option name="state2" value="Medenine">Medenine</option>
                             <option name="state2" value="Monastir">Monastir</option>
                             <option name="state2" value="Nabeul">Nabeul</option>
                             <option name="state2" value="Sfax">Sfax</option>
                             <option name="state2" value="Sidi Bouzid">Sidi Bouzid</option>
                             <option name="state2" value="Siliana">Siliana</option>
                             <option name="state2" value="Sousse">Sousse</option>
                             <option name="state2" value="Tataouine">Tataouine</option>
                             <option name="state2" value="Tozeur">Tozeur</option>
                             <option name="state2" value="Tunis">Tunis</option>
                             <option name="state2" value="Zaghouan">Zaghouan</option>
                            </select>
                             City
                            <input type="text" class ="form-control" name="city2" >
                        
                        </div> 
           </div>

                    
                </fieldset>

                <h3 id="signup-form-h-1" tabindex="-1" class="title">
                    All Authorisations
                </h3>
                <fieldset id="signup-form-p-1" role="tabpanel" aria-labelledby="signup-form-h-1" class="body" aria-hidden="true" style="display: none;">
                    <div class="form-radio">
                        <label for="room_type" class="radio-label">What type of room would you want?</label>
                        <div class="form-radio-group">            
                            <div class="form-radio-item">
                                <input type="radio" name="room_type" id="single_room">
                                <label for="single_room">Single room</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="room_type" id="family_room">
                                <label for="family_room">Family room</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="room_type" id="business_room" checked="">
                                <label for="business_room">Business room</label>
                                <span class="check"></span>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div><div class="actions clearfix"><ul role="menu" aria-label="Pagination"><li class="disabled" aria-disabled="true"><a href="#previous" role="menuitem">Prev</a></li><li aria-hidden="false" aria-disabled="false" class="" style="display: list-item;">
                
                <button type="submit" role="menuitem">Submit</button>
            </li><li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Finish</a></li></ul></div></form>
        </div>

    </div>

    <!-- JS -->
    <script src="template/vendor/jquery/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    

</body></html>