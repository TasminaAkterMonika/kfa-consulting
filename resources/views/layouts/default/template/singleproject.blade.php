@include('layouts.default.header')
<body>

<div class="boxed_wrapper">
@include('layouts.default.navigation')


<div class="inner-banner has-base-color-overlay text-center" style="background: url(images/background/1.jpg);">
    <div class="container">
        <div class="box">
            <h3>projects single</h3>
        </div>
    </div>
    <div class="breadcumb-wrapper">
        <div class="container">
            <div class="pull-left">
                <ul class="list-inline link-list">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="our-projects.html">Projects</a>
                    </li>
                    <li>
                        projects single
                    </li>
                </ul>
            </div>
            <div class="pull-right">
                <a href="#" class="get-qoute"><i class="fa fa-share-alt"></i>share</a>
            </div>
        </div>
    </div>
</div>



<div class="single-projects sec-padd">
    <div class="container">
        <div class="img-box">
            <img src="{{ asset('uploads')}}/images/project/{{ $project->image }}" alt="">
        </div>
        <br><br>
        <div class="client-information">
            <div class="row">
                <div class="col-md-4 col-sm-5 col-xs-12">
                    <ul class="inform-list">
                        <li><span>Customer    &nbsp;&nbsp;&nbsp; : </span> &nbsp;&nbsp; John Doe</li>
                        <li><span>Live demo   &nbsp;&nbsp; : </span> &nbsp;&nbsp; www.livedemo.com</li>
                        <li><span>Category    &nbsp;&nbsp;&nbsp;&nbsp; : </span>&nbsp;&nbsp;  Finance & Legal</li>
                        <li><span>Date        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   : </span> &nbsp;&nbsp; 21 August, 2015</li>
                        <li><span>Tags        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   : </span> &nbsp;&nbsp; Financial Services</li>
                    </ul>
                </div>
                <div class="col-md-8 col-sm-7 col-xs-12">
                    <h3>Finance and legal work</h3>
                    <p class="title">Financial Services</p>
                    <div class="text">
                        <p>The challenge is to bring company seds whose web presence is boring up to date. The challenge sed is to ensure that when a ut client visits your websites they feel positive about your company projects. Anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. </p>
                    </div>
                    <div class="link">
                        <a href="#" class="thm-btn">Launch Project</a>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="project-analysis">
            <div class="row">
                <div class="col-md-4 col-sm-5 col-xs-12">
                    <div class="section-title">
                        <h3>Project Analysis</h3>
                    </div>
                </div>
                <div class="col-md-8 col-sm-7 col-xs-12">
                    <div class="text">
                        <p>
                            The project analyst providers critical data support to technical Research and analysis functions may include sed budget tracking financial sed forecasting projects evaluation and monitoring, maintanence compliance regulations and performing establisheed fact that a readers. Project it is a long establisheed fact that a readers will be ut distracted by that readable content of ut sed page when looking at its layout the point of using seds labour normal will be ut distracted by that readable.
                        </p><br><br>
                        <p>
                            Projects evaluation and monitoring, maintanence compliance regulations and performing establisheed fact that a readers. Project it is a long establisheed fact that a readers will be ut distracted by that readable content of ut sed page when looking at its layout the point of usingl will be ut distracted by that readable.
                        </p><br>
                    </div>
                    <div class="img-box">
                        <img src="images/resource/graph2.jpg" alt="">
                    </div><br><br>
                </div>
            </div>
        </div>
        <div class="project-result">
            <div class="row">
                <div class="col-md-4 col-sm-5 col-xs-12">
                    <div class="section-title">
                        <h3>Project Result</h3>
                    </div>
                </div>
                <div class="col-md-8 col-sm-7 col-xs-12">
                    
                    <div class="text">
                        <p>
                            This mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself,because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. 
                        </p><br>
                    </div>
                    <ul class="analysis-list">
                        <li><span class="fa fa-check-square-o"></span>Which toil and pain can procure him some great pleasure.</li>
                        <li><span class="fa fa-check-square-o"></span>Any right to find fault with a man who annoying.</li>
                        <li><span class="fa fa-check-square-o"></span>Consequences, or one who avoids a pain that produces.</li>
                        <li><span class="fa fa-check-square-o"></span>Denouncing pleasure praising was born and I will give a complete. </li>
                        <li><span class="fa fa-check-square-o"></span>expound the actual teachings of the great explorer of the truth.</li>
                        <li><span class="fa fa-check-square-o"></span>Pleasure rationally encounter consequences that extremely. </li>
                    </ul><br>
                    <div class="img-box">
                        <img src="images/resource/graph3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.default.footer')





