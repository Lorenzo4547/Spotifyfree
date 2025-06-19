FROM php:8.1-apache

# Copia todos os arquivos para o diretório do Apache
COPY . /var/www/html/

# Ativa o mod_rewrite (opcional, se você quiser usar URLs amigáveis)
RUN a2enmod rewrite

# Define porta padrão
EXPOSE 80