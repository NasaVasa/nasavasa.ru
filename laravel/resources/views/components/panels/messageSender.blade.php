<div class="col-lg-9">
    <form class="row contact_form" action="/contact" method="post" id="contactForm"
          novalidate="novalidate">
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Введите своё имя">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="Введите свой email">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Введите тему">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Введите текст сообщения"></textarea>
            </div>
        </div>
        <div class="col-md-12 text-right">
            <button type="submit" value="submit" class="primary-btn"><span>Send Message</span></button>
        </div>
    </form>
</div>
