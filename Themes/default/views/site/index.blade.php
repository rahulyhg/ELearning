@extends('layouts.sitelayout')

@section('content')
<!-- Intro Section -->
    <section class="st-intro-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 col-sm-12">
                    <div class="st-intro-content text-center">
                        <?php
                         $current_theme            = getDefaultTheme(); 
                        ?>
                        <h1>{{ getThemeSetting('banner_title',$current_theme) }}</h1>
                        <h1>{{ getThemeSetting('banner_sub_title',$current_theme) }}</h1>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-12">
                    <div class="st-hero-slider">
                        <div class="st-heroheader-carousel owl-carousel">

                        

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Free Text Practice -->
    <section class="st-practice-section">
        <div class="container">
            <div class="st-section-title text-center">
                <h2>Our Unique Features </h2>
                <p>One Stop Solution for All Exam Needs </p>
            </div>
            <div class="row hidden-xs">
                <div class="col-lg-12">
                    <ul class="list-unstyled st-practice-items clearfix">
                        <li>
                            <a href="javascript:void(0);"> <img src="{{FRONT_ASSETS}}images/mathematics.png" alt="">
                                <h3>LMS</h3></a>
                            <p>Learning Management System. You will get all learning meterials by LMS Series</p>
                            
                        </li>
                        <li>
                            <a href="javascript:void(0);"> <img src="{{FRONT_ASSETS}}images/technology.png" alt="">
                                <h3>Exams</h3></a>
                            <p>Uniquely developed software for global examinations as GRE, GMAT, IBPS, and any exams even at school level also.
                            </p>
                        </li>
                        <li>
                            <a href="javascript:void(0);"> <img src="{{FRONT_ASSETS}}images/science.png" alt="">
                                <h3>Analysis</h3></a>
                            <p>You can have detailed analysis by subject, by question along with time managements</p>
                            
                        </li>
                        <li>
                            <a href="javascript:void(0);"> <img src="{{FRONT_ASSETS}}images/general-knowledge.png" alt="">
                                <h3>Reports</h3></a>
                            <p>Detailed reports generations for the analysis part</p>
                            
                        </li>
                       
                       

                    </ul>
                </div>
            </div>
        </div>
    </section>


@stop