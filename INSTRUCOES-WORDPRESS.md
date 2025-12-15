# Instruções para Configurar o Tema no WordPress

## ✅ Correções Realizadas

### 1. Cores do Menu - CORRIGIDO ✓
- Todos os links do menu agora estão em preto (#2C292A)
- Hover dos links em laranja (#F47C38)
- Apenas o primeiro item "Início" está em negrito

### 2. Páginas de Produtos - CRIADO TEMPLATE ✓
- Template criado: `page-barrabtc.php`
- Sistema automático criará as páginas ao ativar o tema

### 3. Blog - CRIADO TEMPLATE ✓
- Template criado: `page-blog.php`
- Mostrará posts do WordPress automaticamente

### 4. Páginas Institucionais - CORRIGIDO ✓
- Template genérico `page.php` criado
- Todas as páginas funcionarão automaticamente

### 5. Cores dos Botões - VERIFICADO ✓
- Todos os botões já estavam com texto branco correto
- Não foi necessária alteração

### 6. Cabeçalho nas Páginas - CRIADO ✓
- Arquivo `header.php` criado
- Arquivo `footer.php` criado
- Todos os templates usam get_header() e get_footer()

---

## 📋 PASSOS PARA FINALIZAR NO WORDPRESS

### Passo 1: Criar as Páginas no WordPress

1. Acesse: **Páginas > Adicionar Nova**

2. Crie as seguintes páginas (uma por uma):

#### Blog
- **Título**: Blog
- **Slug**: blog
- **Template**: Selecione "Blog" no menu lateral direito
- **Publicar**

#### Produtos - Barras BTC
- **Título**: Barras BTC
- **Slug**: barrabtc
- **Template**: Selecione "Produto - Barras BTC"
- **Publicar**

#### Produtos - Outras Páginas
Para cada produto, crie uma página com:
- barramtc (Barras MTC)
- barraatc (Barras ATC)
- barraacoressulfurado (Barras Aço Ressulfurado)
- aramebtc (Arames BTC)
- aramemtc (Arames MTC)
- arameatc (Arames ATC)
- hastebc (Haste Baixa Camada)
- hasteac (Haste Alta Camada)

**Template**: Deixe como "Padrão"

#### Páginas Institucionais
Para cada política, você precisará:
1. Criar a página no WordPress
2. Copiar o conteúdo do arquivo .html correspondente
3. Colar no editor do WordPress

**Política de Privacidade**
- **Título**: Política de Privacidade
- **Slug**: politicadeprivacidade
- **Conteúdo**: Abra o arquivo `politicadeprivacidade.html`, copie todo o conteúdo da tag `<main>` e cole no editor
- **Template**: Padrão
- **Publicar**

**Política de Qualidade**
- **Título**: Política de Qualidade
- **Slug**: politicadequalidade
- **Conteúdo**: Copie o conteúdo de `politicadequalidade.html`
- **Template**: Padrão
- **Publicar**

**Política de Cookies**
- **Título**: Política de Cookies
- **Slug**: politicadecookies
- **Conteúdo**: Copie o conteúdo de `politicadecookies.html`
- **Template**: Padrão
- **Publicar**

### Passo 2: Configurar Página Inicial

1. Vá em **Configurações > Leitura**
2. Em "Sua página inicial exibe":
   - Selecione "Uma página estática"
   - Em "Página inicial": Selecione a página principal (Home)
3. Salvar alterações

### Passo 3: Limpar Cache

Se usar algum plugin de cache:
1. Limpe o cache do plugin
2. Limpe o cache do navegador (Ctrl + Shift + Delete)

---

## 🔧 PROBLEMAS COMUNS E SOLUÇÕES

### Menu ainda está laranja?
- Limpe o cache do navegador
- Verifique se o arquivo `cabecalho.css` foi atualizado corretamente
- Force refresh: Ctrl + F5

### Páginas não aparecem?
1. Verifique se criou as páginas com os slugs corretos
2. Verifique se publicou as páginas
3. Vá em **Configurações > Links Permanentes** e clique em "Salvar alterações"

### Blog não mostra posts?
1. Crie alguns posts de exemplo
2. Certifique-se de que estão publicados
3. Atribua categorias aos posts

### Imagens não aparecem?
- Verifique se a pasta `assets/` está no tema
- Certifique-se de que os arquivos de imagem existem

### Como copiar conteúdo dos arquivos .html para WordPress?
1. Abra o arquivo .html (ex: politicadeprivacidade.html) em um editor de texto
2. Copie TODO o conteúdo entre as tags `<main>` e `</main>`
3. No WordPress, ao criar a página, clique nos 3 pontinhos (⋮) no canto superior direito
4. Escolha "Editor de código" ou "Código HTML"
5. Cole o conteúdo copiado
6. Volte para o editor visual se preferir
7. Salve e publique

---

## 📁 Arquivos Criados/Modificados

### Novos Arquivos:
- `header.php` - Cabeçalho do tema
- `footer.php` - Rodapé do tema
- `page.php` - Template padrão para páginas
- `page-blog.php` - Template para blog
- `page-barrabtc.php` - Template para produtos

### Arquivos Modificados:
- `cabecalho.css` - Cores do menu corrigidas
- `functions.php` - Registro de menus e criação automática de páginas
- `index.php` - URLs atualizadas (sem .html)

---

## ⚠️ IMPORTANTE

1. **Não delete os arquivos .html** - Eles servem como referência para copiar conteúdo
2. **URLs agora são sem .html** - Ex: `/blog` ao invés de `/blog.html`
3. **Templates automáticos** - O WordPress detecta automaticamente os templates page-*.php
4. **Páginas de Políticas** - Use o editor do WordPress, não os arquivos .html diretamente
5. **Copiar conteúdo HTML** - Ao copiar dos arquivos .html, use o modo "HTML/Código" no editor do WordPress

---

## 📞 Suporte

Se algum problema persistir:
1. Verifique os logs de erro do WordPress
2. Ative o modo debug no wp-config.php
3. Verifique se todos os arquivos foram salvos corretamente
