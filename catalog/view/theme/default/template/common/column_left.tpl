<?php if ($modules) { ?>
<column id="column-left" class="col-sm-3">
  <?php echo $search; ?> 
  <?php foreach ($modules as $module) { ?>
  <?php echo $module; ?>
  <?php } ?>
</column>
<?php } ?>