		
		<div class="page-image contacts"><img id="detail_banner" src="/css/images/content/courses/moscow/baner/vocal.jpg"></div>
        <header class="header navbar navbar-white navbar-static-top">
            <div class="">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
				<div class="contacts-block">

                    <div class="btn-group bootstrap-select">
					
						<button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" title="">
									<? if($_SESSION['user']['city'] == "moscow"){ ?>
										<span class="filter-option pull-left"><span class="title">Pioneer DJ&nbsp;</span> <span class="address">Moscow</span><span class="phone">+7 916 942-52-48</span></span>&nbsp;<span class="bs-caret"><span class="caret"></span></span>
									<? } else if($_SESSION['user']['city'] == "peter"){ ?>
										<span class="filter-option pull-left"><span class="title">Pioneer DJ&nbsp;</span> <span class="address">St. Petersburg</span><span class="phone">+7 812 984-91-44</span></span>&nbsp;<span class="bs-caret"><span class="caret"></span></span>
									<? } else if($_SESSION['user']['city'] == "nsk"){ ?>
										<span class="filter-option pull-left"><span class="title">Pioneer DJ&nbsp;</span> <span class="address">Novosibirsk</span><span class="phone">+7 913 015-90-09</span></span>&nbsp;<span class="bs-caret"><span class="caret"></span></span>
									<? } else if($_SESSION['user']['city'] == "almati"){ ?>
										<span class="filter-option pull-left"><span class="title">Pioneer DJ&nbsp;</span> <span class="address">Almaty</span><span class="phone">+7 747 336-22-02</span></span>&nbsp;<span class="bs-caret"><span class="caret"></span></span>
									<? } else { ?>
										<span class="filter-option pull-left"><span class="title">Pioneer DJ&nbsp;</span> <span class="address">Moscow</span><span class="phone">+7 916 942-52-48</span></span>&nbsp;<span class="bs-caret"><span class="caret"></span></span>
									<? } ?>
								
							
						</button>
						<div class="dropdown-menu open" role="combobox">
							<ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
								<li data-original-index="0" class="cityChoise" id="moscow">
									<a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false">
										<span class="title">Pioneer DJ&nbsp;</span> <span class="address">Moscow</span><span class="phone">+7 916 942-52-48</span><span class="glyphicon glyphicon-ok check-mark"></span>
									</a>
								</li>
								<li data-original-index="1" class="cityChoise" id="peter">
									<a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false">
										<span class="title">Pioneer DJ&nbsp;</span> <span class="address">St. Petersburg</span><span class="phone">+7 812 984-91-44</span><span class="glyphicon glyphicon-ok check-mark"></span>
									</a>
								</li>
								<li data-original-index="2" class="cityChoise" id="nsk">
									<a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true">
										<span class="title">Pioneer DJ&nbsp;</span> <span class="address">Novosibirsk</span><span class="phone">+7 913 015-90-09</span><span class="glyphicon glyphicon-ok check-mark"></span>
									</a>
								</li>
								<li data-original-index="3" class="cityChoise" id="almati">
									<a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false">
										<span class="title">Pioneer DJ&nbsp;</span> <span class="address">Almaty</span><span class="phone">+7 747 336-22-02</span><span class="glyphicon glyphicon-ok check-mark"></span>
									</a>
								</li>
							</ul>
						</div>
				</div>
				

                </div>
                    <div class="navbar-brand">
                        <a href="/" class="logo-image"><img src="/css/images/logo.png"></a>
                    </div>
                </div>
				
                <div class="navbar-container header-container">
                    <nav class="collapse navbar-collapse menu">
                        <ul class="nav navbar-nav ">
                            
                            
                            <li <?=($array['id'] == 100) ? 'class="active"' : ''?>><a href="/news"><span>Новости</span></a></li>
                            
                            <li <?=($array['id'] == 101) ? 'class="active"' : ''?>><a href="/courses"><span>Курсы</span></a></li>
                            
                            <li <?=($array['id'] == 102) ? 'class="active"' : ''?>><a href="/services"><span>Услуги</span></a></li>
                            
                            <li <?=($array['id'] == 103) ? 'class="active"' : ''?>><a href="/contacts"><span>Контакты</span></a></li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <div class="content-container-wrapper search-line">
            <div class="content-container">
                <div class="content">
                       <form class="form-horizontal">

                            <fieldset>



                                

                                <h2 class="block-header">Записаться на урок онлайн</h2>

                                <div class="row">



                                    

                                    <div class="form-group">

                                        <label class="col-md-4 col-sm-4 control-label" for="name">Представтесь</label>

                                        <div class="input-box col-md-8 col-sm-8">

                                            <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">

                                        </div>

                                    </div>



                                    

                                    <div class="form-group">

                                        <label class="col-md-4 col-sm-4 control-label" for="email">Email</label>

                                        <div class="input-box col-md-8 col-sm-8">

                                            <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">

                                        </div>

                                    </div>



                                    

                                    <div class="form-group">

                                        <label class="col-md-4 col-sm-4 control-label" for="phone">Моб.телефон</label>

                                        <div class="input-box col-md-8 col-sm-8">

                                            <input id="phone" name="phone" type="text" placeholder="" class="form-control input-md" required="">

                                        </div>

                                    </div>



                                    

                                    <div class="form-group">

                                        <label class="col-md-4 col-sm-4 control-label" for="city">Город</label>

                                        <div class="input-box select-box col-md-8 col-sm-8">
											<div class="btn-group bootstrap-select form-control">
												
												<select class="selectpicker" id="city_form">
													<option value="peter" <?=($_SESSION['user']['city'] == "peter") ? "selected='selected'" : "" ?>>Санкт-Петербург</option>
												  <option value="moscow" <?=($_SESSION['user']['city'] == "moscow") ? "selected='selected'" : "" ?>>Москва</option>
												  
												  <option value="nsk" <?=($_SESSION['user']['city'] == "nsk") ? "selected='selected'" : "" ?>>Новосибирск</option>
												  <option value="almati" <?=($_SESSION['user']['city'] == "almati") ? "selected='selected'" : "" ?>>Алматы</option>
												</select>

												
											</div>

                                        </div>

                                    </div>



                                    

                                    <div class="form-group">

                                        <label class="col-md-4 col-sm-4 control-label" for="service">Услуга</label>

                                        <div class="input-box select-box col-md-8 col-sm-8">

                                            <div class="btn-group bootstrap-select form-control">
												<select class="selectpicker" id="course_form">
														<option value="vocal-course">Vocal курс Школы Написания Музыки</option>
														<option value="course-base">Базовый курс DJ Школы</option>
														<option value="pro-course">PRO курс DJ Школы</option>
														<option value="scratch-base">Scratch DJ курс DJ Школы</option>
														<option value="kids-course">Kids курс DJ Школы</option>
														<option value="midi-course">MIDI курс DJ Школы</option>
														<option value="vinyl-course">Vinyl курс DJ Школы</option>
														
														<option value="music-write-base">Базовый курс Школы Написания Музыки</option>
														<option value="music-write-pro">PRO курс Школы Написания Музыки</option>
														<option value="music-write-level-up">Level UP курс Школы Написания Музыки</option>
														<option value="salfedgio-course">Сольфеджио курс Школы Написания Музыки</option>
														
													
												</select>
											</div>

                                        </div>

                                    </div>



                                    

                                    <div class="form-group form-group-button">

                                        <a class="square-button" href="#"><em><span><button id="singlebutton" name="singlebutton">ОТПРАВИТЬ</button></span></em></a>

                                    </div>



                                </div>

                            </fieldset>

                        </form>
                </div>
            </div>
        </div>				
		<div class="signup-for-lesson-shadow">
            <div class="content-container-wrapper signup-for-lesson">
                        <a href="#" class="close"></a>
                <div class="content-container">
                    <div class="content">

                        <form class="form-horizontal">
                            <fieldset>

		
                                <h2 class="block-header">Записаться на урок онлайн</h2>
                                <div class="row">

                                    
                                    <div class="form-group">
                                        <label class="col-md-4 col-sm-4 control-label" for="name">Представтесь</label>
                                        <div class="input-box col-md-8 col-sm-8">
                                            <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">
                                        </div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label class="col-md-4 col-sm-4 control-label" for="email">Email</label>
                                        <div class="input-box col-md-8 col-sm-8">
                                            <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">
                                        </div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label class="col-md-4 col-sm-4 control-label" for="phone">Моб.телефон</label>
                                        <div class="input-box col-md-8 col-sm-8">
                                            <input id="phone" name="phone" type="text" placeholder="" class="form-control input-md" required="">
                                        </div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label class="col-md-4 col-sm-4 control-label" for="city">Город</label>
                                        <div class="input-box select-box col-md-8 col-sm-8">
                                            <select id="city" name="city" class="selectpicker form-control">
                                                
                                                
                                                
                                                <option value="peter">Санкт-Петербург</option>
                                                
                                                
                                                
                                                <option selected value="moscow">Москва</option>
                                                
                                                
                                                
                                                <option value="nsk">Новосибирск</option>
                                                
                                                
                                                
                                                <option value="almati">Алматы</option>
                                                
                                                
                                            </select>
                                        </div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label class="col-md-4 col-sm-4 control-label" for="service">Услуга</label>
                                        <div class="input-box select-box col-md-8 col-sm-8">
                                            <select id="service" name="service" class="selectpicker form-control">
                                                
                                                <option value="0" size=100>Базовый курс DJ Школы</option>
                                                
                                                <option value="1" size=100>PRO курс DJ Школы</option>
                                                
                                                <option value="2" size=100>Scratch DJ курс DJ Школы</option>
                                                
                                                <option value="3" size=100>Kids курс DJ Школы</option>
                                                
                                                <option value="4" size=100>MIDI курс DJ Школы</option>
                                                
                                                <option value="5" size=100>Vinyl курс DJ Школы</option>
                                                
                                                <option value="6" size=100>Техничный диджеинг курс DJ Школы</option>
                                                
                                                <option value="7" size=100>Базовый курс Школы Написания Музыки</option>
                                                
                                                <option value="8" size=100>PRO курс Школы Написания Музыки</option>
                                                
                                                <option value="9" size=100>Level UP курс Школы Написания Музыки</option>
                                                
                                            </select>
                                        </div>
                                    </div>

                                    
                                    <div class="form-group form-group-button">
                                        <a class="square-button" href="#" ><em><span><button id="singlebutton" name="singlebutton" >ОТПРАВИТЬ</button></span></em></a>
                                    </div>

                                </div>
                            </fieldset>
                        </form>

                    </div>
                </div>
            </div>
        </div>


<div class="content-container-wrapper course-header">
            <div class="content-container">
                <div class="content">
                    <div class="row">
                        <div class="column col-md-12">
                            <a href="/courses" class="button-back"><span>Назад</span></a>
                            <h2 class="block-header thin">Vocal курс Школы Написания Музыки</h2>
                            <div class="signup-course"><span class="course-title"></span><a class="square-button" href="#"><em><span><i>ЗАПИСАТЬСЯ</i></span></em></a></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
		<div class="content-container-wrapper course-cons">
            <div class="content-container">
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bg">
                                <ul>
                                    
                                    <li><span class="cons-label cons-label-left cons-1">Официальная DJ школа Poneer DJ</span></li>
                                    
                                    <li><span class="cons-label cons-label-left cons-1">Индивидуальное обучение</span></li>
                                    
                                    <li><span class="cons-label cons-label-left cons-1">Индивидуальный график</span></li>
                                    
                                    <li><span class="cons-label cons-label-left cons-1">Опытные преподаватели</span></li>
                                    
                                    <li><span class="cons-label cons-label-left cons-1">Без ограничений по возрасту</span></li>
                                    
                                    <li><span class="cons-label cons-label-left cons-1">индивидуальный подход к каждому ученику</span></li>
                                    
                                    <li><span class="cons-label cons-label-left cons-1">Возможна оплата частями</span></li>
                                    
                                    <li><span class="cons-label cons-label-left cons-1">лучшее DJ оборудование</span></li>
                                    
                                    <li><span class="cons-label cons-label-left cons-1">Сертификат по окончании</span></li>
                                    
                                    <li><span class="cons-label cons-label-left cons-1">поддержка и продвижение<br>после обучения</span></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="content-container-wrapper content-normal course-description">
            <div class="content-container">
                <div class="content">
                    <div class="action-container">
                        <div class="image-container" style="text-align:center">
                            <img class="course-image" src="/css/images/content/courses/peter/music/vocal.png">
                        </div>

                        <h2 class="block-header">Vocal курс Школы Написания Музыки</h2>
                        <p class="description">На этом курсе вы познакомитесь и освоите техники пения в речевой позиции, а так же элементы других техник и импровизаций</p>
                    </div>
                </div>
            </div>
        </div>
		<div class="content-container-wrapper course-features">
            <div class="content-container">
                <div class="content">
                    <div class="course-features-container">
                        <h2 class="block-header">КЛЮЧЕВАЯ ОСОБЕННОСТЬ</h2>
                        <div class="row">
                            <div class="row-container">
                                
                                <section class="course-feature left col-md-12 active">
                                    <h2 class="block-header">Только индивидуальное обучение</h2>
                                    <p>Занятия проходят только в формате тет-а-тет преподаватель-ученик</p>
                                </section>
                                
                                <section class="course-feature left col-md-12">
                                    <h2 class="block-header">Курс состоит из 24 занятия по 1,5 часа</h2>
                                    <p>Средняя продолжительность курса - 2 месяца (по 2-3 занятия в неделю) /при желании можно заниматься чаще/</p>
                                </section>
                                
                                <section class="course-feature left col-md-12">
                                    <h2 class="block-header">Курс можно оплатить частями</h2>
                                    <p>Курс можно оплачивать по половине стоимости: 50% стоимости в начале и 50% стоимости в середине</p>
                                </section>
                                
                                <div class="course-feature-image" style="top: -50px; height: 429.188px;"><div class="image-container"><div class="image-wrapper"><img src="css/images/content/courses/moscow/add/cons1.jpg"></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
		<div class="content-container-wrapper course-includes">
            <div class="content-container">
                <div class="content">
                    <div class="course-includes-container">
                        <h2 class="block-header">Vocal курс включает в себя:</h2>
                        <div class="row">
                            <div class="course-includes-block col-md-12">
                                
                                <ul>
                                    
                                    <li>Работа с репертуаром по выбору ученика</li>
                                    
                                    <li>Постановка дыхания</li>
                                    
                                    <li>Упражнения для постановки голоса</li>
                                    
                                    <li>Уравновешивание дыхания</li>
                                    
                                    <li>Правильный уход за голосом</li>
                                    
                                    <li>Упражнения для укрепления голосового аппарата</li>
                                    
                                    <li>Разновидности вокальной техники</li>
                                    
                                    <li>Развитие гибкости и выносливости голоса</li>
                                    
                                    <li>Расширение диапазона и выравнивание его регистров</li>
                                    
                                    <li>Вокальная импровизация</li>
                                    
                                    <li>Развитие дикции, артикуляции</li>
                                    
                                    <li>Снятие зажимов, раскрепощение</li>
                                    
                                    <li>Работа с песней: собственная интерпретация и создание своей манеры пения</li>
                                    
                                    <li>Работа с микрофоном на профессиональном оборудовании</li>
                                    
                                </ul>
                                
                                <p class="additional-cons">По окончании школы выдаётся сертификат от компании Pioneer DJ</p>
                                
                                <h3 class="block-header">Стоимость: 36 000 р.</h3>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
		<div class="content-container-wrapper course-footer">
        <div class="page-image"><img src="/css/images/content/courses/peter/baner/vocal-course.jpg"></div>
            <div class="content-container">
                <div class="content">
                    <div class="row">
                    <div class="column col-md-12">
                            <h2 class="block-header thin">Vocal курс Школы Написания Музыки</h2>
                            <div class="signup-course"><span class="course-title"></span><a class="square-button" href="#"><em><span><i>Записаться</i></span></em></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="content-container-wrapper content-normal related-products">
            <div class="content-container">
                <div class="content">
                    <div class="related-products-container">
                        <h2 class="block-header">Рекомендуемые курсы</h2>
                        <div class="row">
                            <div class="sections-holder responsive">
                                
                                <section class="col-md-4 col-sm-4">
                                    <a href="/courses/detail/course-base/">
                                        <div class="image-container" style="height: 320px;"><img class="image" src="/css/images/content/courses/peter/DJ/base.png"></div>

                                        <span class="short-description" style="height: 333px;">
                                            <h4 class="name">Базовый курс DJ Школы</h4>
                                            <span class="description">Курс предназначен для тех, кто хочет стать диджеем и пока что не обладает навыками сведения на DJ оборудовании или имеющихся навыков недостаточно для начала выступлений в ночных заведениях.</span>
                                        </span>
                                        <span class="button-more"><em></em></span>
                                    </a>
                                </section>
                                
                                <section class="col-md-4 col-sm-4">
                                    <a href="/courses/detail/pro-course/">
                                        <div class="image-container" style="height: 320px;"><img class="image" src="/css/images/content/courses/peter/DJ/pro.png"></div>

                                        <span class="short-description" style="height: 333px;">
                                            <h4 class="name">PRO курс DJ Школы</h4>
                                            <span class="description">Курс предназначен для тех, кто уже обладает навыками владения DJ оборудованием, но хотел бы значительно повысить свой уровень. PRO курс - это поэтапная детальная проработка каждого аспекта навыков работы диджея: начиная с безукоризненного попадания в бит и заканчивая игрой на 4-х проигрывателях одновременно!</span>
                                        </span>
                                        <span class="button-more"><em></em></span>
                                    </a>
                                </section>
                                
                                <section class="col-md-4 col-sm-4">
                                    <a href="/courses/detail/music-write-base/">
                                        <div class="image-container" style="height: 320px;"><img class="image" src="/css/images/content/courses/peter/music/base.png"></div>

                                        <span class="short-description" style="height: 333px;">
                                            <h4 class="name">Базовый курс Школы Написания Музыки</h4>
                                            <span class="description">Курс создан для того, чтобы ученик обрел уверенную платформу знаний в области создания электронной музыки. По завершении этого курса у выпускника будут все необходимые знания для начала полноценной работы над продакшеном своих собственных треков, обладающих хорошим качеством и индивидуальностью</span>
                                        </span>
                                        <span class="button-more"><em></em></span>
                                    </a>
                                </section>
                                
                            </div>
                        </div>
                        <a href="/courses" class="button-more-news"><span>СМОТРЕТЬ ВСЕ</span></a>
                    </div>
                </div>
            </div>
        </div>