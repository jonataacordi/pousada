    
    function limpa_formulario_dia() {
            //Limpa valores do formulário de cep.
            document.getElementById('data_out').value=("");
           
    }

    function dia_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('data_out').value=(conteudo.dia);
           
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulario_dia();
            alert("Dia não encontrado.");
        }
    }
        
    function pesquisadia(valor) {

        //Nova variável "dia" somente com dígitos.
        var dia = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (dia != "") {

            //Expressão regular para validar o CEP.
           var validadia = /^[0-9]{2}$/;

            //Valida o formato do CEP.
            if(validadia.test(dia)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('data_out').value="...";
               

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                  script.src = 'json_data_out.php?out=' + dia + '&callback=dia_callback';
				//script.scr = 'https://viacep.com.br/ws/'+ cep +'/json/';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulario_dia();
                alert("Formato de Dia inválido, correto e 0" + dia);
				
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulario_dia();
        }
    };

   // JavaScript Document// JavaScript Document