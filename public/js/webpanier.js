let panier = [];
    if(localStorage.getItem("panierinnotechweb")===null){
        let pan = JSON.stringify(panier);
        localStorage.setItem("panierinnotechweb",pan);
    }

    const check = (nbpack)=>{
      let paniernb = JSON.parse(localStorage.getItem("panierinnotechweb"));
      if(paniernb.length>0){
          for(let i=0;i<paniernb.length;i++){
              if(nbpack===paniernb[i].id){
                  return false;
              }
          }
      }
      return true;
    };
    const addPanier = (nbpack)=>{
        let pack;
        let packs = [
            {"id": 1, "nom": "Modèle 1", "lien": "assets/images/temp1.jpg","prix": 2500,"description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec semper justo. Suspendisse potenti. Nulla facilisi. Integer ut dolor a dui venenatis posuere ac vel justo."},
            {"id": 2, "nom": "Modèle 2", "lien": "assets/images/temp2.jpg","prix": 3500,"description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec semper justo. Suspendisse potenti. Nulla facilisi. Integer ut dolor a dui venenatis posuere ac vel justo."},
            {"id": 3, "nom": "Modèle 3", "lien": "assets/images/temp3.jpg","prix": 4000,"description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec semper justo. Suspendisse potenti. Nulla facilisi. Integer ut dolor a dui venenatis posuere ac vel justo."},
            {"id": 4, "nom": "Modèle 4", "lien": "assets/images/temp4.jpg","prix": 4500,"description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec semper justo. Suspendisse potenti. Nulla facilisi. Integer ut dolor a dui venenatis posuere ac vel justo."}
        ];
        let valid = check(nbpack);
        if(valid){
            for(let i=1;i<=5;i++){
                if(i===nbpack){
                    pack = packs[i-1];
                }
            }
            let cart = JSON.parse(localStorage.getItem("panierinnotechweb"));
            cart.push(pack);
            localStorage.setItem("panierinnotechweb",JSON.stringify(cart));
        }
    };