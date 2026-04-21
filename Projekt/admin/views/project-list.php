<section class="main-section">
	<div class="container">
        <h1>Benutzer verwalten</h1>

        <div class="d-flex mb-4">
        <div class="col col-md">
            <a href="index.php?page=project-edit" class="btn btn-primary">NEU</a>
        </div>
        <div class="col col-md">
            <form method="GET" action="index.php">
                    <input type="text" name="search" value="">
                    <input type="hidden" name="page" value="user-list">
                    <input type="submit" value="Search" />
                </form>
            </div>
        </div>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th><a href="index.php?page=project-list&sort=ID&dir=ASC" class="text-white">ID</a></th>
                    <th><a href="index.php?page=project-list&sort=bild&dir=ASC" class="text-white">Bild</a></th>
                    <th><a href="index.php?page=project-list&sort=titel&dir=ASC" class="text-white">Titel</a></th>
                    <th><a href="index.php?page=project-list&sort=zeit&dir=ASC" class="text-white">Zeit</a></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                
                <?php // foreach($data as $row){ ?>
                    <tr>
                        <td>ID</td>
                        <td>Bild</td>
                        <td>Titel</td>
                        <td>Zeit</td>
                        <td><a href="index.php?page=project-list&action=delete&id=<?php echo $row['ID']; ?>">[X]</a></td>
                        <td><a href="index.php?page=project-edit&id=<?php echo $row['ID']; ?>">[edit]</a></td>
                    </tr>
                <?php // } ?>
                
            </tbody>
        </table>
        <p>Seitenzahlen / Pagination: 
            <a href="index.php?page=list-view&start=0" class="btn btn-secondary btn-sm">1</a> 
            <a href="index.php?page=list-view&start=10" class="btn btn-secondary btn-sm">2</a> 
            <a href="index.php?page=list-view&start=20" class="btn btn-secondary btn-sm">3</a> 
            <a href="index.php?page=list-view&start=30" class="btn btn-secondary btn-sm">4</a> 
            <a href="index.php?page=list-view&start=..." class="btn btn-secondary btn-sm">...</a> 
        </p>

    </div>
</section>