<div id="search-positions" class="container">

    {{1+1}}
  <h2 class="section-title">Sumate a nuestro equipo</h2>
  <p class="section-subtitle">Buscá dentro de las posiciones disponibles.</p>
  <div id="filters">
    <p class="dropdown-label">Filtrar:</p>
    <div class="dropdown">
      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
        Locación
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu cities" role="menu" aria-labelledby="dropdownMenu1">
        <?php foreach($variables['cities'] as $city) : ?>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:void(0)" tid="<?php print $city->tid ?>"><?php print $city->name ?></a></li>
        <?php endforeach; ?>
        <li role="presentation" class="divider"></li>
      </ul>
    </div>
    <div class="dropdown">
      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown">
        Estudio
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu positions" role="menu" aria-labelledby="dropdownMenu2">
        <?php foreach($variables['studios'] as $studio) : ?>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:void(0)" tid="<?php print $studio->tid ?>"><?php print $studio->name ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
  <ul id="filter-results">
    <?php foreach($variables['positions'] as $position) : ?>
      <li><a class="icon-position" city="<?php print $position->field_ciudad[LANGUAGE_NONE][0]['tid'] ?>" studio="<?php print $position->field_estudio[LANGUAGE_NONE][0]['tid'] ?>" href="<?php print $position->field_link_globant[LANGUAGE_NONE][0]['url'] ?>" target="_blank"><strong><?php print $position->title?><strong> Buenos Aires</a></li>
    <?php endforeach; ?>
  </ul>
</div>