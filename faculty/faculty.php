<?php

    session_start();

    if (!isset($_SESSION['logged-in'])){
        header('location: ../login/login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="../css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <title>Faculty and Staff</title>
</head>
<body>
    <div class="side-bar">
        <div class="box-image">
			<br><center><img src="ccslogo.png" width ="100" height = "100"></center>
            <div class="title">Dean's List Application</div>
		</div>
        <br></br>
        <ul class="nav-links">
            <li>
                <a href="../dashboard/dashboard.php">
                    <i class='bx bx-grid-alt' ></i>
                    <span class="links-name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="../application/application.php">
                <i class='bx bxs-edit'></i>
                    <span class="links-name">Application</span>
                </a>
            </li>
            
            <li>
                <a href="../listers/listers.php">
                <i class='bx bx-list-check'></i>
                    <span class="links-name">Dean's Listers</span>
                </a>
            </li>
            <li>
                <a href="../faculty/faculty.php" class ="active">
                    <i class='bx bx-group' ></i>
                    <span class="links-name">Faculty</span>
                </a>
            </li>

            <li>
                <a href="../programs/programs.php">
                <i class='bx bx-book-reader'></i>
                    <span class="links-name">Programs</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="links-name">Settings</span>
                </a>
            </li>
            <hr class="line">
            <li id="logout-link">
                <a class="logout-link" href="../login/logout.php" title="Logout">
                    <i class='bx bx-log-out-circle'></i>
                    <span class="links-name">Logout</span>
                </a>
            </li>
        </ul>
    </div>
    <div id="logout-dialog" class="dialog" title="Logout">
        <p><span>Are you sure you want to logout?</span></p>
    </div>

    <script>
        $(document).ready(function() {
            $("#logout-dialog").dialog({
                resizable: false,
                draggable: false,
                height: "auto",
                width: 400,
                modal: true,
                autoOpen: false
            });
            $(".logout-link").on('click', function(e) {
                e.preventDefault();
                var theHREF = $(this).attr("href");

                $("#logout-dialog").dialog('option', 'buttons', {
                    "Yes" : function() {
                        window.location.href = theHREF;
                    },
                    "No" : function() {
                        $(this).dialog("close");
                    }
                });

                $("#logout-dialog").dialog("open");
            });
        });
    </script>

<section class="home-section">

    <div class="wrapper">
        <br>
        <center><h1 style = "font-size:40px;">CCS Faculty and Staff </h1></center>
        
        <div class="links">

            <ul>
                
                <li data-view="list-view" class="li-list active">
                <i class="fas fa-th-list"></i>
                </li>
                <li data-view="grid-view" class="li-grid">
                <i class="fas fa-th-large"></i>
                </li>
            </ul>
        </div>
        
            <div class="view_main">
                <div class="view_wrap list-view" style="display: block;">
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/go.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Dr. Roderick P. Go</h1>
                            <h2 class="content">College Dean</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/odon.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Engr. Odon A. Maravillas, Jr., MSCS</h1>
                            <h2 class="content">Associate Dean</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/belamide.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Engr. Gadmar M. Belamide, MEnggEd-ICT</h1>
                            <h2 class="content">College Secretary</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/sadiwa.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Ms. Lucy Felix-Sadiwa, MSCS</h1>
                            <h2 class="content">CS Department Head</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/escorialj.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Mr. John Augustus A. Escorial, MIT</h1>
                            <h2 class="content">IT Department</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/escoriala.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Mrs. Aida A. Escorial, MIT</h1>
                            <h2 class="content">Graduate Program Chair</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/aripE.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Engr. Edwip I. Arip, MEnggEd-ICT</h1>
                            <h2 class="content">External Studies Unit Technical Associate</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/aripJ.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Mr. John Paul I. Arip</h1>
                            <h2 class="content">LMS Quality Assurance</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/female.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Mrs. Justin Anne Albay-Arip</h1>
                            <h2 class="content">Visiting Lecturer</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/ballaho.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Mr. Jaydee C. Ballaho</h1>
                            <h2 class="content">LMS Lead Developer</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/catadman.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Mr. Jason A. Catadman</h1>
                            <h2 class="content">LMS Assistant Developer</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/flores.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Engr. Mark L. Flores, MEnggEd-ICT</h1>
                            <h2 class="content">Director, Data Protection and Security</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/gregana.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Ms. Pauleen Jean E. Gregana</h1>
                            <h2 class="content">Visiting Lecturer</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/female.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Ms. Aradzna M. Kamman</h1>
                            <h2 class="content">Visiting Lecturer</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/female.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Ms. Mara Marie Liao</h1>
                            <h2 class="content">Visiting Lecturer</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/lines.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Engr. Marvic A. Lines, MEnggEd-ICT</h1>
                            <h2 class="content">LMS Training and Management</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/female.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Ms. Ceed Janelle B. Lorenzo</h1>
                            <h2 class="content">Visiting Lecturer</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/lorenzo.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Engr. Ceed Jezreel B. Lorenzo, MIT</h1>
                            <h2 class="content">Research Coordinator</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/rojas.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Engr. Marjorie A. Rojas</h1>
                            <h2 class="content">Student Affairs and Guidance Coordinator</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/male.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Mr. Theo Jay M'lleno Sanson</h1>
                            <h2 class="content">Visiting Lecturer</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/tahil.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Mr. Salimar B. Tahil, MEnggEd-ICT</h1>
                            <h2 class="content">Asst. Director, MISTO</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/timpangco.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Mr. Whesley G. Timpangco</h1>
                            <h2 class="content">LMS Network Engineer</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/jackaria.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Ms. Alhadzra M. Jackaria</h1>
                            <h2 class="content">Laboratory Technician</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/male.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Mr. John Roy S. Velario</h1>
                            <h2 class="content">Administrative Assistant</h2>
                            
                        </div>
                    </div>



		</div>



		<div class="view_wrap grid-view" style="display: none;">
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/go.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Dr. Roderick P. Go</h1>
                            <h2 class="content">College Dean</h2>
                        </div>
                    </div>

                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/odon.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Engr. Odon A. Maravillas, Jr., MSCS</h1>
                            <h2 class="content">Associate Dean</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/belamide.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Engr. Gadmar M. Belamide, MEnggEd-ICT</h1>
                            <h2 class="content">College Secretary</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/sadiwa.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Ms. Lucy Felix-Sadiwa, MSCS</h1>
                            <h2 class="content">CS Department Head</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/escorialj.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Mr. John Augustus A. Escorial, MIT</h1>
                            <h2 class="content">IT Department</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/escoriala.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Mrs. Aida A. Escorial, MIT</h1>
                            <h2 class="content">Graduate Program Chair</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/aripE.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Engr. Edwip I. Arip, MEnggEd-ICT</h1>
                            <h2 class="content">External Studies Unit Technical Associate</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/aripJ.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Mr. John Paul I. Arip</h1>
                            <h2 class="content">LMS Quality Assurance</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/female.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Mrs. Justin Anne Albay-Arip</h1>
                            <h2 class="content">Visiting Lecturer</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/ballaho.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Mr. Jaydee C. Ballaho</h1>
                            <h2 class="content">LMS Lead Developer</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/catadman.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Mr. Jason A. Catadman</h1>
                            <h2 class="content">LMS Assistant Developer</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/flores.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Engr. Mark L. Flores, MEnggEd-ICT</h1>
                            <h2 class="content">Director, Data Protection and Security</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/gregana.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Ms. Pauleen Jean E. Gregana</h1>
                            <h2 class="content">Visiting Lecturer</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/female.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Ms. Aradzna M. Kamman</h1>
                            <h2 class="content">Visiting Lecturer</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/female.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Ms. Mara Marie Liao</h1>
                            <h2 class="content">Visiting Lecturer</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/lines.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Engr. Marvic A. Lines, MEnggEd-ICT</h1>
                            <h2 class="content">LMS Training and Management</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/female.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Ms. Ceed Janelle B. Lorenzo</h1>
                            <h2 class="content">Visiting Lecturer</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/lorenzo.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Engr. Ceed Jezreel B. Lorenzo, MIT</h1>
                            <h2 class="content">Research Coordinator</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/rojas.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Engr. Marjorie A. Rojas</h1>
                            <h2 class="content">Student Affairs and Guidance Coordinator</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/male.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Mr. Theo Jay M'lleno Sanson</h1>
                            <h2 class="content">Visiting Lecturer</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/tahil.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Mr. Salimar B. Tahil, MEnggEd-ICT</h1>
                            <h2 class="content">Asst. Director, MISTO</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/timpangco.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Mr. Whesley G. Timpangco</h1>
                            <h2 class="content">LMS Network Engineer</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/jackaria.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Ms. Alhadzra M. Jackaria</h1>
                            <h2 class="content">Laboratory Technician</h2>
                            
                        </div>
                    </div>
                    <div class="view_item">
                        <div class="vi_left">
                            <img src="./img/male.png">
                        </div>
                        <div class="vi_right">
                            <h1 class="title">Mr. John Roy S. Velario</h1>
                            <h2 class="content">Administrative Assistant</h2>
                            
                        </div>
                    </div>

        </div>
    </div>
    </div>

    <script src="scripts.js"></script>

</section>
</body>

</html>
