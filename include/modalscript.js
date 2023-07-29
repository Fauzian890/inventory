
$(".update").click(function () {
  $("#updateModal").show();
  var id_kopi = $(this).data('id-kopi');
  var namakopi = $(this).data('namakopi');
  var deskripsi = $(this).data('deskripsi');
  var stok = $(this).data('stok');
  var harga = $(this).data('harga');
  var id_kategori = $(this).data("id-kategori");
  var nama_kategori = $(this).data("nama-kategori");

  $("#id_kopi").val(id_kopi);
  $("#namakopi").val(namakopi);
  $("#kategori").val(id_kategori);
  $("#deskripsi").val(deskripsi);
  $("#stok").val(stok);
  $("#harga").val(harga);
  $("#id_kategori").val(id_kategori);
  $("#nama_kategori").val(nama_kategori);
});

$(".close").click(function () {
  $("#updateModal").hide();
});

$("#myBtn").click(function () {
  $("#myModal").show();
});

$(".close").click(function () {
  $("#myModal").hide();
});
