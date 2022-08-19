<?php $__env->startSection('title','Сайт-визитка'); ?>
<?php $__env->startSection('innerContent'); ?>
    <section class="portfolio_details_area section_gap">
        <div class="container">
            <div class="portfolio_details_inner">
                <div class="row">
                    <div class="col-md-6">
                        <div class="left_img">
                            <img class="img-fluid" style="width: 110%; border-radius: 10px" src="img/works/business_card_website/main.png" alt="">
                        </div>
                    </div>
                    <div class="offset-md-1 col-md-5">
                        <div class="portfolio_right_text mt-30">
                            <h1>Личный сайт-визитка</h1>
                            <p>первый созданный мною сайт, для практики</p>
                            <ul class="list">
                                <li><span>Веб-сайт</span> <a href="http://nasavasa.ru">nasavasa.ru</a></li>
                                <li><span>Выполнено</span> 14 Aug 2022</li>
                            </ul>
                            <div class="tags">
                                <span class="tag">DOMAIN</span>
                                <span class="tag">DNS</span>
                                <span class="tag">LINUX</span>
                                <span class="tag">NGINX</span>
                                <span class="tag">SSH</span>
                                <span class="tag">IP</span>
                                <span class="tag">LARAVEL</span>
                                <span class="tag">HTML</span>
                                <span class="tag">CSS</span>
                                <span class="tag">PHP</span>
                                <span class="tag">BOOTSTRAP</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="discription">
                    <h1>Описание проделанной работы</h1>
                    <ol>
                        <li class="step">
                            <h2>Установка Linux</h2>
                            <table>
                                <tr>
                                    <td>
                                        <ul>
                                            <li>создал виртуальную машину с операционной системой <b>Ubuntu 22.04
                                                    LTS</b> в <b>Oracle VM VirtualBox</b></li>
                                            <li>
                                                установил необходимые библиотеки:
                                                <ul>
                                                    <li>NGINX</li>
                                                    <li>OpenSSH</li>
                                                    <li>PHP 8.1.2</li>
                                                    <li>PHP BCMath</li>
                                                    <li>PHP Ctype</li>
                                                    <li>PHP Fileinfo</li>
                                                    <li>PHP JSON</li>
                                                    <li>PHP Mbstring</li>
                                                    <li>PHP OpenSSL</li>
                                                    <li>PHP PDO</li>
                                                    <li>PHP Mbstring</li>
                                                    <li>PHP Tokenizer</li>
                                                    <li>PHP XML</li>
                                                </ul>
                                            </li>
                                            <li>установил фреймворк <b>Laravel</b></li>
                                        </ul>
                                    </td>
                                    <td>
                                        <img src="img/works/business_card_website/step_1_1.png" class="st2">
                                    </td>
                                </tr>
                            </table>
                        </li>
                        <li class="step">
                            <h2>Покупка и настройка домена</h2>
                            <table>
                                <tr>
                                    <td>
                                        <img src="img/works/business_card_website/step_2_1.png" class="st2">
                                    </td>
                                    <td>
                                        <ul>
                                            <li>зарегистрировал домен <b>nasavasa.ru</b> на платформе <b>BEGET</b></li>
                                            <li>купил <b>статический IP</b> в Интернете у провайдера</li>
                                            <li>настроил перенаправление на <b>виртуальный сервер</b> в настройках роутера</li>
                                            <li>настроил <b>DNS</b> на сайте <b>BEGET</b>'а</li>
                                        </ul>
                                    </td>
                                </tr>
                            </table>
                        </li>
                        <li class="step" style="border-bottom: 0">
                            <h2>Модификация готовой вёрстки</h2>
                            <table>
                                <tr>
                                    <td>
                                        <ul>
                                            <li>скачал <a href="https://bootstraptema.ru/stuff/templates_bootstrap/portfolio/steve/8-1-0-5423">готовую вёрстку</a> сайта-визитки из Интернета</li>
                                            <li>перенёс готовую вёрстку на <b>Laravel</b></li>
                                            <li>полностью модифицировал сайт под себя</li>
                                            <li>исходный код сайта можно посмотреть в моём <b><a href="https://github.com/NasaVasa">GitHub</a></b></li>
                                        </ul>
                                    </td>
                                    <td>
                                        <img src="img/works/business_card_website/step_3_1.png" class="st3" style=" margin-left: 40px">
                                    </td>
                                </tr>
                            </table>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.portfolioDetails', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/nasavasa.ru/resources/views/pages/siteCard.blade.php ENDPATH**/ ?>