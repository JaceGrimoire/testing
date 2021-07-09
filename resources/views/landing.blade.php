@extends('layouts.layout')

@section('content')
<header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
</header>
<div class="l-navbar" id="nav-bar">
    <nav class="nav"  id="sidebar_left">
        <div>
            <a href="#" class="nav_logo"> <i class='bx bxl-ok-ru nav_logo-icon'></i> 
                <span class="nav_logo-name">Jace's Profile</span> 
            </a>
            <div class="nav_list"> 
                <a href="#about_me" class="nav_link nav_item active"> 
                    <i class='bx bx-grid-alt nav_icon'></i> 
                    <span class="nav_name">About</span> 
                </a> 
                <a href="#contact" class="nav_link nav_item"> 
                    <i class='bx bx-user nav_icon'></i> 
                    <span class="nav_name">Contact Information</span> 
                </a> 
                <a href="#document" class="nav_link nav_item"> 
                    <i class='bx bx-message-square-detail nav_icon'></i> 
                    <span class="nav_name">Documents</span> 
                </a> 
            </div>
        </div>
    </nav>
</div>
<!--Container Main start-->
<div class="height-100 w-100 bg-light" data-spy="scroll" data-target="#sidebar_left" data-offset="0" class="scrollspy-example">
    <div class="upper-main justify-content-between d-flex flex-row" id="about_me">
        <div class="p-2 name-info" id="about_me">
            <h4>Jason Albert Pascual</h4>
            <p><i>BS in Computer Science Student</i></p>
        </div>
        <div>   
            <button class="btn" data-toggle="modal" data-target="#exampleModal"><img class="btn prof-pic rounded-circle" src="/img/my_profile.jpg"></button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="/img/my_profile.jpg">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Exit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    
    <div class="p-2">
        <H3>About Me</H3>
        <p>I am an enthusiastic Computer Science Student  who wants to explore the world of Virtual and Augmented Reality through enhanced technologies. This will truly give me faith in the future of automation and virtualization of human activity. I strive to learn and immerse myself in AI and machine learning to further my research with VR and AR being the future for human activity. I have experience in Leadership, being in the College Student Council for 3 years in the University has sharpened my communication and leadership skills further to deal with a team and effectively run the show with no problems.</p>
    </div>
    <hr>
    <div class="p-2" id="education">
        <H3>Educational Attainment</H3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th>Level</th>
                <th>School</th>
                <th>Year</th>
                <th>Achievements</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Elementary</th>
                    <td>Laoag Central Elementary School</td>
                    <td>2005-2012</td>
                    <td>
                        <ul>
                            <li>Competed in Journalism Competitions</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Junior High School</th>
                    <td>Ilocos Norte College of Arts and Trades</td>
                    <td>2012-2016</td>
                    <td>
                        <ul>
                            <li>Competed in Journalism Competitions and Reached National Level</li>
                        <ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Senior High School</th>
                    <td>STI College Laoag</td>
                    <td>2016-2018</td>
                    <td>
                        <ul>
                            <li>Competed in an Android App Coding Competition and Won 1st place with a team</li>
                            <li>Started Leadership Background as Student Council President for 1 term</li>
                        <ul>
                </tr>
                <tr>
                    <th scope="row">College</th>
                    <td>Mariano Marcos State University</td>
                    <td>2018-Current</td>
                    <td>
                        <ul>
                            <li>Became an Officer of the CAS Student Council for 3 years.</li>
                            <li>Attended a Foreign Class in Indonesia on Software Engineering</li>
                            <li>Attended numerous leadership training seminars</li>
                            <li>Consistent University Scholar</li>
                            <li>Partnered the Student Council with the Youth Esports Program for Esports Integration in the University</li>
                        <ul>
                    </td>
                </tr>
            </tbody>
        </table>    
    </div>
    <hr>
    <div class="p-2" id="contact">
        <H3>Contact Information</H3>
        <div class="d-flex flex-content-left">
            <svg class="p-2" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M17.707,12.293c-0.391-0.391-1.023-0.391-1.414,0l-1.594,1.594c-0.739-0.22-2.118-0.72-2.992-1.594 s-1.374-2.253-1.594-2.992l1.594-1.594c0.391-0.391,0.391-1.023,0-1.414l-4-4c-0.391-0.391-1.023-0.391-1.414,0L3.581,5.005 c-0.38,0.38-0.594,0.902-0.586,1.435c0.023,1.424,0.4,6.37,4.298,10.268s8.844,4.274,10.269,4.298c0.005,0,0.023,0,0.028,0 c0.528,0,1.027-0.208,1.405-0.586l2.712-2.712c0.391-0.391,0.391-1.023,0-1.414L17.707,12.293z M17.58,19.005 c-1.248-0.021-5.518-0.356-8.873-3.712c-3.366-3.366-3.692-7.651-3.712-8.874L7,4.414L9.586,7L8.293,8.293 C8.054,8.531,7.952,8.875,8.021,9.205c0.024,0.115,0.611,2.842,2.271,4.502s4.387,2.247,4.502,2.271 c0.333,0.071,0.674-0.032,0.912-0.271L17,14.414L19.586,17L17.58,19.005z"></path></svg>
            <p class="p-2"><b>Phone Number:</b> 09203905006</p>
        </div>
        <div class="d-flex flex-content-left">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20.283,10.356h-8.327v3.451h4.792c-0.446,2.193-2.313,3.453-4.792,3.453c-2.923,0-5.279-2.356-5.279-5.28 c0-2.923,2.356-5.279,5.279-5.279c1.259,0,2.397,0.447,3.29,1.178l2.6-2.599c-1.584-1.381-3.615-2.233-5.89-2.233 c-4.954,0-8.934,3.979-8.934,8.934c0,4.955,3.979,8.934,8.934,8.934c4.467,0,8.529-3.249,8.529-8.934 C20.485,11.453,20.404,10.884,20.283,10.356z"></path></svg>
            <p class="p-2"><b>Email:</b> jacepascual38@gmail.com</p>
        </div>
        <div class="d-flex flex-content-left">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M12.001,2.002c-5.522,0-9.999,4.477-9.999,9.999c0,4.99,3.656,9.126,8.437,9.879v-6.988h-2.54v-2.891h2.54V9.798 c0-2.508,1.493-3.891,3.776-3.891c1.094,0,2.24,0.195,2.24,0.195v2.459h-1.264c-1.24,0-1.628,0.772-1.628,1.563v1.875h2.771 l-0.443,2.891h-2.328v6.988C18.344,21.129,22,16.992,22,12.001C22,6.479,17.523,2.002,12.001,2.002z"></path></svg>
            <p class="p-2"><b>Facebook:</b> <a href="https://www.facebook.com/heroofdarkness.jason">Jason Pascual</a></p>
        </div>
        <div class="d-flex flex-content-left">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path fill-rule="evenodd" clip-rule="evenodd" d="M12.026,2c-5.509,0-9.974,4.465-9.974,9.974c0,4.406,2.857,8.145,6.821,9.465 c0.499,0.09,0.679-0.217,0.679-0.481c0-0.237-0.008-0.865-0.011-1.696c-2.775,0.602-3.361-1.338-3.361-1.338 c-0.452-1.152-1.107-1.459-1.107-1.459c-0.905-0.619,0.069-0.605,0.069-0.605c1.002,0.07,1.527,1.028,1.527,1.028 c0.89,1.524,2.336,1.084,2.902,0.829c0.091-0.645,0.351-1.085,0.635-1.334c-2.214-0.251-4.542-1.107-4.542-4.93 c0-1.087,0.389-1.979,1.024-2.675c-0.101-0.253-0.446-1.268,0.099-2.64c0,0,0.837-0.269,2.742,1.021 c0.798-0.221,1.649-0.332,2.496-0.336c0.849,0.004,1.701,0.115,2.496,0.336c1.906-1.291,2.742-1.021,2.742-1.021 c0.545,1.372,0.203,2.387,0.099,2.64c0.64,0.696,1.024,1.587,1.024,2.675c0,3.833-2.33,4.675-4.552,4.922 c0.355,0.308,0.675,0.916,0.675,1.846c0,1.334-0.012,2.41-0.012,2.737c0,0.267,0.178,0.577,0.687,0.479 C19.146,20.115,22,16.379,22,11.974C22,6.465,17.535,2,12.026,2z"></path></svg>
            <p class="p-2"><b>Github:</b> <a href="https://github.com/JaceGrimoire">JaceGrimoire</a></p>
        </div>
        <div class="d-flex flex-content-left">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h16c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z M8.339,18.337H5.667 v-8.59h2.672V18.337z M7.003,8.574c-0.856,0-1.548-0.694-1.548-1.548s0.691-1.548,1.548-1.548c0.854,0,1.548,0.693,1.548,1.548 S7.857,8.574,7.003,8.574z M18.338,18.337h-2.669V14.16c0-0.996-0.018-2.277-1.388-2.277c-1.39,0-1.601,1.086-1.601,2.207v4.248 h-2.667v-8.59h2.56v1.174h0.037c0.355-0.675,1.227-1.387,2.524-1.387c2.704,0,3.203,1.778,3.203,4.092V18.337z"></path></svg>
            <p class="p-2"><b>LinkedIn:</b> <a href="https://www.linkedin.com/in/jason-pascual0208/">Jason Pascual</a></p>
        </div>
    </div>
    <hr>
    <div class="w-100" id="document">
        <H3>Documents</H3>
        <div class="justify-content-center d-flex p-4" style="padding-top: 50px;">
            <a class="m-2 btn btn-primary" href="/img/CV.png" target="_blank">Curriculum Vitae</a>
            <a class="m-2 btn btn-primary" href="/img/Resume.png" target="_blank">Resume</a>
        <div>
    </div>
</div>
<!--Container Main end-->
@endsection
