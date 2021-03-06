<?php $__env->startSection('header'); ?>
	<h1>
        Todas las publicaciones
        <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Posts</li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<h1>Dashboard</h1>
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Listado de Publicaciones</h3>
        
        <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Crear Publicación</button>

    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="posts-table" class="table table-bordered table-striped">
		    <thead>
        	    <tr>
                  <th>ID</th>
                  <th>Titulo</th>
                  <th>Extracto</th>
                  <th>Acciones</th>
            </thead>
            <tbody>
            	<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            		<tr>
            			<td><?php echo e($post->id); ?></td>
            			<td><?php echo e($post->title); ?></td>
            			<td><?php echo e($post->excerpt); ?></td>
            			<td>
            				<a href="#" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
            				<a href="#" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
            			</td>

            		</tr>
            	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <!-- /.box-body -->
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="/adminLTE/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css">

<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="/adminLTE/plugins/datatables.net/js/jquery.dataTables.min.js"></script>

    <script src="/adminLTE/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <script>
      $(function () {
        $('#posts-table').DataTable({
          'paging'      : true,
          'lengthChange': false,
          'searching'   : false,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false
        })
      })
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wichi/Documentos/Proyectos/RedSocial/resources/views/admin/publicaciones/index.blade.php ENDPATH**/ ?>