@extends('layouts.portfolioDetails')
@section('title','Калькулятор зарплаты')
@section('innerContent')
    <section class="portfolio_details_area section_gap">
        <div class="container">
            <div class="portfolio_details_inner">
                <div class="row">
                    <div class="col-md-6">
                        <div class="left_img">
                            <img class="img-fluid" style="width: 120%; border-radius: 10px"
                                 src="img/works/salary-calculator/main.png" alt="">
                        </div>
                    </div>
                    <div class="offset-md-1 col-md-5">
                        <div class="portfolio_right_text mt-30">
                            <h1>Калькулятор заработной платы разработчика для студии Neologic.Team</h1>
                            <p>небольшое web-приложение на Bubble для тренировки навыков</p>
                            <ul class="list">
                                <li><span>Веб-сайт</span> <a href="https://grachev-vasliliy-02082022.bubbleapps.io/version-test?debug_mode=true">grachev-vasliliy-02082022.bubbleapps.io</a>
                                </li>
                                <li><span>Страница разработки</span> <a href="https://bubble.io/page?name=index&id=grachev-vasliliy-02082022&tab=tabs-1">bubble.io/id=grachev-vasliliy-02082022</a>
                                </li>
                                <li><span>Выполнено</span> 2 Aug 2022</li>
                            </ul>
                            <div class="tags">
                                <span class="tag">NOCODE</span>
                                <span class="tag">BUBBLE</span>
                                <span class="tag">API</span>
                                <span class="tag">DATABASE</span>
                                <span class="tag">PLUGINS</span>
                                <span class="tag">UI</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="discription">
                    <h1>Описание проделанной работы</h1>
                    <ol>
                        <li class="step">
                            <h2>Начало работы</h2>
                            <table>
                                <tr>
                                    <td>
                                        <ul>
                                            <li>создал аккаунт <b>BUBBLE</b></li>
                                            <li>создал новое приложение</li>
                                            <li>подключил необходимые для запуска сайта <b>Google API</b></li>
                                        </ul>
                                    </td>
                                    <td>
                                        <img src="img/works/salary-calculator/step_1_1.png"  class="st4">
                                    </td>
                                </tr>
                            </table>
                        </li>
                        <li class="step">
                            <h2>BACKEND</h2>
                            <table>
                                <tr>
                                    <td>
                                        <img src="img/works/salary-calculator/step_2_1.png" class="st2">
                                    </td>
                                    <td>
                                        <ul>
                                            <li>настроил <b>Data types</b> для выполненных задач в базе данных</li>
                                            <li>настроил <b>Option sets</b> для выбора грейда разработчика в выпадающем списке</li>
                                            <li>настроил кнопки "Выполнено" и "Не выполнено" для добавления в базу данных и удаления из неё соответственно</li>
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
                                            <li>сверстал блок "Очередь задач", выведя информацию <b>API</b> через <b>Repeating Group</b></li>
                                            <li>сверстал блок "Выполненные задачи", выведя информацию <b>базы данных</b> через <b>Repeating Group</b></li>
                                            <li>сверстал блок "Итог", выведя информацию <b>базы данных</b></li>
                                        </ul>
                                    </td>
                                    <td>
                                        <img src="img/works/salary-calculator/step_3_1.png" class="st3">
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

