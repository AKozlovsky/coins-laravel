$(document).ready(function () {

  var table;
  var data = [];

  if ($("#continents-list-datatable").length > 0) {
    table = $("#continents-list-datatable").DataTable({
      responsive: true,
      'columnDefs': [{
        "orderable": false,
        "targets": [0, 8, 9]
      }]
    });
  };

  $(document).on("click", "#continents-list-datatable tr", function () {
    $(this).find("td").each(function () {
      data.push($(this).text().trim())
    })

    localStorage.setItem("continent", data[0]);
  })
});