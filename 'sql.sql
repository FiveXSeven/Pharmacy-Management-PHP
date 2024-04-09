
CREATE TABLE Vente (
    id_vente INT PRIMARY KEY,
    date_vente DATE,
    produit_vente INT,
    quantite_vente INT,
    FOREIGN KEY (produit_vente) REFERENCES medic(id_medic)
);
