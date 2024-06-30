   function limpa_formulario() {
      // Limpa valores do formulário de cep.
      document.getElementById('cpf').value = ("");
      document.getElementById('nome').value = ("");
      document.getElementById('fone').value = ("");
      document.getElementById('cep').value = ("");
      document.getElementById('rua').value = ("");
      document.getElementById('cidade').value = ("");
      document.getElementById('uf').value = ("");
      document.getElementById('acompanhantes').value = ("");
      document.getElementById('data_out').value = ("");
      document.getElementById("cad_cliente").innerHTML = "<br>";
      document.getElementById('ap').value = ("");
    }

    function limpa_formulario_cpf() {
      // Limpa valores do formulário de cep.
      document.getElementById('nome').value = ("");
      document.getElementById('fone').value = ("");
      document.getElementById('cidade').value = ("");
      document.getElementById('uf').value = ("");
      document.getElementById('rua').value = ("");
      document.getElementById('acompanhantes').value = ("");
      document.getElementById('data_out').value = ("");
      document.getElementById("cad_cliente").innerHTML = "<br>";
      document.getElementById('ap').value = ("");
    }

    function cpf_callback(conteudo) {
      if (!("erro" in conteudo)) {
        // Atualiza os campos com os valores.
        document.getElementById('nome').value = (conteudo.nome);
        document.getElementById('fone').value = (conteudo.fone);
        document.getElementById('cidade').value = (conteudo.cidade);
        document.getElementById('uf').value = (conteudo.uf);
        document.getElementById('rua').value = (conteudo.rua);
        document.getElementById('cpf').value = (conteudo.cpf);
        document.getElementById('cep').value = (conteudo.cep);
        document.getElementById('cad_cliente').innerHTML = "<br>";
        var input = document.querySelector("#nome");
        var input2 = document.querySelector("#fone");
        input.disabled = false;
        input2.disabled = false;
      } else {
        // CPF não Encontrado.
        var apc = document.getElementById('ap').value;

        Swal.fire({
          title: 'CPF não encontrado!',
          text: "Deseja cadastrar um novo cliente?",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Sim, cadastrar!',
          cancelButtonText: 'Cancelar'
        }).then((result) => {
          if (result.isConfirmed) {
            //var apc = document.getElementById('ap');
            //window.location.href = '?link=form_cliente.php&cpf=' + cpf + '&ap=' + '<?php $ap = $_GET["ap"]; echo $ap?>';
            //window.location.href = '?link=form_cliente.php&cpf=' + window.cpf + '&ap=' + window.apc;
            window.location.href = '?link=form_cliente.php&cpf=' + window.cpf + '&ap=' + apc.value;                       
          }
        });
      }
    }

      function validateCPFInput(input) {
      // Remove caracteres não numéricos
      input.value = input.value.replace(/\D/g, '');

      // Limita a 11 caracteres
      if (input.value.length > 11) {
        input.value = input.value.slice(0, 11);
      }
    }

    function pesquisacpf(valor) {
      // Nova variável "CPF" somente com dígitos.
      var cpf = valor.replace(/\D/g, '');
      
      // define cpf como global
      window.cpf = cpf; 

      // Verifica se campo cep possui valor informado.
      if (cpf != "") {
        // Expressão regular para validar o CPF.
        var validacpf = /^[0-9]{11}$/;

        // Valida o formato do CPF.
        if (validacpf.test(cpf)) {
          // Preenche os campos com "..." enquanto consulta webservice.
          document.getElementById('nome').value = "...";
          document.getElementById('fone').value = "...";
          document.getElementById('cidade').value = "...";
          document.getElementById('uf').value = "...";
          document.getElementById('rua').value = "...";

          var input = document.querySelector("#nome");
          var input2 = document.querySelector("#fone");
          input.disabled = true;
          input2.disabled = true;
          var apc = document.getElementById('ap');
          /*document.getElementById("cad_cliente").innerHTML = 'Cliente não cadastrado! <a href="?link=form_cliente.php&cpf=' + cpf + '&ap=' + apc.value + '" class="w3-botton w3-red w3-border w3-round-large w3-small">&nbsp;<span class="w3-tiny"> Cadastrar </span>&nbsp; </a>';*/

          // Cria um elemento javascript.
          var script = document.createElement('script');

          // Sincroniza com o callback.
          script.src = 'json_cpf.php?Cpf=' + cpf + '&callback=cpf_callback';

          // Insere script no documento e carrega o conteúdo.
          document.body.appendChild(script);

        } else {
          // CPF é inválido.
          limpa_formulario_cpf();
          /*alert("Formato do CPF inválido.\r favor digitar só os numeros!");*/
        }
      } else {
        // CPF sem valor, limpa formulário.
        limpa_formulario_cpf();
      }
    }

// JavaScript Document// JavaScript Document