# Lublin-it-6, Installation guide
I assume that docker is running, up to date and ```docker-compose``` command available globally on your machine  
1. Clone repository via:  
  SSH ```git clone git@github.com:lebedyncrs/lublin-it-6.git``` or  
  HTTPS ```git clon https://github.com/lebedyncrs/lublin-it-6.git```
2. Go to ```laradock``` folder and run ```docker-compose up apache2 mysql redis workspace``` in your terminal
3. Connect to docker container ```docker exec -it laradock_workspace_1 bash``` and run ```composer install```
5. Open ```http://localhost/public``` and ```http://localhost/public/logs``` in your browser
6. Create SQS queue in AWS, If you don't have AWS account create one on https://aws.amazon.com/
7. Created IAM user in AWS console and update SQS_KEY,SQS_SECRET values in .env
8. Run ```php artisan queue:work sqs``` in your console in project root folder
9. Click on Next button on ```http://localhost/public``` and look the logs at the on ```http://localhost/public/logs```
10. Play with it :)