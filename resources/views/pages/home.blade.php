@extends('layouts.app')

@section('content')

        <section id="home" class="intro" style="padding-top: 15%; padding-bottom: 45%;">
            <br/><br/><br/><br/><br/>
            <div class="section aboutme" data-anchor="aboutme">

                <div class="opaque-bg animated fadeInDown">
                    <h1 style="color:white"><span style="color:#FF6363"></span></h1>
                    <p style="text-align: center">
                        <span id="holder" style="color:white; font-size: 50px;"></span>
                        <span class="blinking-cursor" style="color:white; font-size: 40px;">|</span>
                    </p>
                </div>
                <i id="moveDown" class=""></i>
            </div>
        </section>


        <script>
            $(document).ready(function() {
                (function ($) {
                    $.fn.writeText = function (content) {
                        var contentArray = content.split(""),
                                current = 0,
                                elem = this;
                        setInterval(function () {
                            if (current < contentArray.length) {
                                elem.text(elem.text() + contentArray[current++]);
                            }
                        }, 180);
                    };

                })(jQuery);

                $("#holder").writeText("WEB DESIGNER + FRONT-END DEVELOPER fasdf asdfasdf asdfasf asdfasdf asdfasdf asdfasdfa asdfa dfasdf adsfasdf asdfa sdfasdf asdfa sdf asdf adsf asdfa sdfa dfdfasdf a");
            });
        </script>

        <section id="about" class="about-myself" style="padding-top: 10%; padding-bottom: 10%;">
            <img class="img-profile" src=""></img>
            <h2>About me</h2>
            <div class="presentation">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis dolore voluptas accusantium vero adipisci. Ab, officiis, molestiae. Quam ad enim accusantium mollitia delectus nesciunt laboriosam hic adipisci commodi perferendis similique minus perspiciatis numquam est impedit quasi deleniti odio, ex aliquid ut sunt maxime, alias natus. Saepe dolores pariatur aperiam placeat, distinctio vitae, iure labore qui deleniti nemo assumenda dolore tenetur. A laboriosam aspernatur, ullam magni quos soluta nam nemo, dolor optio ab fugit quas consequatur voluptatem reiciendis, similique molestias adipisci delectus eaque omnis, quisquam cum eligendi. Facere itaque ipsa, in ex a quam necessitatibus totam neque dolorum esse cumque omnis.</div>
        </section>




        <section id="skills" class="section" data-anchor="skills" style="padding-top: 10%; padding-bottom: 10%;">
            <div class="content">
                <h1 class="wow fadeInDown" data-wow-delay="0.2s">Skills</h1>
                <p class="wow fadeInDown" data-wow-delay="0.2s">Hi, I'm Brad Engelhardt! I'm a Silicon Valley based Web Designer & Front-end Developer focused on creating clean, responsive web designs!</p>

                <div class=" wow fadeInUp container-skillbar" data-wow-delay="0.2s">
                    <div class="skillbar clearfix " data-percent="90%">
                        <div class="skillbar-title" style="background: #DD1E2F;"><span>HTML5</span></div>
                        <div class="skillbar-bar" style="background: #DD1E2F;"></div>
                        <div class="skill-bar-percent">90%</div>
                    </div>

                    <div class="skillbar clearfix " data-percent="80%">
                        <div class="skillbar-title" style="background: #EBB035;"><span>CSS3</span></div>
                        <div class="skillbar-bar" style="background: #EBB035;"></div>
                        <div class="skill-bar-percent">80%</div>
                    </div>

                    <div class="skillbar clearfix " data-percent="75%">
                        <div class="skillbar-title" style="background: #218559;"><span>Photoshop</span></div>
                        <div class="skillbar-bar" style="background: #218559;"></div>
                        <div class="skill-bar-percent">75%</div>
                    </div>

                    <div class="skillbar clearfix " data-percent="45%">
                        <div class="skillbar-title" style="background: #6840D4;"><span>Rails</span></div>
                        <div class="skillbar-bar" style="background: #6840D4;"></div>
                        <div class="skill-bar-percent">45%</div>
                    </div>

                    <div class="skillbar clearfix " data-percent="30%">
                        <div class="skillbar-title" style="background: #06A2CB;"><span>jQuery</span></div>
                        <div class="skillbar-bar" style="background: #06A2CB;"></div>
                        <div class="skill-bar-percent">30%</div>
                    </div>

                    <div class="skillbar clearfix " data-percent="20%">
                        <div class="skillbar-title" style="background: #AB4DD2;"><span>PHP</span></div>
                        <div class="skillbar-bar" style="background: #AB4DD2;"></div>
                        <div class="skill-bar-percent">20%</div>
                    </div>
                </div>
            </div>
        </section>


        <section id="portfolio" class="portfolio">
            <h2>Portfolio</h2>

            <div class="projects">

                <div class="project">
                    <a href="#" target="_blank">
                        <div class="project-overlay"></div>
                        <img class="project-image" src="https://source.unsplash.com/3l3RwQdHRHg">
                        <div class="project-details">
                            <p class="project-description">Description</p>
                        </div>
                    </a>
                </div>

                <div class="project">
                    <a href="#" target="_blank">
                        <div class="project-overlay"></div>
                        <img class="project-image" src="https://source.unsplash.com/ISI5DlnYvuY">
                        <div class="project-details">
                            <p class="project-description">Description</p>
                        </div>
                    </a>
                </div>

                <div class="project">
                    <a href="#" target="_blank">
                        <div class="project-overlay"></div>
                        <img class="project-image" src="https://source.unsplash.com/3l3RwQdHRHg">
                        <div class="project-details">
                            <p class="project-description">Description</p>
                        </div>
                    </a>
                </div>

                <div class="project">
                    <a href="#" target="_blank">
                        <div class="project-overlay"></div>
                        <img class="project-image" src="https://source.unsplash.com/ISI5DlnYvuY">
                        <div class="project-details">
                            <p class="project-description">Description</p>
                        </div>
                    </a>
                </div>

                <div class="project">
                    <a href="#" target="_blank">
                        <div class="project-overlay"></div>
                        <img class="project-image" src="https://source.unsplash.com/3l3RwQdHRHg">
                        <div class="project-details">
                            <p class="project-description">Description</p>
                        </div>
                    </a>
                </div>

                <div class="project">
                    <a href="#" target="_blank">
                        <div class="project-overlay"></div>
                        <img class="project-image" src="https://source.unsplash.com/ISI5DlnYvuY">
                        <div class="project-details">
                            <p class="project-description">Description</p>
                        </div>
                    </a>
                </div>

            </div>
            <div class="clear"></div>
        </section>




        <section id="contact" class="dark" data-speed="5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Contact <span class="id-color">Us</span>
                            <span style="opacity: 0;"></span>
                        </h1>

                        <p>
                            Get in touch with us. Feel free to use the contact form below.
                        </p>

                        <div class="spacer-single"></div>
                    </div>

                    <div class="col-md-8">

                        <form name="contactForm" id="contact_form" method="post" action="/email/send" style="font-family: 'Helvetica Neue', Helvetica;">
                            <div class="row">
                                <div class="col-md-6">
                                    <div id="name_error" class="error">Please enter your name.</div>
                                    <div>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="email_error" class="error">Please enter your valid E-mail ID.</div>
                                    <div>
                                        <input type="text" name="email" id="email" class="form-control" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div id="message_error" class="error">Please enter your message.</div>
                                    <div>
                                        <textarea name="message" id="message" class="form-control" placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                                <div id="mail_success" class="success">Your message has been sent successfully.</div>
                                <div id="mail_fail" class="error">Sorry, error occured this time sending your message.</div>
                                <div class="col-md-12">
                                    <p id="submit">
                                        <input type="submit" id="send_message" value="Submit Form" class="btn btn-border">
                                    </p>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="col-md-4">
                        <address style="font-family: 'Helvetica Neue', Helvetica;">
                            <span><i class="fa fa-map-marker fa-lg"></i>   Plovdiv 4000, Bulgaria</span>
                            <span><i class="fa fa-phone fa-lg"></i>  +359 895 069 953</span>
                            <span><i class="fa fa-envelope-o fa-lg"></i> <a href="">  office@streamlinedigit.com</a></span>
                            <span><i class="fa fa-globe fa-lg"></i><a href="#">streamlinedigit.com</a></span>
                            <span>
                                <a href="https://github.com/tosheee" target="_blank" ><i class="fa fa-github fa-lg"></i>&nbsp;&nbsp;  </a>
                                <a href="#" target="_blank"><i class="fa fa-linkedin fa-lg"></i>&nbsp;&nbsp;  </a>
                                <a href="#" target="_blank"><i class="fa fa-facebook-official fa-lg"></i>  </a>
                            </span>
                        </address>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            © Copyright 2017 | Streamlinedigit Ltd.
        </footer>


@endsection
