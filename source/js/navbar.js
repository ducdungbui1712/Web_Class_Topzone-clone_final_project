window.onload=function(){
    const search_sp = document.querySelector('.search-sp');
    const bg_sg = document.querySelector('.bg-sg');
    const topzone_delSearch = document.querySelector('.topzone-delSearch');

    search_sp.addEventListener('click', e =>{
        clickSearchSp(e)
    });
    
    bg_sg.addEventListener('click', e => {
        clickOutSideSearch_spBar(e)
    })
    
    topzone_delSearch.addEventListener('click', e =>{
        const sg_search = document.querySelector('.sg-search');
        const search_input = document.querySelector('#search-input');

        search_input.value = '';
        sg_search.classList.remove('active');
        sg_search.style.display = 'none'
        clickOutSideSearch_spBar(e)
    })
    
    
}


// -----------------------------------------SEARCH PRODUCT---------------------------------------------------//
function suggest(value) {
    const list_sg_search = document.querySelector('.list-sg-search');
    const sg_search = document.querySelector('.sg-search');

    if (value.length < 2){
        list_sg_search.innerHTML = '';
        sg_search.style.display = 'none'
        return;
    }


    sg_search.classList.add('active');
    sg_search.style.display = 'block';
    liveSearch(value);
}


function liveSearch(keyword){
    const list_sg_search = document.querySelector('.list-sg-search');
    list_sg_search.innerHTML = '';
    const xhr = new XMLHttpRequest();
    xhr.onload = () => {
        if(xhr.readyState === 4 && xhr.status === 200){
            let response = xhr.responseText;
            response = JSON.parse(response);
            if(response.code === 0){
                let data = response.data;
                data.forEach(element => {
                    const li = document.createElement('li');
                    list_sg_search.appendChild(li);

                    const a = document.createElement('a');
                    a.classList.add('main-contain');
                    a.href = 'detail.php?id='+element['id']
                    li.appendChild(a);

                    const div1 = document.createElement('div');
                    div1.classList.add('img-search');

                    const img = document.createElement('img');
                    img.src = element['thumbnail']
                    div1.appendChild(img);

                    const div2 = document.createElement('div');
                    div2.classList.add('text-img');

                    const span = document.createElement('span');
                    const spanNode = document.createTextNode(element['name'])
                    span.appendChild(spanNode)

                    const p = document.createElement('p');

                    const b = document.createElement('b');
                    const bNode =document.createTextNode(String(element['discountPrice']).replace(/\B(?=(\d{3})+(?!\d))/g, '.') + '₫');
                    b.appendChild(bNode);

                    const del = document.createElement('del');
                    const delNode = document.createTextNode(String(element['price']).replace(/\B(?=(\d{3})+(?!\d))/g, '.') + '₫');
                    del.appendChild(delNode);

                    p.appendChild(b)
                    p.appendChild(del)

                    div2.appendChild(span)
                    div2.appendChild(p)

                    a.appendChild(div1);
                    a.appendChild(div2)
                });
            }
        };
    };
    xhr.open('GET', 'server.php?keyword=' + encodeURIComponent(keyword), true);
    xhr.send();
}

// ----------------------------------------------------------------------------------------------------------//









function clickSearchSp(e){
    const body = document.getElementsByTagName("BODY")[0];
    const logo_topzone = document.querySelector('.logo-topzone');
    const search_cart = document.querySelector('.search-cart');
    const menu_li = document.querySelector('.menu').children;
    const form_search = document.querySelector('.form-search');
    const bg_sg = document.querySelector('.bg-sg');

    body.style.overflow = "hidden";
    logo_topzone.style.display = "none";
    search_cart.style.display = "none";
    for(const item of menu_li){
        item.classList.add("hidden")
    }
    form_search.classList.add("active");
    form_search.style.display = "block";
    form_search.children[0].classList.add("active");
    bg_sg.style.display = "block";
}

function clickOutSideSearch_spBar(e){
    const body = document.getElementsByTagName("BODY")[0];
    const logo_topzone = document.querySelector('.logo-topzone');
    const search_cart = document.querySelector('.search-cart');
    const menu_li = document.querySelector('.menu').children;
    const form_search = document.querySelector('.form-search');
    const bg_sg = document.querySelector('.bg-sg');

    body.style.overflow = "unset";
    logo_topzone.removeAttribute("style");
    search_cart.removeAttribute("style");
    for(const item of menu_li){
        item.classList.remove("hidden");
    }
    form_search.classList.remove("active");
    form_search.style.display = "none";
    form_search.children[0].classList.remove("active");
    bg_sg.style.display = "none";
    
}



