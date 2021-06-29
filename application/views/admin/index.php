
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper d-block" id="index">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $order ?></h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $dishert ?></h3>

                <p>Total Dishert</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $user; ?></h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $customer ?></h3>

                <p>New Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper d-none" id="menuinput">
<div class="container-fluid">
<!-- DataTables -->
<div class="card mb-3">
  <div class="card-header">
    <a href="#"><i class="fas fa-plus"></i> Add New</a>
  </div>
  <div class="card-body">

    <div class="table-responsive">
      <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Dish Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Image</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($products as $product): ?>
          <tr>
            <td width="150">
              <?php echo $product->name ?>
            </td>
            <td>
              <?php echo $product->price ?>
            </td>
            <td>
              <img src="<?php echo base_url('upload/product/'.$product->image) ?>" width="64" />
            </td>
            <td class="small">
              <?php echo substr($product->description, 0, 120) ?>...</td>
            <td width="250">
              <a href="<?php echo site_url('admin/products/edit/'.$product->product_id) ?>"
               class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
              <a onclick="deleteConfirm('<?php echo site_url('admin/products/delete/'.$product->product_id) ?>')"
               href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
            </td>
          </tr>
          <?php endforeach; ?>

        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
</div>