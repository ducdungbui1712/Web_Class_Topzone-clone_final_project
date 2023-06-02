window.addEventListener('load', function(){

    //SLIDER DETAIL
    DetailCarousel();

    
    comboDetailCarousel()

    //PRODUCT DESCRIPTION
    productDescrip();
})











function DetailCarousel(){
    const slider_detail_owl_next = document.querySelector('#slider-detail .owl-next');
    const slider_detail_owl_prev = document.querySelector('#slider-detail .owl-prev');
    const slider_detail_owl_stage = document.querySelector('#slider-detail .owl-stage');
    const slider_detail_owl_dots = document.querySelector('#slider-detail .owl-dots');
    const slider_detail_owl_dots_buttons = document.querySelectorAll('#slider-detail .owl-dots button');
    const slider_detail_owl_dot_next = document.querySelector('#slider-detail .next');
    const slider_detail_owl_dot_prev = document.querySelector('#slider-detail .prev');


    slider_detail_owl_next.addEventListener('click', () =>{
        let offset = parseInt(getTranslate3d(slider_detail_owl_stage)[0].replace('px','')) 
        offset -= 600;
        if(offset < 0){
            slider_detail_owl_prev.classList.remove("disabled")
        }
        if(offset == -(slider_detail_owl_stage.children.length*600 - 600)){
            slider_detail_owl_next.classList.add("disabled")
        }


        moveSliderDetail('.thubnail-slide.full .owl-stage', offset + 'px');
        moveSliderDetail_OwlDotsActive(offset);
    })

    slider_detail_owl_prev.addEventListener('click', () =>{
        let offset = parseInt(getTranslate3d(slider_detail_owl_stage)[0].replace('px','')) 
        offset += 600 ;
        if(offset == 0){
            slider_detail_owl_prev.classList.add("disabled")
        }
        if(offset > -(slider_detail_owl_stage.children.length*600)){
            slider_detail_owl_next.classList.remove("disabled")
        }


        moveSliderDetail('.thubnail-slide.full .owl-stage', offset + 'px');
        moveSliderDetail_OwlDotsActive(offset);
    })

    slider_detail_owl_dots_buttons.forEach(function(button,index){
        button.addEventListener('click', () =>{
            let offset = -(600*index);
            
            if(offset < 0){
                slider_detail_owl_prev.classList.remove("disabled")
            }
            if(offset == -(slider_detail_owl_stage.children.length*600 - 600)){
                slider_detail_owl_next.classList.add("disabled")
            }
            if(offset == 0){
                slider_detail_owl_prev.classList.add("disabled")
            }
            if(offset > -(slider_detail_owl_stage.children.length*600)){
                slider_detail_owl_next.classList.remove("disabled")
            }if(index == slider_detail_owl_dots.children.length - 1){
                slider_detail_owl_next.classList.add("disabled")
            }
            moveSliderDetail('.thubnail-slide.full .owl-stage',offset + 'px');
            moveSliderDetail_OwlDotsActive(offset);
        }) 
    })

    slider_detail_owl_dot_next.addEventListener('click', () =>{
        var maxScrollLeft = slider_detail_owl_dots.scrollWidth - slider_detail_owl_dots.clientWidth;
        slider_detail_owl_dots.scrollLeft += maxScrollLeft;

        if(parseInt(slider_detail_owl_dots.scrollLeft.toFixed()) == maxScrollLeft){
            slider_detail_owl_dot_next.classList.add('disabled')
            slider_detail_owl_dot_prev.classList.remove('disabled')
        }

    })

    slider_detail_owl_dot_prev.addEventListener('click', () =>{
        var maxScrollLeft = slider_detail_owl_dots.scrollWidth - slider_detail_owl_dots.clientWidth;
        slider_detail_owl_dots.scrollLeft -= maxScrollLeft;
        
        if(parseInt(slider_detail_owl_dots.scrollLeft.toFixed()) == 0){
            slider_detail_owl_dot_prev.classList.add('disabled')
            slider_detail_owl_dot_next.classList.remove('disabled')
        }
    })

    slider_detail_owl_dots.addEventListener('mousedown', (e) => {
        isDown = true;
        startX = e.pageX - slider_detail_owl_dots.offsetLeft;
        scrollLeft = slider_detail_owl_dots.scrollLeft;
    });

    slider_detail_owl_dots.addEventListener('mouseleave', () => {
        isDown = false;
    });

    slider_detail_owl_dots.addEventListener('mouseup', () => {
        isDown = false;
    });

    slider_detail_owl_dots.addEventListener('mousemove', (e) => {
        if(!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider_detail_owl_dots.offsetLeft;
        const walk = (x - startX) * 3; //scroll-fast
        var maxScrollLeft = slider_detail_owl_dots.scrollWidth - slider_detail_owl_dots.clientWidth;

        slider_detail_owl_dots.scrollLeft = scrollLeft - walk;

        if(parseInt(slider_detail_owl_dots.scrollLeft.toFixed()) > 0){
            slider_detail_owl_dot_prev.classList.remove('disabled')
        }
        if(parseInt(slider_detail_owl_dots.scrollLeft.toFixed()) == 0){
            slider_detail_owl_dot_prev.classList.add('disabled')
        }
        if(parseInt(slider_detail_owl_dots.scrollLeft.toFixed()) == maxScrollLeft){
            slider_detail_owl_dot_next.classList.add('disabled')
        }if(parseInt(slider_detail_owl_dots.scrollLeft.toFixed()) < maxScrollLeft){
            slider_detail_owl_dot_next.classList.remove('disabled')
        }
    });

    function moveSliderDetail_OwlDotsActive(offset){
        const listImage_owl_dots = document.querySelector('#slider-detail .owl-dots');
        let i = Math.abs(offset/600)
            for(let j = 0; j < listImage_owl_dots.children.length; j++){
                if(j != i){
                    listImage_owl_dots.children[j].classList.remove('active')
                }
            }
            listImage_owl_dots.children[i].classList.add('active')
    }
}

function pricePromoLocal(x){
    const store_province = document.querySelector('.store-province');
    x.classList.toggle('active')
    if(x.classList.contains('active')){
        store_province.style.display = "block"
    }else{
        store_province.style.display = "none"
    }
}

function ShowRuleCampaign(x, element) {
    const vnpayqr = document.getElementById('vnpayqr');
    const eximbank = document.getElementById('eximbank');
    const ocb = document.getElementById('ocb');
    if (x.classList.contains('act')) {
        x.classList.remove('act');
        document.querySelector('.crule').classList.toggle('hide');
    } else {
        document.querySelector('.crule').classList.remove('hide');
        x.classList.toggle('act');
        if(element === 'vnpayqr'){
            document.querySelector('.crule').innerHTML = vnpayqr.innerHTML;
        }
        if(element === 'eximbank'){
            document.querySelector('.crule').innerHTML = eximbank.innerHTML;
        }
        if(element === 'ocb'){
            document.querySelector('.crule').innerHTML = ocb.innerHTML;
        }   
    }
}
function HideRuleCampaign(x) {
    x.classList.remove('act');
    document.querySelector('.crule').classList.toggle('hide');
}

function ActiveOption(x){
    const campaign_option = document.querySelectorAll('.campaign-option');
    if(x.classList.contains('active')){
        x.classList.remove('active')
        document.querySelector('a.btn-camp').remove();
        document.querySelector('.buy-sp .btn-buy').removeAttribute("style");
    }else{
            for(let i = 0; i < campaign_option.length; i++){
                if(campaign_option[i].classList.contains('active')){
                    campaign_option[i].classList.remove('active')
                    document.querySelector('a.btn-camp').remove();
                }
            }
            x.classList.add('active');
            var newButton = document.createElement('a');
            var newButton_innerText  = document.createTextNode('Mua ngay qua ' + String(x.getAttribute('data-campaignname')));
            newButton.appendChild(newButton_innerText );
            newButton.href = "#";
            newButton.className = "btn-camp btn-buy full"
    
            document.querySelector('.buy-sp .btn-buy').style.display = "none";
            document.querySelector('.buy-sp').insertBefore(newButton,document.querySelector('.buy-sp').firstChild);
    }
}

function getTranslate3d (el) {
    var values = el.style.transform.split(/\w+\(|\);?/);
    if (!values[1] || !values[1].length) {
        return [];
    }
    return values[1].split(/,\s?/g);
}

function moveSliderDetail(selector, offset){
    const owl_stage = document.querySelector(selector)
    owl_stage.style.transform = 'translate3d(' + offset + ', 0, 0)';
    owl_stage.style.transition = 'all 0s ease 0s';
}


function comboDetailCarousel(){
    const descrip_owl_next = document.querySelector('#combo-detail .owl-next');
    const descrip_owl_prev = document.querySelector('#combo-detail .owl-prev');
    const descrip_owl_stage_outer = document.querySelector('#combo-detail .owl-stage-outer');
    const descrip_owl_stage = document.querySelector('#combo-detail .owl-stage');   
    let move = 0

    descrip_owl_next.addEventListener('click', () =>{
        move = parseInt(descrip_owl_stage.style.left)
        descrip_owl_stage.style.left = `${move - 1200}px`;
        checkBoundary()
    })

    descrip_owl_prev.addEventListener('click', () =>{
        move = parseInt(descrip_owl_stage.style.left)
        descrip_owl_stage.style.left = `${move + 1200}px`;
        checkBoundary()
    })

    let pressed = false;
    let startX;
    let x;
    
    descrip_owl_stage_outer.addEventListener('mousedown', (e) => {
        pressed = true;
        startX = e.pageX - descrip_owl_stage.offsetLeft;
    });

    descrip_owl_stage_outer.addEventListener('mouseleave', () => {
        pressed = false;
    });

    descrip_owl_stage_outer.addEventListener('mouseup', () => {
        pressed = false;
    });

    descrip_owl_stage_outer.addEventListener('mousemove', (e) => {
        if(!pressed) return;
        e.preventDefault();
        x = e.pageX;
        const walk = x - startX ;
        descrip_owl_stage.style.left = `${walk}px`;
        checkBoundary()
    });

    function checkBoundary(){
        let outer = descrip_owl_stage_outer.getBoundingClientRect();
        let inner = descrip_owl_stage.getBoundingClientRect();

        if(parseInt(descrip_owl_stage.style.left) > 0){
            descrip_owl_stage.style.left = '0px';
        }else if(inner.right < outer.right){
            descrip_owl_stage.style.left = `-${inner.width - outer.width}px`
        }

        if(parseInt(descrip_owl_stage.style.left) < 0){
            descrip_owl_prev.classList.remove('disabled')
        }
        if(parseInt(descrip_owl_stage.style.left) == 0){
            descrip_owl_prev.classList.add('disabled')
        }
        if(parseInt(descrip_owl_stage.style.left) == -(inner.width - outer.width)){
            descrip_owl_next.classList.add('disabled')
        }if(parseInt(descrip_owl_stage.style.left) > -(inner.width - outer.width)){
            descrip_owl_next.classList.remove('disabled')
        }
    }
}


function productDescrip(){
    const tab_link = document.querySelectorAll('.tab-link');
    const tab_1 = document.getElementById('tab-1');
    const tab_2 = document.getElementById('tab-2');


    tab_link.forEach((tab) =>{
        tab.addEventListener('click', () =>{
            
            
            if(tab.getAttribute('data-tab') === 'tab-1'){
                tab.classList.add('current')
                tab.nextElementSibling.classList.remove('current')
                tab_1.classList.add('current');
                tab_2.classList.remove('current')
            }
            if(tab.getAttribute('data-tab') === 'tab-2'){
                tab.classList.add('current')
                tab.previousElementSibling.classList.remove('current')
                tab_1.classList.remove('current');
                tab_2.classList.add('current')
            }
        }) 
    })
}