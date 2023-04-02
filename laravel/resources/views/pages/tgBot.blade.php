@extends('layouts.portfolioDetails')
@section('title','Телеграм бот')
@section('innerContent')
    <section class="portfolio_details_area section_gap">
        <div class="container">
            <div class="portfolio_details_inner">
                <div class="row">
                    <div class="col-md-6">
                        <div class="left_img">
                            <img class="img-fluid" style="width: 50%; border-radius: 10px" src="img/works/tg-bot/main.png" alt="">
                        </div>
                    </div>
                    <div class="offset-md-1 col-md-5">
                        <div class="portfolio_right_text mt-30">
                            <h1>Телеграм бот</h1>
                            <p>бот, созданный в рамках выполнения лабораторной работы в университете и практики пройденного материала за первый семестр по курсу "Программирование на С#"</p>
                            <ul class="list">
                                <li><span>Ник бота</span> <a href="https://t.me/nasavasa_bot">@nasavasa_bot</a></li>
                                <li><span>Выполнено</span> 20 Dec 2022</li>
                            </ul>
                            <div class="tags">
                                <span class="tag">TELEGRAM</span>
                                <span class="tag">C#</span>
                                <span class="tag">.NET</span>
                                <span class="tag">OOП</span>
                                <span class="tag">API</span>
                                <span class="tag">Linux</span>
                                <span class="tag">MYSQL</span>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="discription">
                    <h1>Описание проделанной работы</h1>
                    <ol>
                        <li class="step">
                            <h2>Предварительная настройка</h2>
                            <table>
                                <tr>
                                    <td>
                                        <ul>
                                            <li>создал нового бота у  <a href="https://t.me/BotFather"><b>BotFather</b></a></li>
                                            <li>создал базу данных <b>MySQL</b> для записи всех присылаемых сообщений</li>
                                            <li>изучил документацию <a href="https://core.telegram.org/bots/api"><b>Telegram Bot API</b></a></li>
                                        </ul>
                                    </td>
                                    <td>
                                        <img src="img/works/tg-bot/step_1_1.png" class="st2">
                                    </td>
                                </tr>
                            </table>
                        </li>
                        <li class="step">
                            <h2>Разработка</h2>
                            <table>
                                <tr>
                                    <td>
                                        <img src="img/works/tg-bot/step_2_1.png" class="st2">
                                    </td>
                                    <td>
                                        <ul>
                                            <li>написал весь проект (можно посмотреть на моём <a href="https://github.com/NasaVasa/nasavasa_bot"><b>GitHub</b></a>)</li>
                                            <li>реализовал доплнительные простенькие фичи на сайте, где хостится бот <a href="http://c-sharp.nasavasa.ru/"><b>c-sharp.nasavasa.ru</b></a></li>
                                            <li>упаковал в <b>Docker</b></li>
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

