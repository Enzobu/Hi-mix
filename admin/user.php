<?php include('php/isAdmin.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <?php include('php/head_admin.php'); ?>
        <link rel="stylesheet"  href="/admin/style/style_table.css">
    </head>

    <body>
        <header>
            <?php include('php/header_admin.php'); ?>
        </header>

        <div id="afficher">
        <div id="afficher2">
        <div id="afficher3">
        <div id="afficher4">
            <div id="masquer">
            <div id="masquer2">
            <div id="masquer3">
            <div id="masquer4">
                <div class="global-container global-user">
                    <h1>Clients</h1>
                    
                    <br><br>

                    <?php
                        include("php/link_db.php");

                        $url = $_SERVER['REQUEST_URI'];
                        $url = strstr($url,'?');
                        $url = substr($url, 1, 10);
                        if(!empty($url)) {
                            if(substr($url, 0, 3) == 'tri') {
                                $tri = htmlspecialchars($_GET['tri']);
                                $sens = htmlspecialchars($_GET['sens']);
                                $sql = "SELECT * FROM `user` ORDER BY `$tri` $sens";
                            }
                            else if(substr($url, 0, 10) == 'searchType') {
                                $searchType = htmlspecialchars($_GET['searchType']);
                                $search = htmlspecialchars($_GET['search']);
                                $sql = "SELECT * FROM `user` WHERE `$searchType` = '$search'";
                            } else {
                                $sql = "SELECT * FROM `user` ORDER BY `id_clients` ASC";
                            }
                        } else {
                            $sql = "SELECT * FROM `user` ORDER BY `id_clients` ASC";
                        }
                    
                        
                        $requete = $db->query($sql);
                        $users = $requete->fetchAll();
                        if(empty($users)) {
                            //echo <div class="error-search"><p>Aucun résultats pour la recherche : htmlspecialchars($_GET['search'])</p></div>;
                        }

                        ?>
                        <div class="insert-line">

                        </div>
                        <div class="bouton-haut">
                            <div class="insert-line">
                                <a href="#afficher" class="afficher">Ajouter une ligne</a>
                                <a href="user.php" class="masquer">Ajouter une ligne</a> 
                            </div>
                            <div class="supp-all">
                                <a href="php/gestion_BDD/user/user_delete.php?id=all">Tout Supprimer</a>
                            </div>
                            <div class="trier">
                                <a href="#afficher3" class="afficher3">Trier</a>
                                <a href="user.php" class="masquer3">Trier</a> 
                            </div>
                            <div class="search">
                                <a href="#afficher4" class="afficher4">Rechercher</a>
                                <a href="user.php" class="masquer4">Rechercher</a> 
                            </div>
                        </div>

                        <table>
                            <tr>
                                <th> Actions </th>
                                <th> id </td>
                                <th> Nom </td>
                                <th> Prénom </td>
                                <th> Mail </td>
                                <th> Adresse 1 </td>
                                <th> Adresse 2 </td>
                                <th> CP </td>
                                <th> Ville </td>
                                <th> Date naiss </td>
                                <th> Password </td>
                                <th> Téléphone </td>
                                <th> isAdmin </td>
                            </tr>
                            <?php foreach ($users as $user) { ?>
                            <tr>
                                <td class="table-center"> 
                                    <a href="php/gestion_BDD/user/user_delete.php?id=<?php echo $user['id_clients']; ?>"><img src="image/effacer.png" alt="logo effacer"></a>
                                    
                                    <a href="?id=<?php echo $user['id_clients']; ?>#afficher2" class="afficher2"><img src="image/modifier.png" alt="logo modifier"></a>
                                    <a href="user.php" class="masquer2"><img src="image/modifier.png" alt="logo modifier"></a>
                                
                                </td>
                                <td> <?php echo $user['id_clients']; ?> </td>
                                <td> <?php echo $user['nom_clients']; ?> </td>
                                <td> <?php echo $user['prenom_clients']; ?> </td>
                                <td> <?php echo $user['mail']; ?> </td>
                                <td> <?php echo $user['adresse1_clients']; ?> </td>
                                <td> <?php echo $user['adresse2_clients']; ?> </td>
                                <td> <?php echo $user['CP_clients']; ?> </td>
                                <td> <?php echo $user['ville_clients']; ?> </td>
                                <td> <?php echo $user['date_naissance_clients']; ?> </td>
                                <td> <?php echo $user['password']; ?> </td>
                                <td> <?php echo $user['telephone_clients']; ?> </td>
                                <td> <?php echo $user['isAdmin']; ?> </td>
                            </tr>
                            <?php } ?>
                        </table>
                            
                    <br><br><br>     

                    <div class="actionTable">
                        <div class="insert-bdd" id="insert-bdd">
                            <div class="head-act-bdd">
                                <p>Ajouter une ligne</p>
                            </div>
                            <form action="php/gestion_BDD/user/user_insert.php" method="post">
                                <div class="formulaire">
                                    <div>Nom : </div>
                                    <div><input type="text" name="nom" placeholder="Nom"/></div>
                                    <div>Prénom : </div>
                                    <div><input type="text" name="prenom" placeholder="Prénom"/></div>
                                    <div>Email : </div>
                                    <div><input type="text" name="mail" placeholder="Email"/></div>
                                    <div>Adresse 1 : </div>
                                    <div><input type="text" name="adresse1" placeholder="Adresse 1"/></div>
                                    <div>Adresse 2 : </div>
                                    <div><input type="text" name="adresse2" placeholder="Adresse 2"/></div>
                                    <div>Code postal : </div>
                                    <div><input type="number" name="CP" placeholder="Code postal"/></div>
                                    <div>Ville : </div>
                                    <div><input type="text" name="ville" placeholder="Ville"/></div>
                                    <div>Date de naissance : </div>
                                    <div><input type="date" name="date_de_naisance" placeholder="Date de naissance"/></div>
                                    <div>Password : </div>
                                    <div><input type="password" name="password" placeholder="Password"/></div>
                                    <div>Téléphone : </div>
                                    <div><input type="number" name="telephone" placeholder="Téléphone"/></div>
                                    <div>isAdmin : </div>
                                    <div class="radio"> YES <input type="radio" name="isAdmin" value="1"/> NO <input type="radio" name="isAdmin" value="0"/></div>
                                </div>
                                <button type="submit" class="boutton">Ajouter</button>
                            </form> 
                        </div>
                            
                        <br><br>
                            
                        <div class="update-bdd" id="update-bdd">
                            <div class="head-act-bdd">
                                <p>Modifier une ligne</p>
                            </div>
                            <form action="php/gestion_BDD/user/user_update.php" method="post">
                                <div class="formulaire">
                                    <div><!-- Modifier si id :--> </div>
                                    <div><input type="hidden" name="id" value="<?php echo htmlspecialchars($_GET['id']); ?>"/></div>
                                    <div>Nom : </div>
                                    <div><input type="text" name="nom" placeholder="Nom"/></div>
                                    <div>Prénom : </div>
                                    <div><input type="text" name="prenom" placeholder="Prénom"/></div>
                                    <div>Mail : </div>
                                    <div><input type="text" name="mail" placeholder="Mail"/></div>
                                    <div>Adresse 1 : </div>
                                    <div><input type="text" name="adresse1" placeholder="Adresse 1"/></div>
                                    <div>Adresse 2 : </div>
                                    <div><input type="text" name="adresse2" placeholder="Adresse 2"/></div>
                                    <div>Code postal : </div>
                                    <div><input type="number" name="CP" placeholder="Code postal"/></div>
                                    <div>Ville : </div>
                                    <div><input type="text" name="ville" placeholder="Ville"/></div>
                                    <div>Date de naissance : </div>
                                    <div><input type="date" name="date_de_naisance" placeholder="Date de naissance"/></div>
                                    <div>Password : </div>
                                    <div><input type="text" name="password" placeholder="Password"/></div>
                                    <div>Téléphone : </div>
                                    <div><input type="number" name="telephone" placeholder="Téléphone"/></div>
                                    <div>isAdmin : </div>
                                    <div class="radio"> YES <input type="radio" name="isAdmin" value="1"/> NO <input type="radio" name="isAdmin" value="0"/></div>
                                </div>
                                <button type="submit" class="boutton user-bouton">Modifier</button>
                            </form>
                        </div>

                        <div class="trier-bdd" id="trier-bdd">
                            <div class="head-act-bdd">
                                <p>Trier</p>
                            </div>
                            <form action="user.php" method="get">
                                <div class="formulaire">
                                    <div>Trier par : </div>
                                    <div>
                                        <select name="tri" required="required">
                                            <option value="">---- Select ----</option>
                                            <option value="id">Id</option>
                                            <option value="nom">Nom</option>
                                            <option value="prenom">Prenom</option>
                                            <option value="civilite">Civilité</option>
                                            <option value="isAdmin">isAdmin</option>
                                        </select>
                                    </div>
                                    <div>Ordre : </div>
                                    <div class="radio">
                                        <img src="image/croissant2.png" alt="croissant">
                                        <input type="radio" name="sens" value="ASC"/>
                                        <img src="image/decroissant2.png" alt="decroissant">
                                        <input type="radio" name="sens" value="DESC"/>
                                    </div>
                                </div>
                                <button type="submit" class="boutton user-bouton">Trir</button>
                            </form>
                        </div>

                        <div class="search-bdd" id="search-bdd">
                            <div class="head-act-bdd">
                                <p>Rechercher</p>
                            </div>
                            
                            <form action="user.php" method="get">
                                <div class="formulaire">
                                    <div>Rechercher dans : </div>
                                    <div>
                                        <select name="searchType" required="required">
                                            <option value="">---- Select ----</option>
                                            <option value="id">Id</option>
                                            <option value="nom">Nom</option>
                                            <option value="prenom">Prenom</option>
                                            <option value="email">Mail</option>
                                            <option value="password">Password</option>
                                        </select>
                                    </div>
                                    <div>Rechercher : </div>
                                    <div><input type="text" name="search" required="required"/></div>
                                </div>
                                <button type="submit" class="boutton user-bouton">Rechercher</button>
                            </form>
                        </div>
                            
                    </div>
                </div>  
            </div>
            </div>             
            </div>             
            </div>             
        </div>
        </div>
        </div>
        </div>        
    </body>
</html>

