<section class="main-section">
		<div class="container">
                    
            <h2>Erfassen / editieren</h2>
            <form action="index.php?page=user-edit" method="POST" class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="name" class="form-label">User Name:</label>
                    <input type="text" id="name" name="name" class="form-control" value="<?php echo $name; ?>" required>
                    <div class="invalid-feedback">Bitte geben einen Namen ein.</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-Mail:</label>
                    <input type="email" id="email" name="email" class="form-control" value="<?php echo $email; ?>" required>
                    <div class="invalid-feedback">Bitte geben Sie eine gültige E-Mail-Adresse ein.</div>
                </div>
                <div class="mb-3">
                    <label for="passwort" class="form-label">Passwort:</label>
                    <input type="password" id="passwort" name="passwort" class="form-control" value="">
                    <div class="invalid-feedback">Bitte geben Sie ein Passwort ein.</div>
                </div>

                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <button type="submit" class="btn btn-primary">Speichern</button>
                <a href="index.php?page=user-list" class="btn btn-secondary">Abbrechen</a>
            </form>
        </div>
    </section>