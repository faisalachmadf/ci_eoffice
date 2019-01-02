// tombol sukses 
// {F} Sweet Alert untuk sukses global
const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	Swal({
		title: 'Data',
		text: 'Berhasil' + flashData,
		type: 'success'
	});
}

// {F} tombol hapus global
$('.tombol_hapus').on('click', function(e) {
    
  e.preventDefault();
  const href = $(this).attr('href');

  Swal({
	  title: 'Apakah anda Yakin?',
	  text: "Data akan dihapus",
	  type: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Ya!'
	}).then((result) => {
	  if (result.value) {
	   	document.location.href = href;
	   	
	  }

	})  


});

// {F} Sweet Alert untuk Logout
$('.tombol_logout').on('click', function(e) {
  e.preventDefault();
  const href = $(this).attr('href');

  Swal({
    title: 'Apakah anda ingin keluar?',
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Ya, Saya ingin keluar!'
  }).then((result) => {
    if (result.value) {
     document.location.href = href;

    }
  })
});
