<?php
$title = ' Контакты';
include('header.php');
?>
<div class="pic-contacts center-of-pic">
        <div class="shadow">
            <h1>GO TO TOP</h1>
            <p>GO TO TOP - Ваш быстрый старт продаж</p>
            <p class ="conname">-контакты-</p>
        </div>
</div>
<div class="growth">
            <div class="work-contain">
                <h1>НОВЫЕ РАЗРАБОТКИ И НОВЫЕ ТРЕНИНГИ</h1>
                <div class="work-contain-line"></div>
            </div>
            <div class="fields">
                <div>
                <p>Стимулирование и увеличение продаж – именно такую конечную цель мы ставим себе при разработке стратегии продвижения сайтов в поисковых системах.</p>
                    <p>В рамках этого подхода мы решаем следующие задачи:</p> 
                    <p><i>подбор качественных ключевых запросов;<br>
                        увеличение видимости сайта в поисковых системах;<br>
                        продвижение сайта в ТОП-10 по стратегически важным ключевым запросам;<br>
                        увеличение естественного целевого трафика из поисковых систем;<br>
                        увеличение конверсии на посадочных страницах.</i>
                    </p>  
                    <p>Основным в разработке стратегии продвижения является создание индивидуального решения, максимально соответствующего технологическим возможностям и внешним факторам вашего сайта.</p>  
                    <p>В управлении проектами мы придерживаемся строгого планирования и контроля задач. Технология работы по каждому проекту доступна клиентам в нашей информационной системе.</p>
                    <p>Мы считаем, что добиться успеха можно только при условии полного понимания всех ключевых элементов проекта. Поэтому мы всегда на связи со своими клиентами, регулярные встречи и конструктивные диалоги – приоритетный элемент нашего сотрудничества.</p>
                    <p>Стратегия, основанная на взаимовыгодном партнерстве, очень важна для нас. Прозрачность финансовых расчетов и их простота создает доверительные и долгосрочные отношения.</p>
                    <p>Мы не работаем со сложными системами оплаты с обеспечительными платежами, предоплатой и последующими перерасчетами. Все расчеты производятся в конце месяца по факту выполненных работ и на основании фактически достигнутых показателей.</p>
                </div>
            </div>
        </div>  
        <div class="new">
            <div class="work-contain">
                <h1>СВЯЖИТЕСЬ С НАМИ</h1>
                <div class="work-contain-line"></div>
            </div>
            <div class="fields">
                <div class="news-items">
                    <div class="news-pic woman"></div>
                    <div class="padding-news">
                        <div class="break">
                            <p class="cursive"><b>Елена Белкина</b></p>
                            <p class="position">директор</p>
                        </div>
                        <div>
                            <p>по вопросам сотрудничества</p>
                            <p class="email-blue">belkina@gototop.ru</p>
                        </div>
                    </div>
                </div>
                <div class="news-items">
                    <div class="news-pic man"></div>
                    <div class="padding-news">
                        <div class="break">
                            <p class="cursive"><b>Дмитрий Рогозин</b></p>
                            <p class="position">директор отдела продаж </p>
                        </div>
                        <div>
                            <p>по вопросам сотрудничества</p>
                            <p class="email-blue">rogozin@gototop.ru</p>
                        </div>
                    </div>
                </div>
            </div>    

        </div> 
        <section>
        <div class="content-form-contacts-box">
            <div class="contakts-content">
                <article class="cards-box placeholder">
                     <img src="icons/placeholder.png" alt="">
                    <div class="icons-contacts">
                        <p>Москва,<br>Большая Спасская 12</p>
                    </div>
                </article>
                <article class="cards-box mail">
                    <img src="icons/mail.png" alt="">
                    <article class="icons-contacts">
                        <div class="icons-contact"></div>
                        <p>E-mail:<br>info@mymoscow.ru</p>
                    </article>
                </article>
                <article class="cards-box telephone">
                    <img src="icons/telephone.png" alt="">
                    <div class="icons-contacts">
                        <p>Телефон:<br>8 (495) 626-46-00</p>
                    </div>
                </article>
            </div>
            <div class="form-contacts-content">
                <h3>Напишите нам</h3>
                <form method="POST" action="form.php">
                    <input type="text" name="fio" placeholder="ФИО">
                    <input type="email" name="email" placeholder="Email">
                    <textarea name="comment" placeholder="Ваше сообщение"></textarea>
                    <button type="submit">Отправить</button>
                </form>
            </div>
        </div>
        <div class="maps-box">
        <div class="maps-content-box"></div>
        <div class="maps">
            <iframe src="https://yandex.ru/map-widget/v1/-/CCcgB2Yg" width="1472" height="620" frameborder="0" allowfullscreen="true"></iframe>
        </div>
    </div>
    </section>

        
<?php
include('footer.php');
?>