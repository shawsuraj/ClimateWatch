<?php
include "config.php"; 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>Climate Watch</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


    <!-- jQuery library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container-fluid background">

        <!--Navigation bar-->
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">ClimateWatch</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#about">About</a>
                        </li>

                    </ul>
                    <form class="d-flex" role="login">
                        <?php if(isset($_SESSION['login_user'])){ ?>
                        <p>Hello, <?php echo $lui['name']; ?></a>
                        <button class="btn btn-outline-success"  onclick="window.location.href='functions.php?logout'" type="submit" style="margin-left: 5px;">Logout</button>
                        <?php } else{ ?>
                        <a href="login.php" class="btn btn-outline-success" >Login</a>
                        <span style="padding: 10px;"></span>
                        <a href="signup.php" class="btn btn-outline-success" >Register</a>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </nav>

        <div class="appname">
            CLIMATE WATCH
        </div>


        <div class="about">

        </div>

    </div>

    <div class="about background">
        <span><a id="about"></a></span>
        <p style="color: aliceblue; 
                    font-size: 25px;
                    align-content: flex-start;
                    max-width: 50vw; 
                    float: left;
                    padding:20px 20px 0 20px;
                    margin: 0;">
            The increases in heatwaves, droughts and floods caused by climate change are destroying the planet and affecting billions of lives worldwide. Despite the temporary reduction of CO2 emissions in 2020, global energy-related CO2 emissions rose by 6.0 per cent as demand for coal, oil and gas rebounded with the economy in 2021. Based on current national commitments, global emissions are set to increase by almost 14 per cent over the current decade, which could lead to a climate catastrophe unless Governments, the private sector and civil society work together to take immediate action. However, the war in Ukraine threatens to become the cause of a huge setback for concerted efforts to speed up climate action.
            <br><br>

            As at 31 December 2021, a total of 123 countries had reported the adoption of national disaster risk reduction strategies, an increase from 55 countries in 2015. The number of countries with disaster risk reduction strategies that promote policy coherence with the Sustainable Development Goals and the Paris Agreement has reached 118, compared with only 44 in 2015. The COVID-19 crisis highlighted a further accelerated global effort and an approach to disaster risk reduction strategies that is more systemic and more multi-hazard in nature.
            <br><br>

            By April 2022, 193 parties (192 countries plus the European Union) had communicated their first nationally determined contribution under the United Nations Framework Convention on Climate Change and 13 parties had submitted their second nationally determined contribution. The nationally determined contributions attest that countries are articulating more quantified targets and indicators for adaptation and identifying links between adaptation and the Sustainable Development Goals and other frameworks.
            <br><br>

            As at 31 March 2021, 125 of 154 developing countries were taking measures related to national adaptation plans and prioritizing formulation and implementation of national adaptation plans in their adaptation efforts. Six of the least developed countries (including three small island developing States) and an additional four small island developing States had completed a national adaptation plan. More of the least developed countries had prepared a draft national adaptation plan and were on track to complete and submit it in line with the vision of all least developed countries having their national adaptation plan by 2021.
            <br><br>

            In order to limit global warming to 1.5 degrees Celsius above pre-industrial levels, scientists recommend that by 2030 global emissions should be cut by 4 per cent compared with 2010 levels. According to current national commitments, however, global emissions are set to increase by almost 14 per cent during the rest of the decade.
        </p>
        <img src="https://sdgs.un.org/sites/default/files/2022-07/SDG%20Report%202022_Goal%2013%20infographic.png" style="max-height:100vh;
                    width: : auto;">
    </div>




</body></html>
