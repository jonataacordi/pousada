    /*------------------ Valida Fone -----------------------*/

      function validateFone(input) {
      // Remove caracteres não numéricos
      input.value = input.value.replace(/\D/g, '');

      // Limita a 11 caracteres
      if (input.value.length > 11) {
        input.value = input.value.slice(0, 11);
      }
    }

    function pesquisaFone(valor) {
      // Nova variável "fone" somente com dígitos.
      var fone = valor.replace(/\D/g, '');
      
      // define a variável fone como global
      window.fone = fone; 

      // Verifica se campo fone possui valor informado.
      if (fone != "") {
        // Expressão regular para validar o telefone.
        var validaFone = /^[0-9]{11}$/;

        // Valida o formato do telefone.
        if (validaFone.test(fone)) {
          // Define ou preenche o campo (fone) com "..." ou "readonly" quando na consulta no webservice o telefone já existir.

          document.getElementById('fone').setAttribute('readonly', true);
          //document.getElementById('fone').value = "...";
    

          var input = document.querySelector("#nome");
          var input2 = document.querySelector("#fone");
          input.disabled = true;
          input2.disabled = true;
          var apc = document.getElementById('ap');

          // Cria um elemento javascript.
          var script = document.createElement('script');

          // Sincroniza com o callback.
          script.src = 'json_cpf.php?Cpf=' + cpf + '&callback=cpf_callback';

          // Insere script no documento e carrega o conteúdo.
          document.body.appendChild(script);

        } 
      } 
    }