# php-lambda-tester

In CLoud 9 do the following:

```
sudo yum -y update
sudo amazon-linux-extras install -y php7.2

cd php-lambda-tester

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

This installes php and composer, next we will install bref

```
cd code
php ../composer.phar require bref/bref
```

Oh now didn't work neds 1 more dependancy
```
sudo yum install php-mbstring
```

Now back to it:  
```
php ../composer.phar require bref/bref
```

Ensure you have SAM CLI installed

Open the template.yaml update line 27 to align the region.

Then run

```
cd ..
sam deploy --guided
```

Boom done.
