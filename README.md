## Plant tracker JSON API Backend

This repository contains Laravel v8.0 docker configured JSON APIs for plant tracker app.

## Prerequisites
* [Docker](https://docs.docker.com) and [Docker Compose](https://docs.docker.com/compose/) installed

## Local docker setup for mac

Specify environment variables in .env.example. 

For the simplicity no need to modify anything in .env.example, just run following commands to start and stop docker containers.

```bash
# To start containers
./docker/scripts/start

# To stop containers
./docker/scripts/stop
```
Three containers: PHP:8.0-FPM, Nginx and MySQL 8.0 should be started.

Once containers are up and running hit following URLs
* [growthops-backend](http://backend.growthops.localdomain)
* [growthops-get-plants-api](http://backend.growthops.localdomain/api/v1/plants)

Following Laravel framework specific relevant best practices covered:
- Database migration

```bash
# To generate migration
php artisan make:migration create_plants_table

# To run migration
php artisan migrate
```
-  Model, factory and seeder
```bash
# To generate model, factory and seeder
php artisan make:model Plant -fs
```
- API responder trait returning centralised success and error json responses
- Service layer to facilitate data between controller and model
- Request validator for add plant API 
```bash
# To generate request validator
php artisan make:request AddPlantRequest
```
- Unit tests using Pest framework
```bash
# To run unit tests
./vendor/bin/pest
```
- Clean API routes
- Open API specification
```bash
php artisan openapi:generate
```
- PHP type declarations

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
