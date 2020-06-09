# Projeto PHP - Conexão Filmes

##### **Descrição:** Um site que permite você salvar e remover os filmes que estão disponíveis na plataforma.

## Informações dos Integrantes do Grupo
#### **Nome:** Beatriz Silva de Souza e Thiago Almeida da Silva
#### **Mátricula:** 201918794 e 201919985

#### Site online: http://projetofaculdade.unaux.com/index.html

## Utilização Do Banco De Dados

1. O banco de dados utilizado foi o: https://www.freesqldatabase.com/
2. Para acessar o banco:
	- **Host:** sql3.freesqldatabase.com
	- **Database name:** sql3347081
	- **Database user:** sql3347081
	- **Database password:** A8wU4hDHvj
3. O banco de dados tem duas tabelas: 
	- clientes(email, senha)
	- favoritos(filmes, nome, data, genero, cliente_email)
    	- filmes: Nome do filme
    	- nome: nome da imagem
    	- data: data do filme
    	- genero: genero do filme
    	- cliente_email: relaciona com o email da conta
4. O comando para cadastrar um novo usuário:
	- INSERT INTO clientes(email, senha) VALUES('$email', '$senha')
5. O comando utilizado para verificar se o usuário existe no banco:
	- SELECT * FROM clientes WHERE email='$email' AND senha='$senha'
6. O comando para inserir os filmes no banco:
	- INSERT INTO favoritos(filmes, nome, data, genero, clientes_email) VALUES('$nome', '$imagem', '$data', '$genero', '$logado')
7. O comando para remover os filmes adicionados:
	- DELETE FROM favoritos WHERE filmes='$nome[$i]' AND clientes_email='$logado'
8. O comando para alterar a senha:
	- UPDATE clientes SET senha='$senha2' WHERE email='$logado'
9. O comando para remover uma conta:
	- DELETE FROM clientes WHERE email='$logado'
