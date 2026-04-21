<section class="main-section">
		<div class="container">
                    
            <h2>Erfassen / editieren</h2>
            <form action="index.php?page=project-edit" method="POST" class="needs-validation" enc-type="multipart/form-data" novalidate>
                <div class="mb-3">
                    <label for="bild class="form-label">Bild:</label>
                    <input type="file" id="bild" name="bild" class="form-control" required>
                    <div class="invalid-feedback">Bitte ein bild auswählen.</div>
                </div>
                <div class="mb-3">
                    <label for="titel" class="form-label">Titel</label>
                    <input type="text" id="titel" name="titel" class="form-control" value="<?php echo $titel; ?>" required>
                    <div class="invalid-feedback">Bitte geben Sie eine gültige E-Mail-Adresse ein.</div>
                </div>
                <div class="mb-3">
                    <label for="zeit" class="form-label">Jahr:</label>
                    <input type="text" id="zeit" name="zeit" class="form-control" value="<?php echo $zeit; ?>">
                    <div class="invalid-feedback">Bitte das Jahr des projekts angeben.</div>
                </div>
                <div class="mb-3">
                    <label for="kategorie" class="form-label">Kategorien</label><br>
                    <?php foreach($kategorien as $kategorie){ ?>
                    <input type="checkbox" name="kategorie[]" value="<?php echo $kategorie['ID']; ?>"> <?php echo $kategorie['name']; ?> <br>
                    <?php } ?>
                </div>

                <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <button type="submit" class="btn btn-primary">Speichern</button>
                <a href="index.php?page=user-list" class="btn btn-secondary">Abbrechen</a>
            </form>
        </div>
    </section>