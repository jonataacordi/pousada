    
    function limpa_formulario_cpf() {
            //Limpa valores do formulário de cep.
            document.getElementById('nome').value=("");
           document.getElementById('fone').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('rua').value=("");
			//document.getElementById('cpf').value=("");
			document.getElementById('acompanhantes').value=("");
			//document.getElementById('data_in').value=("");
			document.getElementById('data_out').value=("");
			//document.getElementById('cep').value=("");
			document.getElementById("cad_cliente").innerHTML = "<br>";
			document.getElementById('ap').value=("");
			//document.getElementById('situacao').value=("");
			
    }

    function cpf_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('nome').value=(conteudo.nome);
            document.getElementById('fone').value=(conteudo.fone);
            document.getElementById('cidade').value=(conteudo.cidade);
            document.getElementById('uf').value=(conteudo.uf);
            document.getElementById('rua').value=(conteudo.rua);
			document.getElementById('cpf').value=(conteudo.cpf);
			//document.getElementById('acompanhantes').value=(conteudo.acompanhantes);
			//document.getElementById('data_in').value=(conteudo.data_in);
			//document.getElementById('horas').value=(conteudo.horas);
			document.getElementById('cep').value=(conteudo.cep);
			document.getElementById('cad_cliente').innerHTML = "<br>";
			//document.getElementById('ap').value=(ap);
			//document.getElementById('situacao').value=(situacao);
			var input = document.querySelector("#nome");
			var input2 = document.querySelector("#fone");
				input.disabled = false;
				input2.disabled = false;
        } //end if.
        else {
            
			//CPF não Encontrado.
            //limpa_formulario_cpf();
          //alert("CPF não encontrado.");
			//window.location="?link=form_cliente.php&ap=" ;
        }
    }
	    
    function pesquisacpf(valor) {

        //Nova variável "CPF" somente com dígitos.
        var cpf = valor.replace(/\D/g, '');
         
        //Verifica se campo cep possui valor informado.
        if (cpf != "") {
  
              //Expressão regular para validar o CPF.
            
			var validacpf = /^[0-9]{11}$/;
			
            //Valida o formato do CEP.
            if(validacpf.test(cpf)) {
                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('nome').value="...";
                document.getElementById('fone').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                document.getElementById('rua').value="...";
				//document.getElementById('cpf').value="...";
				//document.getElementById('acompanhantes').value="...";
				//document.getElementById('data_in').value="...";
				//document.getElementById('horas').value="...";
				//document.getElementById('cep').value="...";
				//document.getElementById('ap').value= "...";
				//document.getElementById('situacao').value="...";
				var input = document.querySelector("#nome");
				var input2 = document.querySelector("#fone");
				input.disabled = true;
				input2.disabled = true;
				var apc = document.getElementById('ap');
				document.getElementById("cad_cliente").innerHTML = 'Cliente não cadastrado! <a href="?link=form_cliente.php&cpf=' + cpf + '&ap='+ apc.value + '" class="w3-botton w3-red w3-border w3-round-large w3-small">&nbsp;<span class="w3-tiny"> Cadastrar </span>&nbsp; </a>';
							 
                //Cria um elemento javascript.
                var script = document.createElement('script');
                
                //Sincroniza com o callback.
                  script.src = 'json_cpf.php?Cpf=' + cpf + '&callback=cpf_callback';
				//script.scr = 'https://viacep.com.br/ws/'+ cep +'/json/';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulario_cpf();
                alert("Formato do CPF inválido.\r favor digitar só os numeros!");
                //swal("Erro!", "Formato do CPF inválido.\r favor digitar só os numeros!", "error");
				
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulario_cpf();
        }
    };

// JavaScript Document// JavaScript Document