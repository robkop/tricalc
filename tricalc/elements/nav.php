<nav>
  <div class="row well well-lg">
    <ul class="nav nav-tabs">
      <li <? if($page == 'home'): ?> class="active"<? endif ?>><a href="index.php">Home</a></li>
      <li<? if($page == 'pace'): ?> class="active"<? endif ?>><a href="pace.php">TriCalc with pace</a></li>
      <li <? if($page == 'vo2max'): ?> class="active"<? endif ?>><a href="oxy.php">V0<sup>2</sup> MAX</a></li>
      <li <? if($page == 'conv'): ?>< class="active"<? endif ?>><a href='conv.php'>Pace/Speed converter</a></li>
      <li <? if($page == 'hints'): ?> class="active"<? endif ?>><a href="hints.php">TriHints</a></li>
      <li <? if($page == 'checklist'): ?> class="active"<? endif ?>><a href="checklist.php">Race Day checklist</a></li>
    </ul>
  </div>
</nav>
