 // variabel perulangan
 var saveData;
 var showmodal = $('#exampleModal'); // nampilkan modal (tampil modal)
 var tabelData = $('#table'); // nampilkan tabel dan isi (tabel)
 var formData = $('#form'); // menghapuskan data form (reset data ketika di close)
 var modalTitle = $('#modalTitle'); // tittle form (tittle)
 var btnSave = $('#btnSave'); // btn save data

 $(document).ready(function() {
     tabelData.DataTable({ // -> tabel
         "processing": true,
         "serverSide": true,
         "ajax": {
             "url": "<?= base_url('anggota/getAnggota'); ?>",
             "type": "POST"
         },
         "columnDefs": [{
             "target": [-1],
             "orderable": false
         }]
     });
 });

 function reloadTable() {
     tabelData.DataTable().ajax.reload();

 }

 function message(icon, text) {
     Swal.fire({
         icon: icon,
         title: 'Data Table Anggota ...',
         text: text,
         showConfirmButton: false,
         showCancelButton: false,
         timer: 2000,
         timerProgressBar: true,
     });
 }

 function deleteQuestion(id_anggota, nama) {
     Swal.fire({
         title: 'Apakah Anda Yakin?',
         text: "Anda Akan menghapus Data Anggota Dengan Nama " + nama + "  ?",
         icon: 'warning',
         showCancelButton: true,
         confirmButtonColor: '#d33',
         cancelButtonColor: '#63ED7A',
         confirmButtonText: 'Ya, Hapus !'
     }).then((result) => {
         if (result.isConfirmed) {
             deleteData(id_anggota);
         }
     })
 }

 function add() {
     saveData = 'tambah';
     formData[0].reset(); // reset data ketika di close
     showmodal.modal('show'); // tampil modal
     modalTitle.text('Modal Tambah Data Anggota'); //tittle
 }

 function save() {
     btnSave.text('Mohon Tunggu ...');
     btnSave.attr('disabled', true);
     if (saveData == 'tambah') { // konisi button add atau update
         url = "<?= base_url('anggota/addAnggota'); ?>"
     } else {
         url = "<?= base_url('anggota/updateAnggota'); ?>"
     }

     $.ajax({
         type: "POST",
         url: url,
         data: formData.serialize(),
         dataType: "JSON",
         success: function(response) {
             if (response.status == 'success') {
                 showmodal.modal('hide');
                 reloadTable();
                 if (saveData == 'tambah') {
                     iziToast.success({
                         message: 'Data Berhasil Disimpan ... ',
                         position: 'topRight'
                     });
                 } else {
                     iziToast.success({
                         message: 'Data Berhasil Ubah ... ',
                         position: 'topRight'
                     });
                 }

             } else { // coding untuk form validation
                 for (var i = 0; i < response.inputerror.length; i++) {
                     $('[name="' + response.inputerror[i] + '"]').addClass('is-invalid');
                     $('[name="' + response.inputerror[i] + '"]').next().text(response.error_string[i]);

                 }
             }
             btnSave.text('Simpan Data');
             btnSave.attr('disabled', false);
         },

         error: function() {
             message('error', 'Terjadi kesalahan di server, Silakan Ulang kembai !');
         }

     });
 }

 // function ngambil data
 function byid(id_anggota, type) {
     if (type == 'edit') {
         saveData = 'edit';
         formData[0].reset();
     }

     $.ajax({
         type: "GET",
         url: "<?= base_url('anggota/byid/') ?>" + id_anggota,
         dataType: "JSON",
         success: function(response) {
             if (type == 'edit') {
                 formData.find('input').removeClass('is-invalid');
                 formData.find('select').removeClass('is-invalid');
                 formData.find('textarea').removeClass('is-invalid');
                 modalTitle.text('Modal Ubah Data Anggota');
                 btnSave.text('Ubah Data');
                 btnSave.attr('disabled', false);

                 $('[name="id_anggota"]').val(response.id_anggota);
                 $('[name="npk"]').val(response.npk);
                 $('[name="nama"]').val(response.nama);

                 $('.jabatan').val(response.jabatan);
                 $('.unit').val(response.unit);
                 $('.pendidikan').val(response.pendidikan);

                 //$('input:radio[name=gender][value=' + response.gender + ']')[0].checked = true;
                 $('input:radio[name="gender"]').filter('[value="' + response.gender + '"]').attr('checked', true);

                 $('[name="nope"]').val(response.nope);
                 $('.agama').val(response.agama);

                 //$('select[name="agama"]').find('[value="' + response.agama + '"]').attr('selected', 'selected');
                 $('[name="hobi"]').val(response.hobi);
                 $('[name="tmt_kerja"]').val(response.tmt_kerja);
                 $('[name="alamat"]').val(response.alamat);
                 showmodal.modal('show');

             } else {
                 deleteQuestion(response.id_anggota, response.nama);
             }

         },

         error: function() {
             message('error', 'Terjadi kesalahan di server, Silakan Ulang kembai !');
         }
     });
 }

 function deleteData(id_anggota) {
     $.ajax({
         type: "POST",
         url: "<?= base_url('anggota/deleteAnggota/') ?>" + id_anggota,
         dataType: "JSON",
         success: function(response) {
             reloadTable();
             message('success', 'Data Berhasil Dihapus !');
         },

         error: function() {
             message('error', 'Terjadi kesalahan di server, Silakan Ulang kembai !');
         }
     });
 }