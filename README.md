# Lublin-it-6, Installation guide
I assume that docker is running, up to date and ```docker-compose``` command available globally on your machine  
1. Clone repository via:  
  SSH ```git clone git@github.com:lebedyncrs/lublin-it-6.git``` or  
  HTTPS ```git clon https://github.com/lebedyncrs/lublin-it-6.git```
2. Run ```./build.sh```
3. Open ```http://localhost/public``` and ```http://localhost/public/logs``` in your browser
4. Run ```docker-compose exec workspace php artisan queue:work database``` in your console in project ```laradock``` folder
5. Click on 'Next' button on ```http://localhost/public``` and look the logs at the on ```http://localhost/public/logs```
6. Play with it :)