# Solução para Erro 502 Bad Gateway

## 🚨 O que é o erro 502?
O servidor nginx não consegue se comunicar com o PHP/WordPress.

## ✅ Soluções (Tente na ordem)

### Solução 1: Reiniciar Serviços (MAIS COMUM)

#### No Trello/Servidor Linux:
```bash
# Reiniciar PHP-FPM
sudo systemctl restart php-fpm
# ou se for PHP 8.x
sudo systemctl restart php8.1-fpm
# ou PHP 7.x
sudo systemctl restart php7.4-fpm

# Reiniciar Nginx
sudo systemctl restart nginx

# Verificar status
sudo systemctl status php-fpm
sudo systemctl status nginx
```

#### Se usar XAMPP/Local WP no Windows:
1. Abra o painel de controle do XAMPP
2. Pare Apache e MySQL
3. Inicie Apache e MySQL novamente

#### Se usar Local by Flywheel:
1. Clique com botão direito no site
2. Escolha "Restart"
3. Ou: Stop → Start

---

### Solução 2: Verificar PHP está Rodando

```bash
# Ver se PHP-FPM está rodando
ps aux | grep php

# Se não estiver, iniciar
sudo systemctl start php-fpm
```

---

### Solução 3: Verificar Logs de Erro

```bash
# Ver log do nginx
sudo tail -f /var/log/nginx/error.log

# Ver log do PHP
sudo tail -f /var/log/php-fpm/error.log
```

---

### Solução 4: Aumentar Timeout do Nginx

Edite o arquivo de configuração do nginx:

```bash
sudo nano /etc/nginx/nginx.conf
```

Adicione/modifique dentro do bloco `http`:

```nginx
http {
    ...
    fastcgi_connect_timeout 300;
    fastcgi_send_timeout 300;
    fastcgi_read_timeout 300;
    ...
}
```

Salve e reinicie:
```bash
sudo systemctl restart nginx
```

---

### Solução 5: Verificar Memória do Servidor

```bash
# Ver uso de memória
free -m

# Ver processos pesados
top
```

Se estiver sem memória:
```bash
# Limpar cache
sudo sync; echo 3 > /proc/sys/vm/drop_caches
```

---

### Solução 6: Problema no wp-config.php

Verifique se o arquivo `wp-config.php` está correto:

```php
define('DB_NAME', 'nome_do_banco');
define('DB_USER', 'usuario');
define('DB_PASSWORD', 'senha');
define('DB_HOST', 'localhost'); // ou '127.0.0.1'
```

---

### Solução 7: Desativar Todos os Plugins

Via FTP ou painel de arquivos, renomeie a pasta:
```
wp-content/plugins → wp-content/plugins-disabled
```

Tente acessar o site. Se funcionar, o problema é algum plugin.

---

### Solução 8: Verificar Permissões

```bash
# Ajustar permissões
sudo chown -R www-data:www-data /caminho/para/wordpress
sudo find /caminho/para/wordpress -type d -exec chmod 755 {} \;
sudo find /caminho/para/wordpress -type f -exec chmod 644 {} \;
```

---

## 🎯 Diagnóstico Rápido

Execute estes comandos para descobrir o problema:

```bash
# 1. PHP está rodando?
sudo systemctl status php-fpm

# 2. Nginx está rodando?
sudo systemctl status nginx

# 3. Há erros recentes?
sudo tail -20 /var/log/nginx/error.log

# 4. PHP consegue se conectar ao banco?
mysql -u usuario -p nome_do_banco
```

---

## 📞 Se Nada Funcionar

1. **Verifique com seu provedor de hospedagem** - Pode ser problema deles
2. **Restaure um backup** - Se tinha um site funcionando antes
3. **Verifique se o servidor não está sobrecarregado** - CPU/RAM/Disco

---

## ✅ Após Resolver

1. Limpe o cache do navegador (Ctrl + Shift + Delete)
2. Teste em modo anônimo
3. Limpe cache do WordPress (se usar plugin de cache)
