<div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title"> Tambah SOP/Buat SOP
              </h3>
              <br
             
              <div class="form-group">
                <label>JURUSAN/Prodi</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">--pilih--</option>
                  <option>Matematika</option>
                  <option>Statistik</option>
                  <option>Ilmu Komputer</option>
                </select>
              </div> 
              <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputjurusan/prodi">JUDUL</label>
                  <input type="judul" class="form-control" id="examplejudul" placeholder="masukan judul">
                  <br>
                  <label for="exampleInputjurusan/prodi">Versi</label>
                  <input type="Versi" class="form-control" id="exampleversi" placeholder="masukan Versi">
              </div>
              <!-- Date -->
              <div class="form-group">
                <label>Tgl/Thn</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                </div>
              </div>
                <!-- /.input group -->
            </div>
              <!-- tools box -->
              <br>
              <h4>Isi SOP</h4>
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"

                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form>
                    <textarea id="editor1" name="editor1" rows="10" cols="80">
                    </textarea>
              </form>
            </div>
          </div>
          <!-- /.box -->
          <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">
                </div>
                <div class="checkbox">
                </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
                </div>
        </div>
        <!-- /.col-->
      </div>