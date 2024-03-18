CREATE TABLE vente(
    id_vente INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    produit_vente VARCHAR NOT NULL,
    date_vente TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    prix_vente INT NOT NULL,
    quantite_vendu INT NOT NULL,
    FOREIGN KEY (produit_vente) REFERENCES medic(nom_medic),
    FOREIGN KEY (prix_vente) REFERENCES medic(prix_medic)
);