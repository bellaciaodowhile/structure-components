    (function () {
        'use strict';
        function reloadElements() {
            const allSubLinksPageCurrent = [...document.querySelectorAll('.components_subtitle')];
        const linkOutlined = document.querySelector('.components_main_outlined_items')

        linkOutlined.innerHTML = '<div class="components_main_outlined_items_marker"></div>';
        allSubLinksPageCurrent.map((title, index) => {
            let link = title.querySelector('.components_sublink');
            linkOutlined.innerHTML += /* html */ `
            <div class="components_main_outlined_items_item">
                <a href="${ link.href }" class="components_main_outlined_items_item_link">
                    ${ title.textContent.replace('#','') }
                </a>
            </div>`
            link.onclick = (e) => {
                e.preventDefault();
                [...document.querySelectorAll('.components_main_outlined_items_item_link')].map(x => {
                    if (x.textContent.trim() == link.parentElement.textContent.replace('#', '').trim()) {
                        [...document.querySelectorAll('.components_main_outlined_items_item_link')].map(x => x.classList.remove('components_main_outlined_items_item_link_active'))
                        x.classList.add('components_main_outlined_items_item_link_active')
                        document.querySelector('.components_main_outlined_items_marker').style.top = x.parentElement.offsetTop + 'px'
                        document.querySelector('.components_main_outlined_items_marker').style.opacity = '1'
                    }
                })
                window.scrollTo({
                    top: link.parentElement.offsetTop,
                    left: 0,
                    behavior: 'smooth',
                })
            }
        });

        let allLinksOutlined = [...document.querySelectorAll('.components_main_outlined_items_item_link')];
        let markerOutlined = document.querySelector('.components_main_outlined_items_marker');
        allLinksOutlined.map((link, index) => {
            link.onclick = (e) => {
                e.preventDefault();
                console.log('Hola vale')
                let title = link.textContent.trim()
                allLinksOutlined.map(x => x.classList.remove('components_main_outlined_items_item_link_active'))
                link.classList.add('components_main_outlined_items_item_link_active')
                markerOutlined.style.top = link.parentElement.offsetTop + 'px'
                markerOutlined.style.opacity = '1'

                allSubLinksPageCurrent.map(subLink => {
                    let titleSubLink = subLink.textContent.replace('#', '').trim()
                    if (titleSubLink == title) {
                        window.scrollTo({
                            top: subLink.offsetTop,
                            left: 0,
                            behavior: 'smooth',
                        })
                    }
                })
            }
        });
        }
        reloadElements()
        // Load data components
        const allLinksComponents = [...document.querySelectorAll('.components_aside_item')];
        allLinksComponents.map((link, index) => {
            link.onclick = (e) => {
                e.preventDefault();
                let component = link.textContent.trim().toLowerCase();
                loadContent(component)
            }
        })



        function loadContent(folder) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.querySelector('.components_main_content').innerHTML = this.responseText;
                    // console.log(this.responseText)
                    reloadElements();
                    let script = document.createElement('script')
                    script.src = 'assets/js/prism.js'
                    document.body.appendChild(script);
                    [...document.querySelectorAll('script')].map(src => {
                        // console.log(link.href.split('/'))
                        let arrSrc = src.src.split('/');
                        if (arrSrc[arrSrc.length - 1] == 'prism.js') {
                            src.remove();
                            script.src = 'assets/js/prism.js';
                            document.body.appendChild(script);
                        }
                    });


                    // css component
                    let cssComponent = document.createElement('link');
                    cssComponent.rel = 'stylesheet'
                    cssComponent.href = 'components/' + folder + '/index.css';
                    document.head.appendChild(cssComponent);
                    [...document.querySelectorAll('link')].map(link => {
                        // console.log(link.href.split('/'))
                        let arrLink = link.href.split('/');
                        if (arrLink[arrLink.length - 1] == 'index.css') {
                            link.remove();
                            cssComponent.src = 'components/' + folder + '/index.css';
                            document.head.appendChild(cssComponent)
                        }
                    });
                    // script component
                    let scriptComponent = document.createElement('script')
                    scriptComponent.src = 'components/' + folder + '/index.js';
                    document.body.appendChild(scriptComponent);
                    [...document.querySelectorAll('script')].map(src => {
                        // console.log(src.src.split('/'))
                        let arrSrc = src.src.split('/');
                        if (arrSrc[arrSrc.length - 1] == 'index.js') {
                            src.remove();
                            scriptComponent.src = 'components/' + folder + '/index.js';
                            document.body.appendChild(scriptComponent)
                        }
                    });
                }
            };
            xhttp.open("GET", "components/"+ folder +"/index.php", true);
            xhttp.send();
        }
        loadContent('inicio');
        
        // Trigger menu aside
        const triggerMenuAside = document.querySelector('.components_trigger_aside');
        const aside = document.querySelector('.components_aside')
        document.onclick = (e) => {
            if (aside.classList.contains('components_aside--active')) {
                if (!aside.contains(e.target)){
                    aside.classList.toggle('components_aside--active')
                }
            } else {
                if (triggerMenuAside.contains(e.target)) {
                    aside.classList.toggle('components_aside--active')
                    console.log('Hola')
                }
            }
        }

    }());