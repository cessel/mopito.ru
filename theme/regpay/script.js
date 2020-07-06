window.res = jQuery.ajax({ url: "config.php", success: function (data) { res = jQuery.parseJSON(data); } });



function further(){

	form = document.getElementById('form1');

	tel = form.querySelectorAll('input[type="tel"]')[0];

	if(tel.value == '') tel.style.border = 'red solid 1px';

	else{ tel.removeAttribute('style'); phone = true;}

	

	email = form.querySelectorAll('input[type="email"]')[0];

	if(email.value == '') email.style.border = 'red solid 1px';

	else if(validEmail(email.value) == true){ email.removeAttribute('style'); mail = true;

	}else email.style.border = 'red solid 1px';

	

	if(phone == true && mail == true){

			document.getElementById('form2').removeAttribute('style');

			return true;

	}else return false;

	

}



function further2(){

	phone = false; mail = false;

	form = document.getElementById('form1');

	tel = form.querySelectorAll('input[type="tel"]')[0];

	if(tel.value == '') tel.style.border = 'red solid 1px';

	else{ tel.removeAttribute('style'); phone = true;}

	

	email = form.querySelectorAll('input[type="email"]')[0];

	if(email.value == '') email.style.border = 'red solid 1px';

	else if(validEmail(email.value) == true){ email.removeAttribute('style'); mail = true;

	}else email.style.border = 'red solid 1px';

	

	if(phone == true && mail == true) return true;

	else return false;

}



function validEmail(email) {

 		var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);

 		return pattern.test(email);

	}





function Focus(idDiv, idSelect){

	document.getElementById('dsl1').removeAttribute('style');

	

	document.getElementById('sl1').innerHTML = '';

	

	document.getElementById('dsl2').setAttribute('style', 'display:none;');

	document.getElementById('sl2').innerHTML = '';

	

	document.getElementById('dsl3').setAttribute('style', 'display:none;');

	document.getElementById('sl3').innerHTML = '';

	

	document.getElementById('dsl4').setAttribute('style', 'display:none;');

	document.getElementById('dsl4').innerHTML = '';

	

	document.getElementById('dsl5').setAttribute('style', 'display:none;');

	selectl(idSelect);

}



function Blur(idDiv, idSelect, $this){

	if($this.value == ''){

		$this.style.border = 'red solid 1px';

		document.getElementById('dsl1').setAttribute('style', 'display:none;');

		document.getElementById('sl1').innerHTML = '';

		

		document.getElementById('dsl2').setAttribute('style', 'display:none;');

		document.getElementById('sl2').innerHTML = '';

		

		document.getElementById('dsl3').setAttribute('style', 'display:none;');

		document.getElementById('sl3').innerHTML = '';

		

		document.getElementById('dsl4').setAttribute('style', 'display:none;');

		document.getElementById('dsl4').innerHTML = '';

		

		document.getElementById('dsl5').setAttribute('style', 'display:none;');

	}else

		$this.removeAttribute('style');

}



function selectl(idSelect){	

	Select = document.getElementById(idSelect);

		option = document.createElement('option');

		Select.appendChild(option);

		type = res['type'];

		for(var i in type){

			option = document.createElement('option');

			option.innerHTML = type[i];

			Select.appendChild(option);

		}

	Select.getElementsByTagName('option')[0].innerHTML = 'Выбрать';

}



function selectl1(idDiv, idSelect, $this){

	if($this.value != ''){

		document.getElementById('dsl2').removeAttribute('style');

		document.getElementById('sl2').innerHTML = '';

		document.getElementById('sl3').innerHTML = '';

	}else{

		document.getElementById('dsl2').setAttribute('style', 'display:none;');

		document.getElementById('sl2').innerHTML = '';

		

		document.getElementById('dsl3').setAttribute('style', 'display:none;');

		document.getElementById('sl3').innerHTML = '';

		

		document.getElementById('dsl4').setAttribute('style', 'display:none;');

		document.getElementById('dsl4').innerHTML = '';

		

		document.getElementById('dsl5').setAttribute('style', 'display:none;');

	}

	Select = document.getElementById('sl2');

		option = document.createElement('option');

		Select.appendChild(option);

		categories = res['categories'];

		for(var i in categories){

			option = document.createElement('option');

			option.innerHTML = i;

			Select.appendChild(option);

		}

	Select.getElementsByTagName('option')[0].innerHTML = 'Выбрать';

}



function selectl2(idDiv, idSelect, $this){

	if($this.value != ''){

		document.getElementById('dsl3').removeAttribute('style');

		document.getElementById('sl3').innerHTML = '';

	}else{

		document.getElementById('dsl3').setAttribute('style', 'display:none;');

		document.getElementById('sl3').innerHTML = '';

		

		document.getElementById('dsl4').setAttribute('style', 'display:none;');

		document.getElementById('dsl4').innerHTML = '';

		

		document.getElementById('dsl5').setAttribute('style', 'display:none;');

	}

	Select = document.getElementById(idSelect);

		option = document.createElement('option');

		Select.appendChild(option);

		window.sel2 = $this.value;

		categories = res['categories'];

		for(var i in categories[sel2]){

			option = document.createElement('option');

			option.innerHTML = i;

			Select.appendChild(option);

		}

	Select.getElementsByTagName('option')[0].innerHTML = 'Выбрать';

}



function selectl3(idDiv, $this){

	div = document.getElementById(idDiv);

	div.innerHTML = '';

	document.getElementById('dsl5').setAttribute('style', 'display:none;');

	if($this.value != ''){

		document.getElementById('dsl5').removeAttribute('style');

		div = document.getElementById(idDiv);

		div.removeAttribute('style');

		

		window.sel3 = $this.value;
		categories = res['categories'];
		for(var i in categories[sel2][sel3]){
			fieldset = document.createElement('fieldset');
			div.appendChild(fieldset);
		

			Big = document.createElement('big');
			fieldset.appendChild(Big);
		
			span = document.createElement('span');
			span.innerHTML = i;
			Big.appendChild(span);

			
			for(x = 0; x<categories[sel2][sel3][i].length; x++){
				divInput = document.createElement('div');
				Big.appendChild(divInput);


				label = document.createElement('label');
				label.innerHTML = categories[sel2][sel3][i][x];
				divInput.appendChild(label);
				
				
				input = document.createElement('input');
				input.type = "checkbox";
				input.id = "checkboxbig";
				input.name = i;
				input.value = categories[sel2][sel3][i][x];
				label.appendChild(input);

			}
		}

	}else{

		div = document.getElementById(idDiv);

		div.setAttribute('style', 'display:none;');

		div.innerHTML = '';

	}

}



function regulations($this){

	Click = document.getElementById('Click');	

	if($this.checked){

		Click.setAttribute('onClick', 'Submit()');

		Click.setAttribute('style', 'cursor:pointer; background:#39f;');

	}else{

		Click.removeAttribute('onClick');

		Click.removeAttribute('style');

	}

}



function Submit(){

	if($("#g-recaptcha-response").val() != ''){

		var timedata = new Date();

        var timedata = timedata.getDate() + "." + (timedata.getMonth() + 1) + "." + timedata.getFullYear();

		form1 = document.getElementById('form1');

		form2 = document.getElementById('form2');

		dsl4 = document.getElementById('dsl4');

		span = dsl4.getElementsByTagName('span');

		chec = new Array();

		groups = new Array();

		for(i = 0; i<span.length; i++){

			chec[i] = form2.querySelectorAll('input[name="'+span[i].innerHTML+'"]');

			chec[i]['name'] = span[i].innerHTML;

			groups[i] = new Array();

			for(x = 0; x<chec[i].length; x++){

				groups[i]['name'] = span[i].innerHTML;

				if(chec[i][x].checked){

					groups[i][x] = chec[i][x].value;

				}else groups[i][x] = '';

			}

		}					

		res = new Array();

		resu = '';

		for(i = 0; i<groups.length; i++){

			if(groups[i].length*1 != 0){

				resu = groups[i]['name']+': ';

				for(x = 0; x<groups[i].length; x++){

					if(typeof(groups[i][x]) != "undefined"){

						resu+= groups[i][x]+'|';

					}

				}

				resu+= ',';

			}

			res[i] = resu;

		}

		data = {

					form: 'profile',

			        timedata: timedata,	

			        company: form1.querySelectorAll('input[name="company"]')[0].value,

					city: form1.querySelectorAll('input[name="city"]')[0].value,

					adress: form1.querySelectorAll('input[name="adress"]')[0].value,

					name: form1.querySelectorAll('input[name="name"]')[0].value,

					phone: form1.querySelectorAll('input[name="phone"]')[0].value,

					email: form1.querySelectorAll('input[name="email"]')[0].value,

					message: form1.querySelectorAll('textarea[name="message"]')[0].value,

					showCity: form2.querySelectorAll('input[name="showCity"]')[0].value,

					shouAdres: form2.querySelectorAll('input[name="shouAdres"]')[0].value,

					providerType: document.getElementById('sl1').value,

					category: document.getElementById('sl2').value,

					subcategory: document.getElementById('sl3').value,

					groups: res

					

		};

		jQuery.ajax({

			url:     "mail.php", //Адрес подгружаемой страницы

			type:     "POST", //Тип запроса

			dataType: "json", //Тип данных

			data: data

		});

		document.getElementById('form').innerHTML = "<div style=\"width:320px; margin:100px auto; background:#39F; text-align:center; font-size:22px; padding: 10px;\" name=\"#top\">Ваше объявление отправлено на модерацию. Копия отправлена Вам на почту. Совсем скоро у Вас появиться личный кабинет и Вы будете получать запросы на Партнерство</div>";
	}
}
function delOption($this){
	option = $this.getElementsByTagName('option');
	for(i = 0; i<option.length; i++){
		if(i != 0 && option[i].innerHTML == '')
			$this.removeChild(option[i]);
	}
}

function Pattern(bull, $this, re){
	if($this.getAttribute('style') != null) $this.removeAttribute('style');
	if(bull){
		if(!re.test($this.value)){
			$this.style.border = "red solid 1px";
			$this.focus();
			return false;
		}else if($this.getAttribute('style') != null){ 
			$this.removeAttribute('style');
			return true;
		}else return true;
	}else if(!bull && $this.value != ''){
		if(!re.test($this.value)){
			$this.style.border = "red solid 1px";
			$this.focus();
			return false;
		}else if($this.getAttribute('style') != null){ 
			$this.removeAttribute('style');
			return true;
		}else return true;
	}
}

function regulations2($this){

	Click = document.getElementById('Click');	

	if($this.value != 'Выбрать'){

		Click.setAttribute('onClick', 'Submit2();');

		Click.setAttribute('style', 'cursor:pointer; background:#39f;');

		document.getElementById('recaptcha').removeAttribute('style');

	}else{

		Click.removeAttribute('onClick');

		Click.removeAttribute('style');

		document.getElementById('recaptcha').setAttribute('style', 'display:none;');

		

		month = document.getElementById('month');

		if(month.getAttribute('style') == null) month.setAttribute('style', 'display:none;');

		

		priorities = document.getElementById('priorities');

		if(priorities.getAttribute('style') == null) priorities.setAttribute('style', 'display:none;');

	}

}



function inpId(bull, $this, id){

	if(bull && $this.id == 'id'){

		document.getElementById('dsl1').removeAttribute('style');

	

		date = new Date(); //Текущая дата

		resDay = date.getDate(); //День

		if(resDay*1<10) resDay = '0'+resDay;

		resMonth = date.getMonth(); //Месяц

		resMonth+=1;

		if(resMonth*1<10) resMonth = '0'+resMonth;

		resYear = date.getFullYear(); //Год

		thisMarker = Date.parse(resMonth+' '+resDay+' '+resYear);

		

		resultData = document.getElementById('id').value.split(' ')[1];

		iDate = resultData.split('.');

		insertMarker = Date.parse(iDate[1]+' '+iDate[0]+' '+iDate[2]); //Вставленная метка

		

		maxMarker = Date.parse('12 31 2030'); //Максимальная метка

		

		if(document.getElementById('error').getAttribute('style') != null){

			document.getElementById('error').removeAttribute('style');

		}

		if(document.getElementById('error').innerHTML != ''){

			document.getElementById('error').innerHTML = '';

		}

		if(insertMarker<thisMarker){

			document.getElementById('error').innerHTML = '<div class="red1"> Указанный ID просрочен. Обратитесь в тех.поддержку</div>';

			document.getElementById('dsl1').getElementsByTagName('option')[0].selected=true;

			document.getElementById('dsl1').setAttribute('style', 'display:none;');

			document.getElementById('dsl2').getElementsByTagName('option')[0].selected=true;

			document.getElementById('dsl2').setAttribute('style', 'display:none;');

			document.getElementById('dsl3').getElementsByTagName('option')[0].selected=true;

			document.getElementById('dsl3').setAttribute('style', 'display:none;');

			document.getElementById('dsl4').getElementsByTagName('option')[0].selected=true;

			document.getElementById('dsl4').setAttribute('style', 'display:none;');

			document.getElementById('Click').removeAttribute('style');

			document.getElementById('Click').removeAttribute('onclick');

			

			month = document.getElementById('month');

			if(month.getAttribute('style') == null) month.setAttribute('style', 'display:none;');

			

			priorities = document.getElementById('priorities');

			if(priorities.getAttribute('style') == null) priorities.setAttribute('style', 'display:none;');

		}else if(insertMarker>maxMarker){

			document.getElementById('error').innerHTML = '<div> Указанный ID неверен. Обратитесь в тех.поддержку</div>';

			document.getElementById('dsl1').getElementsByTagName('option')[0].selected=true;

			document.getElementById('dsl1').setAttribute('style', 'display:none;');

			document.getElementById('dsl2').getElementsByTagName('option')[0].selected=true;

			document.getElementById('dsl2').setAttribute('style', 'display:none;');

			document.getElementById('dsl3').getElementsByTagName('option')[0].selected=true;

			document.getElementById('dsl3').setAttribute('style', 'display:none;');

			document.getElementById('dsl4').getElementsByTagName('option')[0].selected=true;

			document.getElementById('dsl4').setAttribute('style', 'display:none;');

			document.getElementById('Click').removeAttribute('style');

			document.getElementById('Click').removeAttribute('onclick');

			

			month = document.getElementById('month');

			if(month.getAttribute('style') == null) month.setAttribute('style', 'display:none;');

			

			priorities = document.getElementById('priorities');

			if(priorities.getAttribute('style') == null) priorities.setAttribute('style', 'display:none;');

		}else if(document.getElementById('error').getAttribute('style') == null) document.getElementById('error').setAttribute('style', 'display:none;');

		

	}else{

		document.getElementById('dsl1').getElementsByTagName('option')[0].selected=true;

		document.getElementById('dsl1').setAttribute('style', 'display:none;');

		document.getElementById('dsl2').getElementsByTagName('option')[0].selected=true;

		document.getElementById('dsl2').setAttribute('style', 'display:none;');

		document.getElementById('dsl3').getElementsByTagName('option')[0].selected=true;

		document.getElementById('dsl3').setAttribute('style', 'display:none;');

		document.getElementById('dsl4').getElementsByTagName('option')[0].selected=true;

		document.getElementById('dsl4').setAttribute('style', 'display:none;');

		document.getElementById('Click').removeAttribute('style');

		document.getElementById('Click').removeAttribute('onclick');

		

		month = document.getElementById('month');

		if(month.getAttribute('style') == null) month.setAttribute('style', 'display:none;');

		

		priorities = document.getElementById('priorities');

		if(priorities.getAttribute('style') == null) priorities.setAttribute('style', 'display:none;');

		

		if(document.getElementById('error').getAttribute('style') != null){

			document.getElementById('error').removeAttribute('style');

		}

		if(document.getElementById('error').innerHTML != ''){

			document.getElementById('error').innerHTML = '';

		}

		

		document.getElementById('recaptcha').setAttribute('style', 'display:none;');

	}

}



function sel($this){

	if($this.options.selectedIndex == 1){

		

		document.getElementById('dsl2').removeAttribute('style');

		document.getElementById('dsl2').getElementsByTagName('select')[0].setAttribute('data-action', 'true');

		div = document.getElementById('dsl3');

		if(div.getAttribute('style') == null) div.setAttribute('style', 'display:none;');

		if(div.getElementsByTagName('select')[0].getAttribute('data-action') != null) div.getElementsByTagName('select')[0].removeAttribute('data-action');

		

		document.getElementById('dsl4').getElementsByTagName('option')[0].selected=true;

		document.getElementById('dsl4').setAttribute('style', 'display:none;');

		

		priorities = document.getElementById('priorities');

		if(priorities.getAttribute('style') == null) priorities.setAttribute('style', 'display:none;');

		

		document.getElementById('recaptcha').setAttribute('style', 'display:none;');

		

	}else if($this.options.selectedIndex == 2){

		

		document.getElementById('dsl3').removeAttribute('style');

		document.getElementById('dsl3').getElementsByTagName('select')[0].setAttribute('data-action', 'true');

		div = document.getElementById('dsl2');

		if(div.getAttribute('style') == null) div.setAttribute('style', 'display:none;');

		if(div.getElementsByTagName('select')[0].getAttribute('data-action') != null) div.getElementsByTagName('select')[0].removeAttribute('data-action');

		

		document.getElementById('dsl4').getElementsByTagName('option')[0].selected=true;

		document.getElementById('dsl4').setAttribute('style', 'display:none;');

		

		month = document.getElementById('month');

		if(month.getAttribute('style') == null) month.setAttribute('style', 'display:none;');

		

		document.getElementById('recaptcha').setAttribute('style', 'display:none;');

		

	}else if($this.options.selectedIndex == 0){

		

		div2 = document.getElementById('dsl2');

		div3 = document.getElementById('dsl3');

		

		if(div2.getAttribute('style') == null) div2.setAttribute('style', 'display:none;');

		if(div3.getAttribute('style') == null) div3.setAttribute('style', 'display:none;');

		

		document.getElementById('dsl2').getElementsByTagName('option')[0].selected=true;

		document.getElementById('dsl2').setAttribute('style', 'display:none;');

		document.getElementById('dsl2').getElementsByTagName('select')[0].removeAttribute('data-action');

		

		document.getElementById('dsl3').getElementsByTagName('option')[0].selected=true;

		document.getElementById('dsl3').setAttribute('style', 'display:none;');

		document.getElementById('dsl3').getElementsByTagName('select')[0].removeAttribute('data-action');

		

		document.getElementById('dsl4').getElementsByTagName('option')[0].selected=true;

		document.getElementById('dsl4').setAttribute('style', 'display:none;');

		

		document.getElementById('Click').removeAttribute('style');

		document.getElementById('Click').removeAttribute('onclick');

		

		month = document.getElementById('month');

		if(month.getAttribute('style') == null) month.setAttribute('style', 'display:none;');

		

		priorities = document.getElementById('priorities');

		if(priorities.getAttribute('style') == null) priorities.setAttribute('style', 'display:none;');

		

		document.getElementById('recaptcha').setAttribute('style', 'display:none;');

	}

}



function sel2($this, id){

	if($this.value != 'Выбрать'){

		document.getElementById(id).removeAttribute('style');

	}else{

		document.getElementById(id).setAttribute('style', 'display:none;');

		document.getElementById('dsl3').getElementsByTagName('option')[0].selected=true;

		document.getElementById('dsl3').setAttribute('style', 'display:none;');

		document.getElementById('dsl4').getElementsByTagName('option')[0].selected=true;

		document.getElementById('dsl4').setAttribute('style', 'display:none;');

		document.getElementById('Click').removeAttribute('style');

		document.getElementById('Click').removeAttribute('onclick');

		

		month = document.getElementById('month');

		if(month.getAttribute('style') == null) month.setAttribute('style', 'display:none;');

		

		priorities = document.getElementById('priorities');

		if(priorities.getAttribute('style') == null) priorities.setAttribute('style', 'display:none;');

		

		document.getElementById('recaptcha').setAttribute('style', 'display:none;');

	}

}



function calc(bull){

	date = new Date(); //Текущая дата

	marker = Date.parse(Date()); //Текущая метка/

	

	selService = document.querySelectorAll('select[data-action="true"]')[0];

	price = selService.getAttribute('data-price');

	value = selService.value;	

	

	if(selService.id == 'sl2'){

		if(bull) document.getElementById('month').removeAttribute('style');

		

		resultData = document.getElementById('id').value.split(' ')[1];

		iDate = resultData.split('.');

		newDate =  new Date(iDate[1]+' '+iDate[0]+' '+iDate[2]);

		resDate = new Date(newDate.setMonth(newDate.getMonth()+value*1));

		

		resDay = resDate.getDate(); //День

		if(resDay*1<10) resDay = '0'+resDay;

		resMonth = resDate.getMonth(); //Месяц

		resMonth+=1;

		if(resMonth*1<10) resMonth = '0'+resMonth;

		resYear = resDate.getFullYear(); //Год

		resultData = resDay+'.'+resMonth+'.'+resYear;

		

		selBankAccount = document.getElementById('sl4');

		bankAccount = selBankAccount.getElementsByTagName('option')[selBankAccount.options.selectedIndex].getAttribute('data-bankAccount');

		

		delMessage = document.getElementById('month').getElementsByTagName('span')[0];

		delMessage.getElementsByTagName('span')[0].getElementsByTagName('big')[0].innerHTML = price*value;

		delMessage.getElementsByTagName('span')[0].getElementsByTagName('big')[1].innerHTML = value;

		delMessage.getElementsByTagName('span')[1].getElementsByTagName('big')[0].innerHTML = resultData;

		delMessage.getElementsByTagName('span')[2].getElementsByTagName('big')[0].innerHTML = selBankAccount.value+' '+bankAccount;

	}

	if(selService.id == 'sl3'){

		if(bull) document.getElementById('priorities').removeAttribute('style');

		

		resultData = document.getElementById('id').value.split(' ')[1];

		

		iDate = resultData.split('.');

		insertMarker = Date.parse(iDate[1]+' '+iDate[0]+' '+iDate[2]); //Втавленная метка

		

		days = Math.floor((insertMarker-marker)/(3600 * 24 * 1000));

		if(days==0)days=1;

		

		selBankAccount = document.getElementById('sl4');

		bankAccount = selBankAccount.getElementsByTagName('option')[selBankAccount.options.selectedIndex].getAttribute('data-bankAccount');

		

		delMessage = document.getElementById('priorities').getElementsByTagName('span')[0];

		delMessage.getElementsByTagName('span')[0].getElementsByTagName('big')[0].innerHTML = price*days*value;

		delMessage.getElementsByTagName('span')[0].getElementsByTagName('big')[1].innerHTML = value;

		delMessage.getElementsByTagName('span')[1].getElementsByTagName('big')[0].innerHTML = resultData;

		delMessage.getElementsByTagName('span')[2].getElementsByTagName('big')[0].innerHTML = selBankAccount.value+' '+bankAccount;

	}

}



function Submit2(){

	further = further2();

	if($("#g-recaptcha-response").val() != '' && further){

		selService = document.querySelectorAll('select[data-action="true"]')[0];

		

		if(selService.id == 'sl2')

			delMessage = document.getElementById('month').getElementsByTagName('span')[0];

		if(selService.id == 'sl3')

			delMessage = document.getElementById('priorities').getElementsByTagName('span')[0];

		

		id = document.getElementById('id').value;

		selectionServices = document.getElementById('sl1').value;

		paymentMethod = delMessage.getElementsByTagName('span')[2].getElementsByTagName('big')[0].innerHTML;

		text = delMessage.getElementsByTagName('span')[0].innerText;

		text2 = delMessage.getElementsByTagName('span')[1].innerText;

		email = document.getElementById('email').value;

		phone = document.getElementById('phone').value;

		var timedata = new Date();

        var timedata = timedata.getDate() + "." + (timedata.getMonth() + 1) + "." + timedata.getFullYear();

		

		data = {

					form: 'invoice',

					id: id,

					selectionServices: selectionServices,

					paymentMethod: paymentMethod,

			        text: text,

					text2: text2,

					email: email,

					phone: phone,

					timedata: timedata

			

		};

		jQuery.ajax({

			url:     "mail.php", //Адрес подгружаемой страницы

			type:     "POST", //Тип запроса

			dataType: "json", //Тип данных

			data: data

		});

		document.getElementById('form').innerHTML = "<div style=\"width:280px; margin:100px auto; background:#39F; text-align:center; font-size:24px; padding: 10px;\">Ваш запрос отправлен в тех.поддержку, с Вами свяжемся в ближайшее время. Спасибо</div>";

	}

}