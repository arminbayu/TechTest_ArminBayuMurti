<link rel="stylesheet" href="<?php echo base_url(); ?>themes/adminTemplate/plugins/datepicker/daterangepicker.css" />
<link rel="stylesheet" href="<?php echo base_url('themes/adminTemplate/plugins/datatables/extensions/more/buttons.dataTables.min.css') ?>" />
<script src="<?php echo base_url(); ?>themes/adminTemplate/plugins/datepicker/daterangepicker.js"></script>
<script src="<?php echo base_url('themes/adminTemplate/plugins/datatables/extensions/more/dataTables.buttons.min.js') ?>"></script>
<script src="<?php echo base_url('themes/adminTemplate/plugins/datatables/extensions/more/jszip.min.js') ?>"></script>
<script src="<?php echo base_url('themes/adminTemplate/plugins/datatables/extensions/more/buttons.html5.min.js') ?>"></script>
<script src="<?php echo base_url(); ?>themes/adminTemplate/plugins/fileupload/jquery.fileupload.js"></script>
<script src="<?php echo base_url(); ?>themes/adminTemplate/plugins/fileupload/upload_image.js"></script>
<style>
div#table_user_length {
  width: 30%;
  position: absolute;
  left: 8%;
}
</style>
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header" id="title_top">
              <h3 class="box-title">Data Instansi</h3>
            </div>

            <div class="box-body">
              <div class="col-sm-12" id="div_form_input" hidden>
                <div class="row">
                  <form id="form_instansi">
                      <div class="form-group col-md-12">
                        <div class="col-md-6 mb-3">
                          <label>Nama Instansi : </label>
                          <input type="text" class="form-control" id="instansi" name="instansi" autocomplete="on" required>
                          <input type="hidden" id="id_instansi" name="id_instansi">
                        </div>
                      </div>

                      <div class="form-group col-md-12">
                        <div class="col-md-6 mb-3">
                          <label>Keterangan : </label>
                          <Textarea type="text" class="form-control" id="keterangan" name="keterangan" autocomplete="on" required></Textarea>
                        </div>
                      </div>

                      <div class="col-sm-12" style="margin-top:10px;">
                        <button type="button" id="tambah_instansi" class="btn btn-success" name="button">Tambah</button>
                        <button type="button" class="btn btn-primary" onclick="kembali_input()">Kembali</button>
                      </div>
                  </form>
                </div>
              </div>

              <div id="div_table_output">
                <div class="text-left" style="margin-bottom:10px;">
                  <button type="button" id="tambah_show" class="btn btn-success">Tambah Data</button>
                </div>

                <div class="pull-right" style="margin-bottom:5px;">
                  <div class="input-group input-group-sm" style="width: 300px;">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="datepicker" value="<?php echo date('d/m/Y')?>" readonly>
                    </div>
                  </div>
                </div>

                <table id="table_instansi" class="table table-bordered table-striped ">
                  <thead>
                    <tr>
                      <th style="width:5%">No</th>
                      <th>Nama</th>
                      <th>#</th>
                    </tr>
                  </thead>
                </table>

              </div>

            </div>
          </div>
        </div>
      </div>
    <div>
</div>
</section>

<script type="text/javascript">

  function topFunction() {
    $('html, body').animate({
      scrollTop: $("#title_top").offset().top
    });
  }

  function hide_show_div(key) {
    if (key == 1) {
      $('#div_table_output').hide(250);
      $('#div_form_input').show(250);
      topFunction();
    }else {
      $('#div_form_input').hide(250);
      $('#div_table_output').show(250);
    }
  }

  $('#tambah_show').click(function() {
    hide_show_div(1);
  });

  function kembali_input() {
    bersihkan();
    hide_show_div(2);
  }

  $(document).ready(function() {
    get_data_instansi('');
  });

  function get_data_instansi(tgl){
    if(tgl == ''){
      tgl = '00/00/0000 - 31/12/9999';
    }

    var table_instansi = $('#table_instansi').DataTable({
      dom: 'Blfrtip',
      buttons: [
          'excel', 'csv'
      ],
      "lengthMenu": [10, 20, 50, 100, 200, 500, 1000, 5000, 10000],
      "pageLength": 20,
      "processing": true,
      "serverSide": true,
      ajax : {
        url  : '<?php echo base_url('admin/get_data');?>',
        type : 'POST',
        data : {
          tgl : tgl
        },
        beforeSend:function() {
          $('#table_instansi').LoadingOverlay("show");
        },
        complete:function() {
          $("#table_instansi").LoadingOverlay("hide", true);
        },
      },
      columns: [
        { data: 'no' },
        { data: 'nama' },
        { data: 'aksi' },
      ],
    });
  }

  $('#datepicker').daterangepicker({
    autoclose: true,
    locale: {
      format: 'DD/MM/YYYY'
    },
    startDate: '<?php echo date('d/m/Y')?>',
    endDate: '<?php echo date('d/m/Y')?>'
  });

  $('#datepicker').change(function () {
    $('#table_instansi').DataTable().destroy();
    get_data_instansi($(this).val());
  });

  function bersihkan() {
    $('#form_instansi').find('input').each(function() {
      $(this).val($(this).data('default'));
      $('#tambah_instansi').html('Tambah');
    });
  }

</script>
