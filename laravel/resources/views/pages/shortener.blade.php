@extends('layouts.portfolioDetails')
@section('title','Shortener')
@section('innerContent')
    <section class="portfolio_details_area section_gap">
        <div class="container">
            <div class="portfolio_details_inner">
                <div class="row">
                    <div class="col-md-6">
                        <div class="left_img">
                            <img class="img-fluid" style="width: 110%; border-radius: 10px"
                                 src="img/works/shortener/logo.png" alt="">
                        </div>
                    </div>
                    <div class="offset-md-1 col-md-5">
                        <div class="portfolio_right_text mt-30">
                            <h1>Shortener</h1>
                            <p>сервис для сокращения и управления вашими ссылками с функциями аналитики в сопровождении telegram-бота</p>
                            <p>cервис разработан в рамках экаменационного проекта курса <a href="https://www.hse.ru/ba/se/courses/494722081.html">"Облачные технологии"</a> в Высшей Школе Экономики в команде</p>
                            <ul class="list">
                                <li><span>Веб-сайт</span> <a href="http://shortener.nasavasa.ru/">shortener.nasavasa.ru</a></li>
                                <li><span>Telegram bot</span><a href="https://t.me/hse_shortener_bot">Shortener</a></li>
                                <li><span>Выполнено</span>13 Mar 2023</li>
                                <li><span>GitHub</span><a href="https://github.com/NasaVasa/shortener.nasavasa.ru">NasaVasa</a></li>
                            </ul>
                            <div class="tags">
                                <span class="tag">DOCKER</span>
                                <span class="tag">CI/CD</span>
                                <span class="tag">LINUX</span>
                                <span class="tag">NGINX</span>
                                <span class="tag">SSH</span>
                                <span class="tag">IP</span>
                                <span class="tag">GOLANG</span>
                                <span class="tag">PYTHON</span>
                                <span class="tag">.NET</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="discription">
                    <h1>Описание проделанной работы</h1>
                    <ol>
                        <li class="step">
                            <h2>BACKEND</h2>
                            <table>
                                <tr>
                                    <td>
                                        <img src="img/works/shortener/backend.png" class="st2">
                                    </td>
                                    <td>
                                        <ul>
                                            <li><b>API</b> сервиса был выполнен на языке <b>Go</b> фреймворка <b>GoLang</b> моим партнёром по команде</li>
                                        </ul>
                                    </td>
                                </tr>
                            </table>
                        </li>
                        <li class="step">
                            <h2>FRONTEND</h2>
                            <table>
                                <tr>
                                    <td>
                                        <ul>
                                            <li><b>Frontend</b> сервиса был выполнен на языке <b>Python</b> фреймворка <b>Flask</b> моим 2 партнёром по команде</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <img src="img/works/shortener/frontend.png" class="st3"
                                             style=" margin-left: 40px">
                                    </td>
                                </tr>
                            </table>
                        </li>
                        <li class="step"  style="border-bottom: 0">
                            <h2>BOT</h2>
                            <table>
                                <tr>
                                    <td>
                                        <img src="img/works/shortener/bot.png" class="st2">
                                    </td>
                                    <td>
                                        <ul>
                                            <li><b>TG BOT</b> сервиса был выполнен мною на языке <b>C#</b> фреймворка <b>ASP NET CORE</b></li>
                                        </ul>
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

