<div class="titrecontact">
    <h1>Contactez notre équipe</h1><br>
    <p>Pour nous laisser un message, merci de remplir le formulaire ci-dessous, nous vous répondrons dans les plus brefs délais.</p>
</div>


<form action="/data/connect/traitement_formulaire.php" method="POST">
    <label for="raison">Pourquoi nous contactez-vous ?</label><br>
    <select name="raison" id="raison" required>
        <option value=""> </option>
        <option value="Support">Support</option>
        <option value="Informations et réservations">Informations et réservations</option>
        <option value="Pro et groupes">Pro et groupes</option>
        <option value="Mécenat et dons">Mécenat et dons</option>
        <option value="Partenariats">Partenariats</option>
        <option value="Privatisations">Privatisations</option>
        <option value="Presse">Presse</option>
    </select><br><br>

    <label for="civilite">Civilité *</label><br>
    <select name="civilite" id="civilite" required>
        <option value=""> </option>
        <option value="Monsieur">Monsieur</option>
        <option value="Madame">Madame</option>
        <option value="Autre">Autre</option>
    </select><br><br>

    <label for="nom">Nom *</label><br>
    <input type="text" id="nom" name="nom" required><br><br>

    <label for="prenom">Prénom *</label><br>
    <input type="text" id="prenom" name="prenom" required><br><br>

    <label for="email">Email *</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="telephone">Téléphone</label><br>
    <input type="tel" id="telephone" name="telephone"><br><br>

    <label for="objet">Objet *</label><br>
    <input type="text" id="objet" name="objet" required><br><br>
        
    <label for="message">Message *</label><br>
    <textarea id="message" name="message" rows="5" maxlength="1000" placeholder="(1000 caractères maximum)"></textarea><br>

    <small>* Champs obligatoires</small><br><br>

    <button type="submit">Envoyer</button>
</form>