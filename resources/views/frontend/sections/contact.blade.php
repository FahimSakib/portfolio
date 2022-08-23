@php
if($message = Session::get('success')){
toast($message,'success');
}
if($message = Session::get('error')){
toast($message,'error');
}
@endphp
<div data-anchor="page7" class="pp-scrollable section section-7">
    <div class="scroll-wrap">
        <div class="section-bg" style="background-image:url(images/bg/contact.jpg);"></div>
        <div class="scrollable-content">
            <div class="vertical-centred">
                <div class="boxed boxed-inner">
                    <div class="vertical-title text-white d-none d-lg-block"><span>contact</span></div>
                    <div class="boxed">
                        <div class="container">
                            <div class="intro overflow-hidden">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2 class="title-uppercase"><span class="text-primary">Chattogram</span>, Bangladesh</h2>
                                        <h5 class="text-muted">East Katgor, North Patenga, 4204</h5>
                                        <section class="contact-address">
                                            <h3><a class="mail"
                                                    href="mailto:{{ !empty($heroSection->email) ? $heroSection->email : 'example@mail.com' }}">
                                                    <span class="__cf_email__">{{ !empty($heroSection->email) ? $heroSection->email : 'example@mail.com' }}</span></a>
                                            </h3>
                                            <h3><span class="phone">+{{ !empty($heroSection->mobile) ? $heroSection->mobile : '0123456789' }}</span></h3>
                                        </section>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-info">
                                            <form method="POST" action="{{ route('send.msg') }}">
                                                @csrf
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        <input type="text" name="name" required="" placeholder="Name*"
                                                            aria-required="true">
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <input type="email" required="" name="email"
                                                            placeholder="Email*">
                                                    </div>
                                                    <div class="form-group col-sm-12">
                                                        <input type="text" name="subject"
                                                            placeholder="Subject (Optinal)">
                                                    </div>
                                                    <div class="form-group col-sm-12">
                                                        <textarea name="msg" required=""
                                                            placeholder="Message*"></textarea>
                                                    </div>
                                                    <div class="form-group form-group-message col-sm-12">
                                                        <span id="success" class="text-primary">Thank You,
                                                            your message is successfully sent!</span>
                                                        <span id="error" class="text-primary">Sorry,
                                                            something went wrong </span>
                                                    </div>
                                                    <div class="col-sm-12"><button type="submit" class="btn">Contact
                                                            me</button></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
