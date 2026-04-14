<section class="main-section">
	<div class="container">
		<div class="mt-3">
			<h1>Login</h1>
		</div>
		<div class="mt-5">
			<?php
            if( isset($errorMessage) ){
                echo '<p style="color:red">'.$errorMessage.'</p>';
            }
            ?>
            <form method="POST" action="">
                
                <label for="username"><b>E-Mail</b></label>
                <input type="text" placeholder="E-Mail eingeben" name="username" required>
                <br>
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Passwort eingeben" name="password" required>
                <br>
                
                <button type="submit">Login</button>
            </form>
		</div>
	</div>
</section>