let panier = [];
    if(localStorage.getItem("panierinnotechmobile")===null){
        let pan = JSON.stringify(panier);
        localStorage.setItem("panierinnotechmobile",pan);
    }

    const check = (nbpack)=>{
      let paniernb = JSON.parse(localStorage.getItem("panierinnotechmobile"));
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
            {"id": 1, "nom": "Modèle Mobile App 1", "lien": "assets/images/app1.jpg","prix": 3000,"description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec semper justo. Suspendisse potenti. Nulla facilisi. Integer ut dolor a dui venenatis posuere ac vel justo. Vestibulum facilisis, tortor nec luctus hendrerit, libero justo tempus velit, vel luctus felis eros vel odio."},
            {"id": 2, "nom": "Modèle Mobile App 2", "lien": "assets/images/app2.jpg","prix": 3500,"description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec semper justo. Suspendisse potenti. Nulla facilisi. Integer ut dolor a dui venenatis posuere ac vel justo. Vestibulum facilisis, tortor nec luctus hendrerit, libero justo tempus velit, vel luctus felis eros vel odio."},
            {"id": 3, "nom": "Modèle Mobile App 3", "lien": "assets/images/app3.jpg","prix": 4000,"description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec semper justo. Suspendisse potenti. Nulla facilisi. Integer ut dolor a dui venenatis posuere ac vel justo. Vestibulum facilisis, tortor nec luctus hendrerit, libero justo tempus velit, vel luctus felis eros vel odio."},
            {"id": 4, "nom": "Modèle Mobile App 4", "lien": "assets/images/app4.jpg","prix": 4500,"description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec semper justo. Suspendisse potenti. Nulla facilisi. Integer ut dolor a dui venenatis posuere ac vel justo. Vestibulum facilisis, tortor nec luctus hendrerit, libero justo tempus velit, vel luctus felis eros vel odio."}
        ];
        let valid = check(nbpack);
        if(valid){
            for(let i=1;i<=5;i++){
                if(i===nbpack){
                    pack = packs[i-1];
                }
            }
            let cart = JSON.parse(localStorage.getItem("panierinnotechmobile"));
            cart.push(pack);
            localStorage.setItem("panierinnotechmobile",JSON.stringify(cart));
        }
    };