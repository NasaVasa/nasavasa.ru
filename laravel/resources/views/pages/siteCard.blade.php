@extends('layouts.portfolioDetails')
@section('title','Сайт-визитка')
@section('innerContent')
    <section class="portfolio_details_area section_gap">
        <div class="container">
            <div class="portfolio_details_inner">
                <div class="row">
                    <div class="col-md-6">
                        <div class="left_img">
                            <img class="img-fluid" style="width: 110%; border-radius: 10px"
                                 src="img/works/business-card-website/main.png" alt="">
                        </div>
                    </div>
                    <div class="offset-md-1 col-md-5">
                        <div class="portfolio_right_text mt-30">
                            <h1>Личный сайт-визитка</h1>
                            <p>первый созданный мною сайт, для практики</p>
                            <ul class="list">
                                <li><span>Веб-сайт</span> <a href="http://nasavasa.ru">nasavasa.ru</a></li>
                                <li><span>Выполнено</span>14 Aug 2022</li>
                                <li><span>GitHub</span><a href="https://github.com/NasaVasa/nasavasa.ru">NasaVasa</a></li>
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
                                <span class="tag">DOCKER</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="discription">
                    <h1>Описание проделанной работы</h1>
                    <ol>
                        <li class="step">
                            <h2>Аренда домена, сервера и их настройка</h2>
                            <table>
                                <tr>
                                    <td>
                                        <img src="img/works/business-card-website/step_2_1.png" class="st2">
                                    </td>
                                    <td>
                                        <ul>
                                            <li>зарегистрировал домен <b>nasavasa.ru</b> на платформе <b>BEGET</b></li>
                                            <li>арендовал <b>сервер</b> на платформе <b>FirstVDS</b></li>
                                            <li>настроил <b>DNS</b> на сайте <b>BEGET</b>'а</li>
                                            <li>установил <b>Docker</b> и <b>UFW Firewall</b></li>
                                        </ul>
                                    </td>
                                </tr>
                            </table>
                        </li>
                        <li class="step" style="border-bottom: 0">
                            <h2>Создание сайта</h2>
                            <table>
                                <tr>
                                    <td>
                                        <ul>
                                            <li>скачал <a
                                                    href="https://bootstraptema.ru/stuff/templates_bootstrap/portfolio/steve/8-1-0-5423">готовую
                                                    вёрстку</a> сайта-визитки из открытых источников
                                            </li>
                                            <li>перенёс готовую вёрстку на <b>Laravel</b></li>
                                            <li>полностью модифицировал сайт под себя</li>
                                            <li>упаковал сайт в <b>Docker</b> контейнеры (<b>nginx</b>, <b>laravel</b>,<b>postgresql</b>)
                                            </li>
                                            <li>исходный код сайта можно посмотреть в моём <b><a
                                                        href="https://github.com/NasaVasa/nasavasa.ru">GitHub</a></b></li>
                                        </ul>
                                    </td>
                                    <td>
                                        <img src="img/works/business-card-website/step_3_1.png" class="st3"
                                             style=" margin-left: 40px">
                                    </td>
                                </tr>
                            </table>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
@endsection

