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
            {"id": 5, "nom": "Modèle Mobile App 1", "lien": "assets/images/app1.jpg","prix": 3000,"description": "Explorez l'élégance fonctionnelle avec ce modèle d'application mobile. Une interface intuitive et des fonctionnalités avancées créent une expérience utilisateur exceptionnelle."},
            {"id": 6, "nom": "Modèle Mobile App 2", "lien": "assets/images/app2.jpg","prix": 3500,"description": "Découvrez l'innovation mobile avec ce modèle captivant. Des designs dynamiques et une navigation fluide offrent une expérience utilisateur moderne et engageante."},
            {"id": 7, "nom": "Modèle Mobile App 3", "lien": "assets/images/app3.jpg","prix": 4000,"description": "Plongez dans le futur de l'application mobile avec ce modèle révolutionnaire. Des fonctionnalités avancées et une esthétique élégante en font un choix incontournable."},
            {"id": 8, "nom": "Modèle Mobile App 4", "lien": "assets/images/app4.jpg","prix": 4500,"description": "Expérimentez l'élégance haut de gamme avec ce modèle d'application mobile. Une combinaison de design moderne et de performances exceptionnelles pour une expérience utilisateur sans compromis."}
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