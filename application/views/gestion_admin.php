<main>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th> idObjet </th>
                <th> idUser </th>
                <th> Nom </th>
                <th> Categorie </th>
                <th> Prix </th>
                <th>  </th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($row as $objet) { ?>
                <form action="<?php echo base_url('home_admin/change_categorie') ?>" method="post">
                    <tr>
                        <td> <?php echo $objet['id'] ?> </td>
                        <td> <?php echo $objet['nom'] ?> </td>
                        <td> <?php echo $objet['nomobjet'] ?> </td>
                        <td>
                            <div class="select">
                                <select name="idCat" required>
                                    <?php
                                    foreach ($row_categorie as $cate) {  ?>
                                        <option value="<?php echo $cate['id']; ?>"><?php echo $cate['nomcategorie']; ?></option>
                                   <?php } ?>
                                </select>
                                <input type="hidden" value="<?php echo $objet['id']; ?>" name="idObjet">
                            </div>
                        </td>
                        <td> <?php echo $objet['prix']; ?> Ar </td>
                        <td><button class="button is-success"> Valider </button></td>
                    </tr>
                </form>
            <?php } ?>
            </tbody>
        </table>
    </div>
</main>