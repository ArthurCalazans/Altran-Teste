function CriaRequest(){
	try
	{
		request = new XMLHttpRequest();        
	}
	catch (IEAtual)
	{
		try
		{
			request = new ActiveXObject("Msxml2.XMLHTTP");       
		}
		catch(IEAntigo)
		{
			try
			{
				request = new ActiveXObject("Microsoft.XMLHTTP");          
			}
			catch(falha)
			{
				request = false;
			}
		}
	}

	if (!request)
	{
		alert("Seu Navegador não suporta Ajax!");		
	}		
	else
	{		
		return request;
	}
}




function Cad_Cliente(){
	var result = document.getElementById("result");
	var xmlreq = CriaRequest();
	var data = new FormData();
	
	data.append('nome_cliente', document.forms.cad_cliente.nome.value);
	data.append('email_cliente', document.forms.cad_cliente.email.value);
	data.append('tel_cliente', document.forms.cad_cliente.telefone.value);	

	result.innerHTML = '<img style="width: 100px" src="view/img/loaders/ajax-loader.gif">';

	xmlreq.open("POST", "model/cad_cliente.php", true); 
	xmlreq.timeout = 2000;

	xmlreq.onreadystatechange = function()
	{ 
		// Verifica se foi concluído com sucesso e a conexão fechada 
		(readyState=4) 
		if (xmlreq.readyState == 4) 
		{ 
			// Verifica se o arquivo foi encontrado com sucesso 
			if (xmlreq.status == 200)
			{
				 // if(xmlreq.responseText == 1)
				 // {
					// $('#sucesso').click();
				 // }else
				 // {
					// $('#error').click();
				 // }
				// result.innerHTML = xmlreq.responseText;
				Con_Cliente();
				result.innerHTML = "";
            }else{
                result.innerHTML = "Erro: " + xmlreq.statusText;
            }
		} 
	}; 
	xmlreq.send(data);  
}

function Con_Cliente(){
	var result = document.getElementById("consulta_cliente");
	var xmlreq = CriaRequest();
	
	result.innerHTML = '<img style="width: 100px" src="view/img/loaders/ajax-loader.gif">';

	xmlreq.open("POST", "model/consulta_cliente.php", true); 
	xmlreq.timeout = 2000;

	xmlreq.onreadystatechange = function()
	{ 
		// Verifica se foi concluído com sucesso e a conexão fechada 
		(readyState=4) 
		if (xmlreq.readyState == 4) 
		{ 
			// Verifica se o arquivo foi encontrado com sucesso 
			if (xmlreq.status == 200)
			{
				result.innerHTML = xmlreq.responseText;
			}
			else
			{
				result.innerHTML = "Erro: " + xmlreq.statusText;
			}
		} 
	}; 
	xmlreq.send();  
}



function Cad_Produto(){
	var result = document.getElementById("result");
	var xmlreq = CriaRequest();
	var data = new FormData();
	
	data.append('nome_produto', document.forms.cad_produto.nome.value);
	data.append('preco_produto', document.forms.cad_produto.preco.value);
	data.append('des_produto', document.forms.cad_produto.descricao.value);	

	result.innerHTML = '<img style="width: 100px" src="view/img/loaders/ajax-loader.gif">';

	xmlreq.open("POST", "model/cad_produto.php", true); 
	xmlreq.timeout = 2000;

	xmlreq.onreadystatechange = function()
	{ 
		// Verifica se foi concluído com sucesso e a conexão fechada 
		(readyState=4) 
		if (xmlreq.readyState == 4) 
		{ 
			// Verifica se o arquivo foi encontrado com sucesso 
			if (xmlreq.status == 200)
			{
				 // if(xmlreq.responseText == 1)
				 // {
					// $('#sucesso').click();
				 // }else
				 // {
					// $('#error').click();
				 // }
				// result.innerHTML = xmlreq.responseText;
				Con_Produto();
				result.innerHTML = "";
            }else{
                result.innerHTML = "Erro: " + xmlreq.statusText;
            }
		} 
	}; 
	xmlreq.send(data);  
}

function Con_Produto(){
	var result = document.getElementById("consulta_produto");
	var xmlreq = CriaRequest();
	
	result.innerHTML = '<img style="width: 100px" src="view/img/loaders/ajax-loader.gif">';

	xmlreq.open("POST", "model/consulta_produto.php", true); 
	xmlreq.timeout = 2000;

	xmlreq.onreadystatechange = function()
	{ 
		// Verifica se foi concluído com sucesso e a conexão fechada 
		(readyState=4) 
		if (xmlreq.readyState == 4) 
		{ 
			// Verifica se o arquivo foi encontrado com sucesso 
			 if (xmlreq.status == 200) {
				result.innerHTML = xmlreq.responseText;
            }else{
                result.innerHTML = "Erro: " + xmlreq.statusText;
            }
		} 
	}; 
	xmlreq.send();  
}



function Cad_Pedido(){
	var result = document.getElementById("result");
	var xmlreq = CriaRequest();
	var data = new FormData();
	
	data.append('id_cliente', document.forms.cad_pedido.id_cliente.value);
	data.append('id_produto', document.forms.cad_pedido.id_produto.value);	

	result.innerHTML = '<img style="width: 100px" src="view/img/loaders/ajax-loader.gif">';

	xmlreq.open("POST", "model/cad_pedido.php", true); 
	xmlreq.timeout = 2000;

	xmlreq.onreadystatechange = function()
	{ 
		// Verifica se foi concluído com sucesso e a conexão fechada 
		(readyState=4) 
		if (xmlreq.readyState == 4) 
		{ 
			// Verifica se o arquivo foi encontrado com sucesso 
			if (xmlreq.status == 200)
			{
				 // if(xmlreq.responseText == 1)
				 // {
					// $('#sucesso').click();
				 // }else
				 // {
					// $('#error').click();
				 // }
				// result.innerHTML = xmlreq.responseText;
				Con_Pedido();
				result.innerHTML = "";
            }else{
                result.innerHTML = "Erro: " + xmlreq.statusText;
            }
		} 
	}; 
	xmlreq.send(data);  
}

function Con_Pedido(){
	var result = document.getElementById("consulta_pedido");
	var xmlreq = CriaRequest();
	
	result.innerHTML = '<img style="width: 100px" src="view/img/loaders/ajax-loader.gif">';

	xmlreq.open("POST", "model/consulta_pedido.php", true); 
	xmlreq.timeout = 2000;

	xmlreq.onreadystatechange = function()
	{ 
		// Verifica se foi concluído com sucesso e a conexão fechada 
		(readyState=4) 
		if (xmlreq.readyState == 4) 
		{ 
			// Verifica se o arquivo foi encontrado com sucesso 
			if (xmlreq.status == 200)
			{
				result.innerHTML = xmlreq.responseText;
            }else{
                result.innerHTML = "Erro: " + xmlreq.statusText;
            }
		} 
	}; 
	xmlreq.send();  
}
