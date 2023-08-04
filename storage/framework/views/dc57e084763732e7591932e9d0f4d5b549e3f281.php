<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script src="<?php echo e(asset('assets/js/common.js')); ?>"></script>
      <style>
 
        form.search input[type=text] {
          border: 1px solid grey;
          float: left;
          width: 80%;
          background: #f1f1f1;
        }
        form.search button {
          float: left;
          width: 20%;
          background: #2196F3;
          color: white;
          border: 1px solid grey;
          border-left: none;
          cursor: pointer;
        }
     </style>
    <?php if(session()->get('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="alert-inner--icon"></span>
            <span class="alert-inner--text">  <?php echo e(session()->get('success')); ?>  </span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <p>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="pull-left">
                    <h1> ပိတ်သိမ်းထားသော ဆိုင် / အလုပ်ဌာနများ</h1>
                </div>
                
            </div>
    
        </div>
    </p>

    <p>
        <div class="row">
            <div class="col-sm-8">
                
            </div>
            
            <div class="col-sm-4 text-right">
                <div class="pull-right">
                    <a class="btn btn-primary" href="<?php echo e(route('shops.index')); ?>"> ပြန်ထွက်မည်</a>
                </div>
            </div>
        </div>
    </p>

     
<p>
   <div class="row">
    <div class="col-sm-12">
        <div class="table-responsive">
        <div>
        <table class="table table-bordered" id="myTable">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">
                            စဉ်
                        </th>
                        <th scope="col">
                            ဆိုင် / အလုပ်ဌာန အမှတ်စဉ်
                        </th>
                        <th scope="col">
                            ဆိုင် / အလုပ်ဌာန အမည်
                        </th>
                        <th scope="col">
                            ပိုင်ရှင်အမည်
                        </th>
                        <th scope="col">
                            မန်နေဂျာအမည်
                        </th>
                        <th scope="col">
                            မှတ်ပုံတင်သည့်နေ့စွဲ
                        </th>
                        <th scope="col">
                            လုပ်ဆောင်ချက်
                        </th>
                    </tr>
                </thead>
                <tbody class="list">
            <?php $i= ($shop->currentpage()-1) * ($shop->perpage());?>
            <?php $__currentLoopData = $shop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shops): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td scope="row" class="name">
                    <?php echo e(++$i); ?>

                </td>
                <td scope="row" class="name">
                    <?php echo e($shops->ShopId); ?>

                </td>
                <td class="budget">
                    <?php echo e($shops->shopname); ?>

                </td>
                <td class="status">
                    <span class="badge badge-dot mr-4">
                      <?php echo e($shops->ownername); ?>

                    </span>
                </td>
                <td>
                     <?php echo e($shops->mangername); ?>

                </td>
                <td>
                     <?php echo e($shops->RegDate); ?>

                </td>
                <td class="completion">
                    <form action="<?php echo e(route('shops.destroy',$shops->id)); ?>" method="POST" class="delete">
                        <a href="<?php echo e(route('shops.show',$shops->id)); ?>" class="badge badge-info">ကြည့်ရန်</a> |      
                        <a class="badge badge-primary" href="<?php echo e(route('shops.edit',$shops->id)); ?>">ပြင်ရန်</a> |
       
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
          
                        <button type="submit" class="badge badge-danger" id="shopdelete">ဖျက်မည်</button>
                    </form>
                </td>
               
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </tbody>
    </table>
</div>
</div>
    </div> <br><br>
    <?php if(Request::path() == 'shops'): ?>
    <?php echo $shop->links(); ?>

    <?php endif; ?>
</div>
          
</p>
<!-- scroll back to top of the page -->
<a id="back2Top" title="Back to top" href="#">&#10148;</a>

     
<script type="text/javascript">
    $(".delete").on("submit", function(){
        return confirm("Are you sure to delete this record?");
    });


</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>