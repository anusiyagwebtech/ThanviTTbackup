<?php
include "require/header.php";
?>
<!-- –––––––––––––––[ HEADER ]––––––––––––––– -->

<!-- ––––––––––––[ PAGE CONTENT ]–––––––––––– -->
<main id="mainContent" class="main-content">


    <!-- start: Hero Area -->
    <section class="section breadcrumb-area pt-100 pb-80 bg-ct" data-bg-img="assets/images/background/18.jpg">
        <div class="container t-center">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
                    <div class="section-top-title">
                        <h1 class="t-uppercase font-45">Packages</h1>
                        <ol class="breadcrumb">
                            <li><a href="index.php"><i class="fa fa-home mr-10"></i>Home</a></li>
                            <li class="active">Packages</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Hero Area -->

    <!-- start: Packages Area -->



    <!-- Bootstrap CSS -->
    <style>
        /* Custom styles for the glass effect */
        .glass-effect {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
            position: relative;
            background-color: white;
            overflow: hidden;
            box-shadow: 0 8px 16px rgb(254 188 64 / 49%);
            transition: transform 0.3s ease-in-out;
            flex-grow: 1;
            min-height: 370px;
        }

        /* .glass-effect::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom right,
                    rgba(255, 255, 255, 0.2),
                    rgba(255, 255, 255, 0));
            z-index: 1;
            pointer-events: none;
        } */

        .packages-s {
            padding: 30px 0;
        }

        .pack-h {
            margin: 0 auto 30px;
            border-bottom: 1px solid #ffa700;
            width: 131px;
            font-weight: bold;
        }

        .pack-sh {
            color: #ffa700;
            font-size: 25px;
            text-align: center;
            margin: 0 0 0px;
        }

        .pack-p {
            color: #ffa700;
            font-size: 16px;
            text-align: center;
            margin: 0 0 0px;
        }

        .details-list {
            list-style-type: disc;
            margin-left: 15px;
        }

        .pa-title {
            font-size: 18px;
            color: #523524;
        }

        /* Styling for Basic, Medium, Premium boxes */
        /* .bas53 {
            transform: perspective(800px) rotateX(-3deg) rotateY(3deg);
        }

        .medium {
            transform: perspective(800px) rotateX(-2deg) rotateY(2deg);
        }

        .premium {
            transform: perspective(800px) rotateX(-1deg) rotateY(1deg);
        } */
    </style>

    <section class="packages-s">
        <div class="container mt-4">
            <div class="col-lg-12 col-md-12 mb-12">
                <h2 class="pack-h">Structure</h2>

            </div>
            <div class="row">
                <!-- Box 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="glass-effect basic">
                        <h5 class="pack-sh">Basic</h5>
                        <p class="pack-p">Rs. 2100</p>

                        <div class="section structure-details">
                            <h6 class="pa-title">Structure</h6>
                            <ul class="details-list">
                                <li>RCC Semi Framed Structure</li>
                                <li>Basement Height: 3 ft.</li>
                                <li>Concrete Grade: M20</li>
                            </ul>
                        </div>

                        <div class="section material-details">
                            <h6 class="pa-title">Materials</h6>
                            <ul class="details-list">
                                <li> <strong>Cement:</strong> Chettinad, Maha, Priya</li>
                                <li><strong>Steel:</strong> any ISI Brand</li>
                                <li><strong>Bricks:</strong> Chamber Bricks</li>
                                <li><strong>Sand:</strong> M-Sand & P-Sand</li>
                                <li><strong>Ceiling Height:</strong> 10 Feet</li>
                            </ul>
                        </div>




                    </div>
                </div>

                <!-- Box 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="glass-effect medium">
                        <h5 class="pack-sh">Medium</h5>
                        <p class="pack-p">Rs. 2300</p>

                        <div class="section structure-details">
                            <h6 class="pa-title">Structure</h6>
                            <ul class="details-list">
                                <li>RCC Semi Framed Structure</li>
                                <li>Basement Height: 4 ft.</li>
                                <li>Concrete Grade: M20</li>
                            </ul>
                        </div>

                        <div class="section material-details">
                            <h6 class="pa-title">Materials</h6>
                            <ul class="details-list">
                                <li><strong>Cement:</strong> Dolmia, Sankar, Chettinad</li>
                                <li><strong>Steel:</strong> Vizag, ARS, KISCOL</li>
                                <li><strong>Bricks:</strong> Wirecut Bricks</li>
                                <li><strong>Sand:</strong> M-Sand & P-Sand</li>
                                <li><strong>Ceiling Height:</strong> 10 Feet</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Box 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="glass-effect premium">
                        <h5 class="pack-sh">Premium</h5>
                        <p class="pack-p">Rs. 2500</p>
                        <div class="section structure-details">
                            <h6 class="pa-title">Structure</h6>
                            <ul class="details-list">
                                <li>RCC Framed Structure</li>
                                <li>Basement Height: 5 ft.</li>
                                <li>Concrete Grade: M20</li>
                            </ul>
                        </div>

                        <div class="section material-details">
                            <h6 class="pa-title">Materials</h6>
                            <ul class="details-list">
                                <li><strong>Cement:</strong> Ultratech, RAMCO</li>
                                <li><strong>Steel:</strong> TATA DISCON, JSW, SAIL</li>
                                <li><strong>Bricks:</strong> Wirecut Bricks</li>
                                <li><strong>Sand:</strong> M-Sand & River Sand for Plastering Works</li>
                                <li><strong>Ceiling Height:</strong> 10 Feet</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="packages-s">
        <div class="container mt-4">
            <div class="col-lg-12 col-md-12 mb-12">
                <h2 class="pack-h">Ktichen</h2>

            </div>
            <div class="row">
                <!-- Box 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="glass-effect basic " style="min-height:250px;">
                        <h5 class="pack-sh">Basic</h5>
                        <p class="pack-p">Rs. 2100</p>


                        <div class="section material-details">
                            <h6 class="pa-title">Materials</h6>
                            <ul class="details-list">
                                <li> <strong>GRANITE :</strong> Slab 20mm Thick.
                                    (100 per sq.ft)</li>
                                <li><strong>Sink :</strong>Stainless Steel (Rate: Rs.
                                    2000)</li>
                                <li><strong>Wall Tile:</strong> 2 Feet.(Rate: Rs. 40
                                    per sq.ft) </li>

                            </ul>
                        </div>




                    </div>
                </div>

                <!-- Box 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="glass-effect medium" style="min-height:250px;">
                        <h5 class="pack-sh">Medium</h5>
                        <p class="pack-p">Rs. 2300</p>



                        <div class="section material-details">
                            <h6 class="pa-title">Materials</h6>
                            <ul class="details-list">
                                <li> <strong>GRANITE :</strong> Slab 20mm Thick.
                                    (130 per sq.ft)</li>
                                <li><strong>Sink :</strong>Stainless Steel (Rate: Rs.
                                    3000)</li>
                                <li><strong>Wall Tile:</strong> 2 Feet.(Rate: Rs. 45
                                    per sq.ft) </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Box 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="glass-effect premium" style="min-height:250px;">
                        <h5 class="pack-sh">Premium</h5>
                        <p class="pack-p">Rs. 2500</p>

                        <div class="section material-details">
                            <h6 class="pa-title">Materials</h6>
                            <ul class="details-list">
                                <li> <strong>GRANITE :</strong> Slab 20mm Thick.
                                    (155 per sq.ft)</li>
                                <li><strong>Sink :</strong>Stainless Steel (Rate: Rs.
                                    5000)</li>
                                <li><strong>Wall Tile:</strong> 2 Feet.(Rate: Rs. 55
                                    per sq.ft) </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="packages-s">
        <div class="container mt-4">
            <div class="col-lg-12 col-md-12 mb-12">
                <h2 class="pack-h">Bathroom</h2>

            </div>
            <div class="row">
                <!-- Box 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="glass-effect basic " style="min-height: 455px;">
                        <h5 class="pack-sh">Basic</h5>
                        <p class="pack-p">Rs. 2100</p>


                        <div class="section material-details">
                            <h6 class="pa-title">Materials</h6>
                            <ul class="details-list">
                                <li>Wall Tile up to 7ft Height (Rate: Rs. 40 per sq.ft)</li>
                                <li>Sanitary & CP Fittings Up to Rs. 10,000/-</li>
                                <li>PIPES: CPVC / PVC, any ISI Brand.</li>
                                <li>
                                    OTHERS:
                                    <ul>
                                        <li>EWC</li>
                                        <li>Health Faucet</li>
                                        <li>Wash Basin</li>
                                        <li>2 in 1 wall Mixer</li>
                                        <li>Overhead Shower</li>
                                        <li>All Accessories are White Color & Basic Model in any ISI Brand.</li>
                                        <li>PVC Doors Rs. 2000/-. (Size: 2.5 ft x 7 ft)</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>




                    </div>
                </div>

                <!-- Box 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="glass-effect medium" style="min-height:455px;">
                        <h5 class="pack-sh">Medium</h5>
                        <p class="pack-p">Rs. 2300</p>




                        <div class="section material-details">
                            <h6 class="pa-title">Materials</h6>
                            <ul class="details-list">
                                <li>Wall Tile up to 7ft Height (Rate: Rs. 45 per sq.ft)</li>
                                <li>Sanitary & CP Fittings Up to Rs. 12,000/-</li>
                                <li>PIPES: CPVC / PVC, (Ashirwad,
                                    Supreme, Kinggold).</li>
                                <li>
                                    OTHERS:
                                    <ul>
                                        <li>EWC</li>
                                        <li>Health Faucet</li>
                                        <li>Wash Basin</li>
                                        <li>2 in 1 wall Mixer</li>
                                        <li>Overhead Shower</li>
                                        <li>All Accessories are White Color & Basic Model in PARRYWARE or CERA.</li>
                                        <li>PVC Doors Rs. 3000/-. (Size: 2.5 ft x 7 ft)</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <!-- Box 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="glass-effect premium" style="min-height:455px;">
                        <h5 class="pack-sh">Premium</h5>
                        <p class="pack-p">Rs. 2500</p>

                        <div class="section material-details">
                            <h6 class="pa-title">Materials</h6>
                            <ul class="details-list">
                                <li>Wall Tile up to 7ft Height (Rate: Rs. 55 per sq.ft)</li>
                                <li>Sanitary & CP Fittings Up to Rs. 17,000/-</li>
                                <li>PIPES: CPVC / PVC, any (Ashirwad,
                                    Supreme, Astral).</li>
                                <li>
                                    OTHERS:
                                    <ul>
                                        <li>EWC</li>
                                        <li>Health Faucet</li>
                                        <li>Wash Basin</li>
                                        <li>2 in 1 wall Mixer</li>
                                        <li>Overhead Shower</li>
                                        <li>All Accessories are White Color & Basic Model in JAQUAR</li>
                                        <li>PVC Doors Rs. 7000/-. (Size: 2.5 ft x 7 ft)</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="packages-s">
        <div class="container mt-4">
            <div class="col-lg-12 col-md-12 mb-12">
                <h2 class="pack-h">Flooring</h2>

            </div>
            <div class="row">
                <!-- Box 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="glass-effect basic " style="min-height: 255px;">
                        <h5 class="pack-sh">Basic</h5>
                        <p class="pack-p">Rs. 2100</p>


                        <div class="section material-details">
                            <h6 class="pa-title">Materials</h6>
                            <ul class="details-list">
                                <li>Living & Dining & Room & Kitchen Flooring: Tiles Up to Rs. 45 per sq.ft.</li>
                                <li>Balcony & Open Area Flooring: Tiles Up to Rs. 45 per sq.ft.</li>
                                <li>Staircase Flooring: Anti-Skid Tiles Up to Rs. 35 per sq.ft.</li>
                                <li>Parking Tiles: Anti-Skid Tiles Up to Rs. 35 per sq.ft.</li>
                            </ul>
                        </div>




                    </div>
                </div>

                <!-- Box 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="glass-effect medium" style="min-height:255px;">
                        <h5 class="pack-sh">Medium</h5>
                        <p class="pack-p">Rs. 2300</p>




                        <div class="section material-details">
                            <h6 class="pa-title">Materials</h6>
                            <ul class="details-list">
                                <li>Living & Dining & Room & Kitchen Flooring: Tiles Up to Rs. 55 per sq.ft.</li>
                                <li>Balcony & Open Area Flooring: Tiles Up to Rs. 50 per sq.ft.</li>
                                <li>Staircase Flooring: Anti-Skid Tiles Up to Rs. 50 per sq.ft.</li>
                                <li>Parking Tiles: Anti-Skid Tiles Up to Rs. 40 per sq.ft.</li>
                            </ul>
                        </div>

                    </div>
                </div>

                <!-- Box 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="glass-effect premium" style="min-height:255px;">
                        <h5 class="pack-sh">Premium</h5>
                        <p class="pack-p">Rs. 2500</p>

                        <div class="section material-details">
                            <h6 class="pa-title">Materials</h6>
                            <ul class="details-list">
                                <li>Living & Dining & Room & Kitchen Flooring: Tiles Up to Rs. 65 per sq.ft.</li>
                                <li>Balcony & Open Area Flooring: Tiles Up to Rs. 55 per sq.ft.</li>
                                <li>Staircase Flooring: Anti-Skid Tiles Up to Rs. 100 per sq.ft.</li>
                                <li>Parking Tiles: Anti-Skid Tiles Up to Rs. 50 per sq.ft.</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="packages-s">
        <div class="container mt-4">
            <div class="col-lg-12 col-md-12 mb-12">
                <h2 class="pack-h">Doors & Windows</h2>

            </div>
            <div class="row">
                <!-- Box 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="glass-effect basic " style="min-height: 340px;">
                        <h5 class="pack-sh">Basic</h5>
                        <p class="pack-p">Rs. 2100</p>


                        <div class="section material-details">
                            <h6 class="pa-title">Materials</h6>
                            <ul class="details-list">
                                <li>Main doors: (Size: 3.5 ft x 7 ft)
                                    Ready Made Teak Door with Teak Wood Frame of 5 Inch by 4 Inch, 38mm thickness.</li>
                                <li>Internal Door: (Size: 3 ft x 7 ft)
                                    Flush Door (Up to Rs. 2800/-) with Laminates Along with KONGU Wood Frame of 4 Inch by 3 Inch.</li>
                                <li>Windows: (Size: 4 ft x 4 ft)
                                    KONGU Wood. (One window per Room)</li>
                            </ul>
                        </div>




                    </div>
                </div>

                <!-- Box 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="glass-effect medium" style="min-height:340px;">
                        <h5 class="pack-sh">Medium</h5>
                        <p class="pack-p">Rs. 2300</p>


                        <div class="section material-details">
                            <h6 class="pa-title">Materials</h6>
                            <ul class="details-list">
                                <li>Main doors: (Size: 3.5 ft x 7 ft)
                                    Ready Made Teak Door with Teak Wood Frame of 6 Inch by 4 Inch, 38mm thickness.</li>
                                <li>Internal Door: (Size: 3 ft x 7 ft)
                                    Flush Door (Up to Rs. 3500/-) with Laminates Along with KONGU Wood Frame of 4 Inch by 3 Inch.</li>
                                <li>Windows: (Size: 4 ft x 4 ft)
                                    KONGU Wood. (One window per Room)</li>
                            </ul>
                        </div>

                    </div>
                </div>

                <!-- Box 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="glass-effect premium" style="min-height:340px;">
                        <h5 class="pack-sh">Premium</h5>
                        <p class="pack-p">Rs. 2500</p>

                        <div class="section material-details">
                            <h6 class="pa-title">Materials</h6>
                            <ul class="details-list">
                                <li>Main doors: (Size: 3.5 ft x 7 ft)
                                    Ready Made First Quality Teak
                                    Door with Teak Wood Frame of 6
                                    Inch by 4 Inch, 38mm thichness. </li>
                                <li>Internal Door: (Size: 3 ft x 7 ft)
                                    Flush Door (Up to Rs. 5500/-) with Laminates Along with KONGU Wood Frame of 4 Inch by 3 Inch.</li>
                                <li>Windows: (Size: 4 ft x 4 ft)
                                    (One window per Room).
                                    UPVC Sliding Windows with
                                    Mosquito mesh. (White Color) </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="packages-s">
        <div class="container mt-4">
            <div class="col-lg-12 col-md-12 mb-12">
                <h2 class="pack-h">Electrical Works</h2>

            </div>
            <div class="row">
                <!-- Box 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="glass-effect basic " style="min-height: 878px;">
                        <h5 class="pack-sh">Basic</h5>
                        <p class="pack-p">Rs. 2100</p>


                        <div class="section material-details">
                            <h6 class="pa-title">Materials</h6>
                            <ul class="details-list">
                                <li>Wires – any ISI Brand</li>
                                <li>Switches – any ISI Brand</li>
                                <li>
                                    Electrical Points:
                                    <ul>
                                        <li>
                                            Bedroom:
                                            <ul>
                                                <li>1 switch box with switches for 1 fan, 2 lights, and 1 five-amps socket with switch near the door</li>
                                                <li>Another switch box with the same set of switches near the bed for two-way control</li>
                                                <li>1 AC point, 1 fan point, and 2 lights point</li>
                                            </ul>
                                        </li>
                                        <li>
                                            Bathroom:
                                            <ul>
                                                <li>1 switch box with 1 switch for light and 1 switch for heater near the door</li>
                                                <li>15 amps socket for heater</li>
                                                <li>1 switch box with 1 five-amps socket for a hairdryer near the mirror</li>
                                            </ul>
                                        </li>
                                        <li>
                                            Hall:
                                            <ul>
                                                <li>1 switch box near the door for 2 fans, 2 lights, and 1 five-amps socket</li>
                                                <li>Another switch box with the same set of switches near the sofa</li>
                                                <li>1 switch box with 2 five-amps sockets and switches along with a cable point for TV connection</li>
                                            </ul>
                                        </li>
                                        <li>Dining: 1 switch box with switches for 1 fan & 1 light</li>
                                        <li>Pooja: 1 switch box with a switch for 1 light</li>
                                        <li>
                                            Kitchen:
                                            <ul>
                                                <li>1 switch box with a switch for 1 light and 1 exhaust fan</li>
                                                <li>1 switch box with 15 amps socket & switch for refrigerator</li>
                                                <li>1 switch box with ONE 15 amps socket & switch for mixie/oven</li>
                                            </ul>
                                        </li>
                                        <li>Utility: 1 switch for light, 1 switch box with one 15 amps socket & switch for washing machine</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>




                    </div>
                </div>

                <!-- Box 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="glass-effect medium" style="min-height:878px;">
                        <h5 class="pack-sh">Medium</h5>
                        <p class="pack-p">Rs. 2300</p>




                        <div class="section material-details">
                            <h6 class="pa-title">Materials</h6>
                            <ul class="details-list">
                                <li>Wires – ORBIT</li>
                                <li>Switches – GM</li>
                                <li>
                                    Electrical Points:
                                    <ul>
                                        <li>
                                            Bedroom:
                                            <ul>
                                                <li>1 switch box with
                                                    switches for 1 fan, 2 lights
                                                    and 1 five amps socket with
                                                    switch near door and another
                                                    switch box with same set of
                                                    switches near bed for two-way
                                                    control. 1 AC point, 1 fan point
                                                    and 2 lights point.
                                                </li>

                                            </ul>
                                        </li>
                                        <li>
                                            Bathroom:
                                            <ul>
                                                <li> 1 switch box with 1
                                                    switch for light and 1 switch for
                                                    heater near the door & 15 amps
                                                    socket for heater. 1 switch box
                                                    with 1 five amps socket for hair
                                                    dryer near the mirror</li>

                                            </ul>
                                        </li>
                                        <li>
                                            Hall:
                                            <ul>
                                                <li>1 switch box near the door for 2 fans, 2 lights, and 1 five-amps socket</li>
                                                <li>Another switch box with the same set of switches near the sofa</li>
                                                <li>1 switch box with 2 five-amps sockets and switches along with a cable point for TV connection</li>
                                            </ul>
                                        </li>
                                        <li>Dining: 1 switch box with switches for 1 fan & 1 light</li>
                                        <li>Pooja: 1 switch box with a switch for 1 light</li>
                                        <li>
                                            Kitchen:
                                            <ul>
                                                <li>1 switch box with
                                                    switch for 2 lights, 1 exhaust
                                                    fan. 1 switch point for chimney.
                                                    1 switch box with 15 amps
                                                    socket & switch for refrigerator.
                                                    1 switch box with TWO 15
                                                    amps socket & switch for
                                                    mixie/ oven.</li>

                                            </ul>
                                        </li>
                                        <li>Utility: 1 switch for light, 1 switch box with one 15 amps socket & switch for washing machine</li>
                                        <li>One 5 amps switch &
                                            socket for computer.</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <!-- Box 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="glass-effect premium" style="min-height:878px;">
                        <h5 class="pack-sh">Premium</h5>
                        <p class="pack-p">Rs. 2500</p>

                        <div class="section material-details">
                            <h6 class="pa-title">Materials</h6>
                            <ul class="details-list">
                                <li>Wires – Finolex</li>
                                <li>Switches – Legrand or Goldmedal</li>
                                <li>
                                    Electrical Points:
                                    <ul>
                                        <li>
                                            Bedroom:
                                            <ul>
                                                <li>1 switch box with switches for 1 fan, 2 lights, and 1 five-amps socket with switch near the door</li>
                                                <li>Another switch box with the same set of switches near the bed for two-way control</li>
                                                <li>1 AC point, 1 fan point, and 2 lights point</li>
                                            </ul>
                                        </li>
                                        <li>
                                            Bathroom:
                                            <ul>
                                                <li>1 switch box with 1 switch for light and 1 switch for heater near the door</li>
                                                <li>15 amps socket for heater</li>
                                                <li>1 switch box with 1 five-amps socket for a hairdryer near the mirror</li>
                                            </ul>
                                        </li>
                                        <li>
                                            Hall:
                                            <ul>
                                                <li>1 switch box near the door
                                                    for 2 fans, 2 lights & 1 five amps
                                                    socket and another switch box
                                                    with same set of switches nearsofa. 1 switch box with 3 five
                                                    amps sockets and switches along
                                                    with cable point for TV
                                                    connection</li>
                                            </ul>
                                        </li>
                                        <li>Dining: 1 switch box with switches for 1 fan & 1 light</li>
                                        <li>Pooja: 1 switch box with a switch for 1 light</li>
                                        <li>
                                            Kitchen:
                                            <ul>
                                                <li>1 switch box with switch
                                                    for 2 lights, 1 exhaust fan. 1
                                                    switch point for chimney. 1 switch
                                                    box with 15 amps socket & switch
                                                    for refrigerator. 1 switch box with
                                                    three 15 amps socket & switch for
                                                    mixie/ oven.</li>
                                            </ul>
                                        </li>
                                        <li>Utility: switch for light, 1 switch
                                            box with two 15 amps socket &
                                            switch for washing machine (one
                                            in the top & on in the bottom)</li>
                                        <li>Extras– 1 additional switch &
                                            socket in each room for mobile
                                            charging. 5 amps socket & switch
                                            for computer.</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="packages-s">
        <div class="container mt-4">
            <div class="col-lg-12 col-md-12 mb-12">
                <h2 class="pack-h">Plumbing
                    Work</h2>

            </div>
            <div class="row">
                <!-- Box 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="glass-effect basic " style="min-height: 340px;">
                        <h5 class="pack-sh">Basic</h5>
                        <p class="pack-p">Rs. 2100</p>

                        <div class="section material-details">
                            <h6 class="pa-title">Materials</h6>
                            <ul class="details-list">
                                <li>
                                    Bathroom:
                                    <ul>
                                        <li>1 wash basin with tap</li>
                                        <li>1 shower with wall mixer for hot & cold water</li>
                                        <li>1 floor mount western closet with health faucet</li>
                                    </ul>
                                </li>
                                <li>Dining: 1 wash basin with tap</li>
                                <li>Kitchen: Single stainless steel sink with one tap</li>
                                <li>Utility: 1 tap point & water outlet point for washing machine</li>
                            </ul>
                        </div>




                    </div>
                </div>

                <!-- Box 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="glass-effect medium" style="min-height:340px;">
                        <h5 class="pack-sh">Medium</h5>
                        <p class="pack-p">Rs. 2300</p>



                        <div class="section material-details">
                            <h6 class="pa-title">Materials</h6>
                            <ul class="details-list">
                                <li>
                                    Bathroom:
                                    <ul>
                                        <li>1 wash basin with tap</li>
                                        <li>1 shower with wall mixer for hot & cold water</li>
                                        <li>1 floor mount western closet with health faucet</li>
                                    </ul>
                                </li>
                                <li>Dining: 1 wash basin with tap</li>
                                <li>Kitchen: Single stainless steel sink with one tap</li>
                                <li>Utility: 1 tap point & water outlet point for washing machine</li>
                            </ul>
                        </div>

                    </div>
                </div>

                <!-- Box 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="glass-effect premium" style="min-height:340px;">
                        <h5 class="pack-sh">Premium</h5>
                        <p class="pack-p">Rs. 2500</p>

                        <div class="section material-details">
                            <h6 class="pa-title">Materials</h6>
                            <ul class="details-list">
                                <li>
                                    Bathroom:
                                    <ul>
                                        <li>1 wash basin with tap</li>
                                        <li>1 shower with wall mixer for hot & cold water</li>
                                        <li>1 floor mount western closet with health faucet</li>
                                    </ul>
                                </li>
                                <li>Dining: 1 wash basin with tap</li>
                                <li>Kitchen: Single stainless steel sink with one tap</li>
                                <li>Utility: 1 tap point & water outlet point for washing machine</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="packages-s">
        <div class="container mt-4">
            <div class="col-lg-12 col-md-12 mb-12">
                <h2 class="pack-h">Painting</h2>

            </div>
            <div class="row">
                <!-- Box 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="glass-effect basic " style="min-height: 410px;">
                        <h5 class="pack-sh">Basic</h5>
                        <p class="pack-p">Rs. 2100</p>


                        <div class="section material-details">
                            <h6 class="pa-title">Materials</h6>
                            <ul class="details-list">
                                <li>
                                    Interior:
                                    <ul>
                                        <li>1 Coat of any ISI brand putty</li>
                                        <li>2 Coats of any ISI brand emulsion paint for the walls (light colors)</li>
                                        <li>1 Coat of Primer and 2 coats of any emulsion paint for the ceiling</li>
                                    </ul>
                                </li>
                                <li>
                                    Exterior:
                                    <ul>
                                        <li>1 Coat of White Cement</li>
                                        <li>1 Coat of any ISI brand primer</li>
                                        <li>2 Coats of any emulsion paint (light Colors)</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>




                    </div>
                </div>

                <!-- Box 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="glass-effect medium" style="min-height:410px;">
                        <h5 class="pack-sh">Medium</h5>
                        <p class="pack-p">Rs. 2300</p>



                        <div class="section material-details">
                            <h6 class="pa-title">Materials</h6>
                            <ul class="details-list">
                                <li>


                                    Interior:
                                    <ul>
                                        <li>1 Coat of ASIAN or BIRLA putty.</li>
                                        <li>Coats of ASIAN Primer and 2
                                            Coats of Asian tractor emulsion
                                            paint for the walls. (light colors)</li>
                                        <li>1 Coat of Primer and 2 Coats of
                                            Asian tractor emulsion paint for
                                            the ceiling.</li>
                                    </ul>
                                </li>
                                <li>
                                    Exterior:
                                    <ul>
                                        <li>1 Coat of White Cement</li>
                                        <li>1 Coat of Asian primer</li>
                                        <li>2 Coats of ace emulsion paint. (light Colors)</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <!-- Box 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="glass-effect premium" style="min-height:410px;">
                        <h5 class="pack-sh">Premium</h5>
                        <p class="pack-p">Rs. 2500</p>

                        <div class="section material-details">
                            <h6 class="pa-title">Materials</h6>

                            <ul class="details-list">
                                <li>


                                    Interior:
                                    <ul>
                                        <li>1 Coat of ASIAN or BIRLA putty.</li>
                                        <li>Coats of ASIAN Primer and 2
                                            Coats of Asian tractor emulsion
                                            paint for the walls. (light colors)</li>
                                        <li>1 Coat of Primer and 2 Coats of
                                            Asian tractor emulsion paint for
                                            the ceiling.</li>
                                    </ul>
                                </li>
                                <li>
                                    Exterior:
                                    <ul>
                                        <li>1 Coat of White Cement</li>
                                        <li>1 Coat of Weather Proof primer</li>
                                        <li>2 Coats of Weather Proof emulsion paint. (light Colors)</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>


    <section class="packages-s">
        <div class="container mt-4">
            <div class="col-lg-12 col-md-12 mb-12">
                <h2 class="pack-h">Other Inclusive</h2>

            </div>
            <div class="row">
                <!-- Box 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="glass-effect basic " style="min-height: 458px;">
                        <h5 class="pack-sh">Basic</h5>
                        <p class="pack-p">Rs. 2100</p>


                        <div class="section material-details">
                            <h6 class="pa-title">Materials</h6>
                            <ul class="details-list">
                                <li>Parapet wall Up to 3 feet high (included if headroom is built)</li>
                                <li>1 Loft in each bedroom, kitchen & pooja room on the shorter side of the wall</li>
                                <li>1 Shelf in each bedroom, kitchen & pooja room of maximum width</li>
                            </ul>


                        </div>




                    </div>
                </div>

                <!-- Box 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="glass-effect medium" style="min-height:458px;">
                        <h5 class="pack-sh">Medium</h5>
                        <p class="pack-p">Rs. 2300</p>




                        <div class="section material-details">
                            <h6 class="pa-title">Materials</h6>
                            <ul class="details-list">
                                <li>Overhead Tank: 1000 Litres Sintex</li>
                                <li>MS Staircase Railing</li>
                                <li>Parapet wall Up to 3 feet high (included if headroom is built)</li>
                                <li>Roof weathering is included</li>
                                <li>Front Gate worth Rs. 10,000/-</li>
                                <li>1 MS safety Grill gate for main door</li>
                                <li>1 Loft in each bedroom, kitchen & pooja room on the shorter side of the wall</li>
                                <li>1 Shelf in each bedroom, kitchen & pooja room of maximum width 5 feet</li>
                            </ul>
                        </div>

                    </div>
                </div>

                <!-- Box 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="glass-effect premium" style="min-height:458px;">
                        <h5 class="pack-sh">Premium</h5>
                        <p class="pack-p">Rs. 2500</p>

                        <div class="section material-details">
                            <h6 class="pa-title">Materials</h6>
                            <ul class="details-list">
                                <li>Overhead Tank: 2000 Litres Sintex</li>
                                <li>SS Staircase Railing</li>
                                <li>Parapet wall 3 feet high (included if headroom is built)</li>
                                <li>Roof weathering is included</li>
                                <li>Front Gate worth Rs. 16,000/-</li>
                                <li>1 MS safety Grill gate for main door</li>
                                <li>Soil Testing</li>
                                <li>Structural Designing</li>
                                <li>Elevation work (worth up to Rs. 20,000/-)</li>
                                <li>1 Loft in each bedroom, kitchen & pooja room on the shorter side of the wall</li>
                                <li>1 Shelf in each bedroom, kitchen & pooja room of maximum width 5 feet</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="packages-s">
        <div class="container mt-4">
            <div class="col-lg-12 col-md-12 mb-12">
                <h2 class="pack-h">Extra Charges</h2>
            </div>
            <div class="row">
                <!-- Box 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="glass-effect basic " style="min-height: 473px;">
                        <h5 class="pack-sh">Basic</h5>
                        <p class="pack-p">Rs. 2100</p>


                        <div class="section material-details">
                            <!-- <h6 class="pa-title">Materials</h6> -->
                            <ul class="details-list">
                                <li>Compound Wall</li>
                                <li>Lift</li>
                                <li>Carpentry & other wooden work</li>
                                <li>Govt. Approval charges</li>
                                <li>EB Approval charges</li>
                                <li>Water Connection & Charges</li>
                                <li>Underground Water storage Sump Rs. 20 per litre</li>
                                <li>Overhead sintex tank Rs. 15 per litre</li>
                                <li>Overhead concrete tank Rs. 30 per litre</li>
                                <li>Elevation work extra</li>
                                <li>Additional foundation height</li>
                                <li>Soil testing</li>
                                <li>Structural designing</li>
                                <li>3D Elevation designing</li>
                                <li>Outer area development (set back)</li>
                            </ul>
                        </div>




                    </div>
                </div>

                <!-- Box 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="glass-effect medium" style="min-height:473px;">
                        <h5 class="pack-sh">Medium</h5>
                        <p class="pack-p">Rs. 2300</p>




                        <div class="section material-details">
                            <!-- <h6 class="pa-title">Materials</h6> -->
                            <ul class="details-list">
                                <li>Compound Wall</li>
                                <li>Lift</li>
                                <li>Carpentry & other wooden work</li>
                                <li>Govt. Approval charges</li>
                                <li>EB Approval charges</li>
                                <li>Water Connection & Charges</li>
                                <li>Underground Water storage Sump Rs. 25 per litre</li>
                                <li>Overhead concrete tank Rs. 35 per litre</li>
                                <li>Elevation work extra</li>
                                <li>Additional foundation height</li>
                                <li>Soil testing</li>
                                <li>Electrical / Plumbing Drawings extra</li>
                                <li>Structural designing</li>
                                <li>INTERIOR 3D View or Walkthrough</li>
                                <li>Outer area development (set back)</li>
                            </ul>
                        </div>

                    </div>
                </div>

                <!-- Box 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="glass-effect premium" style="min-height:473px;">
                        <h5 class="pack-sh">Premium</h5>
                        <p class="pack-p">Rs. 2500</p>

                        <div class="section material-details">
                            <!-- <h6 class="pa-title">Materials</h6> -->
                            <ul class="details-list">
                                <li>Compound Wall</li>
                                <li>Lift</li>
                                <li>Carpentry & other wooden work</li>
                                <li>Govt. Approval charges</li>
                                <li>EB Approval charges</li>
                                <li>Water Connection & Charges</li>
                                <li>Underground Water storage Sump Rs. 25 per litre</li>
                                <li>Overhead concrete tank Rs. 40 per litre</li>
                                <li>Electrical / Plumbing Drawings extra</li>
                                <li>INTERIOR 3D View or Walkthrough</li>
                                <li>Outer area development (set back)</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->
<?php include "require/footer.php"; ?>