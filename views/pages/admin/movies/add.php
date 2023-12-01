<?php
   /**
   * @var \App\Kernel\View\View $view 
   */
?>

<?php $view->component(name:'start') ?>
   <h1>Add movie page</h1>

   <form action="/admin/movies/add" method="POST">
      <p>Name</p>
      <div>
         <input type="text" name="name">
      </div>
      <ul>
         <li style="color: red;">Error 1</li>
         <li style="color: red;">Error 2</li>
      </ul>
      <div>
         <button>Add</button>
      </div>
   </form>
<?php $view->component(name:'end') ?>