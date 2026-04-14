<section class="main-section">
		<div class="container">
                    
            <h2>Erfassen / editieren</h2>
            <form action="user-edit.php" method="POST" class="needs-validation" novalidate>
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
                <a href="user-list.php" class="btn btn-secondary">Abbrechen</a>
            </form>
        </div>
    </section>