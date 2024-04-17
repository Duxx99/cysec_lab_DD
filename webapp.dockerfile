FROM vulnerables/web-dvwa

COPY ./setup.sh /setup.sh
RUN chmod +x /setup.sh
RUN /setup.sh

# Copying changed files
COPY ./login.php /var/www/html/login.php
COPY ./hidden.php /var/www/html/hidden.php
COPY ./robots.txt /var/www/html/robots.txt
COPY ./dummy.php /var/www/html/dummy.php
COPY ./favicon.ico /var/www/html/favicon.ico
COPY ./php.ini /etc/php/7.0/apache2/php.ini

COPY ./vulnerabilities/authbypass /var/www/html/vulnerabilities/authbypass
COPY ./vulnerabilities/upload /var/www/html/vulnerabilities/upload
COPY ./vulnerabilities/idor /var/www/html/vulnerabilities/idor
COPY ./vulnerabilities/open_redirect /var/www/html/vulnerabilities/open_redirect
COPY ./vulnerabilities/xxe /var/www/html/vulnerabilities/xxe
COPY ./vulnerabilities/fi /var/www/html/vulnerabilities/fi
COPY ./vulnerabilities/dt /var/www/html/vulnerabilities/dt
COPY ./security.php /var/www/html/security.php
COPY ./index.php /var/www/html/index.php
COPY ./setup.php /var/www/html/setup.php

COPY dvwa /var/www/html/dvwa

RUN rm /var/www/html/instructions.php
RUN rm /var/www/html/CHANGELOG.md
RUN rm /var/www/html/COPYING.txt
RUN rm /var/www/html/README.md
RUN rm /var/www/html/about.php

RUN mkdir /dev/tcp
# https://stackoverflow.com/questions/15809060/sh-syntax-error-bad-fd-number
# RUN mv /bin/sh /bin/sh.orig
# RUN ln -s /bin/bash /bin/sh

# COPY /dvwa/main.css /var/www/html/dvwa/css/main.css
# COPY ../DVWA/dvwa/images/logo.png /var/www/html/dvwa/images/logo.png

EXPOSE 80