let cartcont = document.getElementById("cartcont");
    let msgvide = document.getElementById("msgvide");

    const popupVerif = ()=>{
        const filtre = document.getElementById("filtreVerif");
        const stade = document.getElementById("popVerif");
        stade.style.display="block";
        filtre.style.display="block";
        let panier5 = JSON.parse(localStorage.getItem("panierinnotechweb"));
        let ids = [];
        for(let i=0;i<panier5.length;i++){
            ids.push(panier5[i].id);
        }
        document.getElementById("idsInput").value = ids;
        console.log(ids);
    };

    const validMessage= () => {
        localStorage.setItem("panierinnotechweb",JSON.stringify([]));
        update();
    };

    function closeVerif(){
        const filtre2 = document.getElementById("filtreVerif");
        const stade2 = document.getElementById("popVerif");
        stade2.style.display="none";
        filtre2.style.display="none";
    }
    const update= ()=>{
        let panier = JSON.parse(localStorage.getItem("panierinnotechweb"));
        if(panier.length!==0){
            msgvide.style.display="none";
            cartcont.innerHTML="";
            for (let i = 0; i < panier.length; i++) {
                let newPackCart = document.createElement('div');
                newPackCart.className = 'packcart';
                newPackCart.innerHTML = `
                        <div class="imgcart">
                            <img src="${panier[i].lien}" alt="cart.png">
                        </div>
                        <div class="grand">
                            <div class="contcartpack">
                                <h4>${panier[i].nom}</h4>
                                <p>${panier[i].description}</p>
                            </div>
                        <div class="pricedelete">
                            <h4>À Partir de ${panier[i].prix}Dh</h4>
                            <i class="fa-solid fa-trash" onclick="deleteItem(${panier[i].id})"></i>
                        </div>
                        </div>`;
                cartcont.appendChild(newPackCart);
            }
            let btnaclass = document.getElementById('btnid');
            btnaclass.innerHTML=`<button onclick="popupVerif()">Comfirmer</button>`;
        }
        else{
            msgvide.style.display="block";
            cartcont.innerHTML=`<p id="msgvide" class="pmesg">Votre Panier est Vide</p>`;

            let btnaclass = document.getElementById('btnid');
            btnaclass.innerHTML="";
        }
    };

    update();


    const deleteItem = (id)=>{
        let panier1 = JSON.parse(localStorage.getItem("panierinnotechweb"));
        for (let i = 0; i < panier1.length; i++) {
            if(panier1[i].id===id){
                panier1.splice(i,1);
            }
        }
        localStorage.setItem("panierinnotechweb",JSON.stringify(panier1))
        update();
    };


