# Sistema de Cadastro da Pousada Quinta do Ypuã

Este é um sistema simples e interativo desenvolvido para gerenciar o cadastro e monitoramento dos clientes da pousada Quinta do Ypuã. O sistema permite realizar reservas, check-ins e check-outs, além de monitorar a disponibilidade dos quartos de forma visual e dinâmica.

## Tecnologias Utilizadas

- ![HTML](images/telas/html_icon.png) **HTML**: Utilizado para estruturar o conteúdo das páginas web.
- ![CSS](images/telas/css_icon.png) **CSS**: Utilizado para estilizar e melhorar a aparência das páginas web.
- ![JavaScript](images/telas/js_icon.png) **JavaScript (JS)**: Utilizado para adicionar interatividade às páginas web.
- ![PHP](images/telas/php_icon.png) **PHP**: Utilizado para o desenvolvimento do backend do sistema, incluindo a lógica de negócio e a integração com o banco de dados.

## Funcionalidades

- **Reserva de Quartos**: Permite que os funcionários cadastrem novas reservas.
- **Check-in**: Permite registrar a entrada dos hóspedes.
- **Check-out**: Permite registrar a saída dos hóspedes.
- **Monitoramento de Quartos**: Exibe o total de quartos, a quantidade disponível, a quantidade reservada e a quantidade ocupada, utilizando cores diferentes para facilitar a visualização.

## API de CEP

O sistema integra uma API de CEP para identificar automaticamente o CEP fornecido pelo usuário, facilitando o preenchimento de dados de endereço.

## Estrutura do Sistema

### Cabeçalho

- Contém o logotipo da pousada.
- Ícones de notificação e e-mail para implementação.
- Campo de busca dinâmico para pesquisar hóspedes por nome ou CPF.

### Menu Lateral

- **Dashboard**: Página inicial do sistema.
- **Checkin**: Página para realizar check-ins.
- **Checkout**: Página para realizar check-outs.
- **Reservas**: Página para gerenciar reservas. Nessa página fica aguardando a realização do checkin.
- **Hóspedes**: Página para listar todos os hóspedes cadastrados.
- **Sair**: Opção para fazer logout do sistema.

### Conteúdo Principal

- Exibe informações sobre a disponibilidade dos quartos de forma visual.
- Área dinâmica que carrega as páginas selecionadas no menu lateral.

## Como Executar o Sistema

1. Clone o repositório para o seu servidor local.
2. Certifique-se de ter o PHP e um servidor web (como Apache ou Nginx) instalados.
3. Importe o banco de dados necessário para o sistema (arquivo `.sql`).
4. Configure as credenciais de conexão com o banco de dados no arquivo `conexao.php`.
5. Acesse o sistema através do navegador.

## Exemplos de Telas

Insira aqui capturas de tela do sistema para demonstrar seu funcionamento e aparência.

1. **Tela de Login**
   
   ![Tela de Login](https://github.com/jonataacordi/pousada/assets/20300806/bd44787e-e71a-4cd1-b264-a8e4ed02bdb9)

2. **Dashboard**
   
   ![Dashboard](https://github.com/jonataacordi/pousada/assets/20300806/b3d28610-cd7a-4a41-9412-028df4b80003)

3. **Reserva de Quartos**
   
   ![Reserva de Quartos](https://github.com/jonataacordi/pousada/assets/20300806/2f585995-de29-4989-bc80-f999016641f6)

4. **Check-in realizado**
   
   ![Check-in](https://github.com/jonataacordi/pousada/assets/20300806/ae4c14a0-3f51-4bbc-979f-6d717ae69ec7)

5. **Check-out**
   
   ![Check-out](https://github.com/jonataacordi/pousada/assets/20300806/e191a4c7-8996-47b2-a33e-1ef87f004e03)

6. **Lista de Hóspedes**
   
   ![Lista de Hóspedes](https://github.com/jonataacordi/pousada/assets/20300806/fc215d0a-6b54-4044-9d8e-e1a83e368a26)

## Contribuição

Se você deseja contribuir para o desenvolvimento deste sistema, sinta-se à vontade para abrir uma _issue_ ou enviar um _pull request_ com suas sugestões e melhorias.

## Licença

Este projeto é de código aberto e está licenciado sob a [MIT License](LICENSE).

---

Desenvolvido com 💖 pela equipe da Pousada Quinta do Ypuã.

