$(document).ready(function()

	{

		

		

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

		

		link_cookie();

		

		get_blocks(1,11,"#deals");

		

		$('li.checkbox').on('click',function(e)

			{			



				if(!$(this).hasClass('checked'))

					{

						var filter_list = $('li.checkbox');

						filter_list.removeClass('checked');

						filter_list.data('filter','0');

						

						$(this).addClass('checked');

						var filter_data = $(this).find('a').html().split(' (');

						$(this).data('filter',filter_data[0]);

						var filter_value = $(this).data('filter');

						console.log('filter_valu: ' + $(this).data('filter'));

						

						get_blocks(1,11,"#deals",'alco_15',filter_value);

					}

				else

					{

						$(this).removeClass('checked');

						get_blocks(1,11,"#deals");

					}

			});

		

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

						console.log(yaCounter55016239.reachGoal('GOAL1'));
						

					}

			});

		

		

		

	});

	

function get_blocks(start,stop,selector,filter_field,filter_value)

	{

		var pagetype = $('body').data('pagetype');

		if(filter_field != undefined)

			{

				var data = {'start':start,'stop':stop,'filter_field':filter_field,'filter_value':filter_value,'pagetype':pagetype};

				console.log('FILTERED');

			}

		else

			{

				var data = {'start':start,'stop':stop,'pagetype':pagetype};

				//console.log('NO FILTER');

			}

		var url = '/ajax/blocks.php';

		if(start == 1)

			{

				var old_data = $(selector).html('');

				$(selector).html('<img class="wait-img" src="/img/wait.gif" alt="">');

				$(selector).data('stop','')

			}

			if($(selector).data('END') != 1)

				{

					$.ajax({

                        url: url,

                        data: data,

                        type: 'POST',

                        beforeSend: function (xhr) {

                            $('body').addClass('loading');

                        },

                        success: function (result) {

							

							var result_decoded = JSON.parse(result);

							

							

                            if (result_decoded.error !== 'stop' && result_decoded.error !== 'stop1' && result_decoded.error !== 'stop2' && result_decoded.error !== 'stop3' && result_decoded.error !== 'stop4') {

								if(start == 1)

									{

										$(selector).html(old_data);

									}

								$(selector).append(result_decoded.blocks);

								$(selector).data('start',start+10);

								$(selector).data('stop',stop+10);

								console.log('pagetype: ' + pagetype);

								console.log('ERROR: ' + result_decoded.error);

								//console.log('stop: ' + stop);

								$('body').removeClass('loading');



                            }

							else if (result_decoded.error == 'not_found'){

								$(selector).html('Ждем ваших предложений  <a href="/theme/regpay/reg.php" class="blockright"> Разместить </a>');

							}

							else{

								$(selector).data('end',1);

								//console.log('STOP');

								//console.log('END: ' + $("#deals").data('end'));

							}

                        }

                    });



				}





	}

	

	jQuery(function($){

        $(window).scroll(function () {

			

            try {

				var selector_base = "#deals";



                var bottomOffset = 1000; // отступ от нижней границы сайта, до которого должен доскроллить пользователь, чтобы подгрузились новые посты

				var start = $(selector_base).data('start');

				var stop = $(selector_base).data('stop');





				var data = {'start':start,'stop':stop};

				var url = '/ajax/blocks.php';

				var old_data = $(selector_base).html();



				

				

                if ($(document).scrollTop() > ($(document).height() - bottomOffset) && !$('body').hasClass('loading')) {

					var filter_list = $('li.checkbox');

					var flag = false;

					filter_list.each(function (index, value) 

						{

							var fd = filter_list.eq(index).data('filter');

						

							if(fd != 0 && fd != '' && fd != undefined  )

								{  

									flag = index;

									

								}

						});

						if(flag !== false)

							{  

								get_blocks(start,stop,selector_base,'alco_15',filter_list.eq(flag).data('filter'));

							}

						else

							{

								get_blocks(start,stop,selector_base);

							}

						



                }

                //console.log(current_page);

                //console.log($("#true_loadmore").data('maxpage'));



            }

            catch (e) {

                console.log(e);

            }

        });

				

});



function check_view()

	{

		var cookie_data = Cookies.get('counter_status');

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

						//console.log(counter_result_decoded);

						

					});

			}

	}

	

function check_click(product_id)	

	{

		//console.log(product_id);

		

		var data = {'url':location.pathname,'product_id':product_id};

		$.post('/ajax/counter_clicks.php',data,function(result)

			{

				var counter_result_decoded = JSON.parse(result);

				//console.log(counter_result_decoded);

			});

	}

function link_cookie()	

	{

		Cookies.set('link_cookie',location.pathname );

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

	

