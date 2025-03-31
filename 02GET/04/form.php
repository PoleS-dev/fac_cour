<form action="search.php" method="GET">
	<div class="form-item">
		<label for="keyword">Recherche :</label>
		<input type="search" id="keyword" name="keyword">
	</div>
	<div class="form-item">
		<p>Catégorie :</p>
		<input type="radio" name="category" id="dev" value="dev">
		<label for="dev">Développement</label>
		<input type="radio" name="category" id="hardware" value="hardware">
		<label for="hardware">Hardware</label>
	</div>
	<div class="form-item">
		<label for="sort">Trier par :</label>
		<select name="sort" id="sort">
			<option value="title_asc">Titre (A-Z)</option>
			<option value="title_desc">Titre (Z-A)</option>
			<option value="likes_asc">Nombre de likes (croissant)</option>
			<option value="likes_desc">Nombre de likes (décroissant)</option>
		</select>
	</div>
	<div class="form-item">
		<input type="submit" value="ok">
	</div>
</form>
