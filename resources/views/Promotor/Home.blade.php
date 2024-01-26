@extends('layouts.lyt_listas')
@section('metodosjs')
@include('jsViews.js_promotor')
@endsection
@section('content')
<div class="wrapper">

  <!-- Main Sidebar Container -->
  @include('layouts.lyt_promotor')
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">PROMOTOR</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">PROMOTOR</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box mb-3 bg-info">

                <div class="info-box-content">
                  <span class="info-box-text">CLIENTES NUEVOS</span>
                  <span class="info-box-number"><span id="lblClientes"></span>0.00</span>
                </div>
              </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box " style="background-color: #FF8000;">              
                <div class="info-box-content ">
                  <span class=""> PRESTAMOS</span>
                  <span class="info-box-number"><small>C$ </small><span id="lblMoraAtrasada" > 0.00</span>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box mb-3 bg-danger">
                <div class="info-box-content">
                  <span class="info-box-text"> SALDOS COLOCADOS</span>
                  <span class="info-box-number"><small>C$ </small><span id="lblMoraVencida"> 0.00</span>
                  </span>
                </div>
              </div>
            </div>
          </div>
        

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">INGRESO POR MES</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              
                <div class="position-relative mb-4">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>NOMBRE</th>
                            <th>TELEFONO</th>
                            <th>DEPARTAMENTO</th>
                            <th>ZONA</th>
                            <th>DIRECCION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> - </td>
                            <td> - </td>
                            <td> - </td>
                            <td> - </td>
                            <td> - </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <th>NOMBRE</th>
                        <th>TELEFONO</th>
                        <th>DEPARTAMENTO</th>
                        <th>ZONA</th>
                        <th>DIRECCION</th>
                    </tfoot>
                </table>
                </div>

                
              </div>
              <!-- ./card-body -->
              <div class="card-footer">
                <div class="row" style="display:none">
                  <div class="col-sm-6 col-6">
                    <div class="description-block border-right">
                      <h5 class="description-header text-warning">C$ 35,210.43</h5>
                      <span class="description-text">MORA ATRASADA</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6 col-6">
                    <div class="description-block border-right">
                      <h5 class="description-header text-danger">C$10,390.90</h5>
                      <span class="description-text">MORA VENCIDAD</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6" style="display:none">
                    <div class="description-block border-right">
                      <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                      <h5 class="description-header">C$24,813.53</h5>
                      <span class="description-text">TOTAL PROFIT</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6" style="display:none">
                    <div class="description-block">
                      <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                      <h5 class="description-header">1200</h5>
                      <span class="description-text">GOAL COMPLETIONS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

   
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('layouts.lyt_footer')
</div>
@endsection