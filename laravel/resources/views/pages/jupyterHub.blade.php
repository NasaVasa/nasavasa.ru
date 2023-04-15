@extends('layouts.portfolioDetails')
@section('title','Jupyter Hub')
@section('innerContent')
    <section class="portfolio_details_area section_gap">
        <div class="container">
            <div class="portfolio_details_inner">
                <div class="row">
                    <div class="col-md-6">
                        <div class="left_img">
                            <img class="img-fluid" style="width: 110%; border-radius: 10px"
                                 src="img/works/jupyter-hub/logo.png" alt="">
                        </div>
                    </div>
                    <div class="offset-md-1 col-md-5">
                        <div class="portfolio_right_text mt-30">
                            <h1>JupyterHub</h1>
                            <p>работа, проделанная в рамках выполнения результирующей лабораторной работы и практики
                                пройденного материала за первый семестр по курсу "Облачные технологии"</p>
                            <ul class="list">
                                <li><span>Веб-сайт</span><a href="http://clouds.nasavasa.ru/">clouds.nasavasa.ru</a>
                                </li>
                                <li><span>Выполнено</span>31 Dec 2022</li>
                                <li><span>GitHub</span><a href="https://github.com/NasaVasa/JupyterHub">NasaVasa</a></li>
                            </ul>
                            <div class="tags">
                                <span class="tag">DOCKER</span>
                                <span class="tag">LINUX</span>
                                <span class="tag">NGINX</span>
                                <span class="tag">JUPYTERHUB</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="discription">
                    <h1>Описание проделанной работы</h1>
                    <ol>
                        <li class="step">
                            <table>
                                <tr>
                                    <td>
                                        <ul>
                                            <li>скачал на сервер c ОС Linux <b>Docker</b></li>
                                            <li>
                                                написал <b>Dockerfile</b>
                                            </li>
                                            <li>
                                                написал <b>docker-compose.yml</b>
                                            </li>
                                            <li>развернул контейнер на сервере</li>
                                            <li>разместил на моём <a href="https://github.com/NasaVasa/JupyterHub"><b>GitHub</b></a></li>
                                        </ul>
                                    </td>
                                    <td>
                                        <img src="img/works/jupyter-hub/step_1_1.png" class="st2">
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

