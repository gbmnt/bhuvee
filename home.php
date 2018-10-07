<?php 
$title = 'Home';
include 'header.php'; ?>

<nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand mr-auto mt-2 mt-lg-0" href="#">
      <img src="img/logo.png" width="70" height="40" alt="">
      <!-- <img src="https://s3.ap-south-1.amazonaws.com/bhuvee-pic/abc/img.jpg" width="70" height="40" alt=""> -->
    </a>
    <a href="form.php?action=add" class="btn btn-default btn-circle" data-toggle="tooltip" data-placement="bottom"
      title="Add item"><i class="fas fa-plus"></i></a>
  </div>
</nav>
<div class="container mt-3">
  <ul class="list-group" id="productList"></ul>
</div>
<div class="container mt-3">
  <h2>Pending</h2>
  <ul class="list-group" id="pendingList"></ul>
</div>

<script>
  $(document).ready(
    function () {
      $.get(baseUrl + 'getProductList', function (data) {
        var resp = JSON.parse(data)['result'];
        console.log(resp);
        console.log(data);
        for (let element of resp) {
          if (element['url'] === null)
            addItemToPendingList(element['p_name'], element['p_id'])
          else
            addItemToProductList(element['p_name'], element['p_id'], element['url']);
        }
      });

    });

  function addItemToProductList(name, id, url) {
    let item =
      '<li class="list-group-item"><div class="d-flex bd-highlight align-items-center"><div class="p-2 bd-highlight"><img src="' +
      url +
      '" alt="item image" height="50" width="50" class="rounded-circle"></div><div class="p-2 flex-grow-1 bd-highlight"><span class="mr-auto">' +
      name +
      '</span></div><div class="p-2 bd-highlight"><a href="form.php?action=edit&id=' + id +
      '" class="btn transparent" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="material-icons">edit</i></a></div><div class="p-2 bd-highlight"><button type="button" class="btn transparent" data-toggle="tooltip" data-placement="bottom" title="Delete" onclick="deleteItem(' +
      id + ')"><i class="material-icons">delete</i></button></div></div></li>';

    $('#productList').append(item);
  }

  function addItemToPendingList(name, id) {
    let item =
      '<li class="list-group-item"><div class="d-flex bd-highlight align-items-center"><div class="p-2 flex-grow-1 bd-highlight"><span class="mr-auto">' +
      name +
      '</span></div><div class="p-2 bd-highlight"><a href="form.php?action=edit&id=' + id +
      '" class="btn transparent" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="material-icons">edit</i></a></div><div class="p-2 bd-highlight"><button type="button" class="btn transparent" data-toggle="tooltip" data-placement="bottom" title="Delete" onclick="deleteItem(' +
      id + ')"><i class="material-icons">delete</i></button></div></div></li>';

    $('#pendingList').append(item);
  }

  function deleteItem(id) {
    // $('#myModal').modal(options)
    $.ajax({
      url: baseUrl + 'deleteProduct',
      type: 'DELETE',
      success: function (data) {
        location.reload(true);
      },
      data: {
        id: id
      }
    });
  }
</script>
</body>

</html>