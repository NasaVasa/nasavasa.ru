@extends('layouts.portfolioDetails')
@section('title','CS:GO сервер')
@section('innerContent')
    <section class="portfolio_details_area section_gap">
        <div class="container">
            <div class="portfolio_details_inner">
                <div class="row">
                    <div class="col-md-6">
                        <div class="left_img">
                            <img class="img-fluid" style="width: 110%; border-radius: 10px"
                                 src="img/works/cs-go-server/logo.png" alt="">
                        </div>
                    </div>
                    <div class="offset-md-1 col-md-5">
                        <div class="portfolio_right_text mt-30">
                            <h1>CS:GO сервер</h1>
                            <p>CS:GO сервер для игры с друзьями</p>
                            <ul class="list">
                                <li><span>IP address</span> <a href="steam://connect/193.41.78.112:27015">193.41.78.112:27015</a>
                                </li>
                                <li><span>Выполнено</span> 18 Aug 2022</li>
                            </ul>
                            <div class="tags">
                                <span class="tag">STEAM</span>
                                <span class="tag">CS:GO</span>
                                <span class="tag">LINUX</span>
                                <span class="tag">IP</span>
                                <span class="tag">PORT</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="discription">
                    <h1>Описание проделанной работы</h1>
                    <ol>
                        <li class="step">
                            <h2>Установка steam и steamcmd</h2>
                            <table>
                                <tr>
                                    <td>
                                        <ul>
                                            <li>создал нового пользователя <b>steam</b> на своей виртуальной машине с
                                                операционной системой <b>Linux kali 5.18.0-kali5-amd64</b> в <b>Oracle
                                                    VM VirtualBox</b></li>
                                            <li>установил <b>steamCMD</b></li>
                                            <li>создал скрипт для автоматического обновления сервера игры <b>updateCSGO.sh</b>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <img src="img/works/cs-go-server/step_1_1.png"  class="st2">
                                    </td>
                                </tr>
                            </table>
                        </li>
                        <li class="step">
                            <h2>Запуск сервера</h2>
                            <table>
                                <tr>
                                    <td>
                                        <img src="img/works/cs-go-server/step_2_1.jpg" class="st3">
                                    </td>
                                    <td>
                                        <ul>
                                            <li>настроил перенаправление на <b>виртуальный сервер</b> в настройках
                                                роутера
                                            </li>
                                            <li>создал файл конфигурации <b>server.cfg</b></li>
                                            <li>создал скрипт для автоматического запуска сервера игры <b>start.sh</b>
                                            </li>
                                            <li>установил <b>sourcemod</b> и <b>metamod</b> для управления сервером в
                                                качестве администратора и добавления плагинов на сервер
                                            </li>
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

