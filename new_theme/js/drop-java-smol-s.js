function DropDown(el) {
				this.ddcity = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.ddcity.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}
			$(function() {
				var ddcity = new DropDown( $('#ddcity') );
				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdow-city-5').removeClass('active');
				});
			});