<section class="main-section">
		<div class="container">
                    
            <h2>Erfassen / editieren</h2>
            <form action="index.php?page=user-edit" method="POST" class="needs-validation" enc-type="multipart/form-data" novalidate>
                <div class="mb-3">
                    <label for="name" class="form-label">Bild:</label>
                    <input type="file" id="bild" name="bild" class="form-control" required>
                    <div class="invalid-feedback">Bitte ein bild auswählen.</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Titel</label>
                    <input type="text" id="titel" name="titel" class="form-control" value="<?php echo $titel; ?>" required>
                    <div class="invalid-feedback">Bitte geben Sie eine gültige E-Mail-Adresse ein.</div>
                </div>
                <div class="mb-3">
                    <label for="passwort" class="form-label">Jahr:</label>
                    <input type="text" id="zeit" name="zeit" class="form-control" value="<?php echo $zeit; ?>">
                    <div class="invalid-feedback">Bitte das Jahr des projekts angeben.</div>
                </div>

                <input type="hidden" name="id" value="<?php echo $user_id; ?>">
                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <button type="submit" class="btn btn-primary">Speichern</button>
                <a href="index.php?page=user-list" class="btn btn-secondary">Abbrechen</a>
            </form>
        </div>
    </section>