<?php
   /**
   * @var \App\Kernel\View\View $view 
   */
?>

<?php $view->component(name:'start') ?>
   <h1>Add movie page</h1>

   <form action="">
      <p>Name</p>
      <div>
         <input type="text" name="name">
      </div>
      <div>
         <button>Add</button>
      </div>
   </form>
<?php $view->component(name:'end') ?>