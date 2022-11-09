<?php ob_start(); ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Description</th>
      <th scope="col">Picture path</th>
      <th scope="col">Video path</th>
      <th scope="col">Created date</th>
      <th scope="col">Updated date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($figures as $figure) { ?>
    <tr>
      <th scope="row">
        <?= $figure->getId(); ?>
      </th>
      <td>
        <?= $figure->getName(); ?>
      </td>
      <td>
        <?= $figure->getDescription(); ?>
      </td>
      <td>
        <?= $figure->getPicturePath(); ?>
      </td>
      <td>
        <?= $figure->getVideoPath(); ?>
      </td>
      <td>
        <?= $figure->getCreatedAt(); ?>
      </td>
      <td>
        <?= $figure->getUpdatedAt(); ?>
      </td>
      <td>
    <button type="submit" class="btn btn-outline-success" ><a href="/snowaddict/index.php?action=update&controller=figure&id=<?php echo $figure->getId();?> ">Update my list</a></button>
    <?php $idselect = $figure->getId(); ?>
    </td>
    </tr>
    <?php } ?>
  </tbody>

</table>

<?php $content = ob_get_clean(); ?>

<?php require_once('views/layout.php'); ?>