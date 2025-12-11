// Lógica para o Modo Noturno - Executada Imediatamente

// Função para aplicar o tema (claro ou escuro)
const aplicarTema = () => {
    const modoNoturnoSwitch = document.getElementById('modo-noturno');
    // Verifica se o tema 'dark' está salvo no localStorage
    if (localStorage.getItem('theme') === 'dark') {
        document.documentElement.setAttribute('data-bs-theme', 'dark'); // Aplica o tema escuro
        if (modoNoturnoSwitch) modoNoturnoSwitch.checked = true; // Marca o switch
    } else {
        document.documentElement.setAttribute('data-bs-theme', 'light'); // Aplica o tema claro
        if (modoNoturnoSwitch) modoNoturnoSwitch.checked = false; // Desmarca o switch
    }
};

// Aplica o tema assim que o script é lido, antes do DOM completo ser carregado
aplicarTema();

document.addEventListener('DOMContentLoaded', () => {
    // A lógica do modal permanece aqui, pois depende do DOM estar totalmente carregado.
    const produtoModal = document.getElementById('produtoModal'); // Elemento do Modal
    const variationDropdownButton = document.getElementById('variationDropdown');
    const variationList = document.getElementById('variationList');
    const productImage1 = document.getElementById('productImage1');
    const productImage2 = document.getElementById('productImage2');
    const productImage3 = document.getElementById('productImage3');
    const productDescription = document.getElementById('productDescription');
    const btnVerDetalhes = document.getElementById('btnVerDetalhes');
    let currentProductKey = '';

    // Executa a lógica do modal APENAS se o modal existir na página (ou seja, no index.html)
    if (produtoModal) {
        // Objeto contendo os dados de todos os produtos e suas variações
        const productData = {
            "barras-trefiladas": {
                name: "Barras Trefiladas",
                images: ["assets/barra1.jpg", "assets/barra2.webp", "assets/barra3.jpg"],
                variations: [
                    { name: "BTC - Baixo Teor de Carbono", images: ["assets/barra1.jpg", "assets/barra2.webp", "assets/barra3.jpg"], description: "A barra trefilada se caracterizada por sua alta precisão dimensional, superfície lisa e acabamento superior, obtidos através de um processo a frio que melhora suas propriedades mecânicas, como resistência à tração, escoamento e dureza. Essa combinação de características a torna ideal para aplicações que exigem tolerâncias mais justas e um alto padrão de qualidade. Ideais para aplicações como por exemplo: Fixadores,  Autopeças, Cesto Metálico, Rack Metálico, Molas Helicoidais, Amortecedores e outros.", link: "barrabtc.html" },
                    { name: "MTC - Médio Teor de Carbono", images: ["assets/barra1.jpg", "assets/barra2.webp", "assets/barra3.jpg"], description: "Barras de Médio Teor de Carbono, oferecendo um bom equilíbrio entre resA barra trefilada se caracterizada por sua alta precisão dimensional, superfície lisa e acabamento superior, obtidos através de um processo a frio que melhora suas propriedades mecânicas, como resistência à tração, escoamento e dureza. Essa combinação de características a torna ideal para aplicações que exigem tolerâncias mais justas e um alto padrão de qualidade. Ideais para aplicações como por exemplo: Fixadores,  Autopeças, Cesto Metálico, Rack Metálico, Molas Helicoidais, Amortecedores e outros.", link: "barramtc.html" },
                    { name: "ATC - Alto Teor de Carbono", images: ["assets/barra1.jpg", "assets/barra2.webp", "assets/barra3.jpg"], description: "A barra trefilada se caracterizada por sua alta precisão dimensional, superfície lisa e acabamento superior, obtidos através de um processo a frio que melhora suas propriedades mecânicas, como resistência à tração, escoamento e dureza. Essa combinação de características a torna ideal para aplicações que exigem tolerâncias mais justas e um alto padrão de qualidade. Ideais para aplicações como por exemplo: Fixadores,  Autopeças, Cesto Metálico, Rack Metálico, Molas Helicoidais, Amortecedores e outros.", link: "barraatc.html" },
                    { name: "Aço Ressulfurado", images: ["assets/barra1.jpg", "assets/barra2.webp", "assets/barra3.jpg"], description: "A barra trefilada se caracterizada por sua alta precisão dimensional, superfície lisa e acabamento superior, obtidos através de um processo a frio que melhora suas propriedades mecânicas, como resistência à tração, escoamento e dureza. Essa combinação de características a torna ideal para aplicações que exigem tolerâncias mais justas e um alto padrão de qualidade. Ideais para aplicações como por exemplo: Setor Automotivo, Pinos, Pistões, Bujões, Válvulas, Porcas, Sistemas Hidráulicos e Pneumáticos e outros.", link: "barraacoressulfurado.html" }
                ]
            },
            "hastes-aterramento": {
                name: "Haste de Aterramento",
                images: ["assets/hastebaixa.webp", "assets/haste1.jpg", "assets/haste4.jpg"],
                variations: [
                    { name: "Baixa Camada", images: ["assets/hastebaixa.webp", "assets/haste1.jpg", "assets/haste4.jpg"], description: "Com núcleo sólido de aço-carbono SAE 1010/1020. São revestidas com uma fina camada de 20 mícrons, mantendo a mesma qualidade e o processo do banho de alta camada.Garantem confiabilidade superior em sistemas de aterramento, oferecendo desempenho e durabilidade. São usadas em Sistemas SPDA, padrão, também na geração e transmissão de energia, redes de telecomunicações e aterramento de equipamentos. Garantindo assim maior segurança e proteção no projeto.", link: "hastebc.html" },
                    { name: "Alta Camada", images: ["assets/hastealta.png", "assets/haste1.jpg", "assets/haste4.jpg"], description: "Composta por um núcleo de aço carbono SAE 1010/1020,  revestida de cobre, eletroliticamente, com pureza ≥ 99,9% e camada de 254 mícrons. Conforme ABNT NBR-13571. Garantem confiabilidade superior em sistemas de aterramento, oferecendo desempenho e durabilidade. São usadas em Sistemas SPDA, padrão, também na geração e transmissão de energia, redes de telecomunicações e aterramento de equipamentos. Garantindo assim maior segurança e proteção no projeto.", link: "hasteac.html" }
                ]
            },
            "arames-trefilados": {
                name: "Arames Trefilados",
                images: ["assets/arame1.jpg", "assets/arame2.jpg", "assets/arame3.jpg"],
                variations: [
                    { name: "BTC - Baixo Teor de Carbono", images: ["assets/arame1.jpg", "assets/arame2.jpg", "assets/arame3.jpg"], description: "O arame de aço de alto desempenho é obtido através do processo de trefilação, que eleva suas características mecânicas. Se difere pela uniformidade dimensional e na melhora das propriedades mecânicas (limite de resistência, escoamento e dureza). Este material é fundamental em aplicações que exijam alta performance estrutural e confiabilidade, proporcionando um equilíbrio ideal entre limite de resistência, plasticidade e dureza. Ideais para Displays Aramados, Carrinho de Supermercado, Gradil, Utilidades Domésticas, Linha Branca, Esteiras, Cesto Aramado, Rack Metálico e outros.", link: "aramebtc.html" },
                    { name: "MTC - Médio Teor de Carbono", images: ["assets/arame1.jpg", "assets/arame2.jpg", "assets/arame3.jpg"], description: "O arame de aço de alto desempenho é obtido através do processo de trefilação, que eleva suas características mecânicas. Se difere pela uniformidade dimensional e na melhora das propriedades mecânicas (limite de resistência, escoamento e dureza). Este material é fundamental em aplicações que exijam alta performance estrutural e confiabilidade, proporcionando um equilíbrio ideal entre limite de resistência, plasticidade e dureza. Ideais para Telas, Cabos, Molas, Componentes para Veículos, Pregos e outros.", link: "aramemtc.html" },
                    { name: "ATC - Alto Teor de Carbono", images: ["assets/arame1.jpg", "assets/arame2.jpg", "assets/arame3.jpg"], description: "O arame de aço de alto desempenho é obtido através do processo de trefilação, que eleva suas características mecânicas. Se difere pela uniformidade dimensional e na melhora das propriedades mecânicas (limite de resistência, escoamento e dureza). Ideais para Molas, Arruelas de Pressão, Autopeças e Cabos de Aço.", link: "arameatc.html" }
                ]
            }
        };

        // Evento que é disparado quando o modal é exibido
        produtoModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget; // Botão que acionou o modal
            currentProductKey = button.getAttribute('data-product-key'); // Pega a chave do produto
            const product = productData[currentProductKey];

            if (product) {
                // Atualiza o título do modal
                document.getElementById('produtoModalLabel').textContent = `Detalhes do Produto - ${product.name}`;
                // Reseta o texto do dropdown e o conteúdo do modal
                variationDropdownButton.textContent = "Selecione o produto";
                variationList.innerHTML = '';
                
                // Atualiza as 3 imagens do produto
                if (product.images && product.images.length >= 3) {
                    productImage1.src = product.images[0];
                    productImage2.src = product.images[1];
                    productImage3.src = product.images[2];
                }
                
                productDescription.innerHTML = '<p>Selecione uma variação acima para ver a descrição e a imagem.</p>';
                productDescription.style.display = 'none'; // Esconde a descrição inicial
                btnVerDetalhes.classList.add('hidden-btn'); // Adiciona classe para esconder
                btnVerDetalhes.href = '#'; // Reseta o link do botão

                // Popula o dropdown com as variações do produto selecionado
                product.variations.forEach(variation => {
                    const listItem = document.createElement('li');
                    const anchor = document.createElement('a');
                    anchor.classList.add('dropdown-item');
                    anchor.href = '#'; // O link real será usado pelo botão "Ver Detalhes"
                    anchor.textContent = variation.name;
                    // Armazena os dados da variação nos atributos data- para fácil acesso
                    anchor.dataset.images = JSON.stringify(variation.images);
                    anchor.dataset.description = variation.description;
                    anchor.dataset.link = variation.link;
                    listItem.appendChild(anchor);
                    variationList.appendChild(listItem);
                });
            }
        });

        // Evento para lidar com a seleção de uma variação no dropdown
        variationList.addEventListener('click', function(event) {
            const target = event.target;
            if (target.classList.contains('dropdown-item')) {
                event.preventDefault(); // Previne o comportamento padrão do link
                variationDropdownButton.textContent = target.textContent; // Atualiza o texto do botão do dropdown
                
                // Atualiza as 3 imagens quando uma variação é selecionada
                const images = JSON.parse(target.dataset.images);
                if (images && images.length >= 3) {
                    productImage1.src = images[0];
                    productImage1.alt = `Imagem 1 de ${target.textContent}`;
                    productImage1.style.display = 'block';
                    
                    productImage2.src = images[1];
                    productImage2.alt = `Imagem 2 de ${target.textContent}`;
                    productImage2.style.display = 'block';
                    
                    productImage3.src = images[2];
                    productImage3.alt = `Imagem 3 de ${target.textContent}`;
                    productImage3.style.display = 'block';
                }
                
                productDescription.innerHTML = `<p>${target.dataset.description}</p>`; // Atualiza a descrição
                productDescription.style.display = 'block'; // Mostra a descrição
                btnVerDetalhes.href = target.dataset.link; // Define o link do botão "Ver Detalhes"
                btnVerDetalhes.classList.remove('hidden-btn'); // Remove a classe que esconde
            }
        });
    }

    // Adiciona um listener para o switch de modo noturno
    const modoNoturnoSwitch = document.getElementById('modo-noturno');
    if (modoNoturnoSwitch) {
        // Aplica o tema inicial e o estado do switch quando o DOM estiver pronto
        aplicarTema(modoNoturnoSwitch);

        modoNoturnoSwitch.addEventListener('change', () => {
            localStorage.setItem('theme', modoNoturnoSwitch.checked ? 'dark' : 'light');
            aplicarTema(modoNoturnoSwitch);
        });
    }

    // --- Início da Lógica para o Efeito Hover nas Letras ---

    // Seleciona todas as letras que têm o atributo 'data-letra'
    const letras = document.querySelectorAll('[data-letra]');

    // Cria elementos de frase para cada letra
    const frasesHover = [];
    letras.forEach((letra, index) => {
        const fraseHover = document.createElement('div');
        fraseHover.classList.add('frase-hover');
        if (index === 0) {
            fraseHover.classList.add('frase-fixa'); // Primeira frase fica fixa
        }
        document.body.appendChild(fraseHover);
        frasesHover.push(fraseHover);
    });

    // Função para posicionar a primeira frase
    const posicionarPrimeiraFrase = () => {
        const primeiraLetra = letras[0];
        const primeiraFrase = frasesHover[0];
        if (primeiraLetra && primeiraFrase) {
            const texto = primeiraLetra.getAttribute('data-texto');
            primeiraFrase.textContent = texto;
            primeiraFrase.style.display = 'block';
            const rect = primeiraLetra.getBoundingClientRect();
            const letraSpan = primeiraLetra.querySelector('.texto-letra');
            const letraRect = letraSpan ? letraSpan.getBoundingClientRect() : rect;
            primeiraFrase.style.left = `${letraRect.right + window.scrollX + 10}px`;
            primeiraFrase.style.top = `${letraRect.top + window.scrollY + (letraRect.height / 2) - (primeiraFrase.offsetHeight / 2)}px`;
        }
    };
    
    // Mostra a primeira frase sempre visível
    posicionarPrimeiraFrase();
    
    // Reposiciona ao redimensionar a janela ou ao fazer scroll
    window.addEventListener('resize', posicionarPrimeiraFrase);
    window.addEventListener('scroll', posicionarPrimeiraFrase);

    // Adiciona os eventos de mouse para cada letra
    letras.forEach((letra, index) => {
        const fraseHover = frasesHover[index];
        const isUltimaLetra = index === letras.length - 1;
        const isPrimeiraLetra = index === 0;

        // Evento para quando o mouse entra na letra
        letra.addEventListener('mouseenter', (event) => {
            if (isUltimaLetra) {
                // Última letra (último O) - mostra todas as frases
                letras.forEach((l, i) => {
                    if (i > 0) { // Não precisa reposicionar a primeira que já está fixa
                        const texto = l.getAttribute('data-texto');
                        const frase = frasesHover[i];
                        if (texto) {
                            frase.textContent = texto;
                            frase.style.display = 'block';
                            const letraSpan = l.querySelector('.texto-letra');
                            const letraRect = letraSpan ? letraSpan.getBoundingClientRect() : l.getBoundingClientRect();
                            frase.style.left = `${letraRect.right + window.scrollX + 10}px`;
                            frase.style.top = `${letraRect.top + window.scrollY + (letraRect.height / 2) - (frase.offsetHeight / 2)}px`;
                        }
                    }
                });
            } else if (!isPrimeiraLetra) {
                // Outras letras - comportamento normal
                const texto = letra.getAttribute('data-texto');
                if (texto) {
                    fraseHover.textContent = texto;
                    fraseHover.style.display = 'block';
                    const letraSpan = letra.querySelector('.texto-letra');
                    const letraRect = letraSpan ? letraSpan.getBoundingClientRect() : letra.getBoundingClientRect();
                    fraseHover.style.left = `${letraRect.right + window.scrollX + 10}px`;
                    fraseHover.style.top = `${letraRect.top + window.scrollY + (letraRect.height / 2) - (fraseHover.offsetHeight / 2)}px`;
                }
            }
        });

        // Evento para quando o mouse sai da letra
        letra.addEventListener('mouseleave', () => {
            if (isUltimaLetra) {
                // Esconde todas as frases exceto a primeira
                frasesHover.forEach((frase, i) => {
                    if (i > 0) {
                        frase.style.display = 'none';
                    }
                });
            } else if (!isPrimeiraLetra) {
                fraseHover.style.display = 'none';
            }
        });
    });
    // --- Fim da Lógica para o Efeito Hover nas Letras ---
});

