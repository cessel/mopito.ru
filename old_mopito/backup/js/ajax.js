$(document).ready(function()

	{

		try 

			{

				$("a[href='#back']").click

					(

						function()

						{

							history.back();

						}



					);

			}

		catch (e) 

			{

				console.log(e);

			}

		try 

			{

				mapInit("#map");

			}

		catch (e) 

			{

				console.log(e);

			}

		

		

		$('li.checkbox').on('click',function(e)

			{

				

				$('#blocks-wrapper').data('page',1);

				if($(this).hasClass('checked'))

					{

						$('body').data('active_filter',0);

						$(this).removeClass('checked');

						$('body').data('end_loop',0);

						get_blocks(false);

						

					}

				else

					{

						var filter_param = $(this).find('a').data('filter');

						var filter_list = $('li.checkbox');

						filter_list.removeClass('checked');

						$(this).addClass('checked');

						$('body').data('active_filter',filter_param);

						$('body').data('end_loop',0);

						get_blocks(filter_param);

						

						

					}

			});

		

	var onloadCaptchaCallback = function() 

		{

			var siteKey = '6LfRXmIUAAAAAE4SadTJbauKdCyHvDvq8H4SaAbb';

			$('.g-recaptcha').each(function(index) 

				{

					grecaptcha.render($(this).attr('id'),{'sitekey' : siteKey});

			});

		};



		

		

		$(".age-modal-btn").click(function(e)

			{

				var action_type = $(this).attr('href').replace('#','');

				if($(this).data('decline_show') != 1)

					{

						$(this).data('decline_show',1);

						age_modal_confirm(action_type);

					}

			});

			

		check_view();

		

		

		

		

		

		$('#deals').on('click','.biginfo p',function(e)

			{

				var block_id = $(this).closest('.blockin').data('product_id');

				var cookie_data_clicks = Cookies.get('clicks_status');

				

				if(cookie_data_clicks == undefined)

					{

						cookie_data_clicks = ''; 

					}

				var cookie_data_arr = cookie_data_clicks.split('|');

				

				var flag = true;

				cookie_data_arr.forEach(function(id,i)

						{

							if(cookie_data_arr[i] == block_id)

								{

									//console.log("id: '" + cookie_data_arr[i] + "' === '" + block_id +"'");

									flag = false;

								}

						});

				//console.log(flag);

				if(flag === true)

					{

						cookie_data_arr.push(block_id);

						check_click(block_id);

					}

					

				var new_cookie_data = cookie_data_arr.join('|');

				Cookies.set('clicks_status',new_cookie_data );

				

				var data_biginfo = $(this).data('biginfo');

				

				if(data_biginfo != 0)

					{

						$(this).data('biginfo',0);

						$(this).html(data_biginfo);

						

					}

			});



	});

	





/*

function check_view()

	{

		var cookie_data = Cookies.get('counter_status');

		var link_data = Cookies.get('link_cookie');

		var links_data = get_link_in_cookie();

		console.log($.inArray(location.pathname,links_data));

		console.log(location.pathname);

		

		if(cookie_data != 'visited')

			{

			setTimeout(function(e)

				{

					age_modal_confirm('open');

				},1000);

				

				Cookies.set('counter_status','visited');

				var data = {'url':location.pathname};

				$.post('/ajax/counter_views.php',data,function(result)

					{

						var counter_result_decoded = JSON.parse(result);

						console.log(counter_result_decoded);

						

					});

				

			}

		else if(($.inArray(location.pathname,links_data) == -1) && (location.pathname !== '/msk/alkogolnie/vodka_konyak_vino_shampanskoe_optom/product'))

			{

				var data = {'url':location.pathname};

				$.post('/ajax/counter_views.php',data,function(result)

					{

						var counter_result_decoded = JSON.parse(result);

						console.log(counter_result_decoded);

					});

			}

			

		link_cookie();

	}

*/

function check_view()

	{

		var viewied_links = get_link_in_cookie();

		console.log(viewied_links);

		var url = location.pathname;

		console.log($.inArray(url,viewied_links));

		var cookie_data = Cookies.get('counter_status');

		if(cookie_data != 'visited')

			{

				setTimeout(function(e)

						{

							age_modal_confirm('open');

						},1000);

				Cookies.set('counter_status','visited');

			}

		

		if($.inArray(url,viewied_links) == -1)

			{	

				var link_arr = url.split('/');

				link_add_to_cookie(url);

				if(link_arr[link_arr.length -1] != 'product' )

					{

						add_url_view(url);

					}

				set_actual_views();

			}

		

	}



function check_click(product_id)	

	{

		//console.log(product_id);

		

		var data = {'url':location.pathname,'product_id':product_id};

		$.post('/ajax/counter_clicks.php',data,function(result)

			{

				var counter_result_decoded = JSON.parse(result);

				console.log(counter_result_decoded);

			});

	}

function link_cookie()	

	{

		Cookies.set('link_cookie',location.pathname );

		link_add_to_cookie(location.pathname);

	}

function age_modal_confirm(action)

	{

		var age_modal = $('.age-modal');

		var age_overlay = $('.age-modal-overlay');

		

		if(action == 'open')

			{

				age_modal.removeClass('hidden');

				age_overlay.removeClass('hidden');

			}

		else if(action == 'confirm')

			{

				age_modal.addClass('hidden');

				age_overlay.addClass('hidden');

			}

		else if(action == 'decline')

			{

				age_modal.find('.age-modal-confirm-text').append("<p class='decline-text'>В соответствии с требованиями законодательства о производстве и употреблении алкогольных напитков, просматривать данный сайт могут только совершеннолетние посетители.</p>");

			}

		

	}

	



function get_blocks(filter) 

	{

		var body = $('body');

		if (!body.hasClass('loading'))

			{

				var pagetype = body.data('pagetype');

				var blocks_wrapper = $('#blocks-wrapper');

				var page = blocks_wrapper.data('page');



				if(page == 1)

					{

						blocks_wrapper.html('');

						blocks_wrapper.append('<img id="wait" src="/img/wait.gif" alt="">');

						

					}

				var url = '/ajax/blocks.php';

				

				if(filter)

					{

						var data = {'pagetype':pagetype,'page':page,'filter':filter};

					}

				else

					{

						var data = {'pagetype':pagetype,'page':page,'filter':0};

					}

				$.ajax({

                        url: url,

                        data: data,

                        type: 'POST',

                        beforeSend: function (xhr) 

							{

								body.addClass('loading');

							},

                        success: function (result) 

							{

							try 

								{

									if(result != '')

										{

											//sleep(1000);

											var result_decoded = JSON.parse(result);

											blocks_wrapper.append(result_decoded.return_html);

										}

									blocks_wrapper.data('page',+page+1);

									console.log(result_decoded.debug);

									if(result_decoded.error == 'stop')

										{

											$('body').data('end_loop',1);

										}

								}

							catch (e) 

								{

									console.log(e);

								}



							},

						complete:function(e)

							{

								$("#wait").remove();

								body.removeClass('loading');

								

								

							}

                    });

				

				

				

				

			}

	}



jQuery(function($)

	{

		$(window).scroll(function () 

			{

				try 

					{

						var bottomOffset = 1000; 

						if (($(document).scrollTop() > ($(document).height() - bottomOffset) && !$('body').hasClass('loading')) && $('body').data('end_loop') != 1 && $('body').data('pagetype') != 'product') 

							{

								get_blocks($('body').data('active_filter')); 

							}

					}

				catch (e) 

					{

						console.log(e);

					}

			});

	});

	

function sleep(ms)

	{

		ms += new Date().getTime();

		while (new Date() < ms){}

	} 

	

function link_add_to_cookie(url)

	{

		var flag = true;

		var cookie_arr = get_link_in_cookie();

		Cookies.remove('links_cookie');

		cookie_arr.some(function(id,i)

			{

				if(id == url)

					{

						console.log('ID = ' + id);

						console.log('URL = ' + url);

						flag = false;

						console.log(flag);

						return id;

					}

			});

			

			if(flag)

				{

					console.log(flag);

					cookie_arr.push(url);

				}

	

		var new_cookie_data = cookie_arr.join('|');

		

		Cookies.set('links_cookie',new_cookie_data );

		console.log(Cookies.get('links_cookie'));

	}

function get_link_in_cookie()

	{

		var cookie_data = Cookies.get('links_cookie');

		if(cookie_data == undefined)

			{

				cookie_data = ''; 

			}

		var cookie_data_arr = cookie_data.split('|');

		return cookie_data_arr;

	}

function add_url_view(url)

	{

		

		var data = {'url':url};

		$.post('/ajax/add_url_view.php',data,function(result)

			{

				var res_decoded = JSON.parse(result);

				console.log(res_decoded);

			});

		

	}



function set_actual_views()

	{

		var data = {'url':url};

		$.post('/ajax/get_actual_views.php',data,function(result)

			{

				var res_decoded = JSON.parse(result);

				console.log(res_decoded);

			});

		

	}















function mapInit(selector)

    {

        ymaps.ready(init);

        var myMap,

            myPlacemark;

        var adress = $(selector).data('adress');

        var siteName = $(selector).data('sitename');

        if(siteName == undefined || siteName == '' )

            {

                siteName = '';

            }

        function init()

        {

            ymaps.geocode(adress).then(function (res)

            {

                var position = res.geoObjects.get(0).geometry.getCoordinates();

                myMap = new ymaps.Map('map',{center: position,zoom : 14 });

                var myPlacemark = new ymaps.Placemark(position,{hintContent: siteName,balloonContent: siteName});

                myMap.geoObjects.add(myPlacemark);

				myMap.behaviors.disable('scrollZoom');



            });



        }

    }

