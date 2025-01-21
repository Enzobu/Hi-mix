CREATE TABLE CLIENTS(
        id_clients             Int  Auto_increment  NOT NULL ,
        nom_clients            Char (30) NOT NULL ,
        prenom_clients         Char (30) NOT NULL ,
        mail_clients           Char (30) NOT NULL ,
        adresse1_clients       Char (100) NOT NULL ,
        adresse2_clients       Char (100) NOT NULL ,
        CP_clients             Int NOT NULL ,
        ville_clients          Char (50) NOT NULL ,
        date_naissance_clients Date NOT NULL ,
        password_clients       Varchar (200) NOT NULL ,
        telephone_client       Int NOT NULL
	,CONSTRAINT CLIENTS_PK PRIMARY KEY (id_clients)
);

CREATE TABLE TARIF(
        id_tarif      Int  Auto_increment  NOT NULL ,
        montant_tarif Int NOT NULL
	,CONSTRAINT TARIF_PK PRIMARY KEY (id_tarif)
);

CREATE TABLE PRODUITS(
        id_produits  Int  Auto_increment  NOT NULL ,
        prix_formule Int NOT NULL ,
        type_formule Char (10) NOT NULL ,
        id_tarif     Int NOT NULL ,
        id_clients   Int NOT NULL
	,CONSTRAINT PRODUITS_PK PRIMARY KEY (id_produits)

	,CONSTRAINT PRODUITS_TARIF_FK FOREIGN KEY (id_tarif) REFERENCES TARIF(id_tarif)
	,CONSTRAINT PRODUITS_CLIENTS0_FK FOREIGN KEY (id_clients) REFERENCES CLIENTS(id_clients)
);

CREATE TABLE FOURNISSEURS(
        id_fournisseurs               Int  Auto_increment  NOT NULL ,
        prix_kilo_fournisseurs        DECIMAL (15,3)  NOT NULL ,
        matiere_premiere_fournisseurs Varchar (20) NOT NULL ,
        entreprise_fournisseurs       Varchar (20) NOT NULL ,
        mail_fournisseurs             Varchar (70) NOT NULL ,
        tel_fournisseurs              Int NOT NULL ,
        adresse_fournisseurs          Varchar (50) NOT NULL ,
        ville_fournisseurs            Varchar (20) NOT NULL ,
        code_postal_fournisseurs      Int NOT NULL ,
        id_tarif                      Int NOT NULL
	,CONSTRAINT FOURNISSEURS_PK PRIMARY KEY (id_fournisseurs)

	,CONSTRAINT FOURNISSEURS_TARIF_FK FOREIGN KEY (id_tarif) REFERENCES TARIF(id_tarif)
);

CREATE TABLE livre(
        id_produits     Int NOT NULL ,
        id_fournisseurs Int NOT NULL
	,CONSTRAINT livre_PK PRIMARY KEY (id_produits,id_fournisseurs)

	,CONSTRAINT livre_PRODUITS_FK FOREIGN KEY (id_produits) REFERENCES PRODUITS(id_produits)
	,CONSTRAINT livre_FOURNISSEURS0_FK FOREIGN KEY (id_fournisseurs) REFERENCES FOURNISSEURS(id_fournisseurs)
);