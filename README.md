# Projeto ViaCEP Laravel

Este projeto é uma aplicação Laravel que consome a API do ViaCEP para fornecer informações sobre endereços com base em CEPs (Códigos de Endereçamento Postal). O projeto demonstra o uso de diversos recursos do Laravel, incluindo observadores (Observers), serviços (Services), modelos (Models) e migrações (Migrations).

## Recursos

- **Consumo da API ViaCEP:** O projeto se integra com a API pública do ViaCEP para obter dados de endereços.
- **Observer:** Utilizado para registrar logs sempre que uma consulta é feita ao ViaCEP. O log inclui a data e o CEP pesquisado.
- **Service:** Contém a lógica para fazer a requisição à API do ViaCEP e retornar a resposta formatada.
- **Model:** Representa a tabela de cep onde são armazenadas as consultas realizadas.
- **Migration:** Cria a tabela no banco de dados para armazenar os ceps das consultas.
- **DTO:** Utilizado para padronizar a resposta da API do ViaCep.


## Requisitos

- PHP 8.2 ou superior
- Laravel 10.x
- Composer

## Configuração do Projeto

1. **Clone o Repositório:**

   ```bash
   git clone https://github.com/seu-usuario/https://github.com/wfreitass/Api-Consumo_VIaCEp.git
   cd Api-Consumo_VIaCEp
 

2. **Rode o projeto:**

   ```bash
    php artisan migrate 
    php artisan server