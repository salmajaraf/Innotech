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
            {"id": 5, "nom": "Modèle Mobile App 1", "lien": "assets/images/app1.jpg","prix": 3000,"description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec semper justo. Suspendisse potenti. Nulla facilisi. Integer ut dolor a dui venenatis posuere ac vel justo. Vestibulum facilisis."},
            {"id": 6, "nom": "Modèle Mobile App 2", "lien": "assets/images/app2.jpg","prix": 3500,"description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec semper justo. Suspendisse potenti. Nulla facilisi. Integer ut dolor a dui venenatis posuere ac vel justo. Vestibulum facilisis."},
            {"id": 7, "nom": "Modèle Mobile App 3", "lien": "assets/images/app3.jpg","prix": 4000,"description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec semper justo. Suspendisse potenti. Nulla facilisi. Integer ut dolor a dui venenatis posuere ac vel justo. Vestibulum facilisis."},
            {"id": 8, "nom": "Modèle Mobile App 4", "lien": "assets/images/app4.jpg","prix": 4500,"description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec semper justo. Suspendisse potenti. Nulla facilisi. Integer ut dolor a dui venenatis posuere ac vel justo. Vestibulum facilisis."}
        ];
        let valid = check(nbpack);
        if(valid){
            for(let i=0;i<packs.length;i++){
                if(nbpack===packs[i].id){
                    pack = packs[i];
                }
            }
            let cart = JSON.parse(localStorage.getItem("panierinnotechweb"));
            cart.push(pack);
            localStorage.setItem("panierinnotechweb",JSON.stringify(cart));
        }
    };