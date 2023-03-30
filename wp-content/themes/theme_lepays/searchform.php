<form class="form-inline" action="<?= esc_url(home_url( '/')) ?>">
  <input type="search" name="s" class="form-control rounded" placeholder="Recherche" value="<?= get_search_query() ?>" aria-label="Search" />
  <button type="submit" class="btn btn-outline-success">Recherche</button>
</form>