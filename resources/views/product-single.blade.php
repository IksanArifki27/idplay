@extends('layouts.main')
@section('content')

<div id="page" class="site">
    <section class="page-content" id="course-page">
        <div class="container">
            <main class="course-detail">
                <h2>{{$data->nama}}</h2>
                <header>
                    <div class="course-box">
                        <i class="fas fa-fast-forward"></i>
                        <p>{{$data->kecepatan}} Mbps</p>
                    </div>

                    <div class="course-box">
                        <i class="fas fa-user"></i>
                        <p>{{$data->device}} Devices</p>
                    </div>

                    <div class="course-box">
                        <i class="fas fa-money-check-alt"></i>
                        <p>Rp. {{$data->biaya}} </p>
                        <p>(Per bulan)</p>
                    </div>
                </header>
                <article>
                    <section class="course-intro">
                        <h3>Introduction</h3>

                        <p>{{$data->deskripsi}} .</p>
                    </section>

                    {{-- <section class="course-objective">
                        <h3>Objectives</h3>
                        <p>After this course student will be able to:</p>
                        <ul>
                            <li>Develop interactive Web pages using XHTML, HTML/DHTML & CSS</li>
                            <li>Create interactive forms that capture and validate user input using JavaScript</li>
                            <li>Create interactive forms that capture and validate user input using JavaScript</li>
                            <li>Control Java Applets, ActiveX Controls and other plug-ins</li>
                            <li>Control Java Applets, ActiveX Controls and other plug-ins</li>
                            <li>Enhance PHP programming skills to successfully build interactive, data-driven web applications</li>
                            <li>Develop interactive Web pages using XHTML, HTML/DHTML & CSS</li>
                            <li>Develop interactive Web pages using XHTML, HTML/DHTML & CSS</li>
                            <li>Control Java Applets, ActiveX Controls and other plug-ins</li>
                            <li>Create interactive forms that capture and validate user input using JavaScript</li>
                            <li>Develop interactive Web pages using XHTML, HTML/DHTML & CSS</li>
                        </ul>

                        <h3>Certification</h3>
                        <p>After this course Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodc illum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                        <h3>Who can apply for this course?</h3>
                        <ul>
                            <li>+2 with science faculty</li>
                            <li>+2 with management faculty</li>
                            <li>+2 with science faculty</li>
                            <li>+2 with management faculty</li>
                        </ul>

                        <h3>Training Methodology</h3>
                        <ul>
                            <li>Weekly test</li>
                            <li>Digital Class</li>
                            <li>Field Visit and real project demonstration</li>
                            <li>+2 with managem</li>
                        </ul>
                    </section> --}}
                </article>					
            </main>
            <aside>
                {{-- <div class="reserve-course"> --}}
                    {{-- <h2>Berlangganan</h2>
                    <form>
                        <input type="text" placeholder="Your Name*" required>
                        <input type="email" name="userEmail" placeholder="Your Email Address*" required>
                        <input type="text" placeholder="Your Address*" required>
                        <input type="text" placeholder="Your Phone Number*" required>
                        <textarea placeholder="Write your message"></textarea>
                        <input type="submit" value="Submit">
                    </form> --}}
                {{-- </div> --}}
                <br><br><br><br><br>
                <form action="/orderForm/{{$data->id}}" method="post">
                        @csrf
                         <button type="submit" style="background-color: rgb(245, 186, 76); color:white; padding:20px 30px;font-size:28px; font-weight:500;margin:100px; border-radius:5px;" >Beli</button>
                    </form>
                    {{-- <a href="/register" style="background-color: rgb(245, 186, 76); color:white; padding:20px 30px;font-size:28px; font-weight:500;margin:100px; border-radius:5px;">Berlangganan</a> --}}
                <!-- New Letter Ends -->
            </aside>
        </div>
    </section>
</div>

@endsection