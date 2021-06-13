# php-lambda-tester

In Cloud 9 do the following:

```
sudo yum -y update
sudo amazon-linux-extras install -y php7.2

cd php-lambda-tester

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

This installs PHP 7.2 and composer, next we will install bref and guzzel

```
cd code
php ../composer.phar require bref/bref
php ../composer.phar require guzzlehttp/guzzle
```

Oh no didn't work needs 1 more dependancy
```
sudo yum install php-mbstring
```

Now back to it:  
```
php ../composer.phar require bref/bref
php ../composer.phar require guzzlehttp/guzzle
```

Open the template.yaml update line 27 to align the region. You can look here for avaiable layers: https://runtimes.bref.sh/

Then run

```
cd ..
sam deploy --guided
```

Boom done PHP in lambda