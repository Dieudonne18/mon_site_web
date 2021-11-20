
<?php
if (isset($_POST['NomRecette'])) //On regarde si les variables existent, sinon la condition ne sera pas validée
{
    echo htmlentities($_POST['NomRecette']);
}
