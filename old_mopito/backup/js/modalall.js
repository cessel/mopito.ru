try 
	{
		document.getElementById('current_location').addEventListener('click', function() { document.getElementById('city').classList.add('open'); }, true);
		document.getElementById('city_close').addEventListener('click', function() { document.getElementById('city').classList.remove('open'); }, true);

		document.getElementById('category_current').addEventListener('click', function() { document.getElementById('category').classList.add('open'); }, true);
		document.getElementById('category_close').addEventListener('click', function() { document.getElementById('category').classList.remove('open'); }, true);

		document.getElementById('menu_btn').addEventListener('click', function() { document.getElementById('category').classList.add('open'); }, true);

		document.getElementById('filter_btn').addEventListener('click', function() {
			if(document.getElementById('filters').classList.contains('visible-xs')) {
				document.getElementById('filters').classList.remove('visible-xs');
				document.getElementById('filters').classList.add('visible-xs-open');
				document.getElementById('filter_mes').innerHTML = '<span id="filter_mes">Скрыть фильтры</span>';
			} else {
				document.getElementById('filters').classList.add('visible-xs');
				document.getElementById('filters').classList.remove('visible-xs-open');
				document.getElementById('filter_mes').innerHTML = '<span id="filter_mes">Показать фильтры</span>';
			}
		}, true);
			}
catch (e) 
	{
		console.log(e);
	}