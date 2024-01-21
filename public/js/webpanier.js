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
            {"id": 1, "nom": "Modèle 1", "lien": "assets/images/temp1.jpg","prix": 2500,"description": "Un design élégant et moderne, parfait pour ceux qui recherchent une esthétique raffinée. Avec des détails soigneusement conçus, ce modèle offre une expérience visuelle captivante."},
            {"id": 2, "nom": "Modèle 2", "lien": "assets/images/temp2.jpg","prix": 3500,"description": "Une fusion harmonieuse de simplicité et d'innovation. Ce modèle présente des lignes épurées et des éléments visuels uniques, créant une atmosphère distincte et contemporaine."},
            {"id": 3, "nom": "Modèle 3", "lien": "assets/images/temp3.jpg","prix": 4000,"description": "Une conception exceptionnelle qui marie fonctionnalité et style. Explorez la modernité avec ce modèle qui offre des fonctionnalités avancées tout en captivant l'œil par son esthétique sophistiquée."},
            {"id": 4, "nom": "Modèle 4", "lien": "assets/images/temp4.jpg","prix": 4500,"description": "Une expérience visuelle immersive vous attend avec ce modèle unique. Son design avant-gardiste crée une atmosphère distinctive, faisant de ce choix une option parfaite pour ceux qui recherchent l'originalité."}
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