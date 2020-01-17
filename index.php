<!DOCTYPE html>
<html>
<head lang="en">
    <!--This is the CDN to connect with CSS and JS-->
    <link rel="stylesheet" href="css/main.css?<?php echo time(); ?>">
    <script
        type="text/javascript" src="js/mainjavascript.js">
    </script>
    <!--This is the CDN to connect with Jquery-->
    <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">

    </script>
    <!--This is the CDN to connect with BootstrapCDN CSS-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--This is the CDN to connect with BootstrapCDN Javascript-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--This is the CDN to connect with Jquery BootstrapCDN  Complete JavaScript Bundle-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
            integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <title>HTML-Side</title>
</head>


<body>
<div align="center" class="card widthPage">
    <div class="bg-info">
        <img src="images/Luis.png" class=" sizePicture" alt="...">
    </div>


    <div class="card-body colorInfo">
        <h2 class="card-title">Luis Orbezua</h2>
        <p class="card-text">A little bit about me!</p>
        <div style="margin: 20px">
            <div class="box-body">
                <div class="box-group" id="accordion">
                    <div class="panel box box-primary">


                        <div id="div1" class="div box-header with-border border border-primary ">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                Introduction
                            </a>

                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="box-body">
                                My name is Luis Orbezua.
                                I came here from Europe, I am from the Basque country, this is located in the North of
                                Spain and South West of France.
                                I live with my family here in the USA.
                                I am now in my last year of my schooling.
                                My son is in Russia and he is able to speak with me every week on Sunday, which for him
                                is Monday.

                            </div>
                        </div>

                        <div class="div box-header with-border border border-secondary">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                Hobbies
                            </a>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse in">
                            <div class="box-body">
                                I love reading about history and enjoy cooking and speaking with my children.
                                I like to run, but no more than 3 to 5 miles a day.
                                I like going to the gym to burn energy or to help me relax.
                                I also enjoy looking at pictures from different countries.

                            </div>
                        </div>


                        <div class="div box-header with-border border border-success" id="div3">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                Interest
                            </a>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse in">
                            <div class="box-body">
                               Right  now I am interested in Cybersecurity so I am studying Security+, SySA+,
                                Wireshark, Analizer and KeliLinux. It is not easy, but I am trying to learn
                                something new every day in order to progress my knowledge.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <a href="#" class="btn btn-primary">See my projects</a>
    </div>
</div>


</body>
</html>