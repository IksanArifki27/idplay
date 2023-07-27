@extends('layouts.main')
@section('content')

<div id="page" class="site">
    <section class="contact-page-section">
        <div class="container">
            <div class="people-info-wrap">
                <h2>leave us your info</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur.</p>
                <form>
                    <span>
                    <input type="text" placeholder="Full Name*" class="input- name">
                    <input type="email" placeholder="Email*" class="input- email">
                    </span>
                    <input type="text" placeholder="Subject*" class="input- subject">
                    <textarea placeholder="Messages*" class="input-">
                        
                    </textarea>
                    <input type="submit" value="submit now">
                </form>
            </div>

            <div class="contact-info">
                <h2>contact info</h2>
                <ul class="contact-list">
                    <li><i class="fas fa-location-arrow"></i> 
                        <span>
                            <p>Malang, Jawa Timur Indonesia</p>
                            <p>(Jalan ........)</p>
                        </span>
                    </li>
                    <li><i class="fas fa-phone"></i>
                        <span> 
                            <p>Phone: 08888888888, Mobile: 0800000000</p>
                            <p>Fax:9472923720</p>
                        </span>
                    </li>
                    <li><i class="fas fa-envelope"></i>
                        <span>
                            <p>internet@email.com</p>
                        </span>
                    </li>
                </ul>
                <ul class="contact-social">
                    <li><a href=""><i class="fab fa-whatsapp"></i></a></li>
                    <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href=""><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href=""><i class="fab fa-facebook-messenger"></i></a></li>
                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                    <li><a href=""><i class="fab fa-skype"></i></a></li>
                    <li><a href=""><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="map-section">
        <iframe src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=politeknik negeri malang&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
</div>

@endsection