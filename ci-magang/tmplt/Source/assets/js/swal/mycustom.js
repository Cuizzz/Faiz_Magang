const flashDat = $('.flash').data('flashdata');
if (flashDat) {
	Swal.fire({
		title: 'Data Kategori ',
		text: 'Berhasil ' + flashDat,
		type: 'success'
	});
}
$('.hapus').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href');
	Swal.fire({
		title: 'Apakah anda yakin',
		text: "data akan dihapus",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus data!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})
});
$('.keluar').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href');
	Swal.fire({
		title: 'Apakah anda yakin',
		text: "untuk logout?",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Logout!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})
});
