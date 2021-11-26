<footer class="main-footer">
  <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.0.0-rc.3
  </div>
</footer>

<a href="#" class="back-to-top">
  <i class="icon-arrow-up"></i>
</a>

<div class="modal fade" id="allmodal" tabindex="-1" role="dialog" aria-labelledby="allmodallabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="allmodalcontent">

    </div>
  </div>
</div>

<div class="modal fade" id="allmodalinput" tabindex="-1" role="dialog" aria-labelledby="allmodalinputlabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="allmodalcontentinput">

    </div>
  </div>
</div>

<script type="text/javascript">

  $('#allmodal').on('hidden.bs.modal', function (e) {
    $('#allmodalcontent').empty();
  });
  $('#allmodalinput').on('hidden.bs.modal', function (e) {
    $('#allmodalcontentinput').empty();
  });
</script>
