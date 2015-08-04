<div id='paginate' class="paging">
  <p>
    <?php echo $this->Paginator->counter(array('format' => 'Page {:page} of {:pages} Current {:current} Records of {:count}')); ?>
  </p>
  <p>
    <?php echo $this->Paginator->prev('prev >', array(),null, array('class' => 'prev disabled')); ?>
    <?php echo $this->Paginator->numbers(array('separator' => '')); ?>
    <?php echo $this->Paginator->next('next >', array(),null, array('class' => 'next disabled')); ?>
  </p>
</div>