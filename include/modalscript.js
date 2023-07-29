
$(".update").click(function () {
  $("#updateModal").show();
  var desc = $(this).data("desc");
  var qty = $(this).data("qty");
  var unit = $(this).data("unit");
  var unitprice = $(this).data("uprice");
  var expiry = $(this).data("expiry");
  var prodId = $(this).data("id");
  var id_kategori = $(this).data("id-kategori");
  var nama_kategori = $(this).data("nama-kategori");

  $("#proddesc").val(desc);
  $("#prodqty").val(qty);
  $("#produnit").val(unit);
  $("#prodUprice").val(unitprice);
  $("#expiry").val(expiry);
  $("#ProdId").val(prodId);
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
