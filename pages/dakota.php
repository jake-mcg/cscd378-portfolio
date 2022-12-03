<?php require_once "header.php"; ?>

<body>
    <div class="container">
        <div class="row my-3">
            <div class="col-3">
                <img src="images/dakota.webp" alt="Dakota Profile Picture" class="img-fluid rounded-start" />
            </div>
            <div class="col-9">
                <h1>Dakota Condos</h1>
                <h3>EWU Computer Science - Senior</h3>
                <h5>Graduation Winter 2022</h5>
                <p class="text-muted">- The stock photos were too good to not keep.</p>
            </div>
        </div>
        <div class="row justify-content-evenly">
            <!-- email -->
            <div class="col-4">
                <i class="fas fa-envelope fa-fw me-2"></i><a href="mailto:dcondos@ewu.edu">dcondos@ewu.edu</a>
            </div>
            <!-- github -->
            <div class="col-4">
                <i class="fab fa-github fa-fw me-2"></i><a href="https://github.com/dakotacondos">github.com/dakotacondos</a>
            </div>
        </div>
        <hr>
        <!-- content cards -->
        <div class="row g-4">
            <!-- Work Experience -->
            <div class="col">
                <div class="card">
                    <div class="card-header d-flex justify-content-center">
                        <h4 class="card-title">Work Experience</h4>
                    </div>
                    <div class="card-body">


                        <h4 class="d-inline-flex align-items-center"><object class="mx-3" data="\assets\img\usaf.svg" width="50" height="50"></object>U.S. Air Force</h4>


                        <hr>

                        <!-- Assignments -->
                        <h6 class="card-title">Wright Patterson AFB, OH</h6>
                        <p class="lh-1"><em>Executive Communications Supervisor</em></p>
                        <p class="text-muted small lh-0"><em>January 2019 — January 2020</em></p>
                        <ul>
                            <li>Supervised a 12 member team that resolved high priority network outages affecting 4k+ personnel for the National Air and Space Intelligence Center</li>
                            <li>Managed organizational telework deployment program and deployable training environments</li>
                            <li><strong>Completed Air Force Leadership School and received the Distinguished Graduate and the Academic Achievement Awards</strong></li>
                        </ul>

                        <h6 class="card-title">RAF Lakenheath, England</h6>
                        <p class="lh-1"><em>Asset Management Technician</em></p>
                        <p class="text-muted small lh-0"><em>July 2016 — January 2019</em></p>
                        <ul>
                            <li>Coordinated with 17 different organizational groups to identify, develop and implement individual software/hardware solutions without disruption to workflow</li>
                            <li>Led and coordinated multiple teams that completed the first successful rollout of Windows 10 to over 5k PCs on two United States Air Force Bases in Europe</li>
                            <li><strong>Unit award: Manpower Utilization 2017</strong></li>
                            <li><strong>Personal award: Outstanding Cyber Systems Airman - RAF Lakenheath 2017</strong></li>
                        </ul>

                        <h6 class="card-title">OSAN AFB, South Kore</h6>
                        <p class="lh-1"><em>Client Systems Technician</em></p>
                        <p class="text-muted small lh-0"><em>November 2014 — July 2019</em></p>
                        <ul>
                            <li>Provided IT support with 99.9% uptime for over 650 intelligence operators. Those operations directly resulted in 230 U-2 sorties and an immediate response to a North Korean artillery exchange</li>
                            <li>Consulted with the Korean linguist training lab to implement customized software and hardware used to certify 72 Korean Linguists annually</li>
                            <li><strong>Unit award: Air Force's Best Language Program 2015</strong></li>
                        </ul>


                    </div>
                </div>
            </div>

            <!-- Languages -->
            <div class="col">
                <div class="card mb-3">
                    <div class="card-header d-flex justify-content-center">
                        <h4 class="card-title">Languages</h4>
                    </div>

                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">Java</th>
                                <th scope="col">C#</th>
                                <th scope="col">Python</th>
                                <th scope="col">HTML</th>
                                <th scope="col">PHP</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><object data="\assets\img\java.svg" width="30" height="30"> </object></td>
                                <td><object data="\assets\img\c-sharp-c.svg" width="30" height="30"> </object></td>
                                <td><object data="\assets\img\python.svg" width="30" height="30"> </object></td>
                                <td><object data="\assets\img\html-5.svg" width="30" height="30"> </object></td>
                                <td><object data="\assets\img\php.svg" width="30" height="30"> </object></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Certifications -->
                <div class="card">
                    <div class="card-header d-flex justify-content-center">
                        <h4 class="card-title">Certifications</h4>
                    </div>
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">CompTIA A+ CE</th>
                                <th scope="col">CompTIA Security+ CE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="\assets\img\Aplus Logo Certified CE.png" alt="CompTIA A+ CE logo" width="50" height="50"></td>
                                <td><img src="\assets\img\SecurityPlus Logo Certified CE.png" alt="CompTIA Security+ CE logo" width="50" height="50"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <style>
        td,
        th {
            text-align: center;
        }

        p.lh-0 {
            line-height: 0.1;
        }

        p.lh-1 {
            line-height: 0.2;
        }
    </style>

</body>
<?php require_once "footer.php"; ?>