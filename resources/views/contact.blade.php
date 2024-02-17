@extends('main')
@section("main-section")
    <section class="contact-hero-section">
        <div class="w-layout-blockcontainer main-container w-container">
            <div id="w-node-_367e0197-ec69-162b-09e7-3b1cc66dde4d-06ed37d9"
                class="w-layout-layout contact-info-stack wf-layout-layout">
                <div id="w-node-_367e0197-ec69-162b-09e7-3b1cc66dde4e-06ed37d9" class="w-layout-cell contatc-cell">
                    <div class="author-left-wrapper">
                        <div class="author-left-upper"><img src="../images/65770614b9d7afd78b3fdc11_dec2.jpg"
                                loading="lazy" alt="" class="square" />
                            <div class="author-left-text">Contact us for inquiries.</div>
                        </div>
                        <h2 class="authors-left-title">contact</h2>
                    </div>
                </div>
                <div id="w-node-_367e0197-ec69-162b-09e7-3b1cc66dde4f-06ed37d9" class="w-layout-cell contatc-cell"><a
                        href="tel:6260081066" class="contact-info-links w-inline-block">
                        <div class="contact-info-text">+91 626-008-1066</div>
                    </a><a href="mailto:vinitbhaiji20402@acropolis.in" class="contact-info-links w-inline-block">
                        <div class="contact-info-text">vinitbhaiji20402@acropolis.in</div>
                    </a></div>
            </div>
            <div class="contact-form-block w-form">
                <h2 class="form-heading">Send us a MEssage</h2>
                <form id="email-form" name="email-form" data-name="Email Form" method="POST"
                    data-wf-page-id="6579681c5435b99c06ed37d9"
                    data-wf-element-id="b057ea1d-e3ce-c840-7e56-51fe53607294" action="
                    {{url("contact")}}">
                    @csrf
                    <div id="w-node-_898cb840-74df-5f6e-2aa5-2965ec797a8b-06ed37d9"
                        class="w-layout-layout form-stack wf-layout-layout">
                        <div id="w-node-_898cb840-74df-5f6e-2aa5-2965ec797a8c-06ed37d9"
                            class="w-layout-cell form-cell">
                            <input class="input-style w-input" maxlength="256"
                                name="fname" data-name="Name" placeholder="Name *" type="text" id="name"
                                required="" />
                            </div>
                        <div id="w-node-_898cb840-74df-5f6e-2aa5-2965ec797a8d-06ed37d9"
                            class="w-layout-cell form-cell">
                            <input class="input-style w-input" maxlength="256"
                                name="lname" data-name="Last Name" placeholder="Last Name *" type="text"
                                id="Last-Name" required="" />
                            </div>
                        <div id="w-node-_0938a258-228f-0d2f-0290-bb3b6d42e6a8-06ed37d9"
                            class="w-layout-cell form-cell">
                            <input class="input-style w-input" maxlength="256" name="email" data-name="Email" placeholder="Email Address *" type="email"
                                id="email" required="" />
                            </div>
                        <div id="w-node-_4593c067-a721-583c-fe46-0882eafb983e-06ed37d9"
                            class="w-layout-cell form-cell">
                                <input class="input-style w-input" maxlength="256"
                                name="number" data-name="Phone Number" placeholder="Phone Number"
                                type="tel" id="Phone-Number" />
                        </div>
                        <div id="w-node-ab80280f-afbb-bacc-2bb5-f542c8490ea2-06ed37d9"
                            class="w-layout-cell form-cell">
                            <input class="input-style textarea w-input"
                                maxlength="256" name="message" data-name="Message" placeholder="Message *"
                                type="text" id="Message" required="" />
                            </div>
                    </div>
                    <div class="submit-box">
                        <div class="required">*Required Fields</div>
                        <input type="submit" data-wait="Please wait..."
                            class="form-button w-button" value="send" />
                    </div>
                </form>
                <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                </div>
            </div>
        </div>
    </section>
    @endsection