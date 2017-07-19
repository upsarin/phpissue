<style>
h2 {
	color: orange;
}
</style>

<div class="container">
	<div class="row row-offcanvas row-offcanvas-right">
        <h2><?=$array['title']?></h2>
        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>скидка на тарифы</h1>
            <p>Получите скидку при покупке тарифа на год 20%.</p>
          </div>
          <div class="row personal-desktop">
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Настройка</h2>
              <p>Настройте ващ аккаунт под себя.</p>
				<p><a class="btn btn-default" href="/personal/settings/" role="button">Узнать больше »</a></p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Последнее</h2>
              <p>Самое последнее из публикаций на портале</p>
             <p><a class="btn btn-default" href="/personal/ownnews/" role="button">Узнать больше »</a></p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Фотографии</h2>
              <p>Фотографии вашего дружного коллектива, выполненных работ, также количество фотографий ваших работ влияет на рейтинг.</p>
				<p><a class="btn btn-default" href="/personal/portfolio/" role="button">Узнать больше »</a></p>
            </div><!--/span-->
              <!--<div class="col-6 col-sm-6 col-lg-4">
                <h2>Календарь</h2>
                <p>Все кто бронировал время в удобном списке.</p>
                  <p><a class="btn btn-default" href="/personal/calendar/" role="button">Узнать больше »</a></p>
              </div>-->
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Рейтинг</h2>
              <p>Ваш рейтинг и позиция в списках.</p>
				<p><a class="btn btn-default" href="/personal/stats/" role="button">Узнать больше »</a></p>
            </div><!--/span-->
            
          </div><!--/row-->
        </div><!--/span-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="list-group">
            <a href="/personal/" class="list-group-item active">Личный кабинет</a>
            <a href="/personal/settings/" class="list-group-item">Настройка</a>
            <a href="/personal/ownnews/" class="list-group-item">Новости сервиса и обновления</a>
            <a href="/personal/portfolio/" class="list-group-item">Портфолио</a>
            <!--<a href="/personal/online/" class="list-group-item">Список броней</a>-->
            <a href="/personal/stats/" class="list-group-item">Рейтинг</a>

          </div>
        </div><!--/span-->
	</div>
</div>

