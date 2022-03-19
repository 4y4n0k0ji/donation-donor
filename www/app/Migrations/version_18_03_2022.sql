-- donneur
CREATE TABLE donneur (
                         id INT AUTO_INCREMENT PRIMARY KEY,
                         nom_donneur VARCHAR(255) NOT NULL,
                         num_tel VARCHAR(20)
);

-- don
CREATE TABLE don (
                        id INT AUTO_INCREMENT PRIMARY KEY,
                        nom_don VARCHAR(255) NOT NULL,
                        type VARCHAR(255) NOT NULL,
                        donneur_id INT NOT NULL ,
                        FOREIGN KEY (donneur_id) REFERENCES donneur(id)
);

-- Inserts

-- donneur

INSERT into donneur(nom_donneur,num_tel) values ("Abdellatif Embarki","0650328088");
INSERT into donneur(nom_donneur,num_tel) values ("Adil Embarki","0606060606");
INSERT into donneur(nom_donneur,num_tel) values ("Soundous Embarki","0650328088");


-- don

INSERT into don(nom_don,type,donneur_id) values ("don 1","somme d argents",1);
INSERT into don(nom_don,type,donneur_id) values ("don 2","vetements",2);
INSERT into don(nom_don,type,donneur_id) values ("don 3","produit",3);