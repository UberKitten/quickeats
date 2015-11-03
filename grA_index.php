<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" >

    <title></title>

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
    <![endif]-->


    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
</head>

<body>
<div data-role="page" id="home">
    <div data-role="header">
        <h1>Semester Project</h1>
    </div>
    <div data-role="content">
        <div style="text-align: center;">
            <h2>ITSS4312: Group 3</h2>
            <h3>Fall 2015</h3>
        </div>
        <p style="text-align: center;">QuickEats Mobile</p>
        <p style="text-align: center;">Description</p>
    </div>
    <div data-role="footer" data-position="fixed" data-id="nav">
        <div data-role="navbar">
            <ul>
                <li><a href="#home" class="ui-btn-active ui-state-persist">Home</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#project">Project</a></li>
            </ul>
        </div>
    </div>
</div>
<div data-role="page" id="team">
    <div data-role="header">
        <h1>The Team</h1>
    </div>
    <div data-role="content">
        <ul data-role="listview" data-inset="true">
            <li>
                Team Leader

                <ul data-inset="true">
                    <li>
                        <img src="about:blank"/>
                        <h3>Suraiya Rahmetulla</h3>
                        <p>
                            Major: Information Technology and Systems, Emerging Media and Communication
                        </p>
                        <p>
                            Contact Info: <a href="mailto:sxr131930@utdallas.edu">sxr131930@utdallas.edu</a>
                        </p>
                        <p>
                            <strong>Responsibility:</strong> Team Leader
                        </p>
                    </li>
                </ul>
            </li>
            <li>
                Team Members

                <ul data-role="listview">
                    <li>
                        <img src="about:blank"/>
                        <h3>Elizabeth Lopez</h3>
                        <p>
                            Major: Information Technology and Systems, Computer Engineering
                        </p>
                        <p>
                            Contact Info: <a href="mailto:exl140130@utdallas.edu">exl140130@utdallas.edu</a>
                        </p>
                        <p>
                            <strong>Responsibility:</strong> Business Model Specialist
                        </p>
                    </li>
                    <li>
                        <img src="about:blank"/>
                        <h3>Kelby Schuermann</h3>
                        <p>
                            Major: Information Technology and Systems
                        </p>
                        <p>
                            Contact Info: <a href="mailto:kelby@kelbyschuermann.com">kelby@kelbyschuermann.com</a><br />
                            <a href="http://kelbyschuermann.com">http://kelbyschuermann.com</a>
                        </p>
                        <p>
                            <strong>Responsibility:</strong> Software Developer
                        </p>
                    </li>
                    <li>
                        <img src="about:blank"/>
                        <h3>Astra West</h3>
                        <p>
                            Major: Information Technology and Systems
                        </p>
                        <p>
                            Contact Info: <a href="mailto:astra@mwe.st">astra@mwe.st</a><br />
                            <a href="https://mwe.st">https://mwe.st</a>
                        </p>
                        <p>
                            <strong>Responsibility:</strong> Software Developer
                        </p>
                    </li>
                    <li>
                        <img src="about:blank"/>
                        <h3>Matt Smith</h3>
                        <p>
                            Major: Information Technology and Systems
                        </p>
                        <p>
                            Contact Info: <a href="mailto:s.matttx@gmail.com">s.matttx@gmail.com</a>
                        </p>
                        <p>
                            <strong>Responsibility:</strong> Steering Committee
                        </p>
                    </li>
                    <li>
                        <img src="about:blank"/>
                        <h3>Matt Lahde</h3>
                        <p>
                            Major: Information Technology and Systems
                        </p>
                        <p>
                            Contact Info: <a href="mailto:lahdematt@gmail.com">lahdematt@gmail.com</a>
                        </p>
                        <p>
                            <strong>Responsibility:</strong> Steering Committee
                        </p>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div data-role="footer" data-position="fixed" data-id="nav">
        <div data-role="navbar">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#team" class="ui-btn-active ui-state-persist">Team</a></li>
                <li><a href="#project">Project</a></li>
            </ul>
        </div>
    </div>
</div>
<div data-role="page" id="members" data-add-back-btn="true">
    <div data-role="header">
        <h1>Team Members</h1>
    </div>
    <div data-role="content">
        <ul data-role="listview">
            <li>
                <img src="about:blank"/>
                <h3>Elizabeth Lopez</h3>
                <p>
                    Major: Information Technology and Systems<br />
                    Computer Engineering
                </p>
                <p>
                    Contact Info: <a href="mailto:exl140130@utdallas.edu">exl140130@utdallas.edu</a>
                </p>
                <p>
                    <strong>Responsibility: </strong>
                </p>
            </li>
            <li>
                <img src="about:blank"/>
                <h3>Kelby Schuermann</h3>
                <p>
                    Major: Information Technology and Systems
                </p>
                <p>
                    Contact Info: <a href="mailto:kelby@kelbyschuermann.com">kelby@kelbyschuermann.com</a><br />
                    <a href="http://kelbyschuermann.com">http://kelbyschuermann.com</a>
                </p>
                <p>
                    <strong>Responsibility: </strong>
                </p>
            </li>
            <li>
                <img src="about:blank"/>
                <h3>Astra West</h3>
                <p>
                    Major: Information Technology and Systems
                </p>
                <p>
                    Contact Info: <a href="mailto:astra@mwe.st">astra@mwe.st</a><br />
                    <a href="https://mwe.st">https://mwe.st</a>
                </p>
                <p>
                    <strong>Responsibility: </strong>
                </p>
            </li>
            <li>
                <img src="about:blank"/>
                <h3>Matt Smith</h3>
                <p>
                    Major: Information Technology and Systems
                </p>
                <p>
                    Contact Info: <a href="mailto:s.matttx@gmail.com">s.matttx@gmail.com</a>
                </p>
                <p>
                    <strong>Responsibility: </strong>
                </p>
            </li>
            <li>
                <img src="about:blank"/>
                <h3>Matt Lahde</h3>
                <p>
                    Major: Information Technology and Systems
                </p>
                <p>
                    Contact Info: <a href="mailto:lahdematt@gmail.com">lahdematt@gmail.com</a>
                </p>
                <p>
                    <strong>Responsibility: </strong>
                </p>
            </li>
        </ul>
    </div>
    <div data-role="footer" data-position="fixed" data-id="nav">
        <div data-role="navbar">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#project">Project</a></li>
            </ul>
        </div>
    </div>
</div>
<div data-role="page" id="project">
    <div data-role="header">
        <h1>The Project</h1>
    </div>
    <div data-role="content">
        <div style="text-align: center;">
            <h2>QuickEats</h2>
        </div>
        <p style="text-align: center;">Description</p>
        <a href="#" data-role="button">Launch Application</a>
    </div>
    <div data-role="footer" data-position="fixed" data-id="nav">
        <div data-role="navbar">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#project" class="ui-btn-active ui-state-persist">Project</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html














