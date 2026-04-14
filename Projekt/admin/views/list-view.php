<section class="main-section">
	<div class="container">

        <div class="d-flex mb-4">
        <div class="col col-md">
            <a href="index.php?page=edit-view" class="btn btn-primary">NEU</a>
        </div>
        <div class="col col-md">
            <form method="GET" action="index.php">
                    <input type="text" name="search" value="">
                    <input type="hidden" name="page" value="list-view">
                    <input type="submit" value="Search" />
                </form>
            </div>
        </div>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th><a href="index.php?page=list-view&sort=ID&dir=ASC" class="text-white">ID</a></th>
                    <th><a href="index.php?page=list-view&sort=email&dir=ASC" class="text-white">E-Mail</a></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td>1</td>
                    <td>info@example.com</td>
                    <td><a href="index.php?page=edit-view&id=1" class="btn btn-warning btn-sm">Edit</a></td>
                    <td><a href="index.php?page=list-view&action=delete&id=1" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
                
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