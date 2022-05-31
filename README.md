# MercadoMoveis
Formulário com CRUD completo 

Para funcionar o programa você deve ter em sua maquina o XAMPP. Tendo ele instalado, você ira baixar o zip desse codigo e colocar na pasta htdocs do XAMPP.
Feito isso ira iniciar o control panel do mesmo e dar start nas funções apache e mysql. Antes de poder acessar o programa será necessário importar o banco de dados,
para esse fim você tera que abrir localhost/phpmyadmin no google e criar uma tabela com o nome de formulario_mm, quando criada só clicar em importar e selecionar o arquivo .sql que esta dentro do zip e as tabelas serão importadas.

Terminando tudo isso, basta digitar localhost/MercadoMoveis-master no google e você já tera acesso ao programa completo.

Um formulário para cadastrar membros da equipe, editar e excluir eles.
Além de uma tela de login com permissões para cada usuário, dentre eles:

- Admin: tem permissão para alterar e excluir membros da equipe, juntamente com dar permissão para outros usuarios.
- Login do adm: admin@gmail.com         Senha: mercadomoveisadm


- Funcionário: pode adicionar e editar somente membros, sem a funcção de excluir e visualizar outros usuários.

- Conferente: apenas tendo a função de visualizar os membros da equipe.
