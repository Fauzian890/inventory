
$(".update").click(function () {
  $("#updateModal").show();
  var id_kopi = $(this).data('id-kopi');
  var namakopi = $(this).data('namakopi');
  var deskripsi = $(this).data('deskripsi');
  var stok = $(this).data('stok');
  var harga = $(this).data('harga');
  var id_kategori = $(this).data("id-kategori");
  var nama_kategori = $(this).data("nama-kategori");


  var UserID = $(this).data("userid");
  var UserName = $(this).data("username");
  var UserPassword = $(this).data("userpassword");

  console.log(UserName, UserID, UserPassword)

  $("#id_kopi").val(id_kopi);
  $("#namakopi").val(namakopi);
  $("#kategori").val(id_kategori);
  $("#deskripsi").val(deskripsi);
  $("#stok").val(stok);
  $("#harga").val(harga);
  $("#id_kategori").val(id_kategori);
  $("#nama_kategori").val(nama_kategori);
  $("#userID").val(UserID);
  $("#userName").val(UserName);
  $("#userPassword").val(UserPassword);
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
